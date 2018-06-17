<form class="feedback" action="<?php echo URLROOT." pages/signup "; ?>" method="POST">
    <div class="modal-body">
        <div class="container">
            <h1>
                <?php 
                        if(!empty($data['title'])){
                        echo $data['title'];  
                        }?>
            </h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <h5 class="font-weight-bold"> Username</h5>
            <div class="form-group">
                <input class="form-control" type="text" name="User_Name" placeholder="Username">
            </div>
            <label for="email">
                <b>Email</b>
            </label>
            <br>
            <input type="text" class="form-control" placeholder="Enter Email" name="Email" required>
            <br>

            <label for="psw">
                <b>Password</b>
            </label>
            <br>
            <input type="password" class="form-control" placeholder="Enter Password" name="Password" required>
            <br>

            <label for="psw-repeat">
                <b>Repeat Password</b>
            </label>
            <br>
            <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" required>
            <br>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our
                <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </div>
</form>