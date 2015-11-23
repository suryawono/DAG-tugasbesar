$(document).ready(function () {
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });
    switch (pagename) {
        case "japanese-anime-wallpaper":
            $('[data-pagename="japanese-anime-wallpaper"]').addClass("active");
            break;
    }
    $("#search").on("click", function () {
        window.location = "search?term=photography";
    })
})

function toggleComments(e) {
    $e=$(e);
    var $comments = $e.parent("div").next("div").toggleClass("hidden");
    switch ($e.data("state")) {
        case 0:
            $e.attr("src","img/post_expand_plus.png").data("state",1);
            break;
        case 1:
            $e.attr("src","img/post_expand_minus.png").data("state",0);
            break;
    }
}