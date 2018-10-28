<?php
include("../../includes/layouts/re_header_layout.php");
 ?>
    <div class="container">

      <div class="page-header col-md-8 ">
    
        <p class="lead">Register as a reseacher.</p>
      
      <hr>

      
</div>
      <div class="row">
         <div class="col-sm-8">

        <form>
        
          <fieldset class="form-group">
        <label for="exampleInputEmail1" class="control-label">Full name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter full name">
            
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleInputEmail1"class="control-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            <small class="text-muted">We'll never share your email with anyone else.</small>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleInputPassword1" class="control-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleSelect1" class="control-label">Example select</label>
            <select class="form-control" id="exampleSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleSelect2" class="control-label">Example multiple select</label>
            <select multiple class="form-control" id="exampleSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleTextarea" class="control-label">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </fieldset>
          <fieldset class="form-group">
            <label for="exampleInputFile" class="control-label">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile">
            <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
          </fieldset>
          <div class="radio">
            <label class="control-label">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="radio">
            <label class="control-label">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="radio disabled">
            <label class="control-label">
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Option three is disabled
            </label>
          </div>
          <div class="checkbox">
            <label class="control-label">
              <input type="checkbox"> Check me out
            </label>
          </div >
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </div>
</div>

            <!-- jQuery CDN -->
            <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
            <!-- Bootstrap Js CDN -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- jQuery Custom Scroller CDN -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {


                    $('#sidebarCollapse').on('click', function () {
                        $('#sidebar, #content').toggleClass('active');
                        $('.collapse.in').toggleClass('in');
                        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                    });
                });
      </script>
  </body>
</html>
