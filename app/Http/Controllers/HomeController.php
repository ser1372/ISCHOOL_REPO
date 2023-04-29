<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\AdvantageRespository;

class HomeController extends Controller{

    private mixed $advnatagesRepostiory;

    final public function __construct()
    {
        $this->advnatagesRepostiory = app(AdvantageRespository::class);
    }

    public function index(){
        $advantages = $this->advnatagesRepostiory->getAll();
        return view('layouts.master', ['advantages' => $advantages]);
    }

}
