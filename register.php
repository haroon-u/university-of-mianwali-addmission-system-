<?php 

	include 'connection.php';

	$program = $_POST['program']; 				//1.  selected program
	$department = $_POST['department']; 		//2.  selected department
	$reserved_seat = $_POST['reservedseat']; 	//3.  Selected reserved seat (allow null)
	//echo $program, $department,$reserved_seat;

	$pic = $_FILES['picture1'];
	$file_name = $pic['name']; 					// actual image name
	$file_name=strtolower($file_name);
	$file_tmp = $pic['tmp_name'];
	$app_cnic = $_POST['app_cnic'];
	$destination = "images/".$app_cnic.$file_name; 		//4.  path where image will be saved.
	//print_r($pic);
	//echo $file_tmp;

	$app_name = $_POST['app_name'];				//5.  Applicants name
	$app_cnic = $_POST['app_cnic'];				//6.  Applicants cnic
	$app_nationality=$_POST['app_nationality'];	//7.  Applicants Nationality
	$app_gender = $_POST['app_gender'];			//8.  Applicants Gender
	$app_no = $_POST['app_no'];					//9.  Applicants cell no
	$app_religion = $_POST['religion'];			//10. Applicant Religion
	$dob = $_POST['dob'];						//11. Applicant Date of birth
	$pob = $_POST['pob'];						//12. Applicant Place of Birth

	//echo $app_name."\n".$app_cnic."\n".$app_nationality."\n".$app_gender."\n".$app_no."\n".$app_religion."\n".$dob."\n".$pob;

	$fname = $_POST['fname'];					//13. Father name
	$fcell = $_POST['fcell'];					//14. Father cell no
	$fcnic = $_POST['fcnic'];					//15. Father's CNIC

	//echo $fname."\n".$fcell."\n".$fcnic;

	$gname = $_POST['gname'];					//16. Guardian Name
	$gcell = $_POST['gcell'];					//17. Guardian cell
	$g_rel = $_POST['g_rel'];					//18. Guardian Relation
	$gcnic = $_POST['gcnic'];					//19. Guardian Cnic
	
	
	
	$tmp_add = $_POST['tmp_add'];				//20. Present Address 
	$per_add = $_POST['per_add'];				//21. Permanent Address
	$fincome = $_POST['fincome'];				//22. Total Income
	$dom_dist =$_POST['dom_dist'];				//23. Domicile District
	$dom_pro = $_POST['dom_pro'];				//24. Domicile district



	$sscboard = $_POST['sscboard'];				//25. SSC Name Of Board
	$sscroll = $_POST['sscroll'];				//26. SSC Roll no
	$sscyear = $_POST['sscyear'];				//27. SSC Passing Year
	$ssclist = $_POST['ssclist'];				//28. SSC Annual/Supplementary
	$ssctmarks = $_POST['ssctmarks'];			//29. SSC Total Marks
	$sscomarks = $_POST['sscomarks'];			//30. SSC Obtained Marks
	$sscpercent = $_POST['sscpercent'];			//31. SSC Percentage
	$sscdiv = $_POST['sscdiv'];					//32. SSC Division


	$hsscboard = $_POST['hsscboard'];			//33. HSSC Name Of Board
	$hsscroll = $_POST['hsscroll'];				//34. HSSC Roll no
	$hsscyear = $_POST['hsscyear'];				//35. HSSC Passing Year
	$hssclist = $_POST['hssclist'];				//36. HSSC Annual/Supplementary
	$hssctmarks = $_POST['hssctmarks'];			//37. HSSC Total Marks
	$hsscomarks = $_POST['hsscomarks'];			//38. HSSC Obtained Marks
	$hsscpercent = $_POST['hsscpercent'];		//39. HSSC Percentage
	$hsscdiv = $_POST['hsscdiv'];				//40. HSSC Division


	$baboard = $_POST['baboard'];				//41. (BA/BCOM/BSc etc) Name Of Board
	$baroll = $_POST['baroll'];					//42. (BA/BCOM/BSc etc) Roll no
	$bayear = $_POST['bayear'];					//43. (BA/BCOM/BSc etc) Passing Year
	$balist = $_POST['balist'];					//44. (BA/BCOM/BSc etc) Annual/Supplementary
	$batmarks = $_POST['batmarks'];				//45. (BA/BCOM/BSc etc) Total Marks
	$baomarks = $_POST['baomarks'];				//46. (BA/BCOM/BSc etc) Obtained Marks
	$bapercent = $_POST['bapercent'];			//47. (BA/BCOM/BSc etc) Percentage
	$badiv = $_POST['badiv'];					//48. (BA/BCOM/BSc etc) Division


	$maboard = $_POST['maboard'];				//49. (MA/MSc/BS) Name Of Board
	$maroll = $_POST['maroll'];					//50. (MA/MSc/BS) Roll no
	$mayear = $_POST['mayear'];					//51. (MA/MSc/BS) Passing Year
	$malist = $_POST['malist'];					//52. (MA/MSc/BS) Annual/Supplementary
	$matmarks = $_POST['matmarks'];				//53. (MA/MSc/BS) Total Marks
	$maomarks = $_POST['maomarks'];				//54. (MA/MSc/BS) Obtained Marks
	$mapercent = $_POST['mapercent'];			//55. (MA/MSc/BS) Percentage
	$madiv = $_POST['madiv'];					//56. (MA/MSc/BS) Division


	$otherboard = $_POST['otherboard'];			//57. (Other Qualification) Name Of Board
	$otherroll = $_POST['otherroll'];			//58. (Other Qualification) Roll no
	$otheryear = $_POST['otheryear'];			//59. (Other Qualification) Passing Year
	$otherlist = $_POST['otherlist'];			//60. (Other Qualification) Annual/Supplementary
	$othertmarks = $_POST['othertmarks'];		//61. (Other Qualification) Total Marks
	$otheromarks = $_POST['otheromarks'];		//62. (Other Qualification) Obtained Marks
	$otherpercent = $_POST['otherpercent'];		//63. (Other Qualification) Percentage
	$otherdiv = $_POST['otherdiv'];				//64. (Other Qualification) Division




	$hafiz="";									//65. For Hafiz-e-Quran
	$disable="";								//66. For Disabled Person

	
if(isset($_POST['hafiz1']))
{
	$hafiz = $_POST['hafiz1'];					
}
if(isset($_POST['disable1']))
{
	$disable = $_POST['disable1'];				
}
	
	
$query = "INSERT INTO  registrations_students (reg_program,reg_department,reg_reserved_seat,reg_image,reg_app_name,reg_app_cnic,reg_app_nationality,reg_app_gender,reg_app_cell,reg_app_religion,reg_DOB,reg_POB,reg_father_name,reg_father_cell,reg_father_cnic,reg_guardian_name,reg_guardian_cell,reg_guardian_relation,reg_guardian_cnic,reg_present_adress,reg_permanent_address,reg_father_income,reg_domicile_district,reg_domicile_province,reg_ssc_board,reg_ssc_roll,reg_ssc_year,reg_ssc_annual/supplementery,reg_ssc_total_marks,reg_ssc_obtained_marks,reg_ssc_percent,reg_ssc_division,reg_hssc_board,reg_hssc_roll,reg_hssc_year,reg_hssc_annual/supplementery,reg_hssc_total_marks,reg_hssc_obtained_marks,reg_hssc_percent,reg_hssc_division,reg_ba_board,reg_ba_roll,reg_ba_year,reg_ba_annual/supplementery,reg_ba_total_marks,reg_ba_obtained_marks,reg_ba_percent,reg_ba_division,reg_ma_board,reg_ma_roll,reg_ma_year,reg_ma_annual/supplementery,reg_ma_total_marks,reg_ma_obtained_marks,reg_ma_percent,reg_ma_division,reg_other_board,reg_other_roll,reg_other_year,reg_other_annual/supplementery,reg_other_total_marks,reg_other_obtained_marks,reg_other_percent,reg_other_division,reg_hafiz,reg_disabled) VALUES ('$program','$department','$reserved_seat','$destination','$app_name','$app_cnic','$app_nationality','$app_gender','$app_no','$app_religion','$dob','$pob','$fname','$fcell','$fcnic','$gname','$gcell','$g_rel','$gcnic','$tmp_add''$per_add','$fincome','$dom_dist','$dom_pro','$sscboard','$sscroll','$sscyear','$ssclist','$ssctmarks','$sscomarks','$sscpercent','$sscdiv','$hsscboard','$hsscroll','$hsscyear','$hssclist','$hssctmarks','$hsscomarks','$hsscpercent','$hsscdiv','$baboard','$baroll','$bayear','$balist','$batmarks','$baomarks','$bapercent','$badiv','$maboard','$maroll','$mayear','$malist','$matmarks','$maomarks','$mapercent','$madiv','$otherboard','$otherroll','$otheryear','$otherlist','$othertmarks','$otheromarks','$otherpercent','$otherdiv','$hafiz','$disable')";

/* $query = "INSERT INTO registrations_students(`reg_program`, `reg_department`, `reg_reserved_seat`, `reg_image`, `reg_app_name`, `reg_app_cnic`, `reg_app_nationality`, `reg_app_gender`, `reg_app_cell`, `reg_app_religion`, `reg_DOB`, `reg_POB`, `reg_father_name`, `reg_father_cell`, `reg_father_cnic`, `reg_guardian_name`, `reg_guardian_cell`, `reg_guardian_relation`, `reg_guardian_cnic`, `reg_present_adress`, `reg_permanent_address`, `reg_father_income`, `reg_domicile_district`, `reg_domicile_province`, `reg_ssc_board`, `reg_ssc_roll`, `reg_ssc_year`, `reg_ssc_annual/supplementery`, `reg_ssc_total_marks`, `reg_ssc_obtained_marks`, `reg_ssc_percent`, `reg_ssc_division`, `reg_hssc_board`, `reg_hssc_roll`, `reg_hssc_year`, `reg_hssc_annual/supplementery`, `reg_hssc_total_marks`, `reg_hssc_obtained_marks`, `reg_hssc_percent`, `reg_hssc_division`, `reg_ba_board`, `reg_ba_roll`, `reg_ba_year`, `reg_ba_annual/supplementery`, `reg_ba_total_marks`, `reg_ba_obtained_marks`, `reg_ba_percent`, `reg_ba_division`, `reg_ma_board`, `reg_ma_roll`, `reg_ma_year`, `reg_ma_annual/supplementery`, `reg_ma_total_marks`, `reg_ma_obtained_marks`, `reg_ma_percent`, `reg_ma_division`, `reg_other_board`, `reg_other_roll`, `reg_other_year`, `reg_other_annual/supplementery`, `reg_other_total_marks`, `reg_other_obtained_marks`, `reg_other_percent`, `reg_other_division`, `reg_hafiz`, `reg_disabled`) VALUES ('$program','$department','$reserved_seat','$destination','$app_name','$app_cnic','$app_nationality','$app_gender','$app_no','$app_religion','$dob','$pob','$fname','$fcell','$fcnic','$gname','$gcell','$g_rel','$gcnic','$tmp_add''$per_add','$fincome','$dom_dist','$dom_pro','$sscboard','$sscroll','$sscyear','$ssclist','$ssctmarks','$sscomarks','$sscpercent','$sscdiv','$hsscboard','$hsscroll','$hsscyear','$hssclist','$hssctmarks','$hsscomarks','$hsscpercent','$hsscdiv','$baboard','$baroll','$bayear','$balist','$batmarks','$baomarks','$bapercent','$badiv','$maboard','$maroll','$mayear','$malist','$matmarks','$maomarks','$mapercent','$madiv','$otherboard','$otherroll','$otheryear','$otherlist','$othertmarks','$otheromarks','$otherpercent','$otherdiv','$hafiz','$disable')" */


if (mysqli_query($conn,$query)) 
{
	move_uploaded_file($file_tmp, $destination);

?>
	<script type="text/javascript">
 	alert("<?php  echo "Successfully Inserted data"; ?>");
 	header('Location:index.php');
 </script>

<?php

}
else
{
?>
<script type="text/javascript">
 	alert("<?php echo "DATA NOT INSERTED"; ?>");
 	header('Location: index.php');
 </script>

<?php

}

 ?>
