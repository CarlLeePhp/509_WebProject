<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include 'header.html';
?>

<!-- Content -->
<main class="container-fluid" id="main">
    <!-- Mobile -->
    <div class="d-md-none" style="background-image: url('./img/background.jpg'); background-position: center; background-size: cover;">
        <div class="d-flex flex-column p-2">
            <h2 class="text-white pt-3">FAST TRACKING</h2>
            <input type="text" name="" placeholder="Package ID" v-model="packageID" id="IDm">
            <br>
            <input type="button" class="btn btn-success" data-toggle="modal" data-target="#mobileModal" value="FIND" @click="btnHandler" id="btnm">
        </div>


        <!-- Modal -->
        <div class="modal fade" id="mobileModal" tabindex="-1" role="dialog" aria-labelledby="mobileModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mobileModalLabel">Package Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" v-text="result">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column justify-content-center p-2">
            <img src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
            <h5 class="text-white text-center">DELIVERY RATE</h5>
        </div>

        <div class="d-flex flex-column justify-content-center p-2">
            <img src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
            <h5 class="text-white text-center">SERVICE POINT</h5>
        </div>

        <div class="d-flex flex-column justify-content-center p-2">
            <img src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
            <h5 class="text-white text-center">SPECIAL SERVICE</h5>
        </div>
    </div>
    <!-- Computer -->
    <div class="d-none d-md-flex flex-column" style="background-image: url('./img/background.jpg'); background-position: center; background-size: cover;">
        <div class="d-flex flex-row mt-5"></div>
        <div class="d-flex flex-row mt-5"></div>
        <div class="d-flex flex-row mt-5"></div>
        <img src="./img/slogan.png" class="img-fluid col-md-6 align-self-end pr-5" alt="Queenstown">
        <div class="d-flex flex-row mt-5"></div>
        <div class="d-flex flex-row mt-5"></div>
        <div class="d-flex flex-column">
            <h2 class="text-white pt-3 offset-md-3 col-md-6 text-center">FAST TRACKING</h2>
            <div class="input-group mb-3 justify-content-center">
            <input type="text" class="form-control col-md-4" placeholder="Package ID" aria-label="Package ID" id="IDc" v-model="packageID" aria-describedby="basic-addon1">
            <br>
            <!--
            <input type="button" class="btn btn-success offset-md-5 col-md-2" value="FIND" data-toggle="modal" data-target="#computerModal" @click="btnHandler" id="btnc">
-->
                <div class="input-group-append">
                    <button class="btn btn-dark" value="FIND" id="btnc" data-toggle="modal" data-target="#computerModal" @click="btnHandler" style="opacity:0.7" type="button"><img src="./img/magnifying.png" style="height:16px"></button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="computerModal" tabindex="-1" role="dialog" aria-labelledby="computerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="computerModalLabel">Package Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" v-text="result">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-row justify-content-around">

            <div class="d-flex flex-column col-4 justify-content-center p-2">
                <div class="jumbotron" style="opacity: 0.5; padding: 7em; margin-bottom: 0"></div>
                <h5 class="text-white text-center">DELIVERY RATE</h5>
            </div>
            <div class="d-flex flex-column col-4 justify-content-center p-2">
                <div class="jumbotron" style="opacity: 0.5; padding: 7em; margin-bottom: 0"></div>
                <h5 class="text-white text-center">SERVICE POINT</h5>
            </div>

            <div class="d-flex flex-column col-4 justify-content-center p-2">
                <div class="jumbotron" style="opacity: 0.5; padding: 7em; margin-bottom: 0"></div>
                <h5 class="text-white text-center">SPECIAL SERVICE</h5>
            </div>


        </div>

    </div>

    <!-- News and Information -->
    <div>
        <h4 class="mt-3">NEWS and INFORMATION</h4>
        <div class="d-flex flex-column flex-md-row justify-content-around">
            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">Infor-1</h5>
                <p>Text for infor-1</p>
                <a href="#">Detail</a>
            </div>

            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">Infor-2</h5>
                <p>Text for Infor-2</p>
                <a href="#">Detail</a>
            </div>

            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">Infor-3</h5>
                <p>Text for Infor-3</p>
                <a href="#">Detail</a>
            </div>

            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">Infor-4</h5>
                <p>Text for Infor-4</p>
                <a href="#">Detail</a>
            </div>

        </div>
    </div>
    <!-- News and Information END -->

    <!-- SUPPERMAIL PROMO -->
    <div>
        <h4 class="mt-3">SUPPERMAIL PROMO</h4>
        <div class="d-flex flex-column flex-md-row justify-content-around">
            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">PROMO-1</h5>
                <p>Text for PROMO-1</p>
                <a href="#">Detail</a>
            </div>

            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">PROMO-2</h5>
                <p>Text for PROMO-2</p>
                <a href="#">Detail</a>
            </div>

            <div class="d-flex flex-column justify-content-center p-2">
                <img class="img-fluid" src="./img/300x200.png" alt="300x200" style="opacity: 0.3;">
                <h5 class="text-white text-center">PROMO-3</h5>
                <p>Text for PROMO-3</p>
                <a href="#">Detail</a>
            </div>

        </div>
    </div>
    <!-- SUPPERMAIL PROMO END -->

</main>
<!-- Content End -->


<?php
// This footer.html include footer and JS libs.
include 'footer.html';

// JS for this page should be writen after here.
?>

    <script>
        var vm = new Vue({
            el: '#main',
            data: {
                packageID: "",
                result: "",
            },
            methods: {
                // Onclick event for the button
                btnHandler() {
                    // 
                    var urllink = 'http://localhost/data.php?packageID=' + this.packageID
                    this.$http.get(urllink).then(res => {
                        this.result = res.body
                    }, res => {
                        this.result = res
                    })                    
                }
            }
        })

        // I do not want to use jQuery, but I can not find how to address it by Vue.js
        $("#IDc").keyup(function(event) {
            if (event.keyCode === 13){
                $("#btnc").click();
            }
        });

        $("#IDm").keyup(function(event) {
            if (event.keyCode === 13){
                $("#btnm").click();
            }
        });
    </script>
</body>

</html>