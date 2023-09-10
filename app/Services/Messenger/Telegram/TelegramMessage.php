<?php

namespace App\Services\Messenger\Telegram;

use App\Services\Messenger\Interface\Messenger;
use App\Services\Messenger\Telegram\Interface\Telegram;
use Http;

class TelegramMessage implements Messenger, Telegram
{
    protected array $chatIds = [];
    protected string $message;
    protected string $botToken;

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function setChatId(string $chatId): void
    {
        $this->addChatIdIfUnique($chatId);
    }

    public function setChatIds(array $chatIds): void
    {
        foreach ($chatIds as $chatId) {
            $this->addChatIdIfUnique($chatId);
        }
    }

    protected function addChatIdIfUnique(string $chatId): void
    {
        if (!in_array($chatId, $this->chatIds)) {
            $this->chatIds[] = $chatId;
        }
    }

    public function send(): void
    {
        if ($this->canSend()) {
            foreach ($this->chatIds as $chatId) {
                $request = Http::post('https://api.telegram.org/bot' . $this->getBotToken() . '/sendMessage', [
                    'chat_id' => $chatId,
                    'parse_mode' => 'html',
                    'text' => $this->message,
                ]);
            }
        }
    }

    protected function canSend(): bool
    {
        return !empty($this->chatIds) && !empty($this->message);
    }

    protected function getBotToken(): string
    {
        return $this->botToken ?? config('services.telegram.bot_token');
    }
}