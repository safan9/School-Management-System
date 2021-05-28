<?php
	session_start();

	require_once('db_connection.php');
	if(!isset($_SESSION["student_id"])){
		header("location:login.php");
	} 

	$sender = $_POST['sender'];
	$output = '';


	$sql = "SELECT * FROM notification_mst
			WHERE notification_mst.to = 'student' AND notification_mst.from REGEXP '[[:<:]]$sender'
			ORDER BY notification_id DESC";
	$res = mysqli_query($conn, $sql);


				if(mysqli_num_rows($res) > 0){
					while($row = mysqli_fetch_assoc($res)){

						$from = $row['from'];
						$message = $row['message'];
						$date = $row['date'];
						
						$output .= "<div class='well col-md-12'>
								<div class='text-bold'>
									<b>From: <i>$from</i></b>
								</div>
								<div class='text-justify'>
									<p>
										$message
									</p>
								</div>
								<div>
									<p>
										DATE: $date
									</p>
								</div>
							</div>	";
						
					}
				}
				else{
					
					$output .= "<div class='well col-md-5'>
									No Notifications
								</div>";
					
				}

			echo $output;


?>
