<form class="feedback" action="<?php echo URLROOT." pages/login "; ?>" method="POST">
    <div class="modal-body">
        <div class="container">
            <h1>
                <?php 
                        if(!empty($data['title'])){
                        echo $data['title'];  
                        } else{ ?> Login
                <?php } ?>
            </h1>
            <hr>
            <label for="username">
                <b>Username</b>
            </label>
            <br>
            <input type="text" class="form-control" placeholder="Username" name="User_Name" required>
            <br>

            <label for="psw">
                <b>Password</b>
            </label>
            <br>
            <input type="password" class="form-control" placeholder="Enter Password" name="Password" required>
            <br>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log In</button>
    </div>
</form>