<?php

namespace App\Charts;

use App\Models\Category;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class UmkmChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
         $category = Category::withCount('umkm')->get();
         $categoryLabels = $category->pluck('name')->toArray();
         $umkmCount = $category->pluck('umkm_count')->toArray();
         return $this->chart->barChart()
             ->setTitle('Kategori')
             ->setSubtitle('Kategori dengan Jumlah UMKM Terbanyak')
             ->addData('Jumlah Umkm', $umkmCount)
             ->setXAxis($categoryLabels);
    }

}