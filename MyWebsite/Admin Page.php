<?php if ($lang == 'en') { ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Admin Page</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="MyPage" />
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
	<link href="css/6.css?ts=1513192343" rel="stylesheet" type="text/css" />
	{{ga_code}}
	<script type="text/javascript">var currLang = 'en';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>
	<div class="root">
		<div class="vbox wb_container" id="wb_header">
			<div class="wb_cont_inner">
				<div id="wb_element_instance77" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-custom1">
						<a href="en/Home/">
							<span style="color:rgba(255,255,255,1);">A</span>
						</a>
						<span style="color:rgba(255,255,255,1);">ir Conditioning Solutions</span>
					</p>
				</div>
				<div id="wb_element_instance78" class="wb_element wb_element_picture">
					<img alt="http://sites.ieee.org/comsoc-conf-template/files/2016/01/sample-logo@2x" src="http://sites.ieee.org/comsoc-conf-template/files/2016/01/sample-logo@2x.png">
				</div>
				<div id="wb_element_instance79" class="wb_element wb_element_shape">
					<div class="wb_shp"></div>
				</div>
			</div>
			<div class="wb_cont_outer"></div>
			<div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_main">
			<div class="wb_cont_inner">
				<div id="wb_element_instance76" class="wb_element wb-menu">
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
						<li>
							<a href="en/Home/" target="_self" title="Login">Logout</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div id="wb_element_instance80" class="wb_element wb_element_shape">
					<div class="wb_shp"></div>
				</div>
				<div id="wb_element_instance82" class="wb_element">
					<table class="wb_table">
						<tr>
							<td id="wb_element_instance82_cell_1">
								<div></div>
							</td>
							<td id="wb_element_instance82_cell_2">
								<div>
									<p class="wb-stl-normal" style="text-align: center;">Enter your text here</p>
								</div>
							</td>
						</tr>
						<tr>
							<td id="wb_element_instance82_cell_3">
								<div>
									<p class="wb-stl-normal" style="text-align: center;">Enter your text here</p>
								</div>
							</td>
							<td id="wb_element_instance82_cell_4">
								<div>
									<p class="wb-stl-normal" style="text-align: center;">Enter your text here</p>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div id="wb_element_instance83" class="wb_element" style="width: 100%;">
					<?php
						global $show_comments;
						if (isset($show_comments) && $show_comments) {
							renderComments(6);
					?>
					<script type="text/javascript">
						$(function() {
							var block = $("#wb_element_instance83");
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
							$("#wb_element_instance83").hide();
						});
					</script>
					<?php
						}
					?>
				</div>
			</div>
			<div class="wb_cont_outer"></div><div class="wb_cont_bg"></div>
		</div>
		<div class="vbox wb_container" id="wb_footer">	
			<div class="wb_cont_inner" style="height: 134px;">
				<div id="wb_element_instance81" class="wb_element" style=" line-height: normal;">
					<p class="wb-stl-footer">© 2017 
						<a href="http://coolhareesh2000.000webhostapp.com">coolhareesh2000.000webhostapp.com</a>
					</p>
				</div>
				<div id="wb_element_instance84" class="wb_element" style="text-align: center; width: 100%;">
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
