
<?php

include("../../includes/layouts/cso_header_layout.php");

?>
<h2>Delete</h2>

<h3>Are you sure you want to delete this?</h3>
<div>
    <h4>Member</h4>
    <hr />
    <dl class="dl-horizontal">
        <dt>
          name
        </dt>
        <dd>
          juma 
        </dd>
        <dt>
          cso
        </dt>
        <dd>
          store keepers
        </dd>
        <dt>
       from
        </dt>
        <dd>
           10/29/2018 
        </dd>
        <dt>
          to
        </dt>
        <dd>
           31/10/2019
        </dd>
    </dl>
    
    <form >
        <input type="hidden" />
        <input type="submit" value="Delete" class="btn btn-default" /> |
        <a href="#">Back to Manage Activities</a>
    </form>
</div>
<?php
                  include("../../includes/layouts/cso_layout_footer.php");
                   ?>