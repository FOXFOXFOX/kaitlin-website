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
			echo '<div class="thumbnail">';
			echo '	<a href="/work/'.$project_data['name'].'">';
			echo '		<img src="/content/thumbs/'.$project_data['name'].'.jpg"/>';
			echo '		<h3>'.$title.'</h3>';
			echo '		<p>'.$project_data['type'].'</p>';
			echo '	</a>';
			echo '</div>';
		}
	}
	else {
		echo 'Error in query: $dashboard_query. '.$connection->error;
	}
?>