<?php
//用curl获取远程网址html代码的函数
function curl_get_html($url){
	//判断curl扩展是否加载	
	if(!extension_loaded('curl')){
		echo 'curl extension not found';
		exit;	
	}
	$res = '';
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	$res = curl_exec($ch);
	curl_close($ch);
	return $res;
}

//http://yi1.com.cn getImg($url, $filename);
/*
  *@通过curl方式获取制定的图片到本地
  *@ 完整的图片地址
  *@ 要存储的文件名
 */
function getImg($url = "", $filename = "") {
    if(is_dir(basename($filename))) {
        echo "The Dir was not exits";
        Return false;
    }
	if(empty($url)){
		echo "The url was not null";
        Return false;
	}
    //去除URL连接上面可能的引号
    $url = preg_replace( '/(?:^[\'"]+|[\'"\/]+$)/', '', $url );

    $hander = curl_init();
    $fp = fopen($filename,'wb');

    curl_setopt($hander,CURLOPT_URL,$url);
    curl_setopt($hander,CURLOPT_FILE,$fp);
    curl_setopt($hander,CURLOPT_HEADER,0);
    curl_setopt($hander,CURLOPT_FOLLOWLOCATION,1);
    //curl_setopt($hander,CURLOPT_RETURNTRANSFER,false);//以数据流的方式返回数据,当为false是直接显示出来
    curl_setopt($hander,CURLOPT_TIMEOUT,60);

    /*$options = array(
        CURLOPT_URL=> 'http://yi1.com.cn/content/uploadfile/201106/thum-f3ccdd27d2000e3f9255a7e3e2c4880020110622095243.jpg',
        CURLOPT_FILE => $fp,
        CURLOPT_HEADER => 0,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_TIMEOUT => 60
    );
    curl_setopt_array($hander, $options);
    */

    curl_exec($hander);
    curl_close($hander);
    fclose($fp);
    Return true;
}

//将内容保存为html的方法
function save_html($filename,$content='',$file='数据'){
	if (!$handle = fopen($filename, 'w')) {
		return "不能打开文件 {$file} 缓存文件";
	}
	// 首先我们要确定文件存在并且可写。
	if (is_writable($filename)) {
	    // 将$somecontent写入到我们打开的文件中。
	    if (fwrite($handle, $content) === FALSE) {
	        return "{$file} 写入文件失败";
	    }
	
	    return "{$file} 成功写入到文件中";
	
	    fclose($handle);
	
	} else {
	    return "{$file} 缓存文件不可写";
	}

}
