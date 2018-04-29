function get_js_src_dir(){
    var base = $("script").last().attr("src");
    var index = base.lastIndexOf("\/");
    var dir = base.substring(0, index + 1);
    return dir;
}