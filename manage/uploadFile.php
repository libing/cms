<?php
//var_dump($_FILES);
//$upFile = $_FILES;
//$file_src = __DIR__;
//move_uploaded_file($upFile['image']['tmp_name'], $file_src.DIRECTORY_SEPARATOR.time().strrchr($upFile['image']['name'],'.'));
//
?>

<div id="main">
	<form action="join_data.php" method="post" class="jNice" enctype="multipart/form-data">
	<h3></h3>
    	<table cellpadding="0" cellspacing="0">
    		<?php 
    		if(!empty($data) && is_array($data)){
    			foreach($data as $value){
    				echo '<tr>
    				<td>'.$value['title'].'</td>
    				<td class="action"><a href="#" class="view"></a><a href="#" class="edit">编辑</a><a href="#" class="delete">删除</a></td>
    				</tr>';
    			}
    			
    		}
    		
    		?>

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
			<input name="channel_ch" id="channel_ch" type="hidden" value="<?php echo $ch; ?>">
			<input name="channel_li" id="channel_li" type="hidden" value="<?php echo $li; ?>">
            <input type="submit" value="提交" />
        </fieldset>
		</form>
    </form>
</div>

