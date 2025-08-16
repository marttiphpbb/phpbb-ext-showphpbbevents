;(function($, window, document) {
	$('document').ready(function(){
		$('ul > a.showphpbbevents, ol > a.showphpbbevents').wrap('<li></li>');

		$('select > option[data-showphpbbevents-option]')
		.each(function(){
			let data = $(this).data('showphpbbevents-option');
			$('<a></a>')
				.attr('href', data['link'])
				.attr('data-showphpbbevents-tpl', data['tooltip_id'])
				.addClass('showphpbbevents-option')
				.text($(this).data('showphpbbevents-label'))
				.insertAfter($(this).parent());
		});

		tippy('[data-showphpbbevents-php]', {
			content(reference) {
				const id = reference.getAttribute('data-showphpbbevents-php');
				const template = document.getElementById(id);
				return template.innerHTML;
			},
			appendTo: () => document.body,
			ignoreAttributes: true,
			inlinePositioning: true,
			allowHTML: true,
			interactive: true,
			interactiveBorder: 3,
			interactiveDebounce: 10,
			offset: [0, 5],
			zIndex: 9999,
			maxWidth: 'none',
			trigger: 'click',
			followCursor: 'horizontal',
		});

		tippy('[data-showphpbbevents-tpl]', {
			content(reference) {
				const id = reference.getAttribute('data-showphpbbevents-tpl');
				const template = document.getElementById(id);
				return template.innerHTML;
			},
			appendTo: () => document.body,
			ignoreAttributes: true,
			inlinePositioning: true,
			allowHTML: true,
			interactive: true,
			interactiveBorder: 3,
			interactiveDebounce: 10,
			offset: [0, 8],
			zIndex: 9999,
			maxWidth: 'none',
		});
	});

})(jQuery, window, document);
