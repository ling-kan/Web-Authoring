$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
   // The speed of the fade out
    .fadeOut(6000)
   // Transition to the next image
    .next()
    // The speed of the fade in
    .fadeIn(6000)
    // The loop to go repeat the slideshow
    .end()
    .appendTo('#slideshow');
},  6000);

       
        