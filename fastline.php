
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
        terms: "<ul><li>Same Day Delivery</li><li>maximum weight 25 kg</li><li>within the country</li></ul>", // for shipment tab, item 2
        deliverySpeeds: [
            {id: 0, name: "Supermail Fast"},
            {id: 1, name: "Supermail 1"},
            {id: 2, name: "Supermail Reguler"},
            {id: 3, name: "Supermail Cargo"}
        ],

        // for progress
        progressClass0: "progress-bar",
        progressClass1: "progress-bar bg-dark",
        progressClass2: "progress-bar bg-dark",
        progressClass3: "progress-bar bg-dark",
        progressClass4: "progress-bar bg-dark",
        progressClass5: "progress-bar bg-dark",

        // for Sender, Package Information
        sender: {
            name: "",
            contactName: "",
            street: "",
            apartment: "",
            department: "",
            city: "1",
            state: "",
            postcode: "",
            country: "",
            email: "",
            phone: "",
            extension: ""
        },
        packageReturn: {
            street: "",
            apartment: "",
            department: "",
            city: "1",
            state: "",
            postcode: ""
        },
        dest: {
            name: "",
            street: "",
            apartment: "",
            department: "",
            city: "1",
            state: "",
            postcode: "",
            country: ""

        },
        packageInformation: {
            type: "",
            number: "1",
            weight: "",
            isPickup: false,
            shippingDate: ""
        },
        shipment: {
            orderNo: "",
            deliverySpeedID: 0,
            isDangerous: false,
            isHazardous: false,
            isDoortoDoor: false,
            isRepackaging: false,
            shipmentType: "shipmentType1",
            otherInquiry: ""

        },
        packageTypes: [
            "Mail",
            "Document",
            "Goods",
            "Cargo"
        ],
        rates: {
            unitPrice: 10,  // Same group : $10 ? $20
            ticket: 1,
            basicPrice: 0,  // unitPrice * Tickets
            extraPrice: 0,
            GST: 0,
            totalPrice: 0

        },

        isSentUpdate : false,
        // Other data
        places: [
                {id: 1, name: "Invercargill", group: 1},
                {id: 2, name: "Dunedin", group: 1},
                {id: 3, name: "Christchurch", group: 1},
                {id: 4, name: "Auckand", group: 2},
                {id: 5, name: "Wellington", group: 2},
                {id: 6, name: "Sydney", group: 2},
                {id: 7, name: "Perth", group: 2}

            ]

        
    },
    methods: {
        // onclick Next
        nextHandler: function(){
            
            switch(this.stage){
                case 1:
                   
                    $('#pills-package-tab').tab('show')
                    this.progressClass1 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 2:
                 
                    $('#pills-shipment-tab').tab('show')
                    this.progressClass2 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 3:
                 
                    $('#pills-rates-tab').tab('show')
                    this.progressClass3 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 4:
                
                    $('#pills-payment-tab').tab('show')
                    this.progressClass4 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 5:
                 
                    $('#pills-notification-tab').tab('show')
                    this.progressClass5 = "progress-bar"
                    scroll(0, 0)
                    this.stage += 1
                    break;
                case 6:
                    $('#pills-origin-tab').tab('show')
                    this.progressClass1 = "progress-bar bg-dark"
                    this.progressClass2 = "progress-bar bg-dark"
                    this.progressClass3 = "progress-bar bg-dark"
                    this.progressClass4 = "progress-bar bg-dark"
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage = 1

                    break;
            }

        },
        // to caculate rate
        ratesHandler: function() {
            // Jump to rates page
            $('#pills-rates-tab').tab('show')
            this.progressClass3 = "progress-bar"
            scroll(0, 0)
            this.stage += 1

            // Get unit price
            if(this.places[Number(this.sender.city) -1].group == this.places[Number(this.dest.city) -1].group) {
                this.rates.unitPrice = 10;
            } else {
                this.rates.unitPrice = 20;
            }

            // Basic Price
            this.rates.ticket = Number(this.packageInformation.weight) / 5
            if(this.rates.ticket > (Math.round(this.rates.ticket))) {
                this.rates.ticket = Math.round(this.rates.ticket) + 1
            } else {
                this.rates.ticket = Math.round(this.rates.ticket) - 1
            }
            this.rates.basicPrice = this.rates.unitPrice * this.rates.ticket

            // extra sevices
            if (this.shipment.isDangerous) {
                this.rates.extraPrice += 5;
            }
            if (this.shipment.isHazardous) {
                this.rates.extraPrice += 5;
            }
            if (this.shipment.isDoortoDoor) {
                this.rates.extraPrice += 5;
            }
            if (this.shipment.isRepackaging) {
                this.rates.extraPrice += 5;
            }

            // GST 10%
            this.rates.totalPrice = this.rates.basicPrice + this.rates.extraPrice
            this.rates.GST = this.rates.totalPrice * 0.1
            
            // Total Price
            this.rates.totalPrice = this.rates.totalPrice + this.rates.GST
        },
        // onclick previous
        previousHandler: function() {
            switch(this.stage){
                case 3:
                    $('#pills-package-tab').tab('show')
                    this.progressClass2 = "progress-bar bg-dark"
                    this.progressClass3 = "progress-bar bg-dark"
                    this.progressClass4 = "progress-bar bg-dark"
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage -= 1
                    break;
                case 4:
                    $('#pills-shipment-tab').tab('show')
                    this.progressClass3 = "progress-bar bg-dark"
                    this.progressClass4 = "progress-bar bg-dark"
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage -= 1
                    break;
                case 5:   
                    $('#pills-rates-tab').tab('show')
                    this.progressClass4 = "progress-bar bg-dark"
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage -= 1
                    break;
                case 6:
                    $('#pills-payment-tab').tab('show')
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage -= 1
                    break;
                case 2:
                    $('#pills-origin-tab').tab('show')
                    this.progressClass1 = "progress-bar bg-dark"
                    this.progressClass2 = "progress-bar bg-dark"
                    this.progressClass3 = "progress-bar bg-dark"
                    this.progressClass4 = "progress-bar bg-dark"
                    this.progressClass5 = "progress-bar bg-dark"
                    scroll(0, 0)
                    this.stage -= 1
                    break;
            }
        },
        getDeliverySpeedTerm: function() {
            switch (this.shipment.deliverySpeedID) {
                case 0:
                    this.terms = "<ul><li>Same Day Delivery</li><li>maximum weight 25 kg</li><li>within the country</li></ul>"
                    break;
                case 1:
                    this.terms = "<ul><li>Over one night delivery</li><li>maximum weight 25 kg</li></ul>"
                    break;
                case 2:
                    this.terms = "<ul><li>3-7 Days delivery</li><li>maximum weight 25 kg</li></ul>"
                    break;
                case 3:
                    this.terms = "<ul><li>5-7 Days Delivery</li><li>Over than 25 kg</li></ul>"
                    break;
                
            }

        }
        
    }
})


</script>


</body>

</html>