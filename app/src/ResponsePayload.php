<?php


namespace App;

use JsonSerializable;

class ResponsePayload implements JsonSerializable
{
    private $data;
    private $error;

    public function __construct($data = null, $error = null)
    {
        $this->data = $data;
        $this->error = $error;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getError()
    {
        return $this->error;
    }

    public function jsonSerialize()
    {
        if ($this->data !== null) {
            $payload['data'] = $this->data;
        } elseif ($this->error !== null) {
            $payload['error'] = $this->error;
        }

        return $payload;
    }
}
