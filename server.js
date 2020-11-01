var loadServerHTML = $.get("https://codepen.io/ronsparks/pen/b305ab0964929afc7f991c6812d22e75.html",  function(data) {
 var server = data; 
//  $('.rectangle').html(server);
})
.done(function(){ })
.fail(function() { })
.always(function(){ });
 
 
// Set another completion function for the request above
loadServerHTML.always(function() { /* alert( "second finished" );*/ });


//lets keep the animation going
window.setInterval(function(){
  makeActive()
}, 25000);

// kick things off ! 
$( document ).ready(function() {

  // KEY COMMANDS... why not

  
  
  //$('.rack').position().top - 100;
  $('.rectangle').fadeTo(0, 0);
  $('.main').hide().fadeIn(2000, function(){
      //Call back in anm function so I can make multi callbacks
      $('.rectangle').fadeTo(1600, 1);
      loadCols(1, 700);
      loadCols(2, 900);
      loadCols(4, 1000);
      loadCols(5, 800);

      makeActive();
  }  );
  
});

function makeActive(){
      flashBars()
      flashRecs();
      flashLights();
}

function loadCols(rackNumber, animDelay){
   $(".mainInner .col:nth-child(" + rackNumber + ")").delay( animDelay).fadeIn(animDelay+100); //.fadeOut(100).fadeIn(200).fadeOut(300).fadeIn(100);
}

function flashRecs(){
  $('.rectangle').each(function (index, value) { 
    randDelayTime = Math.floor(Math.random() * 20000) + 1000;
    randFade1 = Math.floor(Math.random() * 100) + 900;
    randFade2 = Math.floor(Math.random() * 100) + 900;
    randFade3 = Math.floor(Math.random() * 100) + 900;
    randFade4 = Math.floor(Math.random() * 100) + 900;
    randFade5 = Math.floor(Math.random() * 100) + 900;
//    $(this).fadeTo(1, 100);
    $(this).delay(randDelayTime).fadeTo(randFade1, .3).fadeTo(randFade2, .9).fadeTo(randFade3, .3).fadeTo(randFade4, .6).fadeTo(randFade5, 1);
  }); 
};


function flashLights(){
  $('.circle_small').each(function (index, value) { 
    randDelayTime = Math.floor(Math.random() * 10000) + 300;
    randFade1 = Math.floor(Math.random() * 100) + 300;
    randFade2 = Math.floor(Math.random() * 100) + 300;
    randFade3 = Math.floor(Math.random() * 100) + 300;
    randFade4 = Math.floor(Math.random() * 100) + 300;
//    $(this).fadeTo(1, 100);
    $(this).delay(randDelayTime).fadeIn(randFade1).fadeOut(randFade2).fadeIn(randFade3).fadeOut(randFade4).fadeIn( 100, function(){ 
    randChanceFastFlash(  $(this), 4, '#9027a9' );
  }) ;
  }); 
};

$('.circle_small_2').each(function (index, value) { 
    randDelayTime = Math.floor(Math.random() * 10000) + 300;
    randFade1 = Math.floor(Math.random() * 100) + 300;
    randFade2 = Math.floor(Math.random() * 100) + 300;
    randFade3 = Math.floor(Math.random() * 100) + 300;
    randFade4 = Math.floor(Math.random() * 100) + 300;
//    $(this).fadeTo(1, 100);
    $(this).delay(randDelayTime).fadeIn(randFade1).fadeOut(randFade2).fadeIn(randFade3).fadeOut(randFade4).fadeIn(100);
  }); 

$('.circle_small_3').each(function (index, value) { 
    randDelayTime = Math.floor(Math.random() * 10000) + 300;
    randFade1 = Math.floor(Math.random() * 100) + 300;
    randFade2 = Math.floor(Math.random() * 100) + 300;
    randFade3 = Math.floor(Math.random() * 100) + 300;
    randFade4 = Math.floor(Math.random() * 100) + 300;
//    $(this).fadeTo(1, 100);

  
  $(this).delay(randDelayTime).fadeIn(randFade1).fadeOut(randFade2).fadeIn(randFade3).fadeOut(randFade4).fadeIn( 100, function(){ 
    randChanceFastFlash(  $(this) );
  }) ;



  }); 


// randomly do a faster flash :)
function randChanceFastFlash(thisObj, chanceRange = 2, colorChange = '#6afcfc'){
  
  var oneOrZero = 1 + Math.floor(Math.random() * chanceRange);
   
   if(oneOrZero == 1) {
      
       $(thisObj).css('background-color', colorChange);
        
      $(thisObj).fadeIn(100).fadeOut(200).fadeIn(100).fadeOut(200).fadeIn(200).fadeOut(200).fadeIn(100).fadeOut(200).fadeIn(100).fadeOut(200).fadeIn(200, function(){ 
       turnLightOff(  $(this) ) }); 
   }
   
}

function turnLightOff(thisObj){ 
  //random chance to turn off or stay on 
  var oneOrZero = 1 + Math.floor(Math.random() * 2);
   
   if(oneOrZero == 1) {
    $(thisObj).css('background-color', '#353452'); 
   }  
}

// lots of copy and paste because I'm too lazy to be lazy! 
function flashBars(){
  $('.bar_item').each(function (index, value) { 
  
      var oneToFive= 1 + Math.floor(Math.random() * 5);
      
   
   if(oneToFive <= 3 ) {
      randDelayTime = Math.floor(Math.random() * 20000) + 1000;
      randFade1 = Math.floor(Math.random() * 100) + 900;
      randFade2 = Math.floor(Math.random() * 100) + 900;
      randFade3 = Math.floor(Math.random() * 100) + 900;
      randFade4 = Math.floor(Math.random() * 100) + 900;
      $(this).delay(randDelayTime).fadeIn(randFade1).fadeOut(randFade2).fadeIn(randFade3).fadeOut(randFade4).fadeIn(100);
   }
  }); 
};

function flashTinydots(){
  $('.bar_item').each(function (index, value) { 
   // loop through each character
   // make random flash
  }); 
};





$(document).keypress(checkKey);

function checkKey(code){
 console.log(code.keyCode);
  
    if(code.keyCode == 113){   
      $('.circle_small').fadeOut(400).delay(500).fadeIn(1000).css('background-color',  '#6afcfc');   
    }

if(code.keyCode == 119){   
      $('.circle_small').css('background-color',  '#353452');   
    }
  
 if(code.keyCode == 114){   
      $('.circle_small').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).addClass('redAlert');
      $('.circle_small_2').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).addClass('redAlert');
      $('.circle_small_3').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).addClass('redAlert');
 } 

   if(code.keyCode == 116){ 
   $('.circle_small').removeClass('redAlert');
   $('.circle_small_2').removeClass('redAlert');
   $('.circle_small_3').removeClass('redAlert');
   }
  
}

