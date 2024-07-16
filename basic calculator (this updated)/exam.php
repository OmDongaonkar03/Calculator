<?php

$conn = mysqli_connect("localhost", "root", "", "exam");
	
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$que = $_POST['que'];
				$ans= $_POST['ans'];
				//$marks = $_POST['ans'];
				
				
				
		$img_query=	mysqli_query($conn, "INSERT INTO `upload`(`que`,`ans`) VALUES ('$que','$ans')");
		//header('Location:index.php?user='.$_SESSION['user'].'');
				
		if($img_query){
			echo"
				<script>alert('done');</script>";
		}else{
			echo"<script>alert('not done');</script>";
		}
				
		
	} 
	

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>
				register
			</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Stick&display=swap" rel="stylesheet">
			<style>
				body{
	font-family: 'Kaushan Script', cursive;
}
*{
	margin:0;
	padding:0;
}
.aa{
	height:40rem;	
	width:100%;
	background-color:black;
	color:white;
	font-size:18px;
	
}
@media screen and (max-width:700px){
.aa{
	height:50rem;
	width:100%;
	background-color:pink;
	color:white;
	display:block;
}
}
.ab{
	width:90%;
	border-radius:10px;
	margin:2%;
	height:60px;
}
.ag{
	width:90%;
	border-radius:10px;
	margin:2%;
	height:60px;
}
.b{
	text-align:center;
	padding:5px;
}
.c{
	height:30px;
	border-radius:5px;
	border:1px green;
	border-style:dashed;
	color:black;
	text-align:center;
	margin: 5px 20px 15px 10px;
	width: 300px;
}
.k{
	background-color:black;
	color:white;
	margin:1%;
	width:100px;
	border-radius:5px;
	border:2px white;
	border-style:dashed;
	color:white;
	font-size:18px;
	padding: 15px 25px 15px 20px;
}
@media screen and (max-width:700px){
	
.ab{
	width:100%;
	border-radius:10px;
	margin:2%;
	height:60px;
}
.ag{
	width:90%;
	border-radius:10px;
	margin:2%;
	height:60px;
}
.b{
	text-align:center;
	padding:5px;
}
.c{
	height:30px;
	border-radius:5px;
	border:1px green;
	border-style:dashed;
	color:black;
	text-align:center;
	margin: 5px 20px 15px 10px;
	width: 300px;
}
.k{
	background-color:black;
	color:white;
	margin:1%;
	width:100px;
	border-radius:5px;
	border:2px white;
	border-style:dashed;
	color:white;
	font-size:18px;
	padding: 15px 25px 15px 20px;
}	
}
			</style>
		</head>
		
		<body>
			
				<div class="aa">
					<form method="POST" autocomplete="off">
						<center>
									<p style="font-size:20px;">
										<b>register</b>
									</p>
								
								<div class="ab">
									<label for="upload" class="b">
									Question
									</label><br>
									<input type="text" name="que"class="c"required>
								</div>	
								
								<div class="ab">
									<label for="lname"class="b">
									Answer
									</label><br>
									<input type="text" name="ans"class="c"required>
								</div>
								
								<div class="ag">
									<label for="submit">
										<input type="submit" name ="submit" value="Sign Up"class="k">
									</label>
								</div>
								
						</center>
					</form>
				</div>
			
			
		
		</body>
	</html>