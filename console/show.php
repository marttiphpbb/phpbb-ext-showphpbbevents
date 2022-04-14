<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2022 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;
use phpbb\console\command\command;
use phpbb\user;
use marttiphpbb\showphpbbevents\service\events_cache;
use marttiphpbb\showphpbbevents\service\events_store;

class show extends command
{
	protected $events_cache;
	protected $events_store;

	public function __construct(
		user $user,
		events_cache $events_cache,
		events_store $events_store
	)
	{
		$this->events_cache = $events_cache;
		$this->events_store = $events_store;
		parent::__construct($user);
	}

	protected function configure():void
	{
		$this
			->setName('ext-showphpbbevents:show')
			->setDescription('For Development: Show data in cache from a event.')
			->setHelp('This command was created for the development of the marttiphpbb-showphpbbevents extension.')
			->addArgument('name', InputArgument::REQUIRED, 'The name of the event')
			->addOption('file', 'f', InputOption::VALUE_NONE, 'Show data from events_data.json file instead of cache.')
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output):void
	{
		$io = new SymfonyStyle($input, $output);

		$name = $input->getArgument('name');
		$from_store = $input->getOption('file');

		$type = 'template';

		if (strpos($name, 'core.') === 0)
		{
			$type = 'php';
		}

		if (strpos($name, 'acp_') === 0)
		{
			$type = 'template_acp';
		}

		if ($from_store)
		{
			$event = $this->events_store->get($type, $name);
		}
		else
		{
			$event = $this->events_cache->get($type, $name);
		}

		$io->writeln(['', '<comment>Type: ' . $type, '']);

		$io->writeln([json_encode($event, JSON_PRETTY_PRINT), '', '']);
	}
}
