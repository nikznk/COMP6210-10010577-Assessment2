<?php include(APPROOT . "/views/includes/header.php"); ?>


<div class="col-md-12">
    <h2 class="text-center">Movie of Month</h2>
    <img src="<?php echo URLROOT;?>images/Avengers-banner.jpg" class="img-fluid">
</div>

<div class="col-md-12 d-flex justify-content-center align-items-center">
    <input id="movieinput" class="form-control-lg" type="search" placeholder="Enter name of movie or tv shows">
</div>

<div class="d-flex justify-content-center align-items-center searchbutton">
    <button onclick="moviesearch()" class="btn btn-primary btn-lg" type="submit">Search</button>
</div>
<?php include(APPROOT . "/views/includes/moviesearch.php"); ?>
</section>

<div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include(APPROOT . "/views/includes/signup.php"); ?>
            </div>
        </div>
    </div>
</div>




<?php include(APPROOT . "/views/includes/footer.php"); ?>