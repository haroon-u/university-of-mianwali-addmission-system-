
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<?php include "connection.php"; //All connections 

		$program = "select * from programs_offered";
		$res1 = mysqli_query($conn,$program);
		$reserved_seats = "select * from stu_reserved_seats";
		$res2 = mysqli_query($conn,$reserved_seats);
		$departments="select * from departments";
		$res3 = mysqli_query($conn,$departments);
		//print_r($res);
	?> 

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<div class="container"> <!-- Registration Form Headings start -->

	<div class=" row head">		<!-- Header -->
		<div class="mt-4 p-5 bg-primary text-white rounded">
			<div class="row">
				<div class="col-sm-4"><img align="right" height="100px" width="100px" class="img-fluid" src="images/cropped-umw-1.png"></div>
				<div class="col-sm-8 display-3"><lable >UNIVERSITY OF <br> MIANWALI</lable>
  				</div>
			</div>
		</div>
	</div>	<!-- Header Ends-->

	<div class="row" align="center">	<!-- Sub heading --> 
		
		<div class="bg-info h2 center">
			<label>Application Form for Admission</label>
		</div>

	</div><!-- Sub heading ends-->
	
</div> <!-- Registration Form Headings Ends -->
					<nav class="container navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
			  			<ul class="navbar-nav">
			    		<li><a href="#section1" class="nav-link">Department Detail</a></li>
			    		<ul class="navbar-nav">
			    		<li><a href="#section2" class="nav-link">Personal Detail</a></li>
			    		<ul class="navbar-nav">
			    		<li><a href="#section3" class="nav-link">Academic Record</a></li>
			    		<ul class="navbar-nav">
			    		<li><a href="#section4" class="nav-link">For Hafiz-e-Quran</a></li>
			    		<ul class="navbar-nav">
			    		<li><a href="#section5" class="nav-link">For Disabled </a></li>
					</nav>	
<br><br>
<div class="container"> <!-- Form Starts -->
	
	<form method="POST" enctype="multipart/form-data" onsubmit="return validation1()" action="register.php">
		

		<div class="row" id="section1"> <!-- Section for the Department and Image -->
			<div class="col-sm-9">

				<div>
					<div class="form-check">
						<label  class="form-label fw-bold">Select Program for which Applied:</label><br>
						<input class="form-control" list="programs" name="program" id="program" placeholder="Choose here">
							<datalist id="programs">
						<?php while($row = mysqli_fetch_assoc($res1))
							{
						 ?>
							  <option value="<?php echo $row['program_name'] .' ('. $row['program_discription'].')'; ?>">
						<?php } ?>
							</datalist>
						</div>
					  
					<!--
					<div class="form-check">
						<input type="radio" class="form-check-input" id="programradio1" name="program1" value="undergraduate">Undergraduate (for BS Programs only)<br>
					  <label class="form-check-label" for="radio1"></label>
					  <input type="radio" class="form-check-input" id="programradio2" name="program1" value="postgraduate">Postgraduate (for MS/MPhil Programs only)
					  <label class="form-check-label" for="radio2"></label>
					</div> -->
				</div>	<br>

				<div>
					<label  class="form-label">Choose Department from the list: </label>
							<input class="form-control" list="departments" name="department" id="departmentid" placeholder="Choose here">
							<datalist id="departments">
						<?php while($row = mysqli_fetch_assoc($res3))
							{
						 ?>
							  <option value="<?php echo $row['dept_name'] ?>">
						<?php } ?>
							</datalist>
				</div>

						<div>
							<div class="mb-3 mt-3">
							<label  class="form-label">Choose Type of Reserved Seat (if Applied for reserved Seat ) : </label>
		    				<input class="form-control" list="reserved" name="reservedseat" id="reservedseat" placeholder="Choose here">
							<datalist id="reserved">
						<?php while($row = mysqli_fetch_assoc($res2))
							{
						 ?>
							  <option value="<?php echo $row['reserved_seat_name'] .' ('. $row['reserved_seat_discription'].')'; ?>">
						<?php } ?>
							</datalist>
		  				</div>
		  				<div>
				  			<div class="mb-3">
  								<label for="formFile" class="form-label">NOTE: Candidates have to bring Supporting Documents ( if applied for reserved seats )</label>

							</div>
		  				</div>
				</div>
				
			</div>

			<div align="center" class="col-sm-3 border border-dark border-2"> <!-- Image of student -->
				
				<div class="fluid-container " >
				
					<div class="row file-upload">

							<div class="file-upload-content ">
    					<img class="file-upload-image img-resonsive" src="#" alt="your image" />

    					
  					</div>
  						<div class="image-upload-wrap ">
    						<input class="file-upload-input"  type='file' onchange="readURL(this);" accept="image/*" id="image1" name="picture1" />

    						<div class="drag-text">
      							<h3>Drag and drop or add your Image</h3>
    						</div>
  						</div>
				</div>
				<br>
				<div class="file-upload-content ">
					<div class="image-title-wrap ">
      						<button type="button" onclick="removeUpload()" class=" btn btn-danger remove-image">Remove Image</button>
    					</div>
				</div>
				<div class=" align-end">
  					<button class="btn btn-info" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload your Image</button></div>
					</div>
			</div>		<!-- Image of student Ends -->
		</div>		<!-- Section for the Department and Image Ends -->
<br><hr>
			<div class="row ">
				<div class="col-sm-12 text-center h2">
					<label class="form-label">(PART 1) COMPULSARY FOR ALL ADMISSIONS </label>
				</div>
			</div>
<hr>


			<div class="row" id="section2">												<!-- All personal details -->
			
				<div class="row rounded bg-info  h4" >
				<div class="col-sm-12">1. Personal Details (Write details EXACTLY as they appear in your documents). </div>
			</div>
			<div class="row">

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Applicant's Name :</span>
    					<input type="text" class="form-control" placeholder="Write your Name here" id="app_name" name="app_name">
  					</div>
					</div>

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">CNIC No. </span>
    					<input type="number" class="form-control" placeholder="Enter CNIC here (without Dashes) eg. 38xxxxxxxxxxx" id="app_cnic" name="app_cnic">
  					</div>
					</div>

					<div class="row mt-2">
						<div class="col-sm-6">
							<div class="input-group">
    					<span class="input-group-text">Nationality : </span>
    					<input type="text" class="form-control" placeholder="Enter Nationality here" id="app_nationality" name="app_nationality">
  					</div>
						</div>
						<div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-text"> Gender :</span>
											<input class="form-control" list="gender" name="app_gender" id="app_gender" placeholder="Select Here">
												<datalist id="gender">
													<option value="Male">
													<option value="Female">
													<option value="Trans Gender">
												</datalist>
									</div>
						</div>
					</div>


					<div class="row mt-2">
						<div class="col-sm-6">
							<div class="input-group">
    						<span class="input-group-text">Applicant's Cell No. </span>
    						<input type="number" class="form-control" placeholder="Mobile" id="app_no" name="app_no">
  							</div>
						</div>
						<div class="col-sm-6">
							<div class="input-group">
										<span class="input-group-text"> Religion :</span>
											<input class="form-control" list="religion1" name="religion" id="religion" placeholder="Select Here">
												<datalist id="religion1">
													<option value="Muslim">
													<option value="Christian">
													<option value="Hindu">
													<option value="other">
												</datalist>
									</div>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-sm-6">
							<div class="input-group">
    						<span class="input-group-text">Date Of Birth </span>
    						<input type="date" class="form-control" id="dob" name="dob">
  							</div>
						</div>
						<div class="col-sm-6">
							<div class="input-group">
    						<span class="input-group-text">Place of Birth </span>
    						<input type="text" class="form-control" placeholder="Enter city" id="pob" name="pob">
  							</div>
						</div>
					</div>



					<div class="row mt-2">
						<div class="col-sm-8">
						<div class="input-group">
    					<span class="input-group-text">Father's Name : </span>
    					<input type="text" class="form-control" placeholder="Enter Father Name Here" id="fname" name="fname">
  					</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
    					<span class="input-group-text">Cell No. </span>
    					<input type="number" class="form-control" placeholder="03xxxxxxxxx" id="fcell" name="fcell">
  					</div>
						</div>
					</div>
					
					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Father's CNIC No. </span>
    					<input type="number" class="form-control" placeholder="eg. 38xxxxxxxxxxx" id="fcnic" name="fcnic">
  					</div>
					</div>


					<div class="row mt-2">
						<div class="col-sm-8">
						<div class="input-group">
    					<span class="input-group-text">Guardian's Name : </span>
    					<input type="text" class="form-control" placeholder="Enter Guardian Name Here (Optional)" id="gname" name="gname">
  					</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
    					<span class="input-group-text">Guardian Cell No. </span>
    					<input type="number" class="form-control" placeholder="03xxxxxxxxx (Optional)" id="gcell" name="gcell">
  					</div>
						</div>
					</div>
					

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Relationship with Applicant : </span>
    					<input type="text" class="form-control" placeholder="Type Here (Optional)" id="g_rel" name="g_rel">
  					</div>
					</div>

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Guardian's CNIC No. </span>
    					<input type="number" class="form-control" placeholder="38xxxxxxxxxxx (Optional)" id="gcnic" name="gcnic">
  					</div>
					</div>

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Present Address : </span>
    					<input type="text" class="form-control" placeholder="Type Present Address here" id="tmp_add" name="tmp_add" >
  					</div>
					</div>
					<!--
					<div class="row mt-2">
						<div class="col-sm-4">
						<div class="input-group">
    					<span class="input-group-text">City : </span>
    					<input type="text" class="form-control" placeholder="Present" id="tmp_city" name="tmp_city">
  					</div>
						</div>
						<div class="col-sm-4">
						<div class="input-group">
    					<span class="input-group-text">District : </span>
    					<input type="text" class="form-control" placeholder="Present" id="tmp_dist" name="tmp_dist" >
  					</div>
						</div>
						<div class="col-sm-4"></div>
					</div> -->

					<div class="row mt-2">
						<div class="input-group">
    					<span class="input-group-text">Permanent Address : </span>
    					<input type="text" class="form-control" placeholder="Type Permanent Address here" id="per_add" name="per_add">
  					</div>
					</div>

					<!--<div class="row mt-2">
						<div class="col-sm-4">
						<div class="input-group">
    					<span class="input-group-text">City : </span>
    					<input type="text" class="form-control" placeholder="Permanent" id="per_city" name="pre_city">
  					</div>
						</div>
						<div class="col-sm-4">
						<div class="input-group">
    					<span class="input-group-text">District : </span>
    					<input type="text" class="form-control" placeholder="Permanent" id="per_dist" name="per_dist">
  					</div>
						</div>
						<div class="col-sm-4"></div>
					</div>-->

					<!-- <div class="row mt-2">
						<div class="col-sm-6">
								<div class="input-group">
    					<span class="input-group-text">Phone No. Office </span>
    					<input type="number" class="form-control" placeholder="Enter Cell no">
  						</div>
						</div>
						<div class="col-sm-6">
								<div class="input-group">
    						<span class="input-group-text">Residence : </span>
    						<input type="number" class="form-control" placeholder="Enter Cell no">
  							</div>
						</div>
					</div> -->


					<div class="row mt-2 mb-3">
						<div class="col-sm-4">
							<div class="input-group">
    						<span class="input-group-text">Father's/ Guardian's<br> Annual Income <br> From all Sources </span>
    						<input type="number" class="form-control" placeholder="Total Amount" id="fincome" name="fincome">
  							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
    						<span class="input-group-text"><br>Domicile District<br><br> </span>
    						<input type="text" class="form-control" placeholder="District" id="dom_dist" name="dom_dist">
  							</div>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
    						<span class="input-group-text"><br>Domicile Province<br><br></span>
    						<input type="text" class="form-control" placeholder="Province" id="dom_pro" name="dom_pro" >
  							</div>
						</div>
					</div>


			</div>
		</div> 																				<!-- All personal details -->
			
<hr>

			<div class="row mt-2" id="section3">												<!-- All Academic data -->
			
				<div class="row rounded bg-info  h4" >
				<div class="col-sm-12">2. Academic Record (Fill all details Correctly).</div>
			</div>
			<div class="row">    														<!-- SSC Examination Data -->
				
						<div class="row text-center mt-3">
							<label class="form-label h4"><u> (SSC Examination) </u></label>
						</div>

						<div class="row mt-2">
							<div class="input-group">
    						<span class="input-group-text">Name Of Board/Institution : </span>
    						<input type="text" class="form-control" placeholder="Type Here" id="sscboard" name="sscboard">
  						</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Roll no.  </span>
    						<input type="text" class="form-control" placeholder="Roll No" id="sscroll" name="sscroll">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Passing Year :</span>
    						<input type="number" class="form-control" placeholder="Enter Year" id="sscyear" name="sscyear">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
										<span class="input-group-text"> Annual/Supplementary :</span>
											<input class="form-control" list="ssc" id="ssclist" name="ssclist" placeholder="Select Here">
												<datalist id="ssc">
													<option value="Annual">
													<option value="Supplementary">
												</datalist>
									</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Total Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="ssctmarks" name="ssctmarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Obtained Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="sscomarks" name="sscomarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Percentage % : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="sscpercent" name="sscpercent">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Division : </span>
    							<input type="text" class="form-control" placeholder="Enter" id="sscdiv" name="sscdiv">
  							</div>
							</div>
						</div>

			</div>			<!-- SSC Examination Data Ends-->



			<div class="row mt-4">    							<!-- HSSC Examination Data -->
				
						<div class="row text-center mt-3">
							<label class="form-label h4"><u> (HSSC/DAE/A level etc) </u></label>
						</div>

						<div class="row mt-2">
							<div class="input-group">
    						<span class="input-group-text">Name Of Board/Institution : </span>
    						<input type="text" class="form-control" placeholder="Type Here" id="hsscboard" name="hsscboard">
  						</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Roll no.  </span>
    						<input type="text" class="form-control" placeholder="Roll No" id="hsscroll" name="hsscroll">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Passing Year :</span>
    						<input type="number" class="form-control" placeholder="Enter Year" id="hsscyear" name="hsscyear">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
										<span class="input-group-text"> Annual/Supplementary :</span>
											<input class="form-control" list="ssc" id="hssclist" name="hssclist" placeholder="Select Here">
												<datalist id="ssc">
													<option value="Annual">
													<option value="Supplementary">
												</datalist>
									</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Total Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="hssctmarks" name="hssctmarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Obtained Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="hsscomarks" name="hsscomarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Percentage % : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="hsscpercent" name="hsscpercent">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Division : </span>
    							<input type="text" class="form-control" placeholder="Enter" id="hsscdiv" name="hsscdiv">
  							</div>
							</div>
						</div>

			</div>			<!-- HSSC Examination Data Ends -->


			<div class="row mt-4">    											<!-- BA/BCOM/BSc etc  Data -->
				
						<div class="row text-center mt-3">
							<label class="form-label h4"><u> (BA/BCOM/BSc etc) </u></label>
						</div>

						<div class="row mt-2">
							<div class="input-group">
    						<span class="input-group-text">Name Of Board/Institution : </span>
    						<input type="text" class="form-control" placeholder="Type Here" id="baboard" name="baboard">
  						</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Roll no.  </span>
    						<input type="text" class="form-control" placeholder="Roll No" id="baroll" name="baroll">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Passing Year :</span>
    						<input type="number" class="form-control" placeholder="Enter Year" id="bayear" name="bayear">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
										<span class="input-group-text"> Annual/Supplementary :</span>
											<input class="form-control" list="ssc" id="balist" name="balist" placeholder="Select Here">
												<datalist id="ssc">
													<option value="Annual">
													<option value="Supplementary">
												</datalist>
									</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Total Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="batmarks" name="batmarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Obtained Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="baomarks" name="baomarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Percentage % : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="bapercent" name="bapercent">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Division : </span>
    							<input type="text" class="form-control" placeholder="Enter" id="badiv" name="badiv">
  							</div>
							</div>
						</div>

			</div>			<!-- BA/BCOM/BSc etc Ends -->

			<div class="row mt-4">    													<!-- MA/MSc/BS etc  Data -->
				
						<div class="row text-center mt-3">
							<label class="form-label h4"><u> (MA/MSc/BS) </u></label>
						</div>

						<div class="row mt-2">
							<div class="input-group">
    						<span class="input-group-text">Name Of Board/Institution : </span>
    						<input type="text" class="form-control" placeholder="Type Here" id="maboard" name="maboard">
  						</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Roll no.  </span>
    						<input type="text" class="form-control" placeholder="Roll No" id="maroll" name="maroll">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Passing Year :</span>
    						<input type="number" class="form-control" placeholder="Enter Year" id="mayear" name="mayear">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
										<span class="input-group-text"> Annual/Supplementary :</span>
											<input class="form-control" list="ssc" id="malist" name="malist" placeholder="Select Here">
												<datalist id="ssc">
													<option value="Annual">
													<option value="Supplementary">
												</datalist>
									</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Total Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="matmarks" name="matmarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Obtained Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="maomarks" name="maomarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Percentage % : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="mapercent" name="mapercent">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Division : </span>
    							<input type="text" class="form-control" placeholder="Enter" id="madiv" name="madiv">
  							</div>
							</div>
						</div>

			</div>			<!-- MA/MSc/BS etc Ends -->


			<div class="row mt-4">    												<!-- Other Qualification  Data -->
				
						<div class="row text-center mt-3">
							<label class="form-label h4"><u> (Other Qualification) </u></label>
						</div>

						<div class="row mt-2">
							<div class="input-group">
    						<span class="input-group-text">Name Of Board/Institution : </span>
    						<input type="text" class="form-control" placeholder="Type Here" id="otherboard" name="otherboard">
  						</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Roll no.  </span>
    						<input type="text" class="form-control" placeholder="Roll No" id="otherroll" name="otherroll">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
    						<span class="input-group-text">Passing Year :</span>
    						<input type="number" class="form-control" placeholder="Enter Year" id="otheryear" name="otheryear">
  						</div>
							</div>
							<div class="col-sm-4">
								<div class="input-group">
										<span class="input-group-text"> Annual/Supplementary :</span>
											<input class="form-control" list="ssc" id="otherlist" name="otherlist" placeholder="Select Here">
												<datalist id="ssc">
													<option value="Annual">
													<option value="Supplementary">
												</datalist>
									</div>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Total Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="othertmarks" name="othertmarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Obtained Marks : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="otheromarks" name="otheromarks">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Percentage % : </span>
    							<input type="number" class="form-control" placeholder="Enter" id="otherpercent" name="otherpercent">
  							</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
    							<span class="input-group-text">Division : </span>
    							<input type="text" class="form-control" placeholder="Enter" id="otherdiv" name="otherdiv">
  							</div>
							</div>
						</div>

			</div>			<!-- Other Qualification Ends -->





		</div> 																								<!-- All Academic data ends -->
<br><hr><br>

		<div class="row">
			<div class="col-sm-6 border">
				

				<div class="row mt-3" id="section4">												<!-- Hafiz-e-Quran data -->
			
				<div class="row rounded bg-info  h4" >
				<div class="col-sm-12">3. Hafiz-e-Quran Candidates only.</div>
			</div>
			<div class="row">
					<div class="col-sm-3"></div>
					<div class=" col-sm-6 form-check">
						<label  class="form-label fw-bold"><br><br><br>If you are Hafiz-e-Quran, then check the box below :</label><br>
					  <input type="checkbox" class="form-check-input" id="hafiz" name="hafiz1" value="hafiz"> 
					  <label class="form-check-label" for="checkbox">I hereby solemnly declare that I am a Muslim Hafiz-e- Quran.<br><br>(Candidate has to bring Certificate issued by a recognized institution / other authority.)<br></label>
					</div>
					<div class="col-sm-3"></div>

			</div>

		</div> 																								<!-- Hafiz-e-Quran data ends -->


			</div>

			<div class="col-sm-6 border">
				

				<div class="row mt-3" id="section5">												<!-- Disabled Candidates data -->
			
				<div class="row rounded bg-info  h4" >
				<div class="col-sm-12">4. Disabled Candidates Only.</div>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
					<div class=" col-sm-6 form-check">
						<label  class="form-label fw-bold"><br><br><br>If you are a Disabled Candidate, then check the box below :</label><br>
					  <input type="checkbox" class="form-check-input " id="disable" name="disable1" value="disable"> 
					  <label class="form-check-label" for="checkbox">I hereby solemnly declare that I am a Disabled Person.<br><br>(Candidate has to bring Certificate issued by the Disability Board / any other authority.) <br></label>
					</div>
					<div class="col-sm-3"></div>

			</div>

		</div> 															<!-- Disabled Candidates data ends -->


			</div>
		</div>

	<br><br>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 row">
			<input class="btn btn-primary" type="submit" name="submitbtn" value="Submit">
		</div>
		<div class="col-sm-3"></div>
	</div>			



	</form>

</div><!-- Form Ends -->
<br>
<div class="container bg-dark">
	<br>
</div>


</body>

<script type="text/javascript">








//for image 
	function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});

</script>
</html>