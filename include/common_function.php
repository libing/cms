<?php
function template($file){
	return include_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'template_html'.DIRECTORY_SEPARATOR.$file;
}

//上传图片函数
function uploadImage($dir,$inputName,$_FILE){
	$image_name = time().strrchr($_FILE[$inputName]['name'],'.');

	if(!move_uploaded_file($_FILE[$inputName]['tmp_name'],$dir.$image_name) ){
		return false;	
	}else{
		return $image_name;
	}



}
