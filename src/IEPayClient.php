<?php declare(strict_types=1);

namespace IEPaySDK;

use IEPaySDK\Observer\SignatureObserver;

class IEPayClient extends BaseClient {

    public function __construct(string $apiKey)
    {
        $this->addObserver(new SignatureObserver($apiKey));

        $origin = 'https://a.mypaynz.com';

        parent::__construct($origin);
    }
}
