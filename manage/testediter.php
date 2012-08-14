<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'setting.php';
?>
<script charset="utf-8" src="../template_html/php_editor/kindeditor.js"></script>
<script charset="utf-8" src="../template_html/php_editor/lang/zh_CN.js"></script>
<script>
        var editor;
        KindEditor.ready(function(K) {
                editor = K.create('#editor_id');
        });
</script>
<textarea id="editor_id" name="content" style="width:700px;height:300px;">

</textarea>

