<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Effloresce  by FCT</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/my_php_codes/mvc_framework/templates/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#">Homepage</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Links</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>

<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Effloresce </a></h1>
				<p>template Шаблоны для сайта <a href="http://www.ftemplate.ru/">СКАЧАТЬ</a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<form method="POST" action="/news/insertNewArticle">
						<h2>Get creative and add a new article</h2>
						<div>
							<p>Title</p>
							<input type="text" name="title" >
						</div>
						<div>
							<p>Author name</p>
							<input type="text" name="author" >
						</div>
						<div>
							<p>Date</p>
							<input type="date" name="date" >
						</div>
						<div>
							<p>Content</p>
							<textarea name="content" style="width: 60%; height: 100px;"> </textarea>
						</div>
						<input type="submit" name="submit" value="Submit">
					</form>
					<p><a href='/news/' class="permalink"> Back to HomePage</a></p>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Aliquam tempus</h2>
							<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Blogroll</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
						<li>
							<h2>Archives</h2>
							<ul>
								<li><a href="#">Aliquam libero</a></li>
								<li><a href="#">Consectetuer adipiscing elit</a></li>
								<li><a href="#">Metus aliquam pellentesque</a></li>
								<li><a href="#">Suspendisse iaculis mauris</a></li>
								<li><a href="#">Urnanet non molestie semper</a></li>
								<li><a href="#">Proin gravida orci porttitor</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>. Photos by Fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
