<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $tetap= User::where('status', 'karyawan tetap')->get();
        $tetaps = Count($tetap);
        $tdktetap= User::where('status', 'karyawan tidak tetap')->get();
        $tdktetaps = Count($tdktetap);
        return $this->chart->pieChart()


            ->addData([$tetaps,  $tdktetaps])
            ->setColors(['#00E396', '#0077B5'])
            ->setLabels(['Karyawan Tetap', 'Karyawan Tidak Tetap']);
    }
}
