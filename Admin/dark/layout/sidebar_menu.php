<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true"
						 data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
									</div>
									<div class="pull-left info">
										<p><?php echo $_SESSION["username"]; ?></p>
										<a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline"> Online</span></a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="home.php" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Professors</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_professors.php" class="nav-link "> <span class="title">All Staff</span>
										</a>
									</li>
					
									<li class="nav-item">
										<a href="add_professor_bootstrap.php" class="nav-link "> <span class="title">Add Staff</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_students.php" class="nav-link "> <span class="title">All Students</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
									<span class="title">Classes</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_courses.php" class="nav-link "> <span class="title">All Classes</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_course.php" class="nav-link "> <span class="title">Add Class</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">book</i>
									<span class="title">Subjects</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="all_subjects.php" class="nav-link "> <span class="title">All Subjects</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_subject.php" class="nav-link "> <span class="title">Add Subject</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"><i class="material-icons">email</i>
									<span class="title">Notification</span><span class="arrow"></span>
								</a>
									<ul class="sub-menu">
										<li class="nav-item">
											<a href="all_notifications.php" class="nav-link">
												<span class="title">All Notifications</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="send_notification.php" class="nav-link">
												<span class="title">Send Notifications</span>
											</a>
										</li>
									</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">monetization_on</i>
									<span class="title">Fees</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="fees_collection.php" class="nav-link "> <span class="title">Fees Collection</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="add_fee_structure.php" class="nav-link "> <span class="title">Add Fees Structure</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">image</i>
									<span class="title">Manage Gallery</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="image_upload.php" class="nav-link "> <span class="title">Upload Images</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="all_images.php" class="nav-link "> <span class="title">All Students Uploads</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">assessment</i>
									<span class="title">Reports</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="attendance_report.php" class="nav-link "> <span class="title">Attendance Report</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="fee_report.php" class="nav-link "> <span class="title">Fee Report</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="result_report.php" class="nav-link "> <span class="title">Result Report</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="academic_year.php" class="nav-link"><i class="material-icons">today</i>
									<span class="title">Academic Year</span>
								</a>
							</li>
							
								</ul>
							</li>	
						</ul>
					</div>
				</div>
			</div>