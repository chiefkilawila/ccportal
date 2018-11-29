<?php
include("../../includes/layouts/cso_header_layout.php");
 ?>

<div class="container-fluid">
	<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header" data-background-color="orange">
											<h4 class="title">Add Members</h4>
										
									</div></div>
									<div class="card-content ">
  
    <form>
      <div class="row">
        <div class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input name="full_name" type="text" class="form-control" id="" placeholder="Enter email">

        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="" placeholder="Enter email">
        </div>
      </div>
      
      <div class="form-group">
                    <label for="country">Country</label>
                     <select class="form-control" id="country" name="country" value="<?= isset($_POST['country']) ? $_POST['country'] : ''; ?>">
                       <option>SELECT</option>
                       <option>Tanzania</option>
                       <option>Uganda</option>
                       <option>Kenya</option>
                       <option>Rwanda</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">Region</label>
                    <select class="form-control" id="region" name="region" value="<?= isset($_POST['region']) ? $_POST['region'] : ''; ?>" placeholder="">
                    <option>SELECT</option>
                       <option>Dar es Salaam</option>
                       <option>Mwanza</option>
                       <option>Arusha</option>
                       <option>Dodoma</option>
                     </select>
                  </div>
                  <div class="form-group">
                    <label for="formGroupExampleInput2">District</label>
                    <select class="form-control" id="district" name="district" value="<?= isset($_POST['district']) ? $_POST['district'] : ''; ?>" placeholder="">
                    <option>SELECT</option>
                       <option>Kinondoni</option>
                       <option>Ilala</option>
                       <option>Temeke</option>
                       <option>Ubungo</option>
                     </select>
                  </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Activity</label>
        <input type="email" class="form-control" id="" placeholder="Enter email">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
</div>
 </div>
    <!-- cso panel -->
   
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php
                  include("../../includes/layouts/cso_layout_footer.php");
                   ?>
    <script>
   
    </script>
  
