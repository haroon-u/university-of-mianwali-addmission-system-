
function validation1()
{
	var check = true;
	var pop = "=> Please Enter the following fields Correctly <="+"\n";
	var a = 0;
	var image = document.getElementById("image1").value;
	image = image.split('.').pop();
	var letters = /^[A-Za-z]+$/;
	var letterNumber = /^[0-9a-zA-Z]+$/;
    //program applied
	if(document.getElementById("program").value == "")                       //HERE
	{
        check = false;
        a=a+1;
        pop = pop +a+". Choose (Program) For which applied"+"\n";
		//alert("Undergraduate Selected");
	}

    //department applied

	if(document.getElementById("departmentid").value == "")
	{
		check = false;
		a=a+1;
		pop = pop +a+". Choose Department"+"\n";
	}
	
	var image = document.getElementById("image1").value;
	image = image.split('.').pop();
	if(image == "jpg" || image == "JPG" || image == "jpeg" || image == "JPEG" || image == "PNG" || image == "png") //image extension validation
    {

    }
    else
    {
        check = false;
		a=a+1;
		pop = pop +a+". Please upload your picture or check image format ( jpg, jpeg, png )"+"\n";
    }
//validating text value only
    if (document.getElementById("app_name").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Applicant Name field"+"\n";
    }
    else
    {
    	if(document.getElementById("app_name").value.match(letters))
	    {	
	    }
	    else
	    {
	    	check = false;
			a=a+1;
			pop = pop +a+". Please fill Applicant Name field Correctly (only alphabets allowed) "+"\n";
	    }
    }
    
//validating text value only ends
	
	if (document.getElementById("app_cnic").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Applicant CNIC field"+"\n";
    }
    else if(((document.getElementById("app_cnic").value).length) !=13)
    {
    	check = false;
		a=a+1;
		pop = pop +a+". CNIC should be 13 digit number"+"\n";
    }

//Nationality
if (document.getElementById("app_nationality").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Applicant Nationality field"+"\n";
    }
    else
    {
    	if(document.getElementById("app_nationality").value.match(letters))
    	{	
    	}
    	else
    	{
    		check = false;
			a=a+1;
			pop = pop +a+". Please fill Applicant Nationality field Correctly (only alphabets allowed) "+"\n";
    	}
    }

//Gender
if (document.getElementById("app_gender").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please select Applicant gender"+"\n";
    }

    if (document.getElementById("app_no").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Applicant Cell no.) field"+"\n";
    }
    else if(((document.getElementById("app_no").value).length) !=11)
    {
        check = false;
        a=a+1;
        pop = pop +a+". (Applicant Cell) no should be 11 digit number"+"\n";
    }
if (document.getElementById("religion").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please select (Religion) field"+"\n";
    }
if (document.getElementById("dob").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please select (Date Of Birth) field"+"\n";
    }

if (document.getElementById("pob").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Place of Birth) field"+"\n";
    }
    else
    {
        if((document.getElementById("pob").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Place of Birth) field Correctly (only alphabets allowed) "+"\n";
        }
    }
if (document.getElementById("fincome").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Father Annual Income) field"+"\n";
    }

    
//father name
if (document.getElementById("fname").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Father Name field"+"\n";
    }
    else
    {
    	if(document.getElementById("fname").value.match(letters))
    	{	
    	}
    	else
    	{
    		check = false;
			a=a+1;
			pop = pop +a+". Please fill Father Name field Correctly (only alphabets allowed) "+"\n";
    	}
    }

if (document.getElementById("fcell").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Cell no. field"+"\n";
    }
    else if(((document.getElementById("fcell").value).length) !=11)
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Cell no should be 11 digit number"+"\n";
    }


 if (document.getElementById("fcnic").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Father CNIC field"+"\n";
    }
    else if(((document.getElementById("fcnic").value).length) !=13)
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Father CNIC should be 13 digit number"+"\n";
    }

if (document.getElementById("gname").value=="") 
    {
    	
    }
    else
    {
        if((document.getElementById("gname").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill Guardian Name field Correctly (only alphabets allowed) "+"\n";
        }
    }

    if (document.getElementById("gcell").value=="") 
    {
    }
    else if(((document.getElementById("gcell").value).length) !=11)
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Guardian Cell no should be 11 digit number"+"\n";
    }

 if (document.getElementById("g_rel").value=="") 
    {
    }
    else
    {
        if((document.getElementById("g_rel").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Guardian Relationship) field Correctly (only alphabets allowed) "+"\n";
        }
    }

if (document.getElementById("gcnic").value=="") 
    {
    }
    else if(((document.getElementById("gcnic").value).length) !=13)
    {
    	check = false;
		a=a+1;
		pop = pop +a+". (Guardian CNIC) should be 13 digit number"+"\n";
    }

 if (document.getElementById("tmp_add").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Present Address) field"+"\n";
    }
/*
if (document.getElementById("tmp_city").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Present City) field"+"\n";
    }
    else
    {
        if((document.getElementById("tmp_city").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Present City) field Correctly (only alphabets allowed) "+"\n";
        }
    }
if (document.getElementById("tmp_dist").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Present District) field"+"\n";
    }
    else
    {
        if((document.getElementById("tmp_dist").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Present District) field Correctly (only alphabets allowed) "+"\n";
        }
    }
*/
if (document.getElementById("per_add").value=="") 
   {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Permanent Address) field"+"\n";
  }
/*
if (document.getElementById("per_city").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Permanent City) field"+"\n";
    }
    else
    {
        if((document.getElementById("per_city").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Permanent City) field Correctly (only alphabets allowed) "+"\n";
        }
    }

if (document.getElementById("per_dist").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Permanent District) field"+"\n";
    }
    else
    {
        if((document.getElementById("per_dist").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Permanent District) field Correctly (only alphabets allowed) "+"\n";
        }
    }
*/

                                                                              //HERE
 if (document.getElementById("dom_dist").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Domicile District) field"+"\n";
    }
    else
    {
        if((document.getElementById("dom_dist").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Domicile District) field Correctly (only alphabets allowed) "+"\n";
        }
    }
    if (document.getElementById("dom_pro").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill (Domicile Province) field"+"\n";
    }
    else
    {
        if((document.getElementById("dom_pro").value).match(letters))
        {   
        }
        else
        {
            check = false;
            a=a+1;
            pop = pop +a+". Please fill (Domicile Province) field Correctly (only alphabets allowed) "+"\n";
        }
    }

    //SSC

    if (document.getElementById("sscboard").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Board) field"+"\n";
    }
    if (document.getElementById("sscroll").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Roll) field"+"\n";
    }

     if (document.getElementById("sscyear").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Year) field"+"\n";
    }

 if (document.getElementById("ssclist").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Annual/Supplementary) field"+"\n";
    }

if (document.getElementById("ssctmarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Total Marks) field"+"\n";
    }
    if (document.getElementById("sscomarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Obtained Marks) field"+"\n";
    }
    if (document.getElementById("sscpercent").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Percentage %) field"+"\n";
    }
    if (document.getElementById("sscdiv").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (SSC Division) field"+"\n";
    }

//(HSSC/DAE/A level etc)

     if (document.getElementById("hsscboard").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Board) field"+"\n";
    }
    if (document.getElementById("hsscroll").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Roll) field"+"\n";
    }

     if (document.getElementById("hsscyear").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Year) field"+"\n";
    }

 if (document.getElementById("hssclist").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Annual/Supplementary) field"+"\n";
    }

if (document.getElementById("hssctmarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Total Marks) field"+"\n";
    }
    if (document.getElementById("hsscomarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Obtained Marks) field"+"\n";
    }
    if (document.getElementById("hsscpercent").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Percentage %) field"+"\n";
    }
    if (document.getElementById("hsscdiv").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (HSSC Division) field"+"\n";
    }



//(BA/BCOM/BSc etc)
/*
     if (document.getElementById("baboard").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Board) field"+"\n";
    }
    if (document.getElementById("baroll").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Roll) field"+"\n";
    }

     if (document.getElementById("bayear").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Year) field"+"\n";
    }

 if (document.getElementById("balist").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Annual/Supplementary) field"+"\n";
    }

if (document.getElementById("batmarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Total Marks) field"+"\n";
    }
    if (document.getElementById("baomarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Obtained Marks) field"+"\n";
    }
    if (document.getElementById("bapercent").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Percentage %) field"+"\n";
    }
    if (document.getElementById("badiv").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (BA/BCOM/BSc Division) field"+"\n";
    }
*/

//(MA/MSc/BS)
if ((document.getElementById("program").value) == "Postgraduate (for MS/MPhil Programs only)")
{

    if (document.getElementById("maboard").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Board) field"+"\n";
    }
    if (document.getElementById("maroll").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Roll) field"+"\n";
    }

     if (document.getElementById("mayear").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Year) field"+"\n";
    }

 if (document.getElementById("malist").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Annual/Supplementary) field"+"\n";
    }

if (document.getElementById("matmarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Total Marks) field"+"\n";
    }
    if (document.getElementById("maomarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Obtained Marks) field"+"\n";
    }
    if (document.getElementById("mapercent").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Percentage %) field"+"\n";
    }
    if (document.getElementById("madiv").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (MA/MSc/BS Division) field"+"\n";
    }
}

/*
//(Other Qualification)

    if (document.getElementById("otherboard").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Board) field"+"\n";
    }
    if (document.getElementById("otherroll").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Roll) field"+"\n";
    }

     if (document.getElementById("otheryear").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Year) field"+"\n";
    }

 if (document.getElementById("otherlist").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Annual/Supplementary) field"+"\n";
    }

if (document.getElementById("othertmarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Total Marks) field"+"\n";
    }
    if (document.getElementById("otheromarks").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Obtained Marks) field"+"\n";
    }
    if (document.getElementById("otherpercent").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Percentage %) field"+"\n";
    }
    if (document.getElementById("otherdiv").value=="") 
    {
        check = false;
        a=a+1;
        pop = pop +a+". Please fill (Other Qualification Division) field"+"\n";
    }
*/





	if(check == false) //place in last before return
	{
		alert(pop);
	}

	return check;
}