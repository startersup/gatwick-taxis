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
   
    checkPostCode();

}

function checkPostCode() {
    var address = [];
    address[0] = $('#autocomplete').val();
    address[1] = $('#autocomplete2').val();
    var checkAirportVal = checkAirport(address);
    var postCode = '';
    if (checkAirportVal == 0) {
        $('#autocomplete_pc').val('ga');
        postCode = getPostCodeFromAddress('autocomplete2');
        $('#autocomplete2_pc').val(postCode);
    } else if (checkAirportVal == 1) {
        $('#autocomplete_pc').val('ga');
        postCode = getPostCodeFromAddress('autocomplete');
        $('#autocomplete2_pc').val(postCode);
    }

}

function getPostCodeFromAddress(id) {
    try {
        var temp = $('#' + id).val().split(",").map(s => s.trim().match(/([A-Za-z]{1,2}\d{1,2})(\s?(\d?\w{2}))?/)).filter(e => e)[0][0];
        return temp;
    }
    catch (err) {
        return '';
    }

}

function checkAirport(addressList) {

    var retVal = -1;
    for (var i = 0; i < addressList.length; i++) {

        if (addressList[i].toLowerCase().includes("north terminal")) {
            retVal = i;
            i = addressList.length;
        } else if (addressList[i].toLowerCase().includes("south terminal")) {
            retVal = i;
            i = addressList.length;
        } else {

            try {
                var temp = addressList[i].split(",").map(s => s.trim().match(/([A-Za-z]{1,2}\d{1,2})(\s?(\d?\w{2}))?/)).filter(e => e)[0][0];

                if (temp.split(" ").join("").toUpperCase == 'RH60NP') {
                    retVal = i;
                    i = addressList.length;
                }
            }
            catch (err) {

            }

        }
    }
    return retVal;
}

$(document).ready(function(){
    
$( "#trackerInput" ).keyup(function( event ){
    if (event.keyCode === 13) {
        event.preventDefault();
       
        var myurl =  LocationUrl +'myapi/track_booking.php';
        var mydata={};
        mydata['id']=$(this).val();
        ServerCall(mydata,myurl,'ViewStatus');

    }
});

$( "#applyPromo" ).click(function( event ){
  

        var myurl =  LocationUrl +'myapi/validate_promo.php';
        var mydata={};
        mydata['q']=getUrlVars();
        mydata['promo']=$(this).val();
        ServerCall(mydata,myurl,'SetPromoFare');

    
});

$("#plpicker").focus(function(){
    $('.pl-popup').show();
 });

});

function SetPromoFare(ele)
{
    
}

function ViewStatus(ele)
{
     var temp =JSON.parse(ele);
    for(var i=1;i<=4;i++)
    {
        var txt='.'+i;
        $(txt).removeClass("active");
        
        if(i<=temp.val)
        {
             $(txt).addClass("active");
        }
        
    }
}

    
function ServerCall(apiJson,apiUrl,fnName)
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
           
        }
    });

}



 $(document).ready(function() {
  clockUpdate();
  setInterval(clockUpdate, 1000);
})

function clockUpdate() {
  var date = new Date();
  $('.digital-clock').css({'color': '#000000', 'background-color':'#f4f4f4', 'padding':'0px 20px'});
  function addZero(x) {
    if (x < 10) {
      return x = '0' + x;
    } else {
      return x;
    }
  }

  function twelveHour(x) {
    if (x > 12) {
      return x = x - 12;
    } else if (x == 0) {
      return x = 12;
    } else {
      return x;
    }
  }

  var h = addZero(twelveHour(date.getHours()));
  var m = addZero(date.getMinutes());
  var s = addZero(date.getSeconds());

  $('.digital-clock').text(h + ':' + m + ':' + s)
}







