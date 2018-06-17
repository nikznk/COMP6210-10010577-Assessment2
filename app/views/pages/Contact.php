<?php include(APPROOT . "/views/includes/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="contact-clean">
                <form action="<?php echo URLROOT." pages/Contact "; ?>" method="POST">
                    <h2 class="text-center">
                        <?php echo $data['ctitle']; ?>
                    </h2>
                    <div class="form-group">
                        <input class="form-control" name="FNAME" type="text" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="Email" placeholder="Email">
                        <br>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="14" name="Message" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
                foreach($data["content"] as $content) {
                    ?>

        <div class="col-sm-12">

            <p>
                <?php echo $content["CONTENT"]; ?>
            </p>
        </div>

        <?php
                }
            ?>
</div>
</section>

<?php include(APPROOT . "/views/includes/footer.php"); ?>