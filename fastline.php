
<?php
// Get which part of this page wanted.
$item = 1;
$item = $_GET["n"];
?>

<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// main
include './view/fastline.html';

// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>

<script>
var vm = new Vue({
    el: '#main',
    data: {
        stage: 1, // pointout which stage now
        terms: "This is the terms for Fast Speed.", // for shipment tab, item 2
        deliverySpeed: "1",

        // for progress
        progressClass0: "progress-bar",
        progressClass1: "progress-bar bg-dark",
        progressClass2: "progress-bar bg-dark",
        progressClass3: "progress-bar bg-dark",
        progressClass4: "progress-bar bg-dark",
        progressClass5: "progress-bar bg-dark"

        
    },
    methods: {
        // onclick Next
        nextHandler: function(){
            
            switch(this.stage){
                case 1:
                    $('#pills-origin-tab').tab('dispose')
                    $('#pills-package-tab').tab('show')
                    this.progressClass1 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 2:
                    $('#pills-package-tab').tab('show')
                    $('#pills-shipment-tab').tab('show')
                    this.progressClass2 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 3:
                    $('#pills-shipment-tab').tab('dispose')
                    $('#pills-rates-tab').tab('show')
                    this.progressClass3 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 4:
                    $('#pills-rates-tab').tab('dispose')
                    $('#pills-payment-tab').tab('show')
                    this.progressClass4 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 5:
                    $('#pills-payment-tab').tab('dispose')
                    $('#pills-notification-tab').tab('show')
                    this.progressClass5 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 6:
                    alert('It is finished!')

                    break;
            }

        },
        getDeliverySpeedTerm: function() {
            switch (this.deliverySpeed) {
                case "1":
                    this.terms = "This is the terms for Fast Speed."
                    break;
                case "2":
                    this.terms = "This is the terms for Normal Speed."
                    break;
                
            }

        }
        
    }
})


</script>


</body>

</html>