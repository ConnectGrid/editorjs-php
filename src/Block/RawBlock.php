<?php

declare(strict_types=1);

namespace Setono\EditorJS\Block;

final class RawBlock extends Block
{
    public function __construct(string $id, string $type, public readonly string $html)
    {
        parent::__construct($id, $type);
    }
}
