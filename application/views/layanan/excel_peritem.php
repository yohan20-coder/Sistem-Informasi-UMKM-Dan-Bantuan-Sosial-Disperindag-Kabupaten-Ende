<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data FKM.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Data FKM</h4>
        </center>
			<table border="1">
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
	</body>
</html>
