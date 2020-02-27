function DateSplitter()
{
    var myval = document.getElementById('datetimepicker').value; 
    
    if(myval !== '')
    {
         myval=myval.replace("/"," ");
         myval=myval.replace("/"," ");
         myval=myval.replace(":"," ");
    }
    
     document.getElementById('mydate').value = myval;
  
}