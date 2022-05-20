<?php  
	//$konek = mysqli_connect("localhost", "root", "", "sleepmonitoring"); 
	require "koneksi.php";

	// baca data dari tabel data_table

	// baca ID tertinggi
	// $sql_ID = mysqli_query($konek, "SELECT MAX(ID) FROM data_table");
	$sql_id = mysqli_query($konek, "SELECT MAX(ID) FROM data_max");

	// tangkap datanya
	// $data_ID = mysqli_fetch_array($sql_ID);
	$data_id = mysqli_fetch_array($sql_id);
	
	// ambil ID terakhir / terbesar
	// $ID_akhir = $data_ID['MAX(ID)'];
	// $ID_awal = $ID_akhir - 4;
	// ambil ID terakhir / terbesar pada database max30100
	$ID_AKHIR = $data_id['MAX(ID)'];
	$ID_AWAL = $ID_AKHIR - 4;

	/*$tanggal = mysqli_query($konek, "SELECT waktu FROM data_table ORDER BY waktu DESC LIMIT 5");
	// baca informasi suhu untuk 5 data terakhir - sumbu Y di grafik
	$detak = mysqli_query($konek, "SELECT heartrate FROM data_table ORDER BY waktu DESC LIMIT 5");*/	

	// baca informasi tanggal untuk 5 data terakhir - sumbu x di grafik
	$tanggal = mysqli_query($konek, "SELECT waktu FROM data_max WHERE ID>='$ID_AWAL' and ID<='$ID_AKHIR' ORDER BY ID ASC");
	$date = mysqli_query($konek, "SELECT waktu FROM data_max WHERE ID>='$ID_AWAL' and ID<='$ID_AKHIR' ORDER BY ID ASC");
	// $date1 = mysqli_query($konek, "SELECT waktu FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
	// $date2 = mysqli_query($konek, "SELECT waktu FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
	// $date3 = mysqli_query($konek, "SELECT waktu FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");
	// $date4 = mysqli_query($konek, "SELECT waktu FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir' ORDER BY ID ASC");

	// baca informasi suhu untuk 5 data terakhir - sumbu Y di grafik
	$detak = mysqli_query($konek, "SELECT heartrate FROM data_max WHERE ID>='$ID_AWAL' and ID<='$ID_AKHIR'ORDER BY ID ASC");	
	$oxygen = mysqli_query($konek, "SELECT oksigen FROM data_max WHERE ID>='$ID_AWAL' and ID<='$ID_AKHIR'ORDER BY ID ASC");	
	// $intensity = mysqli_query($konek, "SELECT light FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir'ORDER BY ID ASC");	
	// $temp = mysqli_query($konek, "SELECT temperature FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir'ORDER BY ID ASC");	
	// $hum= mysqli_query($konek, "SELECT humidity FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir'ORDER BY ID ASC");	
	// $gerak= mysqli_query($konek, "SELECT movement FROM data_table WHERE ID>='$ID_awal' and ID<='$ID_akhir'ORDER BY ID ASC");
?>

<!-- Tampilan Grafik -->

	<div class="kartu">	

		<!-- siapkan canvas untuk grafik -->
		<canvas id="myChart"></canvas>

		<!-- gambar grafik -->
		<script type="text/javascript">
			var ctxL = document.getElementById("myChart").getContext('2d');
			var myLineChart = new Chart(ctxL, {
			  type: 'line',
			  data: {
			    labels: ["Jan", "Feb", "Mar", "April", "May", "June", "July"],
			    datasets: [{
			      label: "Sensor Value 1",
			      // fill: true,
			      data: [65, 59, 80, 81, 56, 55, 40],
			      backgroundColor: [
			        'rgba(52, 231, 43, 0.2)',
			      ],
			      borderColor: [
			        'rgba(53,231,43,3)',
			      ],
			      borderWidth: 2
			    },
			    // {
			    //   label: "My Second dataset",
			    //   // fill: true,
			    //   data: [28, 48, 40, 19, 86, 27, 90],
			    //   backgroundColor: [
			    //     'rgba(0, 137, 132, .2)',
			    //   ],
			    //   borderColor: [
			    //     'rgba(0, 10, 130, .7)',
			    //   ],
			    //   borderWidth: 2
			    // }
			    ]
			  },
			  options: {	
			  	showLines : true,
			    animation: {duration:0 }
			    // responsive:true
			  }

			  // option grafik
			// var option = {
			// 	showLines : true,
			// 	animation : {duration :0}
			// };

			// // cetak grafik kedalam canvas
			// var myLineChart = Chart.Line(canvas, {
			// 	data : data,
			// 	options : option //harus pake s -- options
			});

		</script>
	</div>

	<!-- grafik 2 -->

	<div class="kartu">	
		<!-- siapkan canvas untuk grafik -->
		<canvas id="myChart1"></canvas>

		<!-- gambar grafik -->
		<script type="text/javascript">
			var ctxL = document.getElementById("myChart1").getContext('2d');
			var myLineChart = new Chart(ctxL, {
			  type: 'line',
			  data: {
			    labels: ["Jan", "Feb", "Mar", "April", "May", "June", "July"],
			    datasets: [{
			      label: "Sensor Value 2",
			      // fill: true,
			      data: [65, 59, 80, 81, 56, 55, 40],
			      backgroundColor: [
			        'rgba(235, 55, 52, 0.2)',
			      ],
			      borderColor: [
			        'rgba(235, 55, 52,3)',
			      ],
			      borderWidth: 2
			    },
			    // {
			    //   label: "My Second dataset",
			    //   // fill: true,
			    //   data: [28, 48, 40, 19, 86, 27, 90],
			    //   backgroundColor: [
			    //     'rgba(0, 137, 132, .2)',
			    //   ],
			    //   borderColor: [
			    //     'rgba(0, 10, 130, .7)',
			    //   ],
			    //   borderWidth: 2
			    // }
			    ]
			  },
			  options: {	
			  	showLines : true,
			    animation: {duration:0 }
			    // responsive:true
			  }

			  // option grafik
			// var option = {
			// 	showLines : true,
			// 	animation : {duration :0}
			// };

			// // cetak grafik kedalam canvas
			// var myLineChart = Chart.Line(canvas, {
			// 	data : data,
			// 	options : option //harus pake s -- options
			});

		</script>
	</div>
	