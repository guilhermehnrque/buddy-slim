<?php

namespace App\Domain\Doador;

use JetBrains\PhpStorm\ArrayShape;

class Doador implements \JsonSerializable
{
    private string $name;
    private int $cpf;
    private string $email;
    private int $phoneNumber;

    /**
     * @param string $name
     * @param int $cpf
     * @param string $email
     * @param int $phoneNumber
     */
    public function __construct(
        string $name,
        int $cpf,
        string $email,
        int $phoneNumber
    )
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    #[ArrayShape([
        'name' => "string",
        'cpf' => "int",
        'email' => "string",
        'phoneNumber' => "int"]
    )]
    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber
        ];
    }
}