<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2019 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\service;

class events_store
{
	const FILE = __DIR__ . '/../events_data.json';

    protected $events = [];

	public function __construct()
	{
	}

    private function load():void
    {
		if (!$this->events)
		{
			$events = file_get_contents(self::FILE);
			$this->events = json_decode($events, true);
		}
	}

	private function write():void
	{
		file_put_contents(self::FILE, json_encode($this->events, JSON_PRETTY_PRINT));
	}

    public function set_all(array $events):void
    {
		$this->events = $events;
		$this->write();
	}

	public function get_all():array
	{
		$this->load();
		return $this->events;
	}

	public function get(string $type, string $event_name):array
	{
		$this->load();
		return $this->events[$type][$event_name];
	}

	public function set(string $type, string $event_name, array $event_data):void
	{
		$this->load();
		$this->events[$type][$event_name] = $event_data;
		$this->write();
	}

	public function mset(string $type, string $event_name, string $key, $value):void
	{
		$this->load();
		$this->events[$type][$event_name][$key] = $value;
		$this->write();
	}
}
