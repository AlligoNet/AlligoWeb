$(document).ready(function() {
  $(window).scroll(function(){
    var anchor = $(".anchor").offset().top;
    if($(this).scrollTop() > anchor - 50) {
      var anchorColor = $(".anchor").css('backgroundColor');
      $('.navigation').css({"backgroundColor":anchorColor});
    } else {
      $('.navigation').css({"backgroundColor":"rgba(0,0,0,0.5)"});
    }
  });
  
  
  
  $("#login, #login").click(function() {
    $(".modal.login").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $("#register, #register").click(function() {
    $(".modal.register").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $(".cover").click(function() {
    $(".modal.active").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  
  $("#controlPanel, #controlPanel").click(function() {
    $(".modal.controlPanel").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $("#delete, #delete").click(function() {
    $(".modal.delete").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  $("#pwChange, #pwChange").click(function() {
    $(".modal.pwChange").toggleClass("active");
    $(".cover").toggleClass("active");
  });
  
  $(".messagebox").css('left','25px');
  setTimeout(function(){ $(".messagebox").css('bottom','-125px'); $(".messagebox").css('opacity','0'); },12000)
});
