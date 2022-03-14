<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Cetak Laporan FKM</title>
		<link
			href="<?= base_url('assets/');?>css/sb-admin-2.min.css"
			rel="stylesheet"
		/>
		<!-- Custom styles for this page -->
		<link
			href="<?= base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.css"
			rel="stylesheet"
		/>
	</head>
	<body>
		<style>
			table tr th {
				font-size: 9pt;
				color: rgb(43, 41, 41);
				font-weight: bold;
				/* background-color: rgb(13, 245, 245); */
			}
			table tr td {
				/* background-color: rgb(255, 136, 136); */
				font-size: 9pt;
				color: rgb(43, 41, 41);
				font-weight: bold;
			}
		</style>
		<div class="ml-3 mr-3 mt-5">
			<h5 class="text-center">
				<b>
					Laporan Data Usaha Kecil <br />
					Menengah Kabupaten Ende</b
				>
			</h5>
			<br />
			<table
				class="table table-bordered"
				id="dataTable"
				width="100%"
				cellspacing="0"
			>
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Kecamatan</th>
						<th scope="col">Kode Kecamatan</th>
						<th scope="col">Nama Kelurahan</th>
						<th scope="col">Kode Kelurahan</th>
						<th scope="col">Nama Sentra</th>
						<th scope="col">Bentuk Sentra</th>
						<th scope="col">Nama Usaha</th>
						<th scope="col">Pemilik Usaha</th>
						<th scope="col">Alamat Usaha</th>
						<th scope="col">No.Hp</th>
						<th scope="col">Nama KLBI</th>
						<th scope="col">Kode KLBI</th>
						<th scope="col">NPWP</th>
						<th scope="col">No.IUT</th>
						<th scope="col">Tahun IUT</th>
						<th scope="col">No.AMDAL</th>
						<th scope="col">THN.AMDAL</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
						<td scope="row"><?= $no ?></td>
						<td><?= $sm['nm_kec'] ?></td>
						<td><?= $sm['kd_kec'] ?></td>
						<td><?= $sm['nm_kel'] ?></td>
						<td><?= $sm['kd_kel'] ?></td>
						<td><?= $sm['nm_sentra'] ?></td>
						<td><?= $sm['bn_sentra'] ?></td>
						<td><?= $sm['nm_usaha'] ?></td>
						<td><?= $sm['pemilik'] ?></td>
						<td><?= $sm['alamat_usaha'] ?></td>
						<td><?= $sm['hp'] ?></td>
						<td><?= $sm['nm_klbi'] ?></td>
						<td><?= $sm['kd_klbi'] ?></td>
						<td><?= $sm['npwp'] ?></td>
						<td><?= $sm['no_iut'] ?></td>
						<td><?= $sm['thn_iut'] ?></td>
						<td><?= $sm['no_amdal'] ?></td>
						<td><?= $sm['thn_amdal'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<script>
			window.print();
		</script>
		<!-- Bootstrap core JavaScript-->
		<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
	</body>
</html>
