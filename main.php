
<?php require_once("includes/connect.php");
?>
<!DOCTYPE html>


<head>
    <link rel="manifest" href="manifest.json">
    <script type="module" src="app.js"></script>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="TestApp">
<meta name="apple-mobile-web-app-title" content="TestApp">
<meta name="theme-color" content="#fff">
<meta name="msapplication-navbutton-color" content="#fff">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="png" sizes="192x192" href="https://icon-icons.com/ru/%D0%B7%D0%BD%D0%B0%D1%87%D0%BE%D0%BA/%D0%B3%D0%BE%D0%BB%D1%83%D0%B1%D1%8C-%D0%BF%D1%82%D0%B8%D1%86%D0%B0/250707">
<link rel="apple-touch-icon" type="png" sizes="192x192" href="https://icon-icons.com/ru/%D0%B7%D0%BD%D0%B0%D1%87%D0%BE%D0%BA/%D0%B3%D0%BE%D0%BB%D1%83%D0%B1%D1%8C-%D0%BF%D1%82%D0%B8%D1%86%D0%B0/250707">
    <meta charset="utf-8">
    <title> Experimental</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
       
        
        body {
            
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #FFFFFF;
           
        }
        .menu
        {
            position: fixed;
            top: 76vh;
            left: 50vw;
            width: 200px;
            height: 200px;
           
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 1200px;
            margin: 50px auto;
        }

        .box {
            border-radius: 14px;
            box-shadow: 6px 7px 28px 0 rgba(16, 16, 16, 0.7);
            min-height: 140px;
            max-height: 40px;
            white-space: pre-wrap; /* Отменяем перенос текста */
            overflow: hidden; /* Обрезаем содержимое */
            
            text-overflow: ellipsis; /* Многоточие */
            min-width: calc(33% - 28px);
            max-width: calc(33% + 28px);
            padding: 0 10px;
            margin: 10px;
            border-width: 3px;
            float: left;
            border: 3px solid #10A304;
        }
        .box:hover {
        background: #f0f0f0; /* Цвет фона */
        white-space: normal; /* Обычный перенос текста */
        }

        .box.first{
        border: 3px solid #e74c3c;
        }
        .box.second{
        border: 3px solid #2980b9;
        }
        .box.third{
        border: 3px solid #2ecc71;
        }
        .box.fouth{
        border: 3px solid #f1c40f;
        }

        .text-first{
        color : black;
       
       
    
        
    
        }
        .text-second{
            color : #2980b9;
        }
        .text-third{
        color : #2ecc71;
        }
        .text-belizehole{
        color : #2980b9;
        }
        .text-fouth{
        color : #f1c40f;
        }

        .hide {
            display: none;
        opacity: 1;
        animation-name: a1;
        animation-duration: 2s;
        animation-fill-mode: forwards;
        }

        .box.menu.hide {
            position: relative;
            width: 0px;
            height: 0px;
           
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box.menu2.hide {
            position: relative;
            width: 0px;
            height: 0px;
           
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @keyframes a1{
        to {
                
                min-height: 0; 
                min-width: 0;
                padding: 0;
                margin: 0;
                border: 0;
                
        } 
        }
        .menu li{
            position: absolute;
            left: 0;
            list-style: none;
            transform-origin: 100px;
            transition: 0.5s;
            transition-delay: calc(0.1s * var(--i));
            transform: rotate(0deg) translateX(90px);
        }
        .menu li a{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            transform: rotate(calc(360deg / -8 * var(--i))) ;
            background: #02A730;
            border-radius: 50%;
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
            color: black;
            transition: 0.5s;

           
        }
        .menu li a:hover{
           
            color: rgb(102, 0, 255);
            transition: 0.5s;
            background: #c6a1e7;

           
        }
        .menu.active li{
            
            transform: rotate(calc(360deg / 8 * var(--i))) ;
        }
        .toggle{
            position: absolute;
            width: 60px;
            height: 60px;
            background: #02A730;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
            box-shadow: 0 0px 4px #600725;
            font-size: 3em;
            transition: transform 1.25s;
        }
        .menu.active .toggle{
            transform: rotate(315deg);
        }
        .menu2
        {
            position: relative;
            width: 200px;
            height: 200px;
           
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .menu2 li{
            position: absolute;
            left: 0;
            list-style: none;
            transform-origin: 100px;
            transition: 0.5s;
            transition-delay: calc(0.1s * var(--i));
            transform: rotate(0deg) translateX(90px);
        }
        .menu2 li a{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            transform: rotate(calc(360deg / -8 * var(--i))) ;
            background: #d7c4e8;
            border-radius: 50%;
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.15);
            color: black;
            transition: 0.5s;

           
        }
        .menu2 li a:hover{
           
            color: rgb(102, 0, 255);
            transition: 0.5s;
            background: #c6a1e7;

           
        }
        .menu2.active2 li{
            
            transform: rotate(calc(360deg / 8 * var(--i))) ;
        }
        .toggle2{
            position: absolute;
            width: 60px;
            height: 60px;
            background: #d7c4e8;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            cursor: pointer;
            box-shadow: 0 0px 4px #600725;
            font-size: 3em;
            transition: transform 1.25s;
        }
        .menu2.active2 .toggle2{
            transform: rotate(315deg);
        }
        html {
        box-sizing: border-box;
        }

  


        nav ul li {
            display: inline-block;
            padding: 10px 20px 10px 0;
        cursor: pointer;
        }
        nav {
            width: 80vw;
            display: inline-block;
            padding: 10px 0px 10px 0;
            cursor: pointer;
        }
        body {
            margin: 0;
            padding: 0;
            font: 16px 'PT Sans', sans-serif;
            }

            * {
            -webkit-box-sizing: border-box;
                    box-sizing: border-box;
            }

           

            .header_fixed {
            position: fixed;
            left: 0;
            top: 0;
            }

            .header__inner {
                background: #ffffff;
            width: 100%;
            height: 60px;
            max-width: 1200px;
            max-height: 120px;
            margin: 0 auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                    justify-content: space-between;
            padding: 0 15px;
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
    </style>
  

</head>

<body>
    
    
    <div class="container">
            <div class="hide-on-mobile">
                <header class="header">
                    <div class="header__inner">
                        <ul class="navbar-menu">
                            <li><a href="./index.php">Главная</a> </li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">Мероприятия</a></li>
                            <li><a href="#">Информация</a></li>
                        </ul>
                    </div>
                </header>
            </div>
    <div class="content">
        <div class="filter">
            <nav>
                <ul>
                    <li data-f="all">ALL</li>
                        <?php
                        $info = mysqli_query($conn, "SELECT * FROM `category`");
                        $info = mysqli_fetch_all($info);
                        foreach ($info as $info){
                    ?>
                    <li data-f="<?=$info[1]?>" class="text-first"><?=$info[1]?></li>
               
                <?php
            }
            ?>
             </ul>

             <div class="show-on-mobile">
                <div class="menu ">
                <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
                    <li style="--i:0;">
                    <a  href="./main.php"><ion-icon name="home-outline"></ion-icon></a>
                    </li>
                    <li style="--i:1;">
                    <a  href="#"><ion-icon name="help-outline"></ion-icon></a>
                    </li>
                    <li style="--i:2;">
                    <a  href="#"><ion-icon name="basket-outline"></ion-icon></a>
                    </li>
                    <li style="--i:3;">
                    <a  href="./index.php"> <ion-icon name="exit-outline"></ion-icon></a></li>    
                 </div>
            </div>
                    
                

            </nav>
        </div>
           
        
        
        <?php
                $info = mysqli_query($conn, "SELECT * FROM `category`");
                
                $info = mysqli_fetch_all($info);

                foreach ($info as $info){
                    ?>
                
                    
                    

            <div class=" box <?=$info[1]?>">
                <p><?=$info[2]?> <a href="#">Читать</a></p>
                
            </div>

                
                <?php
            }
            ?>
       
    </div>
        

    </div>
   
    
    
    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        toggle.onclick = function(){
            menu.classList.toggle('active')
        }
    </script>
    <script>
        let toggle2 = document.querySelector('.toggle2');
        let menu2 = document.querySelector('.menu2');
        toggle2.onclick = function(){
            menu2.classList.toggle('active2')
        }
    </script>
     <script >
        const filterBox = document.querySelectorAll('.box');
        document.querySelector('nav').addEventListener('click', event => {
        if (event.target.tagName !== 'LI') return false;
        let filterClass = event.target.dataset['f'];
    
        filterBox.forEach(elem => {
            elem.classList.remove('hide');
            if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
                elem.classList.add('hide');
                
            }
        });
    
    });
     </script>
     <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
     <script type="text/javascript" src="dist/autosize.min.js"></script>
     <script type="text/javascript" src="dist/jquery.convform.js"></script>
 
     <script>
         function google() {
             window.open("https://google.com");
         }
         function bing() {
             window.open("https://bing.com");
         }
         var rollbackTo = false;
         var originalState = false;
         function storeState(stateWrapper) {
             rollbackTo = stateWrapper.current;
             console.log("storeState called: ",rollbackTo);
         }
         function rollback(stateWrapper) {
             console.log("rollback called: ", rollbackTo, originalState);
             console.log("answers at the time of user input: ", stateWrapper.answers);
             if(rollbackTo!=false) {
                 if(originalState==false) {
                     originalState = stateWrapper.current.next;
                         console.log('stored original state');
                 }
                 stateWrapper.current.next = rollbackTo;
                 console.log('changed current.next to rollbackTo');
             }
         }
         function restore(stateWrapper) {
             if(originalState != false) {
                 stateWrapper.current.next = originalState;
                 console.log('changed current.next to originalState');
             }
         }
     </script>
     <script>
         jQuery(function($){
             var convForm = $('#chat').convform();
             console.log(convForm);
         });
     </script>
 
     <script>
     
  (function(){'use strict';document.addEventListener('click',EasyTogglerHandler);function EasyTogglerHandler(event){const EY_BTN=event.target.closest('[data-easy-toggle]');if(EY_BTN){event.preventDefault();let ey_target=EY_BTN.getAttribute('data-easy-toggle');let ey_class=EY_BTN.getAttribute('data-easy-class');try{document.querySelector(ey_target).classList.toggle(ey_class)}catch(ey_error){console.warn('EasyToggler.js : Блок '+ey_target+' не существует')}}if(!EY_BTN){let ey_rcoe_block_targets=document.querySelectorAll('[data-easy-rcoe]');Array.from(ey_rcoe_block_targets).forEach.call(ey_rcoe_block_targets,function(ey_rcoe_block_target){let ey_rcoe_block=ey_rcoe_block_target.getAttribute('data-easy-toggle'),ey_rcoe_block_class=ey_rcoe_block_target.getAttribute('data-easy-class');if(!event.target.closest(ey_rcoe_block)){try{document.querySelector(ey_rcoe_block).classList.remove(ey_rcoe_block_class)}catch(ey_error){console.warn('EasyToggler.js : Блок '+ey_rcoe_block+' не существует')}}})}}})()
 </script>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
    
</html>