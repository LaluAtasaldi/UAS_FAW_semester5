<section>
	<div class="container">
	<h1>PARIWISATA</h1>

	<!--konten gambar-->
	      <br>
		<div>
            <h4>PETA WISATA DI WILAYAH MUNCAN</h4>
            <img width="100%" src="<?php echo base_url('assets');?>/img/muncan.jpg">
        </div><br>
		<div class="row perataan">
            <div class="col-7" style="padding-bottom: 15px;">
                <a href='<?=site_url('pariwisata/create')?>' class='zooma btn btn-primary'><i class='fa fa-plus'></i> Tambah Data</a>
            </div>
        </div>


		<div class="perataan">
			<div class="col-9" > 
                <table class="table table-hover" id="dataTablea">
                    <thead align="center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Daerah</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php $start = 0; foreach ($pariwisata_data as $pariwisata) { ?>
                        <tr>
                            <td><?php echo ++$start ?></td>
                            <td align="left"><?php echo $pariwisata->nama_wisata?></td>
                            <td align="right"><?php echo $pariwisata->daerah ?></td>
                            <td><img src="<?php echo base_url().'upload/pariwisata/'.$pariwisata->gambar ?>" width="50px" ></td>
                            <td align="left" class="row"><?php echo $pariwisata->keterangan ?></td>
                            <td>
                            	
                                <a href='<?=site_url('pariwisata/read/'.$pariwisata->id_pariwisata)?>' class='zooma btn btn-xs btn-info'><i class="fa fa-thumbs-o-up"></i></a>
                                <a href='<?=site_url('pariwisata/read/'.$pariwisata->id_pariwisata)?>' class='zooma btn btn-xs btn-success'><i class="fa fa-comments"></i></a>
                                <a href='<?=site_url('pariwisata/read/'.$pariwisata->id_pariwisata)?>' class='zooma btn btn-xs btn-secondary'><i class='fa fa-eye'></i></a>
                                <a href='<?=site_url('pariwisata/update/'.$pariwisata->id_pariwisata)?>' class='zooma btn btn-xs btn-warning'><i class='fa fa-pencil-square-o'></i></a>
                                <a href='<?=site_url('pariwisata/delete/'.$pariwisata->id_pariwisata)?>' class='zooma btn btn-xs btn-danger' onclick="javasciprt: return confirm('Are You Sure ?');"><i class='fa fa-trash-o'></i></a>
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