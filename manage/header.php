<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_GLOBALS['webName'].' - 管理后台';?></title>

<!-- CSS -->
<link href="../template_html/style/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="../template_html/style/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="../template_html/style/ie7.css" /><![endif]-->

<!-- JavaScripts-->
<script type="text/javascript" src="../template_html/js/jquery.js"></script>
<script type="text/javascript" src="../template_html/js/jNice.js"></script>

<script charset="utf-8" src="../template_html/php_editor/kindeditor.js"></script>
<script charset="utf-8" src="../template_html/php_editor/lang/zh_CN.js"></script>

<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
        });
</script>
</head>
