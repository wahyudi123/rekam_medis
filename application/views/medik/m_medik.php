<?php
  if(is_array($detail)){
    foreach($detail as $key){
      $data['kd_rm'] = $key->kd_rm;
      $data['kd_dokter'] = $key->kd_dokter;
      $data['kd_pasien'] = $key->kd_pasien;
      $data['keluhan'] = $key->keluhan;
      $data['diagnosa'] = $key->diagnosa;
      $data['tindakan'] = $key->tindakan;
      $data['tgl_berobat'] = $key->tgl_berobat;
      
    }
  }else{
      $data['kd_rm']    = "";
      $data['kd_dokter']    = "";
      $data['kd_pasien']    = "";
      $data['keluhan']      = "";
      $data['diagnosa']       = "";
      $data['tindakan']  = "";
      $data['tgl_berobat']      = "";
      
  }
?>
<div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Data Medik</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form enctype="multipart/form-data" action="<?php echo base_url('index.php/main/save_medik'); ?>" name="form1" id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="kd_rm" value="<?php echo $data['kd_rm'];?>" class="form-control">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nama Dokter <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <?php 
                            echo cmb_dinamis('kd_dokter','tbl_dokter','nm_dokter','kd_dokter',$data['kd_dokter']); 
                        ?>
                        </div>
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nama Pasien<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                        <?php 
                            echo cmb_dinamis('kd_pasien','tbl_pasien','nm_pasien','kd_pasien',$data['kd_pasien']); 
                        ?>
                          
                        </div>
                       
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Keluhan <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                         <input type="text" name="keluhan" value="<?php echo $data['keluhan'];?>" class="form-control">
                        </div>
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Diagnosa <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <input type="text" name="diagnosa" value="<?php echo $data['diagnosa'];?>" class="form-control">
                        </div>
                       
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Tindakan <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" name="tindakan" value="<?php echo $data['tindakan'];?>" class="form-control">
                        </div>

                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Tanggal Berobat <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="date" name="tgl_berobat" value="<?php echo $data['tgl_berobat'];?>" class="form-control">
                        </div>
                       
                      </div>
                 

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-9">
                          <button type="submit" class="btn btn-success" id="display">Simpan</button>
                        </div>
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <?php echo "<h4 style='color:red'>".$this->input->get('msg')."</h4>";?>
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Dokter</th>
                          <th>Nama Pasien</th>
                          <th>Keluhan</th>
                          <th>Diagnosa</th>
                          <th>Tindakan</th>
                          <th>Tanggal Berobat</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php
                          if($this->input->get('per_page')==null ||  $this->input->get('per_page')==""){
                            $i=1;
                          }else{
                            $i=$this->input->get('per_page')+1;
                          }
                          if(is_array($list)){
                              foreach($list as $key=>$val){
                                $tmp = $this->encrypt->encode($val->kd_rm);
                                
                                echo "<tr>";
                                echo "<td align='center' width='2%'>".$i."</td>";
                                echo "<td>".$val->nm_dokter."</td>";
                                echo "<td>".$val->nm_pasien."</td>";
                                echo "<td>".$val->keluhan."</td>";
                                echo "<td>".$val->diagnosa."</td>";
                                echo "<td>".$val->tindakan."</td>";
                                echo "<td>".$val->tgl_berobat."</td>";
                        ?>
                            <td align="center">
                              <div class="btn-group">
                                <a class="btn btn-xs btn-info" href="<?php echo '?uid='.$this->input->get('uid').'&id='.$tmp;?>">
                                  <i class="fa fa-pencil"></i>
                                </a>
                                
                                <a onclick="return confirm('Apakah anda yakin menghapus item tersebut?');" class="btn btn-xs btn-danger" href="<?php echo base_url('main/delete_medik').'?&id='.$tmp;?>">
                                  <i class="fa fa-trash"></i>
                                </a>
                              </div>
                            </td>
                        <?php
                                echo "</tr>";
                                $i++;
                              }
                          }
                        ?>
                        
                      </tbody>
                    </table>
                  
                    
        
                </div>
              </div>
        </div>
</div>
