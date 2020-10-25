$('.main-slide').slick({
  speed: 1500, 
  autoplay: true, 
  autoplaySpeed: 5000, 
  cssEase: 'linear', 
  slidesToShow: 1, 
  slidesToScroll: 1, 
  variableWidth: true
});


$('.project-slider').slick({
      infinite: true,
      loop:true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      asNavFor:'.project-small-slider',
      prevArrow:"<span class='btn_arrow btn_prev fa fa-angle-left' aria-hidden='true'></span>",
      nextArrow:"<span class='btn_arrow btn_next fa fa-angle-right' aria-hidden='true'></span>",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
});

$('.cusselect').click(function (e) { 
   e.preventDefault();
   $(this).find('.option').slideToggle();
});

$('#backtotop').click(function (e) { 
   $('html,body').animate({ scrollTop: 0 }, 500);
});

function readmore(me){
  var parent = me.getAttribute('parent');
  $(parent).toggleClass('closed');
  if ($(parent).hasClass('closed')){
    me.innerHTML='Xem thêm <span class="fa fa-angle-down"></span>';
  }else{
    me.innerHTML='Thu gọn <span class="fa fa-angle-up"></span>'; 
  }
}

$('#input_search').keyup(function (e) { 
  var _val = $(this).val();
  if (_val.trim().length>3){
    $.ajax({
      type: "post",
      url: $('#base_url').attr('href')+'web/livesearch',
      data: {'query':_val},
      success: function (response) {
        $('#livesearch').show();
        response=JSON.parse(response);
        if (response.data_html!=''){
           $('#livesearch').html(response.data_html);
        }else{
           $('#livesearch').html('<li>Không tìm thấy kết quả nào phù hợp</li>');
        }
      }
    });
  }{
    $('#livesearch').hide();
  }
});

$('#openmenu_bar').click(function (e) { 
    e.preventDefault();
    $('.nav-menu').slideToggle();
    $('.nav-menu').toggleClass('opened');
    if ($('.nav-menu').hasClass('opened')){
      $(this).html('<span class="btnBar fa fa-close"></span>');
      $('html,body').css({'overflow':'hidden'});
    }else{
      $('html,body').css({'overflow':'auto'});
      $(this).html('<span class="btnBar fa fa-bars"></span>');
    }
});

$(window).resize(function(){
    var max_width = $(window).width();
    if (max_width<680){
        $('.dropdown').click(function (e) { 
          $(this).find('.dropdown-list').slideToggle();
        });
    }
});
$(document).ready(function () {
  var max_width = $(window).width();
  if (max_width<680){
      $('.dropdown').click(function (e) { 
        $(this).find('.dropdown-list').slideToggle();
      });
  }
});

