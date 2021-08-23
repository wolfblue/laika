$(document).ready(function() {

    //  Slider

    $("#content-slider").lightSlider({
        loop:true,
        keyPress:true
    });

    $('#image-gallery').lightSlider({
        gallery:true,
        item:1,
        thumbItem:9,
        slideMargin: 0,
        speed:500,
        auto:true,
        loop:true,
        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }  
    });

    //  API Products

    var products = [];

    var settings = {
        "url": "http://127.0.0.1:8000/api/apiGetProducts",
        "method": "POST",
        "timeout": 0,
        "headers": {
          "Content-Type": "application/json"
        },
        "data": JSON.stringify({
          "categoria": "Perro"
        }),
      };
      
    $.ajax(settings).done(function (response) {

        products = response;

        console.log(products[0].productos);

        new Vue({
            el:"#content",
            data:{
                products:products[0].productos
            }
        })

    });

});