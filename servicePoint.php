<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include 'header.html';
?>
<!-- Mobile -->
<main class="container-fluid  d-md-none">
<div class="form-group">
    <label for="address">Input your address here</label>
    <input type="text" class="form-control" name="address" id="" placeholder="Address">
    <button type="submit" class="btn btn-primary">Find</button>
</div>


</main>
<!-- Mobile End -->

<!-- Computer -->
<main class="container-fluid d-flex flex-row">
    <div class="col-md-6">
        <h4>SERVICE POINT NEAREST WITH YOU</h4>
        <p>List Supermail Service Point</p>
        <ol>
            <li>
            Avenal Supermail Depot<br />
            330 Dee Street Avenal 9810<br />
            Phone: 032199300
            </li>
            <li>
            Avenal Supermail Depot<br />
            330 Dee Street Avenal 9810<br />
            Phone: 032199300
            </li>
            <li>
            Avenal Supermail Depot<br />
            330 Dee Street Avenal 9810<br />
            Phone: 032199300
            </li>
        
        </ol>
    

    </div>
    <div class="col-md-6">
        <h4>SERVICE POINT NEAREST WITH YOU</h4>
    </div>

    

</main>
<!-- Computer End -->


<?php
// This footer.html include footer and JS libs.
include 'footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>