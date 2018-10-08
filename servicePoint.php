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
<div class="container-fluid d-flex flex-row justify-content-around">
    <div class="col-md-5 m-2" >
        <h4>SERVICE POINT NEAREST WITH YOU</h4>
        <div class="border" style="height:500px;">
        
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
    

    </div>
    <div class="col-md-5 m-2">
        <form action="#" class="form-inline">
            <label for="address">Input Your Address Here: </label>
            <input type="text" name="address" id="" class="form-control mr-sm-2 ml-sm-2" placeholder="Address">
            <button type="submit" class="btn btn-primary">Find</button>
        </form>
        <div class="d-flex flex-column justify-content-center align-items-center border" style="height:500px;">
            <h4>Google Map</h4>
            <p>Showing the close Service Point Depot to Customer on the map.</p>
        </div>
    </div>
</div>
<div class="container-fluid d-flex flex-row justify-content-center">
    <p class="m-4">Please Call Our Customer Service for Support</p>
    <button class="btn btn-success m-3">CALL US</button>
</div>

<!-- Computer End -->


<?php
// This footer.html include footer and JS libs.
include 'footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>