const user_username_regex = new RegExp("^[a-z{3,}A-Z{1,}0-9{1,}{!()-.?`~;:!@#$%^&*+=}{0,}]{2,}$");
const user_password_regex = new RegExp("^[a-z{3,}A-Z{3,}0-9{1,}{!()-.?`~;:!@#$%^&*+=}{1,}]{10,}$");
/* As of July 17, 2022, the most the RegEx string to use for email addresses is RFC 5322. Link: http://emailregex.com/*/
const email_regex = new RegExp("(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\\])");

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