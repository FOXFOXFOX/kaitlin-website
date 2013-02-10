<!----------------------------------------------------------------------------
Work PHP for IanPaschal.com
Designed by Ian Paschal, ©2012
contact@ianpaschal.com
http://www.ianpaschal.com/
----------------------------------------------------------------------------->

<?php
	include($root_url.'/assets/php/connection.php');
	$work_query = "SELECT * FROM projects ORDER BY date DESC";
	if ($work_result = $connection->query($work_query)) {
		while($project_data = $work_result->fetch_array(MYSQLI_ASSOC)) {
			$title = str_replace('-', ' ', $project_data['name']);
			$title = ucwords($title);
			echo '<div class="edit_tile">';
			echo '	<a class="left" href="/work/'.$project_data['name'].'">';
			echo '		<h3>'.$title.'</h3>';
			echo '		<p>'.$project_data['type'].'</p>';
			echo '	</a>';
			echo '	<div class="right" id="edit_buttons">';
			echo '		<img class="right" src="/assets/img/edit.png"/>';
			echo '		<img class="right" src="/assets/img/cancel.png"/>';
			echo '	</div>';
			echo '</div>';
		}
	}
	else {
		echo 'Error in query: $dashboard_query. '.$connection->error;
	}
?>