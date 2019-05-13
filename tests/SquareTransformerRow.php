<?php
declare (strict_types = 1);

namespace Lalilalai\Spreadsheet\Transformer\Tests;

use Lalilalai\Spreadsheet\Spreadsheet\Row;
use Lalilalai\Spreadsheet\Transformer\Tests\SquareRow;

class SquareTransformerRow
{
    public function transform(Row $_row): SquareRow
    {
        return new SquareRow(intval($_row->cell('A')->value()), intval($_row->cell('B')->value()));
    }
}
