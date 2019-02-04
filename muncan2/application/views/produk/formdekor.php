<br>
<!-- Main content -->
<section class='content container'>
    <div class='box'>
        <h5>Tambah Dekor</h5>
        <div class='box-body'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <td>Nama Dekor <?php echo form_error('nama_dekor') ?></td>
                        <td>
                            <input type="text" class="form-control" id="nama_dekor" name="nama_dekor" placeholder="Nama Dekor" value="<?php echo $nama_dekor; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>harga <?php echo form_error('harga')?></td>
                        <td>
                            <input type="harga" class="form-control"  id="harga" name="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>keterangan <?php echo form_error('keterangan') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="keterangan" name="keterangan" placeholder="keterangan" value="<?php echo $keterangan; ?>" />
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>Gambar <?php echo form_error('gambar') ?></td>
                        <td>
                            
                            <input type="file" id="gambar" name="gambar" size="20" required value="<?php echo $gambar; ?>"/>
                        </td>
                    </tr>

                    <input type="hidden" name="id_dekor" value="<?php echo $id_dekor; ?>" />

                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('produkdekor') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Kembali</a>
                        </td>
                    </tr>
                </table>
           </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->