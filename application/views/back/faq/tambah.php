<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 col-ml-12">
            <div class="row">
                
                <!-- Textual inputs start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title"><?php echo $title; ?></h4>
                            <hr>

                    <?php 
                    if(isset($error)){
                      echo '<p class="alert alert-warning">';
                      echo $error;
                      echo '</p>';
                    }
                    echo validation_errors('<div class="alert alert-success">','</div>');
                    echo form_open_multipart(base_url('back/faq/tambah'),' class="form-horizontal"');
                    ?>    
                        <form class="form-horizontal">
                           
                                                       
                          <div class="form-group">
                               <div class="col-sm-10">
                                  <textarea name="pertanyaan" class="form-control" minlength="4" placeholder="Masukkan Pertanyaan" required><?php echo set_value('pertanyaan') ?></textarea>
                               </div>
                            </div>

                           <div class="form-group">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="jawaban" minlength="4" placeholder="Masukkan Jawaban Faq" value="<?php echo set_value('jawaban') ?>" required>
                              </div>
                            </div>


                           <div class="form-group">
                              <div class="col-sm-10">
                                <input type="number" class="form-control" name="urutan" minlength="1" placeholder="Masukkan Urutan" value="<?php echo set_value('urutan') ?>" required>
                              </div>
                            </div>
 
 
                              <hr>
                             <div class="form-group">
                                <button type="submit" class="btn btn-success btn-md" name="submit"><i class="fa fa-save"></i> Simpan</button>
                                &nbsp; &nbsp;&nbsp;
                                <a href="<?php echo base_url('back/faq') ?>" class="btn btn-danger" name="reset"><i class="fa fa-retweet"></i> Kembali</a>
                             </div>
                              <!-- /.box-footer -->
                        </form>
                        <?php echo form_close(); ?>      
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->


                   
            </div>
        </div>
    </div>
</div>