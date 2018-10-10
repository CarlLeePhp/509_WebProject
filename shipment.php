
<?php
// Get which part of this page wanted.
$item = 1;
$item = $_GET["n"];
?>

<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include 'header.html';
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
                <a class="nav-link <?php if($item == 3) {echo 'active';} ?>" id="v-pills-rates-tab" data-toggle="pill" href="#v-pills-rates" role="tab"
                    aria-controls="v-pills-rates" aria-selected="false">Rates</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade <?php if($item == 1) {echo 'show active';} ?>" id="v-pills-super" role="tabpanel" aria-labelledby="v-pills-super-tab">
                    <h4>Super Service</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade <?php if($item == 2) {echo 'show active';} ?>" id="v-pills-freight" role="tabpanel" aria-labelledby="v-pills-freight-tab">
                    <!--start from here-->

                        <div class="container">
                            <img src="./img/FreightBanner.jpg" class="col-12" />
                            
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
                                    <br />
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
                <div class="tab-pane fade <?php if($item == 3) {echo 'show active';} ?>" id="v-pills-rates" role="tabpanel" aria-labelledby="v-pills-rates-tab">
                    <h4>Rates</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- Content End -->


<?php
// This footer.html include footer and JS libs.
include 'footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>