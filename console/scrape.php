<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2022 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use phpbb\console\command\command;
use phpbb\user;
use marttiphpbb\showphpbbevents\service\events_cache;
use Goutte\Client;

class scrape extends command
{
	const URL = 'https://wiki.phpbb.com/Event_List';
	const URL_HI = 'https://wiki.phpbb.com/Release_Highlights/';

	protected $events_cache;

	public function __construct(user $user, events_cache $events_cache)
	{
		$this->events_cache = $events_cache;
		parent::__construct($user);
	}

	protected function configure():void
	{
		$this
			->setName('ext-showphpbbevents:scrape')
			->setDescription('For Development (step 1): Scrape events data from ' . self::URL . ' and load into cache.')
			->setHelp('This command was created for the development of the marttiphpbb-showphpbbevents extension.')
			->addArgument('version', InputArgument::OPTIONAL, 'Only scrape events from newest version in "Release Highlights" (' . self::URL_HI . ').')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output):void
	{
		$version = $input->getArgument('version');
		$events = [];

		$io = new SymfonyStyle($input, $output);

		$outputStyle = new OutputFormatterStyle('white', 'black', ['bold']);
		$output->getFormatter()->setStyle('v', $outputStyle);

		$client = new Client();

		if ($version)
		{
			$crawler = $client->request('GET', self::URL_HI . $version);
			$events = $this->events_cache->get_all();

			$io->writeln([
				'',
				'<info>Found in cache.</>',
				'<info>=================</>',
				'<comment>php events: </><v>' . count($events['php']) . '</>',
				'<comment>template events: </><v>' . count($events['template']) . '</>',
				'<comment>acp template events: </><v>' . count($events['template_acp']) . '</>',
				'',
			]);
		}
		else
		{
			$crawler = $client->request('GET', self::URL);
		}

		$table = $crawler->filter('table')->filter('tr')->each(function ($tr, $i) {
			return $tr->filter('td')->each(function ($td, $i) {
				return trim($td->text());
			});
		});

		foreach ($table as $t)
		{
			if (!is_array($t) || !count($t))
			{
				continue;
			}

			$t = array_map('trim', $t);

			$files = explode(' ', $t[1]);

			$files = array_map('trim', $files);

			$loc = array_fill_keys($files, false);

			if (strpos($t[0], 'core.') === 0)
			{
				$events['php'][$t[0]] = [
					'loc'		=> $loc,
					'vars'		=> $t[2],
					'since'		=> $t[3],
					'explain'	=> $t[4],
				];

				continue;
			}

			if (strpos($t[0], 'acp_') === 0)
			{
				$events['template_acp'][$t[0]] = [
					'loc'		=> $loc,
					'since'		=> $t[2],
					'explain'	=> $t[3],
				];

				continue;
			}

			$events['template'][$t[0]] = [
				'loc'		=> $loc,
				'since'		=> $t[2],
				'explain'	=> $t[3],
			];
		}

		$this->events_cache->set_all($events);

		$io->writeln([
			'',
			'<info>Written to cache.</>',
			'<info>=================</>',
			'<comment>php events: </><v>' . count($events['php']) . '</>',
			'<comment>template events: </><v>' . count($events['template']) . '</>',
			'<comment>acp template events: </><v>' . count($events['template_acp']) . '</>',
			'',
		]);
	}
}
