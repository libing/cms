<?php
var_dump($_FILES);
$upFile = $_FILES;
$file_src = __DIR__;
move_uploaded_file($upFile['image']['tmp_name'], $file_src.DIRECTORY_SEPARATOR.time().strrchr($upFile['image']['name'],'.'));

?>
<form action="" method="post" enctype ="multipart/form-data">
<input name="image" type="file">
<input type="submit">
</form>

