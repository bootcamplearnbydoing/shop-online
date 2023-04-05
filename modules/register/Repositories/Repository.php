<?php

declare(strict_types=1);

namespace Pet\Store\Register\Repositories;

interface Repository
{
    public function findAll(): void;
    
    public function findById(int $id): void;
}
