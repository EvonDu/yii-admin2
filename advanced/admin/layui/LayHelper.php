<?php
namespace layui;

class LayHelper{
    /**
     * Lay 的接口返回
     * @param int $code
     * @param string $message
     * @param null $data
     */
    static public function sentLayApiResult($code=0,$message="",$data=null){
        header('Content-type: application/json');

        //构建返回体
        $result = (object)array(
            "code"=>$code,
            "massage"=>$message,
            "data"=>$data
        );

        //输出内容
        exit(json_encode($result));
    }
}