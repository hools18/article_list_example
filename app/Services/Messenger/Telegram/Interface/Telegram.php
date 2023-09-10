<?php

namespace App\Services\Messenger\Telegram\Interface;

interface Telegram
{
    public function setChatId(string $chatId);

    public function setChatIds(array $chatIds);
}