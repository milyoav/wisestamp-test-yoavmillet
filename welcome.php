<html>
	<head>
		<title>Junior Front-End Developer Test - Yoav Millet</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		* {
			box-sizing: border-box;
			margin: 0;
		}
		
		#wrapper {
			font-family: calibri;
			font-size: 24px;
			background-color: #10C19E;
			text-align: center;
			height: 100%;
			position: relative;
		}
		
		#textbox {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			height: 150px;
			width: 25%;
			background-color: #F5F5F5;
			border-radius: 5px;
			margin: 0 auto;
			padding-top: 15px;
			display: inline-block;
		}
		
		#logo {
			width: 50px;
			display: block;
			margin: 15px auto;
		}
		
		p {
			width: 90%;
			display: inline-block;
			margin: 0 auto;
		}
		
		@media only screen and (max-width: 768px) {
			* {
				font-size: 100%;
			}
			
			#textbox {
				width: 80%;
			}
		}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="textbox">
				<img id="logo" src="mail.png"/>
				<p>Welcome, <?php echo $_POST["name"]; ?>!</p>
			</div>
		</div>
	</body>
</html>