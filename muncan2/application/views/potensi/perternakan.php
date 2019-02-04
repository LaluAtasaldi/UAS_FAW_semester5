<section>
	<div class="container">
	<h1>PERTERNAKAN</h1>
		<!--konten gambar-->
	           <br>
		<div>
            <h4>PETA KANDANG TERNAK DI WILAYAH MUNCAN</h4>
            <img width="100%" src="<?php echo base_url('assets');?>/img/muncan.jpg">
        </div>
<br>
        <div class="row perataan">
                <div class="col-7" style="padding-bottom: 15px;">
                <a href='<?=site_url('perternakan/create')?>' class='zooma btn btn-primary'><i class='fa fa-plus'></i> Tambah Data</a>
                </div>
            </div>

			<div class="perataan">
			<div class="col-9" > 
                <table class="table table-hover" id="dataTablea" >
                    <thead align="center">
                        <tr>
                            <th>No</th>
                            <th>Pemilik</th>
                            <th>Jenis Hewan</th>
                            <th>Jumlah</th>
                            <th>Daerah</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php $start = 0; foreach ($perternakan_data as $perternakan) { ?>
                        <tr>
                            <td><?php echo ++$start ?></td>
                            <td align="left"><?php echo $perternakan->pemilik ?></td>
                            <td align="right"><?php echo $perternakan->jenis_hewan ?></td>
                            <td align="right"><?php echo $perternakan->jumlah ?></td>
                            <td align="right"><?php echo $perternakan->daerah ?></td>
                            <td align="center" class="row"><?php echo $perternakan->keterangan ?></td>
                            <td>
                                <a href='<?=site_url('perternakan/read/'.$perternakan->id_perternakan)?>' class='zooma btn btn-xs btn-default'><i class='fa fa-eye'></i></a>
                                <a href='<?=site_url('perternakan/update/'.$perternakan->id_perternakan)?>' class='zooma btn btn-xs btn-primary'><i class='fa fa-pencil-square-o'></i></a>
                                <a href='<?=site_url('perternakan/delete/'.$perternakan->id_perternakan)?>' class='zooma btn btn-xs btn-danger' onclick="javasciprt: return confirm('Are You Sure ?');"><i class='fa fa-trash-o'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                   
                    </table>
            </div>
            <div class="col-3">
            	<h4>Grafik</h4>
            	<p>Jika dilihat dari segi daerah penempatan, dapat dihasilkan grafik seperti berikut :</p>
                <img src="<?php echo base_url('assets');?>/img/garifk.PNG" class="zoom" width="100%">
            </div>
            </div>

	</div>
</section>
