$(document).ready(function() {
  $(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $('.navbar').css({
        "top": "0"
      });
    } else {
      $('.navbar').css({
        "top": "-50px"
      });
    }
  });
});