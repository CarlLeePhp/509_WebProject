
<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main

include './view/login.html';
// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>
    <script>
        var vm = new Vue({
            el: '#main',
            data: {
                email: "",
                password: "",
                result: ""
            },
            methods: {
                // Onclick event for the button
                btnHandler() {
                    // 
                    console.log("You get me!")
                    var urllink = "<?php echo $url; ?>" + 'model/checkSign.php?email=' + this.email + '&password=' + this.password
                    this.$http.get(urllink).then(res => {
                        this.result = res.body
                    }, res => {
                        this.result = res
                    })             
                }
            }
        })
    </script>



</body>
</html>