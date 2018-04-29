<?php
    use yii\helpers\Url;
?>

<script>
    layui.use('layer', function() {
        var $ = layui.jquery,
            layer = layui.layer;

        $('#change-password').on('click', function() {
            layer.open({
                title: '修改密码',
                maxmin: true,
                type: 2,
                content: '<?=Url::to(["/site/change-password"])?>',
                area: ['800px', '500px']
            });
        });
    });
</script>