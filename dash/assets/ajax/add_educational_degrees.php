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

//echo $string;
$ename=$_POST["ename"];
$cat=$_POST["cname"];
$output=0;

$q2="SELECT ename FROM educational_degrees";
$r2=mysqli_query($conn,$q2);
if (mysqli_num_rows($r2)>0) 
{
    while ($row=mysqli_fetch_assoc($r2)) 
    {
        if ($row["ename"]==$ename) 
        {
            $output=1;
        }
    }
}

if ($output==0) 
{
    $q3="INSERT INTO educational_degrees (ename,edept,ecategory) VALUES ('$ename','$string','$cat')";

    if(mysqli_query($conn,$q3))
    {
        echo $as ="Data Inserted Successfully";
    }
}
else if($output==1)
{
    echo $as ="This Name/Degree Already Exists";
}
else
{
    echo $as ="UNSUCCCESSFUL !";
}








//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
