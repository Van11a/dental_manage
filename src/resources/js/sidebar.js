$(function () {
    //.accordion_oneの中の.accordion_headerがクリックされたら
    $(".nav-item.site-manage").on("click", function () {
        //クリックされた.accordion_oneの中の.accordion_headerに隣接する.accordion_innerが開いたり閉じたりする。
        $(".pull-down-list").slideToggle();
    });
});
