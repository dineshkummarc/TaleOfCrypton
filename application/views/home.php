
<html>
<head>
	<title>Tale Of Crypton</title>
    <meta name = "viewport" content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
    <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
	<div class="container">
	<div class="row">
		<?php if($this->session->userdata('sess_logged_in')==0){?>
		<div>
		<style>
				@font-face {
  font-family: myFont;
  src: url(../fonts/Felixti.TTF);
}
@font-face {
  font-family: myFonta;
  src: url(../fonts/PRISTINA.TTF);
}
      body{
        overflow: hidden;
        text-align: center;
        background:url(<?php echo base_url('/assets/images/home.png');?>);
        background-size: 100%;
      }
      img.background{
        
        text-align: center;
        min-width: 100%;
        height: 100vh;
        z-index: 0;
      }
      img.istelogo{
        position: fixed;
        top: 10px;
        left: 10px;
        text-align: center;
        min-width: 100px;
        height: 100px;
        z-index: 1;
      }
      img.anbtlogo{
        position: fixed;
        top: 10px;
        right: 100px;
        text-align: center;
        min-width: 100px;
        height: 100px;
        z-index: 1;
      }
      img.gameof{
        position: fixed;
        top: 130px;
        left: 50%;
        width: 80%;
        height: auto;
        transform: translate(-50%, 0);
        text-align: center;
        min-width: 100px;
        z-index: 1;
      }

      header{
        position: fixed;
        z-index: 99;
      }
      nav{
        position: fixed;
        top:-100vh;
        left:0;
        width:100%;
        height: 100vh;
        background: rgba(0,0,0,.8);
        transition: 1s;
      }
      nav.active{
        top:0;
      }
      nav ul{
        display: block;
        list-style: none;
        margin-top: 180px;
        padding: 0;
      }
      nav ul li{
        text-align: center;
        flex-grow: 1;
        margin: 35px;
        margin-bottom: 80px;
        font-size: 30px;
      }
      nav ul li a{
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        transition: 1s;
        font-family: myFont;
      }
      nav ul li a:hover{
        border-bottom: 2px solid white;
        color: blue;
        text-decoration: none;
      }
      header div{
        position: fixed;
        top: 15px;
        right: 15px;
        padding: 20px;
        background: black;
        color: white;
        border-radius: 2px;
        transition: 1s;
      }
      header div:hover{
        opacity: .8;
      }
      footer{
        z-index: 1;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 50px;
        background: rgba(255, 255, 255, 0.5);
      }
      footer a{
        position: fixed;
        bottom: -5px;
        color: #000;
        text-decoration: none;
        font-family: myFonta;
      }
      footer a:first-child{
        left: 0;
        z-index: 1;
      }
      footer a:last-child{
        text-align: right;
        right: 0;
      }
      footer a img{
        width: 40px;
        margin: 10px;
      }
      footer a span{
        position: fixed;
        bottom: 5px;
        left: 80px;
        font-size: 30px;
        transform: translate(-14px, 0);
      }
      footer a:last-child span{
        position: fixed;
        bottom: 5px;
        right: 50px;
        font-size: 30px;
        transform: translate(-14px, 0);
      }
      a.backbtn{
        position: fixed;
        top: -20px;
        left: -20px;  
        text-decoration: none;
        color: black;
      }
      a.hintbtn{
        position: fixed;
        top: 20px;
        right: 20px;  
        text-decoration: none;
        color: black;
        height: 100px;
      }
      .questionbox{
        margin-top: 30px;
        padding: 10px;
        background: rgba(194, 178, 128, .3);
        border-radius: 20px;
        width: 50%;
        font-family: myFont;
      } 
      .qimgbox{
        padding: 2px;
        background: rgba(194, 178, 128, .3);
        border-radius: 20px;
        margin-bottom: 20px;
      }   
      .qimg{
        width: 100%;
        border-radius: 20px;
      }
      .qtxt{
        font-weight: bold;
        padding: 10px;
        margin-bottom: 5px;
        font-size: 1.3em;
      }
      .abox{
        padding: 10px;
        border-radius: 10px;
        background: rgba(194, 178, 128, .5);
      }
      .ansbox{
        width: 79%;
        font-size: 1.2em;
        background: none;
        border: none;
        border-bottom: 1px solid black;
        padding: 10px;
      }
      .ansbox::placeholder{
        color: #303030;
      }
      .ansbtn{
        min-width: 20%;
        font-size: 1.2em;
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-family: myFont;
        transition: .5s;
      }
      .ansbtn:hover{
        background: grey;
      }
      .table{
        width: 80%;
        margin-left: 10%;
        margin-top: 40px;
        margin-bottom: 80px;
        background: rgba(128, 128, 128, .7);
      }


      .rulebox img{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        height: 80%;
        width: 400px;
        border-radius: 10px;
        transition: .4s;
        box-shadow: -2px 2px 5px #874406;
      }
      .rulebox img:nth-child(1){
        transform: translate(-0%,-55%) scale(1);
        z-index: 6;
      }
      .rulebox img:nth-child(2){
        transform: translate(-16%,-55%) scale(.98);
        z-index: 5;
      }
      .rulebox img:nth-child(3){
        transform: translate(-34%,-55%) scale(.96);
        z-index: 4;
      }
      .rulebox img:nth-child(4){
        transform: translate(-50%,-55%) scale(.94);
        z-index: 3;
      }
      .rulebox img:nth-child(5){
        transform: translate(-66%,-55%) scale(.92);
        z-index: 2;
      }
      .rulebox img:nth-child(6){
        transform: translate(-84%,-55%) scale(.90);
        z-index: 1;
      }
      .rulebox img:nth-child(7){
        transform: translate(-100%,-55%) scale(.88);
        z-index: 0;
      }
      .rulebox img:nth-child(1):hover{
        transform: translate(-0%,-55%) scale(1.02);
        z-index: 7;
      }
      .rulebox img:nth-child(2):hover{
        transform: translate(-16%,-55%) scale(1.00);
        z-index: 7;
      }
      .rulebox img:nth-child(3):hover{
        transform: translate(-34%,-55%) scale(.98);
        z-index: 7;
      }
      .rulebox img:nth-child(4):hover{
        transform: translate(-50%,-55%) scale(.96);
        z-index: 7;
      }
      .rulebox img:nth-child(5):hover{
        transform: translate(-66%,-55%) scale(.94);
        z-index: 7;
      }
      .rulebox img:nth-child(6):hover{
        transform: translate(-84%,-55%) scale(.92);
        z-index: 7;
      }
      .rulebox img:nth-child(7):hover{
        transform: translate(-100%,-55%) scale(.90);
        z-index: 7;
      }
      
      @media(max-width: 768px){
        footer{
          height: 90px;
        }
        footer a{
          bottom: 35px;
        }
        footer a:last-child{
          bottom: -5px;
        }
        footer a span{
          bottom: 50px;
          left: 80px;
          font-size: 25px;
        }
        footer a:last-child span{
          bottom: 10px;
          right: 50px;
          font-size: 25px;
        }
        .container{
          transform: scale(.6);
          margin-top:120px;
        } 
        .questionbox{
          margin-top: 70px;
          padding: 10px;
          background: rgba(170, 170, 170, .7);
          border-radius: 20px;
          width: 90%;
        } 
        a.backbtn{
          top: -50px;
          left: -40px;
        }
        a.hintbtn{
          top: 0px;
          right: 0px;
        }
        
        img.istelogo{
          min-width: 60px;
          height: 60px;
        }
        img.anbtlogo{
          min-width: 60px;
          height: 60px;
        }
        .rulebox img{
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          height: 70%;
          width: 50%;
          border-radius: 10px;
          transition: .5s;
          box-shadow: -2px 2px 5px #874406;
        } 
      }
      </style>
      <script src="<?php echo base_url('/assets/js/main.js');?>"></script>
  <img class="istelogo" src="<?php echo base_url('/assets/images/iste.png');?>" alt="">
	<img class="anbtlogo" src="<?php echo base_url('/assets/images/ANBT.png');?>" alt="">
	<img class="gameof" src="<?php echo base_url('/assets/images/TOC.png');?>" alt="">
			<header>
		    <nav id="navbar" class="">
			<ul>
				<li><a href="https://isteknit.org">About Us</a></li>
				<li><a href="<?php echo site_url('Welcome/contact'); ?>">Contact Us</a></li>
				<li><a href="<?=$google_login_url?>">Login</a></li>
			</ul>
		    </nav>
		    <div onclick="navbar()">
			<i id="navbtn" class="fa fa-bars fa-2x" aria-hidden="true"></i>
			<i id="navcls" style="display:none;" class="fa fa-times fa-2x" aria-hidden="true"></i>
		    </div>
	       </header>

	       <footer>
		   <a href="https://www.facebook.com/isteknit">
           <img src="<?php echo base_url('/assets/images/fb.png');?>" alt="">
           <span>facebook.com/isteknit</span>
           </a>
           <a href="https://isteknit.org">
           	<img src="<?php echo base_url('/assets/images/web.png');?>" alt="">
           <span>isteknit.org</span>
        
    </a>
	</footer>
	       </div>
		<?php } ?>
	</div>  
	<div class="row">
		<?php if($this->session->userdata('sess_logged_in') == 1){?>
			
	        <div style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
            <script src="<?php echo base_url('/assets/js/jssor.slider-27.5.0.min.js');?>" type="text/javascript"></script>
           <script type="text/javascript">
           jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1500,x:-1,y:-0.5,$Delay:50,$Cols:10,$Rows:5,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationSwirl,$Assembly:260,$Easing:{$Left:$Jease$.$Swing,$Top:$Jease$.$InJump},$Round:{$Top:1.5}},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$Easing:$Jease$.$InSine},
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-1,y:-1,$Zoom:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:500,x:1,y:-1,$Delay:40,$Cols:10,$Rows:5,$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:600,x:-1,y:1,$Delay:40,$Cols:10,$Rows:5,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:600,y:-1,$Cols:12,$Opacity:2,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12},$Easing:$Jease$.$InCubic},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationZigZag,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //make sure to clear margin of the slider container element
            jssor_1_slider.$Elmt.style.margin = "";

            /*#region responsive code begin*/

            /*
                parameters to scale jssor slider to fill parent container

                MAX_WIDTH
                    prevent slider from scaling too wide
                MAX_HEIGHT
                    prevent slider from scaling too high, default value is original height
                MAX_BLEEDING
                    prevent slider from bleeding outside too much, default value is 1
                    0: contain mode, allow up to 0% to bleed outside, the slider will be all inside parent container
                    1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of parent container
                    0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
            */

            var MAX_WIDTH = 1440;
            var MAX_HEIGHT = 680;
            var MAX_BLEEDING = 0.128;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    var containerHeight = containerElement.clientHeight || originalHeight;

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    //scale the slider to expected size
                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    //position slider at center in vertical orientation
                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    //position slider at center in horizontal orientation
                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            function OnOrientationChange() {
                ScaleSlider();
                window.setTimeout(ScaleSlider, 800);
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", OnOrientationChange);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        html {
            position:fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        body {
            position: relative;
            margin: 0;
            padding: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 052 css*/
        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 053 css*/
        .jssora053 {display:block;position:absolute;cursor:pointer;}
        .jssora053 .a {fill:none;stroke:#fff;stroke-width:640;stroke-miterlimit:10;}
        .jssora053:hover {opacity:.8;}
        .jssora053.jssora053dn {opacity:.5;}
        .jssora053.jssora053ds {opacity:.3;pointer-events:none;}

        .skipbtn{
            position: fixed;
            right: 15px;
            bottom: 15px;
            z-index: 99;
            padding: 10px 20px;
            background: wheat;
            color: black;
            border-radius: 10px;
            text-decoration: none;
            font-size: 20px;
            box-shadow: 2px 2px 5px grey;
            transition: .5s;
        }
        .skipbtn:hover{
            transform: scale(1.1);
            background: black;
            color: white;
        }
    </style>
    <div style="position:relative;top:0;left:0;width:100%;height:100%;overflow:hidden;">
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1440px;height:680px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php echo base_url('/assets/images/spin.svg');?>" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1440px;height:680px;overflow:hidden;">
                
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/1.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/2.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/3.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/4.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/5.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/6.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/7.png');?>" />
                </div>
                <div>
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/8.png');?>" />
                </div>
                <div data-fillmode="0" data-b="0">
                    <img data-u="image" src="<?php echo base_url('/assets/images/slides/1.png');?>" />
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                    </svg>
                </div>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora053" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora053" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
    </div>
        <a href="<?php echo site_url('Welcome/loggedIn'); ?>" class="skipbtn">Skip</a>
    <script type="text/javascript">jssor_1_slider_init();</script>

<?php } ?>
	</div>
	</div>
</body>
</html>