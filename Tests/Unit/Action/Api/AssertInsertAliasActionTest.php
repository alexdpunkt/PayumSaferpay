<?php declare(strict_types=1);

namespace Karser\PayumSaferpay\Tests\Unit\Action\Api;

use Karser\PayumSaferpay\Action\Api\AssertInsertAliasAction;
use Karser\PayumSaferpay\Request\Api\AssertInsertAlias;

class AssertInsertAliasActionTest extends BaseApiActionTest
{
    protected $actionClass = AssertInsertAliasAction::class;
    protected $requestClass = AssertInsertAlias::class;
}
