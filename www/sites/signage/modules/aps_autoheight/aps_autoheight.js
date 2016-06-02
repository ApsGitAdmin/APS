
(function($) {
  function setSize() {
    var meetings = document.querySelectorAll('.display-row');
    var meetingRows = document.querySelectorAll('.meeting-row');
    var rows = meetingRows.length;
    var usedHeight = 0;
    var margin = 0;
    var guttering = 0;

    usedHeight = 0;
    usedHeight -= $('.screen-display').position().top;
    for (var i = 0; i < meetings.length; i++) {
      // Removes the stupid span html
      usedHeight += $(meetings[i]).height();
    }
    freeHeight = Math.floor(($(window).height() - usedHeight));

    if (freeHeight > 0) {
      // Sets the margin
      margin = Math.floor(freeHeight * 0.4);

      // Sets the guttering
      guttering = Math.floor((freeHeight - (margin * 2)) / (meetings.length * 2));
      
      // Apply the gutterings
      $('.screen-display > table .meeting-info').css({'padding-top': guttering+'px', 'padding-bottom': guttering+'px'});

      // Apply the margins
      $('.screen-display').css({'padding-top': margin+'px'});
    } else {
      // Get the current font-size and reduce it slightly
      fontSize = parseFloat($('.display-row').css('font-size'));
      fontSize = fontSize * 0.95;

      // Set the new font-size and try again
      $('.display-row').css({'font-size' : fontSize});

      setSize();
    }

    meetingSize = parseFloat($('table.meeting-row h3').css('font-size'));
    meetingSize = meetingSize + ((rows - 5) * 0.05);

    $('table.meeting-row h3').css({'font-size' : meetingSize});
  }

  $(window).ready(function(){
    //$('.meeting-info table').closest('tr').addClass('display-row');
    setSize();
    setInterval(setSize, 60000);
  });

  $(window).resize(function(){
    setSize();
  });
})(jQuery);