<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");




$string ="";
$query = "SELECT dept_id FROM departments WHERE dept_id=(SELECT max(dept_id) FROM departments)";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0) 
{
    $num = mysqli_fetch_assoc($result);
    $num=$num["dept_id"];
    //print_r($_POST);

   

    for ($i=1; $i <=$num ; $i++) 
    { 
        $a="dept".$i;
        
        if (isset($_POST[$a])) 
        {
            $check=$_POST[$a];
                $q1="SELECT * FROM departments";
            $r1=mysqli_query($conn,$q1);
            while ($row=mysqli_fetch_assoc($r1)) 
            {
                if($check==$row["dept_id"])
                {
                    $string.=$row["dept_id"]."_";
                }
            }
        }

    }
//echo $num;
}


$eid=$_POST['eid'];
$ename=$_POST['ename'];
//echo $string;
$ecategory=$_POST['cname'];
$q1="UPDATE educational_degrees SET ename='$ename',edept='$string',ecategory='$ecategory' WHERE eid='$eid' ";
if (mysqli_query($conn,$q1)) 
{
    echo "Successfully Updated ";
}
else
{
    echo "Failed to Update Records ";
}



//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
