var slideIndex = 1;

$(function(){
  showSlides(slideIndex);

  //Bootstrap Carousel\\
  $('.carousel[data-type="multi"] .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
  
    for (var i=0;i<2;i++) {
      next=next.next();
      if (!next.length) {
        next = $(this).siblings(':first');
      }
      
      next.children(':first-child').clone().appendTo($(this));
    }
  });

  $('.pin-button').click(function(){
    console.log($(this).attr('name'));
    $('[name="'+$(this).attr('name')+'"]').children().toggle(100);
  });

  $('.selected').click(function(){
    $(this).toggle();
    $(this).siblings('.not-selected').toggle();
  });
  $('.not-selected').click(function(){
    $(this).toggle();
    $(this).siblings('.selected').toggle();
  });
  
    
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


