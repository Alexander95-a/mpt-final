<!DOCTYPE html>
<html lang="en">
<head>
	<title>itech</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/assets/icons/favicon.ico"/>

<!--===============================================================================================-->
<style>
	 body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #02A730;
           
        }
		img {
			position: absolute;
			width: 262px;
			height: 128px;
			left: 40%;
			right: auto;
			top: 147px;
			
		}
		img.show-on-mobile{
			position: absolute;
			width: 262px;
			height: 128px;
			left: 15vw;
			right: auto;
			top: 147px;
			
		}

		.btn1{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 38vw;
			top: 500px;

			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		.btn2{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 38vw;
			top: 420px;

			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		.btn3{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 38vw;
			top: 580px;
			white-space: nowrap;
			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		button.btn1{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 1500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		button.btn2{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		button.btn3{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		.btn4{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 24px;
			top: 500px;

			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		.btn5{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 24px;
			top: 420px;

			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		.btn6{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 11px 133px;
			gap: 10px;

			position: absolute;
			width: 311px;
			height: 40px;
			left: 24px;
			top: 580px;
			white-space: nowrap;
			background: rgba(5, 149, 45, 0.7);
			border-radius: 10px;
			
		}
		button.btn4{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 1500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		button.btn5{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		button.btn6{
			

			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			font-size: 18px;
			line-height: 18px;
			/* identical to box height */

			letter-spacing: 0.04em;

			color: #FFFFFF;


			/* Inside auto layout */

			flex: none;
			order: 0;
			flex-grow: 0;
			
		}
		.hide-on-mobile { display: inline; }
		/* Smartphone Portrait and Landscape */
		@media only screen
		and (min-device-width : 320px)
		and (max-device-width : 480px){ .hide-on-mobile { display: none; }}
		.show-on-mobile { display: none; }
		/* Smartphone Portrait and Landscape */
		@media only screen
		and (min-device-width : 320px)
		and (max-device-width : 480px){ .show-on-mobile { display: inline; }}
		.preloader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 999999;
			display: flex;
			align-items: center;
			justify-content: center;  
			background: #fff;
			transition: all 0.5s;
			opacity: 1;
		}
		.preloader-remove {
			opacity: 0;
			z-index: -10;
		}
</style>
</head>
<body>
	

<div class="preloader">
    <svg viewBox="-2000 -1000 4000 2000">
        <path id="inf" d="M354-354A500 500 0 1 1 354 354L-354-354A500 500 0 1 0-354 354z"></path>
        <use xlink:href="#inf" stroke-dasharray="1570 5143" stroke-dashoffset="6713px"></use>
    </svg>
</div>

	<div >
		<img class="hide-on-mobile" src="assets/icons/logo.png"/>
	</div>
	<div >
		<img class="show-on-mobile" src="assets/icons/logo.png"/>
	</div>
	
	<div class="hide-on-mobile">
		<button class="btn1">РЕГИСТРАЦИЯ</button>
	</div>
	<div class="hide-on-mobile">
		<button onclick="document.location='./login.php'"  class="btn2">ВХОД</button>
	</div>
	<div class="hide-on-mobile">
		<button class="btn3">Вход через аккаунт Google</button>
	</div>
	<div class="show-on-mobile">
		<button class="btn4">РЕГИСТРАЦИЯ</button>
	</div>
	<div class="show-on-mobile">
		<button onclick="document.location='./login.php'"  class="btn5">ВХОД</button>
	</div>
	<div class="show-on-mobile">
		<button class="btn6">Вход через аккаунт Google</button>
	</div>
<script>
	window.onload = function() {
		document.querySelector('.preloader').classList.add("preloader-remove");
	};
</script>
<script>
	$(window).on('load', function () {
    $('.preloader').addClass("preloader-remove");     
});
</script>
</body>
</html>