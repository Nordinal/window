$('document').ready(function(){
    $('.page2-slider').slick({
        centerMode: true,
        dots: false,
        centerPadding: '60px',
        slidesToShow: 3,
        
    });

    $('.animate').on("click","a", function(event) {
        event.preventDefault();
        let id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    })
})