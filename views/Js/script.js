/*Efeito Link*/
var link = document.querySelectorAll(".nav ol li a");
link[3].style.color = 'rgb(19, 126, 197)';
link[3].addEventListener("mouseover", () => {
    link[3].style.color = '#fff'
    setTimeout(() => {
        link[3].style.color = 'rgb(19, 126, 197)';
    }, 2000)
})

/* efeito Scroll */

function goTo(element, speed) {
    var href = element.attr('href');
    var top = $(href).offset().top;
    $("html,body").animate({ scrollTop: top }, speed);
}

(function () {
    $("#top a").click(function (e) {
        goTo($(this), 500);
    })
})








