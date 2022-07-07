(function() {
    var elements;
    var elementright;
    var elementleft;
    var windowHeight;
  
    function init() {
      elements = document.querySelectorAll('#animationUp');
      elementright = document.querySelectorAll('#animationRight');
      elementleft = document.querySelectorAll('#animationLeft');

      windowHeight = window.innerHeight;
    }
  
    function checkPosition() {
      for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var positionFromTop = elements[i].

        getBoundingClientRect().top;
  
        if (positionFromTop - windowHeight <= -300) {
          element.classList.add('animation-up');
          element.classList.remove('hidden-animation');
        }
      }
    }
    function checkPositionRight() {
        for (var i = 0; i < elementright.length; i++) {
          var elementRight = elementright[i];
          var positionFromTop = elementright[i].
  
          getBoundingClientRect().top;
    
          if (positionFromTop - windowHeight <= -200) {
            elementRight.classList.add('animation-right');
            elementRight.classList.remove('hidden-animation');
          }
        }
      }
      function checkPositionLeft() {
        for (var i = 0; i < elementleft.length; i++) {
          var elementLeft = elementleft[i];
          var positionFromTop = elementleft[i].
  
          getBoundingClientRect().top;
    
          if (positionFromTop - windowHeight <= -200) {
            elementLeft.classList.add('animation-left');
            elementLeft.classList.remove('hidden-animation');
          }
        }
      }
  
    window.addEventListener('scroll', checkPosition);
    window.addEventListener('scroll', checkPositionRight);
    window.addEventListener('scroll', checkPositionLeft);
    window.addEventListener('resize', init);
  
    init();
    checkPosition();
  })();