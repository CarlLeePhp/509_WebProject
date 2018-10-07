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
                <a class="nav-link active" id="v-pills-company-tab" data-toggle="pill" href="#v-pills-company"
                    role="tab" aria-controls="v-pills-company" aria-selected="true">COMPANY POTRAIT</a>
                <a class="nav-link" id="v-pills-ourcustomer-tab" data-toggle="pill" href="#v-pills-ourcustomer" role="tab"
                    aria-controls="v-pills-ourcustomer" aria-selected="false">OUR CUSTOMER</a>
                <a class="nav-link" id="v-pills-partnership-tab" data-toggle="pill" href="#v-pills-partnership" role="tab"
                    aria-controls="v-pills-partnership" aria-selected="false">PARTNERSHIP</a>
                <a class="nav-link" id="v-pills-award-tab" data-toggle="pill" href="#v-pills-award" role="tab"
                    aria-controls="v-pills-award" aria-selected="false">AWARD</a>
            </div>
        </div>
        <div class="col-md-9" style="height: 300px;">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
                    <h4>COMPANY POTRAIT</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade" id="v-pills-ourcustomer" role="tabpanel" aria-labelledby="v-pills-ourcustomer-tab">
                    <h4>OUR CUSTOMER</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade" id="v-pills-partnership" role="tabpanel" aria-labelledby="v-pills-partnership-tab">
                    <h4>PARTNERSHIP</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade" id="v-pills-award" role="tabpanel" aria-labelledby="v-pills-award-tab">
                    <h4>AWARD</h4>
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