<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenissChart
{
    protected $chart;

    public function __construct(LarapexChart $charts)
    {
        $this->chart = $charts;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $P= User::where('jenis_kelamin', 'Perempuan')->get();
    $Pr = Count($P);
    $L= User::where('jenis_kelamin', 'Laki-laki')->get();
    $Lk = Count($L);
        return $this->chart->barChart()

            ->addData('Laki-laki', [$Lk])
            ->addData('Perempuan', [$Pr])
            ->setColors(['#008FFB', '#ff6384'])

            ->setXAxis(['Jenis Kelamin']);
    }
}
