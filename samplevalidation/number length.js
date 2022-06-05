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

    //CNIC

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