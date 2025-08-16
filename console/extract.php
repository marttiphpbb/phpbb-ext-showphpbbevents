<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2025 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Extract php and template events command ext-showphpbbevents:extract
*/

namespace marttiphpbb\showphpbbevents\console;

use marttiphpbb\showphpbbevents\util\generate_tpl_event;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Finder\Finder;
use phpbb\console\command\command;
use phpbb\user;

class extract extends command
{
	const PHP_DATA_FILE = __DIR__ . '/../events_data/php_events.php';
	const PHP_LISTENER_FILE = __DIR__ . '/../event/php_event_listener.php';
	const TPL_DATA_FILE = __DIR__ . '/../events_data/tpl_events.php';
	const ROOT_PATH = __DIR__ . '/../../../../';
	const PATH = __DIR__ . '/../';
	const ACP_DIR = 'adm/style/';
	const PROSILVER_DIR = 'styles/prosilver/template/';
	const ALL_TPL_DIR = 'styles/all/template/';
	const EVENT_DIR = 'event/';

	const TPL_HEADING = <<<'EOT'
<?php

/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2025 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Generated with command ext-showphpbbevents:extract

EOT;

	const TPL_PHP_DATA = <<<'EOT'
* Extracted php events from phpBB core.
*/

return %data%;

EOT;

	const TPL_PHP_LISTENER = <<<'EOT'
*/

namespace marttiphpbb\showphpbbevents\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

class php_event_listener implements EventSubscriberInterface
{
	protected $count_ary = [];

	static public function getSubscribedEvents():array
	{
		return [
%ary%
		];
	}

	public function add(Event $event, $event_name):void
	{
		if (!isset($this->count_ary[$event_name]))
		{
			$this->count_ary[$event_name] = 0;
		}

		$this->count_ary[$event_name]++;
	}

	public function get_count_ary():array
	{
		return $this->count_ary;
	}
}

EOT;

	const TEMPLATE_EVENT_TAG = [
		['<!-- EVENT ', ' -->'],
		['{% EVENT ', ' %}'],
		['{%- EVENT ', ' -%}'],
		['{% EVENT ', ' -%}'],
		['{%- EVENT ', ' %}'],
	];

	const TPL_TPL_DATA = <<<'EOT'
* Extracted template events from docs/events.md and html template files.
*/

return %data%;

EOT;

	public function __construct(user $user)
	{
		parent::__construct($user);
	}

	protected function configure():void
	{
		$this
			->setName('ext-showphpbbevents:extract')
			->setDescription('For Development: Extract events data from local phpBB files and generate listeners')
			->setHelp('This command was created for the development of the marttiphpbb-showphpbbevents extension.')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output):void
	{
		$io = new SymfonyStyle($input, $output);

		$outputStyle = new OutputFormatterStyle('white', 'black', ['bold']);
		$output->getFormatter()->setStyle('v', $outputStyle);

		$outputStyle = new OutputFormatterStyle('white', 'blue', ['bold']);
		$output->getFormatter()->setStyle('f', $outputStyle);

		$finder = new Finder();
		$finder->files();
		$finder->name('*.php');
		$finder->notName('php_exporter.php');
		$finder->contains('dispatcher->');
		$finder->sortByName();
		$finder->in(self::ROOT_PATH);
		$finder->exclude('adm/images');
		$finder->exclude('adm/style');
		$finder->exclude('assets');
		$finder->exclude('cache');
		$finder->exclude('config');
		$finder->exclude('docs');
		$finder->exclude('ext');
		$finder->exclude('files');
		$finder->exclude('images');
		$finder->exclude('language');
		$finder->exclude('store');
		$finder->exclude('styles');
		$finder->exclude('vendor');

		if (!$finder->hasResults())
		{
			$io->writeln('<info>No php events found</>');
			return;
		}

		$file_count = 0;
		$event_count = 0;
		$line_num = 0;
		$c_open = false;
		$desc_en = false;
		$desc_ary = [];
		$event_data = [];
		$data = [];

		foreach ($finder as $file)
		{
			$file_count++;
			$filename = $file->getRelativePathname();
			$io->write('<comment>' . $file_count . ':</> ');
			$io->writeln('<info>' . $filename . '</>');
			$line_num = 0;
			$lines = explode("\n", $file->getContents());
			$c_open = false;
			$desc_en = false;

			foreach ($lines as $index => $line)
			{
				$line_num = $index + 1;

				$t_line = trim($line);

				if (str_contains($t_line, '/**'))
				{
					$event_data = [];
					$desc_ary = [];
					$c_open = true;
					$desc_en = true;
					continue;
				}

				if ($c_open)
				{
					if (str_contains($t_line, '*/'))
					{
						if (!isset($event_data['name']))
						{
							$event_data = [];
							$desc_ary = [];
						}
						$c_open = false;
						continue;
					}

					if ($desc_en)
					{
						if (str_starts_with($t_line, '*'))
						{
							$d_line = ltrim($t_line, ' *');
							$d_line = trim($d_line);
							if (empty($d_line) || str_starts_with($d_line, '@'))
							{
								if (count($desc_ary))
								{
									$description = implode(' ', $desc_ary);
									$event_data['description'] = $description;
									$event_data['description_wrapped'] = explode('%break%', wordwrap($description, 50, '%break%'));
								}
							}
							else
							{
								$desc_ary[] = $d_line;
								continue;
							}
						}
					}

					$desc_ary = [];
					$desc_en = false;

					if (str_contains($t_line, '@event'))
					{
						$e_ary = explode('@event', $t_line);
						$event_data['name'] = trim($e_ary[1]);
						$event_data['tooltip_id'] = 'stt_' . hash('crc32b', $event_data['name']);
						continue;
					}

					if (str_contains($t_line, '@var'))
					{
						$e_ary = explode('@var', $t_line);
						$str = trim($e_ary[1]);
						// convert tabs to spaces
						$str = strtr($str, [
							"\n"	=> ' ',
							"\r"	=> ' ',
							"\t"	=> ' ',
							"\v"  => ' ',
							"\0"	=> ' ',
						]);
						// replace multiple spaces with one space
						$str = preg_replace('/\s+/', ' ', $str);
						$e_ary = explode(' ', $str);
						$e_type = array_shift($e_ary);
						$e_name = array_shift($e_ary);
						$e_desc = implode(' ', $e_ary);
						if (!isset($event_data['vars'])){
							$event_data['vars'] = [];
						}
						$event_data['vars'][$e_name] = [
							'type'	=> $e_type,
							'description'	=> $e_desc,
						];

						continue;
					}

					if (str_contains($t_line, '@since'))
					{
						$e_ary = explode('@since', $t_line);
						$event_data['since'] = trim($e_ary[1]);
						continue;
					}

					// both "@change" and "@changed" are used
					if (str_contains($t_line, '@change'))
					{
						if (str_contains($t_line, '@changed'))
						{
							$e_ary = explode('@changed', $t_line);
						}
						else
						{
							$e_ary = explode('@change', $t_line);
						}

						$str = trim($e_ary[1]);
						// convert tabs to spaces
						$str = strtr($str, [
							"\n"	=> ' ',
							"\r"	=> ' ',
							"\t"	=> ' ',
							"\v"  => ' ',
							"\0"	=> ' ',
						]);
						// replace multiple spaces with one space
						$str = preg_replace('/\s+/', ' ', $str);
						$e_ary = explode(' ', $str);
						$e_at = array_shift($e_ary);
						$e_desc = implode(' ', $e_ary);
						if (!isset($event_data['changes'])){
							$event_data['changes'] = [];
						}
						$event_data['changes'][$e_at] = $e_desc;

						continue;
					}

					if (str_contains($t_line, '@deprecated'))
					{
						$event_data['deprecated'] = true;
						continue;
					}

					continue;
				}



				/////// ***** /** */

				if (str_contains($t_line, 'dispatcher->'))
				{
					$event_count++;
					$e_ary = [];
					if (str_contains($t_line, 'dispatcher->dispatch(\''))
					{
						$e_ary = explode('->dispatch(\'', $t_line);
					}
					else
					{
						$e_ary = explode('->trigger_event(\'', $t_line);
					}

					[$name] = explode('\'', $e_ary[1]);
					$io->write('<f>line ' . $line_num . ':</> ');
					$io->writeln('<v>' . $name . '</>');
					$pre_loc = [];
					if (isset($data[$name]))
					{
						$pre_loc = $data[$name]['locations'];
					}

					$locations = [...$pre_loc, $filename => $line_num];
					$data[$name] = [
						'locations'	=> $locations,
						...$event_data,
					];

					$event_data = [];
				}
			}
		}

		$io->writeln('<info>file count: ' . $file_count . '</info>');
		$io->writeln('<info>event count: ' . $event_count . '</info>');

		$str_data = var_export($data, true);
		$data_template = self::TPL_HEADING . self::TPL_PHP_DATA;
		$data_content = str_replace('%data%', $str_data, $data_template);
		file_put_contents(self::PHP_DATA_FILE, $data_content);

		$str_rows = '';

		foreach ($data as $name => $ary)
		{
			$str_rows .= "\t\t\t'$name' => 'add',\n";
		}
		$listener_template = self::TPL_HEADING . self::TPL_PHP_LISTENER;
		$listener_content = str_replace('%ary%', $str_rows, $listener_template);

		file_put_contents(self::PHP_LISTENER_FILE, $listener_content);

		/**
		 * Read template events data into PHP array
		 */

		$events = [];
		$events_md = self::ROOT_PATH . '/docs/events.md';
		$event = null;
		$read_params = false;
		$read_locations = false;
		$read_changes = false;
		$read_description = false;
		$line_num = 0;

		if ($handle = fopen($events_md, 'r'))
		{
			while (($line = fgets($handle)) !== false)
			{
				$line_num++;
				$t_line = trim($line);

				if (!$t_line)
				{
					$event = null;
					$read_params = false;
					$read_description = false;
					$read_changes = false;
					$read_locations = false;
					continue;
				}

				if (str_starts_with($t_line, '==='))
				{
					$read_params = true;
					continue;
				}

				if (!isset($event))
				{
					$event = $t_line;
					$events[$event] = [];
					$events[$event]['tooltip_id'] = 'stt_' . hash('crc32b', $event);
					continue;
				}

				if (!$read_params)
				{
					continue;
				}

				if (str_starts_with($t_line, '* Locations:'))
				{
					$read_locations = true;
					continue;
				}

				if ($read_locations && str_starts_with($t_line, '+ '))
				{
					$l_line = trim($t_line, '+ ');

					if (!isset($events[$event]['locations']))
					{
						$events[$event]['locations'] = [];
					}

					$len = 0;

					if (strpos($l_line, self::ACP_DIR) === 0)
					{
						$len = strlen(self::ACP_DIR);
					}
					else if (strpos($l_line, self::PROSILVER_DIR) === 0)
					{
						$len = strlen(self::PROSILVER_DIR);
					}
					else
					{
						$io->write('<error>line ' . $line_num . 'docs/events.md ' . $l_line . '</> ');
						return;
					}

					[$loc] = explode(' ', substr($l_line, $len));

					// false because no line number yet
					$events[$event]['locations'][$loc] = [];
					continue;
				}
				else
				{
					$read_locations = false;
				}

				if (str_starts_with($t_line, '* Location:'))
				{
					if (!isset($events[$event]['locations']))
					{
						$events[$event]['locations'] = [];
					}
					$len = strlen('* Location:');
					$l_line = trim(substr($t_line, $len));
					$len = 0;

					if (strpos($l_line, self::ACP_DIR) === 0)
					{
						$len = strlen(self::ACP_DIR);
					}
					else if (strpos($l_line, self::PROSILVER_DIR) === 0)
					{
						$len = strlen(self::ACP_DIR);
					}
					else
					{
						$io->write('<error>line ' . $line_num . 'docs/events.md ' . $l_line . '</> ');
						return;
					}

					[$loc] = explode(' ', substr($l_line, $len));

					// no line numbers yet
					$events[$event]['locations'][$loc] = [];
					continue;
				}

				if (str_starts_with($t_line, '* Since:'))
				{
					$len = strlen('* Since:');
					$since = trim(substr($t_line, $len));
					$events[$event]['since'] = $since;
					continue;
				}

				if (str_starts_with($t_line, '* Changes:'))
				{
					$read_changes = true;
					continue;
				}

				if ($read_changes && str_starts_with($t_line, '+ '))
				{
					$ch_line = trim($t_line, '+ ');

					if (!isset($events[$event]['changes']))
					{
						$events[$event]['locations'] = [];
					}

					$e_ary = explode(' ', $ch_line);
					$at = array_shift($e_ary);
					$desc = implode(' ', $e_ary);

					$events[$event]['changes'][$at] = $desc;
					continue;
				}
				else
				{
					$read_changes = false;
				}

				if (str_starts_with($t_line, '* Changed:'))
				{
					$len = strlen('* Changed:');
					$ch_line = trim(substr($t_line, $len));

					if (!isset($events[$event]['changes']))
					{
						$events[$event]['changes'] = [];
					}

					$e_ary = explode(' ', $ch_line);
					$at = array_shift($e_ary);
					$desc = implode(' ', $e_ary);

					$events[$event]['changes'][$at] = $desc;
					continue;
				}

				if (str_starts_with($t_line, '* Purpose:'))
				{
					$len = strlen('* Purpose:');
					$description = trim(substr($t_line, $len));
					$events[$event]['description'] = $description;
					continue;
				}

				if ($read_description)
				{
					$events[$event]['description'] .= ' ';
					$events[$event]['description'] .= trim($t_line);
				}
			}

			fclose($handle);
		}
		else
		{
			$io->write('<error>Could not open docs/events.md</> ');
			return;
		}

		$io->writeln('');
		$io->write('<comment>Template events:</> ');
		$io->writeln('<info>' . count($events) . '</>');

		/**
		 * wrap descriptions
		 */

		foreach ($events as &$d)
		{
			if (isset($d['description']))
			{
				$d['description_wrapped'] = explode('%break%', wordwrap($d['description'], 50, '%break%'));
			}
		}

		/**
		 * Extract Template event line numbers
		 */

		$t_finder = new Finder();
		$t_finder->files();
		$t_finder->name('*.html');
		$t_finder->contains('EVENT');
		$t_finder->sortByName();
		$t_finder->in(self::ROOT_PATH . '/' . self::ACP_DIR);
		$t_finder->in(self::ROOT_PATH . '/' . self::PROSILVER_DIR);

		if (!$t_finder->hasResults())
		{
			$io->writeln('<error>No template events found</>');
			return;
		}

		$file_count = 0;
		$line_num = 0;
		$head_tag_open = false;
		$select_tag_open = false;
		$next_first_in_body = false;
		$name_ary = [];
		$prev_event = null;
		$deferred_head_events = [];

		foreach ($t_finder as $file)
		{
			$deferred_head_events = [];
			$next_first_in_body = false;
			$file_count++;
			$filename = $file->getRelativePathname();
			$io->write('<comment>' . $file_count . ':</> ');
			$io->writeln('<info>' . $filename . '</>');
			$line_num = 0;
			$lines = explode("\n", $file->getContents());

			foreach ($lines as $index => $line)
			{
				$line_num = $index + 1;

				$t_line = trim($line);

				if (str_contains($t_line, '<head>'))
				{
					$head_tag_open = true;
				}

				if (str_contains($t_line, '</head>'))
				{
					$head_tag_open = false;
				}

				if (str_contains($t_line, '<body'))
				{
					$next_first_in_body = true;
				}

				if (str_contains($t_line, '</body>'))
				{
					if (isset($prev_event))
					{
						if (!isset($events[$prev_event]['in_head']))
						{
							$events[$prev_event]['last_in_body'] = true;
						}
					}
					unset($prev_event);
				}

				if (str_contains($t_line, '<select'))
				{
					$select_tag_open = true;
				}

				if (str_contains($t_line, '</select>'))
				{
					$select_tag_open = false;
				}

				if (!str_contains($t_line, 'EVENT'))
				{
					continue;
				}

				$name_ary = $this->get_tpl_event_names($t_line);

				if (!isset($name_ary))
				{
					$io->writeln('<error>' . $filename . ', line ' . $line_num . '</> ');
					$io->writeln('<error>EVENT name not detected</> ');
					continue;
				}

				foreach ($name_ary as $event)
				{
					if (!isset($events[$event]))
					{
						$io->writeln('<error>' . $filename . ', line ' . $line_num . '</> ');
						$io->writeln('<error>EVENT ' . $event . ' not found in events.md</> ');
						continue;
					}

					if ($next_first_in_body)
					{
						$events[$event]['first_in_body'] = true;
						$next_first_in_body = false;
					}

					if ($select_tag_open)
					{
						$events[$event]['is_select_option'] = true;
					}

					if ($head_tag_open)
					{
						if (!count($deferred_head_events))
						{
							$events[$event]['include_css'] = true;
							$events[$event]['first_in_head'] = true;
						}
						$deferred_head_events[] = $event;
						$events[$event]['in_head'] = true;
					}
					else
					{
						if (count($deferred_head_events))
						{
							$events[$event]['deferred_head_events'] = $deferred_head_events;
						}
						$deferred_head_events = [];
					}

					if (!isset($events[$event]['locations']))
					{
						$io->writeln('<error>' . $filename . ', line ' . $line_num . '</> ');
						$io->writeln('<error>no locations array set for EVENT ' . $event . ' from events.md</> ');
						continue;
					}

					$io->write('<f>line ' . $line_num . ', EVENT :</> ');
					$io->writeln('<v>' . $event . '</>');

					if (!isset($events[$event]['locations'][$filename]))
					{
						$io->writeln('<error>' . $filename . ', line ' . $line_num . '</> ');
						$io->writeln('<error>Filename not set for EVENT ' . $event . ' from events.md</> ');
						continue;
					}

					$events[$event]['locations'][$filename][] = $line_num;

					$prev_event = $event;
				}
			}
		}

		$io->writeln('<info>file count: ' . $file_count . '</info>');
		$io->writeln('<info>event count: ' . count($events) . '</info>');

		$str_data = var_export($events, true);
		$data_template = self::TPL_HEADING . self::TPL_TPL_DATA;
		$data_content = str_replace('%data%', $str_data, $data_template);
		file_put_contents(self::TPL_DATA_FILE, $data_content);

		$gen_ev = new generate_tpl_event();

		foreach($events as $name => $d)
		{
			$content = $gen_ev->get($name);

			if (!isset($content))
			{
				$io->writeln('<error>No content for event : ' . $name . '</>');
				continue;
			}

			$ev_file = self::PATH;
			$ev_file .= str_starts_with($name, 'acp_') ? self::ACP_DIR : self::ALL_TPL_DIR;
			$ev_file .= self::EVENT_DIR;
			$ev_file .= $name;
			$ev_file .= '.html';

			file_put_contents($ev_file, $content);
		}

		$io->writeln('<f>events on multiple locations</> ');

		foreach ($events as $name => $d)
		{
			if (count($d['locations']) > 1)
			{
				$io->writeln('<v>' . $name . '</>');
			}
		}

		return;
	}

	private function get_tpl_event_names(
		string $line
	):array
	{
		$t_line = $line;
		$start = 0;
		$name_ary = [];

		while (str_contains($t_line, 'EVENT'))
		{
			foreach (self::TEMPLATE_EVENT_TAG as [$open, $close])
			{
				$start = strpos($t_line, $open);

				if ($start === false)
				{
					continue;
				}

				$start += strlen($open);

				$end = strpos($t_line, $close, $start);

				if ($end === false)
				{
					continue;
				}

				$name_ary[] = trim(substr($t_line, $start, $end - $start));
				$t_line = substr($t_line, $end + strlen($close));
				break;
			}
		}

		return $name_ary;
	}
}
