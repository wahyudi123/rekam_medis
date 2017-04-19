<?php
  if(is_array($detail)){
    foreach($detail as $key){
      $data['kd_spesialis'] = $key->kd_spesialis;
      $data['nm_spesialis'] = $key->nm_spesialis;
      
    }
  }else{
      $data['kd_spesialis'] = "";
      $data['nm_spesialis'] = "";
      
  }
?>
<div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Master Spesialis</h2>
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
                    <form enctype="multipart/form-data" action="<?php echo base_url('index.php/main/save_spesialis'); ?>" name="form1" id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="kd_spesialis" value="<?php echo $data['kd_spesialis'];?>" class="form-control">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nama Spesialis <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-3 col-xs-12">
                          <input type="text" name="nm_spesialis" value="<?php echo $data['nm_spesialis'];?>" class="form-control">
                        </div>
                        
                      </div>
                                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-10">
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
                    <h2>Manajemen Spesialis</h2>
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
                  <table id="datatable" class="table table-bordered table-responsive table-hover">
                      <thead>
                        <tr>
                          <th width="10">No</th>
                          <th>Spesialis</th>
                          <th width="80">Action</th>
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
                                $tmp = $this->encrypt->encode($val->kd_spesialis);
                                echo "<tr>";
                                echo "<td align='center' width='2%'>".$i."</td>";
                                echo "<td>".$val->nm_spesialis."</td>";
                        ?>
                            <td align="center">
                              <div class="btn-group">
                                <a class="btn btn-xs btn-info" href="<?php echo '?uid='.$this->input->get('uid').'&id='.$tmp;?>">
                                  <i class="fa fa-pencil"></i>
                                </a>
                                
                                <a onclick="return confirm('Apakah anda yakin menghapus item tersebut?');" class="btn btn-xs btn-danger" href="<?php echo base_url('main/delete_spesialis').'?&id='.$tmp;?>">
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
