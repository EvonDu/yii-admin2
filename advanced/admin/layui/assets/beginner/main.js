layui.use('layer', function() {
    var $ = layui.jquery,
        layer = layui.layer;

    $('#video1').on('click', function() {
        layer.open({
            title: '百度',
            maxmin: true,
            type: 2,
            content: 'http://www.baidu.com',
            area: ['800px', '500px']
        });
    });
    $('#pay').on('click', function () {
        layer.open({
            title: false,
            type: 1,
            content: '',
            area: ['500px', '250px'],
            shadeClose: true
        });
    });
});