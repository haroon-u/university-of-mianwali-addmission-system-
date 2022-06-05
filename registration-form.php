<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/umw.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>UMW-Registration</title>
    
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <!-- <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div> -->
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-10 py-2">

            <div class="row">
              <div class="col-2">
                <img class="img-fluid" src="assets/images/umw-logo.png">
              </div>
              <div class="col-10 align-text-bottom">
                  <h3 class="">Application Form for Admission</h3>
                  <p class="">Undergraduate/Postgraduate/M.Phil/PHD</p>
              </div>
            </div>
          
            <hr>
            <!-- onsubmit="return validation()" -->
            <form id="admission_form" method="POST" enctype="multipart/form-data"  
            action="assets/form-components/register.php" onsubmit ="return validate()">
              
              <div class="row" id="section1"> <!-- Section for the Department and Image -->
                <div class="col-sm-9 order-2 order-sm-1">

                  <div >
                    <div class="form-group first" data-aos="fade-right" data-aos-duration="1000">
                      <label for=""  class="form-label fw-bold">Applied for (Undergraduate/Postgraduate):</label><br>
                      
                        <select class="form-select form-control" aria-label="program" id="program" name="program" required>
                          
                          
                       
                        </select>
                      </div>
                      
                    
                  </div>  <br>

                  <div data-aos="fade-right" data-aos-duration="2000">

                    <label  class="form-label">Choose Program from the list: </label>
                        
                        <select class="form-select form-control" aria-label="offered_programs" name="offered_programs" id="offered_programs"required>
                          
                        </select>
                  </div>

                      <div>
                        <div class="mb-3 mt-3" data-aos="fade-right" data-aos-duration="3000">
                        <label  class="form-label">Choose Type of Seat : </label>
                          
                        <select class="form-select form-control" aria-label="seat" id="seat" name="seat" required>
                          
                        </select>
                        </div>
                        <div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">NOTE: Candidates have to bring Supporting Documents ( if applied for reserved seats )</label>

                        </div>
                        </div>
                  </div>
                  
                </div>

      <div align="center" class="col-sm-3 border border-dark border-2 order-1 order-sm-2" data-aos="fade-left" data-aos-duration="3000"> <!-- Image of student -->
        
        <div class="fluid-container " >
        
          <div class="row file-upload">

              <div class="file-upload-content ">
              <img class="file-upload-image img-resonsive" src="#" alt="your image"/>

              
            </div>
              <div class="image-upload-wrap">
                <input class="file-upload-input"  type='file' onchange="readURL(this);" accept="image/png, image/gif, image/jpeg" id="image" name="image"  />
                <span id="image1" class="text-danger font-weight-light"></span>

                <!-- 
                <div class="drag-text">
                    <h3>Drag and drop or add your Image</h3>
                </div>
              -->
              </div>
        </div>
        <br>
        <div class="file-upload-content ">
          <div class="image-title-wrap ">
                  <button type="button" onclick="removeUpload()" class=" btn btn-danger remove-image">Remove Image</button>
              </div>
        </div>
        <div class=" align-end">
            <button class="btn btn-info m-3" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload your Image</button></div>
          </div>
      </div>    <!-- Image of student Ends -->
    </div>    <!-- Section for the Department and Image Ends -->



    <hr>

<div id="whole" class=""> <!-- Whole Section Ends -->
            

      <section class="mt-3">
          <div class="row mt-2 text-center">
              <div class="col-sm-12 bg-primary">Personal Details (Write details EXACTLY as they appear in your documents). </div>
            </div>


              <div class="row">
                  <div class="col-md-6 mt-2" data-aos="zoom-out" data-aos-duration="500">
                    <div class="form-group">
                        <label for="">Name :</label>
                        <input type="text" class="form-control" placeholder="Write your Name here" id="name" name="name">
                        <span id="nameerror" class="text-danger font-weight-light" ></span>
                        
                        
                        
                      </div>
                  </div>

                  <div class="col-md-6 mt-2" data-aos="zoom-out" data-aos-duration="500">
                    <div class="form-group">
                        <label>CNIC :</label>
                        <input type="number" class="form-control" placeholder="eg. 38xxxxxxxxxxx" id="cnic" name="cnic"  minlength="13" maxlength = "13">
                        <span id="cnicerror" class="text-danger font-weight-light"></span>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
                    <div class="form-group">
                    <lable >Nationality : </lable>
                    <input type="text" class="form-control" placeholder="Enter Nationality here" id="nationality" name="nationality">
                    <span id="pak" class="text-danger font-weight-light" ></span>
                  </div>
                  </div>
                    <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
                          <div class="form-group">
                            <lable > Gender :</lable>
                              <select class="form-control"aria-label="gender" name="gender" id="gender" >
                                
 </select>

                              
                           <span id="male" class=" text-danger font-weight-light"></span>                                
                             
                              
                          </div>
                    </div>
                  </div>
                  <div class="row mt-2">
            <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                <lable class="form-group-text">Applicant's Cell No : </lable>
                <input type="number" class="form-control" placeholder="Mobile" id="cell" name="cell">
                <span id="cell_number" class="text-danger font-weight-light"></span>
                </div>
            </div>
            <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text"> Religion :</lable>
                    <select class="form-control" aria-label="religion" name="religion" id="religion">
                        
                      </select>
                      <span id="religion1" class=" text-danger font-weight-light"></span>
                    
                  </div>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Date Of Birth : </lable>
                  <input type="date" class="form-control" id="dob" name="dob">
                  <span id="db" class="text-danger font-weight-light"></span>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Place of Birth : </lable>
                  <input type="text" class="form-control" placeholder="Enter city" id="pob" name="pob">
                  <span id="pb" class="text-danger font-weight-light"></span>
                </div>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Domicile District : </lable>
                  <input type="text" class="form-control" placeholder="District" id="district" name="district">
                  <span id="districtt" class="text-danger font-weight-light"></span>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Domicile Province : </lable>
                  <input type="text" class="form-control" placeholder="Province"            id="province" name="province">
                  <span id="provinc" class="text-danger font-weight-light"></span>
                </div>
            </div>
          </div>


          <div class="row mt-4">
            <div class="col" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Father Name : </lable>
                  <input type="text" class="form-control" placeholder="Enter Father Name Here" id="fname" name="fname">
                  <span id="fnam" class="text-danger font-weight-light"></span>
                </div>
            </div>
            
          </div>
          
          <div class="row mt-2">
            <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Father's CNIC No : </lable>
                  <input type="number" class="form-control" placeholder="eg. 38xxxxxxxxxxx" id="fcnic" name="fcnic">
                  <span id="fcni" class="text-danger font-weight-light"></span>
                </div>
            </div>
            <div class="col-sm-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Cell No : </lable>
                  <input type="number" class="form-control" placeholder="03xxxxxxxxx" id="fcell" name="fcell">
                  <span id="fcel" class="text-danger font-weight-light"></span>
                </div>
            </div>
            
          </div>


          <div class="row mt-4">
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                  <lable class="form-group-text">Guardian's Name : </lable>
                  <input type="text" class="form-control" placeholder="Enter Guardian Name Here (Optional)" id="gname" name="gname">
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                <lable class="form-group-text">Guardian's CNIC No : </lable>
                <input type="number" class="form-control" placeholder="38xxxxxxxxxxx (Optional)" id="gcnic" name="gcnic">
                </div>
              
            </div>
          </div>
          

          <div class="row mt-2">
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                <lable class="form-group-text">Relationship with Applicant : </lable>
                <input type="text" class="form-control" placeholder="Type Here (Optional)" id="grelation" name="grelation">
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                <lable class="form-group-text">Guardian Cell No : </lable>
                <input type="number" class="form-control" placeholder="03xxxxxxxxx (Optional)" id="gcell" name="gcell">
              </div>
            </div>
            
          </div>

          <div class="row mt-2 ">
            <div class="col" data-aos="zoom-out" data-aos-duration="500">
              <div class="form-group">
                <lable class="form-group-text">Father's/ Guardian's Annual Income From all Sources : </lable>
                <input type="number" class="form-control" placeholder="Total Amount" id="income" name="income">
                <span id="fa" class="text-danger font-weight-light"></span>
                </div>
            </div>
            
          </div>

          <div class="row mt-4">
            <div class="form-group col" data-aos="zoom-out" data-aos-duration="500">
              <lable class="form-group-text">Present Address : </lable>
              <input type="text" class="form-control" placeholder="Type Present Address here" id="taddress" name="taddress">
              <span id="fa1" class="text-danger font-weight-light"></span>
            </div>
          </div>
          
          <div class="row mt-2">
            <div class="form-group col" data-aos="zoom-out" data-aos-duration="500">
              <lable class="form-group-text">Permanent Address : </lable>
              <input type="text" class="form-control" placeholder="Type Permanent Address here" id="paddress" name="paddress">
              <span id="fa2" class="text-danger font-weight-light"></span>
            </div>
          </div>

      </section>
      <hr>
        




      <section id="matric" class="mt-3">
        <div class="row mt-2 text-center">
              <div class="col-sm-12 bg-primary">Academic Record (Fill all details Correctly) </div>
            </div>
            <div class="row text-center mt-3">
              <div class="col-4"></div>
              <div class="col-4 "><label class="form-label "> <hr><b class="bg-warning">1. Matriculation Qualification</b> </label><hr></div>
              <div class="col-4"></div>
            </div>
            

            <div class="row">
              <div class="col-md-6"  data-aos="zoom-in-right" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Select Examination : </label>

                    
                    <select class="form-control" aria-label="ssc" id="ssc" name="ssc"></select>
                      <span id="ssc1" class="text-danger font-weight-light"></span>
                                
                    
                    </div>
                
              </div>
              <div class="col-md-6 " data-aos="zoom-in-left" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Name Of Board/Institution : </label>
                    <input type="text" class="form-control" placeholder="Type Here" id="sscboard" name="sscboard">
                    <span id="fa3" class="text-danger font-weight-light"></span>
                  </div>
            
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Roll no.  </label>
                  <input type="text" class="form-control" placeholder="Roll No" id="sscroll" name="sscroll">
                   <span id="fa4" class="text-danger font-weight-light"></span>
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class="">Passing Year :</label>
                    <input type="number" class="form-control" placeholder="Enter Year" id="sscyear" name="sscyear">
                    <span id="fa5" class="text-danger font-weight-light"></span>
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Total Marks : </label>
                  <input type="number" class="form-control" placeholder="Total Marks" id="ssctmarks" name="ssctmarks">
                  <span id="fa6" class="text-danger font-weight-light"></span>
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Obtained Marks : </label>
                  <input type="number" class="form-control" placeholder="Obtained Marks" id="sscomarks" name="sscomarks">
                  <span id="fa7" class="text-danger font-weight-light"></span>
                </div>

            
              </div>
            </div>
            <div class="row" id="ssc_percentage">
              
            </div>





            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                 <label class=""> Division :</label>
                      <select class="form-control" aria-label="sscdiv" id="sscdiv" name="sscdiv">

                        <option value="" selected >Choose</option>
                        <option value="A" >A</option>
                        <option value="B" >B</option>
                        <option value="C" >C</option>
                        <option value="D" >D</option>
                      </select>
                      <span id="sscdiv1" class="text-danger font-weight-light"></span>

            
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class=""> Annual/Supplementary :</label>
                      <select class="form-control" aria-label="ssclist" id="ssclist" name="ssclist">
                        
                      </select>
                      <span id="ssclist1" class="text-danger ffont-weight-light"></span>
                      
              </div>
                  
                
              </div>
              
            </div>

      </section>



      <section id="intermediate" class="mt-3">
            <div class="row text-center mt-3">
              <div class="col-4"></div>
              <div class="col-4"><p class=""> <hr><b class="bg-warning">2. Intermediate Qualification</b> </p><hr></div>
              <div class="col-4"></div>
            </div>
            

            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Select Examination : </label>
                     <select class="form-control" aria-label="hssc" id="hssc" name="hssc" >
                                
                    </select>
                    <span id="hssc1" class="text-danger font-weight-light"></span>
                    </div>
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Name Of Board/Institution : </label>
                    <input type="text" class="form-control" placeholder="Type Here" id="hsscboard" name="hsscboard">
                    <span id="fa11" class="text-danger font-weight-light"></span> 
                  </div>
            
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Roll no.  </label>
                  <input type="text" class="form-control" placeholder="Roll No" id="hsscroll" name="hsscroll">
                  <span id="fa12" class="text-danger font-weight-light"></span> 
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class="">Passing Year :</label>
                    <input type="number" class="form-control" placeholder="Enter Year" id="hsscyear" name="hsscyear">
                    <span id="fa13" class="text-danger font-weight-light"></span> 
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Total Marks : </label>
                  <input type="number" class="form-control" placeholder="Total Marks" id="hssctmarks" name="hssctmarks">
                  <span id="fa14" class="text-danger font-weight-light"></span> 
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Obtained Marks : </label>
                  <input type="number" class="form-control" placeholder="Obtained Marks" id="hsscomarks" name="hsscomarks">
                  <span id="fa15" class="text-danger font-weight-light"></span> 
                </div>

            
              </div>
            </div>

            <div class="row" >
              <div class="col-sm-12" >
                <div class="form-group" id="hssc_percentage" >
                  
                 
                </div>
              </div>
            </div>





            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                 <label class=""> Division :</label>
                      <select class="form-control" aria-label="hsscdiv" id="hsscdiv" name="hsscdiv">
                        <option value="" selected >Choose</option>
                        <option value="A" >A</option>
                        <option value="B" >B</option>
                        <option value="C" >C</option>
                        <option value="D" >D</option>
                      </select>
                      <span id="hsscdiv1" class="text-danger font-weight-light"></span>

            
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class=""> Annual/Supplementary :</label>
                      <select class="form-control" aria-label="ssclist" id="hssclist" name="hssclist" >
                        
                      </select>
                      <span id="hssclist1" class="text-danger font-weight-light"></span>
                      
              </div>
                  
                
              </div>
              
            </div>

      </section><!-- intermediate end -->


       <!-- Bachlor qulification -->

      <section id="bachelor" class="mt-3">
            <div class="row text-center mt-3">
              <div class="col-4"></div>
              <div class="col-4"><p class=""> <hr><b class="bg-warning">3. Bachelor Qualification</b> </p><hr></div>
              <div class="col-4"></div>
            </div>
            

            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Select Examination : </label>
                     <select class="form-control" aria-label="ba" id="ba" name="ba" >
                                
                    </select>
                    <span id="ba1" class="text-danger font-weight-light"></span>
                    </div>
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                
                  <div class="form-group">
                    <label >Name Of Board/Institution : </label>
                    <input type="text" class="form-control" placeholder="Type Here" id="baboard" name="baboard">
                    <span id="fa21" class="text-danger font-weight-light"></span>
                  </div>
            
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Roll no.  </label>
                  <input type="text" class="form-control" placeholder="Roll No" id="baroll" name="baroll">
                  <span id="fa22" class="text-danger font-weight-light"></span>
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class="">Passing Year :</label>
                    <input type="number" class="form-control" placeholder="Enter Year" id="bayear" name="bayear">
                    <span id="fa23" class="text-danger font-weight-light"></span>
                  </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Total Marks : </label>
                  <input type="number" class="form-control" placeholder="Total Marks" id="batmarks" name="batmarks">
                  <span id="fa24" class="text-danger font-weight-light"></span>
                  </div>
                  
                
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                  <label class="">Obtained Marks : </label>
                  <input type="number" class="form-control" placeholder="Obtained Marks" id="baomarks" name="baomarks">
                  <span id="fa25" class="text-danger font-weight-light"></span>
                </div>

            
              </div>
            </div>


            <div class="row" >
              <div class="col-sm-12" >
                <div class="form-group" id="ba_percentage">
                  
                 
                </div>
              </div>
            </div>




            <div class="row">
              <div class="col-md-6" data-aos="zoom-in-right" data-aos-duration="500">
                 <label class=""> Division :</label>
                      <select class="form-control" aria-label="badiv" id="badiv" name="badiv">
                        <option value="" selected  >Choose</option>
                        <option value="A" >A</option>
                        <option value="B" >B</option>
                        <option value="C" >C</option>
                        <option value="D" >D</option>
                      </select>
                      <span id="badiv1" class="text-danger font-weight-light"></span>

            
              </div>
              <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="500">
                <div class="form-group">
                    <label class=""> Annual/Supplementary :</label>
                      <select class="form-control" aria-label="ssclist" id="balist" name="balist">
                        
                      </select>
                      <span id="balist1" class="text-danger font-weight-light"></span>
                      
              </div>
                  
                
              </div>
            </div>

      </section>
      
            <div class="row mt-2 text-center">
              <div class="col-sm-12 bg-primary">For Hafiz-e-Quran Candidates only. </div>
            </div>
      

      <section id="6" >
        <div class=" col form-group ">
            <label  class="form-label fw-bold"><br>If you are Hafiz-e-Quran, then check the box below :</label>
            <label class="control control--checkbox mb-0 ">I hereby solemnly declare that I am a Muslim Hafiz-e- Quran.<lable class="caption"><br>(Candidate has to bring Certificate  issued by a recognized institution / other authority.) </lable>
                  <input type="checkbox" class="form-check-input bg-info" id="hafiz" name="hafiz1" value="yes"/>
                  <div class="control__indicator"></div>
                </label>
          </div>
      </section>



            <div class="row mt-2 text-center">
              <div class="col-sm-12 bg-primary">For Disabled Candidates Only. </div>
            </div>
      

      <section id="7" >
        <div class=" col form-group " >
            <label  class="form-label fw-bold"><br>If you are a Disabled Candidate, then check the box below :</label>
            <label class="control control--checkbox mb-0 ">I hereby solemnly declare that I am a Disabled Person.<lable class="caption"><br>(Candidate has to bring Certificate issued by the Disability Board / any other authority.)  </lable>
                  <input type="checkbox" class="form-check-input " id="disable" name="disable1" value="yes"/>
                  <div class="control__indicator"></div>
                </label>
          </div>
      </section>


</div> <!-- Whole Section Ends -->




              <div class="row mt-5" id="last_btn">
                <div class="col d-flex justify-content-center">
                  <input  type="submit" value="Register" class="btn px-5 btn-primary" id="enroll" name="enroll">
                </div>
              </div>

              

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
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

  
</script>
<script src="validation.js"></script>
 <script type="text/javascript">
    function validate(){
    var fuData=document.getElementById('image');
     var FileUploadPath=fuData.value;
     // To check if user upload any file
        if (FileUploadPath == '') {
            document.getElementById('image1').innerHTML =" ** Please upload the image";
                return false;

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
          }
          //The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {

                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ")
              }
      var name = document.getElementById('name').value;
    var cnic=document.getElementById('cnic').value;
    var nationality=document.getElementById('nationality').value;
     var gender=document.getElementById('gender').value;
    //alert(gender);
    var cell=document.getElementById('cell').value;
    var religion=document.getElementById('religion').value;
    var dob=document.getElementById('dob').value;
    var pob=document.getElementById('pob').value;
    var district=document.getElementById('district').value;
    var province=document.getElementById('province').value;
    var fname = document.getElementById('fname').value;
    var fcnic = document.getElementById('fcnic').value;
    var fcell = document.getElementById('fcell').value;
     var income=document.getElementById('income').value;    
    var taddress=document.getElementById('taddress').value;
    var paddress=document.getElementById('paddress').value;

    // 1. MATRIC Qualification
     var ssc=document.getElementById('ssc').value;
     var sscboard=document.getElementById('sscboard').value;
     var sscroll=document.getElementById('sscroll').value;
     var sscyear=document.getElementById('sscyear').value;
     var ssctmarks=document.getElementById('ssctmarks').value;
     var sscomarks=document.getElementById('sscomarks').value;
    var sscdiv=document.getElementById('sscdiv').value;
    var ssclist=document.getElementById('ssclist').value;
    
     // 2. Intermediate Qualification
     var hssc=document.getElementById('hssc').value;
     var hsscboard=document.getElementById('hsscboard').value;
     var hsscroll=document.getElementById('hsscroll').value;
     var hsscyear=document.getElementById('hsscyear').value;
     var hssctmarks=document.getElementById('hssctmarks').value;
     var hsscomarks=document.getElementById('hsscomarks').value;
     var hsscdiv=document.getElementById('hsscdiv').value;
    var hssclist=document.getElementById('hssclist').value;

     
     // regular expression:

    var usercheck=/^[A-Za-z . _ -]{3,30}$/;
    var cniccheck=/^[0-9]{13}$/;
    var nationality1=/^[A-Za-z.]{3,30}$/;
    var cell1=/^[0-9]{11}$/;
    var pob1= /^[A-Za-z ]{3,30}$/;
    var district1=/^[A-Za-z ]{3,30}$/;
     var province1=/^[A-Za-z ]{3,30}$/;
     var fname1=/^[A-Za-z . _ -]{3,30}$/;
    var fcnic1=/^[0-9]{13}$/;
     var fcell1=/^[0-9]{11}$/;
      var sscboard1=/^[A-Za-z ]{3,30}$/;
     var hsscboard1=/^[A-Za-z s ]{3,30}$/;
     
     if(name == ""){
          
 

                document.getElementById('nameerror').innerHTML =" ** Please fill the username field";
                return false;
            }
            if (usercheck.test(name)) {
              document.getElementById('nameerror').innerHTML="";
            }
            else {
              document.getElementById('nameerror').innerHTML=" username is invalid";
              return false;
            }
            

            /* if((name.length <= 3) || (name.length > 50)) {
        document.getElementById('nameerror').innerHTML =" ** Username lenght must be greater than 3";
        return false; 
      }

      if(!isNaN(name)){
        document.getElementById('nameerror').innerHTML =" ** only characters are allowed";
        
        return false;
      }*/



      
      if (cnic =="") {
        document.getElementById('cnicerror').innerHTML = "** Please fill the cnic field";
        return false;
      }
      if (cniccheck.test(cnic)){
        document.getElementById('cnicerror').innerHTML = "";
        
      }
      else {
        document.getElementById('cnicerror').innerHTML = "** pls enter the correct cnic number";
        return false;
      }

    /* if(cnic.length!=13){
        document.getElementById('cnicerror').innerHTML =" ** Cnic Number must be 13 digits only";
        return false;
      }*/


      if (nationality =="") {
        document.getElementById('pak').innerHTML = "** Please fill the nationality field";


        return false;
      }
      if (nationality1.test(nationality)){
        document.getElementById('pak').innerHTML = "";
        
      }
      else {
        document.getElementById('pak').innerHTML = "** pls enter the correct nationality";
        return false;
      }

       //console.log(`Gender value is: ${gender}`)
      if(gender == 0) {
        //alert("empty");
        document.getElementById('male').innerHTML = "** Please select the gender";
        return false;
        
      }
          
          if(cell == ""){
          

                document.getElementById('cell_number').innerHTML =" ** Please enter the cell phone number";
                return false;
            }
            if (cell1.test(cell)){
        document.getElementById('cell_number').innerHTML = "";
        
      }
      else {
        document.getElementById('cell_number').innerHTML = "** pls enter the correct phone number";
        return false;
      }
            /*if(cell.length!=11){
          

                document.getElementById('cell_number').innerHTML =" ** Enter a correct cell number";
                return false;
            }
            */
            if(religion == 0) {
        //alert("empty");
        document.getElementById('religion1').innerHTML = "** Please select the religion";
        return false;
        
      }

             if(dob == ""){
          

                document.getElementById('db').innerHTML =" ** Please fill the date of brith field";
                return false;
            }
            if(pob == ""){
          

                document.getElementById('pb').innerHTML =" ** Please fill the place of brith field";
                return false;
            }
            if (pob1.test(pob)){
        document.getElementById('pb').innerHTML = "";
        
      }
      else {
        document.getElementById('pb').innerHTML = "** Please enter the only character";
        return false;
      }

            /*
            if(!isNaN(pob)){
        document.getElementById('pb').innerHTML =" ** only characters are allowed";
        return false;
      }*/
            if(district == ""){
          

                document.getElementById('districtt').innerHTML =" ** Please fill the Domicile district field";
                return false;
            }
            if (district1.test(district)){
        document.getElementById('districtt').innerHTML = "";
        
      }
      else {
        document.getElementById('districtt').innerHTML = "** Please enter the only character";
        return false;
      }
             /*if(!isNaN(district)){
        document.getElementById('districtt').innerHTML =" ** only characters are allowed";
        return false;
      }*/
            if(province == ""){
          

                document.getElementById('provinc').innerHTML =" ** Please fill the Domicile provience field";
                return false;
            }
            if (province1.test(province)){
        document.getElementById('provinc').innerHTML = "";
        
      }
      else {
        document.getElementById('provinc').innerHTML = "** Please enter the only character";
        return false;
      }
            /*
            if(!isNaN(province)){
        document.getElementById('provinc').innerHTML =" ** only characters are allowed";
        return false;
      }*/
      if(fname == ""){
          

                document.getElementById('fnam').innerHTML =" ** Please fill the Fathername field";
                return false;
            }
            if (fname1.test(fname)){
        document.getElementById('fnam').innerHTML = "";
        
      }
      else {
        document.getElementById('fnam').innerHTML = "** Please enter the only character";
        return false;
      }

            /*
            if((fname.length <= 3) || (fname.length > 50)) {
        document.getElementById('fnam').innerHTML =" ** Username lenght must be greater than 3";
        return false; 
      }
      if(!isNaN(fname)){
        document.getElementById('fnam').innerHTML =" ** only characters are allowed";
        return false;
      }
      */
      if (fcnic =="") {
        document.getElementById('fcni').innerHTML = "** Please fill the cnic field";
        return false;
      }
      if (fcnic1.test(fcnic)){
        document.getElementById('fcni').innerHTML = "";
        
      }
      else {
        document.getElementById('fcni').innerHTML = "** Please enter the correct cnic number";
        return false;
      }
     /*if(fcnic.length!=13){
        document.getElementById('fcni').innerHTML =" **  Father Cnic Number must be 13 digits only";
        return false;
      }*/
       if(fcell == ""){
          

                document.getElementById('fcel').innerHTML =" ** Please enetr the cell phone number";
                return false;
            }
            if (fcell1.test(fcell)){
        document.getElementById('fcel').innerHTML = "";
        
      }
      else {
        document.getElementById('fcel').innerHTML = "** Please enter the correct number";
        return false;
      }
            /*if(cell.length!=11){
          

                document.getElementById('cell_number').innerHTML =" ** Enter a correct cell number";
                return false;
            }*/
            if(income == ""){
          

                document.getElementById('fa').innerHTML =" ** Please fill the father income field";
                return false;
            }
    

            if(taddress == ""){
          

                document.getElementById('fa1').innerHTML =" ** Please fill the present address feild";
                return false;
            }
            if(paddress == ""){
          

                document.getElementById('fa2').innerHTML =" ** Please fill the Permanent address feild";
                return false;
            }
            // matric qalification:
           
              if(ssc==0){
          

                document.getElementById('ssc1').innerHTML =" ** Please Select Examination  Name Of  field";
                return false;
            }

            if(sscboard == ""){
          

                document.getElementById('fa3').innerHTML =" ** Please fill the Name Of Board/Institution field";
                return false;
            }
            if (sscboard1.test(sscboard)){
        document.getElementById('fa3').innerHTML = "";
        
      }
      else {
        document.getElementById('fa3').innerHTML = "** Please enter the only character";
        return false;
      }
            /*
            if(!isNaN(sscboard)){
        document.getElementById('fa3').innerHTML =" ** only characters are allowed";
        return false;
      }*/
      if(sscroll == ""){
          

                document.getElementById('fa4').innerHTML =" ** Please fill the Roll No field";
                return false;
            }
            if(sscyear == ""){
          

                document.getElementById('fa5').innerHTML =" ** Please enter the passing year";
                return false;
            }
            if(ssctmarks == ""){
          

                document.getElementById('fa6').innerHTML =" ** Please enter the total Marks :";
                return false;
            }
            if(sscomarks == ""){
          

                document.getElementById('fa7').innerHTML =" ** Please enter the obtain Marks :";
                return false;
            }
            if(ssctmarks<sscomarks){
          

                document.getElementById('fa7').innerHTML =" *Please enter the correct obtain Marks *  :";
                return false;
            }

             if(ssctmarks == sscomarks){
          

                document.getElementById('fa7').innerHTML =" * Total marks cannot be equal to obtain Marks *  :";
                return false;
            }

           
             if( sscdiv== 0){
          

                document.getElementById('sscdiv1').innerHTML =" ** Please select the devision:";
                return false;
            }
            if(ssclist== 0){
          

                document.getElementById('ssclist1').innerHTML =" ** Please select the Annual/Supplementary:";
                return false;
            }
            if( sscdiv== 0){
          

                document.getElementById('sscdiv1').innerHTML =" ** Please select the devision:";
                return false;
            }
            // 2. Intermediate Qualification
             
             if(hssc == ""){
          

                document.getElementById('hssc1').innerHTML =" ** Please select the Exam field";
                return false;
            }

             if(hsscboard == ""){
          

                document.getElementById('fa11').innerHTML =" ** Please fill the Name Of Board/Institution field";
                return false;
            }
            if (hsscboard1.test(hsscboard)){
        document.getElementById('fa11').innerHTML = "";
        
      }
      else {
        document.getElementById('fa11').innerHTML = "** Please enter the only character";
        return false;
      }
            /*
            if(!isNaN(hsscboard)){
        document.getElementById('fa11').innerHTML =" ** only characters are allowed";
        return false;
      }*/
      if(hsscroll == ""){
          

                document.getElementById('fa12').innerHTML =" ** Please fill the Roll No field";
                return false;
            }
            if(hsscyear == ""){
          

                document.getElementById('fa13').innerHTML =" ** Please enter the passing year";
                return false;
            }
            
            
            if(hssctmarks == ""){
          

                document.getElementById('fa14').innerHTML =" ** Please enter the total Marks :";
                return false;
            }
            if(hsscomarks == ""){
          

                document.getElementById('fa15').innerHTML =" ** Please enter the obtain Marks :";
                return false;
            }
            if(hssctmarks<hsscomarks){
          

                document.getElementById('fa15').innerHTML =" *Please enter the correct obtain Marks *  :";
                return false;
            }
             if(hssctmarks==hsscomarks){
          

                document.getElementById('fa15').innerHTML =" *Please total Marks can not be equal to obtain marks *  :";
                return false;
            }
             if(hsscdiv== 0){
          

                document.getElementById('hsscdiv1').innerHTML =" ** Please select the Division :";
                return false;

            }
            if( hssclist== 0){
          

                document.getElementById('hssclist1').innerHTML =" ** Please select the Annual/Supplementary feild:";
                return false;
              }

              // bachlor qulification:
              if (program==2) {

                 // 3. Bachlor Qualification:
      var ba=document.getElementById('ba').value;
      var baboard=document.getElementById('baboard').value;
     var baroll=document.getElementById('baroll').value;
     var bayear=document.getElementById('bayear').value;
     var batmarks=document.getElementById('batmarks').value;
     var baomarks=document.getElementById('baomarks').value;
     var badiv=document.getElementById('badiv').value;
     var balist=document.getElementById('balist').value;
      // ragular expression:
      var hsscboard1=/^[A-Za-z]{3,30}$/;
     var baboard1=/^[A-Za-z]{3,30}$/;

                if(ba == 0){
          

                document.getElementById('ba1').innerHTML =" ** Please select the Exam field";
                return false;
            }

            if(baboard == ""){
          

                document.getElementById('fa21').innerHTML =" ** Please fill the Name Of Board/Institution field";
                return false;
            }
            if (baboard1.test(baboard)){
        document.getElementById('fa21').innerHTML = "";
        
      }
      else {
        document.getElementById('fa21').innerHTML = "** Please enter the only character";
        return false;
      }
            /*if(!isNaN(baboard)){
        document.getElementById('fa21').innerHTML =" ** only characters are allowed";
        return false;
      }*/
           if(baroll == ""){
          

                document.getElementById('fa22').innerHTML =" ** Please fill the Roll No field";
                return false;
            }
            if(bayear == ""){
          

                document.getElementById('fa23').innerHTML =" ** Please enter the passing year";
                return false;
            }
            if(batmarks == ""){
          

                document.getElementById('fa24').innerHTML =" ** Please enter the total Marks :";
                return false;
            }
            
            if(baomarks == ""){
          

                document.getElementById('fa25').innerHTML =" ** Please enter the obtain Marks :";
                return false;
            }
            if(batmarks<baomarks){
          

                document.getElementById('fa25').innerHTML =" *Please enter the correct obtain Marks *  :";
                return false;
            }
             if(batmarks== baomarks){
          

                document.getElementById('fa25').innerHTML =" *total  Marks can not be equal to obtain marks *  :";
                return false;
            }
            if(badiv== 0){
          

                document.getElementById('badiv1').innerHTML =" ** Please select the Division :";
                return false;
            }
            if( balist== 0){
          

                document.getElementById('balist1').innerHTML =" ** Please select the Annual/Supplementary feild:";
                return false;
            }
          }
            }
             </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
      <script>
        AOS.init();
      </script>

    <?php require "assets/form-components/ajax-form-data.php"; ?>

    






  </body>

</html>