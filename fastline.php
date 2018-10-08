
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
        <ul class="nav nav-pills mb-3 d-flex flex-row" id="pills-tab" role="tablist">
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 1) {echo 'active';} ?>" id="pills-origin-tab" data-toggle="pill" href="#pills-origin" role="tab" aria-controls="pills-origin" aria-selected="true">ORIGIN</a>
            </li>
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 2) {echo 'active';} ?>" id="pills-package-tab" data-toggle="pill" href="#pills-package" role="tab" aria-controls="pills-package" aria-selected="false">PACKAGE</a>
            </li>
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 3) {echo 'active';} ?>" id="pills-shipment-tab" data-toggle="pill" href="#pills-shipment" role="tab" aria-controls="pills-shipment" aria-selected="false">SHIPMENT</a>
            </li>
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 4) {echo 'active';} ?>" id="pills-rates-tab" data-toggle="pill" href="#pills-rates" role="tab" aria-controls="pills-rates" aria-selected="false">RATES</a>
            </li>
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 5) {echo 'active';} ?>" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">PAYMENT</a>
            </li>
            <li class="nav-item col-md-2 text-center">
                <a class="nav-link <?php if($item == 6) {echo 'active';} ?>" id="pills-notification-tab" data-toggle="pill" href="#pills-notification" role="tab" aria-controls="pills-notification" aria-selected="false">NOTIFICATION</a>
            </li>
        </ul>
    <div class="tab-content ml-3 mr-3" id="pills-tabContent" style="height:500px;">
        <div class="tab-pane fade <?php if($item == 1) {echo 'show active';} ?>" id="pills-origin" role="tabpanel" aria-labelledby="pills-origin-tab">ORIGIN</div>
        <div class="tab-pane fade <?php if($item == 2) {echo 'show active';} ?>" id="pills-package" role="tabpanel" aria-labelledby="pills-package-tab">PACKAGE</div>
        <div class="tab-pane fade <?php if($item == 3) {echo 'show active';} ?>" id="pills-shipment" role="tabpanel" aria-labelledby="pills-shipment-tab">SHIPMENT</div>
        <div class="tab-pane fade <?php if($item == 4) {echo 'show active';} ?>" id="pills-rates" role="tabpanel" aria-labelledby="pills-rates-tab">RATES</div>
        <div class="tab-pane fade <?php if($item == 5) {echo 'show active';} ?>" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">PAYMENT</div>
        <div class="tab-pane fade <?php if($item == 6) {echo 'show active';} ?>" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">NOTIFICATION</div>
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