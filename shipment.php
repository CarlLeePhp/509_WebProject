
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
        <div class="col-md-9" style="height: 300px;">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade <?php if($item == 1) {echo 'show active';} ?>" id="v-pills-super" role="tabpanel" aria-labelledby="v-pills-super-tab">
                    <h4>Super Service</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade <?php if($item == 2) {echo 'show active';} ?>" id="v-pills-freight" role="tabpanel" aria-labelledby="v-pills-freight-tab">
                    <h4>Freight Service</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
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