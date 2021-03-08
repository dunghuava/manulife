<?php 
    $aboutus = $this->Web_M->q("select * from db_other where other_id=29");
?>
<section class="font18">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-uppercase">Liên hệ</h3>
                <p><?=$aboutus[0]['other_content'] ?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m11!1m3!1d102052.10546967645!2d106.6264246!3d10.8108238!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1603633617034!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<?php include ('form-contact.php') ?>

