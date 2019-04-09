"use strict";

function init() {

  var burgerMenu = document.querySelector(' .header-burger');

  burgerMenu.addEventListener('click', function(event) {
    var fixedMenu = document.querySelector(' .fixed-menu');

    if(fixedMenu.classList.contains('opened')) {
      fixedMenu.style['margin-left'] = '-200px';
      fixedMenu.classList.remove('opened');
    }
    else {
      fixedMenu.classList.add('opened');
      fixedMenu.style['margin-left'] = 0;
    }
    


    
  });

  function stagesClicker(stageClassName) {
    var pistureSwitchers = document.querySelectorAll(' .'+ stageClassName +' .stages-item__slider .slider-item');
    
    var pisturePhoto = document.querySelector(' .'+ stageClassName +' .stages-item__photo');

    //console.log(stageClassName,pistureSwitchers);
    //console.log(menuItems[1]);

    if( pistureSwitchers.length != 0) {
      for(var i=0; i<3; i++) {
        if(pistureSwitchers[i] != null) {
          pistureSwitchers[i].addEventListener('click', function(event) {

            var currentSwitcher = document.querySelector(' .'+ stageClassName +' .stages-item__slider .slider-item.current');
            //console.log(currentSwitcher);
            currentSwitcher.classList.remove('current');
            
            this.classList.add('current');
  
  
            var pictureSrc = this.childNodes[1].src; 
            //console.log(pictureSrc);
            //console.log(pisturePhoto.childNodes[1].src);
            //pisturePhoto.childNodes[0].src = pictureSrc;
            pisturePhoto.childNodes[1].src = pictureSrc;
          });
        }
        
    
      
      }
    }

  }

  stagesClicker('anobject-stages__first');
  stagesClicker('anobject-stages__second');
  stagesClicker('anobject-stages__third');
  stagesClicker('anobject-stages__fourth');

  


  
  var menuItems = document.querySelectorAll('.menu .menu-item');
  console.log(menuItems);
  //console.log(menuItems[1]);

  if( menuItems.length != 0) {
    for(var i=0; i<5; i++) {
      menuItems[i].addEventListener('mouseover', markAsActive);
  
      menuItems[i].addEventListener('mouseout', markAsNotActive);
    }
  }

  


  var darkButtons = document.querySelectorAll('.button-c');

  for(var j=0; j<darkButtons.length; j++) {
    darkButtons[j].addEventListener('mouseover', markAsActive);

    darkButtons[j].addEventListener('mouseout', markAsNotActive);
  }

  var whiteButtons = document.querySelectorAll('.button-w');

  for(var k=0; k<whiteButtons.length; k++) {
    whiteButtons[k].addEventListener('mouseover', markAsActive);

    whiteButtons[k].addEventListener('mouseout', markAsNotActive);
  }


  var paginatorButtons = document.querySelectorAll('.paginator a');

  paginatorButtons.forEach(function(item, i, paginatorButtons) {
    item.addEventListener('mouseover', markAsActive);

    item.addEventListener('mouseout', markAsNotActive);
  });


  var servicesButtons = document.querySelectorAll('.services .services-item');

  servicesButtons.forEach(function(item, i, servicesButtons) {
    item.addEventListener('mouseover', markAsActive);

    item.addEventListener('mouseout', markAsNotActive);
  });

  var arrowButtons = document.querySelectorAll('.arrow');

  arrowButtons.forEach(function(item, i, arrowButtons) {
    item.addEventListener('mouseover', markAsActive);

    item.addEventListener('mouseout', markAsNotActive);
  });




  var anobjectButtons = document.querySelectorAll('.anobject-stages .slider-item');

  anobjectButtons.forEach(function(item, i, anobjectButtons) {
    item.addEventListener('mouseover', markAsActive);

    item.addEventListener('mouseout', markAsNotActive);
  });

  var objectButtons = document.querySelectorAll('.objects .button');

  for(var l=0; l<objectButtons.length; l++) {
    objectButtons[l].addEventListener('mouseover', function(event){
      var theParent = this.parentElement;

      if(theParent)
        theParent.classList.add('active');
      
    });

    objectButtons[l].addEventListener('mouseout', function(event){
      var theParent = this.parentElement;

      if(theParent)
        theParent.classList.remove('active');
      
    });
  }

  
}

// function markAsHovered(event) {

//   var linkButton = this.querySelector('a');

//   var buttonButton = this.querySelector(button);

//   if(linkButton) {
//     linkButton.style.'background-color' = 'blue';
//   }
// }

function markAsNotActive(event) { 

  this.classList.remove("active");
  // document.querySelector('.menu-item .current').classList.add("active");

  //var itemText = this.querySelector('.menu-item__txt a');

  //itemText.style.color = "#ffffff";
}

function markAsActive(event) {

  this.classList.add("active");
  
}








/************************************************ */

window.onload = init;











