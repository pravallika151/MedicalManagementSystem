<?php 
    require_once dirname(__FILE__).'/include/header.php';
    require_once dirname(__FILE__).'/include/api.php';
    require_once dirname(__FILE__).'/include/navbar.php';
?>


    <div class="socialcodia">
        <div class="row">
            <div class="col l10 offset-l1 s12 m12" style="padding: 30px 0px 30px 10px;">
                <div class="card  z-depth-0">
                    <div class="card-content">
                        <div class="input-field">
                            <input type="text" name="locationName" id="locationName">
                            <label for="locationName blue-text">Enter Location Name</label>
                        </div>
                        <div class="input-field center">
                            <button type="submit" class="btn blue" onclick="addLocation()" name="btnAddLocation" id="btnAddLocation">Add Location</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php require_once dirname(__FILE__).'/include/sidenav.php'; ?>
<?php require_once dirname(__FILE__).'/include/footer.php'; ?>