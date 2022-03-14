<?php
    header('Content-Type: application/vnd-ms-excel');
    header('Content-Disposition: attachment;filename=Laporan Data Penerima Bantuan Kabupaten Ende.xls');
?>

<html>
	<body>
        <center>
            <h4>Laporan Semua Data Penerima Bantuan Kabupaten Ende</h4>
        </center>
			<table border="1">
				<thead>
					<tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Nik Penerima</th>
                        <th scope="col">Nama Usaha</th>
                        <th scope="col">Nama Bantuan</th>
                        <th scope="col">Jenis Bantuan</th>
                        <th scope="col">Total Anggaran</th>
                        <th scope="col">Tanggal Terimah Bantuan</th>
                        <th scope="col">Tahun Anggaran</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					<?php foreach($tampil as $sm): ?>
					<tr>
                        <td scope="row"><?= $no ?></td>
                        <td><?= $sm['nama'] ?></td>
                        <td><?= $sm['nik'] ?></td>
                        <td><?= $sm['nm_usaha'] ?></td>
                        <td><?= $sm['nm_bantuan'] ?></td>
                        <td><?= $sm['jenis_bantuan'] ?></td>
                        <td><?= $sm['total'] ?></td>
                        <td><?= $sm['tgl'] ?></td>
                        <td><?= $sm['thn_anggaran'] ?></td>
					</tr>
					<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
	</body>
</html>
