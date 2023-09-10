<?php

namespace Service\Messenger\Telegram;

use App\Services\Messenger\Telegram\TelegramMessage;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class TelegramMessageTest extends TestCase
{
    public function test_set_one_chat_id(): void
    {
        $chatId = 'chat_id';

        $telegramMessage = app(TelegramMessage::class);
        $telegramMessage->setChatId($chatId);

        $reflectedClass = new ReflectionClass(TelegramMessage::class);
        $reflection = $reflectedClass->getProperty('chatIds');

        $this->assertTrue($reflection->getValue($telegramMessage)[0] === $chatId);
    }

    public function test_check_unique_chat_id(): void
    {
        $chatId = 'chat_id';

        $telegramMessage = app(TelegramMessage::class);
        $telegramMessage->setChatId($chatId);

        $telegramMessage->setChatId($chatId);

        $reflectedClass = new ReflectionClass(TelegramMessage::class);
        $reflection = $reflectedClass->getProperty('chatIds');

        $this->assertTrue(count($reflection->getValue($telegramMessage)) === 1);
    }

    public function test_set_array_chat_ids(): void
    {
        $chatId = ['chat_id_1', 'chat_id_2'];

        $telegramMessage = app(TelegramMessage::class);
        $telegramMessage->setChatIds($chatId);

        $reflectedClass = new ReflectionClass(TelegramMessage::class);
        $reflection = $reflectedClass->getProperty('chatIds');

        $this->assertTrue(count($reflection->getValue($telegramMessage)) === 2);
    }

    public function test_set_message(): void
    {
        $message = 'test_message';

        $telegramMessage = app(TelegramMessage::class);
        $telegramMessage->setMessage($message);

        $reflectedClass = new ReflectionClass(TelegramMessage::class);
        $reflection = $reflectedClass->getProperty('message');

        $this->assertTrue($reflection->getValue($telegramMessage) === $message);
    }
}
