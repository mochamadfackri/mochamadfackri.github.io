<div class="container">
<div class="row">
    <div class="col-sm-12">
        <br>
        <?php 
            foreach ($tbl_pusat as $pus) {
        ?>
        <table class="table" border="0" align="center" border="0">
            <tr align="center">
                <td width="10%" align="left">Nama Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $pus->nm_surat ?></td>


                <td width="10%" align="right">Jenis Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $pus->jenis ?></td>
            </tr>
            <tr align="center">
                <td width="10%" align="left">Nomor Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $pus->no_surat ?></td>


                <td width="10%" align="right">Tanggal Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $pus->tgl_surat ?></td>
            </tr>
        </table>

        <center>
        <iframe src="<?php echo base_url(). 'uploads/'.$pus->berkas.'' ?>" height="1055" width="100%" title="Iframe Example"></iframe>
        </center>
        <?php } ?>
        <br>
        <br>
    </div>
</div>
</div>
