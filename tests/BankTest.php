<?php

use PHPUnit\Framework\TestCase;

final class BankTest extends TestCase
{
    public function test_we_can_instantiate_class(): void
    {

        $natwest = new \Banking\Banks\NatwestBank(1000);

        $this->assertSame($natwest->getInterestRate(),0.24);

    }
}
