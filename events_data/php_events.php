<?php

/**
* phpBB Extension - marttiphpbb showphpbbevents
* @copyright (c) 2014 - 2025 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Generated with command ext-showphpbbevents:extract
* Extracted php events from phpBB core.
*/

return array (
  'core.common' => 
  array (
    'locations' => 
    array (
      'common.php' => 171,
    ),
    'description' => 'Main event which is triggered on every page',
    'description_wrapped' => 
    array (
      0 => 'Main event which is triggered on every page',
    ),
    'name' => 'core.common',
    'tooltip_id' => 'stt_0fafc897',
    'since' => '3.1.0-a1',
  ),
  'core.download_file_send_to_browser_before' => 
  array (
    'locations' => 
    array (
      'download/file.php' => 283,
    ),
    'description' => 'Event to modify data before sending file to browser',
    'description_wrapped' => 
    array (
      0 => 'Event to modify data before sending file to',
      1 => 'browser',
    ),
    'name' => 'core.download_file_send_to_browser_before',
    'tooltip_id' => 'stt_1cf0cc2a',
    'vars' => 
    array (
      'attach_id' => 
      array (
        'type' => 'int',
        'description' => 'The attachment ID',
      ),
      'attachment' => 
      array (
        'type' => 'array',
        'description' => 'Array with attachment data',
      ),
      'display_cat' => 
      array (
        'type' => 'int',
        'description' => 'Attachment category',
      ),
      'download_mode' => 
      array (
        'type' => 'int',
        'description' => 'File extension specific download mode',
      ),
      'extensions' => 
      array (
        'type' => 'array',
        'description' => 'Array with file extensions data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Download mode',
      ),
      'thumbnail' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the file is a thumbnail',
      ),
    ),
    'since' => '3.1.6-RC1',
    'changes' => 
    array (
      '3.1.7-RC1' => 'Fixing wrong name of a variable (replacing "extension" by "extensions")',
    ),
  ),
  'core.acp_attachments_config_edit_add' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_attachments.php' => 200,
    ),
    'description' => 'Event to add and/or modify acp_attachement configurations',
    'description_wrapped' => 
    array (
      0 => 'Event to add and/or modify acp_attachement',
      1 => 'configurations',
    ),
    'name' => 'core.acp_attachments_config_edit_add',
    'tooltip_id' => 'stt_1854accf',
    'vars' => 
    array (
      'display_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array of config values to display and process',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the config page we are displaying',
      ),
      'submit' => 
      array (
        'type' => 'boolean',
        'description' => 'Do we display the form or process the submission',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.acp_ban_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_ban.php' => 88,
    ),
    'description' => 'Use this event to modify the ban details before the ban is performed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the ban details before',
      1 => 'the ban is performed',
    ),
    'name' => 'core.acp_ban_before',
    'tooltip_id' => 'stt_1fa877a5',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'One of the following: user, ip, email',
      ),
      'ban' => 
      array (
        'type' => 'string',
        'description' => 'Either string or array with usernames, ips or email addresses',
      ),
      'ban_length' => 
      array (
        'type' => 'int',
        'description' => 'Ban length in minutes',
      ),
      'ban_length_other' => 
      array (
        'type' => 'string',
        'description' => 'Ban length as a date (YYYY-MM-DD)',
      ),
      'ban_exclude' => 
      array (
        'type' => 'bool',
        'description' => 'Are we banning or excluding from another ban',
      ),
      'ban_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to moderators',
      ),
      'ban_give_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to the banned user',
      ),
      'abort_ban' => 
      array (
        'type' => 'mixed',
        'description' => 'Either false, or an error message that is displayed to the user.',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.acp_ban_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_ban.php' => 118,
    ),
    'description' => 'Use this event to perform actions after the ban has been performed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to perform actions after the ban',
      1 => 'has been performed',
    ),
    'name' => 'core.acp_ban_after',
    'tooltip_id' => 'stt_cdc6f13a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'One of the following: user, ip, email',
      ),
      'ban' => 
      array (
        'type' => 'string',
        'description' => 'Either string or array with usernames, ips or email addresses',
      ),
      'ban_length' => 
      array (
        'type' => 'int',
        'description' => 'Ban length in minutes',
      ),
      'ban_length_other' => 
      array (
        'type' => 'string',
        'description' => 'Ban length as a date (YYYY-MM-DD)',
      ),
      'ban_exclude' => 
      array (
        'type' => 'bool',
        'description' => 'Are we banning or excluding from another ban',
      ),
      'ban_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to moderators',
      ),
      'ban_give_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to the banned user',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.acp_bbcodes_edit_add' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 127,
    ),
    'description' => 'Modify custom bbcode template data before we display the add/edit form',
    'description_wrapped' => 
    array (
      0 => 'Modify custom bbcode template data before we',
      1 => 'display the add/edit form',
    ),
    'name' => 'core.acp_bbcodes_edit_add',
    'tooltip_id' => 'stt_efa48e0f',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with custom bbcode add/edit data',
      ),
      'bbcode_id' => 
      array (
        'type' => 'int',
        'description' => 'When editing: the bbcode id,',
      ),
      'bbcode_tokens' => 
      array (
        'type' => 'array',
        'description' => 'Array of bbcode tokens',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.acp_bbcodes_modify_create' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 174,
    ),
    'description' => 'Modify custom bbcode data before the modify/create action',
    'description_wrapped' => 
    array (
      0 => 'Modify custom bbcode data before the modify/create',
      1 => 'action',
    ),
    'name' => 'core.acp_bbcodes_modify_create',
    'tooltip_id' => 'stt_56ef2acc',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: modify|create',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with new bbcode data',
      ),
      'bbcode_id' => 
      array (
        'type' => 'int',
        'description' => 'When editing: the bbcode id,',
      ),
      'display_on_posting' => 
      array (
        'type' => 'bool',
        'description' => 'Display bbcode on posting form',
      ),
      'bbcode_match' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode usage string to match',
      ),
      'bbcode_tpl' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode HTML replacement string',
      ),
      'bbcode_helpline' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode help line string',
      ),
      'hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array of hidden fields for use when',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.acp_bbcodes_modify_create_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 328,
    ),
    'description' => 'Event after a BBCode has been added or updated',
    'description_wrapped' => 
    array (
      0 => 'Event after a BBCode has been added or updated',
    ),
    'name' => 'core.acp_bbcodes_modify_create_after',
    'tooltip_id' => 'stt_080a48db',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: modify|create',
      ),
      'bbcode_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the added or updated bbcode',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with bbcode data (read only)',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.acp_bbcodes_delete_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 381,
    ),
    'description' => 'Event after a BBCode has been deleted',
    'description_wrapped' => 
    array (
      0 => 'Event after a BBCode has been deleted',
    ),
    'name' => 'core.acp_bbcodes_delete_after',
    'tooltip_id' => 'stt_72d1b4b1',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: delete',
      ),
      'bbcode_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the deleted bbcode',
      ),
      'bbcode_tag' => 
      array (
        'type' => 'string',
        'description' => 'The tag of the deleted bbcode',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.acp_bbcodes_display_form' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 432,
    ),
    'description' => 'Modify custom bbcode template data before we display the form',
    'description_wrapped' => 
    array (
      0 => 'Modify custom bbcode template data before we',
      1 => 'display the form',
    ),
    'name' => 'core.acp_bbcodes_display_form',
    'tooltip_id' => 'stt_4434d09e',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: modify|create',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get custom bbcode data',
      ),
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with form template data',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'The u_action link',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.acp_bbcodes_display_bbcodes' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_bbcodes.php' => 456,
    ),
    'description' => 'Modify display of custom bbcodes in the form',
    'description_wrapped' => 
    array (
      0 => 'Modify display of custom bbcodes in the form',
    ),
    'name' => 'core.acp_bbcodes_display_bbcodes',
    'tooltip_id' => 'stt_8940e0ea',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with current bbcode data',
      ),
      'bbcodes_array' => 
      array (
        'type' => 'array',
        'description' => 'Array of bbcodes template data',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'The u_action link',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.acp_board_config_edit_add' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_board.php' => 489,
    ),
    'description' => 'Event to add and/or modify acp_board configurations',
    'description_wrapped' => 
    array (
      0 => 'Event to add and/or modify acp_board',
      1 => 'configurations',
    ),
    'name' => 'core.acp_board_config_edit_add',
    'tooltip_id' => 'stt_d949f93d',
    'vars' => 
    array (
      'display_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array of config values to display and process',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the config page we are displaying',
      ),
      'submit' => 
      array (
        'type' => 'boolean',
        'description' => 'Do we display the form or process the submission',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.acp_board_config_emoji_enabled' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_board.php' => 603,
    ),
    'description' => 'Event to manage the array of emoji-enabled configurations',
    'description_wrapped' => 
    array (
      0 => 'Event to manage the array of emoji-enabled',
      1 => 'configurations',
    ),
    'name' => 'core.acp_board_config_emoji_enabled',
    'tooltip_id' => 'stt_eb52e2c0',
    'vars' => 
    array (
      'config_name_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of config names to process',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.acp_account_activation_edit_add' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_board.php' => 944,
    ),
    'description' => 'Event to add and/or modify account activation configurations',
    'description_wrapped' => 
    array (
      0 => 'Event to add and/or modify account activation',
      1 => 'configurations',
    ),
    'name' => 'core.acp_account_activation_edit_add',
    'tooltip_id' => 'stt_06030ea5',
    'vars' => 
    array (
      'act_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of account activation methods',
      ),
      'act_options' => 
      array (
        'type' => 'string',
        'description' => 'Options available in the activation method',
      ),
    ),
    'since' => '3.3.15-RC1',
  ),
  'core.acp_email_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_email.php' => 140,
    ),
    'description' => 'Modify sql query to change the list of users the email is sent to',
    'description_wrapped' => 
    array (
      0 => 'Modify sql query to change the list of users the',
      1 => 'email is sent to',
    ),
    'name' => 'core.acp_email_modify_sql',
    'tooltip_id' => 'stt_5eb6b47a',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array which is used to build the sql query',
      ),
    ),
    'since' => '3.1.2-RC1',
  ),
  'core.acp_email_send_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_email.php' => 236,
    ),
    'description' => 'Modify email template data before the emails are sent',
    'description_wrapped' => 
    array (
      0 => 'Modify email template data before the emails are',
      1 => 'sent',
    ),
    'name' => 'core.acp_email_send_before',
    'tooltip_id' => 'stt_a0981071',
    'vars' => 
    array (
      'email_template' => 
      array (
        'type' => 'string',
        'description' => 'The template to be used for sending the email',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The subject of the email',
      ),
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data assigned to email template',
      ),
      'generate_log_entry' => 
      array (
        'type' => 'bool',
        'description' => 'If false, no log entry will be created',
      ),
      'usernames' => 
      array (
        'type' => 'array',
        'description' => 'Usernames which will be displayed in log entry, if it will be created',
      ),
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'The group this email will be sent to',
      ),
      'use_queue' => 
      array (
        'type' => 'bool',
        'description' => 'If true, email queue will be used for sending',
      ),
      'priority' => 
      array (
        'type' => 'int',
        'description' => 'Priority of sent emails',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.acp_email_display' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_email.php' => 347,
    ),
    'description' => 'Modify custom email template data before we display the form',
    'description_wrapped' => 
    array (
      0 => 'Modify custom email template data before we',
      1 => 'display the form',
    ),
    'name' => 'core.acp_email_display',
    'tooltip_id' => 'stt_c5b18639',
    'vars' => 
    array (
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data assigned to email template',
      ),
      'exclude' => 
      array (
        'type' => 'array',
        'description' => 'Array with groups which are excluded from group selection',
      ),
      'usernames' => 
      array (
        'type' => 'array',
        'description' => 'Usernames which will be displayed in form',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.acp_extensions_run_action_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_extensions.php' => 96,
    ),
    'description' => 'Event to run a specific action on extension',
    'description_wrapped' => 
    array (
      0 => 'Event to run a specific action on extension',
    ),
    'name' => 'core.acp_extensions_run_action_before',
    'tooltip_id' => 'stt_decb3b58',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Action to run; if the event completes execution of the action, should be set to \'none\'',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'Url we are at',
      ),
      'ext_name' => 
      array (
        'type' => 'string',
        'description' => 'Extension name from request',
      ),
      'safe_time_limit' => 
      array (
        'type' => 'int',
        'description' => 'Safe limit of execution time',
      ),
      'start_time' => 
      array (
        'type' => 'int',
        'description' => 'Start time',
      ),
      'tpl_name' => 
      array (
        'type' => 'string',
        'description' => 'Template file to load',
      ),
    ),
    'since' => '3.1.11-RC1',
    'changes' => 
    array (
      '3.2.1-RC1' => 'Renamed to core.acp_extensions_run_action_before, added tpl_name, added action \'none\'',
    ),
  ),
  'core.acp_extensions_run_action_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_extensions.php' => 388,
    ),
    'description' => 'Event to run after a specific action on extension has completed',
    'description_wrapped' => 
    array (
      0 => 'Event to run after a specific action on extension',
      1 => 'has completed',
    ),
    'name' => 'core.acp_extensions_run_action_after',
    'tooltip_id' => 'stt_cf97a704',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Action that has run',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'Url we are at',
      ),
      'ext_name' => 
      array (
        'type' => 'string',
        'description' => 'Extension name from request',
      ),
      'safe_time_limit' => 
      array (
        'type' => 'int',
        'description' => 'Safe limit of execution time',
      ),
      'start_time' => 
      array (
        'type' => 'int',
        'description' => 'Start time',
      ),
      'tpl_name' => 
      array (
        'type' => 'string',
        'description' => 'Template file to load',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.acp_manage_forums_request_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 166,
    ),
    'description' => 'Request forum data and operate on it (parse texts, etc.)',
    'description_wrapped' => 
    array (
      0 => 'Request forum data and operate on it (parse texts,',
      1 => 'etc.)',
    ),
    'name' => 'core.acp_manage_forums_request_data',
    'tooltip_id' => 'stt_bab7f743',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with new forum data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_initialise_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 494,
    ),
    'description' => 'Initialise data before we display the add/edit form',
    'description_wrapped' => 
    array (
      0 => 'Initialise data before we display the add/edit',
      1 => 'form',
    ),
    'name' => 'core.acp_manage_forums_initialise_data',
    'tooltip_id' => 'stt_de45bb3b',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'update' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'When editing: the forum id,',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with current forum data',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with new forum data',
      ),
      'parents_list' => 
      array (
        'type' => 'string',
        'description' => 'List of parent options',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_display_form' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 725,
    ),
    'description' => 'Modify forum template data before we display the form',
    'description_wrapped' => 
    array (
      0 => 'Modify forum template data before we display the',
      1 => 'form',
    ),
    'name' => 'core.acp_manage_forums_display_form',
    'tooltip_id' => 'stt_b10133d4',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'update' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'When editing: the forum id,',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with current forum data',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with new forum data',
      ),
      'parents_list' => 
      array (
        'type' => 'string',
        'description' => 'List of parent options',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if you add errors',
      ),
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with new forum data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_modify_forum_list' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 864,
    ),
    'description' => 'Modify the forum list data',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum list data',
    ),
    'name' => 'core.acp_manage_forums_modify_forum_list',
    'tooltip_id' => 'stt_1a84f036',
    'vars' => 
    array (
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forums list data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.acp_manage_forums_validate_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 983,
    ),
    'description' => 'Validate the forum data before we create/update the forum',
    'description_wrapped' => 
    array (
      0 => 'Validate the forum data before we create/update',
      1 => 'the forum',
    ),
    'name' => 'core.acp_manage_forums_validate_data',
    'tooltip_id' => 'stt_dce45829',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with new forum data',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, should be strings and not',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_update_data_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1112,
    ),
    'description' => 'Remove invalid values from forum_data_sql that should not be updated',
    'description_wrapped' => 
    array (
      0 => 'Remove invalid values from forum_data_sql that',
      1 => 'should not be updated',
    ),
    'name' => 'core.acp_manage_forums_update_data_before',
    'tooltip_id' => 'stt_f2f0f87c',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'forum_data_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array with data we are going to update',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_update_data_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1406,
    ),
    'description' => 'Event after a forum was updated or created',
    'description_wrapped' => 
    array (
      0 => 'Event after a forum was updated or created',
    ),
    'name' => 'core.acp_manage_forums_update_data_after',
    'tooltip_id' => 'stt_2dca08ba',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'forum_data_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array with data we updated',
      ),
      'is_new_forum' => 
      array (
        'type' => 'bool',
        'description' => 'Did we create a forum or update one',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, should be strings and not',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_move_children' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1446,
    ),
    'description' => 'Event when we move all children of one forum to another',
    'description_wrapped' => 
    array (
      0 => 'Event when we move all children of one forum to',
      1 => 'another',
    ),
    'name' => 'core.acp_manage_forums_move_children',
    'tooltip_id' => 'stt_320460c2',
    'vars' => 
    array (
      'from_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the current parent forum',
      ),
      'to_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the new parent forum',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, should be strings and not',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_move_content' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1554,
    ),
    'description' => 'Event when we move content from one forum to another',
    'description_wrapped' => 
    array (
      0 => 'Event when we move content from one forum to',
      1 => 'another',
    ),
    'name' => 'core.acp_manage_forums_move_content',
    'tooltip_id' => 'stt_64ebd524',
    'vars' => 
    array (
      'from_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the current parent forum',
      ),
      'to_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the new parent forum',
      ),
      'sync' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we sync the "to"-forum\'s data',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, should be strings and not',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_manage_forums_move_content_sql_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1572,
    ),
    'description' => 'Perform additional actions before move forum content',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before move forum',
      1 => 'content',
    ),
    'name' => 'core.acp_manage_forums_move_content_sql_before',
    'tooltip_id' => 'stt_22f8a88b',
    'vars' => 
    array (
      'table_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of tables from which forum_id will be updated',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.acp_manage_forums_move_content_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 1603,
    ),
    'description' => 'Event when content has been moved from one forum to another',
    'description_wrapped' => 
    array (
      0 => 'Event when content has been moved from one forum',
      1 => 'to another',
    ),
    'name' => 'core.acp_manage_forums_move_content_after',
    'tooltip_id' => 'stt_90f4b011',
    'vars' => 
    array (
      'from_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the current parent forum',
      ),
      'to_id' => 
      array (
        'type' => 'int',
        'description' => 'Id of the new parent forum',
      ),
      'sync' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we sync the "to"-forum\'s data',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.delete_forum_content_before_query' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_forums.php' => 2011,
    ),
    'description' => 'Perform additional actions before forum content deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before forum content',
      1 => 'deletion',
    ),
    'name' => 'core.delete_forum_content_before_query',
    'tooltip_id' => 'stt_0bb6d613',
    'vars' => 
    array (
      'table_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of tables from which all rows will be deleted that hold the forum_id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'the forum id',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the topic ids from the forum to be deleted',
      ),
      'post_counts' => 
      array (
        'type' => 'array',
        'description' => 'Array of counts of posts in the forum, by poster_id',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.acp_manage_group_request_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_groups.php' => 502,
    ),
    'description' => 'Request group data and operate on it',
    'description_wrapped' => 
    array (
      0 => 'Request group data and operate on it',
    ),
    'name' => 'core.acp_manage_group_request_data',
    'tooltip_id' => 'stt_4f250ac5',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'The group id',
      ),
      'group_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with new group data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if you add errors',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'The group name',
      ),
      'group_desc' => 
      array (
        'type' => 'string',
        'description' => 'The group description',
      ),
      'group_type' => 
      array (
        'type' => 'int',
        'description' => 'The group type',
      ),
      'allow_desc_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Allow bbcode in group description: true|false',
      ),
      'allow_desc_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Allow urls in group description: true|false',
      ),
      'allow_desc_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Allow smiles in group description: true|false',
      ),
      'submit_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with new group data',
      ),
      'validation_checks' => 
      array (
        'type' => 'array',
        'description' => 'Array with validation data',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.acp_manage_group_initialise_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_groups.php' => 570,
    ),
    'description' => 'Initialise data before we display the add/edit form',
    'description_wrapped' => 
    array (
      0 => 'Initialise data before we display the add/edit',
      1 => 'form',
    ),
    'name' => 'core.acp_manage_group_initialise_data',
    'tooltip_id' => 'stt_84eeb164',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'The group id',
      ),
      'group_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with new group data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if you add errors',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'The group name',
      ),
      'group_desc' => 
      array (
        'type' => 'string',
        'description' => 'The group description',
      ),
      'group_type' => 
      array (
        'type' => 'int',
        'description' => 'The group type',
      ),
      'allow_desc_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Allow bbcode in group description: true|false',
      ),
      'allow_desc_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Allow urls in group description: true|false',
      ),
      'allow_desc_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Allow smiles in group description: true|false',
      ),
      'submit_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with new group data',
      ),
      'test_variables' => 
      array (
        'type' => 'array',
        'description' => 'Array with variables for test',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.acp_manage_group_display_form' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_groups.php' => 832,
    ),
    'description' => 'Modify group template data before we display the form',
    'description_wrapped' => 
    array (
      0 => 'Modify group template data before we display the',
      1 => 'form',
    ),
    'name' => 'core.acp_manage_group_display_form',
    'tooltip_id' => 'stt_4493ce52',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Type of the action: add|edit',
      ),
      'update' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'The group id',
      ),
      'group_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with new group data',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'The group name',
      ),
      'group_type' => 
      array (
        'type' => 'int',
        'description' => 'The group type',
      ),
      'group_desc_data' => 
      array (
        'type' => 'array',
        'description' => 'The group description data',
      ),
      'group_rank' => 
      array (
        'type' => 'string',
        'description' => 'The group rank',
      ),
      'rank_options' => 
      array (
        'type' => 'string',
        'description' => 'The rank options',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if you add errors',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.acp_help_phpbb_submit_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_help_phpbb.php' => 82,
    ),
    'description' => 'Event to modify ACP help phpBB page and/or listen to submit',
    'description_wrapped' => 
    array (
      0 => 'Event to modify ACP help phpBB page and/or listen',
      1 => 'to submit',
    ),
    'name' => 'core.acp_help_phpbb_submit_before',
    'tooltip_id' => 'stt_37b70c5f',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'boolean',
        'description' => 'Do we display the form or process the submission',
      ),
    ),
    'since' => '3.2.0-RC2',
  ),
  'core.acp_language_after_delete' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_language.php' => 243,
    ),
    'description' => 'Run code after language deleted',
    'description_wrapped' => 
    array (
      0 => 'Run code after language deleted',
    ),
    'name' => 'core.acp_language_after_delete',
    'tooltip_id' => 'stt_2cc1ab33',
    'vars' => 
    array (
      'lang_iso' => 
      array (
        'type' => 'string',
        'description' => 'Language ISO code',
      ),
      'delete_message' => 
      array (
        'type' => 'string',
        'description' => 'Delete message appear to user',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.acp_main_add_actions_confirm' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_main.php' => 116,
    ),
    'description' => 'Event to add confirm box for custom ACP quick actions',
    'description_wrapped' => 
    array (
      0 => 'Event to add confirm box for custom ACP quick',
      1 => 'actions',
    ),
    'name' => 'core.acp_main_add_actions_confirm',
    'tooltip_id' => 'stt_bf8d843f',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'string',
        'description' => 'The module ID',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The module mode',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Custom action type name',
      ),
      'confirm' => 
      array (
        'type' => 'boolean',
        'description' => 'Do we display the confirm box to run the custom action',
      ),
      'confirm_lang' => 
      array (
        'type' => 'string',
        'description' => 'Lang var name to display in confirm box',
      ),
    ),
    'since' => '3.3.15-RC1',
  ),
  'core.acp_main_add_actions' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_main.php' => 452,
    ),
    'description' => 'Event to add custom ACP quick actions',
    'description_wrapped' => 
    array (
      0 => 'Event to add custom ACP quick actions',
    ),
    'name' => 'core.acp_main_add_actions',
    'tooltip_id' => 'stt_82aa010a',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'string',
        'description' => 'The module ID',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The module mode',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Custom action type name',
      ),
    ),
    'since' => '3.3.15-RC1',
  ),
  'core.acp_main_notice' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_main.php' => 515,
    ),
    'description' => 'Notice admin',
    'description_wrapped' => 
    array (
      0 => 'Notice admin',
    ),
    'name' => 'core.acp_main_notice',
    'tooltip_id' => 'stt_98d5220f',
    'since' => '3.1.0-RC3',
  ),
  'core.acp_profile_create_edit_init' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_profile.php' => 426,
    ),
    'description' => 'Event to add initialization for new profile field table fields',
    'description_wrapped' => 
    array (
      0 => 'Event to add initialization for new profile field',
      1 => 'table fields',
    ),
    'name' => 'core.acp_profile_create_edit_init',
    'tooltip_id' => 'stt_938e6270',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'create|edit',
      ),
      'step' => 
      array (
        'type' => 'int',
        'description' => 'Configuration step (1|2|3)',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Form has been submitted',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Configuration should be saved',
      ),
      'field_type' => 
      array (
        'type' => 'string',
        'description' => 'Type of the field we are dealing with',
      ),
      'field_row' => 
      array (
        'type' => 'array',
        'description' => 'Array of data about the field',
      ),
      'exclude' => 
      array (
        'type' => 'array',
        'description' => 'Array of excluded fields by step',
      ),
      'visibility_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of fields that are visibility related',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.acp_profile_create_edit_after' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_profile.php' => 730,
    ),
    'description' => 'Event to add template variables for new profile field table fields',
    'description_wrapped' => 
    array (
      0 => 'Event to add template variables for new profile',
      1 => 'field table fields',
    ),
    'name' => 'core.acp_profile_create_edit_after',
    'tooltip_id' => 'stt_8e7c70de',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'create|edit',
      ),
      'step' => 
      array (
        'type' => 'int',
        'description' => 'Configuration step (1|2|3)',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Form has been submitted',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Configuration should be saved',
      ),
      'field_type' => 
      array (
        'type' => 'string',
        'description' => 'Type of the field we are dealing with',
      ),
      'field_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of data about the field',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array of hidden fields in case this needs modification',
      ),
      'options' => 
      array (
        'type' => 'array',
        'description' => 'Array of options specific to this step',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.acp_profile_action' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_profile.php' => 761,
    ),
    'description' => 'Event to handle actions on the ACP profile fields page',
    'description_wrapped' => 
    array (
      0 => 'Event to handle actions on the ACP profile fields',
      1 => 'page',
    ),
    'name' => 'core.acp_profile_action',
    'tooltip_id' => 'stt_3493ee12',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Action that is being performed',
      ),
      'tpl_name' => 
      array (
        'type' => 'string',
        'description' => 'Template file to load',
      ),
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Page title',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'The URL we are at, read only',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.acp_profile_modify_profile_row' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_profile.php' => 821,
    ),
    'description' => 'Event to modify profile field data before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Event to modify profile field data before it is',
      1 => 'assigned to the template',
    ),
    'name' => 'core.acp_profile_modify_profile_row',
    'tooltip_id' => 'stt_b0eac4eb',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with data for the current profile field',
      ),
      'field_block' => 
      array (
        'type' => 'array',
        'description' => 'Template data that is being assigned to the \'fields\' block',
      ),
      'profile_field' => 
      array (
        'type' => 'object',
        'description' => 'A profile field instance, implements \\phpbb\\profilefields\\type\\type_base',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.acp_profile_create_edit_save_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_profile.php' => 1006,
    ),
    'description' => 'Event to modify profile field configuration data before saving to database',
    'description_wrapped' => 
    array (
      0 => 'Event to modify profile field configuration data',
      1 => 'before saving to database',
    ),
    'name' => 'core.acp_profile_create_edit_save_before',
    'tooltip_id' => 'stt_5745ff39',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'create|edit',
      ),
      'field_type' => 
      array (
        'type' => 'string',
        'description' => 'Type of the field we are dealing with',
      ),
      'field_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of data about the field',
      ),
      'profile_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array of fields to be sent to the database',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.prune_forums_settings_confirm' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_prune.php' => 190,
    ),
    'description' => 'Use this event to pass data from the prune form to the confirmation screen',
    'description_wrapped' => 
    array (
      0 => 'Use this event to pass data from the prune form to',
      1 => 'the confirmation screen',
    ),
    'name' => 'core.prune_forums_settings_confirm',
    'tooltip_id' => 'stt_35b7ee72',
    'vars' => 
    array (
      'hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Hidden fields that are passed through the confirm screen',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.prune_forums_settings_template_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_prune.php' => 248,
    ),
    'description' => 'Event to add/modify prune forums settings template data',
    'description_wrapped' => 
    array (
      0 => 'Event to add/modify prune forums settings template',
      1 => 'data',
    ),
    'name' => 'core.prune_forums_settings_template_data',
    'tooltip_id' => 'stt_76f0bad4',
    'vars' => 
    array (
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with form template data',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.acp_ranks_save_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_ranks.php' => 85,
    ),
    'description' => 'Modify the SQL array when saving a rank',
    'description_wrapped' => 
    array (
      0 => 'Modify the SQL array when saving a rank',
    ),
    'name' => 'core.acp_ranks_save_modify_sql_ary',
    'tooltip_id' => 'stt_ea1daa88',
    'vars' => 
    array (
      'rank_id' => 
      array (
        'type' => 'int',
        'description' => 'The ID of the rank (if available)',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rank\'s data',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.acp_ranks_edit_modify_tpl_ary' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_ranks.php' => 238,
    ),
    'description' => 'Modify the template output array for editing/adding ranks',
    'description_wrapped' => 
    array (
      0 => 'Modify the template output array for',
      1 => 'editing/adding ranks',
    ),
    'name' => 'core.acp_ranks_edit_modify_tpl_ary',
    'tooltip_id' => 'stt_171e13fa',
    'vars' => 
    array (
      'ranks' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rank\'s data',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rank\'s template data',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.acp_ranks_list_modify_rank_row' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_ranks.php' => 278,
    ),
    'description' => 'Modify the template output array for each listed rank',
    'description_wrapped' => 
    array (
      0 => 'Modify the template output array for each listed',
      1 => 'rank',
    ),
    'name' => 'core.acp_ranks_list_modify_rank_row',
    'tooltip_id' => 'stt_a06ef1aa',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rank\'s data',
      ),
      'rank_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rank\'s template data',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.acp_styles_action_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_styles.php' => 142,
    ),
    'description' => 'Run code before ACP styles action execution',
    'description_wrapped' => 
    array (
      0 => 'Run code before ACP styles action execution',
    ),
    'name' => 'core.acp_styles_action_before',
    'tooltip_id' => 'stt_96649f4c',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'description' => 'Module ID',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Active module',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Module that should be run',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.acp_users_overview_before' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 200,
    ),
    'description' => 'Run code at beginning of ACP users overview',
    'description_wrapped' => 
    array (
      0 => 'Run code at beginning of ACP users overview',
    ),
    'name' => 'core.acp_users_overview_before',
    'tooltip_id' => 'stt_a490cce6',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Current user data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Active module',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Module that should be run',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array holding error messages',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.acp_users_overview_run_quicktool' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 835,
    ),
    'description' => 'Run custom quicktool code',
    'description_wrapped' => 
    array (
      0 => 'Run custom quicktool code',
    ),
    'name' => 'core.acp_users_overview_run_quicktool',
    'tooltip_id' => 'stt_d83bcd38',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Quick tool that should be run',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Current user data',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'The u_action link',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User id of the user to manage',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Added u_action',
      '3.2.10-RC1' => 'Added user_id',
    ),
  ),
  'core.acp_users_overview_modify_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 959,
    ),
    'description' => 'Modify user data before we update it',
    'description_wrapped' => 
    array (
      0 => 'Modify user data before we update it',
    ),
    'name' => 'core.acp_users_overview_modify_data',
    'tooltip_id' => 'stt_d7671e97',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Current user data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Submitted user data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'User data we udpate',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_users_display_overview' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1083,
    ),
    'description' => 'Add additional quick tool options and overwrite user data',
    'description_wrapped' => 
    array (
      0 => 'Add additional quick tool options and overwrite',
      1 => 'user data',
    ),
    'name' => 'core.acp_users_display_overview',
    'tooltip_id' => 'stt_07ba420e',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'quick_tool_ary' => 
      array (
        'type' => 'array',
        'description' => 'Ouick tool options',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.acp_users_modify_profile' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1467,
    ),
    'description' => 'Modify user data on editing profile in ACP',
    'description_wrapped' => 
    array (
      0 => 'Modify user data on editing profile in ACP',
    ),
    'name' => 'core.acp_users_modify_profile',
    'tooltip_id' => 'stt_229dc276',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if submit button has been pressed',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user id',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the full user data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.acp_users_profile_validate' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1505,
    ),
    'description' => 'Validate profile data in ACP before submitting to the database',
    'description_wrapped' => 
    array (
      0 => 'Validate profile data in ACP before submitting to',
      1 => 'the database',
    ),
    'name' => 'core.acp_users_profile_validate',
    'tooltip_id' => 'stt_3ceb657e',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user id',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the full user data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with the form errors',
      ),
    ),
    'since' => '3.1.4-RC1',
    'changes' => 
    array (
      '3.1.12-RC1' => 'Removed submit, added user_id, user_row',
    ),
  ),
  'core.acp_users_profile_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1526,
    ),
    'description' => 'Modify profile data in ACP before submitting to the database',
    'description_wrapped' => 
    array (
      0 => 'Modify profile data in ACP before submitting to',
      1 => 'the database',
    ),
    'name' => 'core.acp_users_profile_modify_sql_ary',
    'tooltip_id' => 'stt_e9bf5daa',
    'vars' => 
    array (
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the user custom profile fields data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user id',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the full user data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with sql data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.acp_users_prefs_modify_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1631,
    ),
    'description' => 'Modify users preferences data',
    'description_wrapped' => 
    array (
      0 => 'Modify users preferences data',
    ),
    'name' => 'core.acp_users_prefs_modify_data',
    'tooltip_id' => 'stt_598824c7',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with users preferences data',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.acp_users_prefs_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1700,
    ),
    'description' => 'Modify SQL query before users preferences are updated',
    'description_wrapped' => 
    array (
      0 => 'Modify SQL query before users preferences are',
      1 => 'updated',
    ),
    'name' => 'core.acp_users_prefs_modify_sql',
    'tooltip_id' => 'stt_74b49fc9',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with users preferences data',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array with users preferences data to update',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with errors data',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.acp_users_prefs_modify_template_data' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1849,
    ),
    'description' => 'Modify users preferences data before assigning it to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify users preferences data before assigning it',
      1 => 'to the template',
    ),
    'name' => 'core.acp_users_prefs_modify_template_data',
    'tooltip_id' => 'stt_adc1aa35',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with users preferences data',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'user_prefs_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with users preferences data to be assigned to the template',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.acp_users_avatar_sql' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 1898,
    ),
    'description' => 'Modify users preferences data before assigning it to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify users preferences data before assigning it',
      1 => 'to the template',
    ),
    'name' => 'core.acp_users_avatar_sql',
    'tooltip_id' => 'stt_1b0d0f56',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'result' => 
      array (
        'type' => 'array',
        'description' => 'Array with user avatar data to be updated in the DB',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.acp_users_modify_signature_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 2111,
    ),
    'description' => 'Modify user signature before it is stored in the DB',
    'description_wrapped' => 
    array (
      0 => 'Modify user signature before it is stored in the',
      1 => 'DB',
    ),
    'name' => 'core.acp_users_modify_signature_sql_ary',
    'tooltip_id' => 'stt_48c5bdf5',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user signature data to be updated in the DB',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.acp_users_mode_add' => 
  array (
    'locations' => 
    array (
      'includes/acp/acp_users.php' => 2628,
    ),
    'description' => 'Additional modes provided by extensions',
    'description_wrapped' => 
    array (
      0 => 'Additional modes provided by extensions',
    ),
    'name' => 'core.acp_users_mode_add',
    'tooltip_id' => 'stt_60847842',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'New mode',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User id of the user to manage',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with errors data',
      ),
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'The u_action link',
      ),
    ),
    'since' => '3.2.2-RC1',
    'changes' => 
    array (
      '3.2.10-RC1' => 'Added u_action',
    ),
  ),
  'core.acp_logs_info_modify_modes' => 
  array (
    'locations' => 
    array (
      'includes/acp/info/acp_logs.php' => 36,
    ),
    'description' => 'Event to add or modify ACP log modulemodes',
    'description_wrapped' => 
    array (
      0 => 'Event to add or modify ACP log modulemodes',
    ),
    'name' => 'core.acp_logs_info_modify_modes',
    'tooltip_id' => 'stt_0cb4e093',
    'vars' => 
    array (
      'modes' => 
      array (
        'type' => 'array',
        'description' => 'Array with modes info',
      ),
    ),
    'since' => '3.2.1-RC1',
  ),
  'core.bbcode_cache_init_end' => 
  array (
    'locations' => 
    array (
      'includes/bbcode.php' => 458,
    ),
    'description' => 'Use this event to modify the bbcode_cache',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the bbcode_cache',
    ),
    'name' => 'core.bbcode_cache_init_end',
    'tooltip_id' => 'stt_2b46e179',
    'vars' => 
    array (
      'bbcode_cache' => 
      array (
        'type' => 'array',
        'description' => 'The array of cached search and replace patterns of bbcodes',
      ),
      'bbcode_bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode bitfield',
      ),
      'bbcode_uid' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode uid',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.bbcode_second_pass_by_extension' => 
  array (
    'locations' => 
    array (
      'includes/bbcode.php' => 703,
    ),
    'description' => 'Event to perform bbcode second pass with the custom validating methods provided by extensions',
    'description_wrapped' => 
    array (
      0 => 'Event to perform bbcode second pass with the',
      1 => 'custom validating methods provided by extensions',
    ),
    'name' => 'core.bbcode_second_pass_by_extension',
    'tooltip_id' => 'stt_15c01b82',
    'vars' => 
    array (
      'params_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with the function parameters',
      ),
      'return' => 
      array (
        'type' => 'mixed',
        'description' => 'Second pass result to return',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.markread_before' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 587,
    ),
    'description' => 'This event is used for performing actions directly before marking forums, topics or posts as read.',
    'description_wrapped' => 
    array (
      0 => 'This event is used for performing actions directly',
      1 => 'before marking forums, topics or posts as read.',
    ),
    'name' => 'core.markread_before',
    'tooltip_id' => 'stt_c5f6c1bd',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing marking mode value',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Variable containing forum id, or false',
      ),
      'topic_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Variable containing topic id, or false',
      ),
      'post_time' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing post time',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing the user id',
      ),
      'should_markread' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the markread should be done or not.',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.markread_after' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 942,
    ),
    'description' => 'This event is used for performing actions directly after forums, topics or posts have been marked as read.',
    'description_wrapped' => 
    array (
      0 => 'This event is used for performing actions directly',
      1 => 'after forums, topics or posts have been marked as',
      2 => 'read.',
    ),
    'name' => 'core.markread_after',
    'tooltip_id' => 'stt_f3c83951',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing marking mode value',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Variable containing forum id, or false',
      ),
      'topic_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Variable containing topic id, or false',
      ),
      'post_time' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing post time',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing the user id',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.get_unread_topics_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 1170,
    ),
    'description' => 'Change SQL query for fetching unread topics data',
    'description_wrapped' => 
    array (
      0 => 'Change SQL query for fetching unread topics data',
    ),
    'name' => 'core.get_unread_topics_modify_sql',
    'tooltip_id' => 'stt_f5756762',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'Fully assembled SQL query with keys SELECT, FROM, LEFT_JOIN, WHERE',
      ),
      'last_mark' => 
      array (
        'type' => 'int',
        'description' => 'User\'s last_mark time',
      ),
      'sql_extra' => 
      array (
        'type' => 'string',
        'description' => 'Extra WHERE SQL statement',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'ORDER BY SQL sorting statement',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.append_sid' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 1543,
    ),
    'description' => 'This event can either supplement or override the append_sid() function',
    'description_wrapped' => 
    array (
      0 => 'This event can either supplement or override the',
      1 => 'append_sid() function',
    ),
    'name' => 'core.append_sid',
    'tooltip_id' => 'stt_3e473c18',
    'vars' => 
    array (
      'url' => 
      array (
        'type' => 'string',
        'description' => 'The url the session id needs',
      ),
      'params' => 
      array (
        'type' => 'mixed',
        'description' => 'String or array of additional',
      ),
      'is_amp' => 
      array (
        'type' => 'bool',
        'description' => 'Is url using &amp; (true) or',
      ),
      'session_id' => 
      array (
        'type' => 'bool|string',
        'description' => 'Possibility to use a custom',
      ),
      'append_sid_overwrite' => 
      array (
        'type' => 'bool|string',
        'description' => 'Overwrite function (string',
      ),
      'is_route' => 
      array (
        'type' => 'bool',
        'description' => 'Is url generated by a route.',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.functions.redirect' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 1809,
    ),
    'description' => 'Execute code and/or overwrite redirect()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite redirect()',
    ),
    'name' => 'core.functions.redirect',
    'tooltip_id' => 'stt_07d01c76',
    'vars' => 
    array (
      'url' => 
      array (
        'type' => 'string',
        'description' => 'The url',
      ),
      'return' => 
      array (
        'type' => 'bool',
        'description' => 'If true, do not redirect but return the sanitized URL.',
      ),
      'disable_cd_check' => 
      array (
        'type' => 'bool',
        'description' => 'If true, redirect() will redirect to an external domain. If false, the redirect point to the boards url if it does not match the current domain.',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.add_form_key' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2072,
    ),
    'description' => 'Perform additional actions on creation of the form token',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions on creation of the form',
      1 => 'token',
    ),
    'name' => 'core.add_form_key',
    'tooltip_id' => 'stt_3d97d28f',
    'vars' => 
    array (
      'form_name' => 
      array (
        'type' => 'string',
        'description' => 'The form name',
      ),
      'now' => 
      array (
        'type' => 'int',
        'description' => 'Current time timestamp',
      ),
      's_fields' => 
      array (
        'type' => 'string',
        'description' => 'Generated hidden fields',
      ),
      'token' => 
      array (
        'type' => 'string',
        'description' => 'Form token',
      ),
      'token_sid' => 
      array (
        'type' => 'string',
        'description' => 'User session ID',
      ),
      'template_variable_suffix' => 
      array (
        'type' => 'string',
        'description' => 'The string that is appended to template variable name',
      ),
    ),
    'since' => '3.1.0-RC3',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added template_variable_suffix',
    ),
  ),
  'core.confirm_box_ajax_before' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2262,
    ),
    'description' => 'This event allows an extension to modify the ajax output of confirm box.',
    'description_wrapped' => 
    array (
      0 => 'This event allows an extension to modify the ajax',
      1 => 'output of confirm box.',
    ),
    'name' => 'core.confirm_box_ajax_before',
    'tooltip_id' => 'stt_01d38c5d',
    'vars' => 
    array (
      'u_action' => 
      array (
        'type' => 'string',
        'description' => 'Action of the form',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Data to be sent',
      ),
      'hidden' => 
      array (
        'type' => 'string',
        'description' => 'Hidden fields generated by caller',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'string',
        'description' => 'Hidden fields generated by this function',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.login_box_before' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2311,
    ),
    'description' => 'This event allows an extension to modify the login process',
    'description_wrapped' => 
    array (
      0 => 'This event allows an extension to modify the login',
      1 => 'process',
    ),
    'name' => 'core.login_box_before',
    'tooltip_id' => 'stt_3dfba5b5',
    'vars' => 
    array (
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Redirect string',
      ),
      'l_explain' => 
      array (
        'type' => 'string',
        'description' => 'Explain language string',
      ),
      'l_success' => 
      array (
        'type' => 'string',
        'description' => 'Success language string',
      ),
      'admin' => 
      array (
        'type' => 'bool',
        'description' => 'Is admin?',
      ),
      's_display' => 
      array (
        'type' => 'bool',
        'description' => 'Display full login form?',
      ),
      'err' => 
      array (
        'type' => 'string',
        'description' => 'Error string',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.login_box_redirect' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2416,
    ),
    'description' => 'This event allows an extension to modify the redirection when a user successfully logs in',
    'description_wrapped' => 
    array (
      0 => 'This event allows an extension to modify the',
      1 => 'redirection when a user successfully logs in',
    ),
    'name' => 'core.login_box_redirect',
    'tooltip_id' => 'stt_d95cca5f',
    'vars' => 
    array (
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Redirect string',
      ),
      'admin' => 
      array (
        'type' => 'bool',
        'description' => 'Is admin?',
      ),
      'result' => 
      array (
        'type' => 'array',
        'description' => 'Result from auth provider',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.1.9-RC1' => 'Removed undefined return variable',
      '3.2.4-RC1' => 'Added result',
    ),
  ),
  'core.login_box_failed' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2484,
    ),
    'description' => 'This event allows an extension to process when a user fails a login attempt',
    'description_wrapped' => 
    array (
      0 => 'This event allows an extension to process when a',
      1 => 'user fails a login attempt',
    ),
    'name' => 'core.login_box_failed',
    'tooltip_id' => 'stt_7b4b5b6c',
    'vars' => 
    array (
      'result' => 
      array (
        'type' => 'array',
        'description' => 'Login result data',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'User name used to login',
      ),
      'password' => 
      array (
        'type' => 'string',
        'description' => 'Password used to login',
      ),
      'err' => 
      array (
        'type' => 'string',
        'description' => 'Error message',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.login_box_modify_template_data' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2572,
    ),
    'description' => 'Event to add/modify login box template data',
    'description_wrapped' => 
    array (
      0 => 'Event to add/modify login box template data',
    ),
    'name' => 'core.login_box_modify_template_data',
    'tooltip_id' => 'stt_335a3e87',
    'vars' => 
    array (
      'admin' => 
      array (
        'type' => 'int',
        'description' => 'Flag whether user is admin',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'User name',
      ),
      'autologin' => 
      array (
        'type' => 'int',
        'description' => 'Flag whether autologin is enabled',
      ),
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Redirect URL',
      ),
      'login_box_template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the login box template data',
      ),
    ),
    'since' => '3.2.3-RC2',
  ),
  'core.login_forum_box' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 2662,
    ),
    'description' => 'Performing additional actions, load additional data on forum login',
    'description_wrapped' => 
    array (
      0 => 'Performing additional actions, load additional',
      1 => 'data on forum login',
    ),
    'name' => 'core.login_forum_box',
    'tooltip_id' => 'stt_89ebf4e2',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'password' => 
      array (
        'type' => 'string',
        'description' => 'Password entered',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.obtain_users_online_string_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 3474,
    ),
    'description' => 'Modify SQL query to obtain online users data',
    'description_wrapped' => 
    array (
      0 => 'Modify SQL query to obtain online users data',
    ),
    'name' => 'core.obtain_users_online_string_sql',
    'tooltip_id' => 'stt_4e7143b3',
    'vars' => 
    array (
      'online_users' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users data',
      ),
      'item_id' => 
      array (
        'type' => 'int',
        'description' => 'Restrict online users to item id',
      ),
      'item' => 
      array (
        'type' => 'string',
        'description' => 'Restrict online users to a certain',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array to obtain users online data',
      ),
    ),
    'since' => '3.1.4-RC1',
    'changes' => 
    array (
      '3.1.7-RC1' => 'Change sql query into array and adjust var accordingly. Allows extension authors the ability to adjust the sql_ary.',
    ),
  ),
  'core.obtain_users_online_string_before_modify' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 3519,
    ),
    'description' => 'Modify online userlist data',
    'description_wrapped' => 
    array (
      0 => 'Modify online userlist data',
    ),
    'name' => 'core.obtain_users_online_string_before_modify',
    'tooltip_id' => 'stt_64a1e389',
    'vars' => 
    array (
      'online_users' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users data',
      ),
      'item_id' => 
      array (
        'type' => 'int',
        'description' => 'Restrict online users to item id',
      ),
      'item' => 
      array (
        'type' => 'string',
        'description' => 'Restrict online users to a certain',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users data',
      ),
      'user_online_link' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users items (usernames)',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.obtain_users_online_string_modify' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 3579,
    ),
    'description' => 'Modify online userlist data',
    'description_wrapped' => 
    array (
      0 => 'Modify online userlist data',
    ),
    'name' => 'core.obtain_users_online_string_modify',
    'tooltip_id' => 'stt_bacf5388',
    'vars' => 
    array (
      'online_users' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users data',
      ),
      'item_id' => 
      array (
        'type' => 'int',
        'description' => 'Restrict online users to item id',
      ),
      'item' => 
      array (
        'type' => 'string',
        'description' => 'Restrict online users to a certain',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users data',
      ),
      'user_online_link' => 
      array (
        'type' => 'array',
        'description' => 'Array with online users items (usernames)',
      ),
      'online_userlist' => 
      array (
        'type' => 'string',
        'description' => 'String containing users online list',
      ),
      'l_online_users' => 
      array (
        'type' => 'string',
        'description' => 'String with total online users count info',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.get_avatar_after' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 3780,
    ),
    'description' => 'Event to modify HTML <img> tag of avatar',
    'description_wrapped' => 
    array (
      0 => 'Event to modify HTML <img> tag of avatar',
    ),
    'name' => 'core.get_avatar_after',
    'tooltip_id' => 'stt_e15e1cf8',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Row cleaned by \\phpbb\\avatar\\manager::clean_row',
      ),
      'alt' => 
      array (
        'type' => 'string',
        'description' => 'Optional language string for alt tag within image, can be a language key or text',
      ),
      'ignore_config' => 
      array (
        'type' => 'bool',
        'description' => 'Ignores the config-setting, to be still able to view the avatar in the UCP',
      ),
      'avatar_data' => 
      array (
        'type' => 'array',
        'description' => 'The HTML attributes for avatar <img> tag',
      ),
      'html' => 
      array (
        'type' => 'string',
        'description' => 'The HTML <img> tag of generated avatar',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.page_header' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 3818,
    ),
    'description' => 'Execute code and/or overwrite page_header()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite page_header()',
    ),
    'name' => 'core.page_header',
    'tooltip_id' => 'stt_697a0d2e',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Page title',
      ),
      'display_online_list' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display online users list',
      ),
      'item' => 
      array (
        'type' => 'string',
        'description' => 'Restrict online users to a certain',
      ),
      'item_id' => 
      array (
        'type' => 'int',
        'description' => 'Restrict online users to item id',
      ),
      'page_header_override' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we return instead of running',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.page_header_after' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 4187,
    ),
    'description' => 'Execute code and/or overwrite _common_ template variables after they have been assigned.',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite _common_ template',
      1 => 'variables after they have been assigned.',
    ),
    'name' => 'core.page_header_after',
    'tooltip_id' => 'stt_85ceb27d',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Page title',
      ),
      'display_online_list' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display online users list',
      ),
      'item' => 
      array (
        'type' => 'string',
        'description' => 'Restrict online users to a certain',
      ),
      'item_id' => 
      array (
        'type' => 'int',
        'description' => 'Restrict online users to item id',
      ),
      'http_headers' => 
      array (
        'type' => 'array',
        'description' => 'HTTP headers that should be set by phpbb',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.phpbb_generate_debug_output' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 4279,
    ),
    'description' => 'Modify debug output information',
    'description_wrapped' => 
    array (
      0 => 'Modify debug output information',
    ),
    'name' => 'core.phpbb_generate_debug_output',
    'tooltip_id' => 'stt_a202e598',
    'vars' => 
    array (
      'debug_info' => 
      array (
        'type' => 'array',
        'description' => 'Array of strings with debug information',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.page_footer' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 4308,
      'phpbb/controller/helper.php' => 159,
    ),
    'description' => 'Execute code and/or overwrite page_footer()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite page_footer()',
    ),
    'name' => 'core.page_footer',
    'tooltip_id' => 'stt_e539a0bc',
    'vars' => 
    array (
      'run_cron' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we run cron tasks',
      ),
      'page_footer_override' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we skip displaying the page footer',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.3.1-RC1' => 'Added to controller helper render() method for backwards compatibility',
    ),
  ),
  'core.page_footer_after' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 4330,
      'phpbb/controller/helper.php' => 182,
    ),
    'description' => 'Execute code and/or modify output before displaying the template.',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or modify output before',
      1 => 'displaying the template.',
    ),
    'name' => 'core.page_footer_after',
    'tooltip_id' => 'stt_3c594b25',
    'vars' => 
    array (
      'display_template' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to display the template',
      ),
      'exit_handler' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to run the exit_handler() (no effect on controller pages)',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.3.1-RC1' => 'Added to controller helper render() method for backwards compatibility',
    ),
  ),
  'core.garbage_collection' => 
  array (
    'locations' => 
    array (
      'includes/functions.php' => 4362,
    ),
    'description' => 'Unload some objects, to free some memory, before we finish our task',
    'description_wrapped' => 
    array (
      0 => 'Unload some objects, to free some memory, before',
      1 => 'we finish our task',
    ),
    'name' => 'core.garbage_collection',
    'tooltip_id' => 'stt_81a52b3b',
    'since' => '3.1.0-a1',
  ),
  'core.adm_page_header' => 
  array (
    'locations' => 
    array (
      'includes/functions_acp.php' => 51,
    ),
    'description' => 'Execute code and/or overwrite adm_page_header()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite adm_page_header()',
    ),
    'name' => 'core.adm_page_header',
    'tooltip_id' => 'stt_d886ed60',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Page title',
      ),
      'adm_page_header_override' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we return instead of',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.adm_page_header_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_acp.php' => 135,
    ),
    'description' => 'Execute code and/or overwrite _common_ template variables after they have been assigned.',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite _common_ template',
      1 => 'variables after they have been assigned.',
    ),
    'name' => 'core.adm_page_header_after',
    'tooltip_id' => 'stt_90642386',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Page title',
      ),
      'http_headers' => 
      array (
        'type' => 'array',
        'description' => 'HTTP headers that should be set by phpbb',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.adm_page_footer' => 
  array (
    'locations' => 
    array (
      'includes/functions_acp.php' => 167,
    ),
    'description' => 'Execute code and/or overwrite adm_page_footer()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or overwrite adm_page_footer()',
    ),
    'name' => 'core.adm_page_footer',
    'tooltip_id' => 'stt_54c540f2',
    'vars' => 
    array (
      'copyright_html' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we display the copyright?',
      ),
      'adm_page_footer_override' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we return instead of',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.build_config_template' => 
  array (
    'locations' => 
    array (
      'includes/functions_acp.php' => 401,
    ),
    'description' => 'Overwrite the html code we display for the config value',
    'description_wrapped' => 
    array (
      0 => 'Overwrite the html code we display for the config',
      1 => 'value',
    ),
    'name' => 'core.build_config_template',
    'tooltip_id' => 'stt_c8e640de',
    'vars' => 
    array (
      'tpl_type' => 
      array (
        'type' => 'array',
        'description' => 'Config type array:',
      ),
      'key' => 
      array (
        'type' => 'string',
        'description' => 'Should be used for the id attribute in html',
      ),
      'new' => 
      array (
        'type' => 'array',
        'description' => 'Array with the config values we display',
      ),
      'name' => 
      array (
        'type' => 'string',
        'description' => 'Should be used for the name attribute',
      ),
      'vars' => 
      array (
        'type' => 'array',
        'description' => 'Array with the options for the config',
      ),
      'tpl' => 
      array (
        'type' => 'string',
        'description' => 'The resulting html code we display',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.validate_config_variable' => 
  array (
    'locations' => 
    array (
      'includes/functions_acp.php' => 639,
    ),
    'description' => 'Validate a config value',
    'description_wrapped' => 
    array (
      0 => 'Validate a config value',
    ),
    'name' => 'core.validate_config_variable',
    'tooltip_id' => 'stt_3dee49ee',
    'vars' => 
    array (
      'cfg_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with config values',
      ),
      'config_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the config we validate',
      ),
      'config_definition' => 
      array (
        'type' => 'array',
        'description' => 'Array with the options for',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, the errors should',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.make_forum_select_modify_forum_list' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 96,
    ),
    'description' => 'Modify the forum list data',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum list data',
    ),
    'name' => 'core.make_forum_select_modify_forum_list',
    'tooltip_id' => 'stt_ee80bf21',
    'vars' => 
    array (
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forums list data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.get_forum_list_modify_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 286,
    ),
    'description' => 'Modify the forum list data',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum list data',
    ),
    'name' => 'core.get_forum_list_modify_data',
    'tooltip_id' => 'stt_49c295b1',
    'vars' => 
    array (
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum list data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.move_topics_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 558,
    ),
    'description' => 'Perform additional actions before topics move',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before topics move',
    ),
    'name' => 'core.move_topics_before',
    'tooltip_id' => 'stt_c2877150',
    'vars' => 
    array (
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the moved topic ids',
      ),
      'forum_id' => 
      array (
        'type' => 'string',
        'description' => 'The forum id from where the topics are moved',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.move_topics_before_query' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 599,
    ),
    'description' => 'Perform additional actions before topics move',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before topics move',
    ),
    'name' => 'core.move_topics_before_query',
    'tooltip_id' => 'stt_841c5453',
    'vars' => 
    array (
      'table_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of tables from which forum_id will be updated for all rows that hold the moved topics',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the moved topic ids',
      ),
      'forum_id' => 
      array (
        'type' => 'string',
        'description' => 'The forum id from where the topics are moved',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the forums where the topics are moving (includes also forum_id)',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to perform auto sync',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.move_topics_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 624,
    ),
    'description' => 'Perform additional actions after topics move',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after topics move',
    ),
    'name' => 'core.move_topics_after',
    'tooltip_id' => 'stt_efbccd55',
    'vars' => 
    array (
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the moved topic ids',
      ),
      'forum_id' => 
      array (
        'type' => 'string',
        'description' => 'The forum id from where the topics were moved',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the forums where the topics were moved (includes also forum_id)',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.move_posts_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 692,
    ),
    'description' => 'Perform additional actions before moving posts',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before moving posts',
    ),
    'name' => 'core.move_posts_before',
    'tooltip_id' => 'stt_f5e375bf',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of post ids to move',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic id the posts are moved to',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to perform auto sync',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the forum ids the posts are moved from',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the topic ids the posts are moved from',
      ),
      'forum_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum id of the topic the posts are moved to',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.move_posts_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 724,
    ),
    'description' => 'Perform additional actions after moving posts',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after moving posts',
    ),
    'name' => 'core.move_posts_after',
    'tooltip_id' => 'stt_5383d2be',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the moved post ids',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic id the posts are moved to',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to perform auto sync',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the forum ids the posts are moved from',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the topic ids the posts are moved from',
      ),
      'forum_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum id of the topic the posts are moved to',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.move_posts_sync_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 755,
    ),
    'description' => 'Perform additional actions after move post sync',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after move post sync',
    ),
    'name' => 'core.move_posts_sync_after',
    'tooltip_id' => 'stt_bdb0f02c',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the moved post ids',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic id the posts are moved to',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to perform auto sync',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the forum ids the posts are moved from',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of the topic ids the posts are moved from',
      ),
      'forum_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum id of the topic the posts are moved to',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.delete_topics_before_query' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 833,
    ),
    'description' => 'Perform additional actions before topic(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before topic(s)',
      1 => 'deletion',
    ),
    'name' => 'core.delete_topics_before_query',
    'tooltip_id' => 'stt_3a23c6ff',
    'vars' => 
    array (
      'table_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of tables from which all rows will be deleted that hold a topic_id occuring in topic_ids',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of topic ids to delete',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.delete_topics_after_query' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 853,
    ),
    'description' => 'Perform additional actions after topic(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after topic(s) deletion',
    ),
    'name' => 'core.delete_topics_after_query',
    'tooltip_id' => 'stt_22db3694',
    'vars' => 
    array (
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of topic ids that were deleted',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.delete_posts_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 939,
    ),
    'description' => 'Perform additional actions before post(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before post(s) deletion',
    ),
    'name' => 'core.delete_posts_before',
    'tooltip_id' => 'stt_3dfa3e42',
    'vars' => 
    array (
      'where_type' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posts deletion mode',
      ),
      'where_ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of posts ids to delete',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if topics/forums should be synchronized',
      ),
      'posted_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if topics_posted table should be resynchronized',
      ),
      'post_count_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if posts count should be resynchronized',
      ),
      'call_delete_topics' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if topics having no posts should be deleted',
      ),
      'delete_notifications_types' => 
      array (
        'type' => 'array',
        'description' => 'Array with notifications types to delete',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.delete_posts_in_transaction_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 1040,
    ),
    'description' => 'Perform additional actions during post(s) deletion before running the queries',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions during post(s) deletion',
      1 => 'before running the queries',
    ),
    'name' => 'core.delete_posts_in_transaction_before',
    'tooltip_id' => 'stt_d3c692f0',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' ids',
      ),
      'poster_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' author ids',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' topic ids',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' forum ids',
      ),
      'where_type' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posts deletion mode',
      ),
      'where_ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of post ids to delete',
      ),
      'delete_notifications_types' => 
      array (
        'type' => 'array',
        'description' => 'Array with notifications types to delete',
      ),
      'table_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with table names to delete data from',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.delete_posts_in_transaction' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 1133,
    ),
    'description' => 'Perform additional actions during post(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions during post(s) deletion',
    ),
    'name' => 'core.delete_posts_in_transaction',
    'tooltip_id' => 'stt_04db4de8',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' ids',
      ),
      'poster_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' author ids',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' topic ids',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' forum ids',
      ),
      'where_type' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posts deletion mode',
      ),
      'where_ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of posts ids to delete',
      ),
      'delete_notifications_types' => 
      array (
        'type' => 'array',
        'description' => 'Array with notifications types to delete',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.delete_posts_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 1159,
    ),
    'description' => 'Perform additional actions after post(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after post(s) deletion',
    ),
    'name' => 'core.delete_posts_after',
    'tooltip_id' => 'stt_9d99af8c',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' ids',
      ),
      'poster_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' author ids',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' topic ids',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted posts\' forum ids',
      ),
      'where_type' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posts deletion mode',
      ),
      'where_ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of posts ids to delete',
      ),
      'delete_notifications_types' => 
      array (
        'type' => 'array',
        'description' => 'Array with notifications types to delete',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.sync_forum_last_post_info_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 1847,
    ),
    'description' => 'Event to modify the SQL array to get the post and user data from all forums\' last posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL array to get the post and',
      1 => 'user data from all forums\' last posts',
    ),
    'name' => 'core.sync_forum_last_post_info_sql',
    'tooltip_id' => 'stt_fe65b162',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array with some post and user data from the last posts list',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.sync_modify_forum_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 1904,
    ),
    'description' => 'Event to modify the SQL array to get the post and user data from all forums\' last posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL array to get the post and',
      1 => 'user data from all forums\' last posts',
    ),
    'name' => 'core.sync_modify_forum_data',
    'tooltip_id' => 'stt_fc527efb',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with data to update for all forum ids',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with some post and user data from the last posts list',
      ),
      'fieldnames' => 
      array (
        'type' => 'array',
        'description' => 'Array with the partial column names that are being updated',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.sync_topic_last_post_info_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 2098,
    ),
    'description' => 'Event to modify the SQL array to get the post and user data from all topics\' last posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL array to get the post and',
      1 => 'user data from all topics\' last posts',
    ),
    'name' => 'core.sync_topic_last_post_info_sql',
    'tooltip_id' => 'stt_13729f96',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array with some post and user data from the last posts list',
      ),
      'custom_fieldnames' => 
      array (
        'type' => 'array',
        'description' => 'Empty array for custom fieldnames to update the topics_table with',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.sync_modify_topic_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 2136,
    ),
    'description' => 'Event to modify the topic_data when syncing topics',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the topic_data when syncing topics',
    ),
    'name' => 'core.sync_modify_topic_data',
    'tooltip_id' => 'stt_0758bf99',
    'vars' => 
    array (
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the topics\' data we are syncing',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with some of the current user and post data',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The current topic_id of $row',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.prune_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 2398,
    ),
    'description' => 'Use this event to modify the SQL that selects topics to be pruned',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the SQL that selects',
      1 => 'topics to be pruned',
    ),
    'name' => 'core.prune_sql',
    'tooltip_id' => 'stt_c4b15ab6',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'string',
        'description' => 'The forum id',
      ),
      'prune_mode' => 
      array (
        'type' => 'string',
        'description' => 'The prune mode',
      ),
      'prune_date' => 
      array (
        'type' => 'string',
        'description' => 'The prune date',
      ),
      'prune_flags' => 
      array (
        'type' => 'int',
        'description' => 'The prune flags',
      ),
      'auto_sync' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to perform auto sync',
      ),
      'sql_and' => 
      array (
        'type' => 'string',
        'description' => 'SQL text appended to where clause',
      ),
      'prune_limit' => 
      array (
        'type' => 'int',
        'description' => 'The prune limit',
      ),
    ),
    'since' => '3.1.3-RC1',
    'changes' => 
    array (
      '3.1.10-RC1' => 'Added prune_limit',
    ),
  ),
  'core.prune_delete_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_admin.php' => 2441,
    ),
    'description' => 'Perform additional actions before topic deletion via pruning',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before topic deletion',
      1 => 'via pruning',
    ),
    'name' => 'core.prune_delete_before',
    'tooltip_id' => 'stt_dd94d521',
    'vars' => 
    array (
      'topic_list' => 
      array (
        'type' => 'int[]',
        'description' => 'The IDs of the topics to be deleted',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.gen_sort_selects_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 143,
    ),
    'description' => 'Run code before generated sort selects are returned',
    'description_wrapped' => 
    array (
      0 => 'Run code before generated sort selects are',
      1 => 'returned',
    ),
    'name' => 'core.gen_sort_selects_after',
    'tooltip_id' => 'stt_4452df09',
    'vars' => 
    array (
      'limit_days' => 
      array (
        'type' => 'int',
        'description' => 'Days limit',
      ),
      'sort_by_text' => 
      array (
        'type' => 'array',
        'description' => 'Sort by text options',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Sort by days flag',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'Sort key',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Sort dir',
      ),
      's_limit_days' => 
      array (
        'type' => 'string',
        'description' => 'String of days limit',
      ),
      's_sort_key' => 
      array (
        'type' => 'string',
        'description' => 'String of sort key',
      ),
      's_sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'String of sort dir',
      ),
      'u_sort_param' => 
      array (
        'type' => 'string',
        'description' => 'Sort URL params',
      ),
      'def_st' => 
      array (
        'type' => 'bool',
        'description' => 'Default sort days',
      ),
      'def_sk' => 
      array (
        'type' => 'bool',
        'description' => 'Default sort key',
      ),
      'def_sd' => 
      array (
        'type' => 'bool',
        'description' => 'Default sort dir',
      ),
      'sorts' => 
      array (
        'type' => 'array',
        'description' => 'Sorts',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.make_jumpbox_modify_forum_list' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 186,
    ),
    'description' => 'Modify the jumpbox forum list data',
    'description_wrapped' => 
    array (
      0 => 'Modify the jumpbox forum list data',
    ),
    'name' => 'core.make_jumpbox_modify_forum_list',
    'tooltip_id' => 'stt_352031d0',
    'vars' => 
    array (
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forums list data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.make_jumpbox_modify_tpl_ary' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 262,
    ),
    'description' => 'Modify the jumpbox before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify the jumpbox before it is assigned to the',
      1 => 'template',
    ),
    'name' => 'core.make_jumpbox_modify_tpl_ary',
    'tooltip_id' => 'stt_b34cd257',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the forum',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the forum',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.bump_topic_allowed_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 312,
    ),
    'description' => 'Event to run code before the topic bump checks',
    'description_wrapped' => 
    array (
      0 => 'Event to run code before the topic bump checks',
    ),
    'name' => 'core.bump_topic_allowed_before',
    'tooltip_id' => 'stt_9f7a0664',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'topic_bumped' => 
      array (
        'type' => 'int',
        'description' => 'Flag indicating if the topic was already bumped (0/1)',
      ),
      'last_post_time' => 
      array (
        'type' => 'int',
        'description' => 'The time of the topic last post',
      ),
      'topic_poster' => 
      array (
        'type' => 'int',
        'description' => 'User ID of the topic author',
      ),
      'last_topic_poster' => 
      array (
        'type' => 'int',
        'description' => 'User ID of the topic last post author',
      ),
    ),
    'since' => '3.3.14-RC1',
  ),
  'core.bump_topic_allowed_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 355,
    ),
    'description' => 'Event to run code after the topic bump checks',
    'description_wrapped' => 
    array (
      0 => 'Event to run code after the topic bump checks',
    ),
    'name' => 'core.bump_topic_allowed_after',
    'tooltip_id' => 'stt_7ad0fbaf',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'topic_bumped' => 
      array (
        'type' => 'int',
        'description' => 'Flag indicating if the topic was already bumped (0/1)',
      ),
      'last_post_time' => 
      array (
        'type' => 'int',
        'description' => 'The time of the topic last post',
      ),
      'topic_poster' => 
      array (
        'type' => 'int',
        'description' => 'User ID of the topic author',
      ),
      'last_topic_poster' => 
      array (
        'type' => 'int',
        'description' => 'User ID of the topic last post author',
      ),
      'bump_time' => 
      array (
        'type' => 'int',
        'description' => 'Bump time range',
      ),
    ),
    'since' => '3.3.14-RC1',
  ),
  'core.decode_message_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 502,
    ),
    'description' => 'Use this event to modify the message before it is decoded',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the message before it is',
      1 => 'decoded',
    ),
    'name' => 'core.decode_message_before',
    'tooltip_id' => 'stt_55e8bb97',
    'vars' => 
    array (
      'message_text' => 
      array (
        'type' => 'string',
        'description' => 'The message content',
      ),
      'bbcode_uid' => 
      array (
        'type' => 'string',
        'description' => 'The message BBCode UID',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.decode_message_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 540,
    ),
    'description' => 'Use this event to modify the message after it is decoded',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the message after it is',
      1 => 'decoded',
    ),
    'name' => 'core.decode_message_after',
    'tooltip_id' => 'stt_52af825e',
    'vars' => 
    array (
      'message_text' => 
      array (
        'type' => 'string',
        'description' => 'The message content',
      ),
      'bbcode_uid' => 
      array (
        'type' => 'string',
        'description' => 'The message BBCode UID',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.modify_text_for_display_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 598,
    ),
    'description' => 'Use this event to modify the text before it is parsed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text before it is',
      1 => 'parsed',
    ),
    'name' => 'core.modify_text_for_display_before',
    'tooltip_id' => 'stt_c56db7ed',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode UID',
      ),
      'bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode Bitfield',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
      'censor_text' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to apply word censors',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.modify_text_for_display_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 669,
    ),
    'description' => 'Use this event to modify the text after it is parsed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text after it is',
      1 => 'parsed',
    ),
    'name' => 'core.modify_text_for_display_after',
    'tooltip_id' => 'stt_68be6951',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode UID',
      ),
      'bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode Bitfield',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.modify_text_for_storage_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 731,
    ),
    'description' => 'Use this event to modify the text before it is prepared for storage',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text before it is',
      1 => 'prepared for storage',
    ),
    'name' => 'core.modify_text_for_storage_before',
    'tooltip_id' => 'stt_c9b72807',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode UID',
      ),
      'bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode Bitfield',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
      'allow_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse BBCode',
      ),
      'allow_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse URLs',
      ),
      'allow_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse Smilies',
      ),
      'allow_img_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse the [img] BBCode',
      ),
      'allow_flash_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse the [flash] BBCode',
      ),
      'allow_quote_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse the [quote] BBCode',
      ),
      'allow_url_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to parse the [url] BBCode',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode to parse text as, e.g. post or sig',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.2.0-a1' => 'Added mode',
    ),
  ),
  'core.modify_text_for_storage_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 768,
    ),
    'description' => 'Use this event to modify the text after it is prepared for storage',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text after it is',
      1 => 'prepared for storage',
    ),
    'name' => 'core.modify_text_for_storage_after',
    'tooltip_id' => 'stt_043abb9a',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode UID',
      ),
      'bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode Bitfield',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
      'message_parser' => 
      array (
        'type' => 'string',
        'description' => 'The message_parser object',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added message_parser to vars',
    ),
  ),
  'core.modify_text_for_edit_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 791,
    ),
    'description' => 'Use this event to modify the text before it is decoded for editing',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text before it is',
      1 => 'decoded for editing',
    ),
    'name' => 'core.modify_text_for_edit_before',
    'tooltip_id' => 'stt_495e5316',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The BBCode UID',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.modify_text_for_edit_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 804,
    ),
    'description' => 'Use this event to modify the text after it is decoded for editing',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the text after it is',
      1 => 'decoded for editing',
    ),
    'name' => 'core.modify_text_for_edit_after',
    'tooltip_id' => 'stt_8826610f',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The text to parse',
      ),
      'flags' => 
      array (
        'type' => 'int',
        'description' => 'The BBCode Flags',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.smiley_text_root_path' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 1119,
    ),
    'description' => 'Event to override the root_path for smilies',
    'description_wrapped' => 
    array (
      0 => 'Event to override the root_path for smilies',
    ),
    'name' => 'core.smiley_text_root_path',
    'tooltip_id' => 'stt_eb9ad8cf',
    'vars' => 
    array (
      'root_path' => 
      array (
        'type' => 'string',
        'description' => 'root_path for smilies',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.parse_attachments_modify_template_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 1381,
    ),
    'description' => 'Use this event to modify the attachment template data.',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the attachment template',
      1 => 'data.',
    ),
    'name' => 'core.parse_attachments_modify_template_data',
    'tooltip_id' => 'stt_012eced5',
    'vars' => 
    array (
      'attachment' => 
      array (
        'type' => 'array',
        'description' => 'Array with attachment data',
      ),
      'block_array' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the attachment',
      ),
      'display_cat' => 
      array (
        'type' => 'int',
        'description' => 'Attachment category data',
      ),
      'download_link' => 
      array (
        'type' => 'string',
        'description' => 'Attachment download link',
      ),
      'extensions' => 
      array (
        'type' => 'array',
        'description' => 'Array with attachment extensions data',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'The forum id the attachments are displayed in (false if in private message)',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if we are in post preview mode',
      ),
      'update_count' => 
      array (
        'type' => 'array',
        'description' => 'Array with attachment ids to update download count',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.modify_username_string' => 
  array (
    'locations' => 
    array (
      'includes/functions_content.php' => 1653,
    ),
    'description' => 'Use this event to change the output of get_username_string()',
    'description_wrapped' => 
    array (
      0 => 'Use this event to change the output of',
      1 => 'get_username_string()',
    ),
    'name' => 'core.modify_username_string',
    'tooltip_id' => 'stt_07b20b76',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'profile|username|colour|full|no_profile',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'String or array of additional url',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'The user\'s username',
      ),
      'username_colour' => 
      array (
        'type' => 'string',
        'description' => 'The user\'s colour',
      ),
      'guest_username' => 
      array (
        'type' => 'string',
        'description' => 'Optional parameter to specify the',
      ),
      'custom_profile_url' => 
      array (
        'type' => 'string',
        'description' => 'Optional parameter to specify a',
      ),
      'username_string' => 
      array (
        'type' => 'string',
        'description' => 'The string that has been generated',
      ),
      '_profile_cache' => 
      array (
        'type' => 'array',
        'description' => 'Array of original return templates',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.display_forums_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 148,
    ),
    'description' => 'Event to modify the SQL query before the forum data is queried',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the forum',
      1 => 'data is queried',
    ),
    'name' => 'core.display_forums_modify_sql',
    'tooltip_id' => 'stt_ee622854',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of the forums',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.display_forums_modify_row' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 172,
    ),
    'description' => 'Event to modify the data set of a forum',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the data set of a forum',
    ),
    'name' => 'core.display_forums_modify_row',
    'tooltip_id' => 'stt_b184b450',
    'vars' => 
    array (
      'branch_root_id' => 
      array (
        'type' => 'int',
        'description' => 'Last top-level forum',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the forum',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.display_forums_modify_forum_rows' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 339,
    ),
    'description' => 'Event to modify the forum rows data set',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the forum rows data set',
    ),
    'name' => 'core.display_forums_modify_forum_rows',
    'tooltip_id' => 'stt_2359e75e',
    'vars' => 
    array (
      'forum_rows' => 
      array (
        'type' => 'array',
        'description' => 'Data array of all forums we display',
      ),
      'subforums' => 
      array (
        'type' => 'array',
        'description' => 'Data array of all subforums we display',
      ),
      'branch_root_id' => 
      array (
        'type' => 'int',
        'description' => 'Current top-level forum',
      ),
      'parent_id' => 
      array (
        'type' => 'int',
        'description' => 'Current parent forum',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the forum',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.display_forums_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 409,
    ),
    'description' => 'Event to perform additional actions before the forum list is being generated',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions before the',
      1 => 'forum list is being generated',
    ),
    'name' => 'core.display_forums_before',
    'tooltip_id' => 'stt_eb0facb9',
    'vars' => 
    array (
      'active_forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data to display active topics',
      ),
      'display_moderators' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if we display forum moderators',
      ),
      'forum_moderators' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum moderators list',
      ),
      'forum_rows' => 
      array (
        'type' => 'array',
        'description' => 'Data array of all forums we display',
      ),
      'return_moderators' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if moderators list should be returned',
      ),
      'root_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the root forum data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.display_forums_modify_category_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 455,
    ),
    'description' => 'Modify the template data block of the \'category\'',
    'description_wrapped' => 
    array (
      0 => 'Modify the template data block of the \'category\'',
    ),
    'name' => 'core.display_forums_modify_category_template_vars',
    'tooltip_id' => 'stt_cd9d3255',
    'vars' => 
    array (
      'cat_row' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the \'category\'',
      ),
      'last_catless' => 
      array (
        'type' => 'bool',
        'description' => 'The flag indicating whether the last forum had a parent category',
      ),
      'root_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the root forum data',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the \'category\'',
      ),
    ),
    'since' => '3.1.0-RC4',
    'changes' => 
    array (
      '3.1.7-RC1' => 'Removed undefined catless variable',
    ),
  ),
  'core.display_forums_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 659,
    ),
    'description' => 'Modify the template data block of the forum',
    'description_wrapped' => 
    array (
      0 => 'Modify the template data block of the forum',
    ),
    'name' => 'core.display_forums_modify_template_vars',
    'tooltip_id' => 'stt_61a81b0b',
    'vars' => 
    array (
      'forum_row' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the forum',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the forum',
      ),
      'subforums_row' => 
      array (
        'type' => 'array',
        'description' => 'Template data of subforums',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-b5' => 'Added var subforums_row',
    ),
  ),
  'core.display_forums_add_template_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 688,
    ),
    'description' => 'Modify and/or assign additional template data for the forum after forumrow loop has been assigned. This can be used to create additional forumrow subloops in extensions.',
    'description_wrapped' => 
    array (
      0 => 'Modify and/or assign additional template data for',
      1 => 'the forum after forumrow loop has been assigned.',
      2 => 'This can be used to create additional forumrow',
      3 => 'subloops in extensions.',
    ),
    'name' => 'core.display_forums_add_template_data',
    'tooltip_id' => 'stt_1e949f38',
    'vars' => 
    array (
      'forum_row' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the forum',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the forum',
      ),
      'subforums_list' => 
      array (
        'type' => 'array',
        'description' => 'The data of subforums',
      ),
      'subforums_row' => 
      array (
        'type' => 'array',
        'description' => 'Template data of subforums',
      ),
      'catless' => 
      array (
        'type' => 'bool',
        'description' => 'The flag indicating whether a forum has a parent category',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.display_forums_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 722,
    ),
    'description' => 'Event to perform additional actions after the forum list has been generated',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions after the',
      1 => 'forum list has been generated',
    ),
    'name' => 'core.display_forums_after',
    'tooltip_id' => 'stt_bea8bc2c',
    'vars' => 
    array (
      'active_forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data to display active topics',
      ),
      'display_moderators' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if we display forum moderators',
      ),
      'forum_moderators' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum moderators list',
      ),
      'forum_rows' => 
      array (
        'type' => 'array',
        'description' => 'Data array of all forums we display',
      ),
      'return_moderators' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if moderators list should be returned',
      ),
      'root_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the root forum data',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.generate_forum_nav' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 839,
    ),
    'description' => 'Event to modify the navlinks text',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the navlinks text',
    ),
    'name' => 'core.generate_forum_nav',
    'tooltip_id' => 'stt_eb9099dc',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum data',
      ),
      'forum_template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with generic forum template data',
      ),
      'microdata_attr' => 
      array (
        'type' => 'string',
        'description' => 'The microdata attribute',
      ),
      'navlinks_parents' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum parents navlinks data',
      ),
      'navlinks' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum navlinks data',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.display_custom_bbcodes_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1106,
    ),
    'description' => 'Event to modify the SQL query before custom bbcode data is queried',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before custom bbcode',
      1 => 'data is queried',
    ),
    'name' => 'core.display_custom_bbcodes_modify_sql',
    'tooltip_id' => 'stt_97a4fb1f',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the bbcode data',
      ),
      'num_predefined_bbcodes' => 
      array (
        'type' => 'int',
        'description' => 'The number of predefined core bbcodes',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.display_custom_bbcodes_modify_row' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1146,
    ),
    'description' => 'Event to modify the template data block of a custom bbcode',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template data block of a',
      1 => 'custom bbcode',
    ),
    'name' => 'core.display_custom_bbcodes_modify_row',
    'tooltip_id' => 'stt_c842671b',
    'vars' => 
    array (
      'custom_tags' => 
      array (
        'type' => 'array',
        'description' => 'Template data of the bbcode',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'The data of the bbcode',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.display_custom_bbcodes' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1160,
    ),
    'description' => 'Display custom bbcodes',
    'description_wrapped' => 
    array (
      0 => 'Display custom bbcodes',
    ),
    'name' => 'core.display_custom_bbcodes',
    'tooltip_id' => 'stt_5431df65',
    'since' => '3.1.0-a1',
  ),
  'core.display_user_activity_modify_actives' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1257,
    ),
    'description' => 'Alter list of forums and topics to display as active',
    'description_wrapped' => 
    array (
      0 => 'Alter list of forums and topics to display as',
      1 => 'active',
    ),
    'name' => 'core.display_user_activity_modify_actives',
    'tooltip_id' => 'stt_484b08c8',
    'vars' => 
    array (
      'userdata' => 
      array (
        'type' => 'array',
        'description' => 'User\'s data',
      ),
      'active_f_row' => 
      array (
        'type' => 'array',
        'description' => 'List of active forums',
      ),
      'active_t_row' => 
      array (
        'type' => 'array',
        'description' => 'List of active posts',
      ),
      'show_user_activity' => 
      array (
        'type' => 'bool',
        'description' => 'Show user forum and topic activity',
      ),
    ),
    'since' => '3.1.0-RC3',
    'changes' => 
    array (
      '3.2.5-RC1' => 'Added show_user_activity into event',
    ),
  ),
  'core.modify_user_rank' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1519,
    ),
    'description' => 'Preparing a user\'s rank before displaying',
    'description_wrapped' => 
    array (
      0 => 'Preparing a user\'s rank before displaying',
    ),
    'name' => 'core.modify_user_rank',
    'tooltip_id' => 'stt_4e203a9c',
    'vars' => 
    array (
      'user_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s data',
      ),
      'user_posts' => 
      array (
        'type' => 'int',
        'description' => 'User_posts to change',
      ),
    ),
    'since' => '3.1.0-RC4',
  ),
  'core.get_user_rank_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1568,
    ),
    'description' => 'Modify a user\'s rank before displaying',
    'description_wrapped' => 
    array (
      0 => 'Modify a user\'s rank before displaying',
    ),
    'name' => 'core.get_user_rank_after',
    'tooltip_id' => 'stt_ddfa55b7',
    'vars' => 
    array (
      'user_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s data',
      ),
      'user_posts' => 
      array (
        'type' => 'int',
        'description' => 'User_posts to change',
      ),
      'user_rank_data' => 
      array (
        'type' => 'array',
        'description' => 'User rank data',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.memberlist_prepare_profile_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_display.php' => 1710,
    ),
    'description' => 'Preparing a user\'s data before displaying it in profile and memberlist',
    'description_wrapped' => 
    array (
      0 => 'Preparing a user\'s data before displaying it in',
      1 => 'profile and memberlist',
    ),
    'name' => 'core.memberlist_prepare_profile_data',
    'tooltip_id' => 'stt_a236cb65',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s data',
      ),
      'template_data' => 
      array (
        'type' => 'array',
        'description' => 'Template array with user\'s data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.send_file_to_browser_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_download.php' => 170,
    ),
    'description' => 'Event to alter attachment before it is sent to browser.',
    'description_wrapped' => 
    array (
      0 => 'Event to alter attachment before it is sent to',
      1 => 'browser.',
    ),
    'name' => 'core.send_file_to_browser_before',
    'tooltip_id' => 'stt_522843ed',
    'vars' => 
    array (
      'attachment' => 
      array (
        'type' => 'array',
        'description' => 'Attachment data',
      ),
      'upload_dir' => 
      array (
        'type' => 'string',
        'description' => 'Relative path of upload directory',
      ),
      'category' => 
      array (
        'type' => 'int',
        'description' => 'Attachment category',
      ),
      'filename' => 
      array (
        'type' => 'string',
        'description' => 'Path to file, including filename',
      ),
      'size' => 
      array (
        'type' => 'int',
        'description' => 'File size',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.modify_pm_attach_download_auth' => 
  array (
    'locations' => 
    array (
      'includes/functions_download.php' => 728,
    ),
    'description' => 'Event to modify PM attachments download auth',
    'description_wrapped' => 
    array (
      0 => 'Event to modify PM attachments download auth',
    ),
    'name' => 'core.modify_pm_attach_download_auth',
    'tooltip_id' => 'stt_1d44363b',
    'vars' => 
    array (
      'allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is allowed to download from that PM or not',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the PM to download from',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user id for auth check',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.mcp_get_post_data_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_mcp.php' => 295,
    ),
    'description' => 'This event allows you to modify post data displayed in the MCP',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify post data',
      1 => 'displayed in the MCP',
    ),
    'name' => 'core.mcp_get_post_data_after',
    'tooltip_id' => 'stt_cc17d7dc',
    'vars' => 
    array (
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids that have been fetched',
      ),
      'acl_list' => 
      array (
        'type' => 'mixed',
        'description' => 'Either false or an array with permission strings to check',
      ),
      'read_tracking' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to take last mark read time into account',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'The array of posts to be returned',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.mcp_sorting_query_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_mcp.php' => 641,
    ),
    'description' => 'This event allows you to control the SQL query used to get the total number of reports the user can access.',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to control the SQL query',
      1 => 'used to get the total number of reports the user',
      2 => 'can access.',
    ),
    'name' => 'core.mcp_sorting_query_before',
    'tooltip_id' => 'stt_f2726ca9',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'The current SQL search string',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'An id related to the module(s) the user is viewing',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Which kind of information is this being used for displaying. Posts, topics, etc...',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum id of the posts the user is trying to access, if not 0',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic id of the posts the user is trying to access, if not 0',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'The max age of the oldest report to be shown, in days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The way the user has decided to sort the data.',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Either \'d\' for "DESC" or \'a\' for \'ASC\' in the SQL query',
      ),
      'limit_days' => 
      array (
        'type' => 'int',
        'description' => 'The possible max ages of the oldest report for the user to choose, in days.',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'SQL text (values) for the possible names of the ways of sorting data (keys).',
      ),
      'sort_by_text' => 
      array (
        'type' => 'array',
        'description' => 'Language text (values) for the possible names of the ways of sorting data (keys).',
      ),
      'min_time' => 
      array (
        'type' => 'int',
        'description' => 'Integer with the minimum post time that the user is searching for',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'int',
        'description' => 'Time limiting options used in the SQL query.',
      ),
      'total' => 
      array (
        'type' => 'int',
        'description' => 'The total number of reports that exist. Only set if you want to override the result',
      ),
      'where_sql' => 
      array (
        'type' => 'string',
        'description' => 'Extra information included in the WHERE clause. It must end with "WHERE" or "AND" or "OR".',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.modify_notification_template' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 341,
    ),
    'description' => 'Event to modify the template before parsing',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template before parsing',
    ),
    'name' => 'core.modify_notification_template',
    'tooltip_id' => 'stt_df6958a4',
    'vars' => 
    array (
      'method' => 
      array (
        'type' => 'int',
        'description' => 'User notification method NOTIFY_EMAIL|NOTIFY_IM|NOTIFY_BOTH',
      ),
      'break' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the function only formats the subject',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'template' => 
      array (
        'type' => '\\phpbb\\template\\template',
        'description' => 'The (readonly) template object',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.modify_notification_message' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 358,
    ),
    'description' => 'Event to modify notification message text after parsing',
    'description_wrapped' => 
    array (
      0 => 'Event to modify notification message text after',
      1 => 'parsing',
    ),
    'name' => 'core.modify_notification_message',
    'tooltip_id' => 'stt_0dcc5cd8',
    'vars' => 
    array (
      'method' => 
      array (
        'type' => 'int',
        'description' => 'User notification method NOTIFY_EMAIL|NOTIFY_IM|NOTIFY_BOTH',
      ),
      'break' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the function only formats the subject',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'The message text',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.modify_email_headers' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 520,
    ),
    'description' => 'Event to modify email header entries',
    'description_wrapped' => 
    array (
      0 => 'Event to modify email header entries',
    ),
    'name' => 'core.modify_email_headers',
    'tooltip_id' => 'stt_2b0a4c9a',
    'vars' => 
    array (
      'headers' => 
      array (
        'type' => 'array',
        'description' => 'Array containing email header entries',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.notification_message_email' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 583,
    ),
    'description' => 'Event to send message via external transport',
    'description_wrapped' => 
    array (
      0 => 'Event to send message via external transport',
    ),
    'name' => 'core.notification_message_email',
    'tooltip_id' => 'stt_999452cf',
    'vars' => 
    array (
      'break' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the function return after hook',
      ),
      'addresses' => 
      array (
        'type' => 'array',
        'description' => 'The message recipients',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'msg' => 
      array (
        'type' => 'string',
        'description' => 'The message text',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.notification_message_process' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 947,
    ),
    'description' => 'Event to send message via external transport',
    'description_wrapped' => 
    array (
      0 => 'Event to send message via external transport',
    ),
    'name' => 'core.notification_message_process',
    'tooltip_id' => 'stt_5dfa1c2c',
    'vars' => 
    array (
      'break' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the function return after hook',
      ),
      'addresses' => 
      array (
        'type' => 'array',
        'description' => 'The message recipients',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'msg' => 
      array (
        'type' => 'string',
        'description' => 'The message text',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.phpbb_mail_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 1981,
    ),
    'description' => 'Modify data before sending out emails with PHP\'s mail function',
    'description_wrapped' => 
    array (
      0 => 'Modify data before sending out emails with PHP\'s',
      1 => 'mail function',
    ),
    'name' => 'core.phpbb_mail_before',
    'tooltip_id' => 'stt_e3116efa',
    'vars' => 
    array (
      'to' => 
      array (
        'type' => 'string',
        'description' => 'The message recipient',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'msg' => 
      array (
        'type' => 'string',
        'description' => 'The message text',
      ),
      'headers' => 
      array (
        'type' => 'string',
        'description' => 'The email headers',
      ),
      'eol' => 
      array (
        'type' => 'string',
        'description' => 'The endline character',
      ),
      'additional_parameters' => 
      array (
        'type' => 'string',
        'description' => 'The additional parameters',
      ),
    ),
    'since' => '3.3.6-RC1',
  ),
  'core.phpbb_mail_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_messenger.php' => 2007,
    ),
    'description' => 'Execute code after sending out emails with PHP\'s mail function',
    'description_wrapped' => 
    array (
      0 => 'Execute code after sending out emails with PHP\'s',
      1 => 'mail function',
    ),
    'name' => 'core.phpbb_mail_after',
    'tooltip_id' => 'stt_cd57d261',
    'vars' => 
    array (
      'to' => 
      array (
        'type' => 'string',
        'description' => 'The message recipient',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'The message subject',
      ),
      'msg' => 
      array (
        'type' => 'string',
        'description' => 'The message text',
      ),
      'headers' => 
      array (
        'type' => 'string',
        'description' => 'The email headers',
      ),
      'eol' => 
      array (
        'type' => 'string',
        'description' => 'The endline character',
      ),
      'additional_parameters' => 
      array (
        'type' => 'string',
        'description' => 'The additional parameters',
      ),
      'result' => 
      array (
        'type' => 'bool',
        'description' => 'True if the email was sent, false otherwise',
      ),
    ),
    'since' => '3.3.6-RC1',
  ),
  'core.modify_module_row' => 
  array (
    'locations' => 
    array (
      'includes/functions_module.php' => 314,
    ),
    'description' => 'This event allows to modify parameters for building modules list',
    'description_wrapped' => 
    array (
      0 => 'This event allows to modify parameters for',
      1 => 'building modules list',
    ),
    'name' => 'core.modify_module_row',
    'tooltip_id' => 'stt_a39e943d',
    'vars' => 
    array (
      'url_func' => 
      array (
        'type' => 'string',
        'description' => 'Function for building \'url_extra\'',
      ),
      'lang_func' => 
      array (
        'type' => 'string',
        'description' => 'Function for building the language name',
      ),
      'custom_func' => 
      array (
        'type' => 'string',
        'description' => 'Custom function for calling parameters on module init',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array holding the basic module data',
      ),
      'module_row' => 
      array (
        'type' => 'array',
        'description' => 'Array holding the module display parameters',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.module_auth' => 
  array (
    'locations' => 
    array (
      'includes/functions_module.php' => 431,
    ),
    'description' => 'Alter tokens for module authorisation check',
    'description_wrapped' => 
    array (
      0 => 'Alter tokens for module authorisation check',
    ),
    'name' => 'core.module_auth',
    'tooltip_id' => 'stt_2a3ca6a4',
    'vars' => 
    array (
      'valid_tokens' => 
      array (
        'type' => 'array',
        'description' => 'Valid tokens and their auth check',
      ),
      'module_auth' => 
      array (
        'type' => 'string',
        'description' => 'The module_auth of the current',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The current forum_id',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.generate_smilies_count_sql_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 78,
    ),
    'description' => 'Modify SQL query that fetches the total number of smilies in window mode',
    'description_wrapped' => 
    array (
      0 => 'Modify SQL query that fetches the total number of',
      1 => 'smilies in window mode',
    ),
    'name' => 'core.generate_smilies_count_sql_before',
    'tooltip_id' => 'stt_286601e4',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum where smilies are generated',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with the SQL query',
      ),
      'base_url' => 
      array (
        'type' => 'string',
        'description' => 'URL for the "More smilies" link and its pagination',
      ),
    ),
    'since' => '3.2.9-RC1',
    'changes' => 
    array (
      '3.2.10-RC1' => 'Added base_url',
    ),
  ),
  'core.generate_smilies_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 151,
    ),
    'description' => 'Modify the SQL query that fetches the smilies',
    'description_wrapped' => 
    array (
      0 => 'Modify the SQL query that fetches the smilies',
    ),
    'name' => 'core.generate_smilies_modify_sql',
    'tooltip_id' => 'stt_609b7dd8',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Smiley mode, either window or inline',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum where smilies are generated, or 0 if composing a private message',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with SQL query data',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.generate_smilies_modify_rowset' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 188,
    ),
    'description' => 'Modify smilies before they are assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify smilies before they are assigned to the',
      1 => 'template',
    ),
    'name' => 'core.generate_smilies_modify_rowset',
    'tooltip_id' => 'stt_0b56269b',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Smiley mode, either window or inline',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum where smilies are generated, or 0 if composing a private message',
      ),
      'smilies' => 
      array (
        'type' => 'array',
        'description' => 'Smiley rows fetched from the database',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.generate_smilies_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 204,
    ),
    'description' => 'Modify smiley root path before populating smiley list',
    'description_wrapped' => 
    array (
      0 => 'Modify smiley root path before populating smiley',
      1 => 'list',
    ),
    'name' => 'core.generate_smilies_before',
    'tooltip_id' => 'stt_391e0f58',
    'vars' => 
    array (
      'root_path' => 
      array (
        'type' => 'string',
        'description' => 'root_path for smilies',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.generate_smilies_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 233,
    ),
    'description' => 'This event is called after the smilies are populated',
    'description_wrapped' => 
    array (
      0 => 'This event is called after the smilies are',
      1 => 'populated',
    ),
    'name' => 'core.generate_smilies_after',
    'tooltip_id' => 'stt_a28ea00a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the smilies: window|inline',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID we are currently in',
      ),
      'display_link' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we display the "more smilies" link?',
      ),
      'base_url' => 
      array (
        'type' => 'string',
        'description' => 'URL for the "More smilies" link and its pagination',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.2.10-RC1' => 'Added base_url',
    ),
  ),
  'core.update_post_info_modify_posts_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 365,
    ),
    'description' => 'Event to modify the SQL array to get the post and user data from all last posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL array to get the post and',
      1 => 'user data from all last posts',
    ),
    'name' => 'core.update_post_info_modify_posts_sql',
    'tooltip_id' => 'stt_67dcd01b',
    'vars' => 
    array (
      'type' => 
      array (
        'type' => 'string',
        'description' => 'The table being updated (forum or topic)',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array to get some of the last posts\' data',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.update_post_info_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 395,
    ),
    'description' => 'Event to modify the update_sql array to add new update data for forum or topic last posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the update_sql array to add new',
      1 => 'update data for forum or topic last posts',
    ),
    'name' => 'core.update_post_info_modify_sql',
    'tooltip_id' => 'stt_e17e30c7',
    'vars' => 
    array (
      'type' => 
      array (
        'type' => 'string',
        'description' => 'The table being updated (forum or topic)',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the posts data',
      ),
      'update_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array with SQL data to update the forums or topics table with',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.thumbnail_create_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 673,
    ),
    'description' => 'Create thumbnail event to replace GD thumbnail creation with for example ImageMagick',
    'description_wrapped' => 
    array (
      0 => 'Create thumbnail event to replace GD thumbnail',
      1 => 'creation with for example ImageMagick',
    ),
    'name' => 'core.thumbnail_create_before',
    'tooltip_id' => 'stt_41a26089',
    'vars' => 
    array (
      'source' => 
      array (
        'type' => 'string',
        'description' => 'Image source path',
      ),
      'destination' => 
      array (
        'type' => 'string',
        'description' => 'Thumbnail destination path',
      ),
      'mimetype' => 
      array (
        'type' => 'string',
        'description' => 'Image mime type',
      ),
      'new_width' => 
      array (
        'type' => 'float',
        'description' => 'Calculated thumbnail width',
      ),
      'new_height' => 
      array (
        'type' => 'float',
        'description' => 'Calculated thumbnail height',
      ),
      'thumbnail_created' => 
      array (
        'type' => 'bool',
        'description' => 'Set to true to skip default GD thumbnail creation',
      ),
    ),
    'since' => '3.2.4',
  ),
  'core.modify_default_attachments_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 849,
    ),
    'description' => 'Modify default attachments template vars',
    'description_wrapped' => 
    array (
      0 => 'Modify default attachments template vars',
    ),
    'name' => 'core.modify_default_attachments_template_vars',
    'tooltip_id' => 'stt_6a19bae2',
    'vars' => 
    array (
      'allowed_attachments' => 
      array (
        'type' => 'array',
        'description' => 'Array containing allowed attachments data',
      ),
      'default_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing default attachments template vars',
      ),
    ),
    'since' => '3.3.6-RC1',
  ),
  'core.modify_inline_attachments_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 895,
    ),
    'description' => 'Modify inline attachments template vars',
    'description_wrapped' => 
    array (
      0 => 'Modify inline attachments template vars',
    ),
    'name' => 'core.modify_inline_attachments_template_vars',
    'tooltip_id' => 'stt_9f513633',
    'vars' => 
    array (
      'attachment_data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing attachments data',
      ),
      'attachrow_template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing attachments template vars',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.load_drafts_draft_list_result' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 979,
    ),
    'description' => 'Drafts found and their topics Edit $draft_rows in order to add or remove drafts loaded',
    'description_wrapped' => 
    array (
      0 => 'Drafts found and their topics Edit $draft_rows in',
      1 => 'order to add or remove drafts loaded',
    ),
    'name' => 'core.load_drafts_draft_list_result',
    'tooltip_id' => 'stt_1802521b',
    'vars' => 
    array (
      'draft_rows' => 
      array (
        'type' => 'array',
        'description' => 'The drafts query result. Includes its forum id and everything about the draft',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'The list of topics got from the topics table',
      ),
      'topic_rows' => 
      array (
        'type' => 'array',
        'description' => 'The topics that draft_rows references',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.topic_review_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 1123,
    ),
    'description' => 'Event to modify the SQL query for topic reviews',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query for topic reviews',
    ),
    'name' => 'core.topic_review_modify_sql_ary',
    'tooltip_id' => 'stt_9ea2de53',
    'vars' => 
    array (
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID that is being reviewed',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic\'s forum ID',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The topic review mode',
      ),
      'cur_post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post offset ID',
      ),
      'show_quote_button' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the quote button should be displayed',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post IDs',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with the SQL query',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.topic_review_modify_post_list' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 1184,
    ),
    'description' => 'Event to modify the posts list for topic reviews',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the posts list for topic reviews',
    ),
    'name' => 'core.topic_review_modify_post_list',
    'tooltip_id' => 'stt_fcee613c',
    'vars' => 
    array (
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post attachments data',
      ),
      'cur_post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post offset ID',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic\'s forum ID',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The topic review mode',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post IDs',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the posts data',
      ),
      'show_quote_button' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the quote button should be displayed',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID that is being reviewed',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.topic_review_modify_row' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 1300,
    ),
    'description' => 'Event to modify the template data block for topic reviews',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template data block for topic',
      1 => 'reviews',
    ),
    'name' => 'core.topic_review_modify_row',
    'tooltip_id' => 'stt_55caa906',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The review mode',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic that is being reviewed',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic\'s forum',
      ),
      'cur_post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post offset id',
      ),
      'current_row_number' => 
      array (
        'type' => 'int',
        'description' => 'Number of the current row being iterated',
      ),
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the current post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original post and user data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.delete_post_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 1613,
    ),
    'description' => 'This event is used for performing actions directly after a post or topic has been deleted.',
    'description_wrapped' => 
    array (
      0 => 'This event is used for performing actions directly',
      1 => 'after a post or topic has been deleted.',
    ),
    'name' => 'core.delete_post_after',
    'tooltip_id' => 'stt_78b2790b',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Post forum ID',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Post topic ID',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post ID',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Post data',
      ),
      'is_soft' => 
      array (
        'type' => 'bool',
        'description' => 'Soft delete flag',
      ),
      'softdelete_reason' => 
      array (
        'type' => 'string',
        'description' => 'Soft delete reason',
      ),
      'post_mode' => 
      array (
        'type' => 'string',
        'description' => 'delete_topic, delete_first_post, delete_last_post or delete',
      ),
      'next_post_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Next post ID in the topic (post ID or false)',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.modify_submit_post_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 1652,
    ),
    'description' => 'Modify the data for post submitting',
    'description_wrapped' => 
    array (
      0 => 'Modify the data for post submitting',
    ),
    'name' => 'core.modify_submit_post_data',
    'tooltip_id' => 'stt_d32a0eff',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posting mode value',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post subject value',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post author name',
      ),
      'topic_type' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing topic type value',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll data for the post',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the data for the post',
      ),
      'update_message' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the post will be updated',
      ),
      'update_search_index' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the search index will be updated',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.submit_post_modify_sql_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 2008,
    ),
    'description' => 'Modify sql query data for post submitting',
    'description_wrapped' => 
    array (
      0 => 'Modify sql query data for post submitting',
    ),
    'name' => 'core.submit_post_modify_sql_data',
    'tooltip_id' => 'stt_591fa0da',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the data for the post',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll data for the post',
      ),
      'post_mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posting mode value',
      ),
      'sql_data' => 
      array (
        'type' => 'bool',
        'description' => 'Array with the data for the posting SQL query',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post subject value',
      ),
      'topic_type' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing topic type value',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post author name',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.modify_submit_notification_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 2454,
    ),
    'description' => 'This event allows you to modify the notification data upon submission',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the notification',
      1 => 'data upon submission',
    ),
    'name' => 'core.modify_submit_notification_data',
    'tooltip_id' => 'stt_b0a72c64',
    'vars' => 
    array (
      'notification_data' => 
      array (
        'type' => 'array',
        'description' => 'The notification data to be inserted in to the database',
      ),
      'data_ary' => 
      array (
        'type' => 'array',
        'description' => 'The data array with a lot of the post submission data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The posting mode',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'The poster id',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.submit_post_end' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 2634,
    ),
    'description' => 'This event is used for performing actions directly after a post or topic has been submitted. When a new topic is posted, the topic ID is available in the $data array.',
    'description_wrapped' => 
    array (
      0 => 'This event is used for performing actions directly',
      1 => 'after a post or topic has been submitted. When a',
      2 => 'new topic is posted, the topic ID is available in',
      3 => 'the $data array.',
    ),
    'name' => 'core.submit_post_end',
    'tooltip_id' => 'stt_3fd7ee6a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing posting mode value',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post subject value',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing post author name',
      ),
      'topic_type' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing topic type value',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll data for the post',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the data for the post',
      ),
      'post_visibility' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing up to date post visibility',
      ),
      'update_message' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the post will be updated',
      ),
      'update_search_index' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the search index will be updated',
      ),
      'url' => 
      array (
        'type' => 'string',
        'description' => 'The "Return to topic" URL',
      ),
    ),
    'since' => '3.1.0-a3',
    'changes' => 
    array (
      '3.1.0-RC3' => 'Added vars mode, subject, username, topic_type,',
    ),
  ),
  'core.handle_post_delete_conditions' => 
  array (
    'locations' => 
    array (
      'includes/functions_posting.php' => 2820,
    ),
    'description' => 'This event allows to modify the conditions for the post deletion',
    'description_wrapped' => 
    array (
      0 => 'This event allows to modify the conditions for the',
      1 => 'post deletion',
    ),
    'name' => 'core.handle_post_delete_conditions',
    'tooltip_id' => 'stt_451fc45b',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the forum',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the topic',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post',
      ),
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post data',
      ),
      'is_soft' => 
      array (
        'type' => 'bool',
        'description' => 'The flag indicating whether it is the soft delete mode',
      ),
      'delete_reason' => 
      array (
        'type' => 'string',
        'description' => 'Description for the post deletion reason',
      ),
      'force_delete_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to delete the post (all permissions and conditions are ignored)',
      ),
      'force_softdelete_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to softdelete the post (all permissions and conditions are ignored)',
      ),
      'perm_check' => 
      array (
        'type' => 'string',
        'description' => 'The deletion mode softdelete|delete',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.delete_pm_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 1055,
    ),
    'description' => 'Get all info for PM(s) before they are deleted',
    'description_wrapped' => 
    array (
      0 => 'Get all info for PM(s) before they are deleted',
    ),
    'name' => 'core.delete_pm_before',
    'tooltip_id' => 'stt_0aa06898',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the user requested the message delete',
      ),
      'msg_ids' => 
      array (
        'type' => 'array',
        'description' => 'array of all messages to be deleted',
      ),
      'folder_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the user folder where the messages are stored',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.submit_pm_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 1622,
    ),
    'description' => 'Get all parts of the PM that are to be submited to the DB.',
    'description_wrapped' => 
    array (
      0 => 'Get all parts of the PM that are to be submited to',
      1 => 'the DB.',
    ),
    'name' => 'core.submit_pm_before',
    'tooltip_id' => 'stt_394b40c8',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'PM Post mode - post|reply|quote|quotepost|forward|edit',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Subject of the private message',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The whole row data of the PM.',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.submit_pm_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 1943,
    ),
    'description' => 'Get PM message ID after submission to DB',
    'description_wrapped' => 
    array (
      0 => 'Get PM message ID after submission to DB',
    ),
    'name' => 'core.submit_pm_after',
    'tooltip_id' => 'stt_f7c1300a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'PM Post mode - post|reply|quote|quotepost|forward|edit',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Subject of the private message',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The whole row data of the PM.',
      ),
      'pm_data' => 
      array (
        'type' => 'array',
        'description' => 'The data sent to notification class',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.message_history_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 2012,
    ),
    'description' => 'Event to modify the SQL query before the message history in private message is queried',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the message',
      1 => 'history in private message is queried',
    ),
    'name' => 'core.message_history_modify_sql_ary',
    'tooltip_id' => 'stt_a99c4dc0',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of the message history in private message',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.message_history_modify_rowset' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 2076,
    ),
    'description' => 'Modify message rows before displaying the history in private messages',
    'description_wrapped' => 
    array (
      0 => 'Modify message rows before displaying the history',
      1 => 'in private messages',
    ),
    'name' => 'core.message_history_modify_rowset',
    'tooltip_id' => 'stt_004516de',
    'vars' => 
    array (
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the private message',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the message author',
      ),
      'message_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with message data',
      ),
      'folder' => 
      array (
        'type' => 'array',
        'description' => 'Array with data of user\'s message folders',
      ),
      'in_post_mode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not we are viewing or composing',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with message history data',
      ),
      'url' => 
      array (
        'type' => 'string',
        'description' => 'Base URL used to generate links to private messages',
      ),
      'title' => 
      array (
        'type' => 'string',
        'description' => 'Subject of the private message',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.message_history_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/functions_privmsgs.php' => 2163,
    ),
    'description' => 'Modify the template vars for displaying the message history in private message',
    'description_wrapped' => 
    array (
      0 => 'Modify the template vars for displaying the',
      1 => 'message history in private message',
    ),
    'name' => 'core.message_history_modify_template_vars',
    'tooltip_id' => 'stt_7f515f53',
    'vars' => 
    array (
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the query',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the action user row',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.update_username' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 171,
    ),
    'description' => 'Update a username when it is changed',
    'description_wrapped' => 
    array (
      0 => 'Update a username when it is changed',
    ),
    'name' => 'core.update_username',
    'tooltip_id' => 'stt_308a1d06',
    'vars' => 
    array (
      'old_name' => 
      array (
        'type' => 'string',
        'description' => 'The old username that is replaced',
      ),
      'new_name' => 
      array (
        'type' => 'string',
        'description' => 'The new username',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.user_add_modify_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 291,
    ),
    'description' => 'Use this event to modify the values to be inserted when a user is added',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the values to be inserted',
      1 => 'when a user is added',
    ),
    'name' => 'core.user_add_modify_data',
    'tooltip_id' => 'stt_e959ec7e',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array of user details submitted to user_add',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of Custom profile fields submitted to user_add',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of data to be inserted when a user is added',
      ),
      'notifications_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of notification data to be inserted when a user is added',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-b5' => 'Added user_row and cp_data',
      '3.1.11-RC1' => 'Added notifications_data',
    ),
  ),
  'core.user_add_modify_notifications_data' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 397,
    ),
    'description' => 'Modify the notifications data to be inserted in the database when a user is added',
    'description_wrapped' => 
    array (
      0 => 'Modify the notifications data to be inserted in',
      1 => 'the database when a user is added',
    ),
    'name' => 'core.user_add_modify_notifications_data',
    'tooltip_id' => 'stt_f063aa00',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array of user details submitted to user_add',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of Custom profile fields submitted to user_add',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of data to be inserted when a user is added',
      ),
      'notifications_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of notification data to be inserted when a user is added',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.user_add_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 420,
    ),
    'description' => 'Event that returns user id, user details and user CPF of newly registered user',
    'description_wrapped' => 
    array (
      0 => 'Event that returns user id, user details and user',
      1 => 'CPF of newly registered user',
    ),
    'name' => 'core.user_add_after',
    'tooltip_id' => 'stt_70ec21af',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User id of newly registered user',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array of user details submitted to user_add',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array of Custom profile fields submitted to user_add',
      ),
    ),
    'since' => '3.1.0-b5',
  ),
  'core.delete_user_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 475,
    ),
    'description' => 'Event before of the performing of the user(s) delete action',
    'description_wrapped' => 
    array (
      0 => 'Event before of the performing of the user(s)',
      1 => 'delete action',
    ),
    'name' => 'core.delete_user_before',
    'tooltip_id' => 'stt_1bb3fc4f',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of posts deletion (retain|remove)',
      ),
      'user_ids' => 
      array (
        'type' => 'array',
        'description' => 'ID(s) of the user(s) bound to be deleted',
      ),
      'retain_username' => 
      array (
        'type' => 'bool',
        'description' => 'True if username should be retained, false otherwise',
      ),
      'user_rows' => 
      array (
        'type' => 'array',
        'description' => 'Array containing data of the user(s) bound to be deleted',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.2.4-RC1' => 'Added user_rows',
    ),
  ),
  'core.delete_user_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 785,
    ),
    'description' => 'Event after the user(s) delete action has been performed',
    'description_wrapped' => 
    array (
      0 => 'Event after the user(s) delete action has been',
      1 => 'performed',
    ),
    'name' => 'core.delete_user_after',
    'tooltip_id' => 'stt_0d6b0ebc',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of posts deletion (retain|remove)',
      ),
      'user_ids' => 
      array (
        'type' => 'array',
        'description' => 'ID(s) of the deleted user(s)',
      ),
      'retain_username' => 
      array (
        'type' => 'bool',
        'description' => 'True if username should be retained, false otherwise',
      ),
      'user_rows' => 
      array (
        'type' => 'array',
        'description' => 'Array containing data of the deleted user(s)',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Added user_rows',
    ),
  ),
  'core.user_active_flip_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 871,
    ),
    'description' => 'Check or modify activated/deactivated users data before submitting it to the database',
    'description_wrapped' => 
    array (
      0 => 'Check or modify activated/deactivated users data',
      1 => 'before submitting it to the database',
    ),
    'name' => 'core.user_active_flip_before',
    'tooltip_id' => 'stt_98655cfd',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'User type changing mode, can be: flip|activate|deactivate',
      ),
      'reason' => 
      array (
        'type' => 'int',
        'description' => 'Reason for changing user type, can be: INACTIVE_REGISTER|INACTIVE_PROFILE|INACTIVE_MANUAL|INACTIVE_REMIND',
      ),
      'activated' => 
      array (
        'type' => 'int',
        'description' => 'The number of users to be activated',
      ),
      'deactivated' => 
      array (
        'type' => 'int',
        'description' => 'The number of users to be deactivated',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user ids to change user type',
      ),
      'sql_statements' => 
      array (
        'type' => 'array',
        'description' => 'Array with users data to submit to the database, keys: user ids, values: arrays with user data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.user_active_flip_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 899,
    ),
    'description' => 'Perform additional actions after the users have been activated/deactivated',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after the users have',
      1 => 'been activated/deactivated',
    ),
    'name' => 'core.user_active_flip_after',
    'tooltip_id' => 'stt_084e7bab',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'User type changing mode, can be: flip|activate|deactivate',
      ),
      'reason' => 
      array (
        'type' => 'int',
        'description' => 'Reason for changing user type, can be: INACTIVE_REGISTER|INACTIVE_PROFILE|INACTIVE_MANUAL|INACTIVE_REMIND',
      ),
      'activated' => 
      array (
        'type' => 'int',
        'description' => 'The number of users to be activated',
      ),
      'deactivated' => 
      array (
        'type' => 'int',
        'description' => 'The number of users to be deactivated',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user ids to change user type',
      ),
      'sql_statements' => 
      array (
        'type' => 'array',
        'description' => 'Array with users data to submit to the database, keys: user ids, values: arrays with user data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.user_unban' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 1441,
    ),
    'description' => 'Use this event to perform actions after the unban has been performed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to perform actions after the unban',
      1 => 'has been performed',
    ),
    'name' => 'core.user_unban',
    'tooltip_id' => 'stt_5074e3ef',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'One of the following: user, ip, email',
      ),
      'user_ids_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user_ids',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.delete_group_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 2694,
    ),
    'description' => 'Event after a group is deleted',
    'description_wrapped' => 
    array (
      0 => 'Event after a group is deleted',
    ),
    'name' => 'core.delete_group_after',
    'tooltip_id' => 'stt_7fb2dffa',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the deleted group',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the deleted group',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.group_add_user_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 2782,
    ),
    'description' => 'Event before users are added to a group',
    'description_wrapped' => 
    array (
      0 => 'Event before users are added to a group',
    ),
    'name' => 'core.group_add_user_before',
    'tooltip_id' => 'stt_4e207e75',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group to which users are added',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users to be added',
      ),
      'username_ary' => 
      array (
        'type' => 'array',
        'description' => 'Names of the users to be added',
      ),
      'pending' => 
      array (
        'type' => 'int',
        'description' => 'Pending setting, 1 if user(s) added are pending',
      ),
      'add_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users to be added who are not members yet',
      ),
    ),
    'since' => '3.3.15-RC1',
  ),
  'core.group_add_user_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 2841,
    ),
    'description' => 'Event after users are added to a group',
    'description_wrapped' => 
    array (
      0 => 'Event after users are added to a group',
    ),
    'name' => 'core.group_add_user_after',
    'tooltip_id' => 'stt_9bcf1b0b',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group to which users are added',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users which are added',
      ),
      'username_ary' => 
      array (
        'type' => 'array',
        'description' => 'names of the users which are added',
      ),
      'pending' => 
      array (
        'type' => 'int',
        'description' => 'Pending setting, 1 if user(s) added are pending',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.group_delete_user_before' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 2992,
    ),
    'description' => 'Event before users are removed from a group',
    'description_wrapped' => 
    array (
      0 => 'Event before users are removed from a group',
    ),
    'name' => 'core.group_delete_user_before',
    'tooltip_id' => 'stt_a7b21ed4',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group from which users are deleted',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users which are removed',
      ),
      'username_ary' => 
      array (
        'type' => 'array',
        'description' => 'names of the users which are removed',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.group_delete_user_after' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 3013,
    ),
    'description' => 'Event after users are removed from a group',
    'description_wrapped' => 
    array (
      0 => 'Event after users are removed from a group',
    ),
    'name' => 'core.group_delete_user_after',
    'tooltip_id' => 'stt_6a0a8f0d',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group from which users are deleted',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users which are removed',
      ),
      'username_ary' => 
      array (
        'type' => 'array',
        'description' => 'names of the users which are removed',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.user_set_group_attributes' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 3278,
    ),
    'description' => 'Event to perform additional actions on setting user group attributes',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions on setting',
      1 => 'user group attributes',
    ),
    'name' => 'core.user_set_group_attributes',
    'tooltip_id' => 'stt_dfe806e2',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users to set group attributes',
      ),
      'username_ary' => 
      array (
        'type' => 'array',
        'description' => 'Names of the users to set group attributes',
      ),
      'group_attributes' => 
      array (
        'type' => 'array',
        'description' => 'Group attributes which were changed',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Action to perform over the group members',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.user_set_default_group' => 
  array (
    'locations' => 
    array (
      'includes/functions_user.php' => 3476,
    ),
    'description' => 'Event when the default group is set for an array of users',
    'description_wrapped' => 
    array (
      0 => 'Event when the default group is set for an array',
      1 => 'of users',
    ),
    'name' => 'core.user_set_default_group',
    'tooltip_id' => 'stt_f64ebd5f',
    'vars' => 
    array (
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the group',
      ),
      'user_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'IDs of the users',
      ),
      'group_attributes' => 
      array (
        'type' => 'array',
        'description' => 'Group attributes which were changed',
      ),
      'update_listing' => 
      array (
        'type' => 'array',
        'description' => 'Update the list of moderators and foes',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'User attributes which were changed',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.mcp_ban_main' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_ban.php' => 62,
    ),
    'description' => 'Use this event to pass perform actions when a ban is issued or revoked',
    'description_wrapped' => 
    array (
      0 => 'Use this event to pass perform actions when a ban',
      1 => 'is issued or revoked',
    ),
    'name' => 'core.mcp_ban_main',
    'tooltip_id' => 'stt_3cb08889',
    'vars' => 
    array (
      'bansubmit' => 
      array (
        'type' => 'bool',
        'description' => 'True if a ban is issued',
      ),
      'unbansubmit' => 
      array (
        'type' => 'bool',
        'description' => 'True if a ban is removed',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the ban that is being worked on',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.mcp_ban_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_ban.php' => 105,
    ),
    'description' => 'Use this event to modify the ban details before the ban is performed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to modify the ban details before',
      1 => 'the ban is performed',
    ),
    'name' => 'core.mcp_ban_before',
    'tooltip_id' => 'stt_355de688',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'One of the following: user, ip, email',
      ),
      'ban' => 
      array (
        'type' => 'string',
        'description' => 'Either string or array with usernames, ips or email addresses',
      ),
      'ban_length' => 
      array (
        'type' => 'int',
        'description' => 'Ban length in minutes',
      ),
      'ban_length_other' => 
      array (
        'type' => 'string',
        'description' => 'Ban length as a date (YYYY-MM-DD)',
      ),
      'ban_exclude' => 
      array (
        'type' => 'bool',
        'description' => 'Are we banning or excluding from another ban',
      ),
      'ban_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to moderators',
      ),
      'ban_give_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to the banned user',
      ),
      'abort_ban' => 
      array (
        'type' => 'mixed',
        'description' => 'Either false, or an error message that is displayed to the user.',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.mcp_ban_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_ban.php' => 135,
    ),
    'description' => 'Use this event to perform actions after the ban has been performed',
    'description_wrapped' => 
    array (
      0 => 'Use this event to perform actions after the ban',
      1 => 'has been performed',
    ),
    'name' => 'core.mcp_ban_after',
    'tooltip_id' => 'stt_577c48c1',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'One of the following: user, ip, email',
      ),
      'ban' => 
      array (
        'type' => 'string',
        'description' => 'Either string or array with usernames, ips or email addresses',
      ),
      'ban_length' => 
      array (
        'type' => 'int',
        'description' => 'Ban length in minutes',
      ),
      'ban_length_other' => 
      array (
        'type' => 'string',
        'description' => 'Ban length as a date (YYYY-MM-DD)',
      ),
      'ban_exclude' => 
      array (
        'type' => 'bool',
        'description' => 'Are we banning or excluding from another ban',
      ),
      'ban_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to moderators',
      ),
      'ban_give_reason' => 
      array (
        'type' => 'string',
        'description' => 'Ban reason displayed to the banned user',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.mcp_ban_confirm' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_ban.php' => 160,
    ),
    'description' => 'Use this event to pass data from the ban form to the confirmation screen',
    'description_wrapped' => 
    array (
      0 => 'Use this event to pass data from the ban form to',
      1 => 'the confirmation screen',
    ),
    'name' => 'core.mcp_ban_confirm',
    'tooltip_id' => 'stt_5d334002',
    'vars' => 
    array (
      'hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Hidden fields that are passed through the confirm screen',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.mcp_forum_view_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_forum.php' => 93,
    ),
    'description' => 'Get some data in order to execute other actions.',
    'description_wrapped' => 
    array (
      0 => 'Get some data in order to execute other actions.',
    ),
    'name' => 'core.mcp_forum_view_before',
    'tooltip_id' => 'stt_9c6d0670',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'The action',
      ),
      'forum_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum infos',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start value',
      ),
      'topic_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of topics ids',
      ),
      'post_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of posts ids',
      ),
      'source_topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of source topics ids',
      ),
      'to_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Array of destination topics ids',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.mcp_view_forum_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_forum.php' => 201,
    ),
    'description' => 'Modify SQL query before MCP forum view topic list is queried',
    'description_wrapped' => 
    array (
      0 => 'Modify SQL query before MCP forum view topic list',
      1 => 'is queried',
    ),
    'name' => 'core.mcp_view_forum_modify_sql',
    'tooltip_id' => 'stt_b312b4b4',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'SQL query for forum view topic list',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'string',
        'description' => 'SQL query part for limit time',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'SQL query part for sort order',
      ),
      'topics_per_page' => 
      array (
        'type' => 'int',
        'description' => 'Number of topics per page',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start value',
      ),
    ),
    'since' => '3.1.2-RC1',
  ),
  'core.mcp_forum_topic_data_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_forum.php' => 235,
    ),
    'description' => 'Event to modify SQL query before MCP forum topic data is queried',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL query before MCP forum topic',
      1 => 'data is queried',
    ),
    'name' => 'core.mcp_forum_topic_data_modify_sql',
    'tooltip_id' => 'stt_65277d64',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array to get the MCP forum topic data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID',
      ),
      'topic_list' => 
      array (
        'type' => 'array',
        'description' => 'The array of MCP forum topic IDs',
      ),
    ),
    'since' => '3.3.4-RC1',
  ),
  'core.mcp_view_forum_modify_topicrow' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_forum.php' => 368,
    ),
    'description' => 'Modify the topic data before it is assigned to the template in MCP',
    'description_wrapped' => 
    array (
      0 => 'Modify the topic data before it is assigned to the',
      1 => 'template in MCP',
    ),
    'name' => 'core.mcp_view_forum_modify_topicrow',
    'tooltip_id' => 'stt_eecf4413',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'topic_row' => 
      array (
        'type' => 'array',
        'description' => 'Template array with topic data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.mcp_forum_merge_topics_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_forum.php' => 562,
    ),
    'description' => 'Perform additional actions after merging topics.',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after merging topics.',
    ),
    'name' => 'core.mcp_forum_merge_topics_after',
    'tooltip_id' => 'stt_ac9c55c5',
    'vars' => 
    array (
      'all_topic_data' => 
      array (
        'type' => 'array',
        'description' => 'The data from all topics involved in the merge',
      ),
      'to_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The ID of the topic into which the rest are merged',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.mcp_front_queue_unapproved_total_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 62,
    ),
    'description' => 'Allow altering the query to get the number of unapproved posts',
    'description_wrapped' => 
    array (
      0 => 'Allow altering the query to get the number of',
      1 => 'unapproved posts',
    ),
    'name' => 'core.mcp_front_queue_unapproved_total_before',
    'tooltip_id' => 'stt_2230dfc3',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Query array to get the total number of unapproved posts',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums to look for unapproved posts',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_front_view_queue_postid_list_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 112,
    ),
    'description' => 'Alter list of posts and total as required',
    'description_wrapped' => 
    array (
      0 => 'Alter list of posts and total as required',
    ),
    'name' => 'core.mcp_front_view_queue_postid_list_after',
    'tooltip_id' => 'stt_b0335d93',
    'vars' => 
    array (
      'total' => 
      array (
        'type' => 'int',
        'description' => 'Number of unapproved posts',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'List of unapproved posts',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'forum_names' => 
      array (
        'type' => 'array',
        'description' => 'Associative array with forum_id as key and its corresponding forum_name as value',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.mcp_front_view_modify_posts_data_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 141,
    ),
    'description' => 'Alter posts data SQL query',
    'description_wrapped' => 
    array (
      0 => 'Alter posts data SQL query',
    ),
    'name' => 'core.mcp_front_view_modify_posts_data_sql',
    'tooltip_id' => 'stt_b0f506c3',
    'vars' => 
    array (
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'forum_names' => 
      array (
        'type' => 'array',
        'description' => 'Associative array with forum_id as key and its corresponding forum_name as value',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'List of unapproved posts',
      ),
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the SQL query to be executed',
      ),
      'total' => 
      array (
        'type' => 'int',
        'description' => 'Number of unapproved posts',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_front_view_modify_unapproved_post_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 183,
    ),
    'description' => 'Alter unapproved posts template block for MCP front page',
    'description_wrapped' => 
    array (
      0 => 'Alter unapproved posts template block for MCP',
      1 => 'front page',
    ),
    'name' => 'core.mcp_front_view_modify_unapproved_post_row',
    'tooltip_id' => 'stt_0eea7446',
    'vars' => 
    array (
      'forum_names' => 
      array (
        'type' => 'array',
        'description' => 'Array containing forum names',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'MCP front view mode',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with unapproved post data',
      ),
      'unapproved_post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the unapproved post',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_front_reports_count_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 228,
    ),
    'description' => 'Alter sql query to count the number of reported posts',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to count the number of reported',
      1 => 'posts',
    ),
    'name' => 'core.mcp_front_reports_count_query_before',
    'tooltip_id' => 'stt_c22c77fd',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'The query string used to get the number of reports that exist',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_front_reports_listing_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 275,
    ),
    'description' => 'Alter sql query to get latest reported posts',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get latest reported posts',
    ),
    'name' => 'core.mcp_front_reports_listing_query_before',
    'tooltip_id' => 'stt_0f5ff721',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Associative array with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.mcp_front_view_modify_reported_post_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_front.php' => 323,
    ),
    'description' => 'Alter reported posts template block for MCP front page',
    'description_wrapped' => 
    array (
      0 => 'Alter reported posts template block for MCP front',
      1 => 'page',
    ),
    'name' => 'core.mcp_front_view_modify_reported_post_row',
    'tooltip_id' => 'stt_3516da25',
    'vars' => 
    array (
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'MCP front view mode',
      ),
      'reported_post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the reported post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with reported post data',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_main_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 58,
    ),
    'description' => 'Event to perform additional actions before an MCP action is executed.',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions before an MCP',
      1 => 'action is executed.',
    ),
    'name' => 'core.mcp_main_before',
    'tooltip_id' => 'stt_4d169387',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'The action that is about to be performed',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The mode in which the MCP is accessed, e.g. front, forum_view, topic_view, post_details, quickmod',
      ),
      'quickmod' => 
      array (
        'type' => 'boolean',
        'description' => 'Whether or not the action is performed via QuickMod',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.modify_quickmod_actions' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 186,
    ),
    'description' => 'This event allows you to handle custom quickmod options',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to handle custom quickmod',
      1 => 'options',
    ),
    'name' => 'core.modify_quickmod_actions',
    'tooltip_id' => 'stt_272565bd',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Topic quick moderation action name',
      ),
      'quickmod' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating whether MCP is in quick moderation mode',
      ),
    ),
    'since' => '3.1.0-a4',
    'changes' => 
    array (
      '3.1.0-RC4' => 'Added variables: action, quickmod',
    ),
  ),
  'core.mcp_lock_unlock_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 371,
    ),
    'description' => 'Perform additional actions after locking/unlocking posts/topics',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after locking/unlocking',
      1 => 'posts/topics',
    ),
    'name' => 'core.mcp_lock_unlock_after',
    'tooltip_id' => 'stt_737aba28',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the action we perform on the posts/topics (\'lock\', \'unlock\', \'lock_post\' or \'unlock_post\')',
      ),
      'ids' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the post/topic IDs that have been locked/unlocked',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing posts/topics data',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.mcp_change_topic_type_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 460,
    ),
    'description' => 'Perform additional actions before changing topic(s) type',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before changing',
      1 => 'topic(s) type',
    ),
    'name' => 'core.mcp_change_topic_type_before',
    'tooltip_id' => 'stt_c48e0c44',
    'vars' => 
    array (
      'new_topic_type' => 
      array (
        'type' => 'int',
        'description' => 'The candidated topic type.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID for the topic ID(s).',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the topic ID(s) that will be changed',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.mcp_change_topic_type_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 509,
    ),
    'description' => 'Perform additional actions after changing topic types',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after changing topic',
      1 => 'types',
    ),
    'name' => 'core.mcp_change_topic_type_after',
    'tooltip_id' => 'stt_5074c610',
    'vars' => 
    array (
      'new_topic_type' => 
      array (
        'type' => 'int',
        'description' => 'The newly changed topic type.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID where the newly changed topic type belongs to.',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the topic IDs that have been changed',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.mcp_main_modify_shadow_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 708,
    ),
    'description' => 'Perform actions before shadow topic is created.',
    'description_wrapped' => 
    array (
      0 => 'Perform actions before shadow topic is created.',
    ),
    'name' => 'core.mcp_main_modify_shadow_sql',
    'tooltip_id' => 'stt_1ac8804d',
    'vars' => 
    array (
      'shadow' => 
      array (
        'type' => 'array',
        'description' => 'SQL array to be used by $db->sql_build_array',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Topic data',
      ),
    ),
    'since' => '3.1.11-RC1',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added variable: row',
    ),
  ),
  'core.mcp_delete_topic_modify_permissions' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 908,
    ),
    'description' => 'This event allows you to modify the current user\'s checked permissions when deleting a topic',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the current user\'s',
      1 => 'checked permissions when deleting a topic',
    ),
    'name' => 'core.mcp_delete_topic_modify_permissions',
    'tooltip_id' => 'stt_29da33c1',
    'vars' => 
    array (
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'The array of topic IDs to be deleted',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The current forum ID',
      ),
      'is_soft' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean designating whether we\'re soft deleting or not',
      ),
      'soft_delete_reason' => 
      array (
        'type' => 'string',
        'description' => 'The reason we\'re soft deleting',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'The current delete action',
      ),
      'check_permission' => 
      array (
        'type' => 'array',
        'description' => 'The array with a permission to check for, can be set to false to not check them',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.mcp_delete_topic_modify_hidden_fields' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 1047,
    ),
    'description' => 'This event allows you to modify the hidden form fields when deleting topics',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the hidden form',
      1 => 'fields when deleting topics',
    ),
    'name' => 'core.mcp_delete_topic_modify_hidden_fields',
    'tooltip_id' => 'stt_02d78f52',
    'vars' => 
    array (
      'l_confirm' => 
      array (
        'type' => 'string',
        'description' => 'The confirmation text language variable (DELETE_TOPIC(S), DELETE_TOPIC(S)_PERMANENTLY)',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'The array holding the hidden form fields',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'The array of topic IDs to be deleted',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The current forum ID',
      ),
      'only_softdeleted' => 
      array (
        'type' => 'bool',
        'description' => 'If the topic_ids are all soft deleted, this is true',
      ),
      'only_shadow' => 
      array (
        'type' => 'bool',
        'description' => 'If the topic_ids are all shadow topics, this is true',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.mcp_main_modify_fork_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 1466,
    ),
    'description' => 'Perform actions before forked topic is created.',
    'description_wrapped' => 
    array (
      0 => 'Perform actions before forked topic is created.',
    ),
    'name' => 'core.mcp_main_modify_fork_sql',
    'tooltip_id' => 'stt_01f9f8c6',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array to be used by $db->sql_build_array',
      ),
      'topic_row' => 
      array (
        'type' => 'array',
        'description' => 'Topic data',
      ),
    ),
    'since' => '3.1.11-RC1',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added variable: topic_row',
    ),
  ),
  'core.mcp_main_modify_fork_post_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 1585,
    ),
    'description' => 'Modify the forked post\'s sql array before it\'s inserted into the database.',
    'description_wrapped' => 
    array (
      0 => 'Modify the forked post\'s sql array before it\'s',
      1 => 'inserted into the database.',
    ),
    'name' => 'core.mcp_main_modify_fork_post_sql',
    'tooltip_id' => 'stt_b0ee1738',
    'vars' => 
    array (
      'new_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The newly created topic ID',
      ),
      'to_forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID where the forked topic has been moved to',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL Array with the post\'s data',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Post data',
      ),
      'counter' => 
      array (
        'type' => 'array',
        'description' => 'Array with post counts',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_main_fork_sql_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_main.php' => 1605,
    ),
    'description' => 'Perform actions after forked topic is created.',
    'description_wrapped' => 
    array (
      0 => 'Perform actions after forked topic is created.',
    ),
    'name' => 'core.mcp_main_fork_sql_after',
    'tooltip_id' => 'stt_f00f0933',
    'vars' => 
    array (
      'new_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The newly created topic ID',
      ),
      'to_forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID where the forked topic has been moved to',
      ),
      'new_post_id' => 
      array (
        'type' => 'int',
        'description' => 'The newly created post ID',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Post data',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.mcp_post_additional_options' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_post.php' => 125,
    ),
    'description' => 'This event allows you to handle custom post moderation options',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to handle custom post',
      1 => 'moderation options',
    ),
    'name' => 'core.mcp_post_additional_options',
    'tooltip_id' => 'stt_f10ea32c',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Post moderation action name',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Information on the affected post',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_post_template_data' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_post.php' => 294,
    ),
    'description' => 'Event to add/modify MCP post template data',
    'description_wrapped' => 
    array (
      0 => 'Event to add/modify MCP post template data',
    ),
    'name' => 'core.mcp_post_template_data',
    'tooltip_id' => 'stt_17e02d28',
    'vars' => 
    array (
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post information',
      ),
      'mcp_post_template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the MCP post template data',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post attachments, if any',
      ),
      's_additional_opts' => 
      array (
        'type' => 'bool',
        'description' => 'Must be set to true in extension if additional options are presented in MCP post panel',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_change_poster_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_post.php' => 662,
    ),
    'description' => 'This event allows you to perform additional tasks after changing a post\'s poster',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to perform additional tasks',
      1 => 'after changing a post\'s poster',
    ),
    'name' => 'core.mcp_change_poster_after',
    'tooltip_id' => 'stt_a0a556bc',
    'vars' => 
    array (
      'userdata' => 
      array (
        'type' => 'array',
        'description' => 'Information on a post\'s new poster',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Information on the affected post',
      ),
    ),
    'since' => '3.1.6-RC1',
    'changes' => 
    array (
      '3.1.7-RC1' => 'Change location to prevent post_info from being set to the new post information',
    ),
  ),
  'core.mcp_queue_approve_details_template' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 355,
    ),
    'description' => 'Alter post awaiting approval template before it is rendered',
    'description_wrapped' => 
    array (
      0 => 'Alter post awaiting approval template before it is',
      1 => 'rendered',
    ),
    'name' => 'core.mcp_queue_approve_details_template',
    'tooltip_id' => 'stt_9880b401',
    'vars' => 
    array (
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post ID',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'topic_info' => 
      array (
        'type' => 'array',
        'description' => 'Topic data',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Post data',
      ),
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Post template data',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Post message',
      ),
      'post_url' => 
      array (
        'type' => 'string',
        'description' => 'Post URL',
      ),
      'topic_url' => 
      array (
        'type' => 'string',
        'description' => 'Topic URL',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.mcp_queue_get_posts_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 486,
    ),
    'description' => 'Alter sql query to get posts in queue to be accepted',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get posts in queue to be',
      1 => 'accepted',
    ),
    'name' => 'core.mcp_queue_get_posts_query_before',
    'tooltip_id' => 'stt_ae875a0c',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'Associative array with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'visibility_const' => 
      array (
        'type' => 'int',
        'description' => 'Integer with one of the possible ITEM_* constant values',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'If topic_id not equal to 0, the topic id to filter the posts to display',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the SQL code to limit the time interval of the post (Note: May be empty string)',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the ORDER BY SQL code used in this query',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.mcp_queue_get_posts_for_posts_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 528,
    ),
    'description' => 'Alter sql query to get information on all posts in queue',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get information on all posts in',
      1 => 'queue',
    ),
    'name' => 'core.mcp_queue_get_posts_for_posts_query_before',
    'tooltip_id' => 'stt_a8b6d8c3',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'visibility_const' => 
      array (
        'type' => 'int',
        'description' => 'Integer with one of the possible ITEM_* constant values',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the SQL code to limit the time interval of the post (Note: May be empty string)',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the ORDER BY SQL code used in this query',
      ),
    ),
    'since' => '3.2.3-RC2',
  ),
  'core.mcp_queue_get_posts_for_topics_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 581,
    ),
    'description' => 'Alter sql query to get information on all topics in the list of forums provided.',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get information on all topics',
      1 => 'in the list of forums provided.',
    ),
    'name' => 'core.mcp_queue_get_posts_for_topics_query_before',
    'tooltip_id' => 'stt_7841a13a',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'visibility_const' => 
      array (
        'type' => 'int',
        'description' => 'Integer with one of the possible ITEM_* constant values',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the SQL code to limit the time interval of the post (Note: May be empty string)',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the ORDER BY SQL code used in this query',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.mcp_queue_get_posts_modify_post_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 651,
    ),
    'description' => 'Alter sql query to get information on all topics in the list of forums provided.',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get information on all topics',
      1 => 'in the list of forums provided.',
    ),
    'name' => 'core.mcp_queue_get_posts_modify_post_row',
    'tooltip_id' => 'stt_ce9edd61',
    'vars' => 
    array (
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template variables for current post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Post data',
      ),
      'forum_names' => 
      array (
        'type' => 'array',
        'description' => 'Forum names',
      ),
    ),
    'since' => '3.2.3-RC2',
  ),
  'core.approve_posts_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 874,
    ),
    'description' => 'Perform additional actions during post(s) approval',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions during post(s) approval',
    ),
    'name' => 'core.approve_posts_after',
    'tooltip_id' => 'stt_3a1acf66',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the action we perform on the posts (\'approve\' or \'restore\')',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Array containing info for all posts being approved',
      ),
      'topic_info' => 
      array (
        'type' => 'array',
        'description' => 'Array containing info for all parent topics of the posts',
      ),
      'num_topics' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing number of topics',
      ),
      'notify_poster' => 
      array (
        'type' => 'bool',
        'description' => 'Variable telling if the post should be notified or not',
      ),
      'success_msg' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the language key for the success message',
      ),
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the redirect url',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.approve_topics_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 1084,
    ),
    'description' => 'Perform additional actions during topics(s) approval',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions during topics(s)',
      1 => 'approval',
    ),
    'name' => 'core.approve_topics_after',
    'tooltip_id' => 'stt_67dd0eae',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the action we perform on the posts (\'approve\' or \'restore\')',
      ),
      'topic_info' => 
      array (
        'type' => 'mixed',
        'description' => 'Array containing info for all topics being approved',
      ),
      'first_post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array containing ids of all first posts',
      ),
      'notify_poster' => 
      array (
        'type' => 'bool',
        'description' => 'Variable telling if the poster should be notified or not',
      ),
      'success_msg' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the language key for the success message',
      ),
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the redirect url',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.disapprove_posts_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_queue.php' => 1474,
    ),
    'description' => 'Perform additional actions during post(s) disapproval',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions during post(s)',
      1 => 'disapproval',
    ),
    'name' => 'core.disapprove_posts_after',
    'tooltip_id' => 'stt_8a0e63b1',
    'vars' => 
    array (
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Array containing info for all posts being disapproved',
      ),
      'topic_information' => 
      array (
        'type' => 'array',
        'description' => 'Array containing information for the topics',
      ),
      'topic_posts_unapproved' => 
      array (
        'type' => 'array',
        'description' => 'Array containing list of topic ids and the count of disapproved posts in them',
      ),
      'post_disapprove_list' => 
      array (
        'type' => 'array',
        'description' => 'Array containing list of posts and their topic id',
      ),
      'num_disapproved_topics' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing the number of disapproved topics',
      ),
      'num_disapproved_posts' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing the number of disapproved posts',
      ),
      'lang_reasons' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the language keys for reasons',
      ),
      'disapprove_reason' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the language key for the success message',
      ),
      'disapprove_reason_lang' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the language key for the success message',
      ),
      'is_disapproving' => 
      array (
        'type' => 'bool',
        'description' => 'Variable telling if anything is going to be disapproved',
      ),
      'notify_poster' => 
      array (
        'type' => 'bool',
        'description' => 'Variable telling if the post should be notified or not',
      ),
      'success_msg' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the language key for the success message',
      ),
      'redirect' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing the redirect url',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.mcp_reports_report_details_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 110,
    ),
    'description' => 'Allow changing the query to obtain the user-submitted report.',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query to obtain the',
      1 => 'user-submitted report.',
    ),
    'name' => 'core.mcp_reports_report_details_query_before',
    'tooltip_id' => 'stt_3441c784',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The array in the format of the query builder with the query',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum_id, the number in the f GET parameter',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The post_id of the report being viewed (if 0, it is meaningless)',
      ),
      'report_id' => 
      array (
        'type' => 'int',
        'description' => 'The report_id of the report being viewed',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_reports_report_details_query_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 135,
    ),
    'description' => 'Allow changing the data obtained from the user-submitted report.',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the data obtained from the',
      1 => 'user-submitted report.',
    ),
    'name' => 'core.mcp_reports_report_details_query_after',
    'tooltip_id' => 'stt_902c4280',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The array in the format of the query builder with the query that had been executted',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum_id, the number in the f GET parameter',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The post_id of the report being viewed (if 0, it is meaningless)',
      ),
      'report_id' => 
      array (
        'type' => 'int',
        'description' => 'The report_id of the report being viewed',
      ),
      'report' => 
      array (
        'type' => 'array',
        'description' => 'The query\'s resulting row.',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.mcp_report_template_data' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 330,
    ),
    'description' => 'Event to add/modify MCP report details template data.',
    'description_wrapped' => 
    array (
      0 => 'Event to add/modify MCP report details template',
      1 => 'data.',
    ),
    'name' => 'core.mcp_report_template_data',
    'tooltip_id' => 'stt_c5d882ea',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum_id, the number in the f GET parameter',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic_id of the report being viewed',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The post_id of the report being viewed (if 0, it is meaningless)',
      ),
      'report_id' => 
      array (
        'type' => 'int',
        'description' => 'The report_id of the report being viewed',
      ),
      'report' => 
      array (
        'type' => 'array',
        'description' => 'Array with the report data',
      ),
      'report_template' => 
      array (
        'type' => 'array',
        'description' => 'Array with the report template data',
      ),
      'post_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the reported post data',
      ),
    ),
    'since' => '3.2.5-RC1',
  ),
  'core.mcp_reports_get_reports_query_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 474,
    ),
    'description' => 'Alter sql query to get report id of all reports for requested forum and topic or just forum',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get report id of all reports',
      1 => 'for requested forum and topic or just forum',
    ),
    'name' => 'core.mcp_reports_get_reports_query_before',
    'tooltip_id' => 'stt_c7c2ef96',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'limit_time_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the SQL code to limit the time interval of the post (Note: May be empty string)',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the ORDER BY SQL code used in this query',
      ),
    ),
    'since' => '3.1.0-RC4',
  ),
  'core.mcp_reports_modify_reports_data_sql' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 515,
    ),
    'description' => 'Alter sql query to get reports data for requested forum and topic or just forum',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get reports data for requested',
      1 => 'forum and topic or just forum',
    ),
    'name' => 'core.mcp_reports_modify_reports_data_sql',
    'tooltip_id' => 'stt_5c716580',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the query to be executed',
      ),
      'forum_list' => 
      array (
        'type' => 'array',
        'description' => 'List of forums that contain the posts',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'sort_order_sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the ORDER BY SQL code used in this query',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_reports_modify_post_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_reports.php' => 566,
    ),
    'description' => 'Alter posts template block for MCP reports',
    'description_wrapped' => 
    array (
      0 => 'Alter posts template block for MCP reports',
    ),
    'name' => 'core.mcp_reports_modify_post_row',
    'tooltip_id' => 'stt_8e3c6627',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Post report mode',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing forum data',
      ),
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original post and report data',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_topic_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 171,
    ),
    'description' => 'Event to modify the SQL query before the MCP topic review posts is queried',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the MCP topic',
      1 => 'review posts is queried',
    ),
    'name' => 'core.mcp_topic_modify_sql_ary',
    'tooltip_id' => 'stt_3273695a',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of the MCP topic review posts',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.mcp_topic_modify_post_data' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 255,
    ),
    'description' => 'Event to modify the post data for the MCP topic review before assigning the posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the post data for the MCP topic',
      1 => 'review before assigning the posts',
    ),
    'name' => 'core.mcp_topic_modify_post_data',
    'tooltip_id' => 'stt_91125bf0',
    'vars' => 
    array (
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'List of attachments post_id => array of attachments',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID we are currently in',
      ),
      'id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the tab we are displaying',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the MCP page we are displaying',
      ),
      'post_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids we are going to display',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the posts data',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID we are currently reviewing',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.mcp_topic_review_modify_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 339,
    ),
    'description' => 'Event to modify the template data block for topic reviews in the MCP',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template data block for topic',
      1 => 'reviews in the MCP',
    ),
    'name' => 'core.mcp_topic_review_modify_row',
    'tooltip_id' => 'stt_afe87e43',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the tab we are displaying',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the MCP page we are displaying',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID we are currently reviewing',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID we are currently in',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'current_row_number' => 
      array (
        'type' => 'int',
        'description' => 'Number of the post on this page',
      ),
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the current post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original post and user data',
      ),
      'topic_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'total' => 
      array (
        'type' => 'int',
        'description' => 'Total posts count',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.mcp_topic_review_modify_topic_row' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 478,
    ),
    'description' => 'Event to modify the template data block for topic data output in the MCP',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template data block for topic',
      1 => 'data output in the MCP',
    ),
    'name' => 'core.mcp_topic_review_modify_topic_row',
    'tooltip_id' => 'stt_10c8d073',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Moderation action type to be performed with the topic',
      ),
      'has_unapproved_posts' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the topic has unapproved posts',
      ),
      'icon_id' => 
      array (
        'type' => 'int',
        'description' => 'Split topic icon ID',
      ),
      'id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the tab we are displaying',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the MCP page we are displaying',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID we are currently reviewing',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID we are currently in',
      ),
      's_topic_icons' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if split topic icon to be displayed',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Subject of the topic to be split',
      ),
      'topic_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'to_forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum id the topic is being moved to',
      ),
      'to_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID the topic is being merged with',
      ),
      'topic_row' => 
      array (
        'type' => 'array',
        'description' => 'Topic template data array',
      ),
      'total' => 
      array (
        'type' => 'int',
        'description' => 'Total posts count',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_topic_split_topic_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 785,
    ),
    'description' => 'Event to access topic data after split',
    'description_wrapped' => 
    array (
      0 => 'Event to access topic data after split',
    ),
    'name' => 'core.mcp_topic_split_topic_after',
    'tooltip_id' => 'stt_7d7b24a3',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Split action type to be performed with the topic',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID we are currently splitting',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID we are currently in',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Subject of the topic to be split',
      ),
      'topic_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'to_forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum id the topic is being moved to',
      ),
      'to_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID the topic is being split to',
      ),
    ),
    'since' => '3.3.5-RC1',
  ),
  'core.mcp_topics_merge_posts_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_topic.php' => 919,
    ),
    'description' => 'Perform additional actions after merging posts.',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after merging posts.',
    ),
    'name' => 'core.mcp_topics_merge_posts_after',
    'tooltip_id' => 'stt_6a0c10bf',
    'vars' => 
    array (
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID from which posts are being moved',
      ),
      'to_topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID to which posts are being moved',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.mcp_warn_post_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_warn.php' => 290,
    ),
    'description' => 'Event for before warning a user for a post.',
    'description_wrapped' => 
    array (
      0 => 'Event for before warning a user for a post.',
    ),
    'name' => 'core.mcp_warn_post_before',
    'tooltip_id' => 'stt_b5e74554',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'The entire user row',
      ),
      'warning' => 
      array (
        'type' => 'string',
        'description' => 'The warning message',
      ),
      'notify' => 
      array (
        'type' => 'bool',
        'description' => 'If true, we notify the user for the warning',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The post id for which the warning is added',
      ),
      's_mcp_warn_post' => 
      array (
        'type' => 'bool',
        'description' => 'If true, we add the warning else we omit it',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.mcp_warn_post_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_warn.php' => 315,
    ),
    'description' => 'Event for after warning a user for a post.',
    'description_wrapped' => 
    array (
      0 => 'Event for after warning a user for a post.',
    ),
    'name' => 'core.mcp_warn_post_after',
    'tooltip_id' => 'stt_88b85f54',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'The entire user row',
      ),
      'warning' => 
      array (
        'type' => 'string',
        'description' => 'The warning message',
      ),
      'notify' => 
      array (
        'type' => 'bool',
        'description' => 'If true, the user was notified for the warning',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The post id for which the warning is added',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Message displayed to the moderator',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.mcp_warn_user_before' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_warn.php' => 449,
    ),
    'description' => 'Event for before warning a user from MCP.',
    'description_wrapped' => 
    array (
      0 => 'Event for before warning a user from MCP.',
    ),
    'name' => 'core.mcp_warn_user_before',
    'tooltip_id' => 'stt_e097ba0c',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'The entire user row',
      ),
      'warning' => 
      array (
        'type' => 'string',
        'description' => 'The warning message',
      ),
      'notify' => 
      array (
        'type' => 'bool',
        'description' => 'If true, we notify the user for the warning',
      ),
      's_mcp_warn_user' => 
      array (
        'type' => 'bool',
        'description' => 'If true, we add the warning else we omit it',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.mcp_warn_user_after' => 
  array (
    'locations' => 
    array (
      'includes/mcp/mcp_warn.php' => 472,
    ),
    'description' => 'Event for after warning a user from MCP.',
    'description_wrapped' => 
    array (
      0 => 'Event for after warning a user from MCP.',
    ),
    'name' => 'core.mcp_warn_user_after',
    'tooltip_id' => 'stt_fd6128e3',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'The entire user row',
      ),
      'warning' => 
      array (
        'type' => 'string',
        'description' => 'The warning message',
      ),
      'notify' => 
      array (
        'type' => 'bool',
        'description' => 'If true, the user was notified for the warning',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Message displayed to the moderator',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.modify_bbcode_init' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 260,
    ),
    'description' => 'Event to modify the bbcode data for later parsing',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the bbcode data for later parsing',
    ),
    'name' => 'core.modify_bbcode_init',
    'tooltip_id' => 'stt_53c97c60',
    'vars' => 
    array (
      'bbcodes' => 
      array (
        'type' => 'array',
        'description' => 'Array of bbcode data for use in parsing',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array of bbcode data from the database',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.message_parser_check_message' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1218,
    ),
    'description' => 'This event can be used for additional message checks/cleanup before parsing',
    'description_wrapped' => 
    array (
      0 => 'This event can be used for additional message',
      1 => 'checks/cleanup before parsing',
    ),
    'name' => 'core.message_parser_check_message',
    'tooltip_id' => 'stt_a6a8d857',
    'vars' => 
    array (
      'allow_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow BBCodes',
      ),
      'allow_magic_url' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow magic urls',
      ),
      'allow_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow smilies',
      ),
      'allow_img_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow image BBCode',
      ),
      'allow_flash_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow flash BBCode',
      ),
      'allow_quote_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow quote BBCode',
      ),
      'allow_url_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow url BBCode',
      ),
      'update_this_message' => 
      array (
        'type' => 'bool',
        'description' => 'Do we alter the parsed message',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Posting mode',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'The message text to parse',
      ),
      'bbcode_bitfield' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode_bitfield before parsing',
      ),
      'bbcode_uid' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode_uid before parsing',
      ),
      'return' => 
      array (
        'type' => 'bool',
        'description' => 'Do we return after the event is triggered if $warn_msg is not empty',
      ),
      'warn_msg' => 
      array (
        'type' => 'array',
        'description' => 'Array of the warning messages',
      ),
    ),
    'since' => '3.1.2-RC1',
    'changes' => 
    array (
      '3.1.3-RC1' => 'Added vars $bbcode_bitfield and $bbcode_uid',
    ),
  ),
  'core.modify_format_display_text_before' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1332,
    ),
    'description' => 'Event to modify the text before it is parsed',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the text before it is parsed',
    ),
    'name' => 'core.modify_format_display_text_before',
    'tooltip_id' => 'stt_b4c8f619',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The message text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode uid',
      ),
      'allow_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow bbcodes',
      ),
      'allow_magic_url' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow magic urls',
      ),
      'allow_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow smilies',
      ),
      'update_this_message' => 
      array (
        'type' => 'bool',
        'description' => 'Do we update the internal message',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.modify_format_display_text_after' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1375,
    ),
    'description' => 'Event to modify the text after it is parsed',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the text after it is parsed',
    ),
    'name' => 'core.modify_format_display_text_after',
    'tooltip_id' => 'stt_7c7a1415',
    'vars' => 
    array (
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The message text to parse',
      ),
      'uid' => 
      array (
        'type' => 'string',
        'description' => 'The bbcode uid',
      ),
      'allow_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow bbcodes',
      ),
      'allow_magic_url' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow magic urls',
      ),
      'allow_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Do we allow smilies',
      ),
      'update_this_message' => 
      array (
        'type' => 'bool',
        'description' => 'Do we update the internal message',
      ),
    ),
    'since' => '3.1.0-a3',
  ),
  'core.modify_attachment_sql_ary_on_submit' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1600,
    ),
    'description' => 'Modify attachment sql array on submit',
    'description_wrapped' => 
    array (
      0 => 'Modify attachment sql array on submit',
    ),
    'name' => 'core.modify_attachment_sql_ary_on_submit',
    'tooltip_id' => 'stt_53182797',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array containing SQL data',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.modify_attachment_data_on_submit' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1623,
    ),
    'description' => 'Modify attachment data on submit',
    'description_wrapped' => 
    array (
      0 => 'Modify attachment data on submit',
    ),
    'name' => 'core.modify_attachment_data_on_submit',
    'tooltip_id' => 'stt_89129fc3',
    'vars' => 
    array (
      'attachment_data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing attachment data',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.modify_attachment_sql_ary_on_upload' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1745,
    ),
    'description' => 'Modify attachment sql array on upload',
    'description_wrapped' => 
    array (
      0 => 'Modify attachment sql array on upload',
    ),
    'name' => 'core.modify_attachment_sql_ary_on_upload',
    'tooltip_id' => 'stt_7b9472cb',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array containing SQL data',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.modify_attachment_data_on_upload' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 1768,
    ),
    'description' => 'Modify attachment data on upload',
    'description_wrapped' => 
    array (
      0 => 'Modify attachment data on upload',
    ),
    'name' => 'core.modify_attachment_data_on_upload',
    'tooltip_id' => 'stt_a19eca9f',
    'vars' => 
    array (
      'attachment_data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing attachment data',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.validate_bbcode_by_extension' => 
  array (
    'locations' => 
    array (
      'includes/message_parser.php' => 2057,
    ),
    'description' => 'Event to validate bbcode with the custom validating methods provided by extensions',
    'description_wrapped' => 
    array (
      0 => 'Event to validate bbcode with the custom',
      1 => 'validating methods provided by extensions',
    ),
    'name' => 'core.validate_bbcode_by_extension',
    'tooltip_id' => 'stt_00ac364b',
    'vars' => 
    array (
      'params_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with the function parameters',
      ),
      'return' => 
      array (
        'type' => 'mixed',
        'description' => 'Validation result to return',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.ucp_activate_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_activate.php' => 173,
    ),
    'description' => 'This event can be used to modify data after user account\'s activation',
    'description_wrapped' => 
    array (
      0 => 'This event can be used to modify data after user',
      1 => 'account\'s activation',
    ),
    'name' => 'core.ucp_activate_after',
    'tooltip_id' => 'stt_b29ea2a9',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with some user data',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Language string of the message that will be displayed to the user',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.ucp_login_link_template_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_login_link.php' => 139,
    ),
    'description' => 'Event to perform additional actions before ucp_login_link is displayed',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions before',
      1 => 'ucp_login_link is displayed',
    ),
    'name' => 'core.ucp_login_link_template_after',
    'tooltip_id' => 'stt_5c84c558',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Login link data',
      ),
      'auth_provider' => 
      array (
        'type' => '\\phpbb\\auth\\provider_interface',
        'description' => 'Auth provider',
      ),
      'login_link_error' => 
      array (
        'type' => 'string',
        'description' => 'Login link error',
      ),
      'login_error' => 
      array (
        'type' => 'string',
        'description' => 'Login error',
      ),
      'login_username' => 
      array (
        'type' => 'string',
        'description' => 'Login username',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Template variables',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_main_front_modify_sql' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 100,
    ),
    'description' => 'Modify sql variables before query is processed',
    'description_wrapped' => 
    array (
      0 => 'Modify sql variables before query is processed',
    ),
    'name' => 'core.ucp_main_front_modify_sql',
    'tooltip_id' => 'stt_d2ef7454',
    'vars' => 
    array (
      'sql_select' => 
      array (
        'type' => 'string',
        'description' => 'SQL select',
      ),
      'sql_from' => 
      array (
        'type' => 'string',
        'description' => 'SQL from',
      ),
      'forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'Forum array',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_main_front_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 227,
    ),
    'description' => 'Add template variables to a front topics row.',
    'description_wrapped' => 
    array (
      0 => 'Add template variables to a front topics row.',
    ),
    'name' => 'core.ucp_main_front_modify_template_vars',
    'tooltip_id' => 'stt_5233f644',
    'vars' => 
    array (
      'topicrow' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the template variables for the row',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the subscribed forum row data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'folder_img' => 
      array (
        'type' => 'string',
        'description' => 'Folder image',
      ),
      'folder_alt' => 
      array (
        'type' => 'string',
        'description' => 'Alt text for the folder image',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_main_subscribed_post_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 283,
    ),
    'description' => 'Read and potentially modify the post data used to remove subscriptions to forums/topics',
    'description_wrapped' => 
    array (
      0 => 'Read and potentially modify the post data used to',
      1 => 'remove subscriptions to forums/topics',
    ),
    'name' => 'core.ucp_main_subscribed_post_data',
    'tooltip_id' => 'stt_16098971',
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_main_subscribed_forums_modify_query' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 381,
    ),
    'description' => 'Modify the query used to retrieve a list of subscribed forums',
    'description_wrapped' => 
    array (
      0 => 'Modify the query used to retrieve a list of',
      1 => 'subscribed forums',
    ),
    'name' => 'core.ucp_main_subscribed_forums_modify_query',
    'tooltip_id' => 'stt_8d1f242d',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The subscribed forums query',
      ),
      'forbidden_forums' => 
      array (
        'type' => 'array',
        'description' => 'The list of forbidden forums',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_main_subscribed_forum_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 472,
    ),
    'description' => 'Add template variables to a subscribed forum row.',
    'description_wrapped' => 
    array (
      0 => 'Add template variables to a subscribed forum row.',
    ),
    'name' => 'core.ucp_main_subscribed_forum_modify_template_vars',
    'tooltip_id' => 'stt_9eaa7cef',
    'vars' => 
    array (
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the template variables for the row',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the subscribed forum row data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'folder_image' => 
      array (
        'type' => 'string',
        'description' => 'Folder image',
      ),
      'folder_alt' => 
      array (
        'type' => 'string',
        'description' => 'Alt text for the folder image',
      ),
      'unread_forum' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the forum has unread content or not',
      ),
      'last_post_time' => 
      array (
        'type' => 'string',
        'description' => 'The time of the most recent post, expressed as a formatted date string',
      ),
      'last_post_url' => 
      array (
        'type' => 'string',
        'description' => 'The URL of the most recent post in the forum',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_main_topiclist_count_modify_query' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 816,
    ),
    'description' => 'Modify the query used to retrieve the count of subscribed/bookmarked topics',
    'description_wrapped' => 
    array (
      0 => 'Modify the query used to retrieve the count of',
      1 => 'subscribed/bookmarked topics',
    ),
    'name' => 'core.ucp_main_topiclist_count_modify_query',
    'tooltip_id' => 'stt_db7e200e',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The subscribed/bookmarked topics query',
      ),
      'forbidden_forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'The list of forbidden forums',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The type of topic list (\'subscribed\' or \'bookmarks\')',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_main_topiclist_modify_query' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 900,
    ),
    'description' => 'Modify the query used to retrieve the list of subscribed/bookmarked topics',
    'description_wrapped' => 
    array (
      0 => 'Modify the query used to retrieve the list of',
      1 => 'subscribed/bookmarked topics',
    ),
    'name' => 'core.ucp_main_topiclist_modify_query',
    'tooltip_id' => 'stt_ebf5e8a8',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The subscribed/bookmarked topics query',
      ),
      'forbidden_forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'The list of forbidden forums',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The type of topic list (\'subscribed\' or \'bookmarks\')',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_main_topiclist_topic_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_main.php' => 1041,
    ),
    'description' => 'Add template variables to a subscribed/bookmarked topic row.',
    'description_wrapped' => 
    array (
      0 => 'Add template variables to a subscribed/bookmarked',
      1 => 'topic row.',
    ),
    'name' => 'core.ucp_main_topiclist_topic_modify_template_vars',
    'tooltip_id' => 'stt_2c337e55',
    'vars' => 
    array (
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the template variables for the row',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the subscribed/bookmarked topic row data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum containing the topic',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'replies' => 
      array (
        'type' => 'int',
        'description' => 'Number of replies in the topic',
      ),
      'topic_type' => 
      array (
        'type' => 'string',
        'description' => 'Topic type',
      ),
      'folder_img' => 
      array (
        'type' => 'string',
        'description' => 'Folder image',
      ),
      'folder_alt' => 
      array (
        'type' => 'string',
        'description' => 'Alt text for the folder image',
      ),
      'icons' => 
      array (
        'type' => 'array',
        'description' => 'Array containing topic icons',
      ),
      'unread_topic' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the topic has unread content or not',
      ),
      'view_topic_url' => 
      array (
        'type' => 'string',
        'description' => 'The URL of the topic',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_notifications_submit_notification_is_set' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_notifications.php' => 87,
    ),
    'description' => 'Event to perform additional actions before ucp_notifications is submitted',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions before',
      1 => 'ucp_notifications is submitted',
    ),
    'name' => 'core.ucp_notifications_submit_notification_is_set',
    'tooltip_id' => 'stt_0074eccd',
    'vars' => 
    array (
      'type_data' => 
      array (
        'type' => 'array',
        'description' => 'The notification type data',
      ),
      'method_data' => 
      array (
        'type' => 'array',
        'description' => 'The notification method data',
      ),
      'is_set_notify' => 
      array (
        'type' => 'bool',
        'description' => 'The notification is set or not',
      ),
      'is_available' => 
      array (
        'type' => 'bool',
        'description' => 'The notification is available or not',
      ),
      'subscriptions' => 
      array (
        'type' => 'array',
        'description' => 'The subscriptions data',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_notifications_output_notification_types_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_notifications.php' => 245,
    ),
    'description' => 'Event to perform additional actions before ucp_notifications is displayed',
    'description_wrapped' => 
    array (
      0 => 'Event to perform additional actions before',
      1 => 'ucp_notifications is displayed',
    ),
    'name' => 'core.ucp_notifications_output_notification_types_modify_template_vars',
    'tooltip_id' => 'stt_17d63b3e',
    'vars' => 
    array (
      'type_data' => 
      array (
        'type' => 'array',
        'description' => 'The notification type data',
      ),
      'method_data' => 
      array (
        'type' => 'array',
        'description' => 'The notification method data',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'The template variables',
      ),
      'subscriptions' => 
      array (
        'type' => 'array',
        'description' => 'The subscriptions data',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_pm_compose_modify_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 130,
    ),
    'description' => 'Modify the default vars before composing a PM',
    'description_wrapped' => 
    array (
      0 => 'Modify the default vars before composing a PM',
    ),
    'name' => 'core.ucp_pm_compose_modify_data',
    'tooltip_id' => 'stt_0b821664',
    'vars' => 
    array (
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'post_id in the page request',
      ),
      'to_user_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of whom the message is to',
      ),
      'to_group_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the group the message is to',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the form has been submitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is previewing the PM or not',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'One of: post, reply, quote, forward, quotepost, edit, delete, smilies',
      ),
      'delete' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is deleting the PM',
      ),
      'reply_to_all' => 
      array (
        'type' => 'int',
        'description' => 'Value of reply_to_all request variable.',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_pm_compose_compose_pm_basic_info_query_before' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 306,
    ),
    'description' => 'Alter sql query to get message for user to write the PM',
    'description_wrapped' => 
    array (
      0 => 'Alter sql query to get message for user to write',
      1 => 'the PM',
    ),
    'name' => 'core.ucp_pm_compose_compose_pm_basic_info_query_before',
    'tooltip_id' => 'stt_90d45c93',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'String with the query to be executed',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'to_user_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of whom the message is to',
      ),
      'to_group_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the group whom the message is to',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is sending the PM or not',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is previewing the PM or not',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'One of: post, reply, quote, forward, quotepost, edit, delete, smilies',
      ),
      'delete' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is deleting the PM',
      ),
      'reply_to_all' => 
      array (
        'type' => 'int',
        'description' => 'Value of reply_to_all request variable.',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.2.0-a1' => 'Removed undefined variables',
    ),
  ),
  'core.ucp_pm_compose_compose_pm_basic_info_query_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 339,
    ),
    'description' => 'Alter the row of the post being quoted when composing a private message',
    'description_wrapped' => 
    array (
      0 => 'Alter the row of the post being quoted when',
      1 => 'composing a private message',
    ),
    'name' => 'core.ucp_pm_compose_compose_pm_basic_info_query_after',
    'tooltip_id' => 'stt_d47338e6',
    'vars' => 
    array (
      'post' => 
      array (
        'type' => 'array',
        'description' => 'Array with data of the post being quoted',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'topic_id in the page request',
      ),
      'to_user_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of whom the message is to',
      ),
      'to_group_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the group whom the message is to',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is sending the PM or not',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is previewing the PM or not',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'One of: post, reply, quote, forward, quotepost, edit, delete, smilies',
      ),
      'delete' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is deleting the PM',
      ),
      'reply_to_all' => 
      array (
        'type' => 'int',
        'description' => 'Value of reply_to_all request variable.',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_pm_compose_quotepost_query_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 401,
    ),
    'description' => 'Get the result of querying for the post to be quoted in the pm message',
    'description_wrapped' => 
    array (
      0 => 'Get the result of querying for the post to be',
      1 => 'quoted in the pm message',
    ),
    'name' => 'core.ucp_pm_compose_quotepost_query_after',
    'tooltip_id' => 'stt_476d7bb0',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'The original SQL used in the query',
      ),
      'post' => 
      array (
        'type' => 'array',
        'description' => 'Associative array with the data of the quoted post',
      ),
      'msg_id' => 
      array (
        'type' => 'array',
        'description' => 'The post_id that was searched to get the message for quoting',
      ),
      'to_user_id' => 
      array (
        'type' => 'int',
        'description' => 'Users the message is sent to',
      ),
      'to_group_id' => 
      array (
        'type' => 'int',
        'description' => 'Groups the message is sent to',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is sending the PM or not',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the user is previewing the PM or not',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'One of: post, reply, quote, forward, quotepost, edit, delete, smilies',
      ),
      'delete' => 
      array (
        'type' => 'bool',
        'description' => 'If deleting message',
      ),
      'reply_to_all' => 
      array (
        'type' => 'int',
        'description' => 'Value of reply_to_all request variable.',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.2.0-a1' => 'Removed undefined variables',
    ),
  ),
  'core.ucp_pm_compose_predefined_message' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 500,
    ),
    'description' => 'Predefine message text and subject',
    'description_wrapped' => 
    array (
      0 => 'Predefine message text and subject',
    ),
    'name' => 'core.ucp_pm_compose_predefined_message',
    'tooltip_id' => 'stt_49aca9ed',
    'vars' => 
    array (
      'message_text' => 
      array (
        'type' => 'string',
        'description' => 'Message text',
      ),
      'message_subject' => 
      array (
        'type' => 'string',
        'description' => 'Messate subject',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_pm_compose_modify_bbcode_status' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 709,
    ),
    'description' => 'Event to override private message BBCode status indications',
    'description_wrapped' => 
    array (
      0 => 'Event to override private message BBCode status',
      1 => 'indications',
    ),
    'name' => 'core.ucp_pm_compose_modify_bbcode_status',
    'tooltip_id' => 'stt_e0b838f2',
    'vars' => 
    array (
      'bbcode_status' => 
      array (
        'type' => 'bool',
        'description' => 'BBCode status',
      ),
      'smilies_status' => 
      array (
        'type' => 'bool',
        'description' => 'Smilies status',
      ),
      'img_status' => 
      array (
        'type' => 'bool',
        'description' => 'Image BBCode status',
      ),
      'flash_status' => 
      array (
        'type' => 'bool',
        'description' => 'Flash BBCode status',
      ),
      'url_status' => 
      array (
        'type' => 'bool',
        'description' => 'URL BBCode status',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.ucp_pm_compose_modify_parse_before' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 860,
    ),
    'description' => 'Modify private message',
    'description_wrapped' => 
    array (
      0 => 'Modify private message',
    ),
    'name' => 'core.ucp_pm_compose_modify_parse_before',
    'tooltip_id' => 'stt_b57c5ba1',
    'vars' => 
    array (
      'enable_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not bbcode is enabled',
      ),
      'enable_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not smilies are enabled',
      ),
      'enable_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not urls are enabled',
      ),
      'enable_sig' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not signature is enabled',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'PM subject text',
      ),
      'message_parser' => 
      array (
        'type' => 'object',
        'description' => 'The message parser object',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been sumitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the signature is being previewed',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_pm_compose_modify_parse_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 938,
    ),
    'description' => 'Modify private message',
    'description_wrapped' => 
    array (
      0 => 'Modify private message',
    ),
    'name' => 'core.ucp_pm_compose_modify_parse_after',
    'tooltip_id' => 'stt_13a6aa54',
    'vars' => 
    array (
      'enable_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not bbcode is enabled',
      ),
      'enable_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not smilies are enabled',
      ),
      'enable_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not urls are enabled',
      ),
      'enable_sig' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not signature is enabled',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'PM subject text',
      ),
      'message_parser' => 
      array (
        'type' => 'object',
        'description' => 'The message parser object',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been sumitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the signature is being previewed',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.pm_modify_message_subject' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 1121,
    ),
    'description' => 'This event allows you to modify the PM subject of the PM being quoted',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the PM subject of',
      1 => 'the PM being quoted',
    ),
    'name' => 'core.pm_modify_message_subject',
    'tooltip_id' => 'stt_681c010a',
    'vars' => 
    array (
      'message_subject' => 
      array (
        'type' => 'string',
        'description' => 'String with the PM subject already censored.',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.ucp_pm_compose_template' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 1376,
    ),
    'description' => 'Modify the default template vars',
    'description_wrapped' => 
    array (
      0 => 'Modify the default template vars',
    ),
    'name' => 'core.ucp_pm_compose_template',
    'tooltip_id' => 'stt_bfb677b2',
    'vars' => 
    array (
      'template_ary' => 
      array (
        'type' => 'array',
        'description' => 'Template variables',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.message_list_actions' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_compose.php' => 1602,
    ),
    'description' => 'Event for additional message list actions',
    'description_wrapped' => 
    array (
      0 => 'Event for additional message list actions',
    ),
    'name' => 'core.message_list_actions',
    'tooltip_id' => 'stt_5879cfd7',
    'vars' => 
    array (
      'address_list' => 
      array (
        'type' => 'array',
        'description' => 'The assoc array with the recipient user/group ids',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'The array containing error data',
      ),
      'remove_u' => 
      array (
        'type' => 'bool',
        'description' => 'The variable for removing a user',
      ),
      'remove_g' => 
      array (
        'type' => 'bool',
        'description' => 'The variable for removing a group',
      ),
      'add_to' => 
      array (
        'type' => 'bool',
        'description' => 'The variable for adding a user to the [TO] field',
      ),
      'add_bcc' => 
      array (
        'type' => 'bool',
        'description' => 'The variable for adding a user to the [BCC] field',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_pm_view_folder_get_pm_from_template' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_viewfolder.php' => 507,
    ),
    'description' => 'Modify template variables before they are assigned',
    'description_wrapped' => 
    array (
      0 => 'Modify template variables before they are assigned',
    ),
    'name' => 'core.ucp_pm_view_folder_get_pm_from_template',
    'tooltip_id' => 'stt_542dcdd2',
    'vars' => 
    array (
      'folder_id' => 
      array (
        'type' => 'int',
        'description' => 'Folder ID',
      ),
      'folder' => 
      array (
        'type' => 'array',
        'description' => 'Folder data',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID',
      ),
      'base_url' => 
      array (
        'type' => 'string',
        'description' => 'Pagination base URL',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Pagination start',
      ),
      'pm_count' => 
      array (
        'type' => 'int',
        'description' => 'Count of PMs',
      ),
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Template variables to be assigned',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_pm_view_folder_get_pm_from_sql' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_viewfolder.php' => 572,
    ),
    'description' => 'Modify SQL before it is executed',
    'description_wrapped' => 
    array (
      0 => 'Modify SQL before it is executed',
    ),
    'name' => 'core.ucp_pm_view_folder_get_pm_from_sql',
    'tooltip_id' => 'stt_1d3d5d4c',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array',
      ),
      'sql_limit' => 
      array (
        'type' => 'int',
        'description' => 'SQL limit',
      ),
      'sql_start' => 
      array (
        'type' => 'int',
        'description' => 'SQL start',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_pm_view_message_before' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_viewmessage.php' => 56,
    ),
    'description' => 'Modify private message data before it is prepared to be displayed',
    'description_wrapped' => 
    array (
      0 => 'Modify private message data before it is prepared',
      1 => 'to be displayed',
    ),
    'name' => 'core.ucp_pm_view_message_before',
    'tooltip_id' => 'stt_8dda37ea',
    'vars' => 
    array (
      'folder_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the folder the message is in',
      ),
      'folder' => 
      array (
        'type' => 'array',
        'description' => 'Array with data of user\'s message folders',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the private message',
      ),
      'message_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with message data',
      ),
      'author_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the message author',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_pm_view_messsage' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_viewmessage.php' => 307,
    ),
    'description' => 'Modify pm and sender data before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify pm and sender data before it is assigned to',
      1 => 'the template',
    ),
    'name' => 'core.ucp_pm_view_messsage',
    'tooltip_id' => 'stt_82445013',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'mixed',
        'description' => 'Active module category (can be int or string)',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Active module',
      ),
      'folder_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the folder the message is in',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the private message',
      ),
      'folder' => 
      array (
        'type' => 'array',
        'description' => 'Array with data of user\'s message folders',
      ),
      'message_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with message data',
      ),
      'cp_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with senders custom profile field data',
      ),
      'msg_data' => 
      array (
        'type' => 'array',
        'description' => 'Template array with message data',
      ),
      'user_info' => 
      array (
        'type' => 'array',
        'description' => 'User data of the sender',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.6-RC1' => 'Added user_info into event',
      '3.2.2-RC1' => 'Deprecated',
    ),
    'deprecated' => true,
  ),
  'core.ucp_pm_view_message' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_pm_viewmessage.php' => 338,
    ),
    'description' => 'Modify pm and sender data before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify pm and sender data before it is assigned to',
      1 => 'the template',
    ),
    'name' => 'core.ucp_pm_view_message',
    'tooltip_id' => 'stt_e43813a1',
    'vars' => 
    array (
      'id' => 
      array (
        'type' => 'mixed',
        'description' => 'Active module category (can be int or string)',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Active module',
      ),
      'folder_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the folder the message is in',
      ),
      'msg_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the private message',
      ),
      'folder' => 
      array (
        'type' => 'array',
        'description' => 'Array with data of user\'s message folders',
      ),
      'message_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with message data',
      ),
      'cp_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with senders custom profile field data',
      ),
      'msg_data' => 
      array (
        'type' => 'array',
        'description' => 'Template array with message data',
      ),
      'user_info' => 
      array (
        'type' => 'array',
        'description' => 'User data of the sender',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'Attachments data',
      ),
    ),
    'since' => '3.2.2-RC1',
    'changes' => 
    array (
      '3.2.5-RC1' => 'Added attachments',
    ),
  ),
  'core.ucp_prefs_personal_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 75,
    ),
    'description' => 'Add UCP edit global settings data before they are assigned to the template or submitted',
    'description_wrapped' => 
    array (
      0 => 'Add UCP edit global settings data before they are',
      1 => 'assigned to the template or submitted',
    ),
    'name' => 'core.ucp_prefs_personal_data',
    'tooltip_id' => 'stt_21da1812',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp options data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with list of errors',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.4-RC1' => 'Added error variable to the event',
    ),
  ),
  'core.ucp_prefs_personal_update_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 124,
    ),
    'description' => 'Update UCP edit global settings data on form submit',
    'description_wrapped' => 
    array (
      0 => 'Update UCP edit global settings data on form',
      1 => 'submit',
    ),
    'name' => 'core.ucp_prefs_personal_update_data',
    'tooltip_id' => 'stt_245dd0d4',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Submitted display options data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Display options data we update',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_prefs_view_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 242,
    ),
    'description' => 'Add UCP edit display options data before they are assigned to the template or submitted',
    'description_wrapped' => 
    array (
      0 => 'Add UCP edit display options data before they are',
      1 => 'assigned to the template or submitted',
    ),
    'name' => 'core.ucp_prefs_view_data',
    'tooltip_id' => 'stt_50fdf896',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp options data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_prefs_view_update_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 303,
    ),
    'description' => 'Update UCP edit display options data on form submit',
    'description_wrapped' => 
    array (
      0 => 'Update UCP edit display options data on form',
      1 => 'submit',
    ),
    'name' => 'core.ucp_prefs_view_update_data',
    'tooltip_id' => 'stt_ee22315a',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Submitted display options data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Display options data we update',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_prefs_view_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 402,
    ),
    'description' => 'Run code before view form is displayed',
    'description_wrapped' => 
    array (
      0 => 'Run code before view form is displayed',
    ),
    'name' => 'core.ucp_prefs_view_after',
    'tooltip_id' => 'stt_446e46d9',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp options data',
      ),
      'sort_dir_text' => 
      array (
        'type' => 'array',
        'description' => 'Array with sort dir language strings',
      ),
      'limit_topic_days' => 
      array (
        'type' => 'array',
        'description' => 'Topic ordering options',
      ),
      'sort_by_topic_text' => 
      array (
        'type' => 'array',
        'description' => 'Topic ordering language strings',
      ),
      'sort_by_topic_sql' => 
      array (
        'type' => 'array',
        'description' => 'Topic ordering sql',
      ),
      'limit_post_days' => 
      array (
        'type' => 'array',
        'description' => 'Post ordering options',
      ),
      'sort_by_post_text' => 
      array (
        'type' => 'array',
        'description' => 'Post ordering language strings',
      ),
      'sort_by_post_sql' => 
      array (
        'type' => 'array',
        'description' => 'Post ordering sql',
      ),
      '_options' => 
      array (
        'type' => 'array',
        'description' => 'Sort options',
      ),
      's_limit_topic_days' => 
      array (
        'type' => 'string',
        'description' => 'Sort limit topic by days select box',
      ),
      's_sort_topic_key' => 
      array (
        'type' => 'string',
        'description' => 'Sort topic key select box',
      ),
      's_sort_topic_dir' => 
      array (
        'type' => 'string',
        'description' => 'Sort topic dir select box',
      ),
      's_limit_post_days' => 
      array (
        'type' => 'string',
        'description' => 'Sort limit post by days select box',
      ),
      's_sort_post_key' => 
      array (
        'type' => 'string',
        'description' => 'Sort post key select box',
      ),
      's_sort_post_dir' => 
      array (
        'type' => 'string',
        'description' => 'Sort post dir select box',
      ),
    ),
    'since' => '3.1.8-RC1',
  ),
  'core.ucp_prefs_post_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 448,
    ),
    'description' => 'Add UCP edit posting defaults data before they are assigned to the template or submitted',
    'description_wrapped' => 
    array (
      0 => 'Add UCP edit posting defaults data before they are',
      1 => 'assigned to the template or submitted',
    ),
    'name' => 'core.ucp_prefs_post_data',
    'tooltip_id' => 'stt_671253c1',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp options data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_prefs_post_update_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 472,
    ),
    'description' => 'Update UCP edit posting defaults data on form submit',
    'description_wrapped' => 
    array (
      0 => 'Update UCP edit posting defaults data on form',
      1 => 'submit',
    ),
    'name' => 'core.ucp_prefs_post_update_data',
    'tooltip_id' => 'stt_bcf39758',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Submitted display options data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Display options data we update',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_prefs_modify_common' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_prefs.php' => 517,
    ),
    'description' => 'Modify UCP preferences data before the page load',
    'description_wrapped' => 
    array (
      0 => 'Modify UCP preferences data before the page load',
    ),
    'name' => 'core.ucp_prefs_modify_common',
    'tooltip_id' => 'stt_716413ae',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current/submitted UCP options data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Errors data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'UCP prefs operation mode',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'string',
        'description' => 'Hidden fields data',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.ucp_profile_reg_details_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 64,
    ),
    'description' => 'Modify user registration data on editing account settings in UCP',
    'description_wrapped' => 
    array (
      0 => 'Modify user registration data on editing account',
      1 => 'settings in UCP',
    ),
    'name' => 'core.ucp_profile_reg_details_data',
    'tooltip_id' => 'stt_5c2d04b2',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current or updated user registration data',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if submit button has been pressed',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_reg_details_validate' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 126,
    ),
    'description' => 'Validate user data on editing registration data in UCP',
    'description_wrapped' => 
    array (
      0 => 'Validate user data on editing registration data in',
      1 => 'UCP',
    ),
    'name' => 'core.ucp_profile_reg_details_validate',
    'tooltip_id' => 'stt_b970a3e6',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if submit button has been pressed',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of any generated errors',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_reg_details_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 222,
    ),
    'description' => 'Modify user registration data before submitting it to the database',
    'description_wrapped' => 
    array (
      0 => 'Modify user registration data before submitting it',
      1 => 'to the database',
    ),
    'name' => 'core.ucp_profile_reg_details_sql_ary',
    'tooltip_id' => 'stt_8426eab0',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current or updated user registration data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user registration data to submit to the database',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_modify_profile_info' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 320,
    ),
    'description' => 'Modify user data on editing profile in UCP',
    'description_wrapped' => 
    array (
      0 => 'Modify user data on editing profile in UCP',
    ),
    'name' => 'core.ucp_profile_modify_profile_info',
    'tooltip_id' => 'stt_3885f59d',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if submit button has been pressed',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_validate_profile_info' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 367,
    ),
    'description' => 'Validate user data on editing profile in UCP',
    'description_wrapped' => 
    array (
      0 => 'Validate user data on editing profile in UCP',
    ),
    'name' => 'core.ucp_profile_validate_profile_info',
    'tooltip_id' => 'stt_26f5c980',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if submit button has been pressed',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of any generated errors',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_info_modify_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 400,
    ),
    'description' => 'Modify profile data in UCP before submitting to the database',
    'description_wrapped' => 
    array (
      0 => 'Modify profile data in UCP before submitting to',
      1 => 'the database',
    ),
    'name' => 'core.ucp_profile_info_modify_sql_ary',
    'tooltip_id' => 'stt_de91da7f',
    'vars' => 
    array (
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the user custom profile fields data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user profile data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'user options data we update',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_profile_modify_signature' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 530,
    ),
    'description' => 'Modify user signature on editing profile in UCP',
    'description_wrapped' => 
    array (
      0 => 'Modify user signature on editing profile in UCP',
    ),
    'name' => 'core.ucp_profile_modify_signature',
    'tooltip_id' => 'stt_4c11119e',
    'vars' => 
    array (
      'enable_bbcode' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not bbcode is enabled',
      ),
      'enable_smilies' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not smilies are enabled',
      ),
      'enable_urls' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not urls are enabled',
      ),
      'signature' => 
      array (
        'type' => 'string',
        'description' => 'Users signature text',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been sumitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the signature is being previewed',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.2.0-RC2' => 'Removed message parser',
    ),
  ),
  'core.ucp_profile_modify_signature_sql_ary' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 581,
    ),
    'description' => 'Modify user registration data before submitting it to the database',
    'description_wrapped' => 
    array (
      0 => 'Modify user registration data before submitting it',
      1 => 'to the database',
    ),
    'name' => 'core.ucp_profile_modify_signature_sql_ary',
    'tooltip_id' => 'stt_e899895d',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user signature data to submit to the database',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_profile_avatar_sql' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 683,
    ),
    'description' => 'Trigger events on successfull avatar change',
    'description_wrapped' => 
    array (
      0 => 'Trigger events on successfull avatar change',
    ),
    'name' => 'core.ucp_profile_avatar_sql',
    'tooltip_id' => 'stt_0a403b3a',
    'vars' => 
    array (
      'result' => 
      array (
        'type' => 'array',
        'description' => 'Array with data to be stored in DB',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_profile_autologin_keys_sql' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 829,
    ),
    'description' => 'Event allows changing SQL query for autologin keys',
    'description_wrapped' => 
    array (
      0 => 'Event allows changing SQL query for autologin keys',
    ),
    'name' => 'core.ucp_profile_autologin_keys_sql',
    'tooltip_id' => 'stt_61cc0bbc',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with autologin keys SQL query',
      ),
    ),
    'since' => '3.3.2-RC1',
  ),
  'core.ucp_profile_autologin_keys_template_vars' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_profile.php' => 855,
    ),
    'description' => 'Event allows changing template variables',
    'description_wrapped' => 
    array (
      0 => 'Event allows changing template variables',
    ),
    'name' => 'core.ucp_profile_autologin_keys_template_vars',
    'tooltip_id' => 'stt_3f78874d',
    'vars' => 
    array (
      'sessions' => 
      array (
        'type' => 'array',
        'description' => 'Array with session keys data',
      ),
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array with template variables',
      ),
    ),
    'since' => '3.3.2-RC1',
  ),
  'core.ucp_register_requests_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 79,
    ),
    'description' => 'Add UCP register data before they are assigned to the template or submitted',
    'description_wrapped' => 
    array (
      0 => 'Add UCP register data before they are assigned to',
      1 => 'the template or submitted',
    ),
    'name' => 'core.ucp_register_requests_after',
    'tooltip_id' => 'stt_3ec1db18',
    'vars' => 
    array (
      'coppa' => 
      array (
        'type' => 'bool',
        'description' => 'Is set coppa',
      ),
      'agreed' => 
      array (
        'type' => 'bool',
        'description' => 'Did user agree to coppa?',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Is set post submit?',
      ),
      'change_lang' => 
      array (
        'type' => 'string',
        'description' => 'Change language request',
      ),
      'user_lang' => 
      array (
        'type' => 'string',
        'description' => 'User language request',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_register_agreement_modify_template_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 211,
    ),
    'description' => 'Allows to modify the agreements.',
    'description_wrapped' => 
    array (
      0 => 'Allows to modify the agreements.',
    ),
    'name' => 'core.ucp_register_agreement_modify_template_data',
    'tooltip_id' => 'stt_cd9be0f9',
    'vars' => 
    array (
      'tpl_name' => 
      array (
        'type' => 'string',
        'description' => 'Template file',
      ),
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array with data about to be assigned to the template',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with hidden form elements',
      ),
      'lang_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with available languages, read only',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.ucp_register_agreement' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 230,
    ),
    'description' => 'Allows to modify the agreements.',
    'description_wrapped' => 
    array (
      0 => 'Allows to modify the agreements.',
    ),
    'name' => 'core.ucp_register_agreement',
    'tooltip_id' => 'stt_c68f69e7',
    'since' => '3.1.6-RC1',
    'deprecated' => true,
  ),
  'core.ucp_register_data_before' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 265,
    ),
    'description' => 'Add UCP register data before they are assigned to the template or submitted',
    'description_wrapped' => 
    array (
      0 => 'Add UCP register data before they are assigned to',
      1 => 'the template or submitted',
    ),
    'name' => 'core.ucp_register_data_before',
    'tooltip_id' => 'stt_e7c261c6',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp registration data',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_register_data_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 338,
    ),
    'description' => 'Check UCP registration data after they are submitted',
    'description_wrapped' => 
    array (
      0 => 'Check UCP registration data after they are',
      1 => 'submitted',
    ),
    'name' => 'core.ucp_register_data_after',
    'tooltip_id' => 'stt_c57efbe7',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp registration data',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with custom profile fields data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with list of errors',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.ucp_register_user_row_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 418,
    ),
    'description' => 'Add into $user_row before user_add',
    'description_wrapped' => 
    array (
      0 => 'Add into $user_row before user_add',
    ),
    'name' => 'core.ucp_register_user_row_after',
    'tooltip_id' => 'stt_d4ffc403',
    'vars' => 
    array (
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display the form only',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp registration data',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with custom profile fields data',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data that will be inserted',
      ),
    ),
    'since' => '3.1.4-RC1',
    'changes' => 
    array (
      '3.2.10-RC1' => 'Added data array',
    ),
  ),
  'core.ucp_register_welcome_email_before' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 511,
    ),
    'description' => 'Modify messenger data before welcome mail is sent',
    'description_wrapped' => 
    array (
      0 => 'Modify messenger data before welcome mail is sent',
    ),
    'name' => 'core.ucp_register_welcome_email_before',
    'tooltip_id' => 'stt_1ad11cf8',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user registration data',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with custom profile fields data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp registration data',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Message to be displayed to the user after registration',
      ),
      'server_url' => 
      array (
        'type' => 'string',
        'description' => 'Server URL',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'New user ID',
      ),
      'user_actkey' => 
      array (
        'type' => 'string',
        'description' => 'User activation key',
      ),
      'messenger' => 
      array (
        'type' => 'messenger',
        'description' => 'phpBB Messenger',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_register_register_after' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 562,
    ),
    'description' => 'Perform additional actions after user registration',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after user registration',
    ),
    'name' => 'core.ucp_register_register_after',
    'tooltip_id' => 'stt_21bf636f',
    'vars' => 
    array (
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with user registration data',
      ),
      'cp_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with custom profile fields data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with current ucp registration data',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Message to be displayed to the user after registration',
      ),
      'server_url' => 
      array (
        'type' => 'string',
        'description' => 'Server URL',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'New user ID',
      ),
      'user_actkey' => 
      array (
        'type' => 'string',
        'description' => 'User activation key',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.ucp_register_modify_template_data' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_register.php' => 682,
    ),
    'description' => 'Modify template data on the registration page',
    'description_wrapped' => 
    array (
      0 => 'Modify template data on the registration page',
    ),
    'name' => 'core.ucp_register_modify_template_data',
    'tooltip_id' => 'stt_182922e6',
    'vars' => 
    array (
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user data, read only',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array with errors',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with hidden field elements',
      ),
      'tpl_name' => 
      array (
        'type' => 'string',
        'description' => 'Template name',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.ucp_remove_zebra' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_zebra.php' => 68,
    ),
    'description' => 'Remove users from friends/foes',
    'description_wrapped' => 
    array (
      0 => 'Remove users from friends/foes',
    ),
    'name' => 'core.ucp_remove_zebra',
    'tooltip_id' => 'stt_8ba0748d',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Zebra type: friends|foes',
      ),
      'user_ids' => 
      array (
        'type' => 'array',
        'description' => 'User ids we remove',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.ucp_add_zebra' => 
  array (
    'locations' => 
    array (
      'includes/ucp/ucp_zebra.php' => 213,
    ),
    'description' => 'Add users to friends/foes',
    'description_wrapped' => 
    array (
      0 => 'Add users to friends/foes',
    ),
    'name' => 'core.ucp_add_zebra',
    'tooltip_id' => 'stt_f076436e',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Zebra type:',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.index_mark_notification_after' => 
  array (
    'locations' => 
    array (
      'index.php' => 67,
    ),
    'description' => 'You can use this event to perform additional tasks or redirect user elsewhere.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to perform additional tasks',
      1 => 'or redirect user elsewhere.',
    ),
    'name' => 'core.index_mark_notification_after',
    'tooltip_id' => 'stt_8c71a355',
    'vars' => 
    array (
      'mark_notification' => 
      array (
        'type' => 'int',
        'description' => 'Notification ID',
      ),
      'notification' => 
      array (
        'type' => '\\phpbb\\notification\\type\\type_interface',
        'description' => 'Notification instance',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.index_modify_birthdays_sql' => 
  array (
    'locations' => 
    array (
      'index.php' => 178,
    ),
    'description' => 'Event to modify the SQL query to get birthdays data',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query to get birthdays',
      1 => 'data',
    ),
    'name' => 'core.index_modify_birthdays_sql',
    'tooltip_id' => 'stt_5cbd2dfc',
    'vars' => 
    array (
      'now' => 
      array (
        'type' => 'array',
        'description' => 'The assoc array with the \'now\' local timestamp data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the birthdays data',
      ),
      'time' => 
      array (
        'type' => 'object',
        'description' => 'The user related Datetime object',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.index_modify_birthdays_list' => 
  array (
    'locations' => 
    array (
      'index.php' => 209,
    ),
    'description' => 'Event to modify the birthdays list',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the birthdays list',
    ),
    'name' => 'core.index_modify_birthdays_list',
    'tooltip_id' => 'stt_e628e22d',
    'vars' => 
    array (
      'birthdays' => 
      array (
        'type' => 'array',
        'description' => 'Array with the users birthdays data',
      ),
      'rows' => 
      array (
        'type' => 'array',
        'description' => 'Array with the birthdays SQL query result',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.index_modify_page_title' => 
  array (
    'locations' => 
    array (
      'index.php' => 245,
    ),
    'description' => 'You can use this event to modify the page title and load data for the index',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to modify the page title',
      1 => 'and load data for the index',
    ),
    'name' => 'core.index_modify_page_title',
    'tooltip_id' => 'stt_f7e69e36',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Title of the index page',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.mcp_modify_permissions' => 
  array (
    'locations' => 
    array (
      'mcp.php' => 146,
    ),
    'description' => 'Allow modification of the permissions to access the mcp file',
    'description_wrapped' => 
    array (
      0 => 'Allow modification of the permissions to access',
      1 => 'the mcp file',
    ),
    'name' => 'core.mcp_modify_permissions',
    'tooltip_id' => 'stt_2e777f99',
    'vars' => 
    array (
      'user_quickmod_actions' => 
      array (
        'type' => 'array',
        'description' => 'Array holding the quickmod actions and their respectiev permissions',
      ),
      'quickmod' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the action is performed via QuickMod',
      ),
      'allow_user' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean holding if the user can access the mcp',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The current forum ID',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The current topic ID',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.mcp_global_f_read_auth_after' => 
  array (
    'locations' => 
    array (
      'mcp.php' => 182,
    ),
    'description' => 'Allow applying additional permissions to MCP access besides f_read',
    'description_wrapped' => 
    array (
      0 => 'Allow applying additional permissions to MCP',
      1 => 'access besides f_read',
    ),
    'name' => 'core.mcp_global_f_read_auth_after',
    'tooltip_id' => 'stt_632dd0b3',
    'vars' => 
    array (
      'action' => 
      array (
        'type' => 'string',
        'description' => 'The action the user tried to execute',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum the user tried to access',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'The MCP module the user is trying to access',
      ),
      'module' => 
      array (
        'type' => 'p_master',
        'description' => 'Module system class',
      ),
      'quickmod' => 
      array (
        'type' => 'bool',
        'description' => 'True if the user is accessing using quickmod tools',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic the user tried to access',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.modify_quickmod_options' => 
  array (
    'locations' => 
    array (
      'mcp.php' => 250,
    ),
    'description' => 'This event allows you to add custom quickmod options',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to add custom quickmod',
      1 => 'options',
    ),
    'name' => 'core.modify_quickmod_options',
    'tooltip_id' => 'stt_f2586ed5',
    'vars' => 
    array (
      'module' => 
      array (
        'type' => 'object',
        'description' => 'Instance of module system class',
      ),
      'action' => 
      array (
        'type' => 'string',
        'description' => 'Quickmod option',
      ),
      'is_valid_action' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the action was handled properly',
      ),
    ),
    'since' => '3.1.0-a4',
  ),
  'core.modify_mcp_modules_display_option' => 
  array (
    'locations' => 
    array (
      'mcp.php' => 329,
    ),
    'description' => 'This event allows you to set display option for custom MCP modules',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to set display option for',
      1 => 'custom MCP modules',
    ),
    'name' => 'core.modify_mcp_modules_display_option',
    'tooltip_id' => 'stt_d73d07f5',
    'vars' => 
    array (
      'module' => 
      array (
        'type' => 'p_master',
        'description' => 'Module system class',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'MCP mode',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum id',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic id',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post id',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'User name',
      ),
      'id' => 
      array (
        'type' => 'int',
        'description' => 'Parent module id',
      ),
    ),
    'since' => '3.1.0-b2',
  ),
  'core.memberlist_team_modify_query' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 203,
    ),
    'description' => 'Modify the query used to get the users for the team page',
    'description_wrapped' => 
    array (
      0 => 'Modify the query used to get the users for the',
      1 => 'team page',
    ),
    'name' => 'core.memberlist_team_modify_query',
    'tooltip_id' => 'stt_0308e025',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the query',
      ),
      'group_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of group ids',
      ),
      'teampage_data' => 
      array (
        'type' => 'array',
        'description' => 'The teampage data',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.memberlist_team_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 354,
    ),
    'description' => 'Modify the template vars for displaying the user in the groups on the teampage',
    'description_wrapped' => 
    array (
      0 => 'Modify the template vars for displaying the user',
      1 => 'in the groups on the teampage',
    ),
    'name' => 'core.memberlist_team_modify_template_vars',
    'tooltip_id' => 'stt_00e97213',
    'vars' => 
    array (
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the query',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the action user row',
      ),
      'groups_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of groups with all users that should be displayed',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.memberlist_modify_viewprofile_sql' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 524,
    ),
    'description' => 'Modify user data SQL before member profile row is created',
    'description_wrapped' => 
    array (
      0 => 'Modify user data SQL before member profile row is',
      1 => 'created',
    ),
    'name' => 'core.memberlist_modify_viewprofile_sql',
    'tooltip_id' => 'stt_07695fc1',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user ID',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'The username',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the main query',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.modify_memberlist_viewprofile_group_sql' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 586,
    ),
    'description' => 'Modify the query used to get the group data',
    'description_wrapped' => 
    array (
      0 => 'Modify the query used to get the group data',
    ),
    'name' => 'core.modify_memberlist_viewprofile_group_sql',
    'tooltip_id' => 'stt_c5614dd4',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the query',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.modify_memberlist_viewprofile_group_data' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 639,
    ),
    'description' => 'Modify group data before options is created and data is unset',
    'description_wrapped' => 
    array (
      0 => 'Modify group data before options is created and',
      1 => 'data is unset',
    ),
    'name' => 'core.modify_memberlist_viewprofile_group_data',
    'tooltip_id' => 'stt_3a3f9dcc',
    'vars' => 
    array (
      'group_data' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the group data',
      ),
      'group_sort' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the sorted group data',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.memberlist_view_profile' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 757,
    ),
    'description' => 'Modify user data before we display the profile',
    'description_wrapped' => 
    array (
      0 => 'Modify user data before we display the profile',
    ),
    'name' => 'core.memberlist_view_profile',
    'tooltip_id' => 'stt_d3ded9a4',
    'vars' => 
    array (
      'member' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s data',
      ),
      'user_notes_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the mcp user notes module enabled?',
      ),
      'warn_user_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the mcp warnings module enabled?',
      ),
      'zebra_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the ucp zebra module enabled?',
      ),
      'friends_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the ucp friends module enabled?',
      ),
      'foes_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the ucp foes module enabled?',
      ),
      'friend' => 
      array (
        'type' => 'bool',
        'description' => 'Is the user friend?',
      ),
      'foe' => 
      array (
        'type' => 'bool',
        'description' => 'Is the user foe?',
      ),
      'profile_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s profile field data',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-b2' => 'Added friend and foe status',
      '3.1.0-b3' => 'Added profile fields data',
    ),
  ),
  'core.memberlist_modify_view_profile_template_vars' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 840,
    ),
    'description' => 'Modify user\'s template vars before we display the profile',
    'description_wrapped' => 
    array (
      0 => 'Modify user\'s template vars before we display the',
      1 => 'profile',
    ),
    'name' => 'core.memberlist_modify_view_profile_template_vars',
    'tooltip_id' => 'stt_70bc3b02',
    'vars' => 
    array (
      'template_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s template vars',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'The user ID',
      ),
      'user_notes_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the mcp user notes module enabled?',
      ),
      'warn_user_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the mcp warnings module enabled?',
      ),
      'friends_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the ucp friends module enabled?',
      ),
      'foes_enabled' => 
      array (
        'type' => 'bool',
        'description' => 'Is the ucp foes module enabled?',
      ),
      'friend' => 
      array (
        'type' => 'bool',
        'description' => 'Is the user friend?',
      ),
      'foe' => 
      array (
        'type' => 'bool',
        'description' => 'Is the user foe?',
      ),
    ),
    'since' => '3.2.6-RC1',
    'changes' => 
    array (
      '3.3.15-RC1' => 'Added vars user_id, user_notes_enabled, warn_user_enabled, friend, friends_enabled, foe, foes_enabled',
    ),
  ),
  'core.memberlist_modify_ip_search_sql_query' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1233,
    ),
    'description' => 'Modify sql query for members search by ip address / hostname',
    'description_wrapped' => 
    array (
      0 => 'Modify sql query for members search by ip address',
      1 => '/ hostname',
    ),
    'name' => 'core.memberlist_modify_ip_search_sql_query',
    'tooltip_id' => 'stt_9e23dfaf',
    'vars' => 
    array (
      'ipdomain' => 
      array (
        'type' => 'string',
        'description' => 'The host name',
      ),
      'ips' => 
      array (
        'type' => 'string',
        'description' => 'IP address list for the given host name',
      ),
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'The SQL query for searching members by IP address',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.memberlist_modify_sql_query_data' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1423,
    ),
    'description' => 'Modify sql query data for members search',
    'description_wrapped' => 
    array (
      0 => 'Modify sql query data for members search',
    ),
    'name' => 'core.memberlist_modify_sql_query_data',
    'tooltip_id' => 'stt_68baace4',
    'vars' => 
    array (
      'order_by' => 
      array (
        'type' => 'string',
        'description' => 'SQL ORDER BY clause condition',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'The sorting direction',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sorting key',
      ),
      'sort_key_sql' => 
      array (
        'type' => 'array',
        'description' => 'Arraty with the sorting conditions data',
      ),
      'sql_from' => 
      array (
        'type' => 'string',
        'description' => 'SQL FROM clause condition',
      ),
      'sql_select' => 
      array (
        'type' => 'string',
        'description' => 'SQL SELECT fields list',
      ),
      'sql_where' => 
      array (
        'type' => 'string',
        'description' => 'SQL WHERE clause condition',
      ),
      'sql_where_data' => 
      array (
        'type' => 'string',
        'description' => 'SQL WHERE clause additional conditions data',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.memberlist_modify_sort_pagination_params' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1534,
    ),
    'description' => 'Modify memberlist sort and pagination parameters',
    'description_wrapped' => 
    array (
      0 => 'Modify memberlist sort and pagination parameters',
    ),
    'name' => 'core.memberlist_modify_sort_pagination_params',
    'tooltip_id' => 'stt_c1ea3b35',
    'vars' => 
    array (
      'sort_params' => 
      array (
        'type' => 'array',
        'description' => 'Array with URL parameters for sorting',
      ),
      'params' => 
      array (
        'type' => 'array',
        'description' => 'Array with URL parameters for pagination',
      ),
      'first_characters' => 
      array (
        'type' => 'array',
        'description' => 'Array that maps each letter in a-z, \'other\' and the empty string to their display representation',
      ),
      'u_first_char_params' => 
      array (
        'type' => 'string',
        'description' => 'Concatenated URL parameters for first character search links',
      ),
      'first_char_block_vars' => 
      array (
        'type' => 'array',
        'description' => 'Template block variables for each first character',
      ),
      'total_users' => 
      array (
        'type' => 'int',
        'description' => 'Total number of users found in this search',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.memberlist_modify_memberrow_sql' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1730,
    ),
    'description' => 'Modify user data SQL before member row is created',
    'description_wrapped' => 
    array (
      0 => 'Modify user data SQL before member row is created',
    ),
    'name' => 'core.memberlist_modify_memberrow_sql',
    'tooltip_id' => 'stt_6c26eec6',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Memberlist mode',
      ),
      'sql_select' => 
      array (
        'type' => 'string',
        'description' => 'Additional select statement',
      ),
      'sql_from' => 
      array (
        'type' => 'string',
        'description' => 'Additional from statement',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'Array containing the main query',
      ),
      'user_list' => 
      array (
        'type' => 'array',
        'description' => 'Array containing list of users',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.memberlist_memberrow_before' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1785,
    ),
    'description' => 'Modify list of users before member row is created',
    'description_wrapped' => 
    array (
      0 => 'Modify list of users before member row is created',
    ),
    'name' => 'core.memberlist_memberrow_before',
    'tooltip_id' => 'stt_98c18e5e',
    'vars' => 
    array (
      'user_list' => 
      array (
        'type' => 'array',
        'description' => 'Array containing list of users',
      ),
      'use_contact_fields' => 
      array (
        'type' => 'bool',
        'description' => 'Should we display contact fields as such?',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.memberlist_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'memberlist.php' => 1870,
    ),
    'description' => 'Modify memberlist page template vars',
    'description_wrapped' => 
    array (
      0 => 'Modify memberlist page template vars',
    ),
    'name' => 'core.memberlist_modify_template_vars',
    'tooltip_id' => 'stt_753f28b7',
    'vars' => 
    array (
      'params' => 
      array (
        'type' => 'array',
        'description' => 'Array containing URL parameters',
      ),
      'sort_url' => 
      array (
        'type' => 'string',
        'description' => 'Sorting URL base',
      ),
      'template_vars' => 
      array (
        'type' => 'array',
        'description' => 'Array containing template vars',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.delete_attachments_collect_data_before' => 
  array (
    'locations' => 
    array (
      'phpbb/attachment/delete.php' => 125,
    ),
    'description' => 'Perform additional actions before collecting data for attachment(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before collecting data',
      1 => 'for attachment(s) deletion',
    ),
    'name' => 'core.delete_attachments_collect_data_before',
    'tooltip_id' => 'stt_023dfbae',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing attachments deletion mode, can be: post|message|topic|attach|user',
      ),
      'ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of ids corresponding to the mode',
      ),
      'resync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if posts/messages/topics should be synchronized',
      ),
      'sql_id' => 
      array (
        'type' => 'string',
        'description' => 'The field name to collect/delete data for depending on the mode',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.delete_attachments_from_database_after' => 
  array (
    'locations' => 
    array (
      'phpbb/attachment/delete.php' => 169,
    ),
    'description' => 'Perform additional actions after attachment(s) deletion from the database',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after attachment(s)',
      1 => 'deletion from the database',
    ),
    'name' => 'core.delete_attachments_from_database_after',
    'tooltip_id' => 'stt_875e108c',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing attachments deletion mode, can be: post|message|topic|attach|user',
      ),
      'ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of ids corresponding to the mode',
      ),
      'resync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if posts/messages/topics should be synchronized',
      ),
      'sql_id' => 
      array (
        'type' => 'string',
        'description' => 'The field name to collect/delete data for depending on the mode',
      ),
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids for deleted attachment(s)',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic ids for deleted attachment(s)',
      ),
      'message_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with private message ids for deleted attachment(s)',
      ),
      'physical' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted attachment(s) physical file(s) data',
      ),
      'num_deleted' => 
      array (
        'type' => 'int',
        'description' => 'The number of deleted attachment(s) from the database',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.delete_attachments_before' => 
  array (
    'locations' => 
    array (
      'phpbb/attachment/delete.php' => 343,
    ),
    'description' => 'Perform additional actions before attachment(s) deletion',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions before attachment(s)',
      1 => 'deletion',
    ),
    'name' => 'core.delete_attachments_before',
    'tooltip_id' => 'stt_3b33e0b1',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing attachments deletion mode, can be: post|message|topic|attach|user',
      ),
      'ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of ids corresponding to the mode',
      ),
      'resync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if posts/messages/topics should be synchronized',
      ),
      'sql_id' => 
      array (
        'type' => 'string',
        'description' => 'The field name to collect/delete data for depending on the mode',
      ),
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids for deleted attachment(s)',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic ids for deleted attachment(s)',
      ),
      'message_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with private message ids for deleted attachment(s)',
      ),
      'physical' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted attachment(s) physical file(s) data',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.delete_attachments_from_filesystem_after' => 
  array (
    'locations' => 
    array (
      'phpbb/attachment/delete.php' => 421,
    ),
    'description' => 'Perform additional actions after attachment(s) deletion from the filesystem',
    'description_wrapped' => 
    array (
      0 => 'Perform additional actions after attachment(s)',
      1 => 'deletion from the filesystem',
    ),
    'name' => 'core.delete_attachments_from_filesystem_after',
    'tooltip_id' => 'stt_c671167d',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Variable containing attachments deletion mode, can be: post|message|topic|attach|user',
      ),
      'ids' => 
      array (
        'type' => 'mixed',
        'description' => 'Array or comma separated list of ids corresponding to the mode',
      ),
      'resync' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if posts/messages/topics should be synchronized',
      ),
      'sql_id' => 
      array (
        'type' => 'string',
        'description' => 'The field name to collect/delete data for depending on the mode',
      ),
      'post_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids for deleted attachment(s)',
      ),
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic ids for deleted attachment(s)',
      ),
      'message_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with private message ids for deleted attachment(s)',
      ),
      'physical' => 
      array (
        'type' => 'array',
        'description' => 'Array with deleted attachment(s) physical file(s) data',
      ),
      'num_deleted' => 
      array (
        'type' => 'int',
        'description' => 'The number of deleted attachment(s) from the database',
      ),
      'space_removed' => 
      array (
        'type' => 'int',
        'description' => 'The size of deleted files(s) from the filesystem',
      ),
      'files_removed' => 
      array (
        'type' => 'int',
        'description' => 'The number of deleted file(s) from the filesystem',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.modify_uploaded_file' => 
  array (
    'locations' => 
    array (
      'phpbb/attachment/upload.php' => 193,
    ),
    'description' => 'Event to modify uploaded file before submit to the post',
    'description_wrapped' => 
    array (
      0 => 'Event to modify uploaded file before submit to the',
      1 => 'post',
    ),
    'name' => 'core.modify_uploaded_file',
    'tooltip_id' => 'stt_d5c49c8d',
    'vars' => 
    array (
      'filedata' => 
      array (
        'type' => 'array',
        'description' => 'Array containing uploaded file data',
      ),
      'is_image' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the file is an image',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.acl_clear_prefetch_after' => 
  array (
    'locations' => 
    array (
      'phpbb/auth/auth.php' => 564,
    ),
    'description' => 'Event is triggered after user(s) permission settings cache has been cleared',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered after user(s) permission',
      1 => 'settings cache has been cleared',
    ),
    'name' => 'core.acl_clear_prefetch_after',
    'tooltip_id' => 'stt_44eba9ba',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'mixed',
        'description' => 'User ID(s)',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.auth_login_session_create_before' => 
  array (
    'locations' => 
    array (
      'phpbb/auth/auth.php' => 1016,
    ),
    'description' => 'Event is triggered after checking for valid username and password, and before the actual session creation.',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered after checking for valid',
      1 => 'username and password, and before the actual',
      2 => 'session creation.',
    ),
    'name' => 'core.auth_login_session_create_before',
    'tooltip_id' => 'stt_7bca359d',
    'vars' => 
    array (
      'login' => 
      array (
        'type' => 'array',
        'description' => 'Variable containing login array',
      ),
      'admin' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean variable whether user is logging into the ACP',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'Username of user to log in',
      ),
      'autologin' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean variable signaling whether login is triggered via auto login',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.oauth_login_after_check_if_provider_id_has_match' => 
  array (
    'locations' => 
    array (
      'phpbb/auth/provider/oauth/oauth.php' => 250,
    ),
    'description' => 'Event is triggered before check if provider is already associated with an account',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered before check if provider is',
      1 => 'already associated with an account',
    ),
    'name' => 'core.oauth_login_after_check_if_provider_id_has_match',
    'tooltip_id' => 'stt_cbc4b164',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'User row',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Provider data',
      ),
      'redirect_data' => 
      array (
        'type' => 'array',
        'description' => 'Data to be appended to the redirect url',
      ),
      'service' => 
      array (
        'type' => 'ServiceInterface',
        'description' => 'OAuth service',
      ),
    ),
    'since' => '3.2.3-RC1',
    'changes' => 
    array (
      '3.2.6-RC1' => 'Added redirect_data',
    ),
  ),
  'core.auth_oauth_login_after' => 
  array (
    'locations' => 
    array (
      'phpbb/auth/provider/oauth/oauth.php' => 318,
    ),
    'description' => 'Event is triggered after user is successfully logged in via OAuth.',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered after user is successfully',
      1 => 'logged in via OAuth.',
    ),
    'name' => 'core.auth_oauth_login_after',
    'tooltip_id' => 'stt_0632568d',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'User row',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.auth_oauth_link_after' => 
  array (
    'locations' => 
    array (
      'phpbb/auth/provider/oauth/oauth.php' => 704,
    ),
    'description' => 'Event is triggered after user links account.',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered after user links account.',
    ),
    'name' => 'core.auth_oauth_link_after',
    'tooltip_id' => 'stt_f30baa06',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'User row',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.get_gravatar_url_after' => 
  array (
    'locations' => 
    array (
      'phpbb/avatar/driver/gravatar.php' => 194,
    ),
    'description' => 'Modify gravatar url',
    'description_wrapped' => 
    array (
      0 => 'Modify gravatar url',
    ),
    'name' => 'core.get_gravatar_url_after',
    'tooltip_id' => 'stt_a14651ea',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'string',
        'description' => 'User data or group data',
      ),
      'url' => 
      array (
        'type' => 'string',
        'description' => 'Gravatar URL',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.ucp_profile_avatar_upload_validation' => 
  array (
    'locations' => 
    array (
      'phpbb/avatar/driver/remote.php' => 100,
    ),
    'description' => 'Event to make custom validation of avatar upload',
    'description_wrapped' => 
    array (
      0 => 'Event to make custom validation of avatar upload',
    ),
    'name' => 'core.ucp_profile_avatar_upload_validation',
    'tooltip_id' => 'stt_af620900',
    'vars' => 
    array (
      'url' => 
      array (
        'type' => 'string',
        'description' => 'Image url',
      ),
      'width' => 
      array (
        'type' => 'string',
        'description' => 'Image width',
      ),
      'height' => 
      array (
        'type' => 'string',
        'description' => 'Image height',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Error message array',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.avatar_driver_upload_move_file_before' => 
  array (
    'locations' => 
    array (
      'phpbb/avatar/driver/upload.php' => 225,
    ),
    'description' => 'Before moving new file in place (and eventually overwriting the existing avatar with the newly uploaded avatar)',
    'description_wrapped' => 
    array (
      0 => 'Before moving new file in place (and eventually',
      1 => 'overwriting the existing avatar with the newly',
      2 => 'uploaded avatar)',
    ),
    'name' => 'core.avatar_driver_upload_move_file_before',
    'tooltip_id' => 'stt_342b2b1c',
    'vars' => 
    array (
      'filedata' => 
      array (
        'type' => 'array',
        'description' => 'Array containing uploaded file data',
      ),
      'file' => 
      array (
        'type' => '\\phpbb\\files\\filespec',
        'description' => 'Instance of filespec class',
      ),
      'destination' => 
      array (
        'type' => 'string',
        'description' => 'Destination directory where the file is going to be moved',
      ),
      'prefix' => 
      array (
        'type' => 'string',
        'description' => 'Prefix for the avatar filename',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with avatar row data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if filled in by this event file will not be moved',
      ),
    ),
    'since' => '3.1.6-RC1',
    'changes' => 
    array (
      '3.1.9-RC1' => 'Added filedata',
      '3.2.3-RC1' => 'Added file',
    ),
  ),
  'core.avatar_driver_upload_delete_before' => 
  array (
    'locations' => 
    array (
      'phpbb/avatar/driver/upload.php' => 297,
    ),
    'description' => 'Before deleting an existing avatar',
    'description_wrapped' => 
    array (
      0 => 'Before deleting an existing avatar',
    ),
    'name' => 'core.avatar_driver_upload_delete_before',
    'tooltip_id' => 'stt_a55f6ef9',
    'vars' => 
    array (
      'destination' => 
      array (
        'type' => 'string',
        'description' => 'Destination directory where the file is going to be deleted',
      ),
      'prefix' => 
      array (
        'type' => 'string',
        'description' => 'Prefix for the avatar filename',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with avatar row data',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors, if filled in by this event file will not be deleted',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.avatar_manager_avatar_delete_after' => 
  array (
    'locations' => 
    array (
      'phpbb/avatar/manager.php' => 354,
    ),
    'description' => 'Event is triggered after user avatar has been deleted',
    'description_wrapped' => 
    array (
      0 => 'Event is triggered after user avatar has been',
      1 => 'deleted',
    ),
    'name' => 'core.avatar_manager_avatar_delete_after',
    'tooltip_id' => 'stt_ce49bb91',
    'vars' => 
    array (
      'user' => 
      array (
        'type' => '\\phpbb\\user',
        'description' => 'phpBB user object',
      ),
      'avatar_data' => 
      array (
        'type' => 'array',
        'description' => 'Normalised avatar-related user data',
      ),
      'table' => 
      array (
        'type' => 'string',
        'description' => 'Table to delete avatar from',
      ),
      'prefix' => 
      array (
        'type' => 'string',
        'description' => 'Column prefix to delete avatar from',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.phpbb_content_visibility_is_visible' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 172,
    ),
    'description' => 'Allow changing the result of calling is_visible',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the result of calling is_visible',
    ),
    'name' => 'core.phpbb_content_visibility_is_visible',
    'tooltip_id' => 'stt_e6e9fe70',
    'vars' => 
    array (
      'is_visible' => 
      array (
        'type' => 'bool',
        'description' => 'Default visibility condition, to be modified by extensions if needed.',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Either "topic" or "post"',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum id of the current item',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array of item information',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.phpbb_content_visibility_get_visibility_sql_before' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 213,
    ),
    'description' => 'Allow changing the result of calling get_visibility_sql',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the result of calling',
      1 => 'get_visibility_sql',
    ),
    'name' => 'core.phpbb_content_visibility_get_visibility_sql_before',
    'tooltip_id' => 'stt_2eed38ff',
    'vars' => 
    array (
      'where_sql' => 
      array (
        'type' => 'string',
        'description' => 'Extra visibility conditions. It must end with either an SQL "AND" or an "OR"',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Either "topic" or "post" depending on the query this is being used in',
      ),
      'forum_id' => 
      array (
        'type' => 'array',
        'description' => 'The forum id in which the search is made.',
      ),
      'table_alias' => 
      array (
        'type' => 'string',
        'description' => 'Table alias to prefix in SQL queries',
      ),
      'get_visibility_sql_overwrite' => 
      array (
        'type' => 'mixed',
        'description' => 'If a string, forces the function to return get_forums_visibility_sql_overwrite after executing the event',
      ),
    ),
    'since' => '3.1.4-RC1',
  ),
  'core.phpbb_content_visibility_get_forums_visibility_before' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 284,
    ),
    'description' => 'Allow changing the result of calling get_forums_visibility_sql',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the result of calling',
      1 => 'get_forums_visibility_sql',
    ),
    'name' => 'core.phpbb_content_visibility_get_forums_visibility_before',
    'tooltip_id' => 'stt_20796807',
    'vars' => 
    array (
      'where_sql' => 
      array (
        'type' => 'string',
        'description' => 'Extra visibility conditions. It must end with either an SQL "AND" or an "OR"',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Either "topic" or "post" depending on the query this is being used in',
      ),
      'forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of forum ids which the posts/topics are limited to',
      ),
      'table_alias' => 
      array (
        'type' => 'string',
        'description' => 'Table alias to prefix in SQL queries',
      ),
      'approve_forums' => 
      array (
        'type' => 'array',
        'description' => 'Array of forums where the user has m_approve permissions',
      ),
      'get_forums_visibility_sql_overwrite' => 
      array (
        'type' => 'mixed',
        'description' => 'If a string, forces the function to return get_forums_visibility_sql_overwrite after executing the event',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.phpbb_content_visibility_get_global_visibility_before' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 339,
    ),
    'description' => 'Allow changing the result of calling get_global_visibility_sql',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the result of calling',
      1 => 'get_global_visibility_sql',
    ),
    'name' => 'core.phpbb_content_visibility_get_global_visibility_before',
    'tooltip_id' => 'stt_2d6cab07',
    'vars' => 
    array (
      'where_sqls' => 
      array (
        'type' => 'array',
        'description' => 'Array of extra visibility conditions. Will be joined by imploding with "OR".',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Either "topic" or "post" depending on the query this is being used in',
      ),
      'exclude_forum_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array of forum ids the current user doesn\'t have access to',
      ),
      'table_alias' => 
      array (
        'type' => 'string',
        'description' => 'Table alias to prefix in SQL queries',
      ),
      'approve_forums' => 
      array (
        'type' => 'array',
        'description' => 'Array of forums where the user has m_approve permissions',
      ),
      'visibility_sql_overwrite' => 
      array (
        'type' => 'string',
        'description' => 'If not empty, forces the function to return visibility_sql_overwrite after executing the event',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.set_post_visibility_before_sql' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 492,
    ),
    'description' => 'Perform actions right before the query to change post visibility',
    'description_wrapped' => 
    array (
      0 => 'Perform actions right before the query to change',
      1 => 'post visibility',
    ),
    'name' => 'core.set_post_visibility_before_sql',
    'tooltip_id' => 'stt_868ea7d8',
    'vars' => 
    array (
      'visibility' => 
      array (
        'type' => 'int',
        'description' => 'Element of {ITEM_APPROVED, ITEM_DELETED, ITEM_REAPPROVE}',
      ),
      'post_id' => 
      array (
        'type' => 'array',
        'description' => 'Array containing all post IDs to be modified. If blank, all posts within the topic are modified.',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic of the post IDs to be modified.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID that the topic_id resides in.',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID doing this action.',
      ),
      'time' => 
      array (
        'type' => 'int',
        'description' => 'Timestamp of this action.',
      ),
      'reason' => 
      array (
        'type' => 'string',
        'description' => 'Reason specified by the user for this change.',
      ),
      'is_starter' => 
      array (
        'type' => 'bool',
        'description' => 'Are we changing the topic\'s starter?',
      ),
      'is_latest' => 
      array (
        'type' => 'bool',
        'description' => 'Are we changing the topic\'s latest post?',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The data array for this action.',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Use time instead of non-existent timestamp',
    ),
  ),
  'core.set_post_visibility_after' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 689,
    ),
    'description' => 'Perform actions after all steps to changing post visibility',
    'description_wrapped' => 
    array (
      0 => 'Perform actions after all steps to changing post',
      1 => 'visibility',
    ),
    'name' => 'core.set_post_visibility_after',
    'tooltip_id' => 'stt_67039e9a',
    'vars' => 
    array (
      'visibility' => 
      array (
        'type' => 'int',
        'description' => 'Element of {ITEM_APPROVED, ITEM_DELETED, ITEM_REAPPROVE}',
      ),
      'post_id' => 
      array (
        'type' => 'array',
        'description' => 'Array containing all post IDs to be modified. If blank, all posts within the topic are modified.',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic of the post IDs to be modified.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID that the topic_id resides in.',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID doing this action.',
      ),
      'time' => 
      array (
        'type' => 'int',
        'description' => 'Timestamp of this action.',
      ),
      'reason' => 
      array (
        'type' => 'string',
        'description' => 'Reason specified by the user for this change.',
      ),
      'is_starter' => 
      array (
        'type' => 'bool',
        'description' => 'Are we changing the topic\'s starter?',
      ),
      'is_latest' => 
      array (
        'type' => 'bool',
        'description' => 'Are we changing the topic\'s latest post?',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The data array for this action.',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Use time instead of non-existent timestamp',
    ),
  ),
  'core.set_topic_visibility_before_sql' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 774,
    ),
    'description' => 'Perform actions right before the query to change topic visibility',
    'description_wrapped' => 
    array (
      0 => 'Perform actions right before the query to change',
      1 => 'topic visibility',
    ),
    'name' => 'core.set_topic_visibility_before_sql',
    'tooltip_id' => 'stt_56ded65d',
    'vars' => 
    array (
      'visibility' => 
      array (
        'type' => 'int',
        'description' => 'Element of {ITEM_APPROVED, ITEM_DELETED, ITEM_REAPPROVE}',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic of the post IDs to be modified.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID that the topic_id resides in.',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID doing this action.',
      ),
      'time' => 
      array (
        'type' => 'int',
        'description' => 'Timestamp of this action.',
      ),
      'reason' => 
      array (
        'type' => 'string',
        'description' => 'Reason specified by the user for this change.',
      ),
      'force_update_all' => 
      array (
        'type' => 'bool',
        'description' => 'Force an update on all posts within the topic, regardless of their current approval state.',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The data array for this action.',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Use time instead of non-existent timestamp',
    ),
  ),
  'core.set_topic_visibility_after' => 
  array (
    'locations' => 
    array (
      'phpbb/content_visibility.php' => 824,
    ),
    'description' => 'Perform actions after all steps to changing topic visibility',
    'description_wrapped' => 
    array (
      0 => 'Perform actions after all steps to changing topic',
      1 => 'visibility',
    ),
    'name' => 'core.set_topic_visibility_after',
    'tooltip_id' => 'stt_711c2d5b',
    'vars' => 
    array (
      'visibility' => 
      array (
        'type' => 'int',
        'description' => 'Element of {ITEM_APPROVED, ITEM_DELETED, ITEM_REAPPROVE}',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic of the post IDs to be modified.',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID that the topic_id resides in.',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID doing this action.',
      ),
      'time' => 
      array (
        'type' => 'int',
        'description' => 'Timestamp of this action.',
      ),
      'reason' => 
      array (
        'type' => 'string',
        'description' => 'Reason specified by the user for this change.',
      ),
      'force_update_all' => 
      array (
        'type' => 'bool',
        'description' => 'Force an update on all posts within the topic, regardless of their current approval state.',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'The data array for this action.',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.2.2-RC1' => 'Use time instead of non-existent timestamp',
    ),
  ),
  'core.controller_helper_render_response' => 
  array (
    'locations' => 
    array (
      'phpbb/controller/helper.php' => 195,
    ),
    'description' => 'Modify response before output',
    'description_wrapped' => 
    array (
      0 => 'Modify response before output',
    ),
    'name' => 'core.controller_helper_render_response',
    'tooltip_id' => 'stt_456122db',
    'vars' => 
    array (
      'response' => 
      array (
        'type' => 'Response',
        'description' => 'Symfony response object',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.feed_base_modify_item_sql' => 
  array (
    'locations' => 
    array (
      'phpbb/feed/base.php' => 193,
    ),
    'description' => 'Event to modify the feed item sql',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the feed item sql',
    ),
    'name' => 'core.feed_base_modify_item_sql',
    'tooltip_id' => 'stt_35da0aea',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the feed item data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.feed_modify_feed_row' => 
  array (
    'locations' => 
    array (
      'phpbb/feed/controller/feed.php' => 344,
    ),
    'description' => 'Event to modify the feed row',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the feed row',
    ),
    'name' => 'core.feed_modify_feed_row',
    'tooltip_id' => 'stt_e26462f0',
    'vars' => 
    array (
      'feed' => 
      array (
        'type' => 'feed_interface',
        'description' => 'Feed instance',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with feed data',
      ),
    ),
    'since' => '3.1.10-RC1',
    'changes' => 
    array (
      '3.3.0' => 'Replace forum_id, mode, topic_id with feed instance',
    ),
  ),
  'core.modify_group_name_string' => 
  array (
    'locations' => 
    array (
      'phpbb/group/helper.php' => 209,
    ),
    'description' => 'Use this event to change the output of the group name',
    'description_wrapped' => 
    array (
      0 => 'Use this event to change the output of the group',
      1 => 'name',
    ),
    'name' => 'core.modify_group_name_string',
    'tooltip_id' => 'stt_ff259eb4',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'profile|group_name|colour|full|no_profile',
      ),
      'group_id' => 
      array (
        'type' => 'int',
        'description' => 'The group identifier',
      ),
      'group_name' => 
      array (
        'type' => 'string',
        'description' => 'The group name',
      ),
      'group_colour' => 
      array (
        'type' => 'string',
        'description' => 'The group colour',
      ),
      'custom_profile_url' => 
      array (
        'type' => 'string',
        'description' => 'Optional parameter to specify a profile url.',
      ),
      'group_name_string' => 
      array (
        'type' => 'string',
        'description' => 'The string that has been generated',
      ),
      'name_strings' => 
      array (
        'type' => 'array',
        'description' => 'Array of original return templates',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.get_group_rank_before' => 
  array (
    'locations' => 
    array (
      'phpbb/group/helper.php' => 241,
    ),
    'description' => 'Preparing a group\'s rank before displaying',
    'description_wrapped' => 
    array (
      0 => 'Preparing a group\'s rank before displaying',
    ),
    'name' => 'core.get_group_rank_before',
    'tooltip_id' => 'stt_19d38be0',
    'vars' => 
    array (
      'group_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with group\'s data',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.get_group_rank_after' => 
  array (
    'locations' => 
    array (
      'phpbb/group/helper.php' => 274,
    ),
    'description' => 'Modify a group\'s rank before displaying',
    'description_wrapped' => 
    array (
      0 => 'Modify a group\'s rank before displaying',
    ),
    'name' => 'core.get_group_rank_after',
    'tooltip_id' => 'stt_008fab7f',
    'vars' => 
    array (
      'group_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with group\'s data',
      ),
      'group_rank_data' => 
      array (
        'type' => 'array',
        'description' => 'Group rank data',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.faq_mode_validation' => 
  array (
    'locations' => 
    array (
      'phpbb/help/controller/help.php' => 100,
    ),
    'description' => 'You can use this event display a custom help page',
    'description_wrapped' => 
    array (
      0 => 'You can use this event display a custom help page',
    ),
    'name' => 'core.faq_mode_validation',
    'tooltip_id' => 'stt_254897a8',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Title of the page',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'FAQ that is going to be displayed',
      ),
      'lang_file' => 
      array (
        'type' => 'string',
        'description' => 'Language file containing the help data',
      ),
      'ext_name' => 
      array (
        'type' => 'string',
        'description' => 'Vendor and extension name where the help',
      ),
      'template_file' => 
      array (
        'type' => 'string',
        'description' => 'Template file name',
      ),
    ),
    'since' => '3.1.4-RC1',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added template_file var',
    ),
  ),
  'core.help_manager_add_block_before' => 
  array (
    'locations' => 
    array (
      'phpbb/help/manager.php' => 66,
    ),
    'description' => 'You can use this event to add a block before the current one.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to add a block before the',
      1 => 'current one.',
    ),
    'name' => 'core.help_manager_add_block_before',
    'tooltip_id' => 'stt_72a4918a',
    'vars' => 
    array (
      'block_name' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the block headline',
      ),
      'switch_column' => 
      array (
        'type' => 'bool',
        'description' => 'Should we switch the menu column before this headline',
      ),
      'questions' => 
      array (
        'type' => 'array',
        'description' => 'Array with questions',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.help_manager_add_block_after' => 
  array (
    'locations' => 
    array (
      'phpbb/help/manager.php' => 90,
    ),
    'description' => 'You can use this event to add a block after the current one.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to add a block after the',
      1 => 'current one.',
    ),
    'name' => 'core.help_manager_add_block_after',
    'tooltip_id' => 'stt_1cc4352f',
    'vars' => 
    array (
      'block_name' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the block headline',
      ),
      'switch_column' => 
      array (
        'type' => 'bool',
        'description' => 'Should we switch the menu column before this headline',
      ),
      'questions' => 
      array (
        'type' => 'array',
        'description' => 'Array with questions',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.help_manager_add_question_before' => 
  array (
    'locations' => 
    array (
      'phpbb/help/manager.php' => 110,
    ),
    'description' => 'You can use this event to add a question before the current one.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to add a question before',
      1 => 'the current one.',
    ),
    'name' => 'core.help_manager_add_question_before',
    'tooltip_id' => 'stt_d7320ab2',
    'vars' => 
    array (
      'question' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the question',
      ),
      'answer' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the answer',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.help_manager_add_question_after' => 
  array (
    'locations' => 
    array (
      'phpbb/help/manager.php' => 126,
    ),
    'description' => 'You can use this event to add a question after the current one.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to add a question after the',
      1 => 'current one.',
    ),
    'name' => 'core.help_manager_add_question_after',
    'tooltip_id' => 'stt_80ea6608',
    'vars' => 
    array (
      'question' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the question',
      ),
      'answer' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the answer',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.add_log' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 309,
    ),
    'description' => 'Allows to modify log data before we add it to the database',
    'description_wrapped' => 
    array (
      0 => 'Allows to modify log data before we add it to the',
      1 => 'database',
    ),
    'name' => 'core.add_log',
    'tooltip_id' => 'stt_de878ef0',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the entry we log',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the user who triggered the log',
      ),
      'log_ip' => 
      array (
        'type' => 'string',
        'description' => 'IP of the user who triggered the log',
      ),
      'log_operation' => 
      array (
        'type' => 'string',
        'description' => 'Language key of the log operation',
      ),
      'log_time' => 
      array (
        'type' => 'int',
        'description' => 'Timestamp, when the log was added',
      ),
      'additional_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with additional log data',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with log data we insert into the',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.delete_log' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 374,
    ),
    'description' => 'Allows to modify log data before we delete it from the database',
    'description_wrapped' => 
    array (
      0 => 'Allows to modify log data before we delete it from',
      1 => 'the database',
    ),
    'name' => 'core.delete_log',
    'tooltip_id' => 'stt_5229ce3a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the entry we log',
      ),
      'log_type' => 
      array (
        'type' => 'string',
        'description' => 'Type ID of the log (should be different than false)',
      ),
      'conditions' => 
      array (
        'type' => 'array',
        'description' => 'An array of conditions, 3 different forms are accepted',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.get_logs_modify_type' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 512,
    ),
    'description' => 'Overwrite log type and limitations before we count and get the logs',
    'description_wrapped' => 
    array (
      0 => 'Overwrite log type and limitations before we count',
      1 => 'and get the logs',
    ),
    'name' => 'core.get_logs_modify_type',
    'tooltip_id' => 'stt_11b8b2a8',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the entries we display',
      ),
      'count_logs' => 
      array (
        'type' => 'bool',
        'description' => 'Do we count all matching entries?',
      ),
      'limit' => 
      array (
        'type' => 'int',
        'description' => 'Limit the number of entries',
      ),
      'offset' => 
      array (
        'type' => 'int',
        'description' => 'Offset when fetching the entries',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Limit entries to the forum_id,',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the topic_id',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the user_id',
      ),
      'log_time' => 
      array (
        'type' => 'int',
        'description' => 'Limit maximum age of log entries',
      ),
      'sort_by' => 
      array (
        'type' => 'string',
        'description' => 'SQL order option',
      ),
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'Will only return entries that have the',
      ),
      'profile_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the users profile',
      ),
      'log_type' => 
      array (
        'type' => 'int',
        'description' => 'Limit logs to a certain type. If log_type',
      ),
      'sql_additional' => 
      array (
        'type' => 'string',
        'description' => 'Additional conditions for the entries,',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.get_logs_main_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 588,
    ),
    'description' => 'Modify the query to obtain the logs data',
    'description_wrapped' => 
    array (
      0 => 'Modify the query to obtain the logs data',
    ),
    'name' => 'core.get_logs_main_query_before',
    'tooltip_id' => 'stt_80a6c75a',
    'vars' => 
    array (
      'get_logs_sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The array in the format of the query builder with the query',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the entries we display',
      ),
      'count_logs' => 
      array (
        'type' => 'bool',
        'description' => 'Do we count all matching entries?',
      ),
      'limit' => 
      array (
        'type' => 'int',
        'description' => 'Limit the number of entries',
      ),
      'offset' => 
      array (
        'type' => 'int',
        'description' => 'Offset when fetching the entries',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Limit entries to the forum_id,',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the topic_id',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the user_id',
      ),
      'log_time' => 
      array (
        'type' => 'int',
        'description' => 'Limit maximum age of log entries',
      ),
      'sort_by' => 
      array (
        'type' => 'string',
        'description' => 'SQL order option',
      ),
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'Will only return entries that have the',
      ),
      'profile_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the users profile',
      ),
      'log_type' => 
      array (
        'type' => 'int',
        'description' => 'Limit logs to a certain type. If log_type',
      ),
      'sql_additional' => 
      array (
        'type' => 'string',
        'description' => 'Additional conditions for the entries,',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.get_logs_modify_entry_data' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 664,
    ),
    'description' => 'Modify the entry\'s data before it is returned',
    'description_wrapped' => 
    array (
      0 => 'Modify the entry\'s data before it is returned',
    ),
    'name' => 'core.get_logs_modify_entry_data',
    'tooltip_id' => 'stt_d78f87de',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Entry data from the database',
      ),
      'log_entry_data' => 
      array (
        'type' => 'array',
        'description' => 'Entry\'s data which is returned',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.get_logs_get_additional_data' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 741,
    ),
    'description' => 'Get some additional data after we got all log entries',
    'description_wrapped' => 
    array (
      0 => 'Get some additional data after we got all log',
      1 => 'entries',
    ),
    'name' => 'core.get_logs_get_additional_data',
    'tooltip_id' => 'stt_c61ce7e6',
    'vars' => 
    array (
      'log' => 
      array (
        'type' => 'array',
        'description' => 'Array with all our log entries',
      ),
      'topic_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of topic ids, for which we',
      ),
      'reportee_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of additional user IDs we',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.get_logs_after' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 813,
    ),
    'description' => 'Allow modifying or execute extra final filter on log entries',
    'description_wrapped' => 
    array (
      0 => 'Allow modifying or execute extra final filter on',
      1 => 'log entries',
    ),
    'name' => 'core.get_logs_after',
    'tooltip_id' => 'stt_5e978420',
    'vars' => 
    array (
      'log' => 
      array (
        'type' => 'array',
        'description' => 'Array with all our log entries',
      ),
      'topic_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of topic ids, for which we',
      ),
      'reportee_id_list' => 
      array (
        'type' => 'array',
        'description' => 'Array of additional user IDs we',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Mode of the entries we display',
      ),
      'count_logs' => 
      array (
        'type' => 'bool',
        'description' => 'Do we count all matching entries?',
      ),
      'limit' => 
      array (
        'type' => 'int',
        'description' => 'Limit the number of entries',
      ),
      'offset' => 
      array (
        'type' => 'int',
        'description' => 'Offset when fetching the entries',
      ),
      'forum_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Limit entries to the forum_id,',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the topic_id',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit entries to the user_id',
      ),
      'log_time' => 
      array (
        'type' => 'int',
        'description' => 'Limit maximum age of log entries',
      ),
      'sort_by' => 
      array (
        'type' => 'string',
        'description' => 'SQL order option',
      ),
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'Will only return entries that have the',
      ),
      'profile_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the users profile',
      ),
      'log_type' => 
      array (
        'type' => 'int',
        'description' => 'The type of logs it was filtered',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.phpbb_log_get_topic_auth_sql_before' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 921,
    ),
    'description' => 'Allow modifying SQL query before topic data is retrieved.',
    'description_wrapped' => 
    array (
      0 => 'Allow modifying SQL query before topic data is',
      1 => 'retrieved.',
    ),
    'name' => 'core.phpbb_log_get_topic_auth_sql_before',
    'tooltip_id' => 'stt_ab69804c',
    'vars' => 
    array (
      'topic_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with unique topic IDs',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL array',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.phpbb_log_get_topic_auth_sql_after' => 
  array (
    'locations' => 
    array (
      'phpbb/log/log.php' => 948,
    ),
    'description' => 'Allow modifying SQL query after topic data is retrieved (inside loop).',
    'description_wrapped' => 
    array (
      0 => 'Allow modifying SQL query after topic data is',
      1 => 'retrieved (inside loop).',
    ),
    'name' => 'core.phpbb_log_get_topic_auth_sql_after',
    'tooltip_id' => 'stt_078f2fc6',
    'vars' => 
    array (
      'forum_auth' => 
      array (
        'type' => 'array',
        'description' => 'Forum permissions',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'One row of data from SQL query',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.message_admin_form_submit_before' => 
  array (
    'locations' => 
    array (
      'phpbb/message/admin_form.php' => 117,
    ),
    'description' => 'You can use this event to modify subject and/or body and add new errors.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to modify subject and/or',
      1 => 'body and add new errors.',
    ),
    'name' => 'core.message_admin_form_submit_before',
    'tooltip_id' => 'stt_2c2c0754',
    'vars' => 
    array (
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'Message subject',
      ),
      'body' => 
      array (
        'type' => 'string',
        'description' => 'Message body',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Form errors',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.notification_manager_add_notifications_before' => 
  array (
    'locations' => 
    array (
      'phpbb/notification/manager.php' => 279,
    ),
    'description' => 'Get notification data before find_users_for_notification() execute',
    'description_wrapped' => 
    array (
      0 => 'Get notification data before',
      1 => 'find_users_for_notification() execute',
    ),
    'name' => 'core.notification_manager_add_notifications_before',
    'tooltip_id' => 'stt_c868ae1b',
    'vars' => 
    array (
      'add_notifications_override' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating whether function should return after event',
      ),
      'notification_type_name' => 
      array (
        'type' => 'array|string',
        'description' => 'Type identifier or array of item types',
      ),
      'data' => 
      array (
        'type' => 'string',
        'description' => 'Data specific for this notification type that will be inserted',
      ),
      'notified_users' => 
      array (
        'type' => 'array',
        'description' => 'Array of notified users',
      ),
      'options' => 
      array (
        'type' => 'string',
        'description' => 'Optional options to control what notifications are loaded',
      ),
    ),
    'since' => '3.3.6-RC1',
  ),
  'core.notification_manager_add_notifications' => 
  array (
    'locations' => 
    array (
      'phpbb/notification/manager.php' => 320,
    ),
    'description' => 'Allow filtering the notify_users array for a notification that is about to be sent. Here, $notify_users is already filtered by f_read and the ignored list included in the options variable',
    'description_wrapped' => 
    array (
      0 => 'Allow filtering the notify_users array for a',
      1 => 'notification that is about to be sent. Here,',
      2 => '$notify_users is already filtered by f_read and',
      3 => 'the ignored list included in the options variable',
    ),
    'name' => 'core.notification_manager_add_notifications',
    'tooltip_id' => 'stt_f35664c9',
    'vars' => 
    array (
      'notification_type_name' => 
      array (
        'type' => 'string',
        'description' => 'The notification type identifier',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Data specific for the notification_type_name used will be inserted',
      ),
      'notify_users' => 
      array (
        'type' => 'array',
        'description' => 'The array of userid that are going to be notified for this notification. Set to array() to cancel.',
      ),
      'options' => 
      array (
        'type' => 'array',
        'description' => 'The options that were used when this method was called (read only)',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.notification_manager_add_notifications_for_users_modify_data' => 
  array (
    'locations' => 
    array (
      'phpbb/notification/manager.php' => 387,
    ),
    'description' => 'Allow filtering the $notify_users array by $notification_type_name for a notification that is about to be sent. Here, $notify_users is already filtered from users who\'ve already been notified.',
    'description_wrapped' => 
    array (
      0 => 'Allow filtering the $notify_users array by',
      1 => '$notification_type_name for a notification that is',
      2 => 'about to be sent. Here, $notify_users is already',
      3 => 'filtered from users who\'ve already been notified.',
    ),
    'name' => 'core.notification_manager_add_notifications_for_users_modify_data',
    'tooltip_id' => 'stt_27c7e5bb',
    'vars' => 
    array (
      'notification_type_name' => 
      array (
        'type' => 'string',
        'description' => 'The notification type identifier',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Data specific for this type that will be inserted',
      ),
      'notify_users' => 
      array (
        'type' => 'array',
        'description' => 'User list to notify',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.pagination_generate_page_link' => 
  array (
    'locations' => 
    array (
      'phpbb/pagination.php' => 84,
    ),
    'description' => 'Execute code and/or override generate_page_link()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or override generate_page_link()',
    ),
    'name' => 'core.pagination_generate_page_link',
    'tooltip_id' => 'stt_39027b36',
    'vars' => 
    array (
      'base_url' => 
      array (
        'type' => 'string|array',
        'description' => 'is url prepended to all links generated within the function',
      ),
      'on_page' => 
      array (
        'type' => 'string',
        'description' => 'is the page for which we want to generate the link',
      ),
      'start_name' => 
      array (
        'type' => 'string',
        'description' => 'is the name of the parameter containing the first item of the given page (example: start=20)',
      ),
      'per_page' => 
      array (
        'type' => 'int',
        'description' => 'the number of items, posts, etc. to display per page, used to determine the number of pages to produce',
      ),
      'generate_page_link_override' => 
      array (
        'type' => 'bool|string',
        'description' => 'Shall we return custom pagination link (string URL) or not (false)',
      ),
    ),
    'since' => '3.1.0-RC5',
  ),
  'core.permissions' => 
  array (
    'locations' => 
    array (
      'phpbb/permissions.php' => 66,
    ),
    'description' => 'Allows to specify additional permission categories, types and permissions',
    'description_wrapped' => 
    array (
      0 => 'Allows to specify additional permission',
      1 => 'categories, types and permissions',
    ),
    'name' => 'core.permissions',
    'tooltip_id' => 'stt_45339f9e',
    'vars' => 
    array (
      'types' => 
      array (
        'type' => 'array',
        'description' => 'Array with permission types (a_, u_, m_, etc.)',
      ),
      'categories' => 
      array (
        'type' => 'array',
        'description' => 'Array with permission categories (pm, post, settings, misc, etc.)',
      ),
      'permissions' => 
      array (
        'type' => 'array',
        'description' => 'Array with permissions. Each Permission has the following layout:',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.generate_profile_fields_template_headlines' => 
  array (
    'locations' => 
    array (
      'phpbb/profilefields/manager.php' => 359,
    ),
    'description' => 'Event to modify template headlines of the generated profile fields',
    'description_wrapped' => 
    array (
      0 => 'Event to modify template headlines of the',
      1 => 'generated profile fields',
    ),
    'name' => 'core.generate_profile_fields_template_headlines',
    'tooltip_id' => 'stt_5f21702a',
    'vars' => 
    array (
      'restrict_option' => 
      array (
        'type' => 'string',
        'description' => 'Restrict the published fields to a certain profile field option',
      ),
      'tpl_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data fields',
      ),
      'profile_cache' => 
      array (
        'type' => 'array',
        'description' => 'A copy of the profile cache to make additional checks',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.grab_profile_fields_data' => 
  array (
    'locations' => 
    array (
      'phpbb/profilefields/manager.php' => 403,
    ),
    'description' => 'Event to modify profile fields data retrieved from the database',
    'description_wrapped' => 
    array (
      0 => 'Event to modify profile fields data retrieved from',
      1 => 'the database',
    ),
    'name' => 'core.grab_profile_fields_data',
    'tooltip_id' => 'stt_ad53ae1b',
    'vars' => 
    array (
      'user_ids' => 
      array (
        'type' => 'array',
        'description' => 'Single user id or an array of ids',
      ),
      'field_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with profile fields data',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.generate_profile_fields_template_data_before' => 
  array (
    'locations' => 
    array (
      'phpbb/profilefields/manager.php' => 456,
    ),
    'description' => 'Event to modify data of the generated profile fields, before the template assignment loop',
    'description_wrapped' => 
    array (
      0 => 'Event to modify data of the generated profile',
      1 => 'fields, before the template assignment loop',
    ),
    'name' => 'core.generate_profile_fields_template_data_before',
    'tooltip_id' => 'stt_7035ce69',
    'vars' => 
    array (
      'profile_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with users profile field data',
      ),
      'tpl_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data fields',
      ),
      'use_contact_fields' => 
      array (
        'type' => 'bool',
        'description' => 'Should we display contact fields as such?',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.generate_profile_fields_template_data' => 
  array (
    'locations' => 
    array (
      'phpbb/profilefields/manager.php' => 530,
    ),
    'description' => 'Event to modify template data of the generated profile fields',
    'description_wrapped' => 
    array (
      0 => 'Event to modify template data of the generated',
      1 => 'profile fields',
    ),
    'name' => 'core.generate_profile_fields_template_data',
    'tooltip_id' => 'stt_19d55ecc',
    'vars' => 
    array (
      'profile_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with users profile field data',
      ),
      'tpl_fields' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data fields',
      ),
      'use_contact_fields' => 
      array (
        'type' => 'bool',
        'description' => 'Should we display contact fields as such?',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.report_post_auth' => 
  array (
    'locations' => 
    array (
      'phpbb/report/report_handler_post.php' => 154,
    ),
    'description' => 'This event allows you to do extra auth checks and verify if the user has the required permissions',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to do extra auth checks and',
      1 => 'verify if the user has the required permissions',
    ),
    'name' => 'core.report_post_auth',
    'tooltip_id' => 'stt_99e09a7e',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'All data available from the forums table on this post\'s forum',
      ),
      'report_data' => 
      array (
        'type' => 'array',
        'description' => 'All data available from the topics and the posts tables on this post (and its topic)',
      ),
      'acl_check_ary' => 
      array (
        'type' => 'array',
        'description' => 'An array with the ACL to be tested. The evaluation is made in the same order as the array is sorted',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.search_mysql_by_keyword_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 455,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_mysql_by_keyword_modify_search_key',
    'tooltip_id' => 'stt_bf0ef9b2',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'fields' => 
      array (
        'type' => 'string',
        'description' => 'Searching fields (\'titleonly\', \'msgonly\', \'firstpost\', \'all\')',
      ),
      'terms' => 
      array (
        'type' => 'string',
        'description' => 'Searching terms (\'all\', \'any\')',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_mysql_keywords_main_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 569,
    ),
    'description' => 'Allow changing the query used to search for posts using fulltext_mysql',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used to search for posts',
      1 => 'using fulltext_mysql',
    ),
    'name' => 'core.search_mysql_keywords_main_query_before',
    'tooltip_id' => 'stt_e7811c90',
    'vars' => 
    array (
      'search_query' => 
      array (
        'type' => 'string',
        'description' => 'The parsed keywords used for this search',
      ),
      'result_count' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query.',
      ),
      'join_topic' => 
      array (
        'type' => 'bool',
        'description' => 'Weather or not TOPICS_TABLE should be CROSS JOIN\'ED',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'An extra username to search on (!empty(author_ary) must be true, to be relevant)',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'Extra tables to include in the SQL query.',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'SQL conditions to join all the tables used together.',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sql_match' => 
      array (
        'type' => 'string',
        'description' => 'Which columns to do the search on.',
      ),
      'sql_match_where' => 
      array (
        'type' => 'string',
        'description' => 'Extra conditions to use to properly filter the matching process',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_mysql_by_author_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 720,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_mysql_by_author_modify_search_key',
    'tooltip_id' => 'stt_b78b1fc9',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'firstpost_only' => 
      array (
        'type' => 'boolean',
        'description' => 'Flag indicating if only topic starting posts are considered',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'The username to search on',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_mysql_author_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 827,
    ),
    'description' => 'Allow changing the query used to search for posts by author in fulltext_mysql',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used to search for posts',
      1 => 'by author in fulltext_mysql',
    ),
    'name' => 'core.search_mysql_author_query_before',
    'tooltip_id' => 'stt_76c4dfcb',
    'vars' => 
    array (
      'result_count' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query.',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'CROSS JOIN\'ed table to allow doing the sort chosen',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'Condition to define how to join the CROSS JOIN\'ed table specifyed in sql_sort_table',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Either "posts" or "topics" specifying the type of search being made',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'An extra username to search on',
      ),
      'sql_author' => 
      array (
        'type' => 'string',
        'description' => 'SQL WHERE condition for the post author ids',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sql_topic_id' => 
      array (
        'type' => 'string',
        'description' => 'SQL of topic_id',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'sort_days' => 
      array (
        'type' => 'string',
        'description' => 'Time, in days, that the oldest post showing can have',
      ),
      'sql_time' => 
      array (
        'type' => 'string',
        'description' => 'The SQL to search on the time specifyed by sort_days',
      ),
      'firstpost_only' => 
      array (
        'type' => 'bool',
        'description' => 'Wether or not to search only on the first post of the topics',
      ),
      'sql_firstpost' => 
      array (
        'type' => 'string',
        'description' => 'The SQL with the conditions to join the tables when using firstpost_only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Forum ids that must not be searched on',
      ),
      'sql_fora' => 
      array (
        'type' => 'array',
        'description' => 'SQL query for ex_fid_ary',
      ),
      'm_approve_fid_sql' => 
      array (
        'type' => 'string',
        'description' => 'WHERE clause condition on post_visibility restrictions',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_mysql_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 957,
    ),
    'description' => 'Event to modify method arguments and words before the MySQL search index is updated',
    'description_wrapped' => 
    array (
      0 => 'Event to modify method arguments and words before',
      1 => 'the MySQL search index is updated',
    ),
    'name' => 'core.search_mysql_index_before',
    'tooltip_id' => 'stt_2408513b',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Contains the post mode: edit, post, reply, quote',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post which is modified/created',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post content',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post subject',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Post author\'s user id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the forum in which the post is located',
      ),
      'words' => 
      array (
        'type' => 'array',
        'description' => 'List of words added to the index',
      ),
      'split_text' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the message',
      ),
      'split_title' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the title',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_mysql_create_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 1049,
    ),
    'description' => 'Event to modify SQL queries before the MySQL search index is created',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL queries before the MySQL',
      1 => 'search index is created',
    ),
    'name' => 'core.search_mysql_create_index_before',
    'tooltip_id' => 'stt_5b31bc36',
    'vars' => 
    array (
      'sql_queries' => 
      array (
        'type' => 'array',
        'description' => 'Array with queries for creating the search index',
      ),
      'stats' => 
      array (
        'type' => 'array',
        'description' => 'Array with statistics of the current index (read only)',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_mysql_delete_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_mysql.php' => 1117,
    ),
    'description' => 'Event to modify SQL queries before the MySQL search index is deleted',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL queries before the MySQL',
      1 => 'search index is deleted',
    ),
    'name' => 'core.search_mysql_delete_index_before',
    'tooltip_id' => 'stt_6b05a95b',
    'vars' => 
    array (
      'sql_queries' => 
      array (
        'type' => 'array',
        'description' => 'Array with queries for deleting the search index',
      ),
      'stats' => 
      array (
        'type' => 'array',
        'description' => 'Array with statistics of the current index (read only)',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_native_by_keyword_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 623,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_native_by_keyword_modify_search_key',
    'tooltip_id' => 'stt_0700b0b6',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'must_contain_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids of posts containing words that are to be included',
      ),
      'must_not_contain_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids of posts containing words that should not be included',
      ),
      'must_exclude_one_ids' => 
      array (
        'type' => 'array',
        'description' => 'Array with post ids of posts containing at least one word that needs to be excluded',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'fields' => 
      array (
        'type' => 'string',
        'description' => 'Searching fields (\'titleonly\', \'msgonly\', \'firstpost\', \'all\')',
      ),
      'terms' => 
      array (
        'type' => 'string',
        'description' => 'Searching terms (\'all\', \'any\')',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_native_keywords_count_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 864,
    ),
    'description' => 'Allow changing the query used for counting for posts using fulltext_native',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used for counting for',
      1 => 'posts using fulltext_native',
    ),
    'name' => 'core.search_native_keywords_count_query_before',
    'tooltip_id' => 'stt_54bc85e0',
    'vars' => 
    array (
      'search_query' => 
      array (
        'type' => 'string',
        'description' => 'The parsed keywords used for this search',
      ),
      'must_not_contain_ids' => 
      array (
        'type' => 'array',
        'description' => 'Ids that cannot be taken into account for the results',
      ),
      'must_exclude_one_ids' => 
      array (
        'type' => 'array',
        'description' => 'Ids that cannot be on the results',
      ),
      'must_contain_ids' => 
      array (
        'type' => 'array',
        'description' => 'Ids that must be on the results',
      ),
      'total_results' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The data on how to search in the DB at this point',
      ),
      'left_join_topics' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not TOPICS_TABLE should be CROSS JOIN\'ED',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'An extra username to search on (!empty(author_ary) must be true, to be relevant)',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'Extra tables to include in the SQL query.',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'SQL conditions to join all the tables used together.',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sql_where' => 
      array (
        'type' => 'string',
        'description' => 'An array of the current WHERE clause conditions',
      ),
      'sql_match' => 
      array (
        'type' => 'string',
        'description' => 'Which columns to do the search on',
      ),
      'sql_match_where' => 
      array (
        'type' => 'string',
        'description' => 'Extra conditions to use to properly filter the matching process',
      ),
      'group_by' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the SQL query requires a GROUP BY for the elements in the SELECT clause',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_native_by_author_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 1093,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_native_by_author_modify_search_key',
    'tooltip_id' => 'stt_046714fe',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'firstpost_only' => 
      array (
        'type' => 'boolean',
        'description' => 'Flag indicating if only topic starting posts are considered',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'The username to search on',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_native_author_count_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 1192,
    ),
    'description' => 'Allow changing the query used to search for posts by author in fulltext_native',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used to search for posts',
      1 => 'by author in fulltext_native',
    ),
    'name' => 'core.search_native_author_count_query_before',
    'tooltip_id' => 'stt_79c32880',
    'vars' => 
    array (
      'total_results' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query.',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'The type of search being made',
      ),
      'select' => 
      array (
        'type' => 'string',
        'description' => 'SQL SELECT clause for what to get',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'CROSS JOIN\'ed table to allow doing the sort chosen',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'Condition to define how to join the CROSS JOIN\'ed table specifyed in sql_sort_table',
      ),
      'sql_author' => 
      array (
        'type' => 'array',
        'description' => 'SQL WHERE condition for the post author ids',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'sort_days' => 
      array (
        'type' => 'string',
        'description' => 'Time, in days, that the oldest post showing can have',
      ),
      'sql_time' => 
      array (
        'type' => 'string',
        'description' => 'The SQL to search on the time specifyed by sort_days',
      ),
      'firstpost_only' => 
      array (
        'type' => 'bool',
        'description' => 'Wether or not to search only on the first post of the topics',
      ),
      'sql_firstpost' => 
      array (
        'type' => 'string',
        'description' => 'The SQL used in the WHERE claused to filter by firstpost.',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Forum ids that must not be searched on',
      ),
      'sql_fora' => 
      array (
        'type' => 'array',
        'description' => 'SQL query for ex_fid_ary',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_native_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 1490,
    ),
    'description' => 'Event to modify method arguments and words before the native search index is updated',
    'description_wrapped' => 
    array (
      0 => 'Event to modify method arguments and words before',
      1 => 'the native search index is updated',
    ),
    'name' => 'core.search_native_index_before',
    'tooltip_id' => 'stt_a44a1d15',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Contains the post mode: edit, post, reply, quote',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post which is modified/created',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post content',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post subject',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Post author\'s user id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the forum in which the post is located',
      ),
      'words' => 
      array (
        'type' => 'array',
        'description' => 'Grouped lists of words added to or remove from the index',
      ),
      'split_text' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the message',
      ),
      'split_title' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the title',
      ),
      'cur_words' => 
      array (
        'type' => 'array',
        'description' => 'Array of words currently in the index for comparing to new words',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_native_delete_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_native.php' => 1754,
    ),
    'description' => 'Event to modify SQL queries before the native search index is deleted',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL queries before the native',
      1 => 'search index is deleted',
    ),
    'name' => 'core.search_native_delete_index_before',
    'tooltip_id' => 'stt_43779c9f',
    'vars' => 
    array (
      'sql_queries' => 
      array (
        'type' => 'array',
        'description' => 'Array with queries for deleting the search index',
      ),
      'stats' => 
      array (
        'type' => 'array',
        'description' => 'Array with statistics of the current index (read only)',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_postgres_by_keyword_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 385,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_postgres_by_keyword_modify_search_key',
    'tooltip_id' => 'stt_c2a3a6e5',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'fields' => 
      array (
        'type' => 'string',
        'description' => 'Searching fields (\'titleonly\', \'msgonly\', \'firstpost\', \'all\')',
      ),
      'terms' => 
      array (
        'type' => 'string',
        'description' => 'Searching terms (\'all\', \'any\')',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_postgres_keywords_main_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 499,
    ),
    'description' => 'Allow changing the query used to search for posts using fulltext_postgres',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used to search for posts',
      1 => 'using fulltext_postgres',
    ),
    'name' => 'core.search_postgres_keywords_main_query_before',
    'tooltip_id' => 'stt_2c2bccfe',
    'vars' => 
    array (
      'tsearch_query' => 
      array (
        'type' => 'string',
        'description' => 'The parsed keywords used for this search',
      ),
      'result_count' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query.',
      ),
      'join_topic' => 
      array (
        'type' => 'bool',
        'description' => 'Weather or not TOPICS_TABLE should be CROSS JOIN\'ED',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'An extra username to search on (!empty(author_ary) must be true, to be relevant)',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'Extra tables to include in the SQL query.',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'SQL conditions to join all the tables used together.',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sql_match' => 
      array (
        'type' => 'string',
        'description' => 'Which columns to do the search on.',
      ),
      'sql_match_where' => 
      array (
        'type' => 'string',
        'description' => 'Extra conditions to use to properly filter the matching process',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_postgres_by_author_modify_search_key' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 661,
    ),
    'description' => 'Allow changing the search_key for cached results',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the search_key for cached results',
    ),
    'name' => 'core.search_postgres_by_author_modify_search_key',
    'tooltip_id' => 'stt_1d4af946',
    'vars' => 
    array (
      'search_key_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with search parameters to generate the search_key',
      ),
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'firstpost_only' => 
      array (
        'type' => 'boolean',
        'description' => 'Flag indicating if only topic starting posts are considered',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'The username to search on',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_postgres_author_count_query_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 764,
    ),
    'description' => 'Allow changing the query used to search for posts by author in fulltext_postgres',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the query used to search for posts',
      1 => 'by author in fulltext_postgres',
    ),
    'name' => 'core.search_postgres_author_count_query_before',
    'tooltip_id' => 'stt_a670de2b',
    'vars' => 
    array (
      'result_count' => 
      array (
        'type' => 'int',
        'description' => 'The previous result count for the format of the query.',
      ),
      'sql_sort_table' => 
      array (
        'type' => 'string',
        'description' => 'CROSS JOIN\'ed table to allow doing the sort chosen',
      ),
      'sql_sort_join' => 
      array (
        'type' => 'string',
        'description' => 'Condition to define how to join the CROSS JOIN\'ed table specifyed in sql_sort_table',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'An extra username to search on',
      ),
      'sql_author' => 
      array (
        'type' => 'string',
        'description' => 'SQL WHERE condition for the post author ids',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'sql_topic_id' => 
      array (
        'type' => 'string',
        'description' => 'SQL of topic_id',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'string',
        'description' => 'The possible predefined sort types',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => '"a" for ASC or "d" dor DESC for the sort order used',
      ),
      'sql_sort' => 
      array (
        'type' => 'string',
        'description' => 'The result SQL when processing sort_by_sql + sort_key + sort_dir',
      ),
      'sort_days' => 
      array (
        'type' => 'string',
        'description' => 'Time, in days, that the oldest post showing can have',
      ),
      'sql_time' => 
      array (
        'type' => 'string',
        'description' => 'The SQL to search on the time specifyed by sort_days',
      ),
      'firstpost_only' => 
      array (
        'type' => 'bool',
        'description' => 'Wether or not to search only on the first post of the topics',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Forum ids that must not be searched on',
      ),
      'sql_fora' => 
      array (
        'type' => 'array',
        'description' => 'SQL query for ex_fid_ary',
      ),
      'm_approve_fid_sql' => 
      array (
        'type' => 'string',
        'description' => 'WHERE clause condition on post_visibility restrictions',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'How many posts to skip in the search results (used for pagination)',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.search_postgres_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 919,
    ),
    'description' => 'Event to modify method arguments and words before the PostgreSQL search index is updated',
    'description_wrapped' => 
    array (
      0 => 'Event to modify method arguments and words before',
      1 => 'the PostgreSQL search index is updated',
    ),
    'name' => 'core.search_postgres_index_before',
    'tooltip_id' => 'stt_b41300c1',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Contains the post mode: edit, post, reply, quote',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post which is modified/created',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post content',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post subject',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Post author\'s user id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the forum in which the post is located',
      ),
      'words' => 
      array (
        'type' => 'array',
        'description' => 'Array of words added to the index',
      ),
      'split_text' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the message',
      ),
      'split_title' => 
      array (
        'type' => 'array',
        'description' => 'Array of words from the title',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_postgres_create_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 998,
    ),
    'description' => 'Event to modify SQL queries before the Postgres search index is created',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL queries before the Postgres',
      1 => 'search index is created',
    ),
    'name' => 'core.search_postgres_create_index_before',
    'tooltip_id' => 'stt_f69d45c4',
    'vars' => 
    array (
      'sql_queries' => 
      array (
        'type' => 'array',
        'description' => 'Array with queries for creating the search index',
      ),
      'stats' => 
      array (
        'type' => 'array',
        'description' => 'Array with statistics of the current index (read only)',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_postgres_delete_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_postgres.php' => 1059,
    ),
    'description' => 'Event to modify SQL queries before the Postgres search index is created',
    'description_wrapped' => 
    array (
      0 => 'Event to modify SQL queries before the Postgres',
      1 => 'search index is created',
    ),
    'name' => 'core.search_postgres_delete_index_before',
    'tooltip_id' => 'stt_c6a950a9',
    'vars' => 
    array (
      'sql_queries' => 
      array (
        'type' => 'array',
        'description' => 'Array with queries for deleting the search index',
      ),
      'stats' => 
      array (
        'type' => 'array',
        'description' => 'Array with statistics of the current index (read only)',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.search_sphinx_modify_config_data' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_sphinx.php' => 380,
    ),
    'description' => 'Allow adding/changing the Sphinx configuration data',
    'description_wrapped' => 
    array (
      0 => 'Allow adding/changing the Sphinx configuration',
      1 => 'data',
    ),
    'name' => 'core.search_sphinx_modify_config_data',
    'tooltip_id' => 'stt_5f431ee7',
    'vars' => 
    array (
      'config_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the Sphinx configuration data',
      ),
      'non_unique' => 
      array (
        'type' => 'array',
        'description' => 'Array with the Sphinx non-unique variables to delete',
      ),
      'delete' => 
      array (
        'type' => 'array',
        'description' => 'Array with the Sphinx variables to delete',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_sphinx_keywords_modify_options' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_sphinx.php' => 645,
    ),
    'description' => 'Allow modifying the Sphinx search options',
    'description_wrapped' => 
    array (
      0 => 'Allow modifying the Sphinx search options',
    ),
    'name' => 'core.search_sphinx_keywords_modify_options',
    'tooltip_id' => 'stt_be84d464',
    'vars' => 
    array (
      'type' => 
      array (
        'type' => 'string',
        'description' => 'Searching type (\'posts\', \'topics\')',
      ),
      'fields' => 
      array (
        'type' => 'string',
        'description' => 'Searching fields (\'titleonly\', \'msgonly\', \'firstpost\', \'all\')',
      ),
      'terms' => 
      array (
        'type' => 'string',
        'description' => 'Searching terms (\'all\', \'any\')',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Time, in days, of the oldest possible post to list',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort type used from the possible sort types',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Limit the search to this topic_id only',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Which forums not to search on',
      ),
      'post_visibility' => 
      array (
        'type' => 'string',
        'description' => 'Post visibility data',
      ),
      'author_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of user_id containing the users to filter the results to',
      ),
      'author_name' => 
      array (
        'type' => 'string',
        'description' => 'The username to search on',
      ),
      'sphinx' => 
      array (
        'type' => 'object',
        'description' => 'The Sphinx searchd client object',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_sphinx_index_before' => 
  array (
    'locations' => 
    array (
      'phpbb/search/fulltext_sphinx.php' => 843,
    ),
    'description' => 'Event to modify method arguments before the Sphinx search index is updated',
    'description_wrapped' => 
    array (
      0 => 'Event to modify method arguments before the Sphinx',
      1 => 'search index is updated',
    ),
    'name' => 'core.search_sphinx_index_before',
    'tooltip_id' => 'stt_9938b20a',
    'vars' => 
    array (
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Contains the post mode: edit, post, reply, quote',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post which is modified/created',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post content',
      ),
      'subject' => 
      array (
        'type' => 'string',
        'description' => 'New or updated post subject',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Post author\'s user id',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the forum in which the post is located',
      ),
    ),
    'since' => '3.2.3-RC1',
  ),
  'core.session_ip_after' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 303,
    ),
    'description' => 'Event to alter user IP address',
    'description_wrapped' => 
    array (
      0 => 'Event to alter user IP address',
    ),
    'name' => 'core.session_ip_after',
    'tooltip_id' => 'stt_f923f7f0',
    'vars' => 
    array (
      'ip' => 
      array (
        'type' => 'string',
        'description' => 'REMOTE_ADDR',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.session_create_after' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 851,
    ),
    'description' => 'Event to send new session data to extension Read-only event',
    'description_wrapped' => 
    array (
      0 => 'Event to send new session data to extension',
      1 => 'Read-only event',
    ),
    'name' => 'core.session_create_after',
    'tooltip_id' => 'stt_36495d72',
    'vars' => 
    array (
      'session_data' => 
      array (
        'type' => 'array',
        'description' => 'Associative array of session keys to be updated',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.session_kill_after' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 887,
    ),
    'description' => 'Event to send session kill information to extension Read-only event',
    'description_wrapped' => 
    array (
      0 => 'Event to send session kill information to',
      1 => 'extension Read-only event',
    ),
    'name' => 'core.session_kill_after',
    'tooltip_id' => 'stt_23736eae',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'user_id of the session user.',
      ),
      'session_id' => 
      array (
        'type' => 'string',
        'description' => 'current user\'s session_id',
      ),
      'new_session' => 
      array (
        'type' => 'bool',
        'description' => 'should we create new session for user',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.session_gc_after' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 1058,
    ),
    'description' => 'Event to trigger extension on session_gc',
    'description_wrapped' => 
    array (
      0 => 'Event to trigger extension on session_gc',
    ),
    'name' => 'core.session_gc_after',
    'tooltip_id' => 'stt_ba9f6391',
    'since' => '3.1.6-RC1',
  ),
  'core.set_cookie' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 1102,
    ),
    'description' => 'Event to modify or disable setting cookies',
    'description_wrapped' => 
    array (
      0 => 'Event to modify or disable setting cookies',
    ),
    'name' => 'core.set_cookie',
    'tooltip_id' => 'stt_2d458625',
    'vars' => 
    array (
      'disable_cookie' => 
      array (
        'type' => 'bool',
        'description' => 'Set to true to disable setting this cookie',
      ),
      'name' => 
      array (
        'type' => 'string',
        'description' => 'Name of the cookie',
      ),
      'cookiedata' => 
      array (
        'type' => 'string',
        'description' => 'The data to hold within the cookie',
      ),
      'cookietime' => 
      array (
        'type' => 'int',
        'description' => 'The expiration time as UNIX timestamp',
      ),
      'httponly' => 
      array (
        'type' => 'bool',
        'description' => 'Use HttpOnly?',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.session_set_custom_ban' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 1256,
    ),
    'description' => 'Event to set custom ban type',
    'description_wrapped' => 
    array (
      0 => 'Event to set custom ban type',
    ),
    'name' => 'core.session_set_custom_ban',
    'tooltip_id' => 'stt_e6435a4b',
    'vars' => 
    array (
      'return' => 
      array (
        'type' => 'bool',
        'description' => 'If $return is false this routine does not return on finding a banned user, it outputs a relevant message and stops execution',
      ),
      'banned' => 
      array (
        'type' => 'bool',
        'description' => 'Check if user already banned',
      ),
      'ban_row' => 
      array (
        'type' => 'array|false',
        'description' => 'Ban data',
      ),
      'ban_triggered_by' => 
      array (
        'type' => 'string',
        'description' => 'Method that caused ban, can be your custom method',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.set_login_key' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 1617,
    ),
    'description' => 'Event to adjust autologin keys process',
    'description_wrapped' => 
    array (
      0 => 'Event to adjust autologin keys process',
    ),
    'name' => 'core.set_login_key',
    'tooltip_id' => 'stt_53514135',
    'vars' => 
    array (
      'key' => 
      array (
        'type' => 'string|false',
        'description' => 'Current autologin key if exists, false otherwise',
      ),
      'key_id' => 
      array (
        'type' => 'string',
        'description' => 'New autologin key',
      ),
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'SQL query to update/insert autologin key',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'Aray with autologin key data',
      ),
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'Current user\'s ID',
      ),
      'user_ip' => 
      array (
        'type' => 'string',
        'description' => 'Current user\'s IP address',
      ),
    ),
    'since' => '3.3.2-RC1',
  ),
  'core.update_session_after' => 
  array (
    'locations' => 
    array (
      'phpbb/session.php' => 1753,
    ),
    'description' => 'Event to send update session information to extension Read-only event',
    'description_wrapped' => 
    array (
      0 => 'Event to send update session information to',
      1 => 'extension Read-only event',
    ),
    'name' => 'core.update_session_after',
    'tooltip_id' => 'stt_98302fdc',
    'vars' => 
    array (
      'session_data' => 
      array (
        'type' => 'array',
        'description' => 'Associative array of session keys to be updated',
      ),
      'session_id' => 
      array (
        'type' => 'string',
        'description' => 'current user\'s session_id',
      ),
    ),
    'since' => '3.1.6-RC1',
  ),
  'core.twig_environment_render_template_before' => 
  array (
    'locations' => 
    array (
      'phpbb/template/twig/environment.php' => 220,
    ),
    'description' => 'Allow changing the template output stream before rendering',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the template output stream before',
      1 => 'rendering',
    ),
    'name' => 'core.twig_environment_render_template_before',
    'tooltip_id' => 'stt_defd79c7',
    'vars' => 
    array (
      'context' => 
      array (
        'type' => 'array',
        'description' => 'Array with template variables',
      ),
      'name' => 
      array (
        'type' => 'string',
        'description' => 'The template name',
      ),
    ),
    'since' => '3.2.1-RC1',
  ),
  'core.twig_environment_render_template_after' => 
  array (
    'locations' => 
    array (
      'phpbb/template/twig/environment.php' => 237,
    ),
    'description' => 'Allow changing the template output stream after rendering',
    'description_wrapped' => 
    array (
      0 => 'Allow changing the template output stream after',
      1 => 'rendering',
    ),
    'name' => 'core.twig_environment_render_template_after',
    'tooltip_id' => 'stt_f9d53804',
    'vars' => 
    array (
      'context' => 
      array (
        'type' => 'array',
        'description' => 'Array with template variables',
      ),
      'name' => 
      array (
        'type' => 'string',
        'description' => 'The template name',
      ),
      'output' => 
      array (
        'type' => 'string',
        'description' => 'Rendered template output stream',
      ),
    ),
    'since' => '3.2.1-RC1',
  ),
  'core.text_formatter_s9e_configure_before' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/factory.php' => 214,
    ),
    'description' => 'Modify the s9e\\TextFormatter configurator before the default settings are set',
    'description_wrapped' => 
    array (
      0 => 'Modify the s9e\\TextFormatter configurator before',
      1 => 'the default settings are set',
    ),
    'name' => 'core.text_formatter_s9e_configure_before',
    'tooltip_id' => 'stt_462b48ab',
    'vars' => 
    array (
      'configurator' => 
      array (
        'type' => 'Configurator',
        'description' => 'Configurator instance',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_configure_after' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/factory.php' => 375,
    ),
    'description' => 'Modify the s9e\\TextFormatter configurator after the default settings are set',
    'description_wrapped' => 
    array (
      0 => 'Modify the s9e\\TextFormatter configurator after',
      1 => 'the default settings are set',
    ),
    'name' => 'core.text_formatter_s9e_configure_after',
    'tooltip_id' => 'stt_fdc4e846',
    'vars' => 
    array (
      'configurator' => 
      array (
        'type' => 'Configurator',
        'description' => 'Configurator instance',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_configure_finalize' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/factory.php' => 407,
    ),
    'description' => 'Access the objects returned by finalize() before they are saved to cache',
    'description_wrapped' => 
    array (
      0 => 'Access the objects returned by finalize() before',
      1 => 'they are saved to cache',
    ),
    'name' => 'core.text_formatter_s9e_configure_finalize',
    'tooltip_id' => 'stt_35707db5',
    'vars' => 
    array (
      'objects' => 
      array (
        'type' => 'array',
        'description' => 'Array containing a "parser" object, a "renderer" object and optionally a "js" string',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.text_formatter_s9e_parser_setup' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/parser.php' => 70,
    ),
    'description' => 'Configure the parser service',
    'description_wrapped' => 
    array (
      0 => 'Configure the parser service',
    ),
    'name' => 'core.text_formatter_s9e_parser_setup',
    'tooltip_id' => 'stt_b51f4ff1',
    'vars' => 
    array (
      'parser' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\parser',
        'description' => 'This parser service',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_parse_before' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/parser.php' => 89,
    ),
    'description' => 'Modify a text before it is parsed',
    'description_wrapped' => 
    array (
      0 => 'Modify a text before it is parsed',
    ),
    'name' => 'core.text_formatter_s9e_parse_before',
    'tooltip_id' => 'stt_6c6bf0af',
    'vars' => 
    array (
      'parser' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\parser',
        'description' => 'This parser service',
      ),
      'text' => 
      array (
        'type' => 'string',
        'description' => 'The original text',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_parse_after' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/parser.php' => 102,
    ),
    'description' => 'Modify a parsed text in its XML form',
    'description_wrapped' => 
    array (
      0 => 'Modify a parsed text in its XML form',
    ),
    'name' => 'core.text_formatter_s9e_parse_after',
    'tooltip_id' => 'stt_d25778bd',
    'vars' => 
    array (
      'parser' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\parser',
        'description' => 'This parser service',
      ),
      'xml' => 
      array (
        'type' => 'string',
        'description' => 'The parsed text, in XML',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_get_errors' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/parser.php' => 259,
    ),
    'description' => 'Modify error messages generated by the s9e\\TextFormatter\'s logger',
    'description_wrapped' => 
    array (
      0 => 'Modify error messages generated by the',
      1 => 's9e\\TextFormatter\'s logger',
    ),
    'name' => 'core.text_formatter_s9e_get_errors',
    'tooltip_id' => 'stt_d5d99b1c',
    'vars' => 
    array (
      'parser' => 
      array (
        'type' => 'parser',
        'description' => 'This parser service',
      ),
      'entries' => 
      array (
        'type' => 'array',
        'description' => 's9e\\TextFormatter\'s logger entries',
      ),
      'errors' => 
      array (
        'type' => 'array',
        'description' => 'Error arrays with language key and optional arguments',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.text_formatter_s9e_renderer_setup' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/renderer.php' => 117,
    ),
    'description' => 'Configure the renderer service',
    'description_wrapped' => 
    array (
      0 => 'Configure the renderer service',
    ),
    'name' => 'core.text_formatter_s9e_renderer_setup',
    'tooltip_id' => 'stt_f5f34b05',
    'vars' => 
    array (
      'renderer' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\renderer',
        'description' => 'This renderer service',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_render_before' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/renderer.php' => 248,
    ),
    'description' => 'Modify a parsed text before it is rendered',
    'description_wrapped' => 
    array (
      0 => 'Modify a parsed text before it is rendered',
    ),
    'name' => 'core.text_formatter_s9e_render_before',
    'tooltip_id' => 'stt_360cef38',
    'vars' => 
    array (
      'renderer' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\renderer',
        'description' => 'This renderer service',
      ),
      'xml' => 
      array (
        'type' => 'string',
        'description' => 'The parsed text, in its XML form',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.text_formatter_s9e_render_after' => 
  array (
    'locations' => 
    array (
      'phpbb/textformatter/s9e/renderer.php' => 265,
    ),
    'description' => 'Modify a rendered text',
    'description_wrapped' => 
    array (
      0 => 'Modify a rendered text',
    ),
    'name' => 'core.text_formatter_s9e_render_after',
    'tooltip_id' => 'stt_b097f443',
    'vars' => 
    array (
      'html' => 
      array (
        'type' => 'string',
        'description' => 'The rendered text\'s HTML',
      ),
      'renderer' => 
      array (
        'type' => '\\phpbb\\textformatter\\s9e\\renderer',
        'description' => 'This renderer service',
      ),
    ),
    'since' => '3.2.0-a1',
  ),
  'core.ucp_delete_cookies' => 
  array (
    'locations' => 
    array (
      'phpbb/ucp/controller/delete_cookies.php' => 100,
    ),
    'description' => 'Event to save custom cookies from deletion',
    'description_wrapped' => 
    array (
      0 => 'Event to save custom cookies from deletion',
    ),
    'name' => 'core.ucp_delete_cookies',
    'tooltip_id' => 'stt_22dab173',
    'vars' => 
    array (
      'cookie_name' => 
      array (
        'type' => 'string',
        'description' => 'Cookie name to checking',
      ),
      'retain_cookie' => 
      array (
        'type' => 'bool',
        'description' => 'Do we retain our cookie or not, true if retain',
      ),
    ),
    'since' => '3.1.3-RC1',
    'changes' => 
    array (
      '3.3.13-RC1' => 'Moved to new delete_cookies controller',
    ),
  ),
  'core.ucp_remind_modify_select_sql' => 
  array (
    'locations' => 
    array (
      'phpbb/ucp/controller/reset_password.php' => 195,
    ),
    'description' => 'Change SQL query for fetching user data',
    'description_wrapped' => 
    array (
      0 => 'Change SQL query for fetching user data',
    ),
    'name' => 'core.ucp_remind_modify_select_sql',
    'tooltip_id' => 'stt_5d8146e8',
    'vars' => 
    array (
      'email' => 
      array (
        'type' => 'string',
        'description' => 'User\'s email from the form',
      ),
      'username' => 
      array (
        'type' => 'string',
        'description' => 'User\'s username from the form',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'Fully assembled SQL query with keys SELECT, FROM, WHERE',
      ),
    ),
    'since' => '3.1.11-RC1',
    'changes' => 
    array (
      '3.3.0-b1' => 'Moved to reset password controller',
    ),
  ),
  'core.ucp_reset_password_modify_select_sql' => 
  array (
    'locations' => 
    array (
      'phpbb/ucp/controller/reset_password.php' => 336,
    ),
    'description' => 'Change SQL query for fetching user data',
    'description_wrapped' => 
    array (
      0 => 'Change SQL query for fetching user data',
    ),
    'name' => 'core.ucp_reset_password_modify_select_sql',
    'tooltip_id' => 'stt_23f80699',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID from the form',
      ),
      'reset_token' => 
      array (
        'type' => 'string',
        'description' => 'Reset token',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'Fully assembled SQL query with keys SELECT, FROM, WHERE',
      ),
    ),
    'since' => '3.3.0-b1',
  ),
  'core.user_setup' => 
  array (
    'locations' => 
    array (
      'phpbb/user.php' => 232,
    ),
    'description' => 'Event to load language files and modify user data on every page',
    'description_wrapped' => 
    array (
      0 => 'Event to load language files and modify user data',
      1 => 'on every page',
    ),
    'name' => 'core.user_setup',
    'tooltip_id' => 'stt_c43fa4ba',
    'vars' => 
    array (
      'user_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with user\'s data row',
      ),
      'user_lang_name' => 
      array (
        'type' => 'string',
        'description' => 'Basename of the user\'s langauge',
      ),
      'user_date_format' => 
      array (
        'type' => 'string',
        'description' => 'User\'s date/time format',
      ),
      'user_timezone' => 
      array (
        'type' => 'string',
        'description' => 'User\'s timezone, should be one of',
      ),
      'lang_set' => 
      array (
        'type' => 'mixed',
        'description' => 'String or array of language files',
      ),
      'lang_set_ext' => 
      array (
        'type' => 'array',
        'description' => 'Array containing entries of format',
      ),
      'style_id' => 
      array (
        'type' => 'mixed',
        'description' => 'Style we are going to display',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.user_setup_after' => 
  array (
    'locations' => 
    array (
      'phpbb/user.php' => 357,
    ),
    'description' => 'Execute code at the end of user setup',
    'description_wrapped' => 
    array (
      0 => 'Execute code at the end of user setup',
    ),
    'name' => 'core.user_setup_after',
    'tooltip_id' => 'stt_03647df3',
    'since' => '3.1.6-RC1',
  ),
  'core.user_format_date_override' => 
  array (
    'locations' => 
    array (
      'phpbb/user.php' => 635,
    ),
    'description' => 'Execute code and/or override format_date()',
    'description_wrapped' => 
    array (
      0 => 'Execute code and/or override format_date()',
    ),
    'name' => 'core.user_format_date_override',
    'tooltip_id' => 'stt_a43aa08d',
    'vars' => 
    array (
      'utc' => 
      array (
        'type' => 'DateTimeZone',
        'description' => 'Is DateTimeZone in UTC',
      ),
      'function_arguments' => 
      array (
        'type' => 'array',
        'description' => 'is array comprising a function\'s argument list',
      ),
      'format_date_override' => 
      array (
        'type' => 'string',
        'description' => 'Shall we return custom format (string) or not (false)',
      ),
    ),
    'since' => '3.2.1-RC1',
  ),
  'core.modify_posting_parameters' => 
  array (
    'locations' => 
    array (
      'posting.php' => 176,
    ),
    'description' => 'This event allows you to alter the above parameters, such as submit and mode',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to alter the above',
      1 => 'parameters, such as submit and mode',
    ),
    'name' => 'core.modify_posting_parameters',
    'tooltip_id' => 'stt_62db55e2',
    'vars' => 
    array (
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'draft_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the draft',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the post is being previewed',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being saved',
      ),
      'load' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being loaded',
      ),
      'cancel' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to cancel the form (returns to',
      ),
      'refresh' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to retain previously submitted data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form has been submitted',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings; a non-empty array aborts',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.2-RC1' => 'Removed \'delete\' var as it does not exist',
      '3.2.4-RC1' => 'Remove unused \'lastclick\' var',
    ),
  ),
  'core.posting_modify_row_data' => 
  array (
    'locations' => 
    array (
      'posting.php' => 279,
    ),
    'description' => 'This event allows you to bypass reply/quote test of an unapproved post.',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to bypass reply/quote test',
      1 => 'of an unapproved post.',
    ),
    'name' => 'core.posting_modify_row_data',
    'tooltip_id' => 'stt_4df6ff8a',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'All post data from database',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form has been submitted',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.modify_posting_auth' => 
  array (
    'locations' => 
    array (
      'posting.php' => 432,
    ),
    'description' => 'This event allows you to do extra auth checks and verify if the user has the required permissions',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to do extra auth checks and',
      1 => 'verify if the user has the required permissions',
    ),
    'name' => 'core.modify_posting_auth',
    'tooltip_id' => 'stt_ec130e6c',
    'vars' => 
    array (
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'draft_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the draft',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the post is being previewed',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being saved',
      ),
      'load' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being loaded',
      ),
      'refresh' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to retain previously submitted data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form has been submitted',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings; a non-empty array aborts',
      ),
      'is_authed' => 
      array (
        'type' => 'bool',
        'description' => 'Does the user have the required permissions?',
      ),
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'All post data from database',
      ),
    ),
    'since' => '3.1.3-RC1',
    'changes' => 
    array (
      '3.1.10-RC1' => 'Added post_data',
      '3.2.4-RC1' => 'Remove unused \'lastclick\' var',
    ),
  ),
  'core.posting_modify_cannot_edit_conditions' => 
  array (
    'locations' => 
    array (
      'posting.php' => 502,
    ),
    'description' => 'This event allows you to modify the conditions for the "cannot edit post" checks',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the conditions for',
      1 => 'the "cannot edit post" checks',
    ),
    'name' => 'core.posting_modify_cannot_edit_conditions',
    'tooltip_id' => 'stt_827267ac',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'force_edit_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to edit the post (all permissions and conditions are ignored)',
      ),
      's_cannot_edit' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because it\'s not his',
      ),
      's_cannot_edit_locked' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because it\'s locked',
      ),
      's_cannot_edit_time' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because edit_time has passed',
      ),
    ),
    'since' => '3.1.0-b4',
  ),
  'core.posting_modify_post_data' => 
  array (
    'locations' => 
    array (
      'posting.php' => 617,
    ),
    'description' => 'This event allows you to modify the post data before parsing',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the post data',
      1 => 'before parsing',
    ),
    'name' => 'core.posting_modify_post_data',
    'tooltip_id' => 'stt_9e3225c8',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form has been submitted',
      ),
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.posting_modify_default_variables' => 
  array (
    'locations' => 
    array (
      'posting.php' => 663,
    ),
    'description' => 'This event allows you to modify the default variables for post_data, and unset them in post_data if needed',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the default',
      1 => 'variables for post_data, and unset them in',
      2 => 'post_data if needed',
    ),
    'name' => 'core.posting_modify_default_variables',
    'tooltip_id' => 'stt_b195ea87',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'uninit' => 
      array (
        'type' => 'array',
        'description' => 'Array with default vars to put into post_data, if they aren\'t there',
      ),
    ),
    'since' => '3.2.5-RC1',
  ),
  'core.posting_modify_bbcode_status' => 
  array (
    'locations' => 
    array (
      'posting.php' => 785,
    ),
    'description' => 'Event to override message BBCode status indications',
    'description_wrapped' => 
    array (
      0 => 'Event to override message BBCode status',
      1 => 'indications',
    ),
    'name' => 'core.posting_modify_bbcode_status',
    'tooltip_id' => 'stt_0b018e6c',
    'vars' => 
    array (
      'bbcode_status' => 
      array (
        'type' => 'bool',
        'description' => 'BBCode status',
      ),
      'smilies_status' => 
      array (
        'type' => 'bool',
        'description' => 'Smilies status',
      ),
      'img_status' => 
      array (
        'type' => 'bool',
        'description' => 'Image BBCode status',
      ),
      'url_status' => 
      array (
        'type' => 'bool',
        'description' => 'URL BBCode status',
      ),
      'flash_status' => 
      array (
        'type' => 'bool',
        'description' => 'Flash BBCode status',
      ),
      'quote_status' => 
      array (
        'type' => 'bool',
        'description' => 'Quote BBCode status',
      ),
    ),
    'since' => '3.3.3-RC1',
  ),
  'core.posting_modify_message_text' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1086,
    ),
    'description' => 'This event allows you to modify message text before parsing',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify message text',
      1 => 'before parsing',
    ),
    'name' => 'core.posting_modify_message_text',
    'tooltip_id' => 'stt_41daa920',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form is submitted',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the post is being previewed',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being saved',
      ),
      'load' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being loaded',
      ),
      'cancel' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to cancel the form (returns to',
      ),
      'refresh' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to retain previously submitted data',
      ),
      'message_parser' => 
      array (
        'type' => 'object',
        'description' => 'The message parser object',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Array of errors',
      ),
    ),
    'since' => '3.1.2-RC1',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added error',
    ),
  ),
  'core.posting_modify_submission_errors' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1428,
    ),
    'description' => 'This event allows you to define errors before the post action is performed',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to define errors before the',
      1 => 'post action is performed',
    ),
    'name' => 'core.posting_modify_submission_errors',
    'tooltip_id' => 'stt_ac68b192',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with poll data from post (must be used instead of the post_data equivalent)',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form is submitted',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings; a non-empty array aborts form submission.',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.1.5-RC1' => 'Added poll array to the event',
      '3.2.0-a1' => 'Removed undefined page_title',
    ),
  ),
  'core.posting_modify_submit_post_before' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1564,
    ),
    'description' => 'This event allows you to define errors before the post action is performed',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to define errors before the',
      1 => 'post action is performed',
    ),
    'name' => 'core.posting_modify_submit_post_before',
    'tooltip_id' => 'stt_10ffac37',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with poll data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data going to be stored in the database',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form is submitted',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'post_author_name' => 
      array (
        'type' => 'string',
        'description' => 'Author name for guest posts',
      ),
      'update_message' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean if the post message was changed',
      ),
      'update_subject' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean if the post subject was changed',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.1.6-RC1' => 'remove submit and error from event Submit and Error are checked previously prior to running event',
      '3.2.0-a1' => 'Removed undefined page_title',
    ),
  ),
  'core.posting_modify_submit_post_after' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1603,
    ),
    'description' => 'This event allows you to define errors after the post action is performed',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to define errors after the',
      1 => 'post action is performed',
    ),
    'name' => 'core.posting_modify_submit_post_after',
    'tooltip_id' => 'stt_9ae45773',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'poll' => 
      array (
        'type' => 'array',
        'description' => 'Array with poll data',
      ),
      'data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data going to be stored in the database',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form is submitted',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'post_author_name' => 
      array (
        'type' => 'string',
        'description' => 'Author name for guest posts',
      ),
      'update_message' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean if the post message was changed',
      ),
      'update_subject' => 
      array (
        'type' => 'bool',
        'description' => 'Boolean if the post subject was changed',
      ),
      'redirect_url' => 
      array (
        'type' => 'string',
        'description' => 'URL the user is going to be redirected to',
      ),
    ),
    'since' => '3.1.0-RC5',
    'changes' => 
    array (
      '3.1.6-RC1' => 'remove submit and error from event Submit and Error are checked previously prior to running event',
      '3.2.0-a1' => 'Removed undefined page_title',
    ),
  ),
  'core.posting_modify_quote_attributes' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1779,
    ),
    'description' => 'This event allows you to modify the quote attributes of the post being quoted',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the quote',
      1 => 'attributes of the post being quoted',
    ),
    'name' => 'core.posting_modify_quote_attributes',
    'tooltip_id' => 'stt_daac8066',
    'vars' => 
    array (
      'quote_attributes' => 
      array (
        'type' => 'array',
        'description' => 'Array with quote attributes',
      ),
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
    ),
    'since' => '3.2.6-RC1',
  ),
  'core.posting_modify_post_subject' => 
  array (
    'locations' => 
    array (
      'posting.php' => 1800,
    ),
    'description' => 'This event allows you to modify the post subject of the post being quoted',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the post subject',
      1 => 'of the post being quoted',
    ),
    'name' => 'core.posting_modify_post_subject',
    'tooltip_id' => 'stt_15e21c77',
    'vars' => 
    array (
      'post_subject' => 
      array (
        'type' => 'string',
        'description' => 'String with the post subject already censored.',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.posting_modify_template_vars' => 
  array (
    'locations' => 
    array (
      'posting.php' => 2089,
    ),
    'description' => 'This event allows you to modify template variables for the posting screen',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify template variables',
      1 => 'for the posting screen',
    ),
    'name' => 'core.posting_modify_template_vars',
    'tooltip_id' => 'stt_e67c49ea',
    'vars' => 
    array (
      'post_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'moderators' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum moderators',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'What action to take if the form is submitted',
      ),
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Title of the mode page',
      ),
      's_topic_icons' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to show the topic icons',
      ),
      'form_enctype' => 
      array (
        'type' => 'string',
        'description' => 'If attachments are allowed for this form',
      ),
      's_action' => 
      array (
        'type' => 'string',
        'description' => 'The URL to submit the POST data to',
      ),
      's_hidden_fields' => 
      array (
        'type' => 'string',
        'description' => 'Concatenated hidden input tags of posting form',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the post',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the topic',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the forum',
      ),
      'draft_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the draft',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
      'preview' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the post is being previewed',
      ),
      'save' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being saved',
      ),
      'load' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not a draft is being loaded',
      ),
      'cancel' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to cancel the form (returns to',
      ),
      'error' => 
      array (
        'type' => 'array',
        'description' => 'Any error strings; a non-empty array aborts',
      ),
      'refresh' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not to retain previously submitted data',
      ),
      'page_data' => 
      array (
        'type' => 'array',
        'description' => 'Posting page data that should be passed to the',
      ),
      'message_parser' => 
      array (
        'type' => 'object',
        'description' => 'The message parser object',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-b3' => 'Added vars post_data, moderators, mode, page_title,',
      '3.1.2-RC1' => 'Removed \'delete\' var as it does not exist',
      '3.1.5-RC1' => 'Added poll variables to the page_data array',
      '3.1.6-RC1' => 'Added \'draft_id\' var',
    ),
  ),
  'core.search_auth_check_override' => 
  array (
    'locations' => 
    array (
      'search.php' => 104,
    ),
    'description' => 'This event allows you to override search auth checks',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to override search auth',
      1 => 'checks',
    ),
    'name' => 'core.search_auth_check_override',
    'tooltip_id' => 'stt_b0b33fd9',
    'vars' => 
    array (
      'search_auth_check_override' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the search auth check overridden',
      ),
    ),
    'since' => '3.3.14-RC1',
  ),
  'core.search_modify_submit_parameters' => 
  array (
    'locations' => 
    array (
      'search.php' => 168,
    ),
    'description' => 'This event allows you to alter the above parameters, such as keywords and submit',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to alter the above',
      1 => 'parameters, such as keywords and submit',
    ),
    'name' => 'core.search_modify_submit_parameters',
    'tooltip_id' => 'stt_c8a52634',
    'vars' => 
    array (
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'The search keywords',
      ),
      'author' => 
      array (
        'type' => 'string',
        'description' => 'Specifies the author match, when ANONYMOUS is also a search-match',
      ),
      'author_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the author to search by',
      ),
      'search_id' => 
      array (
        'type' => 'string',
        'description' => 'Predefined search type name',
      ),
      'submit' => 
      array (
        'type' => 'bool',
        'description' => 'Whether or not the form has been submitted',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.search_modify_param_before' => 
  array (
    'locations' => 
    array (
      'search.php' => 384,
    ),
    'description' => 'Event to modify the SQL parameters before pre-made searches',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL parameters before pre-made',
      1 => 'searches',
    ),
    'name' => 'core.search_modify_param_before',
    'tooltip_id' => 'stt_400b9e01',
    'vars' => 
    array (
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'String of the specified keywords',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array of SQL sorting instructions',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of excluded forum ids',
      ),
      'author_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of exclusive author ids',
      ),
      'search_id' => 
      array (
        'type' => 'string',
        'description' => 'The id of the search request',
      ),
      'id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of post or topic ids for search result',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => '\'posts\' or \'topics\' type of ids',
      ),
    ),
    'since' => '3.1.3-RC1',
    'changes' => 
    array (
      '3.1.10-RC1' => 'Added id_ary, show_results',
    ),
  ),
  'core.search_modify_param_after' => 
  array (
    'locations' => 
    array (
      'search.php' => 560,
    ),
    'description' => 'Event to modify data after pre-made searches',
    'description_wrapped' => 
    array (
      0 => 'Event to modify data after pre-made searches',
    ),
    'name' => 'core.search_modify_param_after',
    'tooltip_id' => 'stt_6ba75d03',
    'vars' => 
    array (
      'l_search_title' => 
      array (
        'type' => 'string',
        'description' => 'The title of the search page',
      ),
      'search_id' => 
      array (
        'type' => 'string',
        'description' => 'Predefined search type name',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => 'Display topics or posts',
      ),
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'SQL query corresponding to the pre-made search id',
      ),
    ),
    'since' => '3.1.7-RC1',
  ),
  'core.search_backend_search_after' => 
  array (
    'locations' => 
    array (
      'search.php' => 669,
    ),
    'description' => 'Event to search otherwise than by keywords or author',
    'description_wrapped' => 
    array (
      0 => 'Event to search otherwise than by keywords or',
      1 => 'author',
    ),
    'name' => 'core.search_backend_search_after',
    'tooltip_id' => 'stt_4c3400ab',
    'vars' => 
    array (
      'show_results' => 
      array (
        'type' => 'string',
        'description' => '\'posts\' or \'topics\' type of ids',
      ),
      'search_fields' => 
      array (
        'type' => 'string',
        'description' => 'The data fields to search in',
      ),
      'search_terms' => 
      array (
        'type' => 'string',
        'description' => 'Is either \'all\' (use query as entered, words without prefix should default to "have to be in field") or \'any\' (ignore search query parts and just return all posts that contain any of the specified words)',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array of SQL sorting instructions',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort key',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'The sort direction',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Limit the age of results',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of excluded forum ids',
      ),
      'm_approve_posts_fid_sql' => 
      array (
        'type' => 'string',
        'description' => 'Specifies which types of posts the user can view in which forums',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'is set to 0 or a topic id, if it is not 0 then only posts in this topic should be searched',
      ),
      'author_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of exclusive author ids',
      ),
      'sql_author_match' => 
      array (
        'type' => 'string',
        'description' => 'Specifies the author match, when ANONYMOUS is also a search-match',
      ),
      'id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of post or topic ids for search result',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'The starting id of the results',
      ),
      'per_page' => 
      array (
        'type' => 'int',
        'description' => 'Number of ids each page is supposed to contain',
      ),
      'total_match_count' => 
      array (
        'type' => 'int',
        'description' => 'The total number of search matches',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.search_modify_url_parameters' => 
  array (
    'locations' => 
    array (
      'search.php' => 737,
    ),
    'description' => 'Event to add or modify search URL parameters',
    'description_wrapped' => 
    array (
      0 => 'Event to add or modify search URL parameters',
    ),
    'name' => 'core.search_modify_url_parameters',
    'tooltip_id' => 'stt_3060af1b',
    'vars' => 
    array (
      'u_search' => 
      array (
        'type' => 'string',
        'description' => 'Search URL parameters string',
      ),
      'search_id' => 
      array (
        'type' => 'string',
        'description' => 'Predefined search type name',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => 'String indicating the show results mode',
      ),
      'sql_where' => 
      array (
        'type' => 'string',
        'description' => 'The SQL WHERE string used by search to get topic data',
      ),
      'total_match_count' => 
      array (
        'type' => 'int',
        'description' => 'The total number of search matches',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of excluded forum ids',
      ),
    ),
    'since' => '3.1.7-RC1',
    'changes' => 
    array (
      '3.1.10-RC1' => 'Added show_results, sql_where, total_match_count',
      '3.1.11-RC1' => 'Added ex_fid_ary',
    ),
  ),
  'core.search_get_posts_data' => 
  array (
    'locations' => 
    array (
      'search.php' => 814,
    ),
    'description' => 'Event to modify the SQL query before the posts data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the posts',
      1 => 'data is retrieved',
    ),
    'name' => 'core.search_get_posts_data',
    'tooltip_id' => 'stt_0bc74034',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array',
      ),
      'zebra' => 
      array (
        'type' => 'array',
        'description' => 'Array of zebra data for the current user',
      ),
      'total_match_count' => 
      array (
        'type' => 'int',
        'description' => 'The total number of search matches',
      ),
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'String of the specified keywords',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array of SQL sorting instructions',
      ),
      's_sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'The sort direction',
      ),
      's_sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sort key',
      ),
      's_limit_days' => 
      array (
        'type' => 'string',
        'description' => 'Limit the age of results',
      ),
      'ex_fid_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of excluded forum ids',
      ),
      'author_id_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array of exclusive author ids',
      ),
      'search_fields' => 
      array (
        'type' => 'string',
        'description' => 'The data fields to search in',
      ),
      'search_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the search request',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'The starting id of the results',
      ),
    ),
    'since' => '3.1.0-b3',
  ),
  'core.search_get_topic_data' => 
  array (
    'locations' => 
    array (
      'search.php' => 878,
    ),
    'description' => 'Event to modify the SQL query before the topic data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the topic',
      1 => 'data is retrieved',
    ),
    'name' => 'core.search_get_topic_data',
    'tooltip_id' => 'stt_897c1838',
    'vars' => 
    array (
      'sql_select' => 
      array (
        'type' => 'string',
        'description' => 'The SQL SELECT string used by search to get topic data',
      ),
      'sql_from' => 
      array (
        'type' => 'string',
        'description' => 'The SQL FROM string used by search to get topic data',
      ),
      'sql_where' => 
      array (
        'type' => 'string',
        'description' => 'The SQL WHERE string used by search to get topic data',
      ),
      'total_match_count' => 
      array (
        'type' => 'int',
        'description' => 'The total number of search matches',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'Array of SQL sorting instructions',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'The sorting direction',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sorting key',
      ),
      'sql_order_by' => 
      array (
        'type' => 'string',
        'description' => 'The SQL ORDER BY string used by search to get topic data',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-RC5' => 'Added total_match_count',
      '3.1.7-RC1' => 'Added sort_by_sql, sort_dir, sort_key, sql_order_by',
    ),
  ),
  'core.search_modify_post_row' => 
  array (
    'locations' => 
    array (
      'search.php' => 982,
    ),
    'description' => 'Modify the row of a post result before the post_text is trimmed',
    'description_wrapped' => 
    array (
      0 => 'Modify the row of a post result before the',
      1 => 'post_text is trimmed',
    ),
    'name' => 'core.search_modify_post_row',
    'tooltip_id' => 'stt_718150e5',
    'vars' => 
    array (
      'hilit' => 
      array (
        'type' => 'string',
        'description' => 'String to highlight',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the post data',
      ),
      'u_hilit' => 
      array (
        'type' => 'string',
        'description' => 'Highlight string to be injected into URL',
      ),
      'view' => 
      array (
        'type' => 'string',
        'description' => 'Search results view mode',
      ),
      'zebra' => 
      array (
        'type' => 'array',
        'description' => 'Array with zebra data for the current user',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.search_modify_rowset' => 
  array (
    'locations' => 
    array (
      'search.php' => 1088,
    ),
    'description' => 'Modify the rowset data',
    'description_wrapped' => 
    array (
      0 => 'Modify the rowset data',
    ),
    'name' => 'core.search_modify_rowset',
    'tooltip_id' => 'stt_0e5fe37a',
    'vars' => 
    array (
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'Array with posts attachments data',
      ),
      'hilit' => 
      array (
        'type' => 'string',
        'description' => 'String to highlight',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the search results data',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => 'String indicating the show results mode',
      ),
      'topic_tracking_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the topics tracking data',
      ),
      'u_hilit' => 
      array (
        'type' => 'string',
        'description' => 'Highlight string to be injected into URL',
      ),
      'view' => 
      array (
        'type' => 'string',
        'description' => 'Search results view mode',
      ),
      'zebra' => 
      array (
        'type' => 'array',
        'description' => 'Array with zebra data for the current user',
      ),
    ),
    'since' => '3.1.0-b4',
    'changes' => 
    array (
      '3.1.0-b5' => 'Added var show_results',
    ),
  ),
  'core.search_modify_tpl_ary' => 
  array (
    'locations' => 
    array (
      'search.php' => 1282,
    ),
    'description' => 'Modify the topic data before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify the topic data before it is assigned to the',
      1 => 'template',
    ),
    'name' => 'core.search_modify_tpl_ary',
    'tooltip_id' => 'stt_76d2ddef',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Template block array with topic data',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => 'Display topics or posts',
      ),
      'topic_title' => 
      array (
        'type' => 'string',
        'description' => 'Cleaned topic title',
      ),
      'replies' => 
      array (
        'type' => 'int',
        'description' => 'The number of topic replies',
      ),
      'view_topic_url' => 
      array (
        'type' => 'string',
        'description' => 'The URL to the topic',
      ),
      'folder_img' => 
      array (
        'type' => 'string',
        'description' => 'The folder image of the topic',
      ),
      'folder_alt' => 
      array (
        'type' => 'string',
        'description' => 'The alt attribute of the topic folder img',
      ),
      'topic_type' => 
      array (
        'type' => 'int',
        'description' => 'The topic type',
      ),
      'unread_topic' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the topic has unread posts',
      ),
      'topic_unapproved' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the topic is unapproved',
      ),
      'posts_unapproved' => 
      array (
        'type' => 'int',
        'description' => 'The number of unapproved posts',
      ),
      'topic_deleted' => 
      array (
        'type' => 'bool',
        'description' => 'Whether the topic has been deleted',
      ),
      'u_mcp_queue' => 
      array (
        'type' => 'string',
        'description' => 'The URL to the corresponding MCP queue page',
      ),
      'zebra' => 
      array (
        'type' => 'array',
        'description' => 'The zebra data of the current user',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'All the attachments of the search results',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-b3' => 'Added vars show_results, topic_title, replies,',
    ),
  ),
  'core.search_results_modify_search_title' => 
  array (
    'locations' => 
    array (
      'search.php' => 1374,
    ),
    'description' => 'Modify the title and/or load data for the search results page',
    'description_wrapped' => 
    array (
      0 => 'Modify the title and/or load data for the search',
      1 => 'results page',
    ),
    'name' => 'core.search_results_modify_search_title',
    'tooltip_id' => 'stt_969336a0',
    'vars' => 
    array (
      'author_id' => 
      array (
        'type' => 'int',
        'description' => 'ID of the author to search by',
      ),
      'l_search_title' => 
      array (
        'type' => 'string',
        'description' => 'The title of the search page',
      ),
      'search_id' => 
      array (
        'type' => 'string',
        'description' => 'Predefined search type name',
      ),
      'show_results' => 
      array (
        'type' => 'string',
        'description' => 'Search results output mode - topics or posts',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'The starting id of the results',
      ),
      'total_match_count' => 
      array (
        'type' => 'int',
        'description' => 'The count of search results',
      ),
      'keywords' => 
      array (
        'type' => 'string',
        'description' => 'The search keywords',
      ),
    ),
    'since' => '3.1.0-RC4',
    'changes' => 
    array (
      '3.1.6-RC1' => 'Added total_match_count and keywords',
    ),
  ),
  'core.search_modify_forum_select_list' => 
  array (
    'locations' => 
    array (
      'search.php' => 1414,
    ),
    'description' => 'Modify the forum select list for advanced search page',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum select list for advanced search',
      1 => 'page',
    ),
    'name' => 'core.search_modify_forum_select_list',
    'tooltip_id' => 'stt_08723770',
    'vars' => 
    array (
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forums list data',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.ucp_switch_permissions' => 
  array (
    'locations' => 
    array (
      'ucp.php' => 202,
    ),
    'description' => 'Event to run code after permissions are switched',
    'description_wrapped' => 
    array (
      0 => 'Event to run code after permissions are switched',
    ),
    'name' => 'core.ucp_switch_permissions',
    'tooltip_id' => 'stt_a4183582',
    'vars' => 
    array (
      'user_id' => 
      array (
        'type' => 'int',
        'description' => 'User ID to switch permission to',
      ),
      'user_row' => 
      array (
        'type' => 'array',
        'description' => 'User data',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Success message',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_restore_permissions' => 
  array (
    'locations' => 
    array (
      'ucp.php' => 237,
    ),
    'description' => 'Event to run code after permissions are restored',
    'description_wrapped' => 
    array (
      0 => 'Event to run code after permissions are restored',
    ),
    'name' => 'core.ucp_restore_permissions',
    'tooltip_id' => 'stt_b8dc2050',
    'vars' => 
    array (
      'username' => 
      array (
        'type' => 'string',
        'description' => 'User name',
      ),
      'message' => 
      array (
        'type' => 'string',
        'description' => 'Success message',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.ucp_modify_friends_sql' => 
  array (
    'locations' => 
    array (
      'ucp.php' => 316,
    ),
    'description' => 'Event to modify the SQL query before listing of friends',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before listing of',
      1 => 'friends',
    ),
    'name' => 'core.ucp_modify_friends_sql',
    'tooltip_id' => 'stt_1bd8b277',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array for listing of friends',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_modify_friends_template_vars' => 
  array (
    'locations' => 
    array (
      'ucp.php' => 349,
    ),
    'description' => 'Event to modify the template before listing of friends',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the template before listing of',
      1 => 'friends',
    ),
    'name' => 'core.ucp_modify_friends_template_vars',
    'tooltip_id' => 'stt_eb09b469',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'friend user row',
      ),
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'friend template array',
      ),
      'which' => 
      array (
        'type' => 'string',
        'description' => 'friend is \'online\' or \'offline\'',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.ucp_display_module_before' => 
  array (
    'locations' => 
    array (
      'ucp.php' => 372,
    ),
    'description' => 'Use this event to enable and disable additional UCP modules',
    'description_wrapped' => 
    array (
      0 => 'Use this event to enable and disable additional',
      1 => 'UCP modules',
    ),
    'name' => 'core.ucp_display_module_before',
    'tooltip_id' => 'stt_7bff165b',
    'vars' => 
    array (
      'module' => 
      array (
        'type' => 'p_master',
        'description' => 'Object holding all modules and their status',
      ),
      'id' => 
      array (
        'type' => 'mixed',
        'description' => 'Active module category (can be the int or string)',
      ),
      'mode' => 
      array (
        'type' => 'string',
        'description' => 'Active module',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.viewforum_modify_sql' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 87,
    ),
    'description' => 'You can use this event to modify the sql that selects the forum on the viewforum page.',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to modify the sql that',
      1 => 'selects the forum on the viewforum page.',
    ),
    'name' => 'core.viewforum_modify_sql',
    'tooltip_id' => 'stt_0e4eadb9',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data for a forum',
      ),
    ),
    'since' => '3.3.14-RC1',
  ),
  'core.viewforum_modify_page_title' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 195,
    ),
    'description' => 'You can use this event to modify the page title of the viewforum page',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to modify the page title of',
      1 => 'the viewforum page',
    ),
    'name' => 'core.viewforum_modify_page_title',
    'tooltip_id' => 'stt_59c0f514',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Title of the viewforum page',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start offset used to calculate the page',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.viewforum_modify_topic_ordering' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 318,
    ),
    'description' => 'Modify the topic ordering if needed',
    'description_wrapped' => 
    array (
      0 => 'Modify the topic ordering if needed',
    ),
    'name' => 'core.viewforum_modify_topic_ordering',
    'tooltip_id' => 'stt_90b26f9c',
    'vars' => 
    array (
      'sort_by_text' => 
      array (
        'type' => 'array',
        'description' => 'Topic ordering options',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'Topic orderings options SQL equivalent',
      ),
    ),
    'since' => '3.2.5-RC1',
  ),
  'core.viewforum_modify_sort_data_sql' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 361,
    ),
    'description' => 'Modify the sort data SQL query for getting additional fields if needed',
    'description_wrapped' => 
    array (
      0 => 'Modify the sort data SQL query for getting',
      1 => 'additional fields if needed',
    ),
    'name' => 'core.viewforum_modify_sort_data_sql',
    'tooltip_id' => 'stt_593228d5',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum_id whose topics are being listed',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Variable containing start for pagination',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'The oldest topic displayable in elapsed days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sorting by. It is one of the first character of (in low case):',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Either "a" for ascending or "d" for descending',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of all topics',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.viewforum_get_topic_data' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 499,
    ),
    'description' => 'Event to modify the SQL query before the topic data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the topic',
      1 => 'data is retrieved',
    ),
    'name' => 'core.viewforum_get_topic_data',
    'tooltip_id' => 'stt_06221b40',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of all topics',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum_id whose topics are being listed',
      ),
      'topics_count' => 
      array (
        'type' => 'int',
        'description' => 'The total number of topics for display',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'The oldest topic displayable in elapsed days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'The sorting by. It is one of the first character of (in low case):',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Either "a" for ascending or "d" for descending',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-RC4' => 'Added forum_data var',
      '3.1.4-RC1' => 'Added forum_id, topics_count, sort_days, sort_key and sort_dir vars',
      '3.1.9-RC1' => 'Fix types of properties',
    ),
  ),
  'core.viewforum_get_announcement_topic_ids_data' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 567,
    ),
    'description' => 'Event to modify the SQL query before the announcement topic ids data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the',
      1 => 'announcement topic ids data is retrieved',
    ),
    'name' => 'core.viewforum_get_announcement_topic_ids_data',
    'tooltip_id' => 'stt_78e162f3',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Data about the forum',
      ),
      'g_forum_ary' => 
      array (
        'type' => 'array',
        'description' => 'Global announcement forums array',
      ),
      'sql_anounce_array' => 
      array (
        'type' => 'array',
        'description' => 'SQL announcement array',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array to get the announcement topic ids data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID',
      ),
    ),
    'since' => '3.1.10-RC1',
  ),
  'core.viewforum_modify_sort_direction' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 644,
    ),
    'description' => 'Modify the topics sort ordering if needed',
    'description_wrapped' => 
    array (
      0 => 'Modify the topics sort ordering if needed',
    ),
    'name' => 'core.viewforum_modify_sort_direction',
    'tooltip_id' => 'stt_6552170d',
    'vars' => 
    array (
      'direction' => 
      array (
        'type' => 'string',
        'description' => 'Topics sort order',
      ),
    ),
    'since' => '3.2.5-RC1',
  ),
  'core.viewforum_get_topic_ids_data' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 711,
    ),
    'description' => 'Event to modify the SQL query before the topic ids data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the topic ids',
      1 => 'data is retrieved',
    ),
    'name' => 'core.viewforum_get_topic_ids_data',
    'tooltip_id' => 'stt_a26c08f3',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Data about the forum',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array to get the topic ids data',
      ),
      'sql_approved' => 
      array (
        'type' => 'string',
        'description' => 'Topic visibility SQL string',
      ),
      'sql_limit' => 
      array (
        'type' => 'int',
        'description' => 'Number of records to select',
      ),
      'sql_limit_time' => 
      array (
        'type' => 'string',
        'description' => 'SQL string to limit topic_last_post_time data',
      ),
      'sql_sort_order' => 
      array (
        'type' => 'array',
        'description' => 'SQL sorting string',
      ),
      'sql_start' => 
      array (
        'type' => 'int',
        'description' => 'Offset point to start selection from',
      ),
      'sql_where' => 
      array (
        'type' => 'string',
        'description' => 'SQL WHERE clause string',
      ),
      'store_reverse' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if we select from the late pages',
      ),
    ),
    'since' => '3.1.0-RC4',
    'changes' => 
    array (
      '3.1.3' => 'Added forum_data',
    ),
  ),
  'core.viewforum_modify_topic_list_sql' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 753,
    ),
    'description' => 'Event to modify the SQL query before obtaining topics/stickies',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before obtaining',
      1 => 'topics/stickies',
    ),
    'name' => 'core.viewforum_modify_topic_list_sql',
    'tooltip_id' => 'stt_21d6aa09',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum ID',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Data about the forum',
      ),
      'topic_list' => 
      array (
        'type' => 'array',
        'description' => 'Topic ids array',
      ),
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'SQL query array for obtaining topics/stickies',
      ),
    ),
    'since' => '3.3.1-RC1',
  ),
  'core.viewforum_get_shadowtopic_data' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 793,
    ),
    'description' => 'Event to modify the SQL query before the shadowtopic data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the',
      1 => 'shadowtopic data is retrieved',
    ),
    'name' => 'core.viewforum_get_shadowtopic_data',
    'tooltip_id' => 'stt_a47d6c35',
    'vars' => 
    array (
      'sql_array' => 
      array (
        'type' => 'array',
        'description' => 'SQL array to get the data of any shadowtopics',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.viewforum_modify_topics_data' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 873,
    ),
    'description' => 'Modify topics data before we display the viewforum page',
    'description_wrapped' => 
    array (
      0 => 'Modify topics data before we display the viewforum',
      1 => 'page',
    ),
    'name' => 'core.viewforum_modify_topics_data',
    'tooltip_id' => 'stt_94958669',
    'vars' => 
    array (
      'topic_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with current viewforum page topic ids',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with topics data (in topic_id => topic_data format)',
      ),
      'total_topic_count' => 
      array (
        'type' => 'int',
        'description' => 'Forum\'s total topic count',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum identifier',
      ),
    ),
    'since' => '3.1.0-b3',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added forum_id',
    ),
  ),
  'core.viewforum_modify_topicrow' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 1044,
    ),
    'description' => 'Modify the topic data before it is assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Modify the topic data before it is assigned to the',
      1 => 'template',
    ),
    'name' => 'core.viewforum_modify_topicrow',
    'tooltip_id' => 'stt_0f839f96',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'topic_row' => 
      array (
        'type' => 'array',
        'description' => 'Template array with topic data',
      ),
      's_type_switch' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the topic type is [global] announcement',
      ),
      's_type_switch_test' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the test topic type is [global] announcement',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.10-RC1' => 'Added s_type_switch, s_type_switch_test',
    ),
  ),
  'core.viewforum_topic_row_after' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 1072,
    ),
    'description' => 'Event after the topic data has been assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Event after the topic data has been assigned to',
      1 => 'the template',
    ),
    'name' => 'core.viewforum_topic_row_after',
    'tooltip_id' => 'stt_033bf2a8',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the topic data',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with topics data (in topic_id => topic_data format)',
      ),
      's_type_switch' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if the topic type is [global] announcement',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic ID',
      ),
      'topic_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with current viewforum page topic ids',
      ),
      'topic_row' => 
      array (
        'type' => 'array',
        'description' => 'Template array with topic data',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.viewforum_generate_page_after' => 
  array (
    'locations' => 
    array (
      'viewforum.php' => 1091,
    ),
    'description' => 'This event is to perform additional actions on viewforum page',
    'description_wrapped' => 
    array (
      0 => 'This event is to perform additional actions on',
      1 => 'viewforum page',
    ),
    'name' => 'core.viewforum_generate_page_after',
    'tooltip_id' => 'stt_d83fd0f9',
    'vars' => 
    array (
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the forum data',
      ),
    ),
    'since' => '3.2.2-RC1',
  ),
  'core.viewonline_modify_forum_data_sql' => 
  array (
    'locations' => 
    array (
      'viewonline.php' => 114,
    ),
    'description' => 'Modify the forum data SQL query for getting additional fields if needed',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum data SQL query for getting',
      1 => 'additional fields if needed',
    ),
    'name' => 'core.viewonline_modify_forum_data_sql',
    'tooltip_id' => 'stt_b15288c3',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.viewonline_modify_sql' => 
  array (
    'locations' => 
    array (
      'viewonline.php' => 180,
    ),
    'description' => 'Modify the SQL query for getting the user data to display viewonline list',
    'description_wrapped' => 
    array (
      0 => 'Modify the SQL query for getting the user data to',
      1 => 'display viewonline list',
    ),
    'name' => 'core.viewonline_modify_sql',
    'tooltip_id' => 'stt_7c0f11fc',
    'vars' => 
    array (
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array',
      ),
      'show_guests' => 
      array (
        'type' => 'bool',
        'description' => 'Do we display guests in the list',
      ),
      'guest_counter' => 
      array (
        'type' => 'int',
        'description' => 'Number of guests displayed',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-a2' => 'Added vars guest_counter and forum_data',
    ),
  ),
  'core.viewonline_overwrite_location' => 
  array (
    'locations' => 
    array (
      'viewonline.php' => 410,
    ),
    'description' => 'Overwrite the location\'s name and URL, which are displayed in the list',
    'description_wrapped' => 
    array (
      0 => 'Overwrite the location\'s name and URL, which are',
      1 => 'displayed in the list',
    ),
    'name' => 'core.viewonline_overwrite_location',
    'tooltip_id' => 'stt_4ae847f7',
    'vars' => 
    array (
      'on_page' => 
      array (
        'type' => 'array',
        'description' => 'File name and query string',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the users sql row',
      ),
      'location' => 
      array (
        'type' => 'string',
        'description' => 'Page name to displayed in the list',
      ),
      'location_url' => 
      array (
        'type' => 'string',
        'description' => 'Page url to displayed in the list',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-a2' => 'Added var forum_data',
    ),
  ),
  'core.viewonline_modify_user_row' => 
  array (
    'locations' => 
    array (
      'viewonline.php' => 442,
    ),
    'description' => 'Modify viewonline template data before it is displayed in the list',
    'description_wrapped' => 
    array (
      0 => 'Modify viewonline template data before it is',
      1 => 'displayed in the list',
    ),
    'name' => 'core.viewonline_modify_user_row',
    'tooltip_id' => 'stt_3667c188',
    'vars' => 
    array (
      'on_page' => 
      array (
        'type' => 'array',
        'description' => 'File name and query string',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with the users sql row',
      ),
      'forum_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with forum data',
      ),
      'template_row' => 
      array (
        'type' => 'array',
        'description' => 'Array with template variables for the user row',
      ),
    ),
    'since' => '3.1.0-RC4',
  ),
  'core.viewtopic_modify_forum_id' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 277,
    ),
    'description' => 'Modify the forum ID to handle the correct display of viewtopic if needed',
    'description_wrapped' => 
    array (
      0 => 'Modify the forum ID to handle the correct display',
      1 => 'of viewtopic if needed',
    ),
    'name' => 'core.viewtopic_modify_forum_id',
    'tooltip_id' => 'stt_7381fe74',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'string',
        'description' => 'forum ID',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'array of topic\'s data',
      ),
    ),
    'since' => '3.2.5-RC1',
  ),
  'core.viewtopic_before_f_read_check' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 395,
    ),
    'description' => 'Event to apply extra permissions and to override original phpBB\'s f_read permission and forum password check on viewtopic access',
    'description_wrapped' => 
    array (
      0 => 'Event to apply extra permissions and to override',
      1 => 'original phpBB\'s f_read permission and forum',
      2 => 'password check on viewtopic access',
    ),
    'name' => 'core.viewtopic_before_f_read_check',
    'tooltip_id' => 'stt_f8654137',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The forum id from where the topic belongs',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the topic the user tries to access',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the post the user tries to start viewing at.',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'All the information from the topic and forum tables for this topic',
      ),
      'overrides_f_read_check' => 
      array (
        'type' => 'bool',
        'description' => 'Set true to remove f_read check afterwards',
      ),
      'overrides_forum_password_check' => 
      array (
        'type' => 'bool',
        'description' => 'Set true to remove forum_password check afterwards',
      ),
      'topic_tracking_info' => 
      array (
        'type' => 'array',
        'description' => 'Information upon calling get_topic_tracking()',
      ),
    ),
    'since' => '3.1.3-RC1',
  ),
  'core.viewtopic_gen_sort_selects_before' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 485,
    ),
    'description' => 'Event to add new sorting options',
    'description_wrapped' => 
    array (
      0 => 'Event to add new sorting options',
    ),
    'name' => 'core.viewtopic_gen_sort_selects_before',
    'tooltip_id' => 'stt_16ef0970',
    'vars' => 
    array (
      'limit_days' => 
      array (
        'type' => 'array',
        'description' => 'Limit results by time',
      ),
      'sort_by_text' => 
      array (
        'type' => 'array',
        'description' => 'Language strings for sorting options',
      ),
      'sort_by_sql' => 
      array (
        'type' => 'array',
        'description' => 'SQL conditions for sorting options',
      ),
      'join_user_sql' => 
      array (
        'type' => 'array',
        'description' => 'SQL joins required for sorting options',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'User selected sort days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'User selected sort key',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'User selected sort direction',
      ),
      's_limit_days' => 
      array (
        'type' => 'string',
        'description' => 'Initial value of limit days selectbox',
      ),
      's_sort_key' => 
      array (
        'type' => 'string',
        'description' => 'Initial value of sort key selectbox',
      ),
      's_sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Initial value of sort direction selectbox',
      ),
      'u_sort_param' => 
      array (
        'type' => 'string',
        'description' => 'Initial value of sorting form action',
      ),
    ),
    'since' => '3.2.8-RC1',
  ),
  'core.viewtopic_highlight_modify' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 576,
    ),
    'description' => 'Event to modify highlight.',
    'description_wrapped' => 
    array (
      0 => 'Event to modify highlight.',
    ),
    'name' => 'core.viewtopic_highlight_modify',
    'tooltip_id' => 'stt_ad516915',
    'vars' => 
    array (
      'highlight' => 
      array (
        'type' => 'string',
        'description' => 'String to be highlighted',
      ),
      'highlight_match' => 
      array (
        'type' => 'string',
        'description' => 'Highlight string to be used in preg_replace',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Topic data',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Pagination start',
      ),
      'total_posts' => 
      array (
        'type' => 'int',
        'description' => 'Number of posts',
      ),
      'viewtopic_url' => 
      array (
        'type' => 'string',
        'description' => 'Current viewtopic URL',
      ),
    ),
    'since' => '3.1.11-RC1',
  ),
  'core.viewtopic_add_quickmod_option_before' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 696,
    ),
    'description' => 'Event to modify data in the quickmod_array before it gets sent to the phpbb_add_quickmod_option function.',
    'description_wrapped' => 
    array (
      0 => 'Event to modify data in the quickmod_array before',
      1 => 'it gets sent to the phpbb_add_quickmod_option',
      2 => 'function.',
    ),
    'name' => 'core.viewtopic_add_quickmod_option_before',
    'tooltip_id' => 'stt_c3082a24',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post ID',
      ),
      'quickmod_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with quick moderation options data',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'topic_tracking_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic tracking data',
      ),
      'viewtopic_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the topic page',
      ),
      'allow_change_type' => 
      array (
        'type' => 'bool',
        'description' => 'Topic change permissions check',
      ),
    ),
    'since' => '3.1.9-RC1',
  ),
  'core.viewtopic_assign_template_vars_before' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 775,
    ),
    'description' => 'Event to modify data before template variables are being assigned',
    'description_wrapped' => 
    array (
      0 => 'Event to modify data before template variables are',
      1 => 'being assigned',
    ),
    'name' => 'core.viewtopic_assign_template_vars_before',
    'tooltip_id' => 'stt_2e4df031',
    'vars' => 
    array (
      'base_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to be passed to generate pagination',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'post_id' => 
      array (
        'type' => 'int',
        'description' => 'Post ID',
      ),
      'quickmod_array' => 
      array (
        'type' => 'array',
        'description' => 'Array with quick moderation options data',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Pagination information',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'topic_tracking_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic tracking data',
      ),
      'total_posts' => 
      array (
        'type' => 'int',
        'description' => 'Topic total posts count',
      ),
      'viewtopic_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the topic page',
      ),
    ),
    'since' => '3.1.0-RC4',
    'changes' => 
    array (
      '3.1.2-RC1' => 'Added viewtopic_url',
    ),
  ),
  'core.viewtopic_modify_poll_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 942,
    ),
    'description' => 'Event to manipulate the poll data',
    'description_wrapped' => 
    array (
      0 => 'Event to manipulate the poll data',
    ),
    'name' => 'core.viewtopic_modify_poll_data',
    'tooltip_id' => 'stt_cb54d20c',
    'vars' => 
    array (
      'cur_voted_id' => 
      array (
        'type' => 'array',
        'description' => 'Array with options\' IDs current user has voted for',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'The topic\'s forum id',
      ),
      'poll_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll information',
      ),
      's_can_vote' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if a user can vote',
      ),
      's_display_results' => 
      array (
        'type' => 'bool',
        'description' => 'Flag indicating if results or poll options should be displayed',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'The id of the topic the user tries to access',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'All the information from the topic and forum tables for this topic',
      ),
      'viewtopic_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the topic page',
      ),
      'vote_counts' => 
      array (
        'type' => 'array',
        'description' => 'Array with the vote counts for every poll option',
      ),
      'voted_id' => 
      array (
        'type' => 'array',
        'description' => 'Array with updated options\' IDs current user is voting for',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.viewtopic_modify_poll_ajax_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1073,
    ),
    'description' => 'Event to manipulate the poll data sent by AJAX response',
    'description_wrapped' => 
    array (
      0 => 'Event to manipulate the poll data sent by AJAX',
      1 => 'response',
    ),
    'name' => 'core.viewtopic_modify_poll_ajax_data',
    'tooltip_id' => 'stt_fc022ea1',
    'vars' => 
    array (
      'data' => 
      array (
        'type' => 'array',
        'description' => 'JSON response data',
      ),
      'valid_user_votes' => 
      array (
        'type' => 'array',
        'description' => 'Valid user votes',
      ),
      'vote_counts' => 
      array (
        'type' => 'array',
        'description' => 'Vote counts',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Topic data',
      ),
      'poll_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll information',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.viewtopic_modify_poll_template_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1172,
    ),
    'description' => 'Event to add/modify poll template data',
    'description_wrapped' => 
    array (
      0 => 'Event to add/modify poll template data',
    ),
    'name' => 'core.viewtopic_modify_poll_template_data',
    'tooltip_id' => 'stt_929af414',
    'vars' => 
    array (
      'cur_voted_id' => 
      array (
        'type' => 'array',
        'description' => 'Array with options\' IDs current user has voted for',
      ),
      'poll_end' => 
      array (
        'type' => 'int',
        'description' => 'The poll end time',
      ),
      'poll_info' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll information',
      ),
      'poll_options_template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the poll options template data',
      ),
      'poll_template_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the common poll template data',
      ),
      'poll_total' => 
      array (
        'type' => 'int',
        'description' => 'Total poll votes count',
      ),
      'poll_most' => 
      array (
        'type' => 'int',
        'description' => 'Mostly voted option votes count',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'All the information from the topic and forum tables for this topic',
      ),
      'viewtopic_url' => 
      array (
        'type' => 'string',
        'description' => 'URL to the topic page',
      ),
      'vote_counts' => 
      array (
        'type' => 'array',
        'description' => 'Array with the vote counts for every poll option',
      ),
      'voted_id' => 
      array (
        'type' => 'array',
        'description' => 'Array with updated options\' IDs current user is voting for',
      ),
    ),
    'since' => '3.1.5-RC1',
  ),
  'core.viewtopic_modify_post_list_sql' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1246,
    ),
    'description' => 'Event to modify the SQL query that gets post_list',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query that gets post_list',
    ),
    'name' => 'core.viewtopic_modify_post_list_sql',
    'tooltip_id' => 'stt_dc7f2222',
    'vars' => 
    array (
      'sql' => 
      array (
        'type' => 'string',
        'description' => 'The SQL query to generate the post_list',
      ),
      'sql_limit' => 
      array (
        'type' => 'int',
        'description' => 'The number of posts the query fetches',
      ),
      'sql_start' => 
      array (
        'type' => 'int',
        'description' => 'The index the query starts to fetch from',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'Key the posts are sorted by',
      ),
      'sort_days' => 
      array (
        'type' => 'string',
        'description' => 'Display posts of previous x days',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
    ),
    'since' => '3.2.4-RC1',
  ),
  'core.viewtopic_get_post_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1320,
    ),
    'description' => 'Event to modify the SQL query before the post and poster data is retrieved',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the SQL query before the post and',
      1 => 'poster data is retrieved',
    ),
    'name' => 'core.viewtopic_get_post_data',
    'tooltip_id' => 'stt_486cc7fa',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with post_ids we are going to retrieve',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Display posts of previous x days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'Key the posts are sorted by',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Direction the posts are sorted by',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Pagination information',
      ),
      'sql_ary' => 
      array (
        'type' => 'array',
        'description' => 'The SQL array to get the data of posts and posters',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-a2' => 'Added vars forum_id, topic_id, topic_data, post_list, sort_days, sort_key, sort_dir, start',
    ),
  ),
  'core.viewtopic_post_rowset_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1399,
    ),
    'description' => 'Modify the post rowset containing data to be displayed with posts',
    'description_wrapped' => 
    array (
      0 => 'Modify the post rowset containing data to be',
      1 => 'displayed with posts',
    ),
    'name' => 'core.viewtopic_post_rowset_data',
    'tooltip_id' => 'stt_23577ba2',
    'vars' => 
    array (
      'rowset_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the rowset data for this post',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original user and post data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.viewtopic_cache_guest_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1447,
    ),
    'description' => 'Modify the guest user\'s data displayed with the posts',
    'description_wrapped' => 
    array (
      0 => 'Modify the guest user\'s data displayed with the',
      1 => 'posts',
    ),
    'name' => 'core.viewtopic_cache_guest_data',
    'tooltip_id' => 'stt_79292f69',
    'vars' => 
    array (
      'user_cache_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the user\'s data',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Poster\'s user id',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original user and post data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.viewtopic_cache_user_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1514,
    ),
    'description' => 'Modify the users\' data displayed with their posts',
    'description_wrapped' => 
    array (
      0 => 'Modify the users\' data displayed with their posts',
    ),
    'name' => 'core.viewtopic_cache_user_data',
    'tooltip_id' => 'stt_b860ac3a',
    'vars' => 
    array (
      'user_cache_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with the user\'s data',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Poster\'s user id',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original user and post data',
      ),
    ),
    'since' => '3.1.0-a1',
  ),
  'core.viewtopic_modify_post_data' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1737,
    ),
    'description' => 'Event to modify the post, poster and attachment data before assigning the posts',
    'description_wrapped' => 
    array (
      0 => 'Event to modify the post, poster and attachment',
      1 => 'data before assigning the posts',
    ),
    'name' => 'core.viewtopic_modify_post_data',
    'tooltip_id' => 'stt_b547bedd',
    'vars' => 
    array (
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID',
      ),
      'topic_id' => 
      array (
        'type' => 'int',
        'description' => 'Topic ID',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with post_ids we are going to display',
      ),
      'rowset' => 
      array (
        'type' => 'array',
        'description' => 'Array with post_id => post data',
      ),
      'user_cache' => 
      array (
        'type' => 'array',
        'description' => 'Array with prepared user data',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Pagination information',
      ),
      'sort_days' => 
      array (
        'type' => 'int',
        'description' => 'Display posts of previous x days',
      ),
      'sort_key' => 
      array (
        'type' => 'string',
        'description' => 'Key the posts are sorted by',
      ),
      'sort_dir' => 
      array (
        'type' => 'string',
        'description' => 'Direction the posts are sorted by',
      ),
      'display_notice' => 
      array (
        'type' => 'bool',
        'description' => 'Shall we display a notice instead of attachments',
      ),
      'has_approved_attachments' => 
      array (
        'type' => 'bool',
        'description' => 'Does the topic have approved attachments',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'List of attachments post_id => array of attachments',
      ),
      'permanently_banned_users' => 
      array (
        'type' => 'array',
        'description' => 'List of permanently banned users',
      ),
      'can_receive_pm_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with posters that can receive pms',
      ),
    ),
    'since' => '3.1.0-RC3',
  ),
  'core.viewtopic_modify_post_action_conditions' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 1977,
    ),
    'description' => 'This event allows you to modify the conditions for the "can edit post" and "can delete post" checks',
    'description_wrapped' => 
    array (
      0 => 'This event allows you to modify the conditions for',
      1 => 'the "can edit post" and "can delete post" checks',
    ),
    'name' => 'core.viewtopic_modify_post_action_conditions',
    'tooltip_id' => 'stt_bfd6dde8',
    'vars' => 
    array (
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with post data',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'force_edit_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to edit the post (all permissions and conditions are ignored)',
      ),
      's_cannot_edit' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because it\'s not his',
      ),
      's_cannot_edit_locked' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because it\'s locked',
      ),
      's_cannot_edit_time' => 
      array (
        'type' => 'bool',
        'description' => 'User can not edit the post because edit_time has passed',
      ),
      'force_delete_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to delete the post (all permissions and conditions are ignored)',
      ),
      's_cannot_delete' => 
      array (
        'type' => 'bool',
        'description' => 'User can not delete the post because it\'s not his',
      ),
      's_cannot_delete_lastpost' => 
      array (
        'type' => 'bool',
        'description' => 'User can not delete the post because it\'s not the last post of the topic',
      ),
      's_cannot_delete_locked' => 
      array (
        'type' => 'bool',
        'description' => 'User can not delete the post because it\'s locked',
      ),
      's_cannot_delete_time' => 
      array (
        'type' => 'bool',
        'description' => 'User can not delete the post because edit_time has passed',
      ),
      'force_softdelete_allowed' => 
      array (
        'type' => 'bool',
        'description' => 'Allow the user to ыoftdelete the post (all permissions and conditions are ignored)',
      ),
    ),
    'since' => '3.1.0-b4',
    'changes' => 
    array (
      '3.1.11-RC1' => 'Added force_softdelete_allowed var',
    ),
  ),
  'core.viewtopic_modify_post_row' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 2155,
    ),
    'description' => 'Modify the posts template block',
    'description_wrapped' => 
    array (
      0 => 'Modify the posts template block',
    ),
    'name' => 'core.viewtopic_modify_post_row',
    'tooltip_id' => 'stt_873a3f0c',
    'vars' => 
    array (
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'current_row_number' => 
      array (
        'type' => 'int',
        'description' => 'Number of the post on this page',
      ),
      'end' => 
      array (
        'type' => 'int',
        'description' => 'Number of posts on this page',
      ),
      'total_posts' => 
      array (
        'type' => 'int',
        'description' => 'Total posts count',
      ),
      'poster_id' => 
      array (
        'type' => 'int',
        'description' => 'Post author id',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original post and user data',
      ),
      'cp_row' => 
      array (
        'type' => 'array',
        'description' => 'Custom profile field data of the poster',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'List of attachments',
      ),
      'user_poster_data' => 
      array (
        'type' => 'array',
        'description' => 'Poster\'s data from user cache',
      ),
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the post',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'user_cache' => 
      array (
        'type' => 'array',
        'description' => 'Array with cached user data',
      ),
      'post_edit_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with post edited list',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-a3' => 'Added vars start, current_row_number, end, attachments',
      '3.1.0-b3' => 'Added topic_data array, total_posts',
      '3.1.0-RC3' => 'Added poster_id',
      '3.2.2-RC1' => 'Added user_cache and post_edit_list',
    ),
  ),
  'core.viewtopic_post_row_after' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 2252,
    ),
    'description' => 'Event after the post data has been assigned to the template',
    'description_wrapped' => 
    array (
      0 => 'Event after the post data has been assigned to the',
      1 => 'template',
    ),
    'name' => 'core.viewtopic_post_row_after',
    'tooltip_id' => 'stt_11522881',
    'vars' => 
    array (
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start item of this page',
      ),
      'current_row_number' => 
      array (
        'type' => 'int',
        'description' => 'Number of the post on this page',
      ),
      'end' => 
      array (
        'type' => 'int',
        'description' => 'Number of posts on this page',
      ),
      'total_posts' => 
      array (
        'type' => 'int',
        'description' => 'Total posts count',
      ),
      'row' => 
      array (
        'type' => 'array',
        'description' => 'Array with original post and user data',
      ),
      'cp_row' => 
      array (
        'type' => 'array',
        'description' => 'Custom profile field data of the poster',
      ),
      'attachments' => 
      array (
        'type' => 'array',
        'description' => 'List of attachments',
      ),
      'user_poster_data' => 
      array (
        'type' => 'array',
        'description' => 'Poster\'s data from user cache',
      ),
      'post_row' => 
      array (
        'type' => 'array',
        'description' => 'Template block array of the post',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
    ),
    'since' => '3.1.0-a3',
    'changes' => 
    array (
      '3.1.0-b3' => 'Added topic_data array, total_posts',
    ),
  ),
  'core.viewtopic_modify_quick_reply_template_vars' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 2379,
    ),
    'description' => 'Event after the quick-reply has been setup',
    'description_wrapped' => 
    array (
      0 => 'Event after the quick-reply has been setup',
    ),
    'name' => 'core.viewtopic_modify_quick_reply_template_vars',
    'tooltip_id' => 'stt_210c5295',
    'vars' => 
    array (
      'tpl_ary' => 
      array (
        'type' => 'array',
        'description' => 'Array with template data',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
    ),
    'since' => '3.2.9-RC1',
  ),
  'core.viewtopic_modify_page_title' => 
  array (
    'locations' => 
    array (
      'viewtopic.php' => 2416,
    ),
    'description' => 'You can use this event to modify the page title of the viewtopic page',
    'description_wrapped' => 
    array (
      0 => 'You can use this event to modify the page title of',
      1 => 'the viewtopic page',
    ),
    'name' => 'core.viewtopic_modify_page_title',
    'tooltip_id' => 'stt_f66d2194',
    'vars' => 
    array (
      'page_title' => 
      array (
        'type' => 'string',
        'description' => 'Title of the viewtopic page',
      ),
      'topic_data' => 
      array (
        'type' => 'array',
        'description' => 'Array with topic data',
      ),
      'forum_id' => 
      array (
        'type' => 'int',
        'description' => 'Forum ID of the topic',
      ),
      'start' => 
      array (
        'type' => 'int',
        'description' => 'Start offset used to calculate the page',
      ),
      'post_list' => 
      array (
        'type' => 'array',
        'description' => 'Array with post_ids we are going to display',
      ),
    ),
    'since' => '3.1.0-a1',
    'changes' => 
    array (
      '3.1.0-RC4' => 'Added post_list var',
    ),
  ),
);
