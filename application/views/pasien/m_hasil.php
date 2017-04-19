<div class="right_col" role="main">
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
                          <th>Keluhan</th>
                          <th>Diagnosa</th>
                          <th>Tindakan</th>
                          <th>Tanggal Berobat</th>
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
                                
                                echo "<tr>";
                                echo "<td align='center' width='2%'>".$i."</td>";
                                echo "<td>".$val->nm_dokter."</td>";
                                echo "<td>".$val->keluhan."</td>";
                                echo "<td>".$val->diagnosa."</td>";
                                echo "<td>".$val->tindakan."</td>";
                                echo "<td>".$val->tgl_berobat."</td>";
                        ?>
                            
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
