(function($) {
	Drupal.behaviors.aps_testing  = {
	  	attach: function(context) {
		  	if (!Drupal.unload.callbackExists('aps_testing')) {
		    	Drupal.unload.addCallback('aps_testing', Drupal.apsTesting);
		  	};
		}
	};

	Drupal.apsTesting = function() {
		var browser = $.browser;
		$.ajax({
		    url: Drupal.settings.basePath + 'ajax/aps_unload/browser/' + browser,
		    dataType: 'json',
			type: 'POST',
			async: false,
		});
	};
})(jQuery);