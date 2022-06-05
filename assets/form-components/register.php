<?php 

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

//pr

if(isset($_POST['enroll']))
{

	//print_r($_POST);
	$search = 'SELECT id FROM registration ORDER BY id DESC LIMIT 1';
	$result = mysqli_query($conn,$search);
	$num = mysqli_fetch_assoc($result);
	$num=$num["id"];
	//echo $num["id"];
	

	$program = $_POST['program'];								//1.  selected program 						int(100)
	$degree = $_POST['offered_programs'];						//2.  selected department					int(100)
	$seat = $_POST['seat'];										//3.  Selected reserved seat 				int(50)

	//echo $program.$dept.$seat;

	$pic = $_FILES['image'];
	$file_name = $pic['name']; 									// actual image name
	$file_name=strtolower($file_name);
	$file_tmp = $pic['tmp_name'];
	$cnic = $_POST['cnic'];
	$image = "admission/images/".$cnic.$num.$file_name; 		//4.  path where image will be saved.		text
	//print_r($pic);
	//echo $file_tmp."<br>";
	//echo $image;

	$name = $_POST['name'];										//5.  Applicants name						varchar(255)
	$cnic = $_POST['cnic'];										//6.  Applicants cnic 						bigint(255)	
	$nationality = $_POST['nationality'];						//7.  Applicants Nationality				varchar(100)
	$gender = $_POST['gender'];									//8.  Applicants Gender						int(50)

	//echo $name."<br>".$cnic."<br>".$nationality."<br>".$gender;

	$cell = $_POST['cell'];										//9.  Applicants cell no 					bigint(255)
	$religion = $_POST['religion'];								//10. Applicant Religion					int(50)
	$dob = $_POST['dob'];										//11. Applicant Date of birth				date
	$pob = $_POST['pob'];										//12. Applicant Place of Birth				varchar(255)
	$district = $_POST['district'];								//13. Domicile District						varchar(255)
	$province = $_POST['province'];								//14. Domicile Province						varchar(255)

	//echo $cell."<br>".$religion."<br>".$dob."<br>".$pob."<br>".$district."<br>".$province;

	$fname = $_POST['fname'];									//15. Father name  							varchar(255)
	$fcell = $_POST['fcell'];									//16. Father cell no           				bigint(255)
	$fcnic = $_POST['fcnic'];									//17. Father's CNIC  						bigint(255)	

	//echo $fname."<br>".$fcell."<br>".$fcnic;

	$gname = $_POST['gname'];									//18. Guardian Name 						varchar(255)
	$gcnic = $_POST['gcnic'];									//19. Guardian Cnic 						bigint(255)	
	$grelation = $_POST['grelation'];							//20. Guardian Relation 					varchar(100)
	$gcell = $_POST['gcell'];									//21. Guardian cell 						bigint(255)

	//echo $gname."<br>".$gcnic."<br>".$grelation."<br>".$gcell;

	$income = $_POST['income'];									//22. Total Income 							bigint(255)
	$taddress = $_POST['taddress'];								//23. Permanent Address 					text
	$paddress = $_POST['paddress'];								//24. Present Address 						text

	//echo $income."<br>".$taddress."<br>".$paddress;

	$matric = $_POST['ssc'];					//25. SSC degree 							int
	$mboard = $_POST['sscboard'];				//26. SSC Name Of Board 					text
	$mroll = $_POST['sscroll'];					//27. SSC Roll no 							varchar(100)
	$myear = $_POST['sscyear'];					//28. SSC Passing Year 						int(100)
	$mexam = $_POST['ssclist'];					//29. SSC Annual/Supplementary 				int(100)
	$mtmarks = $_POST['ssctmarks'];				//30. SSC Total Marks 						int(100)
	$momarks = $_POST['sscomarks'];				//31. SSC Obtained Marks 					int(100)
	$mpercent=0;
	
	if($mtmarks>0 && $momarks>0)
	{
		$mpercent = ($momarks/$mtmarks)*100;			//32. SSC Percentage				Float
	}
	
	$mdiv = $_POST['sscdiv'];					//33. SSC Division							varchar(10)

	//echo $sscboard."<br>".$sscroll."<br>".$sscyear."<br>".$ssclist."<br>".$ssctmarks."<br>".$sscomarks."<br>".$sscpercent."<br>".$sscdiv;


	$inter = $_POST['hssc'];					//34. HSSC degree
	$iboard = $_POST['hsscboard'];				//35. HSSC Name Of Board
	$iroll = $_POST['hsscroll'];				//36. HSSC Roll no
	$iyear = $_POST['hsscyear'];				//37. HSSC Passing Year
	$iexam = $_POST['hssclist'];				//38. HSSC Annual/Supplementary
	$itmarks = $_POST['hssctmarks'];			//39. HSSC Total Marks
	$iomarks = $_POST['hsscomarks'];			//40. HSSC Obtained Marks
	$ipercent=0;

	if($itmarks>0 && $iomarks>0)
	{
		$ipercent = ($iomarks/$itmarks)*100;			//41. HSSC Percentage
	}
	
	$idiv = $_POST['hsscdiv'];					//42. HSSC Division

	//echo $hsscboard."<br>".$hsscroll."<br>".$hsscyear."<br>".$hssclist."<br>".$hssctmarks."<br>".$hsscomarks."<br>".$hsscpercent."<br>".$hsscdiv;

	$bachelor = $_POST['ba'];					//43. (BA/BCOM/BSc etc) degree
	$baboard = $_POST['baboard'];				//44. (BA/BCOM/BSc etc) Name Of Board
	$baroll = $_POST['baroll'];					//45. (BA/BCOM/BSc etc) Roll no
	$bayear = $_POST['bayear'];					//46. (BA/BCOM/BSc etc) Passing Year
	$baexam = $_POST['balist'];					//47. (BA/BCOM/BSc etc) Annual/Supplementary
	$batmarks = $_POST['batmarks'];				//48. (BA/BCOM/BSc etc) Total Marks
	$baomarks = $_POST['baomarks'];				//49. (BA/BCOM/BSc etc) Obtained Marks
	$bapercent=0;
	
	if($batmarks>0 && $baomarks>0)
	{
		$bapercent = ($baomarks/$batmarks)*100;			//50. (BA/BCOM/BSc etc) Percentage
	}			
	$badiv = $_POST['badiv'];							//51. (BA/BCOM/BSc etc) Division

	//echo $baboard."<br>".$baroll."<br>".$bayear."<br>".$balist."<br>".$batmarks."<br>".$baomarks."<br>".$bapercent."<br>".$badiv;

/*
	$maboard = $_POST['maboard'];				//52. (MA/MSc/BS) Name Of Board
	$maroll = $_POST['maroll'];					//53. (MA/MSc/BS) Roll no
	$mayear = $_POST['mayear'];					//54. (MA/MSc/BS) Passing Year
	$malist = $_POST['malist'];					//55. (MA/MSc/BS) Annual/Supplementary
	$matmarks = $_POST['matmarks'];				//56. (MA/MSc/BS) Total Marks
	$maomarks = $_POST['maomarks'];				//57. (MA/MSc/BS) Obtained Marks
	$mapercent = $_POST['mapercent'];			//58. (MA/MSc/BS) Percentage
	$madiv = $_POST['madiv'];					//59. (MA/MSc/BS) Division
*/
	//echo $maboard."<br>".$maroll."<br>".$mayear."<br>".$malist."<br>".$matmarks."<br>".$maomarks."<br>".$mapercent."<br>".$madiv;



	$hafiz="no";									//52. For Hafiz-e-Quran				varchar(50)
	$disabled="no";									//53. For Disabled Person			varchar(50)

	
	if(isset($_POST['hafiz1']))
	{
		$hafiz = $_POST['hafiz1'];					
	}
	if(isset($_POST['disable1']))
	{
		$disabled = $_POST['disable1'];		
	}

	//echo $hafiz."<br>".$disabled;


	$merit = 0;



	$query = " INSERT INTO registration (program, degree, seat, image, name, cnic, nationality, gender, cell, religion, dob, pob, district, province, fname, fcell, fcnic, gname, gcnic, grelation, gcell, income, taddress, paddress, matric, mboard, mroll, myear, mexam, mtmarks, momarks, mpercent, mdiv, inter, iboard, iroll, iyear, iexam, itmarks, iomarks, ipercent, idiv, bachelor, baboard, baroll, bayear, baexam, batmarks, baomarks, bapercent, badiv, hafiz, disabled, merit) VALUES ('$program', '$degree', '$seat', '$image', '$name', '$cnic', '$nationality', '$gender', '$cell', '$religion', '$dob', '$pob', '$district', '$province', '$fname', '$fcell', '$fcnic', '$gname', '$gcnic', '$grelation', '$gcell', '$income', '$taddress', '$paddress', '$matric', '$mboard', '$mroll', '$myear', '$mexam', '$mtmarks', '$momarks', '$mpercent', '$mdiv', '$inter', '$iboard', '$iroll', '$iyear', '$iexam', '$itmarks', '$iomarks', '$ipercent', '$idiv', '$bachelor', '$baboard', '$baroll', '$bayear', '$baexam', '$batmarks', '$baomarks', '$bapercent', '$badiv', '$hafiz', '$disabled', '$merit')";

	//$statement = "INSERT INTO register (program,dept,seat,image,name,cnic,nationality,gender) VALUES ('$program','$dept','$seat','$image', '$name','$cnic', '$nationality', '$gender')";


		if (mysqli_query($conn,$query)) 
		{
			//move_uploaded_file($file_tmp, $image);
			echo "<script type='text/javascript'> alert('Successfully Inserted data'); </script>";
			mysqli_close($conn);
		}
		else
		{
			echo "<script type='text/javascript'> alert('Data Not Inserted'); </script>";
		}


 }
 else
 {
 	echo "<script type='text/javascript'> alert('Invalid Response!'); </script>";
 }


 ?>