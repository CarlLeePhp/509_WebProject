<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main
include './view/index.html';

// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.

include '../conf_supermail.php';
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
                    var urllink = "<?php echo $url; ?>" + 'model/packageID.php?packageID=' + this.packageID
                    this.$http.get(urllink).then(res => {
                        this.result = res.body
                    }, res => {
                        this.result = res
                    })                    
                }
            }
        })

        // I do not want to use jQuery, but I can not find how to address it by Vue.js
        $("#packageID").keyup(function(event) {
            if (event.keyCode === 13){
                $("#btn").click();
            }
        });
    </script>
</body>

</html>