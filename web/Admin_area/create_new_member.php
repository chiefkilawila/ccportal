<?php
include("../../includes/layouts/admin_header_layout.php");
 ?>
<div class="container-fluid">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="col-md-6 card-header" data-background-color="orange">
											<h4 class="title">Enter members details</h4>
											<p class="category">As of Last Month October, 2018</p>
									</div>
                	<div class="col-md-6 card-header" data-background-color="orange">
                  <select class="btn  btn-default col-md-offset-5" style="margin-bottom:20px;" id='usertype'>
                        <option value="0"> Add user As </option>
                          <option value="1">Reseacher</option>
                          <option value="2">CSO</option>
                          <option value="3">Consultant</option>
                          <option value="4">Another Adminstrator</option>
                      </select>
									</div>
										<!--<div class="card-content table-responsive">
										 <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
											<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->

                      <!-- <div class="panel panel-default">
                         <div class="panel-body">
                           Basic panel example
                         </div>
                        </div> -->

                        <div class="col-md-12">

                            <div class="row">
                            <div class="row">
                                <div class=" col-md-6">
                                    <label for="colFormLabel" class=" control-label">First Name</label>
                                    
                                      <input type="text" class="form-control" id="colFormLabel" placeholder="firstname">
                                    
                                  </div>

                                
                                
                                  <div class=" col-md-6 ">
                                      <label for="colFormLabel" class=" control-label">Last Name</label>
                                      
                                        <input type="text" class="form-control" id="colFormLabel" placeholder="last name">
    
                                </div>
                                </div>

                                
                                    <div class="form-group ">
                                        <label for="colFormLabel" class=" control-label">Email</label>
                                      
                                          <input type="email" class="form-control" id="colFormLabel" placeholder="members email">
                                        </div>
                                      


                                    
                                    
                                       <div class="form-group ">
                                          <label for="colFormLabel" class=" control-label">Password</label>
                                          
                                            <input type="text" class="form-control" id="colFormLabel" placeholder="password">
                                        </div>
                   
                                      
                                        <div class=" form-group ">
                                            <label for="colFormLabel" class=" control-label">Confirm Password</label>
                                            
                                              <input type="text" class="form-control" id="colFormLabel" placeholder="confirm password">
          
                                        </div>
                                      

                                          <div class="form-group">
                                             <label for="exampleFormControlSelect1" class="conrol-label">Example select</label>
                                             <select class="form-control" id="exampleFormControlSelect1">
                                               <option>Select</option>
                                               <option>ON-stanby</option>
                                               <option>To Be verified by User</option>

                                             </select>
                                           </div>
                                       
                                      <div class="form-group">

                <button type="button" class="btn btn-primary  btn-block">Create new member</button>
                                    </div>
                                                               


                        	
										</div>
									</div>
								
</div></div>
<?php
include("../../includes/layouts/cso_layout_footer.php");
 ?>
