<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Kelurahan Kabupaten Ende.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Semua Data Kelurahan Kabupaten Ende</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Kelurahan</th>
                        <th scope="col">Nama Kecamatan</th>
                        <th scope="col">Nama Kelurahan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['kode'] ?></td>
                        <td><?= $sm['kecamatan'] ?></td>
                        <td><?= $sm['kelurahan'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>