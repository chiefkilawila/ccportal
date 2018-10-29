<?php

include("../../includes/layouts/cso_header_layout.php");

?>


<div class="container-fluid">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Update members details</h4>
											<p class="category">As of Last Month October, 2018</p>
									</div>
									<div class="card-content table-responsive">
								
                        <div class="col-md-10">

                            <div class="row">
                            
                                <div class=" form-group">
                                    <label for="colFormLabel" class=" control-label">First Name</label>
                                    
                                      <input type="text" class="form-control" id="colFormLabel" placeholder="firstname">
                                    
                                  </div>

                                
                                
                                  <div class=" form-group ">
                                      <label for="colFormLabel" class=" control-label">Last Name</label>
                                      
                                        <input type="text" class="form-control" id="colFormLabel" placeholder="last name">
    
                                
                                </div>

                                
                                    <div class="form-group ">
                                        <label for="colFormLabel" class=" control-label">Email</label>
                                      
                                          <input type="email" class="form-control" id="colFormLabel" placeholder="members email">
                                        </div>
                                      

                                      

                                          <div class="form-group">
                                             <label for="exampleFormControlSelect1" class="conrol-label">Status</label>
                                             <select class="form-control" id="exampleFormControlSelect1">
                                               <option>Select</option>
                                               <option>ON-stanby</option>
                                               <option>To Be verified by User</option>

                                             </select>
                                           </div>
                                        </div>
                                      <div class="form-group ">

                <button type="button" class="btn btn-primary  btn-block">Update member</button>
                                   
                                 </div>
                               </div>


                        	
										</div>
									</div>
									</div>
</div>




<?php
                  include("../../includes/layouts/cso_layout_footer.php");
                   ?>