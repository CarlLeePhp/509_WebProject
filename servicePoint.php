<?php
// This header.html include the content from DOCTYPE to the end of navigation.
include './view/header.html';
?>
<main class="container-fluid">
<div class="d-flex flex-row justify-content-around">
    <div class="d-none d-md-block col-md-5 m-2" >
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
            <button type="submit" class="btn btn-primary mt-2">Find</button>
        </form>
        <div class="d-flex flex-column align-items-center border mt-2" style="height:500px;">
            <!--The div element for the map -->
            <div class="gmap_canvas mb-5">
                <iframe width="320" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=sit%20invercargill&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"></iframe><br /><a class="small text-muted" href="https://www.pureblack.de"> web Reference :
                    website erstellen lassen</a>
            </div>
        </div>
    </div>
</div>
<div class="d-flex flex-row justify-content-center">
    <p class="m-4">Please Call Our Customer Service for Support</p>
</div>
<div class="d-flex flex-row justify-content-center">
    <button class="btn btn-success m-3">CALL US</button>
</div>
</main>
<!-- Computer End -->


<?php
// This footer.html include footer and JS libs.
include './view/footer.html';

// JS for this page should be writen after here.
?>




</body>

</html>