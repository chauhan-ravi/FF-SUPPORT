function validateform(){
var name=document.myform.name.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}

if (/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/.test(myform.email.value))
  {
    return (true)
  }
else{
         alert("You have entered an invalid email address!")
         return (false) 
    }

}
