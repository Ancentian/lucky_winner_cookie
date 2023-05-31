<!DOCTYPE html>
<html>
<head>
    <title>Step 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .modal-content {
            background-color: #fff;
        }
        .custom-checkbox {
            transform: scale(1.5); /* Increase or decrease the value to adjust the size */
        }
    </style>
</head>
<body bg-color="white">
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <form method="post" action="" id="register_frm">
                    <!-- Modal Header -->
                    <div class="text-center mt-2 mb-4">
                        &nbsp;
                        <h4 class="text-center">RECREATION CENTER</h4>
                        <h5 class="text-center">FESTIVE LUCKY DRAW</h5>
                    </div>	
<!-- <div class="modal-header">		
</div> -->
<!-- Modal body -->
<div class="modal-body">		    
    <p class="text-center">
        Please visit all 8 stations to redeem <br>
        a free gift. <br>
        Only first 500 people can redeem.
        <br>
    </p>
</div>
<!-- Modal footer -->
<div class="text-center">
    <div class="form-check">
        <input class="form-check-input custom-checkbox" type="checkbox" id="exampleCheckbox">
        <label class="form-check-label" for="exampleCheckbox">
            Example Checkbox
        </label>
    </div>
</div>  
&nbsp;


</form>
</div>
</div>
</div>

<script>
    $(document).ready(function(){
        $("#myModal").modal({backdrop: 'static', keyboard: false});
        $("#myModal").modal("show");
    });
</script>

</body>
</html>
