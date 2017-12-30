<div class="panel panel-default">
    <div class="panel-heading">Approval Pengajuan</div>
    <div class="panel-body">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Karyawan</th>
                        <th>Tgl Berangkat</th>
                        <th>Tgl Kembali</th>
                        <th>Tujuan</th>
                        <th>Uang saku</th>
                        <th>Hotel</th>
                        <th>Transport</th>
						<th>Total Akomodasi</th>
                        <th>Approve Finance</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $r = $con->query("SELECT pengajuan_tb.*,karyawan_tb.nama,u_saku+u_hotel+u_trans as 'Akomodasi' FROM pengajuan_tb INNER JOIN karyawan_tb ON pengajuan_tb.nik = karyawan_tb.nik");
                    while ($rr = $r->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $rr['id'];?></td>
                        <td><?php echo "[ ".$rr['nik']." ] ".ucfirst($rr['nama']);?></td>
                        <td><?php echo $rr['tg_berangkat'];?></td>
                        <td><?php echo $rr['tg_pulang'];?></td>
                        <td><?php echo ucfirst($rr['tujuan']);?></td>
                        <td><?php echo number_format($rr['u_saku']);?></td>
                        <td><?php echo number_format($rr['u_hotel']);?></td>
                        <td><?php echo number_format($rr['u_trans']);?></td>
						<td><?php echo number_format($rr['Akomodasi']);?></td>
                        <td><?php echo ucfirst($rr['app_finance']);?></td>
                        <td>[<a href="index.php?page=approval2&id=<?php echo $rr['id']; ?>"> Ubah </a> ]</td>
                        <?php
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>