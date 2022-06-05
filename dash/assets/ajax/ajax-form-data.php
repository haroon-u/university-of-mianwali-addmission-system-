<script type="text/javascript">
      $(document).ready(function(){

        function choose_degree()
        {
          $.ajax({
                  url : "assets/ajax/choose_educational_degrees.php",
                  type : "POST",
                  success : function(data){
                    $("#select_degree").html(data);
                    //alert(data);
                  }
                });
        }
        choose_degree();

        function certificates()
        {
          $.ajax({
                  url : "assets/ajax/certificates.php",
                  type : "POST",
                  success : function(data){
                    $("#cname").html(data);
                    //alert(data);
                  }
                });
        }
        certificates();


        function departments()
        {
          $.ajax({
                  url : "assets/ajax/departments.php",
                  type : "POST",
                  success : function(data){
                    $("#departments").html(data);
                    //alert(data);
                  }
                });
        }
        departments();


        

        $("#add_degree").submit(function(e){
          e.preventDefault();

          $.ajax({
                  
                  url : "assets/ajax/add_educational_degrees.php",
                  type : "POST",
                  data : $('#add_degree').serialize(),
                  success : function(data){
                    alert(data);
                    document.getElementById('add_degree').reset();
                  }
                    
          //e.preventDefault();
        //document.getElementById('add_degree').reset();
        });
        });


        $("#degree_details").submit(function(e){
          e.preventDefault();

          $.ajax({
                  
                  url : "assets/ajax/update_degree_details.php",
                  type : "POST",
                  data : $('#degree_details').serialize(),
                  success : function(data){
                    alert(data);
                    document.getElementById('degree_details').reset();
                    

                    
                  }
                    
          //e.preventDefault();
        //document.getElementById('degree_details').reset();
        });
        });


        $("#select_degree").change(function(){


          var value = $(this).val();
          
          $.ajax({
                  url : "assets/ajax/get_educational_degrees.php",
                  type : "POST",
                  data:{cid:value},
                  success : function(data){
                    $("#degree_details").html(data);
                    
                  //alert(data);
                  }
                });
          //alert(value);

        });



        function season_get()       //Geting All seasons list form Database (selection options)
        {
          $.ajax({
                  url : "assets/ajax/season_get.php",
                  type : "POST",
                  success : function(data){
                    $("#seasonselect").html(data);
                    //alert(data);
                  }
                });
        }
        season_get();


        $("#seasonselect").change(function(){               //Geting All seasons details form Database (form fields)


          var value = $(this).val();
          
          $.ajax({
                  url : "assets/ajax/season_show.php",
                  type : "POST",
                  data:{tid:value},
                  success : function(data){
                    $("#seasonshow").html(data);
                    
                  //alert(data);
                  }
                });
          //alert(value);

        });

        $('#seasonshow').on('click', '.seasonbtn', function (){

                var value=$(this).val();
                //alert(value);
                

                if (value==1)                                       // UPDATING selected field
                {
                  if(confirm("UPDATE This Admission Season!"))
                  {
                    
                    $.ajax({
                          
                          url : "assets/ajax/season_update.php",
                          type : "POST",
                          data : $('#seasonshow').serialize(),
                          success : function(data){
                            alert(data);
                            season_get();
                            $('#seasonshow').html(' ');
                          }
                            
                          //e.preventDefault();
                        //document.getElementById('seasondelete').reset();
                        });
                  }
                }
                else if(value==2)                                 // DELETING selected field
                {

                  if(confirm("DELETE This Admission Season!"))
                  {
                    
                    $.ajax({
                          
                          url : "assets/ajax/season_delete.php",
                          type : "POST",
                          data : $('#seasonshow').serialize(),
                          success : function(data){
                            alert(data);
                            season_get();   //resetting Selection field
                            $('#seasonshow').html(' ');
                          }
                            
                          //e.preventDefault();
                        //document.getElementById('seasondelete').reset();
                        });
                  }
                }
            });
          
        $("#new_season").submit(function(e){
          e.preventDefault();
          if (confirm("Sure to add new Admission SEASON? ")) 
          {
            $.ajax({
                  
                  url : "assets/ajax/season_add.php",
                  type : "POST",
                  data : $('#new_season').serialize(),
                  success : function(data){
                    alert(data);
                    season_get();   //resetting Selection field
                    document.getElementById('new_season').reset();
                    
                  }
                          
                //e.preventDefault();
              //document.getElementById('new_season').reset();
              });
          }

          
        });
          
        









/*

        function loaddegree()
        {
          $.ajax({
                  url : "assets/form-components/form-load-degree.php",
                  type : "POST",
                  success : function(data){
                    $("#offered_programs").html(data);
                    //alert(data);
                  }
                });
        }


        function loadseats()
        {
          $.ajax({
                  url : "assets/form-components/form-load-seats.php",
                  type : "POST",
                  success : function(data){
                    $("#seat").html(data);
                    //alert(data);
                  }
                });
        }


        function loadreligion()
        {
          $.ajax({
                  url : "assets/form-components/form-load-religion.php",
                  type : "POST",
                  success : function(data){
                    $("#religion").html(data);
                    //alert(data);
                  }
                });
        }


        function loadgender()
        {
          $.ajax({
                  url : "assets/form-components/form-load-gender.php",
                  type : "POST",
                  success : function(data){
                    $("#gender").html(data);
                    //alert(data);
                  }
                });
        }


        
        function loadexam()
        {
          $.ajax({
                  url : "assets/form-components/form-load-examination.php",
                  type : "POST",
                  success : function(data){
                    $("#ssclist").html(data);
                    $("#hssclist").html(data);
                    $("#balist").html(data);
                    //alert(data);
                  }
                });
        }

        function loadssc()
        {
          $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:1},
                  success : function(data){
                    $("#ssc").html(data);
                    
                    //alert(data);
                  }
                });
            $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:2},
                  success : function(data){
                    $("#hssc").html(data);
                    
                    //alert(data);
                  }
                });
            $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:3},
                  success : function(data){
                    $("#ba").html(data);
                    
                    //alert(data);
                  }
                });
        }

        $("#program").change(function(){
          var value = $(this).val();
          if(value==1)
          {
            $('#matric').show()
            $('#intermediate').show();
            $('#bachelor').hide();
          }
          else if (value==2) 
          {
            $('#matric').show()
            $('#intermediate').show();
            $('#bachelor').show();
          }
          else
          {
            $('#matric').hide()
            $('#intermediate').hide();
            $('#bachelor').hide();
          }
          //alert(value);

        });




    loadprograms(); // Load Table Records on Page Load
    loaddegree();
    loadseats();
    loadreligion();
    loadgender();
    loadexam();
    loadssc();
    $('#matric').hide()
    $('#intermediate').hide();
    $('#bachelor').hide(); */


      });
    </script>