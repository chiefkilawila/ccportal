<?php
include("../../includes/layouts/admin_header_layout.php");
 ?>
<div class="container-fluid">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">All Members in this CSO</h4>
											<p class="category">As of Last Month October, 2018</p>
									</div>
									<div class="card-content table-responsive">
											<!-- <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
											<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->

                      <!-- <div class="panel panel-default">
                         <div class="panel-body">
                           Basic panel example
                         </div>
                        </div> -->

                        <div class="container">
                            <!-- <div class="page-header">
                                <h1>Panels with nav tabs.<span class="pull-right label label-default">:)</span></h1>
                            </div> -->
                            <div class="row">
                            	<div class="col-md-12">
                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">First Name</th>
                                      <th scope="col">Last Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Acc Status</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>mark@forumcc.or.tz</td>
                                      <td style="color: green;">Active</td>
                                      <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                      <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view activities</button></a></td>
                                      <td><a href="../../web/cso_area/Delete_member.php"><button type="button" class="btn btn-danger">Delete</button></td></a>

                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Jacob</td>
                                      <td>Thornton</td>
                                      <td>jacob@forumcc.or.tz</td>
                                      <td style="color: red;">suspended</td>
                                      <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                      <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view activities</button></a></td>
                                      <td><a href="../../web/cso_area/Delete_member.php"><button type="button" class="btn btn-danger">Delete</button></td></a>

                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Larry</td>
                                      <td>the Bird</td>
                                      <td>larry@forumcc.or.tz</td>
                                      <td style="color: green;">Active</td>
                                      <td><a href="../../web/cso_area/update_member.php"><button type="button" class="btn btn-success">Update</button></a></td>
                                      <td><a href="../../web/cso_area/manage_activities.php"><button type="button" class="btn btn-primary">view activities</button></a></td>
                                      <td><a href="../../web/cso_area/Delete_member.php"><button type="button" class="btn btn-danger">Delete</button></td></a>

                                    </tr>
                                  </tbody>
                                </table>
                                </div>

                        	</div>
                        </div>
										</div>
									</div>
									</div>
                  <?php
                  include("../../includes/layouts/cso_layout_footer.php");
                   ?>
