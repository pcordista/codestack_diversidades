
$(document).ready(function () {

  $('#slider-principal').slider();
  $('select').material_select();
  $('.parallax').parallax();



  $(window).scroll(function () {

    //After scrolling 100px from the top...
    if ($(window).scrollTop() >= 500) {
      $('.menu').css('background-color', 'rgba(173,173,173,.8)');

      //Otherwise remove inline styles and thereby revert to original stying
    } else {
      $('.menu').css('background-color', 'transparent');

    }
  });

  var swiper = new Swiper('.swiper-novidades', {
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-novidade-next',
      prevEl: '.swiper-novidade-prev',
    }, breakpoints: {
      0: {
        slidesPerView: 2,
        slidesPerColumn: 1,
      }, 680: {
        slidesPerView: 4,
        slidesPerColumn: 1,
      }
    }
  });


  var swiper = new Swiper('.swiper-mais-vendidos', {
    slidesPerView: 4,
    spaceBetween: 0,
    navigation: {
      nextEl: '.swiper-best-next',
      prevEl: '.swiper-best-prev',
    }, breakpoints: {
      0: {
        slidesPerView: 2,
        slidesPerColumn: 1,
      }, 680: {
        slidesPerView: 4,
        slidesPerColumn: 1,
      }
    }
  });

  var swiper = new Swiper('.swiper-depoimentos', {
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-depo-next',
      prevEl: '.swiper-depo-prev',
    }, breakpoints: {
      0: {
        slidesPerView: 1,
      }, 1024: {
        slidesPerView: 3
      }
    }
  });

  $('#carousel-video').carousel({
    dist: 0,
    shift: 0,
    padding: 80,
    interval: 100,
    numVisible: 3,
  });

  $('#videoNext').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#carousel-video').carousel('next');
  });
  
  
  $('#videoPrev').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#carousel-video').carousel('prev');
  });


  var swiper = new Swiper('#carousel-blog', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: '#blogNext',
      prevEl: '#blogPrev',
    }
  });

  $('#blogNext').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#carousel-blog').carousel('next');
  });
  
  
  $('#blogPrev').click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $('#carousel-blog').carousel('prev');
  });


  // MENU MOBILE FUNCTION
  $menuLeft = $('.pushmenu-right');
  $nav_list = $('#sidebartoggle');

  $nav_list.click(function () {
    $(this).toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toleft');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons colorRosa">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons colorRosa">menu</i>');
    }
  });

  $(".pushmenu > a").click(function () {
    $nav_list.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toleft');
    $menuLeft.toggleClass('pushmenu-open');

    if ($(this).hasClass('active')) {
      $('#sidebartoggle').html('<i class="material-icons colorRosa">close</i>');
    } else {

      $('#sidebartoggle').html('<i class="material-icons colorRosa">menu</i>');
    }
  });


});



/********************* SLIDER PRINCIPAL *********************/
$('#slider-principal-prev').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#slider-principal').slider('prev');
});
$('#slider-principal-next').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#slider-principal').slider('next');
});
