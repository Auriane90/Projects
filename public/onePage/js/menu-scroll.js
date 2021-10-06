$(function () {

  var links = $("#linksNav a");
  $(window).scroll(function () {
      var topScroll = $(window).scrollTop();
    $("#linksNav a.item").each(function () {
      var name  = $(this).attr('name');
      var el = $("#"+name);
      var posSection = el.offset().top - 200;
      var hSection = el.height(); //Pega altura

      if(posSection <= topScroll && (posSection+hSection) > topScroll){
        links.removeClass('active');
        $(this).addClass('active');
      }
      else{
        $(this).removeClass('active');
      }
    });
  });
});
