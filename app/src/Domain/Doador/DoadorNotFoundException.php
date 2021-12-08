<?php

namespace App\Domain\Doador;

use App\Domain\DomainException\DomainRecordNotFoundException;

class DoadorNotFoundException extends DomainRecordNotFoundException
{
    public $message = 'Doador não encontrado';
}