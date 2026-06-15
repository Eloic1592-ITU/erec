<?php

namespace App\Service;

class MonService
{
    private string $uploadDirectory;

    public function __construct(string $uploadDirectory)
    {
        $this->uploadDirectory = $uploadDirectory;
    }

    public function getUploadPath(): string
    {
        return $this->uploadDirectory;
    }
}
