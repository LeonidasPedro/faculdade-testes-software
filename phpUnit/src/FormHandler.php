<?php

namespace App;

class FormHandler
{
    public function validateName(string $name): bool
    {
        return strlen($name) > 7;
    }

    public function saveData(string $name, string $date): array
    {
        return ['name' => $name, 'date' => new \DateTime($date)];
    }
}
