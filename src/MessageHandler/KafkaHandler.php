<?php

declare(strict_types=1);

namespace App\MessageHandler;

use App\Message\ProductsMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class ProductMessageHandler
{
    public function __invoke(ProductsMessage $message)
    {
        # faz alguma coisa
    }
}
