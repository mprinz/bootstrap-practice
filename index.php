<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
				integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
				integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>
		<link type="text/css" rel="stylesheet" href="style.css">
		<title>Bootstrap practice</title>
	</head>
		<body class="sfooter">
			<div class="sfooter-content">
				<header>
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/IMG_1431.JPG" alt="photo height = 50 width= 100 ">
								<div class="carousel-caption">
									...
								</div>
							</div>
							<div class="item">
								<img src="..." alt="...">
								<div class="carousel-caption">
									...
								</div>
							</div>
							...
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<!--nav class="navbar navbar-inverse">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-nav" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Prinzable Web Design</a>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="top-nav">
									<ul class="nav navbar-nav">
										<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
										<li><a href="#">Link</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Separated link</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">One more separated link</a></li>
											</ul>
										</li>
									</ul>
									<form class="navbar-form navbar-left" role="search">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search">
										</div>
										<button type="submit" class="btn btn-default">Submit</button>
									</form>
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#">Link</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Link 1</a></li>
												<li><a href="#">Link 2</a></li>
												<li><a href="#">Link 3</a></li>
												<li role="separator" class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container -->
						</nav>
					<div id="welcome">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1> Michael Prinz</h1>
										<p>Web developer | Attorney | Photographer | Musician></p>
									<a href ="#" class="btn btn-primary btn-large">Link</a>

									</div>
								</div>
							</div>
						</div>
						<!-----Row 2---->
						<div class ="container>
							<div class="row">
								<div class="col-md-6">
									<div class="content-box">
										<h3>Text goes here</h3>
										<p>These are the voyages of the Starship Enterprise</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="content-box">
										<h3>About Michael</h3>
										<p>Michael is a human living on planet Earth but he is from planet Xylitol</p>
									</div>
								</div>
							</div>
							<!---Row 3---->
							<div class="row">
								<div class="col-md-4">
									<div class="content-box">
										<h4>This is a box</h4>
										<p>Ipsum loquator cucumber airplane chairlift university</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="content-box">
										<p>Four score and seven years ago our forefathers...</p>
							</div>
						</div>
								<div class="col-md-4">
									<div class="content-box">
										<p>Four score and seven years ago our forefathers...</p>
									</div>
								</div>
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="jumbotron"></div>
									</div>
								</div>
							</div>

	</body>


</html>