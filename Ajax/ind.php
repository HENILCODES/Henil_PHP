<!-- log In Page -->
<!document html>
<html>
	<head>
		<title>	Henil </title>
	</head>
<?php
$conn = mysqli_connect("localhost","root","","henil");
if(isset($_POST['submit'])){
	$number= $_POST['num'];
	$pass= $_POST['pass'];
$in = "INSERT INTO `log in`(`Number`, `Password`) VALUES ('$number', '$pass')";
mysqli_query($conn, $in);
}
?>
<body>		
	<h1> Log in</h1>
	<div class="main">
		<form method="POST" name="f1" autocomplete="off" onsubmit="return h1()">
			<input type="text" name="num" size="13" title="enter Phone number" maxlength="10" placeholder="Mobile number"> <br>
			<input type="password" name="pass" placeholder="Password" title="Enter Strong Password"> <br>
			<button name="submit" title="Log in"> Log in</button>
		</form>
	</div>
</body>
</html>

<style>
*{
margin: auto;
	padding: 10px;
	font-family:Roman;
	background-color:black;
}
body{
padding-top:130px;
}
.main{
	color:white;
	border:0px ;
	text-align: center;
	width:500px;
	
}
button{
	color:white;
	font-size:35px;
	background-color:brown;
	padding-top:2px;
	margin:20px;
	border-radius: 150px;
	box-shadow: 0 5px #999;
	width: 25%;
}
button:hover{
	background:yellow;
	color:black;
}
button:active{
	transform: translateY(5px);
	background-color:royalblue;
	color:white;
}
input{
	font-size: 30px;
	color:white;
	border:solid green;
	padding-top:9px;
	margin: 25px;
}
input:hover{
	background-color:aqua;
	color:black;
}
h1{
	color:white;
	text-align:center;
	font-size:40px;
	padding-bottom:20px;
	text-shadow: 0 0 7px #fff;				
}
form{
	background-color:darkslategray;
	box-shadow: 0 0 40px rgb(147, 249, 249);
}
</style>

<script>
function h1(){
var a,b;
a = document.f1.num.value;
b = document.f1.pass.value;
	if(a =='' || a == null ||b =='' || b == null  )
	{
		alert("Can't be blank");
		return false;
	}
	else if(isNaN(a))
	{
		alert("Enter only number");
		return false;
	}
	else if(a.length <10)
	{
		alert("Enter Only 10 Digitise number");
		return false;
	}
	else if(b.length <8)
	{
		alert("Enter Minimum 8 Latter Password Pleas");
		return false;
	}
	else
	{
		alert("Congratulations 🎊 You Log In Now");
	}
}
</script>