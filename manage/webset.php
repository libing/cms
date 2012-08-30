<div id="main">
	<form action="" method="post" class="jNice" enctype="multipart/form-data">

		<form action="" method="post" enctype ="multipart/form-data">
    	<fieldset>
    	<?php
    	if(!empty($_POST)){
    		$add_data = $DBopera->data_update('settings',array('webHost'=>$_POST['webHost'],'webName'=>$_POST['webName'],'webKey'=>$_POST['webKey'],'webDescribe'=>$_POST['webDescribe']),array('id'=>$_POST['id']));
			echo '<script>alert("修改成功");location.href="index.php?ch='.$_POST['channel_ch'].'&li='.$_POST['channel_li'].'";</script>';
    	}

    		echo '<p><label>网站地址</label><input name="webHost" type="text" class="text-long" value="'.$_GLOBALS['webHost'].'" /></p>
    		<p><label>网站名称</label><input name="webName" type="text" class="text-long"  value="'.$_GLOBALS['webName'].'" /></p>
    		<p><label>网站关键字</label><textarea name="webKey" type="text" style="height:100px"/>'.$_GLOBALS['webKey'].'</textarea></p>
			<p><label>网站介绍</label><textarea name="webDescribe" type="text" style="height:100px"/>'.$_GLOBALS['webDescribe'].'</textarea></p>
    		<input name="id" id="id" type="hidden" value="'.$_GLOBALS['id'].'">
    		<input name="channel_ch" id="channel_ch" type="hidden" value="'.$ch.'">
    		<input name="channel_li" id="channel_li" type="hidden" value="'.$li.'">';
    	?>
            <input type="submit" value="修 改" />
        </fieldset>
		</form>
    </form>
</div>

