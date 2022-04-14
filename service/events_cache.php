<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2022 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\service;

use phpbb\cache\driver\driver_interface as cache;
use marttiphpbb\showphpbbevents\service\events_store;

class events_cache
{
	const LOCATION = '_marttiphpbb_showphpbbevents_events';

    protected $cache;
	protected $events_store;
    protected $events = [];

	public function __construct(cache $cache, events_store $events_store)
	{
		$this->cache = $cache;
		$this->events_store = $events_store;
	}

    private function load():void
    {
		if (!$this->events)
		{
			$this->events = $this->cache->get(self::LOCATION);
		}

		if (!$this->events)
		{
			$events = $this->events_store->get_all();
			$this->set_all($events);
		}
    }

    private function write():void
    {
		$this->cache->put(self::LOCATION, $this->events);
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
