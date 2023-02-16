<?php

declare(strict_types=1);

namespace Test;

use Kata\Account;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class BankingTest extends TestCase
{
    public function testAccountDeposit()
    {
        $account = new Account();

        $account->deposit(500);

        $this->assertEquals(<<<OPS
16.02.2023 +500 500

OPS, $account->printStatement());
    }

    public function testAccountWithdraw()
    {
        $account = new Account();

        $account->withdraw(100);

        $this->assertEquals(<<<OPS
16.02.2023 -100 -100

OPS, $account->printStatement());
    }

    public function testAccountMultipleOperations()
    {
        $account = new Account();

        $account->deposit(500);

        $this->assertEquals(<<<OPS
16.02.2023 +500 500

OPS, $account->printStatement());

        $account->withdraw(100);

        $this->assertEquals(<<<OPS
16.02.2023 +500 500
16.02.2023 -100 400

OPS, $account->printStatement());
    }

}
