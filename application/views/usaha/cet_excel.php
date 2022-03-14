<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Usaha Kabupaten Ende.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Semua Data Usaha Kabupaten Ende</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Usaha</th>
                        <th scope="col">Pemilik</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Hp</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['nm_usaha'] ?></td>
                        <td><?= $sm['pemilik'] ?></td>
                        <td><?= $sm['alamat'] ?></td>
                        <td><?= $sm['hp'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
