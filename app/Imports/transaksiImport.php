<?php

namespace App\Imports;

use App\Models\transaksi;
use Maatwebsite\Excel\Concerns\ToModel;

class transaksiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new transaksi([
            'name' => $row[1],
            'email' => $row[2],
            'produk_id' => $row[3],
            'qty' => $row[4],
            'alamat' => $row[5],
            'message' => $row[6],
        ]);
    }
}
