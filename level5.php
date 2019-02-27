<?php
/*session_start();
include'config.php';
$thislevel=5;
if(isset($_SESSION['user']))
{


	$sql="SELECT level FROM user WHERE email='".$_SESSION['user']."'";
	$result=mysqli_query($con,$sql);
	$user_level=mysqli_result($result,0);

	include 'validate.php';
*/
	if(!isset($_GET['ans']))
	{
		echo "<script>
		window.location = 'level5.php?ans=';
		</script>";
		die();
	}
	
	if($_GET['ans']=="rome")
	{
		$sql="UPDATE user SET level=6,last_time='".date('Y-m-d H:i:s')."' WHERE email='".$_SESSION['user']."'";
		$result=mysqli_query($con,$sql);
		echo "<script>
		window.location = 'level6.php?answer=';
		</script>";
		die();
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tactics | Night Knitting</title>
</head>
<body style="background-color: #000000">
	
<audio id="myAudio" src="assets/music/level5audio.mp3" preload="auto">
	</audio>
	<a class="button" onClick="togglePlay()" style="position: absolute;left: 600px; top:300px;font-size: 30px;">PLAY</a>
	

	<script type="text/javascript">
		var myAudio = document.getElementById("myAudio");
		var isPlaying = false;

		function togglePlay() {
		  if (isPlaying) {
		    myAudio.pause()
		  } else {
		    myAudio.play();
		  }
		};
		myAudio.onplaying = function() {
		  isPlaying = true;
		};
		myAudio.onpause = function() {
		  isPlaying = false;
		};
	</script>
		<div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="homepage.php" class="button" style="position: fixed; bottom: 30; font-size: 1.5rem;font-family: 'Lato', sans-serif;">Home</a>
	    </div>
	    <div style="padding-top: 6rem; padding-left: 8rem; text-align: left;"><a href="leaderboard.php" class="button" style="position: fixed; bottom: 30; right: 132; font-size: 1.5rem;font-family: 'Lato', sans-serif;">Leaderboard</a>
	    </div>
	   
</body>
</html>



