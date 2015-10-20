<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script>
$( document ).ready(function() {
    $("button.html").click(function() {

        $TextID=this.id;
        $("#textArea"+$TextID).select();
    });
    
    
        $("button.css").click(function() {

        $TextID=this.id;
        $("#css_"+$TextID).select();
    });
    


        if (document.documentElement.clientWidth > 768) {
	$(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});    
}
    
         if (document.documentElement.clientWidth > 768) {
	$(function(){
    $('.dropdown').click(function() {
        $(this).removeClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});    
}
    
    
    
    //carousel
$('#myCarousel').carousel({
  interval: 10000
})

$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

    
    $('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 6,
  slideWidth: 170,
  slideMargin: 20,
  captions: true
});
    
    
});
    

    
    
</script>
</body>
</html>
