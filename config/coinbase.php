<?php

return [
    'apiKey' => env('9fcaa0b9-47e2-4dd7-953d-2ff4a1bca6db'),
    'apiVersion' => env('2018-03-22'),

    'webhookSecret' => env('COINBASE_WEBHOOK_SECRET'),
    'webhookJobs' => [
        // 'charge:created' => \App\Jobs\CoinbaseWebhooks\HandleCreatedCharge::class,
        // 'charge:confirmed' => \App\Jobs\CoinbaseWebhooks\HandleConfirmedCharge::class,
        // 'charge:failed' => \App\Jobs\CoinbaseWebhooks\HandleFailedCharge::class,
        // 'charge:delayed' => \App\Jobs\CoinbaseWebhooks\HandleDelayedCharge::class,
        // 'charge:pending' => \App\Jobs\CoinbaseWebhooks\HandlePendingCharge::class,
        // 'charge:resolved' => \App\Jobs\CoinbaseWebhooks\HandleResolvedCharge::class,
    ],
    'webhookModel' => Shakurov\Coinbase\Models\CoinbaseWebhookCall::class,
];
