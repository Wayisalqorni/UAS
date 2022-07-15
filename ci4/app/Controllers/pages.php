<?php

namespace App\Controllers;


class Pages extends BaseController
{

    public function iuran()
    {
        $data = [
            'title' => 'iuran | RT04/RW02'
        ];
        return view('pages/iuran', $data);
    }

    public function LaporanTransaksi()
    {
        $data = [
            'title' => 'Laporan Transaksi | RT04/RW02'
        ];
        return view('pages/LaporanTransaksi', $data);
    }
}
