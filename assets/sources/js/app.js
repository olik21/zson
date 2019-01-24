$(document).ready(function () { 
    $(".br-two-str").parents("li").addClass("two-str");
    
    $(".menu-button-js").click(function () {
      $(".main-menu ul").slideToggle('slow');
    });

    $(".main-menu ul li").click(function () {
      $(this).children(".submenu").toggleClass('showed');
    });

  //  $("input .toggleSubmenu").parents("li").addClass("arrow-down-up");
    
  //  $(".submenu-right").parent("li").addClass("arrow-down");

    if ($(window).width() >= 768 && $(window).load()) {
      $(window).scroll(function() {
         if($(this).scrollTop() >= 140) {
           $('.main-menu').addClass(' sticky-menu '); 
         }
         else{
          $('.main-menu').removeClass(' sticky-menu '); 
         }
      });
    }

    if ($(window).width() < 768 && $(window).load()) {
      $(window).scroll(function() {
         if($(this).scrollTop() >= 403) {
           $('.main-menu').addClass(' sticky-menu '); 
         }
         else{
          $('.main-menu').removeClass(' sticky-menu '); 
         }
      });
    }

$(window).resize(function() {
    if ($(window).width() < 768 && $(window).load()) {
        $(".submenu-right").parent("li").addClass("up-down-right");
        //$(".submenu-right").addClass("up-down-right");
        $(".submenu").parent("li").addClass("up-down"); 
      
    }
    else{
        $(".submenu-right").parent("li").removeClass("up-down-right");
        //$(".submenu-right").removeClass("up-down-right");
        $(".submenu").parent("li").removeClass("up-down");
    }

    if($(window).load()){
        if ($(window).width() < 768) {
          $(".submenu-right").parent("li").addClass("up-down-right");
          $(".submenu").parent("li").addClass("up-down");
        }
    }
    else{
        $(".submenu-right").parent("li").removeClass("up-down-right");
        $(".submenu").parent("li").removeClass("up-down");
    }

});

if ($(window).width() < 768 && $(window).load()) {
      $(".submenu-right").parent("li").addClass("up-down-right");
      $(".submenu").parent("li").addClass("up-down"); 
    }
 
//arrow-down up-down-right
    $(".arrow-down-up").on('click', function(e) {
      e.preventDefault();
      var FlagHiden = $(this).children(".submenu").is(':hidden');
      
      $(".arrow-down-up").find('.submenu').hide();
      $(".arrow-down-up").find('.submenu').find(".submenu-right").hide();
      
      if(FlagHiden){
        $(this).children(".submenu").toggle('active');
        $(this).children(".submenu").children(".submenu-right").toggle('active');
      }
    });
   
    $(".up-down-right").on('click', function(e) {
      e.preventDefault();
      var FlagHiden = $(this).children(".submenu-right").is(':hidden');
      
      $(".up-down-right").find('.submenu-right').hide();
      //$(".up-down-right").find('.submenu').find(".submenu-right").hide();
      
      if(FlagHiden)
        $(this).children(".submenu-right").toggle('active');
      
    });

    // input type file handler
    $(".input-wrapper__input[type='file']").on('change', function(e) {
      var fileName = e.target.value.split( '\\' ).pop();
      $(this).parent().find('.input-wrapper__file-text').html(fileName ? fileName : 'Файл не выбран');
    });

    $(".dropdown").on('click', function(e) {
      e.preventDefault();

      this.classList.toggle('active');
    });


    //tabs
    var tabs = $('.tabs');

    tabs.find('.tabs__link').on('click', function (e) {
        e.preventDefault();

        $(e.target).parent().find('.active').removeClass('active');
        $(e.target).addClass('active');

        $(e.target).parent().parent().find('.tabs__tab.active').removeClass('active');

        $(e.target).parent().parent().find('.tabs__tab[data-tab=' + $(e.target).attr('data-tab') + ']').addClass('active');
    });


    // custom select init
    $('.input-wrapper__select').selectric();
    
    $('.news-prev_item').on('mouseenter', function(e) {
      var id = $(this).attr('data-id');
      var img = $(this).attr('data-img');
      var newId = $(this).attr('data-new-id');

      $('.main-news__prev img').attr('src', img);
      $('.main-news__prev').attr('href', '/press-service/news/' + newId + '/');
      $('.main-news__prev p').text($(this).find('p a').text())
      $('.main-news__prev span').text($(this).find('.news-date').text())
    });
 
    $('.artcl-prev__content').slick({

      slidesToShow: 5,
      slidesToScroll: 5,
      
    	adaptiveHeight: true,
  	  infinite: true,
  	  speed: 500,
  	  dots: false,
  	  cssEase: 'linear',
  	  arrows: true,
  	  autoplay: true,
      autoplaySpeed: 3000,
      
      responsive: [
       {
         breakpoint: 1199,
         settings: {
           slidesToShow: 4,
           slidesToScroll: 4,
                },
       },
       {
         breakpoint: 992,
         settings: {
           slidesToShow: 3,
           slidesToScroll: 3,
                },
       },       
       {
         breakpoint: 768,
         settings: {
           slidesToShow: 2,
           slidesToScroll: 2,
                },
       },       
       {
         breakpoint: 520,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
                },
       },
       ] 

    });

    /**  left main menu ***/
    $('.menu-button').click(function() { 
 
        $('.nav-menu').animate({ 
 
            left: '0px' 
 
        }, 200); 
         $('.nav-menu-dark').css('display', 'block');
         
        $('body').animate({ 
 
            left: '350px' 
 
        }, 200); 
    });
 
 
  /* Закрытие меню */
   
      $('.menu-close, .nav-menu-dark').click(function() { 
   
          $('.nav-menu').animate({ 
   
              left: '-350px' 
   
          }, 200); 
           $('.nav-menu-dark').css('display', 'none');
           
      $('body').animate({ 
   
              left: '0px' 
   
          }, 200); 
      });


/** tabs vote **/



  });
