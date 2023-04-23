<?php

namespace App\Exceptions;

use App\Http\Traits\ApiResponse;
use Exception;
class InvalidCredentialsException extends Exception
{
    use ApiResponse;

    /**
     * @return mixed
     */
    public function render()
    {
        return $this->error($this->message,
            401
        );
    }

}
