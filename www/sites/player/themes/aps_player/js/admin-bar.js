(function($) {
    $('#admin-bar-tab').click(function() {
        $(this).siblings('.admin-content').slideToggle(400);
    });
})(jQuery);