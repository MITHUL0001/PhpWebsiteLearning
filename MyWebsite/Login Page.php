<?php if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Login Page</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="My Page" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=20171208164322" type="text/javascript"></script>

	<link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css" />
	<link href="css/site.css?v=20171211095857" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1513192343" rel="stylesheet" type="text/css" />
	<link href="css/5.css?ts=1513192343" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: auto;
    border-radius: 50%;
}

.container {
	width: auto;
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    <!--display: none; /* Hidden by default */-->
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: fixed; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 50px;
    padding-bottom: 50px;
}

/* Modal Content/Box */
.modal-content {
	position: sticky;
    background-color: #fefefe;
    margin: 1% auto 10% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
    padding-top: 10px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: auto) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: auto;
    }
}
</style>
	<div class="root">
		<div class="vbox wb_container" id="wb_header">
			<div class="wb_cont_inner">
				<div id="wb_element_instance68" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-custom1">
						<a href="en/Home/">
							<span style="color:rgba(255,255,255,1);">A</span>
						</a>
						<span style="color:rgba(255,255,255,1);">ir Conditioning Solutions</span>
					</p>
				</div>
				<div id="wb_element_instance69" class="wb_element wb_element_picture">
					<img alt="http://sites.ieee.org/comsoc-conf-template/files/2016/01/sample-logo@2x" src="http://sites.ieee.org/comsoc-conf-template/files/2016/01/sample-logo@2x.png">
				</div>
				<div id="wb_element_instance70" class="wb_element wb_element_shape">
					<div class="wb_shp"></div>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">	
			<div class="wb_cont_inner">
				<div id="wb_element_instance67" class="wb_element wb-menu">
					<ul class="hmenu">
						<li>
							<a href="en/Home/" target="_self" title="Home">Home</a>
						</li>
						<li>
							<a href="en/About/" target="_self" title="About">About</a>
						</li>
						<li>
							<a href="en/Products/" target="_self" title="Products">Products</a>
						</li>
						<li>
							<a href="en/Contact/" target="_self" title="Contact">Contact</a>
						</li>
						<!--<li class="active">
							<a href="en/Login/" target="_self" title="Login">Login</a>
						</li>-->
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance71" class="wb_element wb_element_shape">
					<div class="wb_shp"></div>
				</div>
				<div id="wb_element_instance73" class="wb_element" style=" overflow: hidden;">
					<h2>Login Form</h2>
					<div>  
					  <form class="modal-content animate" action="en/MyPage">
						<div class="container">
						  <label><b>Username</b></label>
						  <input type="text" placeholder="Enter Username" name="uname" required><label><b>Password</b></label>
						  <input type="password" placeholder="Enter Password" name="psw" required><button type="submit">Login</button>
						  <input type="checkbox" checked> Remember me
						</div>

						<div class="container" style="background-color:#f1f1f1">
						  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						  <span class="psw">Forgot <a href="#">password?</a></span>
						</div>
					  </form>
					</div>
					<!--<script>
					// Get the modal
					var modal = document.getElementById('id01');

					// When the user clicks anywhere outside of the modal, close it
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
					</script>-->
				</div>
				<div id="wb_element_instance74" class="wb_element" style="width: 100%;">
					<?php
						global $show_comments;
						if (isset($show_comments) && $show_comments) {
							renderComments(5);
					?>
					<script type="text/javascript">
						$(function() {
							var block = $("#wb_element_instance74");
							var comments = block.children(".wb_comments").eq(0);
							var contentBlock = $("#wb_main");
							contentBlock.height(contentBlock.height() + comments.height());
						});
					</script>
					<?php
						} else {
					?>
					<script type="text/javascript">
						$(function() {
							$("#wb_element_instance74").hide();
						});
					</script>
					<?php
						}
					?>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_footer">	
			<div class="wb_cont_inner" style="height: 134px;">
				<div id="wb_element_instance72" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2017 
						<a href="http://coolhareesh2000.000webhostapp.com">coolhareesh2000.000webhostapp.com</a>
					</p>
				</div>
				<div id="wb_element_instance75" class="wb_element" style="text-align: center; width: 100%;">
					<div class="wb_footer"></div>
					<script type="text/javascript">
						$(function() {
							var footer = $(".wb_footer");
							var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
							if (!html) {
								footer.parent().remove();
								footer = $("#wb_footer, #wb_footer .wb_cont_inner");
								footer.css({height: ""});
							}
						});
					</script>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="wb_sbg"></div>
	</div>{{hr_out}}
</body>
</html>


<?php } ?>
