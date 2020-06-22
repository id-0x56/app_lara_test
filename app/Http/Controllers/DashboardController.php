<?php

namespace App\Http\Controllers;

use App\Repositories\ClickRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $clickRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ClickRepository $clickRepository)
    {
        $this->clickRepository = $clickRepository;
    }

    public function lineChart()
    {
        $result = [
            'datasets' => [
                [
                    'label' => 'x',
                    'borderColor' => "#3e95cd",
                    'fill' => false,
                ],
                [
                    'label' => 'y',
                    'borderColor' => "#c45850",
                    'fill' => false,
                ],
            ],
        ];

        $clicks = $this->clickRepository->all();
        foreach ($clicks as $click) {
            $result['labels'][] = $click->id;
            $result['datasets'][0]['data'][] = $click->x;
            $result['datasets'][1]['data'][] = $click->y;
        }

        return $result;
    }
}
