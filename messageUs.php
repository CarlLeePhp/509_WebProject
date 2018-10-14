<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main
include './view/messageUs.html';

// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>
<script>
    document.getElementById('yourBox').onchange = function () {
        document.getElementById('yourText').disabled = !this.checked;
    };
</script>

</body>

</html>