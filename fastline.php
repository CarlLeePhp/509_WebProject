
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




</body>

</html>