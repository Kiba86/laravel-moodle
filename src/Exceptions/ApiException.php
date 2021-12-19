<?php

namespace Kiba86\LaravelMoodle\Exceptions;

use Exception;

/**
 * Class ApiException
 * @package Kiba86\LaravelMoodle\Exceptions
 */
class ApiException extends Exception
{
    const ERROR_CODE_INVALID_TOKEN = 'invalidtoken';
    const ERROR_CODE_REGISTRATION_DISABLED = 'registrationdisabled';
    const ERROR_CODE_ACCESS_EXCEPTION = 'accessexception';

    //TODO: add logic for API exceptions!
}
