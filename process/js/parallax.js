$(document).ready(function(){

  var $window = $(window);

  var startLogo = $('article[data-type="logo"]').position().top; // logo position on page ready

  $('section[data-type="background"]').each(function(){
    var $bgobj = $(this); // assigning the object

    $window.scroll(function() {
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

       // background position
       var coords = '50% '+ yPos + 'px';

       // Move the background
       $bgobj.css({ backgroundPosition: coords });
    });
  });

  $('article[data-type="logo"]').each(function(){
    var $logo = $(this); // assigning the object
    var start = 5; // this is the percent position defined in the css

    $window.scroll(function() {

      var yPos = $window.scrollTop();
      var speed = .6;
    
      var logoTop = startLogo - yPos * speed;

      $logo.css({ top: logoTop });
    });
  });
});
