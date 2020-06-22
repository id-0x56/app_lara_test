<?php

namespace App\Http\Controllers;

use App\Repositories\ClickRepository;
use Illuminate\Http\Request;
use Debugbar;

class ClickController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Debugbar::info($this->clickRepository->all());
        $this->clickRepository->create($request->all());
    }
}
