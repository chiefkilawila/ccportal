<?php
include("../../includes/layouts/cso_header_layout.php");
 ?>
<div class="container">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Update Activities</h4>
											<p class="category">update recently added activities, 2018</p>
									</div>
									<div class="card-content table-responsive">
                     <div class="row">
                       <div class="col-md-12">
                         <div class="row">
                          <div class="col-md-12">
                             <table class="table">
                               <thead class="thead-dark">
                                 <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Activity Title</th>
                                   <th scope="col">Duration</th>
                                   <th scope="col">end date</th>
                                   <th scope="col">Acc Status</th>

                                 </tr>
                               </thead>
                               <tbody>
                                 <tr>
                                   <th scope="row">1</th>
                                   <td>Afforestration</td>
                                   <td>3 months</td>
                                   <td style="color: green;">12 dec 2018</td>
                                   <td style="color: green;">Active</td>
                                   <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                   <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view details</button></a></td>
                                 </tr>
                                 <tr>
                                   <th scope="row">2</th>
                                   <td>Marine Cleaning</td>
                                   <td>2 months</td>
                                   <td>06 mar 2019</td>
                                   <td style="color: red;">suspended</td>
                                   <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                   <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view details</button></a></td>
                                 </tr>
                                 <tr>
                                   <th scope="row">3</th>
                                   <td>Training</td>
                                   <td>1 day</td>
                                   <td>01 jan 2019</td>
                                   <td style="color: green;">Active</td>
                                   <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                   <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view details</button></a></td>

                                 </tr>
                               </tbody>
                             </table>
                             </div>

                      </div>
                       </div>
                     </div>

									</div>
                </div>
                </div>
              </div>
            </div>
  <?php
  include("../../includes/layouts/cso_layout_footer.php");
   ?>
