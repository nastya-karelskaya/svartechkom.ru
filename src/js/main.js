"use strict";

function init() {
  
  var menuItems = document.querySelectorAll('.menu .menu-item');
  //console.log(menuItems);
  //console.log(menuItems[1]);

  for(var i=0; i<5; i++) {
    menuItems[i].addEventListener('mouseover', markAsActive);

    menuItems[i].addEventListener('mouseout', markAsNotActive);
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
  // document.querySelector('.menu-item .current').classList.remove("active");

  



  



  // var itemText = this.querySelector('.menu-item__txt a');

  // itemText.style.color = "#000000";

  //console.log(itemText);





//   var appDiv = document.querySelector('.show-full-img');
//   var isFullImgExists = document.querySelector('.show-full-img');
  
//   //appDiv.innerHTML = ""; 

//   // var image = document.querySelector('.slider__img');
//   var imgFullSrc = event.target.src;
//   var srcArr = imgFullSrc.split('/');
//   var imgSrc = 'img/' + srcArr[srcArr.length - 1]; 

  
//  //fullImg.src = imgSrc;


//     fullImg.src = imgSrc;

//     appDiv.appendChild(fullImg);
}








/************************************************ */

window.onload = init;











