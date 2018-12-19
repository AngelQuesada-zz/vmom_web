$(window).on('load', function() {
  efectoCurriculum();
});

function efectoCurriculum(){
  var s = skrollr.init({
    forceHeight: false
  });
}

function functionScrollTo(objetivo){
  $(objetivo).ScrollTo({
    duration: 1500
});
}

//VARIABLES
var sudoSlider1;
var sudoSlider2;
var sudoSlider3;
var auxAnimation = false;

//CUANDO RESIZEAS
$(window).resize(function() {
  controlarResizes();
});

$(window).bind('resize', function() {
  controlarResizes();
});


//CUANDO INICIAS
function controlarResizes() {
  if ($(window).width() < 2000 && $(window).width() > 992) { //MONITORES GRANDES
    $('.iconoTop').css('margin-right', '3%');
    $('.iconoTop').css('margin-left', '3%');
    $('.elementoSlider').css('min-height', '150px');
    $('.elementoSlider h3').css('width', '80%');
    $('.elementoSlider p').css('width', '80%');
    $('.iconoTop').css('width', '10%');
    $('.iconoBottom').css('width', '10%');
    $('.contenedorIconosRow3').css('padding', '85px 8% 15px');
  }

  if ($(window).width() < 992 && $(window).width() > 768) { //MONITORES
    $('.elementoSlider').css('min-height', '200px');
    $('.elementoSlider h3').css('width', '80%');
    $('.elementoSlider p').css('width', '80%');
    $('.iconoTop').css('margin-right', '0%');
    $('.iconoTop').css('margin-left', '0%');
    $('.iconoTop').css('width', '10%');
    $('.iconoBottom').css('width', '10%');
    $('.contenedorIconosRow3').css('padding', '85px 0% 15px');
  }

  if ($(window).width() < 768 && $(window).width() > 480) { //TABLETS
    $('.iconoTop').css('margin-right', '0%');
    $('.iconoTop').css('margin-left', '0%');
    $('.iconoTop').css('width', '17%');
    $('.iconoBottom').css('width', '17%');
    $('.elementoSlider').css('min-height', '250px');
    $('.elementoSlider h3').css('width', '100%');
    $('.elementoSlider p').css('width', '100%');
    $('.contenedorIconosRow3').css('padding', '85px 0% 15px');
    $('.row2_1_texto').css('margin-top', '100px');

  }

  if ($(window).width() < 480) { //MOVIL
    $('.iconoTop').css('width', '17%');
    $('.iconoBottom').css('width', '17%');
    $('.iconoTop').css('margin-right', '0%');
    $('.iconoTop').css('margin-left', '0%');
    $('.iconoTop').css('padding', '2px');
    $('.iconoBottom').css('padding', '2px');
    $('.elementoSlider').css('min-height', '300px');
    $('.elementoSlider h3').css('width', '100%');
    $('.elementoSlider p').css('width', '100%');
    $('.contenedorIconosRow3').css('padding', '85px 0% 15px');
  }
}

function inicio() {
  goTop();
  controlarResizes();
  activarSlider3();
  activarSlider2();
  if ($(window).width() > 480) {
    controlarResizes();
  }
  activarFiltro();
  ajustarRow1();
  finDeCarga();
  cerrarNavbarEnClick();
}

function cerrarNavbarEnClick(){
  $('.nav a').on('click', function(){
    if ($(window).width() < 768) {
      $('.navbar-toggle').click(); //bootstrap 3.x by Richard
    }
  });
}


function finDeCarga(){
	$(".loadingClase").fadeOut(1000);
}

function ajustarRow1(){
  var altura = $(window).height();
  var alturaNavbar = $('.navbar').height();
  var alturaSubRow1 = $('.subRow1').height();
  $(".row1").css("height",altura-alturaNavbar-alturaSubRow1);
}

function activarFiltro(){
  var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });

  // filter functions
  var filterFns = {
  };

  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });


  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });

  $('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
});
}


function detectarMovil() {
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}

function activarSlider3() {
  sudoSlider3 = $(".contenedorSlider3").sudoSlider({
    numeric: false,
    continuous: true,
    prevNext: false,
    speed: 500,
    auto: true,
    pause: 3000,
    beforeAnimation: function() {
      if (!auxAnimation) {
        for (var i = 1; i <= 5; i++) {
          $('#i' + i).removeClass('activeCirculo');
        }
        if (sudoSlider3.getValue('currentSlide') == 5) {
          $('#i1').addClass('activeCirculo');
        } else {
          var sliderActual = sudoSlider3.getValue('currentSlide');
          sliderActual = sliderActual + 1;
          $('#i' + sliderActual).addClass('activeCirculo');
        }
      }
    },
    effect: "slide"
  });
}

function activarSlider2() {
  $('.textoRow1').unslider({
    autoplay: true,
    keys: false,
    nav: false,
    arrows: false
  });
  $('.contenedorIconosRow1').unslider({
    autoplay: true,
    keys: false,
    nav: false,
    arrows: false
  });
}


function goSlide(numero) {
  auxAnimation = true;
  sudoSlider3.stopAuto();
  sudoSlider3.goToSlide(numero);
  sudoSlider3.runWhenNotAnimating(function() {
    setTimeout(
      function() {
        sudoSlider3.startAuto();
        auxAnimation = false;
      }, 2000);
  });
  for (var i = 1; i <= 5; i++) {
    $('#i' + i).removeClass('activeCirculo');
  }
  $('#i' + numero).addClass('activeCirculo');
}


function goTop() {
  $('html, body').animate({
    scrollTop: 0
  }, 0);
}


/* CARTA */
