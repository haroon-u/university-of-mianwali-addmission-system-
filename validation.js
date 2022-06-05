function validate(){
    
    var name = document.getElementById('name').value;
    
    if(name == ""){
          

                document.getElementById('nameerror').innerHTML =" ** Please fill the username field";
                return false;
            }
          }
/*function sayHi(){
  confirm("Would you really want to submit?")
}