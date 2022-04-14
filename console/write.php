<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2022 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use phpbb\console\command\command;
use phpbb\user;
use marttiphpbb\showphpbbevents\service\events_cache;
use marttiphpbb\showphpbbevents\service\events_store;

class write extends command
{
	protected $events_cache;
	protected $events_store;

	public function __construct(user $user, events_cache $events_cache, events_store $events_store)
	{
		$this->events_cache = $events_cache;
		$this->events_store = $events_store;
		parent::__construct($user);
	}

	protected function configure():void
	{
		$this
			->setName('ext-showphpbbevents:write')
			->setDescription('For Development (step 3): Write events_data.json from cache (use ext-showphpbbevents:scrape and ext-showphpbbevents:extract first).')
			->setHelp('This command was created for the development of the marttiphpbb-showphpbbevents extension.')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output):void
	{
		$io = new SymfonyStyle($input, $output);

		$outputStyle = new OutputFormatterStyle('white', 'black', ['bold']);
		$output->getFormatter()->setStyle('v', $outputStyle);

		$events = $this->events_cache->get_all();

		if (!$events)
		{
			$io->writeln('<info>no events were found in cache.</>');
			return;
		}

		$this->events_store->set_all($events);

		$io->writeln('<info>file written: </><v>events_data.json</>');
	}
}
