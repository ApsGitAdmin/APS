/**
 * @file
 * Provides an API to allow other modules use the unload event
 * of the browser window.
 *
 * Public methods of the Drupal.unload object:
 *
 * - addCallback(module, callback)
 *   Add an unload callback.
 *
 * - removeCallback(module)
 *   Remove an unload callback.
 *
 * - callbackExists(module)
 *   Check if a callback for a particular module exists.
 *
 * - enable()
 *   Enable the unload event handler.
 *
 * - disable()
 *   Disable the unload event handler.
 *
 * Note that any previously installed unload handler will still be
 * invoked by our window event handler. We should do this to prevent from
 * breaking the implementation of the one who installed its own before us.
 */

(function ($) {

/**
 * Drupal behavior for unload API.
 */
Drupal.behaviors.unload = {
  attach: function(context, settings) {
    var self = Drupal.unload;

    // Bind our window handler if not already bound.
    if (!self.processed) {
      // Ensure we do not repeat this process more than once.
      self.processed = true;

      // Save a reference to the previous unload handler.
      if (typeof window.onunload == 'function') {
        self._previousWindowHandler = window.onunload;
      }

      // Now, bind our window handler for the unload event.
      window.onunload = self._windowHandler;

      // Finally, enable our event handler.
      self.enable();
    }
  }
};

/**
 * Global unload object.
 */
Drupal.unload = Drupal.unload || {
  processed: false,
  _previousWindowHandler: null,
  _enabled: false,
  _callbacks: {}
};

/**
 * Global window handler for the unload event.
 */
Drupal.unload._windowHandler = function(event) {
  var module, callback, result, results = [];
  var self = Drupal.unload;

  // Invoke any previous unload handler and save its result.
  if (typeof self._previousWindowHandler == 'function') {
    result = self._previousWindowHandler(event);
    if (typeof result == 'string') {
      results.push(result);
    }
  }

  // If enabled, invoke all our installed unload callbacks.
  if (self._enabled) {
    for (module in self._callbacks) {
      result = (self._callbacks[module])();
      if (typeof result == 'string') {
        results.push(result);
      }
    }
  }

  // If we got any results, then we'll return them concatenated.
  // This will fire up a confirmation alert to the user that's
  // implemented by the browser itself (it cannot be themed).
  if (results.length > 0) {
    return results.join('\n');
  }
};

/**
 * Add an unload callback.
 *
 * Note that it is only possible to add one callback per module.
 * It is up to the module implementing the callback itself to
 * perform any additional tasks it may need.
 *
 * @param module
 *   The name of the module that adds the unload callback.
 * @param callback
 *   A function that will be called without arguments by our
 *   global unload handler.
 * @return
 *   TRUE if the callback was successfully added, FALSE otherwise.
 */
Drupal.unload.addCallback = function(module, callback) {
  if (typeof module == 'string' && typeof callback == 'function') {
    this._callbacks[module] = callback;
    return true;
  }
  return false;
};

/**
 * Remove an unload callback.
 *
 * @param module
 *   The name of the module.
 * @return
 *   TRUE if the callback was successfully removed, FALSE otherwise.
 */
Drupal.unload.removeCallback = function(module) {
  if (typeof this._callbacks[module] == 'function') {
    delete this._callbacks[module];
    return true;
  }
  return false;
};

/**
 * Check if a callback for a particular module exists.
 *
 * @param module
 *   The name of the module.
 * @return
 *   TRUE if the callback exists, FALSE otherwise.
 */
Drupal.unload.callbackExists = function(module) {
  return (typeof this._callbacks[module] == 'function');
};

/**
 * Disable the unload event handler.
 */
Drupal.unload.disable = function() {
  this._enabled = false;
};

/**
 * Enable the unload event handler.
 */
Drupal.unload.enable = function() {
  this._enabled = true;
};

})(jQuery);