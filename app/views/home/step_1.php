<!DOCTYPE html>
<html>
<head>
	<title>User Phone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
	  .modal-content {
	    background-color: #fff;
	  }
	</style>
</head>
<body bg-color="white">
	<!-- Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
			    <form method="post" action="<?php echo base_url('home/registerUser')?>" id="register_frm">
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
    				    <?php $this->load->view('alert'); ?>	    
    					<div class="form-group">
    						<label for="phone">Phone Number:</label>
    						<input type="tel" class="form-control" id="phone" name="phone_no" required placeholder="Phone Number">
    						<div id="phone_error" class="text-danger"></div>
    					</div>
    					<div class="form-group">
    						<div class="form-check">
    							<input type="checkbox" class="form-check-input" id="accept_terms" required name="accept_terms">
    							<label class="form-check-label" for="accept_terms">By continuing, you agree to our terms and conditions.</label>
                                <div id="terms_error" class="text-danger"></div>
    						</div>
    					</div>
    				</div>
    				<!-- Modal footer -->
    				<div class="modal-footer" style="text-align: center;">
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>

                    <div class="text-center">
                    <p>
                        <strong>1st Prize $1000</strong> <br>
                        <strong>2nd Prize $500</strong> <br>
                        <strong>3rd Prize $250</strong> <br>
                        <strong>4th - 10th $50</strong>
                    </p>
                    </div>
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
