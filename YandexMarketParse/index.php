<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta charset="UTF-8">
	<title>index.php</title>
</head>
<body>

	<h1>Enter the link to Yandex market to parse</h1>

	<form  method="post"> 
	
		<input id="value" type="text" placeholder="Enter link from Yandex Market" name="value" value="">
		<input id="submit" type="submit" value="Search">
	</form>


	<?php 

			require_once("lib/simple_html_dom.php");
				
			if (isset($_POST['value']))
			{
				$str = $_POST['value'];

				$html = file_get_html("$str");
				$nameProduct = $html->find('.n-snippet-cell2__title');
				$price = $html->find('.n-snippet-cell2__main-price');
				echo "<div class = 'displayFlex'>";
				echo "<div class = 'title'>";
				foreach ($nameProduct as $key_2 => $value_2) {
					echo $value_2 ."<br>";		
				}
				echo "</div>";
				echo "<div class = 'price'>";
				foreach ($price as $key => $value) {
					echo $value ."<br>";		
				}
				echo "</div>";

				echo "</div>";
			}

	?>

	<style>
		h1 {
			padding-top: 30px;
			text-align: center;
			font-size: 23px;
			font-weight: 650;
			color: #ECADB8;
		}
		form {
			text-align: center;
			padding: 30px 0 80px 0;
		}
		#value {
			outline: none;
			padding: 5px 15px 5px 18px;			
		}
		#submit {
			cursor: pointer;
			padding: 5px 15px 5px 15px;
			border-radius: 7px;
			color: black;
			font-size: 12px;
			border: none;
			margin-left: 15px;
			background-color: pink;
			font-weight: 550;	
			outline: none; 	 
		}
		#submit:hover {
			transition: 500ms;
			background-color: #ECADB8;
		}
		  ::-webkit-input-placeholder {color:purple; font-size: 10px; opacity:0.75;}/* webkit */
		  ::-moz-placeholder          {color:purple; font-size: 10px; opacity:0.75;}/* Firefox 19+ */
		  :-moz-placeholder           {color:purple; font-size: 10px; opacity:0.75;}/* Firefox 18- */
		  :-ms-input-placeholder      {color:purple; font-size: 10px; opacity:0.75;}/* IE */
		.displayFlex {
			display: flex;
			justify-content: space-evenly;
		}
		.n-snippet-cell2__title > a , .price {
			text-decoration: none;
			color: purple; 
			white-space: nowrap;
		}
		.link {
			text-decoration: none;
		}
		.n-snippet-cell2__title{
			text-align: right;
			margin-right: 50px;
		}
		.n-snippet-cell2__main-price {
			margin-left: 50px;
		}

		@media (max-width: 676px) {
			.displayFlex {
				display: flex;
				justify-content: space-evenly;
			}
			.n-snippet-cell2__title {
				font-size: 9px;
				margin-right: 0px;
				text-align: left;
			}
			.n-snippet-cell2__main-price {
				font-size: 9px;
				margin-left: 0;
			}
			.price {
				
			}
		}


	</style>	

	<script src="js/common.js"></script>
</body>
</html>