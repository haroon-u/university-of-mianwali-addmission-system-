<?php

$conn = mysqli_connect("localhost","root","","umw") or die("Connection Failed");

$cid = $_POST['cid'];

//$query = "SELECT cname FROM certificates WHERE cid=$cid";
//$cname = mysqli_query($conn, $query) or die("SQL Query Failed.");
//$search = mysqli_fetch_assoc($cname);
//$search = $search["cname"];

$sql = "SELECT * from form_education WHERE eid='$cid'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output="";
if(mysqli_num_rows($result) > 0 ){

    $row = mysqli_fetch_assoc($result);

$output.='
                <hr> <h5 class="text-center">Details & Edit</h5>
                 <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Level</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="certificate" name="cname" required>';
                      
                    $q1 = "SELECT * FROM certificates";
                    $r1 = mysqli_query($conn, $q1) or die("SQL Query Failed.");
                    while ($get=mysqli_fetch_assoc($r1)) 
                    {
                        if ($get["cname"]==$row["cname"]) {
                            
                            $output .= "<option value={$get["cid"]} selected> {$get["cname"]}  </option>";
                        }
                        else
                        {
                            $output .= "<option value={$get["cid"]}> {$get["cname"]}  </option>";
                        }
                        
                    }

$output.='          </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="eid" id="eid" value="'.$row["eid"].'" required>
                    <input type="text" class="form-control" name="ename" value="'.$row["ename"].'" required>

                  </div>
                </div>

                <h5 class="text-center mt-5">Departments in Which this degree holder can apply</h5>

                <div class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Applicable To</legend>
                  <div class="col-sm-10"> ';


                  $q2 = "SELECT * FROM departments";
                    $r2 = mysqli_query($conn, $q2) or die("SQL Query Failed.");

                    $dep =explode("_",$row["edept"]);
                   //print_r($dep);

                    while ($get=mysqli_fetch_assoc($r2)) 
                    {
                        if (in_array($get["dept_id"], $dep)) 
                        {
                            
                            $output .= '<div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="dept'.$get["dept_id"].'"
                                          name="dept'.$get["dept_id"].'" value="'.$get["dept_id"].'"" checked>
                                          <label class="form-check-label" for="gridCheck1">
                                            '.$get["dept_name"].'
                                          </label>
                                        </div>';
                        }
                        else
                        {
                            $output .= '<div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="dept'.$get["dept_id"].'"
                                          name="dept'.$get["dept_id"].'" value="'.$get["dept_id"].'">
                                          <label class="form-check-label" for="gridCheck1">
                                            '.$get["dept_name"].'
                                          </label>
                                        </div>';
                        }
                        
                    }
                    

                    

 $output.='        </div>
                </div>
                

                <div class="row mb-3 ">
                  <label class="col-sm-4 col-form-label">Make changes and save</label>
                  <div class="col-sm-8 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary " id="change">SAVE</button>
                  </div>
                </div>
    ';

    mysqli_close($conn);

    echo $output;
}
else
{
    echo 'No Records Found ';
}

//$output .= "<option >$search  </option>";
// $output .= "<option value={$row["eid"]}> {$row["ename"]}  </option>";
//<option value=$row["pid"]> $row["pname"] (  $row["pdesc"])  </option>

?>
