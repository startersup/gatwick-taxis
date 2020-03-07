
function CheckPromo()
{
    var myurl =  LocationUrl +'myapi/validate_promo.php';
    var mydata={};
    mydata['promo']=document.getElementById("promocode").value;
    var x=document.getElementById("ShowFare").innerHTML;
    var temp=x.split('£');
    mydata['fare']=temp[1];
    ServerEvent(mydata,myurl,'ChangeFare');
}




function ServerEvent(apiJson,apiUrl,fnName)
{
    $.ajax({
        url: apiUrl,
        data: apiJson,
        async:false,
        type: 'POST',
        success: function (dataofconfirm) {
            window[fnName](dataofconfirm);
        },
        error: function (xhr, status, error) {
           var c='';
        }
    });

}

function ChangeFare(obj)
{
    var JsonObj =JSON.parse(obj);
    if(JsonObj["status"] === "Success")
    {
    document.getElementById("ShowFare").innerHTML='£'+JsonObj.newfare;
    }else{
        alert("invalid Promo");
    }
    
}

function SetOnLoad()
{
    document.getElementById("myform").action=LocationUrl+'myapi/handle_session.php';
}



