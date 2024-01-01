<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Management System</title>
	<link rel="stylesheet" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>

    </style>
</head>

<body>

	<nav>
		<label class="logo">W-School</label>

		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Admission</a></li>
			<li><a href="./sighnup.php" class="btn btn-success">SighnUp</a></li>
		</ul>
	</nav>


	<div class="section1">
		
		<label class="img_text">We Teach Students With Care</label>
		<img class="main_img" src="/project_image/school_management.jpg">
	</div>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="/project_image/welcome_img" src="/project_image/school2.jpg">
				
			</div>

			<div class="col-md-8">

				<h1>Welcome to W-School</h1>

				<p>MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.MEMS has been committed to global learning long before it became an indispensable feature of contemporary education. Established in 1997, we proudly stand as the 1st English medium school in Bangladesh to adopt both Pearson Edexcel and Cambridge curriculum (in O and A levels), drawing together students in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1>Our Teachers</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="/project_image/teacher" src="/project_image/teacher1.jpg">

				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="/project_image/teacher2.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="/project_image/teacher3.jpg">
				<p>in a vibrant, academically challenging, and encouraging environment where manifold viewpoints are prized and celebrated.</p>
				
			</div>
			

		</div>
		

	</div>






	<center>
		<h1>Our Courses</h1>
	</center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="/project_image/web.jpg">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="/project_image/graphic.jpg">
				<h3>Graphics Design</h3>
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="/project_image/marketing.png">
				<h3>Marketing</h3>
				
			</div>
			

		</div>
		

	</div>


	<center>
		<h1 class="adm"></h1>

	</center>


	<!-- <div align="center" class="admission_form">

		<form>
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" >
		</div>


		</form>
		
	</div> -->


	<footer>
		<h3 class="footer_text">All @copyright reserved by web tech knowledge</h3>
	</footer>


</body>
</html>


================    code for style.css       =================


*
{
	padding: 0;
	margin: 0;
}

nav
{
	position: fixed;
	background-color: skyblue;
	height: 70px;
	width: 100%;
	z-index: 1;
}


.logo
{
	font-size: 25px;
	position: relative;
	left: 5%;
	color: white;
	font-weight: bold;
	line-height: 70px;
}

ul
{
	position: relative;
	float: right;
	margin-right: 20px;
}

ul li 
{
	display: inline-block;
	line-height: 70px;
	margin: 0 5px;
}

ul li a 
{
	text-decoration: none;
	color: white;
	font-size: 17px;
}

.main_img
{
	width: 100%;
	height: 300px;
}

.section1
{
	padding-top: 70px;
}


.img_text
{
	position: absolute;
	top: 20%;
	left: 30%;
	color: white;
	background-color: midnightblue;
	padding-right: 20px;
	padding-left: 20px;
	font-size: 35px;
}

.welcome_img
{
	width: 100%;
	height: 250px;
}

.container
{
	padding-top: 70px;
}


.teacher
{
	width: 90%;
	height: 200px;
}

.label_text
{
	display: inline-block;
	width: 100px;
	text-align: right;
	padding-right: 10px;
}


.input_deg
{
	width: 30%;
	height: 40px;
	border-radius: 25px;
	border: 1px solid blue;
	 
}

.adm_int
{
	padding-top: 10px;
}

.input_txt
{
	width: 30%;
	height: 120px;
	border-radius: 25px;
	border: 1px solid blue;
}

#submit
{
	position: relative;
	width: 15%;
	left: 5%;
}


footer
{
	background-color: black;
	height: 70px;
	width: 100%;

}


.footer_text
{
	text-align: center;
	color: white;
	top: 20%;
	position: relative;
}

.adm
{
	padding-top: 30px;
	padding-bottom: 30px;
}



.form_deg
{
	padding-top: 200px;
}

.label_deg
{
	display: inline-block;
	color: skyblue;
	width: 100px;
	text-align: right;
	padding-top: 10px;
	padding-bottom: 10px;
}


.login_form
{
	background-color: black;
	width: 400px;
	padding-top: 70px;
	padding-bottom: 70px;
}

.title_deg
{
	background-color: skyblue;
	color: white;
	text-align: center;
	font-weight: bold;
	width: 400px;
	padding-top: 10px;
	padding-bottom: 10px;
	font-size: 20px;
}


.body_deg
{
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
}