<?php
include_once __DIR__.DIRECTORY_SEPARATOR.'setting.php';
include_once $admin_dir.'header.php';
include_once $admin_dir.'left.php';
if(!empty($_GET['li'])){
	include_once $_GET['li'].'.php';
}

?>
                

				
<?php
include_once $admin_dir.'footer.php';
