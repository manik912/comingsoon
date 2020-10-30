<?php
    $msg="";
    if(isset($_POST["submit"]))
    {
        include_once("dbconnect.php");
        $name=$_POST["name"];
        $mail=$_POST["email"];
        $query="insert into subscribers values('$name','$mail')";
        mysqli_query($dbcon,$query);
        $msg=mysqli_error($dbcon);
        if($msg=="")
            $msg="Thank You for Subscribing...";
        else
            $msg="Some error occured try again";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pitchers 5.0, EDC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style>
		@media only screen and (max-width: 990px) {
  #fix{
    background-image: url('images/bgipad.gif') !important;
  }
}
		@media only screen and (max-width: 480px) {
  #fix{
    background-image: url('images/bgph.gif') !important;
  }
}
@media only screen and (max-width: 480px) {
  #fix2{
    padding-top:9px !important;
  }
}

	</style>
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div id="fix" class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg01.gif');">

			<div id="fix2" class="wsize2 flex-w flex-c-m cd100 js-tilt" style="padding-top:79px;">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span id="day" class="l2-txt1 p-b-9"></span>
					<span class="s2-txt4">Days</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span id="hour" class="l2-txt1 p-b-9"></span>
					<span class="s2-txt4">Hours</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span id="minute" class="l2-txt1 p-b-9"></span>
					<span class="s2-txt4">Minutes</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span id="second" class="l2-txt1 p-b-9"></span>
					<span class="s2-txt4">Seconds</span>
				</div>
			</div>
		</div>
		<script>
			function countdown() {
				var now = new Date();
				var over_time = new Date("November 08, 2020 09:00:01");

				var now_time = now.getTime();
				var over = over_time.getTime();
				var end_time = over - now_time;

				var days = Math.floor(end_time / (1000 * 60 * 60 * 24));
				var hours = Math.floor((end_time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((end_time % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((end_time % (1000 * 60)) / 1000);
				if (hours < "10") { hours = "0" + hours; }
				if (minutes < "10") { minutes = "0" + minutes; }
				if (seconds < "10") { seconds = "0" + seconds; } 

				console.log(seconds)
			
				document.getElementById("day").innerHTML = days;
				document.getElementById("hour").innerHTML = hours;
				document.getElementById("minute").innerHTML = minutes;
				document.getElementById("second").innerHTML = seconds;

				setTimeout(countdown, 1000);

			}
			countdown();
		</script>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="images/icons/logo.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					Entrepreneurship Development Cell's <span class="m1-txt2">Pitchers 5.0</span>, coming soon! Stay Tuned!
				</p>

				<form class="contact100-form validate-form" method="post" action="index.php">
					<div class="wrap-input100 m-b-10 validate-input" data-validate = "Name is required">
						<input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Your Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full">
						<button type="submit" class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04" name="submit" value="submit">
							Subscribe
						</button>
					</div>
                    <div class="m1-txt1"><?php if(isset($msg)){ echo $msg; } ?></div>

				</form>

				
			</div>

			<div class="flex-w">
				<a href="https://www.linkedin.com/school/entrepreneurship-development-cell-thapar-university/" class="flex-c-m size5 bg4 how1 trans-04 m-r-5" style="text-decoration: none">
					<i class="fa fa-linkedin"></i>
				</a>

				<a href="https://www.instagram.com/edc_tiet/" class="flex-c-m size5 bg5 how1 trans-04 m-r-5" style="text-decoration: none">
					<i class="fa fa-instagram"></i>
				</a>

				<a href="https://www.facebook.com/edctiet" class="flex-c-m size5 bg3 how1 trans-04 m-r-5" style="text-decoration: none">
					<i class="fa fa-facebook"></i>
				</a>
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 11,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script> -->
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>