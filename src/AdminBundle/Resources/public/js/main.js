$(document).ready(function () {
    var imgA1 = $("#img-animacion1"),
            imgA2 = $("#img-animacion2"),
            imgA3 = $("#img-animacion3"),
            icono1 = $("#icono-otros1"),
            icono2 = $("#icono-otros2"),
            icono3 = $("#icono-otros3"),
            tl = new TimelineMax();
    tl
            .from(imgA1, 0.35, {y: -25, opacity: 0, ease: Power2.easeIn})
            .from(imgA2, 0.35, {y: -25, opacity: 0, ease: Power2.easeIn})
            .from(imgA3, 0.35, {y: -25, opacity: 0, ease: Power2.easeIn})
            .from(icono1, 0.35, {x: 25, opacity: 0, ease: Power2.easeIn})
            .from(icono2, 0.35, {x: 25, opacity: 0, ease: Power2.easeIn})
            .from(icono3, 0.35, {x: 25, opacity: 0, ease: Power2.easeIn});

    var navegacionP = $('nav .ajuste-padding-contenedor #navegacion-principal')

    if (($(window).width() < 992) || ($(window).width() > 1199)) {
        $(navegacionP).removeClass("pantallas-medianas");
    } else {
        $(navegacionP).addClass("pantallas-medianas");
    }


});

$(window).resize(function () {

    var navegacionP = $('nav .ajuste-padding-contenedor #navegacion-principal')

    if (($(window).width() <= 991) || ($(window).width() >= 1200)) {
        $(navegacionP).removeClass("pantallas-medianas");
    } else {
        $(navegacionP).addClass("pantallas-medianas");
    }

});

$(document).on('click', '.mega-dropdown', function (e) {
    e.stopPropagation()
});