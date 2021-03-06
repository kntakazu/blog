<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <style>
	#wrapper {
	    margin: 0 auto;
	    width:  960px;
	}
	#middle {
	    background-color: #fcc;
	}
	#menu {
	    float: left; width: 230px;
	}
	#content {
	    float: left;
	    padding-left: 20px;
	    background-color: #fff;
	    width: 710px;
	}
	#footer {
	    background-color: #cfc;
	    padding: 10px;
	}
	.clearfix:after {
	    content: ".";i
	    display: block;
	    clear: both;
	    height: 0;
	    visibility: hidden;
	}
	.clearfix {
	    min-height:1px;
	}
	* html .clearfix {
	    height: 1px;
	/* \*//*/
	height: auto;
	overflow: hidden;
	/**/
	}
    </style>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="wrapper">
	<div style="background-color: #ccf; padding: 10px;">
	    <h1><?php echo $title; ?></h1>
	</div>
	<div id="middle" class="clearfixe">
	     <div id="menu">
	         <ul>
		     <li>FuelPHPの特徴</li>
		     <li>Controllerとは</li>
		     <li>Viewとは</li>
		     <li>Modelとは</li>
		 </ul>
	     </div>
	     <div id="content">
	          <?php echo $content; ?>
	     </div>
	     <div id="footer">&copy; Kazunori Tani 2015 </div>
	</div>
    </div>
</body>
</html>
