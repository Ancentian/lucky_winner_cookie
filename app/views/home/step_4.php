<!DOCTYPE html>
<html>
<head>
    <title>Step 4</title>
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
            transform: scale(2.5); /* Increase or decrease the value to adjust the size */
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
    You have completed at 8 Stations <br>
Please proceed to redeem your free gift.
        <br>
    </p>
</div>
<!-- Modal footer -->
<div class="text-center">
    <div class="form-check form-check-inline">
        <input class="form-check-input custom-checkbox" type="checkbox" id="exampleCheckbox1" checked>
        <label class="form-check-label" for="exampleCheckbox1">
            <!-- Example Checkbox 1 -->
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input custom-checkbox" type="checkbox" id="exampleCheckbox2" checked>
        <label class="form-check-label" for="exampleCheckbox2">
            <!-- Example Checkbox 2 -->
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input custom-checkbox" type="checkbox" id="exampleCheckbox3" checked>
        <label class="form-check-label" for="exampleCheckbox3">
            <!-- Example Checkbox 3 -->
        </label>
    </div>

    <div class="form-check form-check-inline">
        <input class="form-check-input custom-checkbox" type="checkbox" id="exampleCheckbox4" checked>
        <label class="form-check-label" for="exampleCheckbox4">
            <!-- Example Checkbox 4 -->
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
