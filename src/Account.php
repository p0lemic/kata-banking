<?php

declare(strict_types=1);

namespace Kata;

class Account
{
    private int $balance = 0;
    private array $operations;

    public function __construct()
    {
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;

        $date = new \DateTimeImmutable();
        $this->operations[] = [
            "Date" => $date->format('d.m.Y'),
            "Amount" => '+' . $amount,
            "Balance" => $this->balance
        ];
    }

    public function withdraw(int $amount): void
    {
        $this->balance -= $amount;

        $date = new \DateTimeImmutable();
        $this->operations[] = [
            "Date" => $date->format('d.m.Y'),
            "Amount" => '-' . $amount,
            "Balance" => $this->balance
        ];
    }

    public function printStatement(): string
    {
        $output = '';

        foreach ($this->operations as $operation) {
            $output .= $operation['Date'] . ' ' . $operation['Amount'] . ' ' . $operation['Balance'] . PHP_EOL;
        }

        return $output;
    }
}