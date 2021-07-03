function MaskedDecimal(ele, wnum, dnum) {

    var regex = new RegExp("^\\d{0," + wnum + "}(\\.\\d{0," + dnum + "})?$");
    if (!regex.test(ele.value)) {
        ele.value = ele.value.substring(0, ele.value.length - 1);
    }

}

function MaskedNumber(ele, num) {

    var regex = new RegExp("^\\d{0," + num + "}?$");
    if (!regex.test(ele.value)) {
        ele.value = ele.value.substring(0, ele.value.length - 1);
    }

}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars['q'];
}

function alert_modal(Obj)
{
    var header = Obj["status"];
    var message =  Obj["msg"];

     var data2 = JSON.parse(Obj);

     
    if(sts == 'success')
    {
        document.getElementById("alert_success_status_id").innerHTML="";
        document.getElementById("alert_success_status_id").innerHTML=sts;
        
        document.getElementById("alert_success_msg_id").innerHTML="";
        document.getElementById("alert_success_msg_id").innerHTML=strmsg;
        
      
        
        document.getElementById("alert_success_id").click();
       
    }
    else
    {
        document.getElementById("alert_fail_status_id").innerHTML="";
        document.getElementById("alert_fail_status_id").innerHTML=sts;
        
        document.getElementById("alert_fail_msg_id").innerHTML="";
        document.getElementById("alert_fail_msg_id").innerHTML=strmsg;
        
        document.getElementById("alert_fail_id").click();
    }
    
}

var HostName = window.location.host;
var Protocol = window.location.protocol;
var LocationUrl = "";
LocationUrl = Protocol + "//" + HostName + "/";




