<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LebelImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */

    public $data = [];

    public function collection($rows)
    {
        foreach ($rows as $row) {
            $this->data[] = [
                'nama' => $row['name'],
                'harga' => $row['sales_price'],
                'barcode' => $row['barcode'],
            ];
        }
    }
}
