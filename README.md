# phpBB Extension - marttiphpbb Show phpBB Events

[Topic on phpBB.com](https://www.phpbb.com/community/viewtopic.php?f=456&t=2470356)

**This extension is a helper tool for developing (other extenstions and styles). It should not be used on a live forum.**

**This extension was formerly called "Template Events", but since it shows now also the PHP events it has been renamed.**

This phpBB extension for developers shows all core phpBB template and PHP events in the board. The template events are rendered at their location as black labels. The PHP events triggered on the page are shown at the bottom in order of occurance. All template and PHP events are linked to their location in the [phpBB github repository](https://github.com/phpbb/phpbb) so their context can be easily reviewed.

## Requirements

* phpBB 3.3+
* PHP 7.1+

## Quick Install

You can install this on the latest release of phpBB 3.3 by following the steps below:

* Create `marttiphpbb/showphpbbevents` in the `ext` directory.
* Download and unpack the repository into `ext/marttiphpbb/showphpbbevents`
* Enable `Show phpBB Events` in the ACP at `Customise -> Manage extensions`.

## Uninstall

* Disable `Show phpBB Events` in the ACP at `Customise -> Extension Management -> Extensions`.
* To permanently uninstall, click `Delete Data`. Optionally delete the `/ext/marttiphpbb/showphpbbevents` directory.

## Support

* Report bugs and other issues to the [Issue Tracker](https://github.com/marttiphpbb/phpbb-ext-showphpbbevents/issues).

## License

[GPL-2.0](license.txt)

## Screenshots

### Template Events

With the buttons in the upper left corner you can toggle between hiding and showing the events.

![Select buttons](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/btns.png)

You can choose to show small badges or badges with the full name of the events inside it.

![Full template event badges](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/btn_full.png)

When you hover with the mouse cursor over an "event badge", a tooltip pops up with information.

![Small template event badges](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/small.png)

When you click on the badge, you are redirected to the file and line where the event is in the phpBB code (on Github).

![Link to code on Github](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/github.png)

Some events occur multiple times in the phpBB core code. These locations are listed in the tooltip, with the current location marked. You can enter the tooltip with the mouse pointer and click on any of the file locations to inspect the core code.

![Links to multiple files](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/multi_file.png)

Some events occur more than once in one file. The line numbers are listed in parentheses after the filename. (The link is to the first occurence in the file.)

![Multiple lines](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/multi_line.png)

### PHP Events

At the bottom of the page you'll find all core phpBB PHP events in order and number of times they were invoked on the page rendering.
Same as the template events, you can click on the filename to inspect the code.

![PHP events](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/php_ev.png)

When you click on a row in the phpBB PHP events table, a tooltip with more information pops up. All the variables that are passed to the PHP event are listed with their types.

![PHP events tooltip](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/php_tooltip.png)

### ACP

Also in the ACP you can inspect template and PHP events.

![ACP](https://raw.githubusercontent.com/marttiphpbb/ext-showphpbbevents/master/doc/acp.png)
