<script type="text/javascript">
      $(document).ready(function(){

        function loadprograms()
        {
          $.ajax({
                  url : "assets/form-components/form-load-programs.php",
                  type : "POST",
                  success : function(data){
                    $("#program").html(data);
                    //alert(data);
                  }
                });
        }

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

        $("#offered_programs").change(function()
        {
          var value = $(this).val();
          
          $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:1,program:value},
                  success : function(data){
                    $("#ssc").html(data);
                    
                    //alert(data);
                  }
                });
            $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:2,program:value},
                  success : function(data){
                    $("#hssc").html(data);
                    
                    //alert(data);
                  }
                });
            $.ajax({
                  url : "assets/form-components/form-load-ssc.php",
                  type : "POST",
                  data:{cid:3,program:value},
                  success : function(data){
                    $("#ba").html(data);
                    
                    //alert(data);
                  }
                });

            whole();
        });

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

          whole();

        });

        $("#seat").change(function(){
          

          whole();

        });


        //Form Submission


        function whole()
        {
          if (($('#program').val()!="")&&($('#offered_programs').val()!="")&&($('#seat').val()!="")) 
          {
            $('#whole').fadeIn(3000);
            $('#last_btn').show();
          }
          else
          {
            $('#whole').fadeOut(2000);
            $('#last_btn').fadeOut(2000);
          }
        }

        $('#hsscomarks,#hssctmarks').on('change', function() {
          
          //alert("typed");

          var total = $('#hssctmarks').val();
          var obtained = $('#hsscomarks').val();
          

            //alert(total+"<br>"+obtained+"<br>"+program+"<br>"+degree);

          if (total==""||obtained=="") 
          {
            $("#hssc_percentage").html('');
          }
          else 
          {
            interpercentage();
          }
          //alert(a1+a2); 

          

        });

        function interpercentage()
        {
          var total = $('#hssctmarks').val();
          var obtained = $('#hsscomarks').val();
          total=parseFloat(total);
          obtained=parseFloat(obtained);

          var program = $('#program').val();
          var degree = $('#offered_programs').val();
          //alert(total+"<br>"+obtained+"<br>"+program+"<br>"+degree);

          if(total<=obtained)
          {
            $("#hssc_percentage").html('<p class="text-danger">Error : Total Marks cannot be Less than or Equal to Obtained Marks</p>');
            //alert("total<=obtained");
          }

          else
          {

            //alert("Executed");
            $.ajax({
                  url : "assets/form-components/form-chk-percentage.php",
                  type : "POST",
                  data:{type:1,program:program, degree:degree,total:total,obtained:obtained},
                  success : function(data){

                    $("#hssc_percentage").html(data);
                    
                    //alert(data);
                  }
                });
          }
        }

         $('#baomarks,#batmarks').on('change', function() {
          
          //alert("typed");

          var total = $('#batmarks').val();
          var obtained = $('#baomarks').val();
          

            //alert(total+"<br>"+obtained+"<br>"+program+"<br>"+degree);

          if (total==""||obtained=="") 
          {
            $("#ba_percentage").html('');
          }
          else 
          {
            bapercentage();
          }
          //alert(a1+a2); 

          

        });

        function bapercentage()
        {
          var total = $('#batmarks').val();
          var obtained = $('#baomarks').val();
          total=parseFloat(total);
          obtained=parseFloat(obtained);

          var program = $('#program').val();
          var degree = $('#offered_programs').val();
          //alert(total+"<br>"+obtained+"<br>"+program+"<br>"+degree);

          if(total<=obtained)
          {
            $("#ba_percentage").html('<p class="text-danger">Error : Total Marks cannot be Less than or Equal to Obtained Marks</p>');
            //alert("total<=obtained");
          }

          else
          {

            //alert("Executed");
            $.ajax({
                  url : "assets/form-components/form-chk-percentage.php",
                  type : "POST",
                  data:{type:2,program:program, degree:degree,total:total,obtained:obtained},
                  success : function(data){

                    $("#ba_percentage").html(data);
                    
                    //alert(data);
                  }
                });
          }
        }


    loadprograms(); // Load Table Records on Page Load
    loaddegree();
    loadseats();
    loadreligion();
    loadgender();
    loadexam();
    //loadssc();
    $('#matric').hide()
    $('#intermediate').hide(); 
    $('#bachelor').hide();
    $('#whole').hide();
    $('#last_btn').hide();


      });
    </script>