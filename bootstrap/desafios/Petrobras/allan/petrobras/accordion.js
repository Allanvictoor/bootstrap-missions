$(document).ready(function() {
	var COLLAPSED = 'collapsed';
	var EXPANDED = 'expanded';

	$('[data-accord]').each(function() {
		var elAccord = $(this);
		var elToggle = elAccord.find('[data-accord-toggle]');
		var elContent = elAccord.find('[data-accord-content]');

		elToggle.click(function() {
			if(elContent.attr('data-accord-content') == COLLAPSED) {
				elContent.stop().slideDown();
				elContent.attr('data-accord-content', EXPANDED);
			} else {
				elContent.stop().slideUp();
				elContent.attr('data-accord-content', COLLAPSED);
			}
		});
	});
});
