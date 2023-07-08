<?php

namespace App\Http\Controllers;

use App\Repositories\AdvantageRespository;
use App\Repositories\LearnRepository;
use App\Repositories\OptionRepository;
use App\Repositories\PricesRepository;
use App\Repositories\ReviewRepository;

class HomeController extends Controller
{

    private mixed $advnatagesRepostiory;
    private mixed $pricesRepository;
    private mixed $reviewRepository;
    private mixed $learnRepository;
    private mixed $optionsRepository;

    final public function __construct()
    {
        $this->advnatagesRepostiory = app(AdvantageRespository::class);
        $this->pricesRepository = app(PricesRepository::class);
        $this->reviewRepository = app(ReviewRepository::class);
        $this->learnRepository = app(LearnRepository::class);
        $this->optionsRepository = app(OptionRepository::class);
    }

    final public function index()
    {
        $advantages = $this->advnatagesRepostiory->getAll();
        $prices = $this->pricesRepository->getAll();
        $reviews = $this->reviewRepository->getAll();
        $learn = $this->learnRepository->getAll();
        $video = $this->optionsRepository->getOption("video");
        $telegram = $this->optionsRepository->getOption("telegram");
        $telephone = $this->optionsRepository->getOption("telephone");
        $email = $this->optionsRepository->getOption("email");
        return view('layouts.master', [
            'advantages' => $advantages,
            'prices' => $prices,
            'reviews' => $reviews,
            'learn' => $learn,
            'video' => $video,
            'telegram' => $telegram,
            'telephone' => $telephone,
            'email' => $email
        ]);
    }

}
