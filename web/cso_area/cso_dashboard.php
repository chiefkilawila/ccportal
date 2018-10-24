<?php
include("../../includes/layouts/cso_header_layout.php");
 ?>
<div class="container-fluid">
	<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Current User Details</h4>
											<p class="category">As of Last Month February, 2018</p>
									</div>
									<div class="card-content table-responsive">
											<!-- <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
											<p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p> -->


                        <h2> Welcome back, <small><?php echo $logged_user_email  ; ?></small></h2>
                        <h2> With userr_id, <small><?php echo $logged_user_id  ; ?></small></h2>

                        <h2> Feed Manufacturer Name, <small><?php echo $feed_manufacture_name; ?></small></h2>


										</div>
									</div>
									</div>
