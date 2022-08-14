const user_username_regex = new RegExp("^[a-z{3,}A-Z{1,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{0,}]{2,}$");
const user_password_regex = new RegExp("^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+= }{1,}]{10,}$");
/* As of July 17, 2022, the most the RegEx string to use for email addresses is RFC 5322. Link: http://emailregex.com/*/
const email_regex = new RegExp("/^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$/");

const confirmation_messages_map = new Map();
confirmation_messages_map.set('username_messages_span', document.querySelector("#span_for_username_messages"));
confirmation_messages_map.set('password_messages_span', document.querySelector("#span_for_password_messages"));
confirmation_messages_map.set('password_confirm_messages_span', document.querySelector("#span_for_confirm_password_messages"));
confirmation_messages_map.set('email_confirm_messages_span', document.querySelector("#span_for_email_messages"));

const register_inputs_map = new Map();
register_inputs_map.set('register_username', document.querySelector(".input_for_register_username"));
register_inputs_map.set('register_password', document.querySelector(".input_for_register_password"));
register_inputs_map.set('register_confirm_password', document.querySelector(".input_for_register_confirm_password"));
register_inputs_map.set('input_for_register_email', document.querySelector(".input_for_register_email"));

for (const value of register_inputs_map.values()) {
    value.addEventListener('keydown', function() {
        console.log("hello");
    });
}

// register_username.addEventListener('keydown', function () {
//
// });
//
// [register_password, register_confirm_password].forEach(element => element.addEventListener('keydown', function() {
//
// }));