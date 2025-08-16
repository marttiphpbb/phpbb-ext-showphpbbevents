<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2025 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\event\data as event;
use phpbb\request\request;
use phpbb\user;
use marttiphpbb\showphpbbevents\event\php_event_listener;

class listener implements EventSubscriberInterface
{
	const PHP_EVENTS = __DIR__ . '/../events_data/php_events.php';

	private request $request;
	private user $user;
	private php_event_listener $php_event_listener;
	private array $php_events = [];

	/**
	 * @param request $request
	*/
	public function __construct(
		request $request,
		user $user,
		php_event_listener $php_event_listener
	)
	{
		$this->request = $request;
		$this->user = $user;
		$this->php_event_listener = $php_event_listener;
		$this->php_events = require(self::PHP_EVENTS);
	}

	static public function getSubscribedEvents():array
	{
		return [
			'core.append_sid'		=> 'core_append_sid',
			'core.twig_environment_render_template_before'
				=> ['core_twig_environment_render_template_before', -1],
		];
	}

	public function core_append_sid(event $event):void
	{
		$params = $event['params'];

		if (is_string($params))
		{
			if (strpos($params, 'showphpbbevents') !== false)
			{
				return;
			}
		}

		$show = $this->request->variable('showphpbbevents', 'hidden');

		if (!in_array($show, ['small', 'full']))
		{
			return;
		}

		if (is_string($params))
		{
			if ($params !== '')
			{
				$params .= '&';
			}

			$params .= 'showphpbbevents=' . $show;
		}
		else
		{
			if ($params === false)
			{
				$params = [];
			}

			$params['showphpbbevents'] = $show;
		}

		$event['params'] = $params;
	}

	public function core_twig_environment_render_template_before(event $event):void
	{
		$context = $event['context'];

		$show = $this->request->variable('showphpbbevents', 'hidden');

		$page = $this->user->page['script_path'] . $this->user->page['page_name'];
		$query_string = $this->user->page['query_string'];

		$query_string = str_replace([
			'&showphpbbevents=small',
			'&showphpbbevents=full',
			'&showphpbbevents=hidden',
		], '', $query_string);

		$query_string = str_replace([
			'showphpbbevents=small',
			'showphpbbevents=full',
			'showphpbbevents=hidden',
		], '', $query_string);

		$query_string = trim($query_string, '&');
		$query_string .= $query_string ? '&' : '';

		$php_count_ary = $this->php_event_listener->get_count_ary();
		$php_events = [];

		if (in_array($show, ['full', 'small']))
		{
			foreach ($php_count_ary as $name => $count)
			{
				$php_events[$name] = $this->php_events[$name];
				$php_events[$name]['count'] = $count;
			}
		}

		$template = [
			'show'		=> $show,
			'u_hide'	=> append_sid($page, $query_string . 'showphpbbevents=hidden'),
			'u_small'	=> append_sid($page, $query_string . 'showphpbbevents=small'),
			'u_full'	=> append_sid($page, $query_string . 'showphpbbevents=full'),
			'php'			=> $php_events,
		];

		$context['marttiphpbb_showphpbbevents'] = $template;
		$event['context'] = $context;
	}
}
