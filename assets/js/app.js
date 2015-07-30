// Menu Active 
$(document).ready(function(){
    $('a').each(function(index) {
        if(this.href.trim() == window.location)
            $(this).addClass("active");
    });
});

//Scroll Fluid to #div
$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': ($target.offset().top-100)
    }, 900, 'swing', function () {
        // window.location.hash = target;
    });
});

// Animate on Scroll
$(document).ready(function() {
    $('.animate').addClass('animate-onload');
});
$(document).click(function() {
    $('.animate').addClass('animate-onclick');
});
$(window).scroll(function(d,h) {
    var janela = this;
    var screenHeight = $( window ).height();
    $('.animate').each(function(i) {
        if (jQuery(janela).scrollTop() >= ($(this).offset().top) - (screenHeight/100)*100 ) {
            $(this).addClass('animate-onscroll');
        }
    });
});

// Load Images with Fade
$("img").one("load", function() {
  $("<style type='text/css'> img { opacity:1; } </style>").appendTo("head");
}).each(function() {
  if(this.complete) $(this).load();
});

// Gmaps Scroll Fix
$('.map-fix').click(function() {
    $(this).css('display','none');
});

// Preload Images
// function preload(arrayOfImages) {
//     $(arrayOfImages).each(function(){
//         $('<img/>')[0].src = this;
//     });
// }
// preload([
//     'img1.jpg',
//     'img2.jpg'
// ]);

// SVG Fix
// if (!Modernizr.svg) {
//     $('img[src$=".svg"]').each(function() {
//         $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
//     });
// }


//
$( ".close" ).click(function() {
  $( ".first-modal" ).show();
  $( ".second-modal, .third-modal, .fourth-modal, .fifth-modal, .info-texto" ).hide();
});
$( ".btn-continue" ).click(function() {
  $( ".second-modal" ).show();
  $( ".first-modal" ).hide();
});
$( ".btn-enviar" ).click(function() {
  $( ".third-modal" ).show();
  $( ".second-modal" ).hide();
});
$( ".btn-concluir" ).click(function() {
  $( ".fourth-modal" ).show();
  $( ".third-modal" ).hide();
});
$( ".btn-prosseguir" ).click(function() {
    $("label.error").remove();
    if( $('.form-cadastro').valid() ) 
    { 
      $(".form-cadastro").submit();
    } 
    else 
    {
      $( ".info-texto" ).show();  
      e.preventDefault();
      alertify.alert("Preencha todos os campos");
    }
});


$('.form-cadastro').submit(function() {

  var postData = $(this).serializeArray();

  $.ajax({
    type: "POST",
    url: "formail.php",
    data: postData,
    success: function( data ) {
      mixpanel.track("preencheu o formulario.");
      return true;
    }
  });
  
  return false;

});



$(".btn-start").click(function () {
  mixpanel.track("Iniciou o processo do curso.");
});
$(".btn-continue").click(function () {
  mixpanel.track("Passou do primeiro passo.");
});
$(".btn-enviar").click(function () {
  mixpanel.track("Passou do segundo passo.");
});
$(".btn-concluir").click(function () {
  mixpanel.track("Concluiu a primeira fase.");
});    
$(".btn-download").click(function () {
  mixpanel.track("Clicou para baixar o certificado.");
});
$(".btn-email").click(function () {
  mixpanel.track("Solicitou que o certificado fosse enviado por email");
});    
$(".track-send").click(function () {
  mixpanel.track("Entrou em contato por e-mail.");
});    
$(".facebook").click(function () {
  mixpanel.track("Clicou no link do facebook.");
});    
$(".twitter").click(function () {
  mixpanel.track("Clicou no link do twitter.");
});
$(".linkedin").click(function () {
  mixpanel.track("Clicou no link do linkedin");
});    
$(".google").click(function () {
  mixpanel.track("Clicou no link do Google+.");
});



// sub-step change
$(".step-container").each(function(a) {
  $(this).find(".sub-step").each(function(i) {
    $(this).addClass("sub-step-"+i);
    $(this).parent().find(".lastin").html('<p>' +(i+1)+'</p>');
    $(this).parent().find(".select-sub-steps").append( $( "<option value='"+i+"'>"+(i+1)+"</option>" ) );;

  })
})
$(".sub-step .next-sub-step").click(function() {
  var stepIndex = parseInt($(this).parents(".step-container").attr("data-step-index"))+1;
  $(this).parents(".step-container").attr("data-step-index",stepIndex);
  $(this).parents(".step-container .sub-step").removeClass('active');
  $(this).parents(".step-container").find(".sub-step-"+stepIndex).addClass("active");
  $(this).parents(".step-container").find(".select li").removeClass('checked');
  $(this).parents(".step-container").find(".select li[data-select-value='"+stepIndex+"']").addClass("checked");
  $(this).parents(".step-container").find(".select-checked").html(stepIndex+1);
})
$(document).ready(function(){
  $( ".select li" ).click(function () {
    var stepIndex = $(this).attr("data-select-value");
    var dataStep = $(this).parents(".step-container").attr("data-step-index");

    if(stepIndex > dataStep)
    {
      alertify.alert("Você ainda não chegou nessa etapa.");
      $(this).parents(".step-container").find(".select li").removeClass('checked');
      $(this).parents(".step-container").find(".select li[data-select-value='"+dataStep+"']").addClass("checked");
      $(this).parents(".step-container").find(".select-checked").html(parseInt(dataStep)+1);
    }
    else
    {
      $(this).parents(".step-container").attr("data-step-index",stepIndex);
      $(this).parents(".step-container").find(".sub-step").removeClass('active');
      $(this).parents(".step-container").find(".sub-step-"+stepIndex).addClass("active");
    }
  })
});


// Libera os passos feitos

function stepRelease() {
  var stepStorage = localStorage.getItem('step');
  if(!stepStorage) {
    localStorage.setItem('step', '1');
  }

  $('.step').each(function() {
    step = parseInt($(this).attr('data-step'));
    stepStorage = parseInt(stepStorage);

    if($(this).attr('data-step') <= stepStorage) {
      $('.step').removeClass('nextstepzera');
      $(this).removeClass('disabled');
      $(this).addClass('nextstepzera');
    }
  })
}

$(document).ready(function() {

  var stepStorage = localStorage.getItem('step');
  if(!stepStorage) {
    localStorage.setItem('step', '1');
  }
  stepRelease();
})

$('.step').click(function() {
  if(!$(this).hasClass('disabled') && !$(this).parent().hasClass('disabled')) {
    var step = $(this).attr('data-step');
    $('#step'+step).modal('toggle');
    $('#step'+step+' .modal-txt').removeClass('modal-none');
    $('#step'+step+' .modal-form').addClass('modal-none');
  }
})
$('.next-step').click(function() {
    var stepStorage = localStorage.getItem('step');
    var step = $(this).attr('data-step');
    
    $('#step'+step).modal('hide');
    if(stepStorage <= step) {
      step++;
      localStorage.setItem('step', step);
      stepRelease();
    }
})
$('.to-form').click(function() {
    $(this).closest('.modal-txt').addClass('modal-none');
    $(this).closest('.modal-txt').parent().children('.modal-form').removeClass('modal-none');
})
// $('.form-send').click(function() {
//   if( $(this).closest('.modal-form').children('form').valid() ) {
//     console.log('validou');
//   } else {
//     console.log('nao');
//   }
// })


setTimeout(function(){ $('.premier').closest('.alertify-inner').children('.alertify-buttons').hide(); }, 100);