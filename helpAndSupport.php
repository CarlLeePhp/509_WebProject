<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main
include './view/helpAndSupport.html';

// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>

<script>
var vm = new Vue({
    el: '#main',
    data: {

    },
    methods: {
        toFAQ: function(){
            // $('#pills-origin-tab').tab('dispose')
            $('#v-pills-faq-tab').tab('show')
        }
    }
})

</script>


</body>

</html>