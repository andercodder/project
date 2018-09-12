
$(document).ready(function () {
      // sticky navigation
      $('.js--main-about').waypoint(function (direction) {
            if (direction == "down") {
                  $('nav').addClass('sticky');
            } else {
                  $('nav').removeClass('sticky');
            }
      }, {
                  offset: '50%'
             })
});
