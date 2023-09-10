<?php

namespace App\Services\Messenger\Interface;

interface Messenger
{
    public function send();

    public function setMessage(string $message);
}