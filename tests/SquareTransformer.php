<?php
declare (strict_types = 1);

namespace Lalilalai\Spreadsheet\Transformer\Tests;

use Lalilalai\Spreadsheet\Spreadsheet\Table;
use Lalilalai\Spreadsheet\Transformer\Tests\SquareTransformerRow;
use Lalilalai\Spreadsheet\Transformer\Transformer;

class SquareTransformer extends Transformer
{
    protected function transform(Table $_table): array
    {
        $rows = [];

        for ($i = 1; $i < $_table->count(); $i++) {
            $rows[] = (new SquareTransformerRow())->transform($_table->row($i));
        }

        return $rows;
    }
}
