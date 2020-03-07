var CabType="Saloon";
var CabObject={};
var TempElement={"id":"Saloon"};
function LoadMyCabs(ele)
{
 var myurl =  LocationUrl +'myapi/fare_calculator.php';
 var mydata={};
 mydata['cabtype']=ele.id;
 ServerEvent(mydata,myurl,'ViewAll');
} 
function LoadQuotes()
{
 var myurl =  LocationUrl +'myapi/fare_calculator.php';
 var mydata={};
 mydata['q']=getUrlVars();
 ServerEvent(mydata,myurl,'ViewAll');
} 

//  function initMap(src,des,via,fnName) {
//       directionsService = new google.maps.DirectionsService;
//       var myLatLng = {lat: 51.5287352, lng: -0.3817888};
//       var chicgo = new google.maps.LatLng(51.5287352, -0.3817888);
//       var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 8,
//         center:myLatLng
//       });
//       directionsDisplay = new google.maps.DirectionsRenderer({
//         map: map
//       });
//      window[fnName](src,des,via);
//     }
    
// function calcRouteVia(src,des,via) {
    
//       var start = src;
//       var end =  des;
      
//         var waypoints = [];
//     var address=via;
//     waypoints.push({
//             location: address,
//             stopover: true
//         });
        
//      // var via="<?php echo($via); ?>";
//       var request = {
//         origin: start,
//         destination: end,
//       waypoints: waypoints,
//       optimizeWaypoints: true,
//       travelMode: google.maps.DirectionsTravelMode.DRIVING
//       };
//       directionsService.route(request, function(result, status) {
//         if (status == google.maps.DirectionsStatus.OK) {
//          directionsDisplay.setDirections(result);
//         }
//       });
//     };

// function calcRoute(src,des,via) {
    
//       var start = src;
//       var end =  des;
      
//       var request = {
//         origin: start,
//         destination: end,
//         travelMode: google.maps.TravelMode.DRIVING
//       };
//       directionsService.route(request, function(result, status) {
//         if (status == google.maps.DirectionsStatus.OK) {
//           directionsDisplay.setDirections(result);
//         }
//       });
//     };
    
function ServerEvent(apiJson,apiUrl,fnName)
{
    $.ajax({
        url: apiUrl,
        data: apiJson,
        async:false,
        type: 'POST',
        success: function (dataofconfirm) {
            CabObject=dataofconfirm;
            window[fnName](TempElement);
        },
        error: function (xhr, status, error) {
           
        }
    });

}

function ViewAll(element)
{
var cabList=['Saloon','Estate','MPV-4','MPV-6','8-Seater','9-Seater'];
for(var i=0;i<cabList.length;i++)
{
    var tempobj ={};
    tempobj["id"]=cabList[i];
    ViewMyCabs(tempobj)
}

}
function ViewMyCabs(element)
{
    CabType=element.id;
    var temp =JSON.parse(CabObject);
    var objcars = temp[CabType];
    var objPartners=temp["partner"];
    
    
    document.getElementById('MyCarsView').innerHTML='';
    var imagepath=objcars.images;
    var objCapacity =objcars.capacity;
    var addcontent ='';
    for(var i=0; i<objPartners.length;i++)
    {
        var myRating = temp['rating'][i];
        
 /*
        addcontent = addcontent + ' <tr  id="'+objPartners[i]+'" onclick = "booknow(this);">';
        addcontent = addcontent +'<td>Minicabee #'+objPartners[i]+'<br>( '+temp['rating'][i]+' Rating )</small> </td>';
        addcontent = addcontent+'<td>£'+objcars.disfare[i]+'</td>';
        addcontent = addcontent+'</tr>';  */

        addcontent = addcontent + '    <div class="col-md-4">                                                                                            ';
        addcontent = addcontent + '                           <div class="quote-card top-margin">                                                        ';
        addcontent = addcontent + '                               <div class="float-card">10% Discount</div>                                             ';
        addcontent = addcontent + '                               <div class="img-med-bar">                                                              ';
        addcontent = addcontent + '                                   <img src="../images/'+imagepath+'.png" style="max-width:200px;width:100%;">        ';
        addcontent = addcontent + '                               </div>                                                                                 ';
        addcontent = addcontent + '                               <p class="fleet-name">GT Provider #23</p>                                              ';
        addcontent = addcontent + '                               <div class="gt-star-rate">                                                             ';
        addcontent = addcontent + '                                   <span class="fa fa-star checked"></span>                                           ';
        addcontent = addcontent + '                                   <span class="fa fa-star checked"></span>                                           ';
        addcontent = addcontent + '                                   <span class="fa fa-star checked"></span>                                           ';
        addcontent = addcontent + '                                   <span class="fa fa-star checked"></span>                                           ';
        addcontent = addcontent + '                                   <span class="fa fa-star"></span>                                                   ';
        addcontent = addcontent + '                               </div>                                                                                 ';
        addcontent = addcontent + '                               <p class="passenger-capacity">Up to '+objCapacity.split(',')[0]+' passengers per vehicle  </p>                     ';
        addcontent = addcontent + '                               <p class="discount-panel">'+CabType+' x 1</p>                                               ';
        addcontent = addcontent + '                               <p class="fare">£ '+objcars.disfare[i]+'</p>                                           ';
        addcontent = addcontent + '                             <a href="/book/index.html"> <button class="button">Book Now</button></a>                 ';
        addcontent = addcontent + '                           </div>                                                                                     ';
        addcontent = addcontent + '                       </div>                                                                                         ';
            

}
    
 
   document.getElementById('MyCarsView').innerHTML = addcontent;

   
 
}

function booknow(ele)
{
    var x = ele.id;
    var session_param=getUrlVars();
    
    var temp = '<form id="myForm" method="POST" action="'+LocationUrl+'myapi/handle_session.php?q='+session_param+'" hidden><input type="text" name="selected" value="'+x+'"><input type="text" name="cabtype" value="'+CabType+'"><input type="text" name="ses" value="quote"></form>';
    document.getElementById('mycustomform').innerHTML = temp;
    
    document.getElementById('myForm').submit();
}