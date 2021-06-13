console.log("Hai selamat datang di web Nusakita, Semoga harimu menyenangkan");
//navbar-hover
$('.dropdown').hover(function () {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).slideDown(300);
  $('.navbar-list-hover').fadeIn();
}, function () {
  $(this).find('.dropdown-menu').stop(true, true).delay(100).slideUp(300);
  $('.navbar-list-hover').fadeOut();
});

//search
$(function () {
  $('a[href="#search"]').on('click', function (event) {
    event.preventDefault();
    $('#search').addClass('open').show();
    $('#search > form > input[type="search"]').focus();
    $('#btn-search').hide();
    $('#btn-search-close').show();
    $('#btn-search-mobile').hide();
    $('#btn-search-close-mobile').show();
  });

  $('#search, #search button.close').on('click keyup', function (event) {
    if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
      $(this).removeClass('open').hide();
      $('#btn-search-close').hide();
      $('#btn-search').show();
      $('#btn-search-close-mobile').hide();
      $('#btn-search-mobile').show();
    }
  });

  $('#btn-search-close, #btn-search-close-mobile').on('click', function() {
    $('#search').removeClass('open').hide();
    $('#btn-search-close').hide();
    $('#btn-search').show();
    $('#btn-search-close-mobile').hide();
    $('#btn-search-mobile').show();
  })

  $('form').submit(function (event) {
    event.preventDefault();
    return false;
  })
});

//popup video
$('.popup-video').hover( function() {
  var data = $(this).data('video');
  console.log(data);
  $('.popup-video').magnificPopup({
    items: {
      src: data,
    },
    type: 'iframe',
    iframe: {
      markup: '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        '</div>',
      patterns: {
        youtube: {
          index: 'youtube.com/',
          id: 'v=',
          src: '//www.youtube.com/embed/%id%?autoplay=1'
        }
      },
      srcAction: 'iframe_src',
    }
  })
})

//preloader
window.addEventListener("load", function () {
  setTimeout(function () {
    document.querySelector('body').classList.add('loaded');
  }, 500);
});

//hamburger menu
$(document).ready(function() {
  $('#menu').click(function () {
    $('ul.hamburger-menu').toggleClass('active');
    $('#myNav').toggleClass('d-none');
    $('#menu').removeClass('hamburger-show');
    $('#menu').addClass('hamburger-hide');
    $('#categoryNav').fadeOut();
  });
});

//mobile category
$(document).ready(function () {
  $('#category-mobile').click(function () {
    $('#categoryNav').toggleClass('d-none');
    $('#category-mobile').removeClass('hamburger-show');
    $('#category-mobile').addClass('hamburger-hide');
    $('.navbar-list-hover-2').toggleClass('d-none');
    $('#navbar-product-1').show();
    $('#navbar-product-2').addClass('d-none');
  });
  $('#category-mobile #category-before-icon').click(function () {
    $('#category-before-icon').addClass('d-none');
    $('#category-after-icon').removeClass('d-none');
  });
  $('#category-mobile #category-after-icon').click(function () {
    $('#category-after-icon').addClass('d-none');
    $('#category-before-icon').removeClass('d-none');
  });
  $('#btn-category-mobile-read-more').click(function() {
    $('#navbar-product-1').hide();
    $('#navbar-product-2').removeClass('d-none');
    $('#navbar-product-2').show();
  });
  $('#back-1').click(function () {
    $('#navbar-product-2').hide();
    $('#navbar-product-2').addClass('d-none');
    $('#navbar-product-1').show();
  });
  $('.category-other-product').click(function () {
    $('#navbar-product-1').hide();
    $('#navbar-product-2').addClass('d-none');
    $('#navbar-product-2').hide();
    $('#navbar-product-3').removeClass('d-none');
    $('#navbar-product-3').show();
  });
  $('#back-2').click(function () {
    $('#navbar-product-2').show();
    $('#navbar-product-2').removeClass('d-none');
    $('#navbar-product-3').hide();
    $('#navbar-product-3').addClass('d-none');
  });
});
