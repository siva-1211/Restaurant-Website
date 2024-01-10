function login(){
var mail=document.getElementById("email").value;
    var pword=document.getElementById("password").value;
    var ans1=0;
    var ans2=0;
    var check=/^[A-Z]([0-9a-zA-z]){0,10}/;
    
    if(mail == "" || pword == ""){
      return alert("please fill all details");
    }
    else
    {
        for (i in mail)
        {
            if(mail[i]=="@")
            {
             ans1=1;
            }
    
        }
        if(ans1!=1)
        {
             alert("Enter proper mail id");
        }

        

    }


    if(check.test(pword))
    {
        ans2=1;
       
            
    }

    else
    {
         
        alert("Enter strong password");
    }

    if(ans1 ==1 && ans2 == 1)
    {
         alert("Login Sucessfull!!!")
    }



    
    
    

    

  
    

  
 
    
    }
    
    