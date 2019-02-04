<br>
<!-- Main content -->
<section class='content container'>
    <div class='box'>
        <h5>Tambah Mebel</h5>
        <div class='box-body'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <td>Nama Mebel <?php echo form_error('nama_mebel') ?></td>
                        <td>
                            <input type="text" class="form-control" id="nama_mebel" name="nama_mebel" placeholder="Nama Mebel" value="<?php echo $nama_mebel; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis <?php echo form_error('jenis_mebel') ?></td>
                        <td>
                            <input type="text" class="form-control" id="jenis_mebel" name="jenis_mebel" placeholder="Jenis Mebel" value="<?php echo $jenis_mebel; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Harga <?php echo form_error('harga_mebel') ?></td>
                        <td>
                            <input type="text" class="form-control" id="harga_mebel" name="harga_mebel" placeholder="Harga Mebel" value="<?php echo $harga_mebel; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Penjual <?php echo form_error('nama_penjual')?></td>
                        <td>
                            <input type="nama_penjual" class="form-control"  id="nama_penjual" name="nama_penjual" placeholder="Nama Penjual" value="<?php echo $nama_penjual; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan <?php echo form_error('keterangan_mebel') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="keterangan_mebel" name="keterangan_mebel" placeholder="Keterangan Mebel" value="<?php echo $keterangan_mebel; ?>" />
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>Gambar <?php echo form_error('gambar_mebel') ?></td>
                        <td>
                            
                            <input type="file" id="gambar_mebel" name="gambar_mebel" size="20" required value="<?php echo $gambar_mebel; ?>"/>
                        </td>
                    </tr>

                    <input type="hidden" name="id_mebel" value="<?php echo $id_mebel; ?>" />

                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('produkmebel') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Kembali</a>
                        </td>
                    </tr>
                </table>
           </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->