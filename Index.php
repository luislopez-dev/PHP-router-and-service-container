<?php declare(strict_types=1);

final class Index
{
    static public function RunApp(): string {
        return "<h1>Hola mundo!</h1>";
    }
}

echo Index::RunApp();