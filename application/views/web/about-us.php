<?php 
    $aboutus = $this->Web_M->q("select * from db_other where other_id=29");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12 bg-secondary"><br>
                <h1 style="color:#fff">
                   <?=$aboutus[0]['other_description'] ?>
                </h1><br>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12"><br>
                <p><?=$aboutus[0]['other_content'] ?></p>
            </div>
        </div>
    </div>
</section>

<?php include ('form-contact.php') ?>

