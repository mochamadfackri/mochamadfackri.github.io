<div class="container">
<div class="row">
    <div class="col-sm-12">
        <br>
        <?php 
            foreach ($tbl_aplikasi as $apk) {
        ?>
        <table class="table" border="0" align="center" border="0">
            <tr align="center">
                <td width="10%" align="left">Nama Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $apk->nm_surat ?></td>


                <td width="10%" align="right">Jenis Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $apk->jenis ?></td>
            </tr>
            <tr align="center">
                <td width="10%" align="left">Asal Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $apk->asal ?></td>


                <td width="10%" align="right">Tanggal Surat</td>
                <td width="5%">:</td>
                <td align="left"><?php echo $apk->tgl_surat ?></td>
            </tr>
        </table>

        

        <center>
        <iframe src="<?php echo base_url(). 'uploads/'.$apk->berkas.'' ?>" height="1055" width="100%" title="Iframe Example"></iframe>
        </center>
        <?php } ?>
        <br>
        <br>
    </div>
</div>
</div>
