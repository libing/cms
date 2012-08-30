<div id="main">
	<form action="join_data.php" method="post" class="jNice" enctype="multipart/form-data">
	<h3></h3>
    	<table cellpadding="0" cellspacing="0">
    		<?php 
    		if(!empty($data) && is_array($data)){
    			foreach($data as $value){
    				echo '<tr>
    				<td><a target="_blank" href="'.$value['linkUrl'].'">'.$value['title'].'</a></td>
    				<td class="action"><a href="#" class="view"></a><a href="#" class="edit">编辑</a><a href="#" class="delete">删除</a></td>
    				</tr>';
    			}
    			
    		}
    		
    		?>

        </table>
	<h3></h3>
		<form action="" method="post" enctype ="multipart/form-data">
    	<fieldset>
    	<?php 
    	if(!empty($main['title'])){
    		echo '<p><label>标	题</label><input name="title" type="text" class="text-long" /></p>';
    	}
    	if(!empty($main['descript'])){
    		echo '<p><label>中文简介</label><textarea name="cn_descript" type="text" style="height:100px"/></textarea></p>
    				<p><label>英文简介</label><textarea name="en_descript" type="text" style="height:100px"/></textarea></p>';
    	}
    	if(!empty($main['linkUrl'])){
    		echo '<p><label>链接地址</label><input name="linkUrl" type="text" class="text-long" /></p>';
    	}
    	if(!empty($main['image'])){
    		echo '<p><label>上传图片</label><input name="image" id="upimage" type="file"></p>';
    	}
    	if(!empty($main['content'])){
    		echo '<p><label>内  容</label><textarea id="editor_id" name="content" style="width:700px;height:300px;"></textarea></p>';
    	}
    	?>
			<input name="channel_ch" id="channel_ch" type="hidden" value="<?php echo $ch; ?>">
			<input name="channel_li" id="channel_li" type="hidden" value="<?php echo $li; ?>">
            <input type="submit" value="提  交" />
        </fieldset>
		</form>
    </form>
</div>

