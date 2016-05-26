/**
 * @file
 * JavaScript settings for jQuery simpleWeather plugin.
 *
 * Download simpleWeather jQuery plugin: http://simpleweatherjs.com.
 * Read README.txt for installation instructions.
 */
(function($) {
  $(document).ready(function() {
    /* Block Settings */
    var woeid = Drupal.settings.aps_simpleweather.woeid;
    var imgRoot = Drupal.settings.aps_simpleweather.theme_path;

    delete Drupal.settings.aps_simpleweather.woeid;
    delete Drupal.settings.aps_simpleweather.theme_path;

    var setup = [];
    $.each(Drupal.settings.aps_simpleweather, function(key, value) {
      setup.push(value);
    });

    /* The simple weather widget settings */
    $.simpleWeather({
      woeid: woeid,
      zipcode: '',
      location: '',
      unit: 'c',
      success: function(weather) {
        html = '<table class="weather-table"><tbody>';
       
        if (setup.length > 1) {
          var rowSpan = 'rowspan="' + (setup.length - 1) +'"';
        } else {
          var rowSpan = '';
        }
        
        for (var i = 0; i < setup.length; i++) {
          var value = setup[i];
          var tdClass = "weather-block-" + value.replace(/[^a-zA-Z 0-9]+/g, '').toLowerCase();

          if ($.inArray('code', setup) !== -1) {
            var cellStart = '<td class="' + tdClass + '">';
            var cellEnd = '</td></tr>';
          } else {
            var cellStart = '<tr><td class="' + tdClass + '">';
            var cellEnd = '</td></tr>';
          }

          if (setup[i] == 'code') {
            html += '<td ' + rowSpan + ' class="' + tdClass + '"><div class="weather-block-image"><img src="' + imgRoot + '/images/simpleweather/' + weather.code + '.png"></div></td>';
          } else if (setup[i] == 'temp') {
            html += cellStart + weather[value] + '&deg; ' + weather.units.temp + cellEnd;
          } else if (setup[i] == 'alt.temp') {
            html += cellStart + weather.alt.temp + '&deg; ' + weather.alt.unit + cellEnd;
          } else {
            html += cellStart + weather[value] + cellEnd;
          }

        };
        html += '</tbody></table>';

        $("#simple-weather").html(html);
      },
      error: function(error) {
        $("#simple-weather").html('<p>' + error + '</p>');
      }
    });
  });
})(jQuery);
