//validating text value only
    if (document.getElementById("app_name").value=="") 
    {
    	check = false;
		a=a+1;
		pop = pop +a+". Please fill Applicant Name field"+"\n";
    }
    else
    {
        if((document.getElementById("app_name").value).match(letters))
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

// length of an input

else if(((document.getElementById("fcell").value).length) !=11)
    {
        check = false;
        a=a+1;
        pop = pop +a+". Cell no should be 11 digit number"+"\n";
    }