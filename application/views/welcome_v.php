<!-- looping products -->
  <?=$this->session->flashdata('notif')?>
  <?php foreach($products as $product) : ?>
  <div class="col-sm-3 col-md-3">
    <div class="thumbnail">
      <?=img([
        'src'        => $product->image,
        'style'        => 'max-width: 100%; max-height:100%; height:100px'
      ])?>
      <div class="caption">
        <h3 style="min-height:60px;text-align: center;"><?=$product->name?></h3>
        <p style="min-height:60px;text-align: center;"><b>Rp. <?=number_format($product->price)?></b></p>
        <p><?=$product->description?></p>                
        <p style="text-align: center;">
          <a href="javascript:;" data-id="<?= $product->id ?>" data-toggle="modal" data-target="#beli"> <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-info">Beli</button></a>
        </p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  <!-- end looping -->
  <!-- Modal data pembeli -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="beli" class="modal fade">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                   <h4 class="modal-title">Data Pembeli</h4>
               </div>
               <form class="form-horizontal" action="<?php echo base_url('buy')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                            <div class="col-lg-10">
                             <input type="hidden" id="id" name="id">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Tuliskan Nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Alamat</label>
                            <div class="col-lg-10">
                             <textarea class="form-control" id="alamat" name="alamat" placeholder="Tuliskan Alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Jumlah</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Tuliskan Jumlah">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
 </div>

