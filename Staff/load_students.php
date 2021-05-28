<?php
	session_start();

	require_once("db_connection.php");
	//checking if admin already logged in or not 
	if(!isset($_SESSION["staff_id"]) && !isset($_SESSION["staff_name"])){
		header("Location:../login.php");
	}

	$output = '';

	$div_id = $_POST['division_id'];
	$sql = "SELECT * FROM student_mst
			WHERE division_id = $div_id";
	$res = mysqli_query($conn, $sql);

	if(mysqli_num_rows($res) > 0){
			
			

			while($row = mysqli_fetch_assoc($res)){

				$id = $row['student_id'];
				$name = $row['fname']." ".$row['lname'];
				$gender = $row['gender'];
				$mobile_no = $row['mobile_no'];
				$email = $row['email'];
				$dor = $row['dor'];
				$status = strtoupper($row['isactive']);
				$photo = $row['photo'];

				$output .= "
					<tr class='odd gradeX'>
						
						<td>
							$id
						</td>
						<td class='left'>
							$name
						</td>
						<td class='left'>
							$gender
						</td>
						<td>
							<a href='tel:$mobile_no'>
								$mobile_no
							</a>
						</td>
						<td>
							<a href='mailto:$email'>
								$email 
							</a>
						</td>
						<td class='left'>
							$dor
						</td>
						<td class='text-center'>
							$status
						</td><td>";



						if($row["isactive"] == 'false'){
																						
							$output .= "<a href='vendor/active_student.php?id=$id'  class='btn btn-primary btn-xs'>
								<i class='fa fa-check'></i>
								Activate
							</a>";																
																							
						}else{
																						
							$output .= "<a href='vendor/deactive_student.php?id=$id'  class='btn btn-warning btn-xs'>
								<i class='fa fa-times'></i>
								Deactivate
							</a>";
						}

						$output .= "</td>";																																
			}
	}else{
		$output .= "<h2>No Data Found</h2>";
	}

	echo $output;

?>	


