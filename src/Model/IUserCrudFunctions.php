<?php

namespace Jakeg\PhpJobSearchPortal\Model;

interface IUserCrudFunctions {

    function create($database_table, $user_account_data);
    function read($database_table, $user_account_identifier);
    function update($database_table, $user_account_data);
    function delete($database_table, $user_account_identifier);

}