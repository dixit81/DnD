<?php
	if($_POST['name'] || $_POST['email'] || $_POST['address']){
	
		$name = $_POST['name'];
		$visitor_email = $_POST['email'];
		$address = $_POST['address'];
		
		$email_subject = "New form submission from pop-up";
		$email_body = "A user has registered his interest from the pop-up.\n". 
					  "Their name is $name and their email is $visitor_email\n".  
					  "Their address is: \n$address"; 
	
		$to = "devashish.kdixit@gmail.com";
		$header = "From: $visitor_email";
		
		if(mail($to, $email_subject, $email_body, $header)) { 
		?>
			<script>
				showThanks();
			</script>
			
		<?php	
		} else {
		
		?>
			
			<script>
				showSorry();
			</script>
		
		<?php
			//header("Location: http://inkpact.com/popupOverlay.html");
		}
		
	}
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Popup Overlay</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		/*	
			if ($.cookie('modal') != 'loaded')
			{
				$.cookie('modal', 'loaded');
   
			}
		*/
			
			//('#thanks').modal('hide');
			//('#sorry').modal('hide');
		
			//alert('hi');
			setTimeout(function() {
				$("#myModal").modal()}, 0);
				
		});
			
		function showThanks() {
		
			$('body').on('click','#enter', function() {
				$('#myModal').modal('hide');
				alert("hi");
				$('#thanks').modal('show');
				alert("hi");
			});
	
		}
		
		function showSorry() {
		
			$('body').on('click','#enter', function() {
					$('#sorry').modal('show');
			});
		
		};
		
	</script>
	
	<style type="text/css">
	
		body{
			font-family: 'Lato';
		}
		
		.label{
			color: #363B3D;
		}
		
		ul {
			list-style-type:circle;
		}
		
		.btn {
			background-color: #7CCDC8;
			color: #FFFFFF;
		}
		
		#thanks{
			display:none;
		}
		
		#sorry {
			display:none;
		}
		
	</style>

	
	
</head>
<body>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<!-- Text must have bullet points -->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Turn your clients into your biggest advocates</h4><br>
				<h5 class="sub-title">Sign up today for</h5>
				<ul>
					<li>Receive a free sample </li>
					<li>Learn how to engage your clients</li>
					<li>How to deliver personalised marketing</li>
				</ul>
					
            </div>
			<form class="contact" name="contents" action="<?php $_PHP_SELF ?>" method="post">
			<div class="modal-body">
				<!-- We need some sort of image to left and text to right -->
				<p>Sign up for</p>
					
					<table style="width: 100%;">
						<tr>
							<td>
								<label class ="label" for="name" id="fname" required>First name</label><br>
								<input type="text" name="name" class="input-details" id="enter-fname"><br>
							</td>
							<td>
								<label class="label" for="email" id="eadd">Email Address</label><br>
								<input type="email" name="email" class="input-details" id="enter-eadd"><br>
							</td>
						</tr>
					</table>
					<label class="label" for="address" id="add">Address</label><br>
					<textarea name="address" class="input-details" id="enter-add" style="width: 100%;"></textarea>
            </div>
            <div class="modal-footer">
                <!-- create a form here and of course a submit button -->
                <button type="submit" class="btn" id="enter" onclick="showThanks();">Submit</button>
            </div>
			</form>
        </div>
    </div>
</div>


<div id="thanks" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-title">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Thank you for signing up</h4>
				<div class="modal-body">
					<h4 class="thankyou">Thank you for registering your interest! We will be emailing you shortly</h4>
				</div>
		</div>
	</div>
</div>


<div id="sorry" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-title">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Oops, something's gone wrong</h4>
				<div class="modal-body">
					<h4 class="soz">We are sorry, something went wrong while processing your form</h4>
				</div>
			</div>	
		</div>
	</div>
</div>
	
</body>
</html>