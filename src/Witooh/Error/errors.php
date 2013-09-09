<?php

class AuthenticateException extends \Exception {

    public function __construct($message = null, $code = 401)
    {
        parent::__construct($message ?: 'Authenticate is required', $code);
    }
}


class NotFoundException extends \Exception {

    public function __construct($message = null, $code = 404)
    {
        parent::__construct($message ?: 'Resource not found', $code);
    }
}

class PermissionException extends \Exception {

    public function __construct($message = null, $code = 403)
    {
        parent::__construct($message ?: 'Permission denie', $code);
    }
}

class ValidateException extends \Exception {

    protected $messages;

    /**
     * @param \Illuminate\Support\MessageBag $messages
     */
    public function __construct($messages)
    {
        $this->messages = $messages;
        parent::__construct($this->messages, 400);
    }

    public function getMessages()
    {
        return $this->messages;
    }

}