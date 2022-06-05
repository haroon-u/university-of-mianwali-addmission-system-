<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$tid = $_POST['tid'];


$sql = "SELECT * FROM type_admisssion WHERE tid='$tid'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = '';
if(mysqli_num_rows($result) > 0 )
{
    $row = mysqli_fetch_assoc($result);

    $output='
                      
                      <hr> <h5 class="text-center">Details & Edit</h5>
                     
                    <div class="row mb-3">
                      <label for="inputText" class="col-sm-4 col-form-label">Season Name</label>
                      <div class="col-sm-8">
                        <input type="hidden" name="tid" id="tid" value="'.$row["tid"].'" required>
                        <input type="text" name="tname" class="form-control" value="'.$row["tname"].'" required>
    
                      </div>
                    </div>
                    
    
                    <div class="row mb-3 ">
                      <label class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-8 ">
                        <button type="button"  class="btn btn-primary seasonbtn" id="seasonupdate" value="1">Update</button>
                        <button type="button"  class="btn btn-warning seasonbtn" id="seasondelete" value="2">Delete</button>
                      </div>
                    </div> ';

    mysqli_close($conn);

    echo $output;
}
else
{
    echo 'No Records Found';
}

//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
