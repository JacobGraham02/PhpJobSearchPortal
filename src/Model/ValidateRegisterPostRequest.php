<?php

namespace Jakeg\PhpJobSearchPortal\Model;

final class ValidateRegisterPostRequest extends AbstractValidate {

    public function __construct($request) {
        return $this->validateString('username', $request['username']);
    }

    protected function validateString($input_field_name, $input_field_value): bool
    {
        if (isset($this->regex_patterns_for_input_fields[$input_field_name])) {
            return preg_match($this->regex_patterns_for_input_fields[$input_field_name], $input_field_name);
        }
        return true;
    }
}