

<body>
 
 <?php include('nav.php');
 include('banner.php');
 include('about.php');
 include('fleets.php');
 include('partner.php');
 include('reviews.php');
 include('footer.php');
 
 ?>


    <script>
        var placeSearch, autocomplete, autocomplete2, autocomplete3;

        function initAutocomplete() {

            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);


            autocomplete2 = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete2')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete2.addListener('place_changed', fillInAddress);


            autocomplete3 = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete3')), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'uk'
                    }
                });




            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete3.addListener('place_changed', fillInAddress);


        }


        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
            var place = autocomplete2.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }

            var place = autocomplete3.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }



        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJNbx7wr01p7h2a0psOsVieTc7Ge1LB8&libraries=places&callback=initAutocomplete" async defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
    <script>
        $(document).ready(function() {
            $.datetimepicker.setLocale('pt-EN');
            $('#datetimepicker').datetimepicker({
                // var u="60:00";
                datepicker: true,
                allowTimes: [
                    '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
                ]
            });

        });

    </script>



    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/59fc608ebb0c3f433d4c6dff/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <!--End of Tawk.to Script-->
    <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">
    <script src="https://cdn.jsdelivr.net/gh/stevenmonson/googleReviews@EikxODIgTWVhZG93Y3JvZnQgSG91c2UsIEhvcmxleSBSSDYgOUVSLCBVSyIxEi8KFAoSCd3S8JNo8HVIEcQtgoz2-CR9ELYBKhQKEgnh8uPuaPB1SBE9pX7xWQDFgA/google-places.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDgJNbx7wr01p7h2a0psOsVieTc7Ge1LB8&signed_in=true&libraries=places"></script>
</body>

</html>
