<?php

declare(strict_types=1);

namespace Pet\Store\Login\Repositories;

interface Repository 
{
    public function findAll(): void;
    
    public function findById(int $id): void;
}
