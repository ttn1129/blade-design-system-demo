<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Sorter
{
    public static function sortByAsc(array &$data, string $sortKey):void
    {
        usort(
            $data,
            function($comparedDatumn1, $comparedDatumn2)use($sortKey)
            {
                return strcmp($comparedDatumn1[$sortKey], $$comparedDatumn2[$sortKey]);
            }
        );
    }
}



class SorterTest extends TestCase
{
    /** @test */
    public function sortTest_キーに日本語と英語文字列と数値が混ざったソート()
    {
        $data = [
            ['a'=>'ぞぞ', 'b'=>'abcdefg'],
            ['a'=>1, 'b'=>'abcdefg'],
            ['a'=>'bbbb bbb', 'b'=>'abcdefg'],
        ];
        ValueCoverter::sortByAsc($data, 'a');
        $this->assertEquals([
            ['a'=>1, 'b'=>'abcdefg'],
            ['a'=>'bbbb bbb', 'b'=>'abcdefg'],
            ['a'=>'ぞぞ', 'b'=>'abcdefg'],
        ],$data);
    }
}
