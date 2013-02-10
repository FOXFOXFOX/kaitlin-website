<!----------------------------------------------------------------------------
View PHP for IanPaschal.com
Designed by Ian Paschal, ©2012
contact@ianpaschal.com
http://www.ianpaschal.com/
----------------------------------------------------------------------------->

<?php
	include($root_url.'/assets/php/connection.php');
	$view_query = "SELECT * FROM projects WHERE name='".$url[2]."'";
	if ($view_result = $connection->query($view_query)) {
		while($data = $view_result->fetch_array(MYSQLI_ASSOC)) {
			$title = str_replace('-', ' ', $data['name']);
			$title = ucwords($title);
			$date = split('-', $data['date']);
			$months = array(
				'01' => 'January',
				'02' => 'February',
				'03' => 'March',
				'04' => 'April',
				'05' => 'May',
				'06' => 'June',
				'07' => 'July',
				'08' => 'August',
				'09' => 'September',
				'10' => 'October',
				'11' => 'November',
				'12' => 'December',
			);
			echo '<div class="fullview">';
			echo '	<h2 class="title">'.$title.'</h2>';
			echo '	<p>'.$data['type'].' &mdash; '.$months[$date[1]].', '.$date[0].'</p>';
			echo 		$data['data'];
			echo '</div>';
		}
	}
	else {
		echo 'Error in query: $dashboard_query. '.$connection->error;
	}
?>