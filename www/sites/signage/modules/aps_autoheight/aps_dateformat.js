(function($) {
  $(window).ready(function(){
    $('.date-display-single').text(function(i,v){return v.replace('(','')});
    $('.date-display-single').text(function(i,v){return v.replace(')','')});
    $('.date-display-single').text(function(i,v){return v.replace('to','-')});
  });
})(jQuery);