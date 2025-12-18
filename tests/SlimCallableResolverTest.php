<?php

declare(strict_types=1);

namespace Test\EvgenyRomanov;

use EvgenyRomanov\SlimCallableResolver;
use Illuminate\Container\Container;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\RequestFactory;
use Slim\Psr7\Factory\ResponseFactory;

/**
 * @internal
 */
final class SlimCallableResolverTest extends TestCase
{
    public function testDefault(): void
    {
        $container = Container::getInstance();
        $resolver = new SlimCallableResolver($container);
        [$objectController, $method] = $resolver->resolveRoute([TestController::class, 'test']);

        self::assertInstanceOf(TestController::class, $objectController);
        self::assertInstanceOf(
            ResponseInterface::class,
            $objectController->{$method}(
                (new RequestFactory())->createRequest("GET", ""),
                (new ResponseFactory())->createResponse(),
                []
            )
        );
    }
}
