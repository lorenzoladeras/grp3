
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href={{asset('assets/css/clienti.css')}}>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<style>
input[class=eyyy], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>


<body>


<h3>Payment Information</h3>

<div>
<div class="card card-default">
<div class="card-body">
<h1 id="price" name="price" >Total to Pay:  <span id="totali" name="totali"></span></h1>
  <form id="addUser" class="form-inline" name="addUser" method="POST" action="">

    <label for="lname">Name</label>
    <input class="eyyy" type="text" id="name" name="name" placeholder="" required>

    <label for="lpname">Product</label>
    <input class="eyyy" type="text" id="pname" name="pname" placeholder="[productName+number] for confirmation" required>

    <label for="lemail">E-mail</label>
    <input class="eyyy" type="email" id="email" name="email" placeholder="example@gmail.com" required>

    <label for="lreference">Reference Number</label>
    <input class="eyyy" type="text" id="reference" name="reference" placeholder="GCash Reference Number" required>

    <label>GCASH NUMBER : 0950993***9</label>

    <input type="submit" onclick="uploadInfo()">
    </form>
</div>
</div>
<script>
    var totalue = localStorage.getItem("totalue");
    document.getElementById("totali").innerHTML = totalue;
</script>
</div>
</div>

</div>

{{--Firebase Tasks--}}
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>




<script>
// Initialize Firebase 
        var config = {
            apiKey: "{{ config('services.firebase.api_key') }}",
            authDomain: "{{ config('services.firebase.auth_domain') }}",
            databaseURL: "{{ config('services.firebase.database_url') }}",
            projectId: "{{ config('services.firebase.project_id') }}",
            storageBucket: "{{ config('services.firebase.storage_bucket') }}",
            messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
            appId: "{{ config('services.firebase.app_id') }}",
            measurementId: "{{ config('services.firebase.measurement_id') }}"
        };
        firebase.initializeApp(config);
        firebase.analytics();

        var database = firebase.database();
  
        var lastIndex = 0;
         
         // Get Data
         firebase.database().ref('Orders/').on('value', function (snapshot) {
            var value = snapshot.val();
            var htmls = [];
           $.each(value, function (index, value) {
                if (value) {
                }
                lastIndex = index;
            });
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });
        
        //upload information
          function uploadInfo() {
           if (name,pname,email,reference !== "") { 

             var values = $("#addUser").serializeArray();
             var name = values[0].value;
             var pname = values[1].value;
             var email = values[2].value;
             var reference = values[3].value;
             var userID = lastIndex + 1;

            console.log(values);

            var totalue = localStorage.getItem("totalue");
            firebase.database().ref('Orders/' + userID).set({
                name: name,
                pname: pname,
                email: email,
                reference: reference,
                cost: totalue,
              });
           
        // Reassign lastID value
        lastIndex = userID;
        $("#addUser input").val("");
           window.location = "/home";
           }
          }

          // Update Data
        var updateID = 0;
        $('body').on('click', '.updateData', function () {
            updateID = $(this).attr('data-id');
            firebase.database().ref('Orders/' + updateID).on('value', function (snapshot) {
                var values = snapshot.val();

                $('#updateBody').html(updateData);
            });
        });

        $('.updateUser').on('click', function () {
            var values = $(".users-update-record-model").serializeArray();
            var postData = {
                name: values[0].value,
                email: values[1].value,
            };

            var updates = {};
            updates['/Orders/' + updateID] = postData;

            firebase.database().ref().update(updates);

            $("#update-modal").modal('hide');
        });

      // Remove Data
      $("body").on('click', '.removeData', function () {
            var id = $(this).attr('data-id');
            $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
        });

        $('.deleteRecord').on('click', function () {
            var values = $(".users-remove-record-model").serializeArray();
            var id = values[0].value;
            firebase.database().ref('Orders/' + id).remove();
            $('body').find('.users-remove-record-model').find("input").remove();
            $("#remove-modal").modal('hide');
        });
        $('.remove-data-from-delete-form').click(function () {
            $('body').find('.users-remove-record-model').find("input").remove();
        });
       
        
 </script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>



 
 
