<!DOCTYPE html>
<html>
<head>
	<title>Lucky Draw QR Code</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<style>
		body {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.row {
			margin: 0;
		}
	</style>
</head>
<body>
<h1 class="text-center">Scan QR Code</h1>
	<div class="row">
        <div class="col-md-6">  
            <img class="mx-auto d-block" src="<?php echo base_url('uploads/qrcodes/qrCode_1683035079.png'); ?>" alt="QR Code">
	        <!-- <img src="<?php //echo $qr_code_image; ?>" /> -->
        </div>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
