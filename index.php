<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>B2o click</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>

</head>
<body>

	<div id='app'>
		<nav class="navbar navbar-light bg-light">
			<div class="container-fluid">
				<span class="navbar-brand mb-0 h1">A.R.K</span>
			</div>
			<span>Current time: <span v-html='time'></span></span>
		</nav>
	
		<div class='container mt-4'>
			<div class='row'>
				<div class='col-3'>
					<div class='card'>
						<div class='card-body'>
							<h5 class='card-title'>Ressources</h5>
							<div v-for='(value, name) in ressources'>
								{{ value.name }}: {{ value.current }} / {{ value.max }} ({{ value.rate }}/s)
							</div>
						</div>
					</div>
				</div>
				<div class='col-9'>
					<div class='card'>
						<div class='card-body'>

						<ul class="nav nav-tabs justify-content-center">
							<li class="nav-item">
								<a :class="[{active:this.view === 'base'},'nav-link']" @click='set_view("base")'>Base</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#"></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item">
								<a :class="[{active:this.view === 'work'},'nav-link']" @click='set_view("work")'>Work</a>
							</li>
						</ul>

						<div id='panel_base' v-if='view == "base"'>

							

						</div>

						<div id='panel_work' v-if='view == "work"'>

							<div>
								current work:								
								<vue-simple-progress bar-color="#dc720f" :val="this.work.work_progress" :text="this.work.work_progress +'%'"></vue-simple-progress>
							</div>

						</div>

							<!-- <div class=row>
								<div class='col-6'>
									<button @click='click_increment("wood")'>bois</button>
								</div>
								<div class='col-6'>
									
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src='js/progressbar.js'></script>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=611289dbd56bdf575683b52c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/script.js?<?php echo time(); ?>"></script>
</body>
</html>