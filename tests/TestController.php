<?php

declare(strict_types=1);

namespace Test\EvgenyRomanov;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final readonly class TestController
{
    public function __construct(private TestService $testService) {}

    public function test(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        return $response;
    }
}
