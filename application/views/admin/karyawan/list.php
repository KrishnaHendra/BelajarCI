<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabel Karyawan</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>karyawan_id</tr>
            <tr>nama</tr>
            <tr>alamat</tr>
            <tr>telepon</tr>
        </thead>
        
        <tbody>
									<?php foreach ($karyawan as $karyawan): ?>
									<tr>
										<td width="150">
											<?php echo $karyawan->karyawan_id ?>
										</td>
										<td>
											<?php echo $karyawan->nama ?>
										</td>
										<td>
                                            <?php echo $karyawan->alamat ?>
										</td>
										<td>
                                             <?php echo $karyawan->telepon ?>
                                        </td>
									</tr>
									<?php endforeach; ?>

								</tbody>
    </table>
</body>
</html>