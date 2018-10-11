
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
                <a class="nav-link <?php if($item == 1) {echo 'active';} ?>" id="v-pills-type-tab" data-toggle="pill" href="#v-pills-type"
                    role="tab" aria-controls="v-pills-type" aria-selected="true">Delivery Speed</a>
                
                <a class="nav-link <?php if($item == 2) {echo 'active';} ?>" id="v-pills-rates-tab" data-toggle="pill" href="#v-pills-rates" role="tab"
                    aria-controls="v-pills-rates" aria-selected="false">Rates</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade <?php if($item == 1) {echo 'show active';} ?>" id="v-pills-type" role="tabpanel" aria-labelledby="v-pills-type-tab">
                    <!--start from here-->
                    <h2 class="p-5">Delivery Speed</h2>
                        <ul class="list-unstyled">
                            <li class="media pb-5">
                                <img class="mr-3 col-md-4 col-5" src="./img/Card0.png" alt="Service1">
                                <div class="media-body col-md-6 col-sm-6">
                                    <h5 class="mt-0 mb-1">Supermail Fast</h5>
                                    <ul><li>Same Day Delivery</li><li>maximum weight 25 kg</li><li>within the country</li></ul>
                                </div>
                            </li>
                            <br />
                            <li class="media pb-5">
                                <img class="mr-3 col-md-4 col-5" src="./img/Card1.png" alt="Service2">
                                <div class="media-body col-md-6 col-sm-6">
                                    <h5 class="mt-0 mb-1">Supermail 1</h5>
                                    <ul><li>Over one night delivery</li><li>maximum weight 25 kg</li></ul>
                                </div>
                            </li>
                            <br />
                            <li class="media pb-5">
                                <img class="mr-3 col-md-4 col-5" src="./img/Card2.png" alt="Service2">
                                <div class="media-body col-md-6 col-sm-6">
                                    <h5 class="mt-0 mb-1">Supermail 2</h5>
                                    <ul><li>3 Days Delivery</li><li>maximum weight 25 kg</li></ul>
                                </div>
                            </li>
                            <br />
                            <li class="media pb-5">
                                <img class="mr-3 col-md-4 col-5" src="./img/Card3.png" alt="Service2">
                                <div class="media-body col-md-6 col-sm-6">
                                    <h5 class="mt-0 mb-1">Supermail Reguler</h5>
                                    <ul><li>5-7 Days delivery</li><li>maximum weight 25 kg</li></ul>
                                </div>
                            </li>
                            <br />
                            <li class="media pb-5">
                                <img class="mr-3 col-md-4 col-5" src="./img/Card4.png" alt="Service2">
                                <div class="media-body col-md-6 col-sm-6">
                                    <h5 class="mt-0 mb-1">Supermail Cargo</h5>
                                    <ul><li>5-7 Days Delivery</li><li>Over than 25 kg</li></ul>
                                </div>
                            </li>
                        </ul>
                    
                    <!--endhere-->
                </div>
                
                <div class="tab-pane fade <?php if($item == 2) {echo 'show active';} ?>" id="v-pills-rates" role="tabpanel" aria-labelledby="v-pills-rates-tab">
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
include './view/footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>