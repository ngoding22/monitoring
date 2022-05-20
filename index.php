
<!DOCTYPE html>
<html>
<head>
	<title>Web Monitorring</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Untuk proses realtime menggunakan sistem ajax -->
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>

	<!-- Untuk proses grafik -->
	<!-- <script type="text/javascript" src="assets/js/mdb.min.js"></script> -->
	
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

	<script type="text/javascript" src="jquery-latest.js"></script>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand:400,700&display=swap">

	<!-- Memanggil data nilai sensor, status dan grafik -->
	<script type="text/javascript">
		// jika dokumennya siap lakukan fungsi
		// $(document).ready(function(){

			var refreshid = setInterval(function(){

				// Tolong ganti id data grafik max dengan isi datagrafikmax.php
				
				// $("#grafik1").load('datagrafikmax.php?data1');
				// $("#grafik2").load('datagrafiklingkungan.php?data2');
				// $("#grafik3").load('datagrafiktensi.php?data3');
				$("#grafik1").load('datagrafikmax.php');
				$("#grafik2").load('datagrafiklingkungan.php');
				$("#grafik3").load('datagrafiktensi.php');
			}, 1000); // Pergantian penggantian ceksuhu dengan cekoxygen.php dalam satuan sekon
		// });
	</script>
	
</head>
<body>
	<header>
		<div style="text-align: center;">
			<h1>Website Monitoring</h1>
			
		</div>
	</header>
	<main class="main">
		<article class="content">
			
			<div id="Grafik" class="card ">
				<!-- <h2 class="hdua">Sensor Charts</h2> -->
				<div><h2 class="hdua">Sensor Charts</h2></div>
				<!-- div untuk grafik -->
				<div><span id="grafik1">grafik alat 1</span></div>
				<div><span id="grafik2">grafik alat 2</span></div>
				<div><span id="grafik3">grafik alat 3</span></div>
			</div>

		</article>

		<aside>
			<!-- ELEMEN ARTICLE -->
			<article id="Pengembang" class="profile card">
				<header>
					<h2>Developer System</h2>
					<img class="box" src="assets/img/foto.jpg" alt="index">
					<figure>
						<figcaption>Developer</figcaption>
					</figure>
				</header>
				<section>
					<h4>Developer Information</h4>
					<table>
						<tr>
							<th>Name:</th>
							<td>xxxxxxxxxx</td>
						</tr>
						<tr>
							<th>Position:</th>
							<td>Web Developer</td>
						</tr>
					</table>
				</section>
			</article>
		</aside>
	</main>

</body>
</html>











