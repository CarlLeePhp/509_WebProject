
<?php
// Get which part of this page wanted.
$item = 1;
$item = $_GET["n"];
?>

<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';
?>


<!-- Content -->
<main class="container-fluid" >
    <!-- Components > Nav > The tabs plugs with vertical pills -->
    <div class="d-none d-md-block m-5"></div>
    <div class="row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link <?php if($item == 1) {echo 'active';} ?>" id="v-pills-super-tab" data-toggle="pill" href="#v-pills-super"
                    role="tab" aria-controls="v-pills-super" aria-selected="true">Super Service</a>
                <a class="nav-link <?php if($item == 2) {echo 'active';} ?>" id="v-pills-freight-tab" data-toggle="pill" href="#v-pills-freight" role="tab"
                    aria-controls="v-pills-freight" aria-selected="false">Freight Service</a>
                <a class="nav-link <?php if($item == 3) {echo 'active';} ?>" id="v-pills-updates-tab" data-toggle="pill" href="#v-pills-updates" role="tab"
                aria-controls="v-pills-updates" aria-selected="false">Updates</a>
                <a class="nav-link <?php if($item == 4) {echo 'active';} ?>" id="v-pills-extraService-tab" data-toggle="pill" href="#v-pills-extraService" role="tab"
                aria-controls="v-pills-extraService" aria-selected="false">Extra Service</a>
            </div>
        </div>
        <div class="col-md-9 pb-5">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade <?php if($item == 1) {echo 'show active';} ?>" id="v-pills-super" role="tabpanel" aria-labelledby="v-pills-super-tab">
                    <!--start from here-->
                    <div class="container">
                        <img src="./img/bannerSS.png" class="col-12" alt="Banner"/>
                        
                        <h2 class="p-5">Super Service</h2>
                        <p class="col-12"> From Export to import and domestic service , super mail offers huge range of service delivery options. Find a delivery option that are suitable for you below</p>
                        
                        
                        
                        <div class="jumbotron-fluid col-12">
                            <h3 class="text-center">International Service</h3>
                            <div class="row container"><div class="card-header bg-secondary rounded-top col-6 text-center text-white">Fastest</div><div class="card-header rounded-top bg-secondary col-6 text-center text-white">Best Price</div></div>
                            <div class="row container"><div class=" card-header border-right bg-light col-6"><ul><li>Arriving in the next possible day</li><li>Using Air Service</li><li>Maximum individual weight 25 KG</li></ul></div><div class=" card-header bg-light col-6"><ul><li>Arriving within 3-7 days</li><li>no maximum weight</li></ul></div>
                                
                    
                            </div>
                        </div>
                        <div class="jumbotron-fluid col-12">
                            <h3 class="text-center">Domestic Service</h3>
                            <div class="row container"><div class="card-header bg-warning border-dark rounded-top col-6 text-center">Fastest</div><div class="card-header rounded-top  border-dark bg-warning col-6 text-center">Best Price</div></div>
                            <div class="row container"><div class=" card-header border-right bg-light col-6"><ul><li>Arriving in the same day</li><li>Using Air Service</li><li>Maximum individual weight 25 KG</li></ul></div><div class=" card-header bg-light col-6"><ul><li>Arriving within 1-7 days</li><li>no maximum weight</li></ul></div>
                                
                    
                            </div>
                        </div>
                    </div>
                    <!--endhere-->
                </div>
                <div class="tab-pane fade <?php if($item == 2) {echo 'show active';} ?>" id="v-pills-freight" role="tabpanel" aria-labelledby="v-pills-freight-tab">
                    <!--start from here-->

                        <div class="container">
                            <img src="./img/FreightBanner.jpg" class="col-12" alt="Banner" />
                            
                                <h2 class="p-5">Freight Service</h2>

                                <dl>
                                    <dt>Land Freight Service</dt>
                                    <Dd>
                                        Ground transportation is an essential component of our service program. Our company supermail is committed to maintaining the highest performance standards in the industry inside and outside of new zealand. We offer an array of expedited transportation options to meet your needs which include:

                                        <ul>
                                            <li>Land Services</li>
                                            <li>LTL/FTL</li>
                                            <li>Direct Shipments</li>
                                            <li>Consolidation Services</li>
                                            <li>Gateways All Over The World</li>
                                            <li>Cross Docking</li>
                                            <li>Project Loads</li>
                                            <li>Transport Insurance</li>
                                            <li>Packing And Crating</li>
                                        </ul>
                                    </Dd>
                                    
                                    <dt>Air Freight Service</dt>
                                    <dd>
                                        <p>
                                            Supermail regularly consult on and coordinate airfreight consignments for our Customers.  A large percentage of these are handled as airfreight consolidations, as these provide the best costs for Shippers while still delivering an efficient service.

                                            Airfreight consignments are typically smaller, less heavy goods when compared to Full Container Load (FCL) shipments carried by sea.
                                        </p>
                                    </dd>
                                    <dt>Sea Freight Service</dt>
                                    <dd>
                                        Supermail also provide an sea freight service that transport bulk of your goods. it includes:
                                        <ul>
                                            <li>Full Container Load (FCL)</li>
                                            <li>Less-than Container Load (LCL) Consolidation</li>
                                            <li>Special Equipment Containers (Flatrack, Open Top, Reefer)</li>
                                            <li>Break-Bulk or non-containerised (Roll-On Roll-Off)</li>
                                            <li>Vehicle shipping</li>
                                        </ul>
                                    </dd>
                                </dl>

                                <p> Simply contact us and let us know what you need and we will arrange your delivery process whether it's land , air or sea freight shipping . we are here to help you to make delivery process easier.</p>
                            </div>
                        
                        <!--endhere-->
                </div>
                <div class="tab-pane fade <?php if($item == 3) {echo 'show active';} ?>" id="v-pills-updates" role="tabpanel" aria-labelledby="v-pills-updates-tab">
                    <h4>Updates</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade <?php if($item == 4) {echo 'show active';} ?>" id="v-pills-extraService" role="tabpanel" aria-labelledby="v-pills-extraService-tab">
                    <!--start from here-->
                    <div class="container">
                        <h2>Extra Service</h2>
                        <hr />
                        <div class="container row">
                            <div class="col-md-4 mt-3 pb-sm-2 pb-md-0 "><img class="col-12 " src="./img/DoortoDoorservice.png"
                                    alt="doortodoor"></div>
                            <div class="card col-md-8 mt-3">
                                <h3>Door-To-Door Service</h3>
                                <hr />
                                <div class="card-body"> Supermail provides a door to door service if you feel the need
                                    of the package to be received in person. it will nullify the chance of the package
                                    getting lost or broken if we just leave the package in front of your doorstep</div>
                            </div>
                            <div class="col-md-4 mt-5 pb-sm-2 pb-md-0 "><img class="col-12 " src="./img/Repacking.png"
                                    alt="Repacking"></div>
                            <div class="card col-md-8 mt-5">
                                <h3>Repacking</h3>
                                <hr />
                                <div class="card-body"> Do you need us to help you to pack your items? do not worry .
                                    We do have service for that.</div>
                            </div>
                            <div class="col-md-4 mt-5 pb-sm-2 pb-md-0 "><img class="col-12 " src="./img/Safe.png"
                                    alt="Extra Security"></div>
                            <div class="card col-md-8 mt-5">
                                <h3>Extra Security</h3>
                                <hr />
                                <div class="card-body">For Things that need extra security like Hazardrous goods and
                                    Fragile items . We will provide a service to make sure the items are handled as
                                    securely as possible</div>
                            </div>
                            <div class="col-md-4 mt-5 pb-sm-2 pb-md-0 "><img class="col-12 " src="./img/Time.png"
                                    alt="Arrange time"></div>
                            <div class="card col-md-8 mt-5">
                                <h3>Arrange Time</h3>
                                <hr />
                                <div class="card-body">Do you have a requirement for when the recepient would receive
                                    their items? Just tell us and we will arrange it for you </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- Content End -->


<?php
// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>