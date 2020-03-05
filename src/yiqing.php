<?php

$t=time();
$dataurl='https://gwpre.sina.cn/interface/fymap2020_data.json?'.$t.'0000&callback=_data';
printf("数据网址：%s\n",$dataurl);
$data=file_get_contents($dataurl);
if(preg_match('#^_data\((.*?)\);$#sim',$data,$ms)){
    $json_data=json_decode($ms[1],true);
    print_r($json_data);
}else{
    print("没有取到数据");
}

?>