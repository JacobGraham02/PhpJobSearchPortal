<?php

use Jakeg\PhpJobSearchPortal\Controller\HomeController;
$pageTitle = 'Register your account';
include './common/header.php';
?>

<main id="website_body_main">

    <form method="post" action="../../form_post_request">
        <fieldset id="fieldset_for_username">
            <label for="username" class="label_for_register_username"></label>
            <input class="input_for_register_username" name="username" id="username" required type="text"/>
            <span id="span_for_username_messages"></span>
        </fieldset>

        <fieldset id="fieldset_for_email">
            <label for="email" class="label_for_register_email"></label>
            <input class="input_for_register_email" name="email" id="email" required type="text"/>
            <span id="span_for_email_messages"></span>
        </fieldset>

        <fieldset id="fieldset_for_password">
            <label for="password" class="label_for_register_password"></label>
            <input class="input_for_register_password" name="password" id="password" required type="password"
                   pattern="^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+=}{1,}]{10,}$"/>
            <span id="span_for_password_messages"></span>
        </fieldset>

        <fieldset id="fieldset_for_confirm_password">
            <label for="confirm_password" class="label_for_register_confirm_password"></label>
            <input class="input_for_register_confirm_password" name="confirm_password" id="confirm_password" required type="password"
                   pattern="^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+=}{1,}]{10,}$"/>
            <span id="span_for_confirm_password_messages"></span>
        </fieldset>

        <button type="submit" id="btn_register_user">Create account</button>
    </form>
</main>
<script src="../../public/javascript/validate_register.js"></script>

<?php
include './common/footer.php';
?>