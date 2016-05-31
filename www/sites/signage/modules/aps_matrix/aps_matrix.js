(function($) {
  var scrollWidth = getScrollBarWidth();

  function matrixSize() {
    var matrices = $('table.aps-matrix-grid');

    matrices.each(function(i, v) {
      var matrix = $(matrices[i]);

      // Get the available with of the table
      var space = matrix.width() - scrollWidth - 101;
      var headerCells = matrix.find('thead').children();
      var bodyCells = matrix.find('tbody tr:first');
      var cellSizes = [];

      headerCells.each(function(i, v) {
        var header = $(v).children('th.screen.header');
        var headerCount = header.length;

        for (var h = header.length - 1; h >= 0; h--) {
          colSpan = $(header[h]).attr('colspan');
          screenWidth = Math.ceil(space / headerCount);
          
          for (var x = colSpan - 1; x >= 0; x--) {
            cellSize = Math.floor(screenWidth / colSpan);
            cellSizes.unshift(cellSize);
          };

          $(header[h]).width(screenWidth);
        };
      }); 

      headerCells.each(function(i, v) {
        var rooms = $(v).children('th.room.header');
        var roomCount = rooms.length;

        for (var r = rooms.length - 1; r >= 0; r--) {
          roomWidth = (cellSizes[r]);

          $(rooms[r]).width(roomWidth);
        };
      });

      bodyCells.each(function(i, v) {
        var cells = $(v).children('td');
        var cellCount = cells.length;

        for (var c = cells.length - 1; c >= 0; c--) {
          cellWidth = (cellSizes[c]);

          $(cells[c]).width(cellWidth);
        };
      });

    });
  }

  function getScrollBarWidth () {
    var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
    widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
    $outer.remove();
    return 100 - widthWithScroll;
  };

  $(window).ready(function(){
    matrixSize();
  });

  $(window).resize(function(){
    matrixSize();
  });
})(jQuery);