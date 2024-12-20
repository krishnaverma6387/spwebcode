
$(document).ready(function () {
  $('#view-all-review').click(function () {
    $('#all-review').toggleClass('d-none');

    if ($('#all-review').hasClass('d-none')) {
      $('#view-all-review').text('View more Review');
    } else {
      $('#view-all-review').text('View less Review');
    }
  });
});

$(document).ready(function () {
  $(".moreless-button").click(function () {
    $("#read-more-cmt").toggleClass("d-none");
    if ($("#read-more-cmt").hasClass("d-none")) {
      $(".moreless-button").text("Read more");
    } else {
      $(".moreless-button").text("Read less");
    }
  });
});

$(document).ready(function () {
  $("tr").click(function () {
    var checkbox = $(this).find(".form-check-input");
    checkbox.prop("checked", !checkbox.prop("checked"));
    if (checkbox.prop("checked")) {
      $(this).find('p').removeClass('not-selected').addClass('selected');
    } else {
      $(this).find('p').removeClass('selected').addClass('not-selected');
    }
  });
});

$(document).ready(function () {
  $("ul li").click(function () {
    $(this).toggleClass("size-selected");
  });
});
$(document).ready(function () {
  for (let i = 1; i < 4; i++) { // Start from 1 as the first coupon is already in the HTML
    $('#coupon-container-product').append($('#couple-card:first').clone());
  }
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('#couple-card:first').css('padding-left', '0');

class ScrollToggle {
  constructor(element) {
    this.container = element;
    this.toggles = this.container.querySelectorAll('.scroll-toggle__button');
    this.list = this.container.querySelector('.scroll-toggle__list');
    this.listItems = this.list.querySelectorAll('.scroll-toggle__list-item')
    this.scrollValue = 0;
  }
  init() {
    this.toggles.forEach(toggle => {
      toggle.addEventListener('mousedown', (e) => {
        this.move(e.target);
      })
      toggle.addEventListener('mouseup', (e) => {
        this.stop();
      })
    })
  }
  move(target) {
    if (target.classList.contains('scroll-toggle__button--right')) {
      this.interval = setInterval(() => {
        this.list.scrollLeft += 1;
      }, 1);
    } else {
      this.interval = setInterval(() => {
        this.list.ScrollLeft = this.scrollValue;
        this.list.scrollLeft -= 1;
      }, 1);
    }
  }
  stop() {
    if (this.list.scrollLeft > 0) {
      this.scrollValue = this.list.scrollLeft;
    }
    clearInterval(this.interval);
  }
}

document.querySelectorAll('.scroll-toggle').forEach(el => {
  const scrollToggle = new ScrollToggle(el);
  scrollToggle.init();
})

$(document).ready(function() {

  $('.slideshow-thumbnails').hover(function() { changeSlide($(this)); });

  $(document).mousemove(function(e) {
    var x = e.clientX; var y = e.clientY;
    
    var x = e.clientX; var y = e.clientY;

    var imgx1 = $('.slideshow-items.active').offset().left;
    var imgx2 = $('.slideshow-items.active').outerWidth() + imgx1;
    var imgy1 = $('.slideshow-items.active').offset().top;
    var imgy2 = $('.slideshow-items.active').outerHeight() + imgy1;

    if ( x > imgx1 && x < imgx2 && y > imgy1 && y < imgy2 ) {
      $('#lens').show(); $('#result').show();
      imageZoom( $('.slideshow-items.active'), $('#result'), $('#lens') );
    } else {
      $('#lens').hide(); $('#result').hide();
    }

  });
  
});

function imageZoom( img, result, lens ) {

  result.width( img.innerWidth() ); result.height( img.innerHeight() );
  lens.width( img.innerWidth() / 2 ); lens.height( img.innerHeight() / 2 );

  result.offset({ top: img.offset().top, left: img.offset().left + img.outerWidth() + 10 });

  var cx = img.innerWidth() / lens.innerWidth(); var cy = img.innerHeight() / lens.innerHeight();

  result.css('backgroundImage', 'url(' + img.attr('src') + ')');
  result.css('backgroundSize', img.width() * cx + 'px ' + img.height() * cy + 'px');

  lens.mousemove(function(e) { moveLens(e); });
  img.mousemove(function(e) { moveLens(e); });
  lens.on('touchmove', function() { moveLens(); })
  img.on('touchmove', function() { moveLens(); })

  function moveLens(e) {
    var x = e.clientX - lens.outerWidth() / 2;
    var y = e.clientY - lens.outerHeight() / 2;
    if ( x > img.outerWidth() + img.offset().left - lens.outerWidth() ) { x = img.outerWidth() + img.offset().left - lens.outerWidth(); }
    if ( x < img.offset().left ) { x = img.offset().left; }
    if ( y > img.outerHeight() + img.offset().top - lens.outerHeight() ) { y = img.outerHeight() + img.offset().top - lens.outerHeight(); }
    if ( y < img.offset().top ) { y = img.offset().top; }
    lens.offset({ top: y, left: x });
    result.css('backgroundPosition', '-' + ( x - img.offset().left ) * cx  + 'px -' + ( y - img.offset().top ) * cy + 'px');
  }
}


function changeSlide(elm) {
  $('.slideshow-items').removeClass('active');
  $('.slideshow-items').eq( elm.index() ).addClass('active');
  $('.slideshow-thumbnails').removeClass('active');
  $('.slideshow-thumbnails').eq( elm.index() ).addClass('active');
}

$(document).ready(function() {
  $('#product-size').click(function() {
      $('#product-left').toggleClass('d-none');
  });
});

$(document).ready(function() {
  $('#share-btn').click(function() {
      $('#share_icon').toggleClass('d-none');
  });
});

$(document).ready(function(){
  $("#btn-copy").click(function(){
      $(this).html('<i class="bi bi-copy"></i> Copied');
      $(this).css({
          "color": "green",
          "border-color": "green"
      });
  });
});

$(document).ready(function(){
  $(".btn-share-offer").click(function(){
      $(this).html('<i class="bi bi-share"></i> Shared');
      $("#share_icon-offer").toggleClass("d-none");
  });
});

$(document).ready(function(){
  $("#wishlist").click(function(event){
      event.preventDefault(); // Prevent the default action of the link
      $(this).html('<i class="bi bi-heart-fill mr-2" style="color: #F9387D;"></i> Wishlisted');
      $(this).css("color", "#F9387D");
  });
});

$(document).ready(function(){
  $("#add-to-bag").click(function(event){
      event.preventDefault(); // Prevent the default action of the link
      $(this).html('<i class="bi bi-bag-check-fill mr-2"></i> Go to Bag');
      $(this).css("background", "#F9387D");
  });
});

$(document).ready(function(){
  $("#pincode").on("input", function() {
      var pincode = $(this).val();
      var isValid = validatePincode(pincode);
      
      if (isValid) {
          $("#basic-addon2").css({
              "background-color": "red",
              "color": "white"
          });
      } else {
          $("#basic-addon2").css({
              "background-color": "",
              "color": ""
          });
      }
  });
  
  function validatePincode(pincode) {
      var regex = /^\d{6}$/;
      var allSame = /^(\d)\1{5}$/;

      console.log("Validating pincode:", pincode); // Debugging log
      console.log("Regex test:", regex.test(pincode)); // Debugging log
      console.log("All same test:", allSame.test(pincode)); // Debugging log
      
      return regex.test(pincode) && !allSame.test(pincode);
  }
});

$(document).ready(function() {
  $('#product-price').click(function() {
      $('#product-price-details').toggleClass('d-none');
  });
});

$(function() {
  // Owl Carousel
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    items: 1,
    margin: 10,
    loop: true,
    nav: true
  });
});

$(document).ready(function() {

  var sync1 = $("#sync1");
  var slidesPerPage = 3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false, 
      dots: true,
      loop: true,
      responsiveRefreshRate: 200,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

});

jQuery("#product-slider-img").owlCarousel({
  autoplay: true,
  rewind: false, /* use rewind if you don't want loop */
  margin: 20,
  loop: true,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 7000,
  smartSpeed: 800,
  nav: true,
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 3
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
});