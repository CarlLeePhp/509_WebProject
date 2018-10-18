<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';

// Main
include './view/signup.html';


// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>

<script>
document.getElementById('Privacy').onchange = function () {
    document.getElementById('Register').disabled = !this.checked;
};

document.getElementById('PrivacyC').onchange = function () {
    document.getElementById('RegisterC').disabled = !this.checked;
};
</script>


</body>
</html>