<br>
<!-- Main content -->
<section class='content container'>
    <div class='box'>
        <h5>Tambah Kandang</h5>
        <div class='box-body'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <td>Nama Pemilik <?php echo form_error('pemilik') ?></td>
                        <td>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Nama Pemilik" required  value="<?php echo $pemilik; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Hewan <?php echo form_error('jenis_hewan')?></td>
                        <td>
                            <select class="form-control custom-select mb-2 mr-sm-2 mb-sm-0" id="jenis_hewan" name="jenis_hewan"  required  value="<?php echo $jenis_hewan; ?>">
                            <option>Sapi</option>
                            <option>Kambing</option>
                            <option>Kuda</option>
                            <option>Ayam</option>
                            <option>Bebek</option>
                            <option>Bebek Angsa</option>
                            <option>Banteng</option>
                            <option>Domba</option>
                            <option>Kerbau</option>
                            <option>Unta</option>
                          </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah <?php echo form_error('jumlah')?></td>
                        <td>
                            <input type="jumlah" class="form-control"  id="jumlah" name="jumlah" placeholder="jumlah" required  value="<?php echo $jumlah; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Daerah <?php echo form_error('daerah')?></td>
                        <td>   
                          <select class="form-control custom-select mb-2 mr-sm-2 mb-sm-0" id="daerah" name="daerah"  required  value="<?php echo $daerah; ?>">
                            <option>Muncan I</option>
                            <option>Muncan II</option>
                            <option>Muncan III</option>
                            <option>Muncan IV</option>
                            <option>Montong Batu I</option>
                            <option>Montong Batu II</option>
                            <option>Montong Tanggak</option>
                            <option>Talun</option>
                            <option>Lingkung</option>
                            <option>Prantap</option>
                            <option>Pengambok</option>
                            <option>Sumbek</option>
                          </select>
                        </td>
                    </tr>
                    <tr>
                        <td>keterangan <?php echo form_error('keterangan') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="keterangan" name="keterangan" placeholder="keterangan" value="<?php echo $keterangan; ?>" />
                        </td>
                    </tr>
                    <input type="hidden" name="id_perternakan" value="<?php echo $id_perternakan; ?>" />

                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('perternakan') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Kembali</a>
                        </td>
                    </tr>
                </table>
           </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->