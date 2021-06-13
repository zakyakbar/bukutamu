<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
  <meta name="author" content="">

  <script src="assets/jquery.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link href="<?php echo base_url('assets/tabeltamu.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
</head>
<body>
<div class="header">
<button class="btn1"><a href="<?php echo base_url(). "bukutamu" ; ?>">TAMU</a></button>
</div>
  <div class="tabeltamu">
<h2>DATA TAMU</h2>

<table id="example" class="display nowrap table-striped table-bordered table" style="width:100%">
        <thead>
        <tr>
            <th>No.</th>
            <th>Nama Tamu</th>
            <th>Email</th>
            <th>Nomor KTP</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>foto</foto>
            <th>Jenis Kelamin</th>
            <th>Tujuan Keperluan</th>
            <th>Waktu</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody><?php
            $start=0;
            foreach ($bukutamu as $bktm)
            {
                ?>
                <tr>
			      <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $bktm->nama_tamu ?></td>
            <td><?php echo $bktm->email ?></td>
            <td><?php echo $bktm->ktp ?></td>
            <td><?php echo $bktm->alamat ?></td>
            <td><?php echo $bktm->umur ?></td>
            <td><?php echo $bktm->foto ?></td>
            <td><?php echo $bktm->gender ?></td>
            <td><?php echo $bktm->tk ?></td>
            <td><?php echo $bktm->waktu ?></td>

			<td class="hapus">
        <?php  
				echo anchor('mahasiswa/hapus/'. $bktm->nama_tamu ,'Hapus','onclick="javasciprt: return confirm(\'Hapus Data Tamu ini ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
           </tbody>
    </table>
          </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true
        } );
     
        new $.fn.dataTable.FixedHeader( table );
    });
</script>
</html>