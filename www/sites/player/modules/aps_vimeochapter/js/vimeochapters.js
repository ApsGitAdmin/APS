/**
 * @file
 * Turns all .timecode links into vimeo chapter URLs
 */

(function ($) {
  // Listen for the ready event for any vimeo video players on the page
    var vimeoPlayers = document.querySelectorAll('iframe');

    for (var i = 0, length = vimeoPlayers.length; i < length; i++) {
        player = vimeoPlayers[i];
        $f(player).addEvent('ready', ready);
    }

    /**
     * Utility function for adding an event. Handles the inconsistencies
     * between the W3C method for adding events (addEventListener) and
     * IE's (attachEvent).
     */
    function addEvent(element, eventName, callback) {
        if (element.addEventListener) {
            element.addEventListener(eventName, callback, false);
        } else {
            element.attachEvent('on' + eventName, callback);
        }
    }

    /**
     * Called once a vimeo player is loaded and ready to receive
     * commands. You can add events and make api calls only after this
     * function has been called.
     */
    function ready(player_id) {
        // Keep a reference to Froogaloop for this player
        var froogaloop = $f(player_id);

        // Call seekTo when seek button clicked
        var vimeoChapters = document.querySelectorAll('.timecode');
        for (var i = 0, length = vimeoChapters.length; i < length; i++) {
            addEvent(vimeoChapters[i], 'click', function(e) {
                // Don't do anything if clicking on anything but the button (such as the input field)
                if (e.target != this) {
                    return false;
                }

                // Grab the value in the input field
                var seekVal = $(this).data('seek');

                // Call the api via froogaloop
                froogaloop.api('seekTo', seekVal);
            }, false);

        }

        froogaloop.addEvent('finish', function(data) {
            // When the video has finished
        });
    }

})(jQuery);