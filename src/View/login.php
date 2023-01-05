<?php
$pageTitle = 'Login to your account';
include './common/header.php';

?>

<main id="website_body_main">

    <form method="post" action="../../form_post_request">
        <h3>Username:</h3>
        <fieldset id="fieldset_for_username">
            <label for="username" class="label_for_login_username"></label>
            <input class="input_for_login_username" name="username" id="username" required type="text"
                   pattern="^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{1,}]{6,}$"/>
        </fieldset>

        <h3>Password:</h3>
        <fieldset id="fieldset_for_password">
            <label for="password" class="label_for_login_password"></label>
            <input class="input_for_login_password" name="password" id="password" required type="password"
                   pattern="^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{1,}]{10,}$"/>
        </fieldset>

        <button type="submit" id="btn_login_to_account">Log in to your account</button>
    </form>
</main>
<script src="../../public/javascript/validate_login.js"></script>

<?php
include './common/footer.php';
?>

