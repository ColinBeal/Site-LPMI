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


var i =0;
$("#but_log").click(function()
{
  if (i == 0)
  {
    $("#login").show();
    i = 1;
  }
  else if (i == 1)
  {
    $("#login").hide();
    i = 0;
  }
});
