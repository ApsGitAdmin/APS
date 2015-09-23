
aps Unload
------------------------
by Moz


Description
-----------
Small module to provide a popup which fires before leaving pages, and access to a rule which is fired when leaving a page which by default requires the node ID being viewed and the logged in user.

NOTE: The intention behind this module is that you can use parts of this code in your own custom module, you don't need to/shouldn't modify this module at all. 

Usage
-----
You will need to add 2 parts to the module to make this work, the first is code in the .module file to call the javascript library

<-- To call the popup before leaving the page -->
In your hook you are using to add the code (eg hook_node_view, hook_form_alter etc), add this line

	aps_onbeforeunload_add_js();

This will initiate the library, now you need to call a use for the code, as this line on it's own doesn't do anything, it simply provides access to the functions.

In your module, create a new javascript file and reference it after the above line, eg

	drupal_add_js(drupal_get_path('module', 'MYMODULE') . '/path/to/js/file.js');

if you wish to provide information to the code, you can add them to the Drupal javascript settings information like this

	drupal_add_js(array('MYFUNCTION' => array('var1' => $variable1, 'var2' => $variable2)), 'setting');


In your javascript file, you can now make use of what your code will do

	// This will add the callback for your code, you need to make sure that you don't have duplicate
	// callback names, in this instance, MYCALLBACK. It doesn't have to be named after your module, but
	// it will need to be unique, or your code will find it's duplicate, and not add your code.
	Drupal.behaviors.MYMODULE  = {
	  	attach: function(context) {
		  	if (!Drupal.onBeforeUnload.callbackExists('MYCALLBACK')) {
		    	Drupal.onBeforeUnload.addCallback('MYCALLBACK', Drupal.MYFUNCTION);
		  	};
		}
	};

	// This function can ONLY return a string, and this string will be the text that appears in the popup
	// but you can reference provided variables. You can also do if statements and such on these variables
	// if required.
	Drupal.MYFUNCTION = function() {
		var var1 = Drupal.settings.MYFUNCTION.var1;
		var var2 = Drupal.settings.MYFUNCTION.var2;

	    return 'This is var1: ' + var1 + ', and this is var2: ' + var2;
	};


<-- To execute a function when leaving the page -->
This is slightly different to the other code as you can do other functions on your site if necessary, it doesn't have to be limited to a string of text, but it does mean you have to write it yourself.

As before, in your hook use this code to add the library to the site when applicable, and link to your javascript file and provide variables if necessary.

	aps_onunload_add_js();
	drupal_add_js(drupal_get_path('module', 'OTHERMODULE') . '/path/to/js/file.js');
	drupal_add_js(array('OTHERFUNCTION' => array('var1' => $variable1, 'var2' => $variable2)), 'setting');

Call your new code in your javascript file to add the callback.

	
	Drupal.behaviors.OTHERMODULE  = {
	  	attach: function(context) {
		  	if (!Drupal.unload.callbackExists('OTHERCALLBACK')) {
		    	Drupal.unload.addCallback('OTHERCALLBACK', Drupal.OTHERFUNCTION);
		  	};
		}
	};

	// To add a callback to a specific URL (which you can then call a rule from etc). Be aware that the
	// URL this example is hitting is expecing var1 to be the Node ID, and var2 to be the User UID.
	Drupal.OTHERFUNCTION = function() {
	  	var var1 = Drupal.settings.OTHERFUNCTION.var1;
		var var2 = Drupal.settings.OTHERFUNCTION.var2;
		$.ajax({
		    url: Drupal.settings.basePath + 'ajax/aps_unload/' + var1 + '/' + var2,
		    dataType: 'json',
			type: 'POST',
			async: false,
		});
	};