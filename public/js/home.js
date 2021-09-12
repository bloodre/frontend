var slideIndex = 1;

$(function(){
  showSlides(slideIndex);
  let width = $(window).width();

  //Bootstrap Carousel\\
  $('.carousel[data-type="multi"] .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
  
    // We set the number of slide according to the viewport width
    var n = 3;

    if(767 <= width){
      next.children(':first-child').clone().appendTo($(this));
    }
    if (width < 767) {
      n = 1; // one slide
    }
    else if (767 <= width && width < 992) {
      n = 2;
    }

    for (let i=1;i<n;i++) {
      next=next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      
      next.children(':first-child').clone().appendTo($(this));
    }
  });

  // pin-button code \\

  $('.pin-button').addClass('pin-button-shadow'); 

  $('.pin-button').click(function(){
    $('[name="'+$(this).attr('name')+'"]').children().toggle();
    $(this).toggleClass('pin-button-shadow');
  });

  // Checkbox for search boxes \\
  $('.selected').click(function(){
    $(this).toggle();
    $(this).siblings('.not-selected').toggle();
  });
  $('.not-selected').click(function(){
    $(this).toggle();
    $(this).siblings('.selected').toggle();
  });

  // For changing the color of text within the AT/MT toggle switch
  $('.switch-button').click(function(){
    $(this).toggleClass('active');
    console.log($(this).children('[name="AT"]'));
    $(this).children('[name="AT"]').toggleClass('active');
  });

  // Scroll to top
  $('#scrolltop').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
  
  //Align vertically the search bar
  if(992<width){
    let new_margin = $('#typesearch').height() - $('#makersearch').height() - $('#wordsearch').height();
    if(0<new_margin){
      $('#wordsearch').css('margin-top',new_margin+'px');
    }
    else{
      let margin_top = parseFloat($('#wordsearch').css('margin-top').split('p')[0]);
      new_margin = margin_top+$('#makersearch').height() + $('#wordsearch').height();
      $('#typesearch').height(new_margin+'px');
    }
  }
  
    
})


// Slideshow image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = $(".mySlides");


    var dots = $(".dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides.eq(i).hide();
    }
    for (i = 0; i < dots.length; i++) {
        dots.eq(i).removeClass('active');
    }
    slides.eq(slideIndex-1).css('opacity',0.4);
    slides.eq(slideIndex-1).fadeTo(1500,1);
    dots.eq(slideIndex-1).addClass('active');
}


