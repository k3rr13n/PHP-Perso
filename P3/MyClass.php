<?php

declare(strict_types=1);

namespace Thread;
class Message
{}

namespace Messenger;
class Message
{}

$threadMessage = new \Thread\Message;
$messengerMessage = new \Messenger\Message;

// ou avec le keyword use
use Thread\Message;
$threadMessage = new Message;

use Messenger\Message;
$messengerMessage = new Message;

// ou en aliassant
use Thread\Message as TheadMessage;
use Messenger\Message as MessengerMessage;

$threadMessage = new TheadMessage;
$messengerMessage = new MessengerMessage;