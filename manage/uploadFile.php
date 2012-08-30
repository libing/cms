<div id="main">
	<h3></h3>
    	<table cellpadding="0" cellspacing="0">
    		<?php 
    		if(!empty($data) && is_array($data)){
    			foreach($data as $value){
    				echo '<tr>
    				<td><a target="_blank" href="'.$value['linkUrl'].'">'.$value['title'].'</a></td>
    				<td class="action"><a href="#" class="view"></a><a href="?ch='.$ch.'&li='.$li.'&id='.$value['id'].'&opera=update" class="edit">编辑</a><a href="dele_data.php?ch='.$ch.'&li='.$li.'&id='.$value['id'].'" class="delete">删除</a></td>
    				</tr>';
    			}
    			
    		}
    		
    		?>

        </table>
	<h3></h3>
		
    	<?php 
    	if(!empty($_GET['opera']) && $_GET['opera'] == 'update' && !empty($_GET['id'])){
    		$array = array();
			$array = $DBopera->data_query(array('*'),array('data'),array('id'=>$_GET['id']));
			
    		echo '<form action="up_data.php" method="post" enctype ="multipart/form-data">
    		<fieldset>';
    		if(!empty($array[0]['title'])){
    			echo '<p><label>标	题</label><input name="title" type="text" class="text-long" value="'.$array[0]['title'].'"/></p>';
    		}
    		if(!empty($array[0]['cn_describe'])){
    			echo '<p><label>中文简介</label><textarea name="cn_describe" type="text" style="height:100px"/>'.$array[0]['cn_describe'].'</textarea></p>
    			<p><label>英文简介</label><textarea name="en_describe" type="text" style="height:100px"/>'.$array[0]['en_describe'].'</textarea></p>';
    		}
    		if(!empty($array[0]['linkUrl'])){
    			echo '<p><label>链接地址</label><input name="linkUrl" type="text" class="text-long"  value="'.$array[0]['linkUrl'].'"/></p>';
    		}
    		if(!empty($array[0]['images'])){
    			echo '<p><label>上传图片</label><input name="image" id="upimage" type="file"></p>';
    		}
    		if(!empty($array[0]['content'])){
    			echo '<p><label>内  容</label><textarea id="editor_id" name="content" style="width:700px;height:300px;">'.$array[0]['content'].'</textarea></p>';
    		}
    		echo '<input name="channel_ch" id="channel_ch" type="hidden" value="'.$ch.'">
    		<input name="id" id="id" type="hidden" value="'.$array[0]['id'].'">
    		<input name="channel_li" id="channel_li" type="hidden" value="'.$li.'">
    		<input type="submit" value="修  改" />
    		</fieldset>
    		</form>';
    	}else{
    		echo '<form action="join_data.php" method="post" enctype ="multipart/form-data">
    		<fieldset>';
    		if(!empty($main['title'])){
    			echo '<p><label>标	题</label><input name="title" type="text" class="text-long" /></p>';
    		}
    		if(!empty($main['describe'])){
    			echo '<p><label>中文简介</label><textarea name="cn_describe" type="text" style="height:100px"/></textarea></p>
    			<p><label>英文简介</label><textarea name="en_describe" type="text" style="height:100px"/></textarea></p>';
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
    		echo '<input name="channel_ch" id="channel_ch" type="hidden" value="'.$ch.'">
    		<input name="channel_li" id="channel_li" type="hidden" value="'.$li.'">
    		<input type="submit" value="提  交" />
    		</fieldset>
    		</form>';
    	}
    	
    	
    	?>

</div>

