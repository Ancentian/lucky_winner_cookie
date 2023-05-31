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
			    <form method="post" action="<?=base_url();?>home/userPhone/<?=$did;?>" id="register_frm">
				<!-- Modal Header -->
				<div class="text-center mt-2 mb-4">
						<img src="<?php echo base_url() ?>res/mwc.png" alt="Your Image" width="100" height="100"><br>
						<h4 class="text-center">Welcome to MWC May Day 2023 Lucky Draw </h4>
					<h7 class=" text-danger">This lucky draw is only valid for migrant brothers on work permit or S pass.</h7>
					</div>	
    				<!-- <div class="modal-header">		
    				</div> -->
    				<!-- Modal body -->
    				<div class="modal-body">		    
    				    <?php $this->load->view('alert'); ?>	    
    					<div class="form-group">
    						<label for="phone">Phone Number:</label>
    						<input type="tel" class="form-control" id="phone" name="phone" required placeholder="+65-8080-4040">
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
    				<div class="modal-footer">
    					<button type="submit" class="btn btn-primary" id="submit">Submit</button>
    				</div>
					<img src="<?php echo base_url() ?>res/footer.png" width="100%" alt="MWC">
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
