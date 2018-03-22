AOS.init({
  offset: 50,
  duration: 600,
  easing: 'ease-in-sine',
  delay: 50,
});
$(window).on('load', function ()
{
  AOS.refresh();
});
