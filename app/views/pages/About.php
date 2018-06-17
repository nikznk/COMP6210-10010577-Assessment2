<?php include(APPROOT . "/views/includes/header.php"); ?>
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
        <div class="testimonials">
            <div class="container">
                <div class="intro">
                    <h1 class="text-center">
                        <br>Testimonials
                    </h1>
                    <p class="text-center">
                        <br>Our customers love us! Read what they have to say below.

                    </p>
                </div>
                <div class="row people">
                    <?php
                  foreach($data["testimonials"] as $testimonials) {
                      ?>
                        <div class="col-md-6 col-lg-4 item">
                            <div class="box">
                                <?php echo $testimonials["CONTENT"];?>
                                <div class="author">
                                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials["image"];?>">
                                    <h5 class="text-center">
                                        <?php echo $testimonials["NAME"];?>
                                    </h5>
                                    <p class="text-center">
                                        <?php echo $testimonials["Designation"];?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                  }
                  ?>




                </div>
            </div>
        </div>
        </section>
        <?php include(APPROOT . "/views/includes/footer.php"); ?>