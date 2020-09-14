

if ($(window).width() > 960) {

// Hide the element. Doing this here will prevent the elements from disappering if JS is disabled.
$('.fade-cccc > .card-spe').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 4;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec, #modal-bbbb, #modal-clcl").click(function () {
          $("#modal-cccc,#modal-bbbb").fadeToggle("active");
      });
  });

$('.fade-cccc1 > .card-spe1').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc1 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe1').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe1').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec1, #modal-bbbb1, #modal-clcl1").click(function () {
          $("#modal-cccc1,#modal-bbbb1").fadeToggle("active");
      });
  });

$('.fade-cccc2 > .card-spe2').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc2 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe2').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe2').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec2, #modal-bbbb2, #modal-clcl2").click(function () {
          $("#modal-cccc2,#modal-bbbb2").fadeToggle("active");
      });
  });
  
$('.fade-cccc3 > .card-spe3').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc3 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe3').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe3').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec3, #modal-bbbb3, #modal-clcl3").click(function () {
          $("#modal-cccc3,#modal-bbbb3").fadeToggle("active");
      });
  });
$('.fade-cccc4 > .card-spe4').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc4 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe4').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe4').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec4, #modal-bbbb4, #modal-clcl4").click(function () {
          $("#modal-cccc4,#modal-bbbb4").fadeToggle("active");
      });
  });
$('.fade-cccc5 > .card-spe5').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc5 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe5').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe5').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec5, #modal-bbbb5, #modal-clcl5").click(function () {
          $("#modal-cccc5,#modal-bbbb45").fadeToggle("active");
      });
  });
  


$('.fade-cccc6 > .card-spe6').css({
    'opacity': '0',
    'transform': 'translateY(' + 2 + 'em)'
  });
  // Trigger fade in as window scrolls
  $(window).on('scroll load', function() {
    $('.fade-cccc6 > *').each(function(i) {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 8;
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $('.card-spe6').css({
          'opacity': '1',
          'transform': 'translateY(' + 0 + 'em)'
        });
      } else {
        $('.card-spe6').css({
          'opacity': '0',
          'transform': 'translateY(' + 2 + 'em)'
        });
      }
    });
  });
  $(function(){
      $(".card-spec6, #modal-bbbb6, #modal-clcl6").click(function () {
          $("#modal-cccc6,#modal-bbbb6").fadeToggle("active");
      });
  });
  
}

