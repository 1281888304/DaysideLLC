<?php

//Turn on error reporting -- this is critical!
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

require('check-login.php');

//header tab title
$title = "Admin Page";
require('header.php');

?>
<section class="admin-section mt-5 mx-auto">
    <div class="row admin-list-div mt-md-5">
        <div class="col-lg-3">
            <p class="admin-list text-center">
                <a id="contacts" href="showCustomer.php" class="text-center">
                    <i class="fas fa-address-book fa-3x">&nbsp;</i>Contacts</a></p>
        </div>
        <div class="col-lg-3">
            <p class="admin-list text-center"><a id="testimonials" href="testimonials.php" class="text-center">
                    <i class="fas fa-comment-dots fa-3x">&nbsp;</i>Testimonials</a></p>
        </div>
        <div class="col-lg-3">
            <p class="admin-list text-center"><a id="services" href="services.php" class="text-center">
                    <i class="fas fa-hand-holding-heart fa-3x">&nbsp;</i>Services</a></p>
        </div>
        <div class="col-lg-3">
            <p class="admin-list text-center"><a id="bio" href="bio.php" class="text-center">
                    <i class="fas fa-user-tie fa-3x">&nbsp;</i>Bio</a></p>
        </div>
    </div>


</section>

<div class="fixed-bottom position-fixed mb-0">
<?php
require('footer.php');
?>
</div>
