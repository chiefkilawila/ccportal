<?php
include("../includes/layouts/public_ly_header.php");
?>
<?php
$dataPointshist = array(
	array("x"=> 10, "y"=> 41),
	array("x"=> 20, "y"=> 35, "indexLabel"=> "Lowest"),
	array("x"=> 30, "y"=> 50),
	array("x"=> 40, "y"=> 45),
	array("x"=> 50, "y"=> 52),
	array("x"=> 60, "y"=> 68),
	array("x"=> 70, "y"=> 38),
	array("x"=> 80, "y"=> 71, "indexLabel"=> "Highest"),
	array("x"=> 90, "y"=> 52),
	array("x"=> 100, "y"=> 60),
	array("x"=> 110, "y"=> 36),
	array("x"=> 120, "y"=> 49),
	array("x"=> 130, "y"=> 41)
);


$dataPointsPie = array(
	array("label"=> "Broiler Starter", "y"=> 590),
	array("label"=> "Growers Mash", "y"=> 261),
	array("label"=> "Layers Mash", "y"=> 158),
	array("label"=> "Broiler Finisher", "y"=> 72),
	array("label"=> "Breeder Mash", "y"=> 191),
	array("label"=> "Dairy Meal", "y"=> 573),
	array("label"=> "Pig Feed", "y"=> 126)
);


$dataPointsTwoLines = array(
	array("label"=> 1992, "y"=>105),
	array("label"=> 1993, "y"=>130),
	array("label"=> 1994, "y"=>158),
	array("label"=> 1995, "y"=>192),
	array("label"=> 1996, "y"=>309),
	array("label"=> 1997, "y"=>422),
	array("label"=> 1998, "y"=>566),
	array("label"=> 1999, "y"=>807),
	array("label"=> 2000, "y"=>1250),
	array("label"=> 2001, "y"=>1615),
	array("label"=> 2002, "y"=>2069),
	array("label"=> 2003, "y"=>2635),
	array("label"=> 2004, "y"=>3723),
	array("label"=> 2005, "y"=>5112),
	array("label"=> 2006, "y"=>6660),
	array("label"=> 2007, "y"=>9183),
	array("label"=> 2008, "y"=>15844),
	array("label"=> 2009, "y"=>23185),
	array("label"=> 2010, "y"=>40336),
	array("label"=> 2011, "y"=>70469),
	array("label"=> 2012, "y"=>100504),
	array("label"=> 2013, "y"=>138856),
	array("label"=> 2014, "y"=>178391),
	array("label"=> 2015, "y"=>229300),
	array("label"=> 2016, "y"=>302300),
	array("label"=> 2017, "y"=>368000)
);

?>

<div class="container-fluid">


              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                      <div class="card-header" data-background-color="orange">
                          <h4 class="title">Daily Activity Comparison</h4>
                          <p class="category">As of Last Month June, 2018</p>
                      </div>
                      <div class="card-content table-responsive">
                          <!-- <p>Comparision of production data in the feed manufucturer industry </p> -->


                       <div id="chartContainerhist" style="height: 370px; width: 100%;"></div>

                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                      <div class="card-header" data-background-color="orange">
                          <h4 class="title">Monthly Activities</h4>
                          <p class="category">As of Last Month June, 2018</p>
                      </div>
                      <div class="card-content table-responsive">
                          <!-- <p>monthly price comparisons </p> -->
                       <!-- <div id="chartContainerhist" style="height: 370px; width: 100%;"></div> -->
                       <div id="curve_chart" style="height: 370px; width: 100%;"></div>

                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                      <div class="card-header" data-background-color="orange">
                          <h4 class="title">Annual CC Activities</h4>
                          <p class="category">As of Last, 2018</p>
                      </div>
                      <div class="card-content table-responsive">
                          <!-- <p>Comparision of production data in the feed manufucturer industry </p> -->


                       <!-- <div id="chartContainerhist" style="height: 370px; width: 100%;"></div> -->
                      <div id="chart_div" style="height: 370px; width: 100%;"></div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </div>

<?php
include("../includes/layouts/public_ly_footer.php");

?>
