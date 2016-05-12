//刷新当前页面
function refresh(action){
    var r_title = $('.tabcur kbd').html();
    parent.addTab(action,r_title);
}