<?php
include("../../includes/layouts/cso_header_layout.php");
 ?>
<div class="container-fluid">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Create a new activity</h4>
											<p class="category">As of Last Month October, 2018</p>
									</div>
									<div class="card-content table-responsive">

                  <div class="container">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label for="colFormLabel" class="col-sm-4 col-form-label">Activity Title</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="activity title">
                              </div>
                            </div>

                          </div>
                          <div class="col-md-6">
                            <!-- <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel" placeholder="last name">
                                </div>
                              </div> -->

                            </div>
                          </div>

                          <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="exampleFormControlTextarea1">Activity Short Description</label>
                              <textarea class="form-control"  id="product_purpose_statement" name="product_purpose_statement" value="<?= isset($_POST['product_purpose_statement']) ? $_POST['product_purpose_statement'] : ''; ?>" rows="3"></textarea>
                            </div>

                            </div>

                          </div>

                              <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Activity Duration</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="colFormLabel" placeholder="in days, years or months">
                                    </div>
                                  </div>

                                </div>

                                <div class="col-md-6">
                                  <div class="form-group row">
                                    <div class="form-group">
                                       <label for="exampleFormControlSelect1">select type</label>
                                       <select class="form-control" id="exampleFormControlSelect1">
                                         <option>Select</option>
                                         <option>days</option>
                                         <option>Months</option>
                                          <option>Years</option>
                                       </select>
                                     </div>

                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Facilitators</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="colFormLabel" placeholder="activity facilitators">
                                        </div>
                                      </div>

                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group row">
                                          <label for="colFormLabel" class="col-sm-4 col-form-label">Expected Output</label>
                                          <div class="col-sm-10">
                                            <input type="text" class="form-control" id="colFormLabel" placeholder="Expected Output">
                                          </div>
                                        </div>

                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="colFormLabel" class="col-sm-4 col-form-label">Start Date</label>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="colFormLabel" placeholder="start date">
                                            </div>
                                          </div>

                                        </div>

                                        <div class="col-md-6">
                                          <div class="form-group row">
                                              <label for="colFormLabel" class="col-sm-4 col-form-label">End Date</label>
                                              <div class="col-sm-10">
                                                <input type="text" class="form-control" id="colFormLabel" placeholder="end date">
                                              </div>
                                            </div>

                                          </div>
                                      </div>
                                  <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="exampleFormControlSelect1">Activity Status</label>
                                       <select class="form-control" id="exampleFormControlSelect1">
                                         <option>Select</option>
                                         <option>ON-stanby</option>
                                         <option>To Be verified by User</option>

                                       </select>
                                     </div>
                                  </div>
                                </div>


                              <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">

                                 <button type="button" class="btn btn-primary btn-lg btn-block">Create new Activity</button>
                              </div>
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
