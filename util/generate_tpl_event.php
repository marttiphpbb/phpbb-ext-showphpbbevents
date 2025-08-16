<?php
/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2025 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\showphpbbevents\util;

class generate_tpl_event
{
	const TPL_DATA_FILE = __DIR__ . '/../events_data/tpl_events.php';
	const DIR_PROSILVER = 'styles/prosilver/template/';
	const DIR_ACP = 'adm/style/';
	const DIR_EVENT = 'event/';

	const LINK_BASE = 'https://github.com/phpbb/phpbb/tree/prep-release-3.3.15/phpBB/';
	const LINK_LINE = '#L';

	const INCLUDECSS = <<<'EOT'
{%- INCLUDECSS '@marttiphpbb_showphpbbevents/tippy.css' -%}
{%- INCLUDECSS '@marttiphpbb_showphpbbevents/showphpbbevents.css' -%}

EOT;

	const INCLUDEJS = <<<'EOT'
{% if not definition.INCLUDED_POPPERJS %}
	{% INCLUDEJS '@marttiphpbb_showphpbbevents/js/popper.js' %}
	{% DEFINE INCLUDED_POPPERJS = true %}
{% endif %}
{% if not definition.INCLUDED_TIPPYJS %}
	{% INCLUDEJS '@marttiphpbb_showphpbbevents/js/tippy-bundle.umd.js' %}
	{% DEFINE INCLUDED_TIPPYJS = true %}
{% endif %}
{%- INCLUDEJS '@marttiphpbb_showphpbbevents/js/showphpbbevents.js' -%}

EOT;

	const IF_FULL = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show == 'full' -%}
  %content%
{%- endif -%}
EOT;

	const IF_SMALL = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show == 'small' -%}
  %content%
{%- endif -%}
EOT;

	const IF_HIDDEN_OR_SMALL = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show != 'full' -%}
  %content%
{%- endif -%}
EOT;

	const IF_HIDDEN_OR_FULL = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show != 'small' -%}
  %content%
{%- endif -%}
EOT;

	const IF_HIDDEN = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show == 'hidden' -%}
  %content%
{%- endif -%}
EOT;

	const IF_SHOW = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show != 'hidden' -%}
  %content%
{%- endif -%}
EOT;

	const IF_FULL_ELSE = <<<'EOT'
{%- if marttiphpbb_showphpbbevents.show == 'full' -%}
	%content_full%
{%- else -%}
  %content_small%
{%- endif -%}
EOT;

	const BTN_HIDE = <<<'EOT'
<a class="showphpbbevents-hide" href="{{- marttiphpbb_showphpbbevents.u_hide -}}" title="Hide the phpBB events" rel="nofollow">
	Hide
</a>
EOT;

	const BTN_SHOW_FULL = <<<'EOT'
<a class="showphpbbevents-show" href="{{- marttiphpbb_showphpbbevents.u_full -}}" title="Show the phpBB events with full names" rel="nofollow">
	Show
</a>
EOT;

	const BTN_SHOW_SMALL = <<<'EOT'
<a class="showphpbbevents-show" href="{{- marttiphpbb_showphpbbevents.u_small -}}" title="Show the phpBB events with a small badge" rel="nofollow">
	Small
</a>
EOT;

	const IF_SCRIPT_NAME = <<<'EOT'
{%- if SCRIPT_NAME == '%script_name%' -%}
  %content%
{%- endif -%}
EOT;

	const IF_ELSE_SCRIPT_NAME = <<<'EOT'
{%- if SCRIPT_NAME == '%script_name%' -%}
  %if_content%
{%- else -%}
	%else_content%
{%- endif -%}
EOT;

	const EV = <<<'EOT'
<a class="showphpbbevents" href="%link%" data-showphpbbevents-tpl="%tooltip_id%">
  %label%
</a>

EOT;

	const EV_HEAD = <<<'EOT'
<a class="showphpbbevents-head" href="%link%" data-showphpbbevents-tpl="%tooltip_id%">
	%label%
</a>

EOT;

	const EV_SELECT_OPTION = <<<'EOT'
<option value="%name%" data-showphpbbevents-option="%data_option%" data-showphpbbevents-label="%label%">
  [ %label% ]
</option>

EOT;

	const EV_HEAD_COMMENT = <<<'EOT'
{#- Rendering of the head events is deferred to the first event in the body -#}

EOT;

	const EV_COMMENT = <<<'EOT'
{#- This file was generated with the ext-showphpbbevents:generate command. -#}

EOT;

	const PHP_EVENTS = <<<'EOT'
<br>
<table class="showphpbbevents-php">
	<thead>
		<tr>
			<th>PHP Event</th>
			<th>Count</th>
			<th>Since</th>
			<th>Filename (line)</th>
		</tr>
	</thead>
	<tbody>
	{%- for name, e in marttiphpbb_showphpbbevents.php -%}
		<tr data-showphpbbevents-php="{{- e.tooltip_id -}}"{%- if e.deprecated is defined %} class="showphpbbevents-deprecated"{%- endif -%}>
			<td>{{- name -}}</td>
			<td>{{- e.count -}}</td>
			<td>{{- e.since -}}</td>
			<td>
			{%- for file, line in e.locations -%}
				{%- if line -%}
					<a href="%link_base%{{- file -}}%link_line%{{- line -}}">
						{{- file }} ({{ line -}})
					</a>
				{%- else -%}
					{{- file -}}
				{%- endif -%}
				{%- if not loop.last -%}<br>{%- endif -%}
			{%- endfor -%}
			</td>
		</tr>
	{%- endfor -%}
	</tbody>
</table>

{%- for name, e in marttiphpbb_showphpbbevents.php -%}
	<div id="{{- e.tooltip_id -}}" style="display: none;">
		<div class="showphpbbevents-tt{%- if e.deprecated is defined %} showphpbbevents-deprecated{%- endif -%}">
			<p class="showphpbbevents-name">{{- name -}}</p>
			<p class="showphpbbevents-since">{{ e.since -}}</p>
			{%- for file, line in e.locations -%}
				{%- if line -%}
					<p class="showphpbbevents-loc">
						<a href="%link_base%{{- file -}}%link_line%{{- line -}}">
							{{- file }} ({{- line -}})
						</a>
					</p>
				{%- else -%}
					<p class="showphpbbevents-loc">
						<a href="%link_base%{{- file -}}%link_line%{{- line -}}">
							{{- file }} ({{- line -}})
						</a>
					</p>
				{%- endif -%}
			{%- endfor -%}
			{%- if e.vars|length -%}
				<table>
					<tbody>
						{%- for var_name, v in e.vars -%}
							<tr>
								<td>
									{{- v.type -}}
								</td>
								<td>
									{{- var_name -}}
								</td>
							</tr>
						{%- endfor -%}
					</tbody>
				</table>
			{%- endif -%}
			{%- for desc in e.description_wrapped -%}
				<p class="showphpbbevents-desc">
					{{- desc -}}
				</p>
			{%- endfor -%}
			{%- if e.changes is defined -%}
				<p class="showphpbbevents-changes">
				  Changes:
					{%- for change, change_desc in e.changes -%}
						&nbsp;
						{{- change -}}
						{%- if not loop.last -%},{%- endif -%}
					{%- endfor -%}
				</p>
			{%- endif -%}
			{%- if e.deprecated is defined -%}
				<p class="showphpbbevents-deprecated">
				  DEPRECATED
				</p>
			{%- endif -%}
		</div>
	</div>
{%- endfor -%}

EOT;

const TOOLTIP_TPL_EVENT = <<<'EOT'
<div id="%tooltip_id%" style="display: none;">
	<div class="showphpbbevents-tt">
		<p class="showphpbbevents-name">
			%name%
		</p>
		<p class="showphpbbevents-since">
			%since%
		</p>
		%locations%
		<p class="showphpbbevents-desc">
			%description%
		</p>
		%changes%
	</div>
</div>

EOT;

const TOOLTIP_CHANGES = <<<'EOT'
<p class="showphpbbevents-changes">
	Changes: %content%
</p>

EOT;

const TOOLTIP_LOCATION = <<<'EOT'
<p class="showphpbbevents-loc">
	<a href="%link%">
		%indicator% %label%
	</a>
</p>

EOT;

	const IND = '&#9654;&nbsp;';

	const IND_SCRIPT_NAME = <<<'EOT'
{%- if SCRIPT_NAME == '%script_name%' -%}
  &#9654;&nbsp;
{%- else -%}
  &nbsp;&nbsp;
{%- endif -%}
EOT;

	private array $tpl_events = [];

	public function __construct(){
		$this->tpl_events = require(self::TPL_DATA_FILE);
	}

	public function get(string $name):string|null
	{
		if (!isset($this->tpl_events[$name]))
		{
			return null;
		}

		$d = $this->tpl_events[$name];

		$eva = [];
		$evc = [];
		$eva[] = self::EV_COMMENT;

		if (isset($d['in_head']))
		{
			$eva[] = self::EV_HEAD_COMMENT;
			if (isset($d['include_css']))
			{
				$eva[] = self::INCLUDECSS;
			}

			return implode("\n", $eva);
		}

		if (isset($d['first_in_body']))
		{
			$eva[] = str_replace('%content%', self::BTN_HIDE, self::IF_SHOW);
			$eva[] = str_replace('%content%', self::BTN_SHOW_FULL, self::IF_HIDDEN_OR_SMALL);
			$eva[] = str_replace('%content%', self::BTN_SHOW_SMALL, self::IF_HIDDEN_OR_FULL);
		}

		/** begin cond */

		if (isset($d['deferred_head_events']))
		{
			foreach ($d['deferred_head_events'] as $d_event)
			{
				$evc[] = $this->get_ev_badge($d_event);
			}
		}

		$evc[] = $this->get_ev_badge($name);

		if (isset($d['last_in_body']))
		{
			$evc[] = str_replace([
				'%link_base%', '%link_line%',
			], [
				self::LINK_BASE, self::LINK_LINE,
			], self::PHP_EVENTS);

			foreach ($this->tpl_events as $name => $ev)
			{
				$changes = '';

				if (isset($ev['changes']))
				{
					$changes = str_replace(
						'%content%',
						implode(', ', array_keys($ev['changes'])),
						self::TOOLTIP_CHANGES);
				}

				$locations = [];


				foreach ($ev['locations'] as $file => $lines)
				{
					$indicator = self::IND;

					if (count($ev['locations']) > 1)
					{
						[$script_name] = explode('_', $file);
						$indicator = str_replace('%script_name%', $script_name, self::IND_SCRIPT_NAME);
					}

					$label = $file . ' (' . implode(', ', $lines) . ')';

					$link = self::LINK_BASE;
					$link .= str_starts_with($name, 'acp_') ? self::DIR_ACP : self::DIR_PROSILVER;
					$link .= $file . self::LINK_LINE . $lines[0];

					$locations[] = str_replace([
						'%link%',
						'%label%',
						'%indicator%',
					], [
						$link,
						$label,
						$indicator,
					], self::TOOLTIP_LOCATION);
				}

				$evc[] = str_replace([
					'%tooltip_id%',
					'%name%',
					'%since%',
					'%locations%',
					'%description%',
					'%changes%',
				], [
					$ev['tooltip_id'],
					$name,
					$ev['since'],
					implode("\n", $locations),
					wordwrap(htmlspecialchars($ev['description'], ENT_QUOTES, 'UTF-8'), 50, '<br/>'),
					$changes,
				], self::TOOLTIP_TPL_EVENT);
			}

			$evc[] = self::INCLUDEJS;
		}

		$ret = implode("\n", $eva);
		$ret .= str_replace('%content%', implode("\n", $evc), self::IF_SHOW);
		return $ret;
	}

	private function get_ev_badge(
		string $name
	):string
	{
		$d = $this->tpl_events[$name];

		$link_ary = [];

		foreach($d['locations'] as $file => $lines)
		{
			$link = self::LINK_BASE;
			$link .= str_starts_with($name, 'acp_') ? self::DIR_ACP : self::DIR_PROSILVER;
			$link .= $file . self::LINK_LINE . $lines[0];

			if (count($d['locations']) > 1)
			{
				[$script_name] = explode('_', $file);

				$link_ary[] = str_replace([
					'%script_name%', '%content%',
				], [
					$script_name, $link,
				], self::IF_SCRIPT_NAME);

				continue;
			}

			$link_ary[] = $link;
		}

		$link = implode('', $link_ary);

		$label = str_replace([
			'%content_full%', '%content_small%',
		], [
			$name, 'EV'],
		self::IF_FULL_ELSE);

		if (isset($d['in_head']))
		{
			return str_replace([
				'%link%', '%label%', '%tooltip_id%',
			], [
				$link, $label, $d['tooltip_id'],
			], self::EV_HEAD);
		}

		if (!isset($d['is_select_option']))
		{
			return str_replace([
				'%link%', '%label%', '%tooltip_id%',
			], [
				$link, $label, $d['tooltip_id'],
			], self::EV);
		}

		$data_ary = [
			'tooltip_id'	=> $d['tooltip_id'],
			'link'				=> $link,
		];

		$data_option = htmlspecialchars(json_encode($data_ary), ENT_QUOTES, 'UTF-8');

		return str_replace([
			'%label%', '%name%', '%data_option%',
		], [
			$label, $name, $data_option,
		], self::EV_SELECT_OPTION);
	}
}
