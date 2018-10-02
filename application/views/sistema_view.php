<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
Index
<div class="warpper">
	<!-- sidebar-->
		<nav id="sidebar">
			<div class="sidebar-header">
			<h3>  Bootstrap Sidebar</h3>
		</div><!-- sidebar-header-->
			<ul class="list-unstyled components">
				<p>  Dummy Heading</p>
				<li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a><!-- #homesubmenu-->
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a href="#">  Home1</a><!-- home1-->
						</li>
						<li>
							<a href="#">  Home2</a><!-- home2-->
						</li>
						<li>
							<a href="#">  Home3</a><!-- home3-->
						</li>
					</ul><!-- collapse list-untyled-->
				</li>
				<li>
					<a href="#">  About</a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Page</a><!-- pageSubmenu-->
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li>
							<a href="#">  Page1</a><!-- -->
						</li>
						<li>
							<a href="#">  Page2</a>
						</li>
						<li>
							<a href="#">  Page3</a>
						</li>
					</ul><!-- list-unstyled-->
				</li>
				<li>
					<a href="#">  Porfolio</a>
				</li>
				<li>
					<a href="#">  Contact</a>
				</li>
			</ul><!-- list-unstyled components-->

			<ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">  Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">  Back to article</a>
                </li>
            </ul>

		</nav><!-- sidebar-->
		<!-- Page Content-->
		<div id="content">
			<nav class="navbar-expland-lg navar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn btn-info">
						<i class="fas fa-aling-left"></i>
						<span>Toggle sidebar</span>
					</button><!-- sidebarCollapse-->
					<button class=" btn btn-dark d-inline-block d-lg-auto" type="button" data-toggle="collapse" data-target="#navarSupportedContent" aria-controls="navarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-aling-justify"></i>
					</button><!-- btn-dark-->
					<div class="collapse navabar-collapse" id="navarSupportedContent">
						<ul class="nav navar-nav ml-auto">
							<li>
								<a class="nav-item active" href="#">Page</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
						</ul>
					</div><!-- navabar-collapse-->
				</div><!-- container-fluid-->
			</nav><!-- navbar-expland-->

			<h2>Collapsible Sidebar Using Bootstrap 4</h2>
            

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>

            <div class="line"></div>

            <h3>Lorem Ipsum Dolor</h3>
            

		</div><!--content -->
</div><!-- warpper-->
<script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>