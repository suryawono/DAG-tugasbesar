$(document).ready(function () {
    tmplpost = $("#tmpl-comment-post").html();
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
    reloadreply();
})

function toggleComments(e) {
    $e = $(e);
    var $comments = $e.parent("div").next("div").toggleClass("hidden");
    switch ($e.data("state")) {
        case 0:
            $e.attr("src", "img/post_expand_plus.png").data("state", 1);
            break;
        case 1:
            $e.attr("src", "img/post_expand_minus.png").data("state", 0);
            break;
    }
}

function postsubmit() {
    $(".comment-post-submit").on("click", function () {
        var text = $(this).siblings("textarea").val();
        var template = $('#tmpl-comment').html();
        var rendered = Mustache.render(template, {comment: text});
        $(this).parent().parent().append(rendered);
        $(this).parent().remove();
        reloadreply();
    });
}

function reloadreply() {
    $(".reply").on("click", function () {
        $(this).parent("div").parent("div").append(tmplpost);
        $(this).remove();
        postsubmit();
    })
}