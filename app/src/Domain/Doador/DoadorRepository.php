<?php

namespace App\Domain\Doador;

interface DoadorRepository
{
    /**
     * @return array
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Doador
     */
    public function findDoadorByID(int $id): Doador;

}