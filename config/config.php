<?php
	$getdata = $db_conn->query("SELECT * FROM dbmsurvey where id ='$_GET[id]'");
	while($sitedata=$getdata->fetch_array()):
		$fas = $getdata['fascount'];
		$page_title = $getdata['srvname'];
	endwhile;
	?>