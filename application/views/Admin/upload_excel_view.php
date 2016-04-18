<style>
      table{
    margin-top: 10%;
    margin-left: 20%;
   }
    .btn1{
      float: right;
    }
  }
    
  
</style>



<!--<div class="row">
    <div class="col-sm-8">
      <form  name="supplier" id="supplier_uploads" class="form-horizontal" role="form" action="<?=site_url('admin/upload_emaillists')?>" 
                 method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
                  <h4 style="margin-left:30%; margin-top:10%; margin-bottom: 10%; background:#E91E6;">Upload Excel sheet with the email lists</h4>           
          
                                      
                    <div class="form-group">
                        <label for="human" class="col-sm-5 control-label">Upload an Excell File </label>
                        <div class="col-sm-5">
                            <span class="btn btn-default btn-file">
                             <input type="file" name="file_name">
                            </span>

                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-5">
                            <input id="submit" name="submit" type="submit" value="Upload" class="btn btn-primary">
                            
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3 col-sm-offset-2">
                            
                                
                        </div>
                    </div>
                </form> 
    </div>
     
 </div>-->

 <div class="row">
   <div class="col-md-4 col-sm-12 logo">
       <img id="logo" src="<?php echo base_url().'images/logo.png';?>" alt="yobizz">
   </div>
    
  
    <div class="col-md-8 col-sm-12 login">
      
        <button type="submit" class="btn btn-success btn1" data-toggle="modal" data-target="#myModal">Upload a List of Email recipients</button>
                
    </div>
     </div>




<div class="row">
    <div class="col-sm-8">

               <table  class="table table-hover table-bordered table-update" id="datatable"  >
                          <thead style="background-color: white">
                            <tr>
                              <th>County</th>
                              <th>Facility </th>
                              <th>Email</th>
                              <th>Recipient</th>
                               </tr>
                          </thead>

                          <tbody>

                            <?php
                            foreach ($listing as $list ) {
                            ?>
                            <tr >
                             
                              <td class="lname"><?php echo $list->recipient_name; ?>  </td> 
                              <td class="lname"><?php echo $list->recipient_email ?>  </td> 
                              <td class="lname"><?php echo $list->facility_code ?>  </td> 
                              <td class="lname"><?php echo $list->subcounty ?>  </td> 
                              <td class="lname"><?php echo $list->county ?>  </td> 
                                

                              
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
  </div>
     
 </div>


  <!--  Login Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload a file with list of recipients</h4>
        </div>
        <div class="modal-body">
                            
                        <form  name="supplier" id="supplier_uploads" class="form-horizontal" role="form" action="<?=site_url('admin/upload_emaillists')?>" 
                 method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
                  <h4 style="margin-left:30%; margin-top:10%; margin-bottom: 10%; background:#E91E6;">Upload Excel sheet with the email lists</h4>           
          
                                      
                    <div class="form-group">
                        <label for="human" class="col-sm-5 control-label">Upload an Excell File </label>
                        <div class="col-sm-5">
                            <span class="btn btn-default btn-file">
                             <input type="file" name="file_name">
                            </span>

                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5 col-sm-offset-5">
                            <input id="submit" name="submit" type="submit" value="Upload" class="btn btn-primary">
                            
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3 col-sm-offset-2">
                            
                                
                        </div>
                    </div>
                </form> 


  
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>