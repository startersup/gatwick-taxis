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