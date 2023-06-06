<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\AdvantageRespository;
use App\Repositories\PricesRepository;

class HomeController extends Controller{

    private mixed $advnatagesRepostiory;
    private mixed $pricesRepository;

    final public function __construct()
    {
        $this->advnatagesRepostiory = app(AdvantageRespository::class);
        $this->pricesRepository = app(PricesRepository::class);
    }

    final public function index(){
        $advantages = $this->advnatagesRepostiory->getAll();
        $prices = $this->pricesRepository->getAll();
        return view('layouts.master', [
            'advantages' => $advantages,
            'prices'=> $prices,
        ]);
    }

}
