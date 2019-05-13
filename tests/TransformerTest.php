<?php
declare (strict_types = 1);

namespace Lalilalai\Spreadsheet\Transformer\Tests;

use Lalilalai\Spreadsheet\Spreadsheet\Loader;
use Lalilalai\Spreadsheet\Spreadsheet\Table;
use Lalilalai\Spreadsheet\Transformer\Tests\SquareRow;
use Lalilalai\Spreadsheet\Transformer\Tests\SquareTransformer;

/**
 * @covers Lalilalai\Spreadsheet\Transformer\Transformer
 */
class TransformerTest extends \PHPUnit\Framework\TestCase
{
    private $table = null;

    public function setUp(): void
    {
        $this->table = (new Loader('tests/files/test.csv'))->table();
    }

    public function testTransformer()
    {
        $transformer = new SquareTransformer($this->table);
        $rows = $transformer->result();

        $this->assertEquals(5, count($rows));

        for ($i = 1; $i < 5; $i++) {
            $this->assertInstanceOf(SquareRow::class, $rows[$i - 1]);

            $this->assertEquals($i, $rows[$i - 1]->x());
            $this->assertEquals($i * $i, $rows[$i - 1]->xx());
        }
    }
}
