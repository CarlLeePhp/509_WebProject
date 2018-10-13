
<?php
// Get which part of this page wanted.
$item = 1;
$item = $_GET["n"];
?>

<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main
include './view/shipment.html';

// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>

<script>
    var vm = new Vue({
        el: '#main',
        data: {
            places: [
                {id: 1, name: "Invercargill", group: 1},
                {id: 2, name: "Dunedin", group: 1},
                {id: 3, name: "Christchurch", group: 1},
                {id: 4, name: "Auckand", group: 2},
                {id: 5, name: "Wellington", group: 2},
                {id: 6, name: "Sydney", group: 2},
                {id: 7, name: "Perth", group: 2}

            ],
            weight: 0,
            origin: "0",
            dest: "0",
            quoteResult: "The quote result will be here.",
            unitPrice: 10
        },
        methods: {
            getQuote(){
                // Check the input
                // 1. Origin and Dest can not be empty and the same
                // 2. Weight can not be empty and must be number
                if(this.origin == "0") {
                    this.quoteResult = "Please select a origin place."
                    return
                }
                if(this.dest == "0") {
                    this.quoteResult = "Please select a destination place."
                    return
                }

                if(this.origin == this.dest) {
                    this.quoteResult= "The origin and destination can not be the same place."
                    return
                }

                if(this.weight == "0") {
                    this.quoteResult= "The weight can not be empty."
                    return
                }

                if(!Number(this.weight)) {
                    this.quoteResult= "The weight must be a number."
                    return
                }

                // caculate the price
                if (this.places[Number(this.origin)-1].group == this.places[Number(this.dest)-1].group) {
                    this.unitPrice = 10;
                } else {
                    this.unitPrice = 20;
                }
                this.weight = Number(this.weight)
                var ticket = 0
                ticket = this.weight / 5
                if(ticket > (Math.round(ticket))) {
                    ticket = Math.round(ticket) + 1
                } else {
                    ticket = Math.round(ticket) - 1
                }

                var totalPrice = this.unitPrice * ticket

                this.quoteResult= "Total price is NZ$" + totalPrice;

            }
        }
    })

</script>


</body>

</html>