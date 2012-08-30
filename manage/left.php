<body>
	<div id="wrapper">
    	<h1><a href="#"><span>Transdmin Light</span></a></h1>
        
        <ul id="mainNav">
        	<!--
			<li><a href="#" class="active">DASHBOARD</a></li>
			<li class="logout"><a href="#">LOGOUT</a></li>
			-->
			<?php
				foreach($channel as $value){
					echo "<li><a href='?ch={$value['chfile']}' class='".($ch == $value['chfile'] ? 'active':'')."'>{$value['chname']}</a></li>";
				}
				unset($value);
			?>
			<li class="logout"><a href="#">退出</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
			<div id="container">
        		<div id="sidebar">
                	<ul class="sideNav">

						<?php
							foreach($list as $value){
								echo "<li><a href='?ch={$ch}&li={$value['id']}' class='".($li == $value['id'] ? 'active':'')."'>{$value['chname']}</a></li>";
							}
							unset($value);
						?>
						
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
