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
 <!-- <div class="col-md-3">

 </div> -->
       <div id="pnl_admin" class="panel panel-default" >
     <div class="panel-heading">
       <h3 class="panel-title">Administrator</h3>
     </div>
     <div class="panel-body">
       <form>
         <fieldset class="form-group">
           <fieldset class="form-group">
             <label for="exampleInputEmail1">Name</label>
             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

           </fieldset>
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

         </fieldset>
        
         <fieldset class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </fieldset>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
     </div>
    
    </div>
 
   <div id="pnl_reseacher" class="panel panel-default" style="display: none;">
  <div class="panel-heading">
    <h3 class="panel-title">Reseacher Registration</h3>
  </div>
  <div class="panel-body">
    <form>
      <fieldset class="form-group">
        <fieldset class="form-group">
          <label for="exampleInputEmail1">Full Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

        </fieldset>
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        <small class="text-muted">We'll never share your email with anyone else.</small>
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleInputEmail1">Region</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleInputEmail1">Studies</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

      </fieldset>
      <fieldset class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </fieldset>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

    <!-- cso panel -->
    
      <div id="pnl_cso" class="panel panel-default" style="display: none;">
     <div class="panel-heading">
       <h3 class="panel-title">CSO Registration</h3>
     </div>
     <div class="panel-body">
       <form>
         <fieldset class="form-group">
           <label for="exampleInputEmail1">Full Name</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

         </fieldset>
         <fieldset class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
           <small class="text-muted">We'll never share your email with anyone else.</small>
         </fieldset>
         <fieldset class="form-group">
           <label for="exampleInputEmail1">Organization Title</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

         </fieldset>
         <fieldset class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </fieldset>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
     </div>
    </div>
    
    
      <div id="pnl_consultant" class="panel panel-default" style="display: none;">
     <div class="panel-heading">
       <h3 class="panel-title">Consultant Registration</h3>
     </div>
     <div class="panel-body">
       <form>
         <fieldset class="form-group">
           <fieldset class="form-group">
             <label for="exampleInputEmail1">Name</label>
             <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

           </fieldset>
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

         </fieldset>
         <fieldset class="form-group">
           <label for="exampleInputEmail1">Focus Area</label>
           <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">

         </fieldset>
         <fieldset class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </fieldset>
         <button type="submit" class="btn btn-primary">Submit</button>
       </form>
     </div>
    </div>
    
</div></div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#usertype').on('change', function() {
          if ( this.value == '1')
          {
            $("#pnl_reseacher").show();
              $("#pnl_cso").hide();
               $("#pnl_consultant").hide();
               $("#pnl_admin").hide();
          }else if (this.value == '2') {
              $("#pnl_cso").show();
              $("#pnl_reseacher").hide();
              $("#pnl_consultant").hide();
              $("#pnl_admin").hide();
          }
          else if (this.value == '3') {
              $("#pnl_consultant").show();
              $("#pnl_reseacher").hide();
              $("#pnl_cso").hide();
              $("#pnl_admin").hide();
          }
          else if (this.value == '4') {
            $("#pnl_admin").show();
              $("#pnl_consultant").hide();
              $("#pnl_reseacher").hide();
              $("#pnl_cso").hide();
          }
          else
          {
               $("#pnl_admin").hide();
               $("#pnl_cso").hide();
               $("#pnl_consultant").hide();
               $("#pnl_reseacher").hide();
          }
        });
        console.log("hellow");
    });
    </script>
  
