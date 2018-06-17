<?php include(APPROOT . "/views/includes/header.php"); ?>

<h1 class="text-center">FAQs Page</h1>

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

        <div class="contact-clean col-lg-12">
            <form class="feedback" action="<?php echo URLROOT." pages/FAQs "; ?>" method="POST">
                <h2 class="text-center">
                    <?php echo $data['ftitle']; ?>
                </h2>
                <p class="text-center">
                    <br>Please let us know your experience with our Website&nbsp;
                </p>
                <div class="form-group">
                    <input class="form-control" name="FNAME" type="text" placeholder="Name">
                </div>
                <div class="form-group">
                    <input class="form-control" name="LNAME" type="text" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="form-control" name="Email" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <h6>Rate My Website</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3 </label>
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio1" value="4">
                        <label class="form-check-label" for="inlineRadio1">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio2" value="5">
                        <label class="form-check-label" for="inlineRadio2">5</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio3" value="6">
                        <label class="form-check-label" for="inlineRadio3">6</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="7">
                        <label class="form-check-label" for="inlineRadio1">7</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio2" value="8">
                        <label class="form-check-label" for="inlineRadio2">8</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio3" value="9">
                        <label class="form-check-label" for="inlineRadio3">9</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="Rating" name="inlineRadioOptions" id="inlineRadio3" value="10">
                        <label class="form-check-label" for="inlineRadio3">10</label>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="14" name="Message" placeholder="Message"></textarea>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>

        </section>

        <?php include(APPROOT . "/views/includes/footer.php"); ?>