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
                <a class="nav-link active" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer"
                    role="tab" aria-controls="v-pills-customer" aria-selected="true">Customer Support</a>
                <a class="nav-link" id="v-pills-office-tab" data-toggle="pill" href="#v-pills-office" role="tab"
                    aria-controls="v-pills-office" aria-selected="false">Supermail Office</a>
                <a class="nav-link" id="v-pills-courier-tab" data-toggle="pill" href="#v-pills-courier" role="tab"
                    aria-controls="v-pills-courier" aria-selected="false">Supermail Courier</a>
                <a class="nav-link" id="v-pills-faq-tab" data-toggle="pill" href="#v-pills-faq" role="tab"
                    aria-controls="v-pills-faq" aria-selected="false">FAQ</a>
            </div>
        </div>
        <div class="col-md-9" style="height: 300px;">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                    <div class="flex-row" style="background-color:gray; height:150px;">
                        Customer Support
                    </div>
                    <div class="d-flex flex-row justify-content-around">
                        <div>
                            <h2>Column One</h2>
                        </div>
                        <div>
                            <h2>Column Two</h2>
                        </div>
                        <div>
                            <h2>Column Three</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-office" role="tabpanel" aria-labelledby="v-pills-office-tab">
                    <h4>Office & Facility</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade" id="v-pills-courier" role="tabpanel" aria-labelledby="v-pills-courier-tab">
                    <h4>Courier Location</h4>
                    <p>Customer could do something, Customer could do something, Customer could do something.</p>
                </div>
                <div class="tab-pane fade" id="v-pills-faq" role="tabpanel" aria-labelledby="v-pills-faq-tab">
                    <h4>FAQ</h4>
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