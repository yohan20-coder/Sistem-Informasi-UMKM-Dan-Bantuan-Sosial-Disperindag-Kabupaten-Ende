<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Sentra Kabupaten Ende.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Semua Data Sentra Kabupaten Ende</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Sentra</th>
                        <th scope="col">Nama Sentra</th>
                        <th scope="col">Bentuk Usaha</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['kode'] ?></td>
                        <td><?= $sm['nm_sentra'] ?></td>
                        <td><?= $sm['bentuk'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
