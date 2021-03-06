<?php
declare(strict_types = 1);
namespace Mezon\Router\Tests\Standart;

use Mezon\Router\RouterInterface;
use Mezon\Router\Tests\Base\UniversalRouteTestClass;
use Mezon\Router\Tests\Base\BaseRouterUnitTestClass;
use Mezon\Router\Router;

/**
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class UniversalRouteUnitTest extends UniversalRouteTestClass
{

    /**
     *
     * {@inheritdoc}
     * @see BaseRouterUnitTestClass::getRouter()
     */
    protected function getRouter(): RouterInterface
    {
        return new Router();
    }
}
