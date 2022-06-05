<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$type = $_POST['type'];
$program = $_POST['program'];
$degree = $_POST['degree'];
$total = $_POST['total'];
$obtained = $_POST['obtained'];

$percentage=($obtained/$total)*100;
//echo $program."<br>".$degree."<br>".$total."<br>".$obtained;
$output = '<p style="display:inline;">Your Percentage: <label class="text-danger">'.$percentage.'%</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

$query="SELECT * FROM criteria WHERE program='$program' AND degree='$degree'";
$result = mysqli_query($conn, $query) or die("SQL Query Failed.");
if(mysqli_num_rows($result) > 0 ){

    $row = mysqli_fetch_assoc($result);

                    //$output=print_r($row);

    $inter_percentage=$row['inter_percentage'];
    $ba_percentage=$row['ba_percentage'];


    if ($type==1) {

        $output.=' <label>(Minimum Requirement for this program: </label> <label class="text-danger">'.$inter_percentage.'%</label> )</p>';
        echo $output;
    }
    else if($type==2){
         $output.=' <label>(Minimum Requirement for this program: </label> <label class="text-danger">'.$ba_percentage.'%</label> )</p>';
        echo $output;
    }







    mysqli_close($conn);
}
else
{
    echo 'Unknown Error!';
}


?>
