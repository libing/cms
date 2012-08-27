<?php
//var_dump($_FILES);
//$upFile = $_FILES;
//$file_src = __DIR__;
//move_uploaded_file($upFile['image']['tmp_name'], $file_src.DIRECTORY_SEPARATOR.time().strrchr($upFile['image']['name'],'.'));
//
?>

<div id="main">
	<form action="" class="jNice">
	<h3></h3>
    	<table cellpadding="0" cellspacing="0">
			<tr>
                <td>Vivamus rutrum nibh in felis tristique vulputate</td>
                <td class="action"><a href="#" class="view">View</a><a href="#" class="edit">Edit</a><a href="#" class="delete">Delete</a></td>
            </tr>                        
       
        </table>
	<h3></h3>
		<form action="" method="post" enctype ="multipart/form-data">
    	<fieldset>
        	<p><label>标	题</label><input name="title" type="text" class="text-long" /></p>
        	<p><label>中文简介</label><textarea name="cn_descript" type="text" style="height:100px"/></textarea></p>
        	<p><label>英文简介</label><textarea name="en_descript" type="text" style="height:100px"/></textarea></p>
			<p><label>上传图片</label>
			<input name="image" id="upimage" type="file">
			</p>
            <input type="submit" value="Submit Query" />
        </fieldset>
		</form>
    </form>
</div>

