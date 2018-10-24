<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>reggy</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="jumbotron">

<h1 >Register as</h1>
<!-- <div class="dropdown col-md-6">
  <button class="btn btn-success dropdown-toggle" type="button"  data-toggle="dropdown">
Choose User Type
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-center" >
      <li><a href="#">Reseacher</a></li>
<li><a href="#">CSO</a></li>
<li><a href="#">Consultant</a></li>
  </ul>
</div> -->
<select class="btn btn-lg btn-success col-md-offset-4" id='usertype'>
  <option value="0"> select user </option>
    <option value="1">Reseacher</option>
    <option value="2">CSO</option>
    <option value="3">Consultant</option>
</select>
</div>
<div class="row">
 <!-- <div class="col-md-3">

 </div> -->
 <div class="col-md-offset-3 col-md-6">
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
 </div>
    <!-- cso panel -->
    <div class="col-md-offset-3 col-md-6">
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
    </div>
    <div class="col-md-offset-3 col-md-6">
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
    </div>
</div>


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
          }else if (this.value == '2') {
              $("#pnl_cso").show();
              $("#pnl_reseacher").hide();
              $("#pnl_consultant").hide();
          }
          else if (this.value == '3') {
              $("#pnl_consultant").show();
              $("#pnl_reseacher").hide();
              $("#pnl_cso").hide();
          }
          else
          {
              $("#pnl_cso").hide();
               $("#pnl_consultant").hide();
               $("#pnl_reseacher").hide();
          }
        });
        console.log("hellow");
    });
    </script>
  </body>
</html>
