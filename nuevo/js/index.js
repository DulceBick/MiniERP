// This is VERY much a work in progress. Hope to complete work by mid September, but depends on spare time

$('#menu-toggle,#menu-overlay').click(function(){
  $('body').toggleClass('open-menu');
});

$('#main-nav li a').click(function(){
  $('#main-nav li').removeClass('active');
  $(this).parent().addClass('active')
});

$('#tabs li').click(function(){
  var clickTarget = $(this).attr('data-target');
  $('.tab-target').removeClass('targeted');
  $('#'+clickTarget).addClass("targeted");
  $('#tabs li').removeClass('active');
  $(this).addClass('active')
});

$('#admin-search input').on('focus',function(){
  $('#header_logo').addClass('hidden');
});
$('#admin-search input').on('blur',function(){
  $('#header_logo').removeClass('hidden');
});