<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
						<nav align="center">
						<ul style="overflow: hidden; display: inline;">
							<li style="list-style-type:none">
                                <a style="text-align: center; padding:14px 16px;" href="#">materia</a>
                            </li>
                            <li style="list-style-type:none">
                                <a style="text-align: center; padding:14px 16px;" href="#">Grado</a>
                            </li>
                            <li style="list-style-type:none;" >
                                <a style="text-align: center; padding:14px 16px; " href="#">Alumno</a>
                            </li>
						</ul>
					</nav>
					
</head>
<body>
Index
<div class="warpper">
	<div align="center">
<!-- btn-dark-->
					<!-- navabar-collapse-->
	</div>

					<div id="content">
			<nav class="navbar-expland-lg navar-light bg-light">
				<div class="container-fluid">
					<button type="button" id="sidebarCollapse" class="btn btn-info">
						<i class="fas fa-aling-left"></i>
						<span>mostrar menu</span>
					</button><!-- sidebarCollapse-->
					
					
				</div><!-- container-fluid-->
			</nav><!-- navbar-expland-->

			<h2>Collapsible Sidebar Using Bootstrap 4</h2>

		</div><!--content -->
<aside class="col-sm-2 sidenav" style=" float: left; width: 15%; height: 500px;">

	<!-- sidebar-->
		<nav id="sidebar">
			<div class="sidebar-header">
			<h3> Menu</h3>
		</div><!-- sidebar-header-->
			<ul class="list-unstyled components">
				<p></p>
				<li>
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a><!-- #homesubmenu-->
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<li>
							<a href="#">  1</a><!-- home1-->
						</li>
						<li>
							<a href="#">  2</a><!-- home2-->
						</li>
						<li>
							<a href="#">  3</a><!-- home3-->
						</li>
					</ul><!-- collapse list-untyled-->
				</li>
				<li>
					<a href="#"></a>
				</li>
				<li>
					<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  Page</a><!-- pageSubmenu-->
					<ul class="collapse list-unstyled" id="pageSubmenu">
						<li>
							<a href="#">  1</a><!-- -->
						</li>
						<li>
							<a href="#">  2</a>
						</li>
						<li>
							<a href="#">  3</a>
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
		</nav><!-- sidebar-->
		<!-- Page Content-->
		
</div><!-- warpper-->
</aside>
<script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>