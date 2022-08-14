const user_username_regex = new RegExp("^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{1,}]{6,}$");
const user_password_regex = new RegExp("^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{1,}]{10,}$");
/* As of July 17, 2022, the most the RegEx string to use for email addresses is RFC 5322. Link: http://emailregex.com/*/
const email_regex = new RegExp("/^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$/");
const [login_username, login_password] = [document.querySelector(".input_for_login_username"),
    document.querySelector(".input_for_login_password")];
