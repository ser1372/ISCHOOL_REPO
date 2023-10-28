<?php

namespace App\Http\Controllers;

use App\Repositories\{AdvantageRepository, LearnRepository, OptionRepository, PricesRepository, ReviewRepository};

class HomeController extends Controller
{

    private mixed $advantagesRepository;
    private mixed $pricesRepository;
    private mixed $reviewRepository;
    private mixed $learnRepository;
    private mixed $optionsRepository;

    final public function __construct()
    {
        $this->advantagesRepository = app(AdvantageRepository::class);
        $this->pricesRepository = app(PricesRepository::class);
        $this->reviewRepository = app(ReviewRepository::class);
        $this->learnRepository = app(LearnRepository::class);
        $this->optionsRepository = app(OptionRepository::class);
    }

    public function index()
    {
        $advantages = $this->advantagesRepository->getAll();
        $prices = $this->pricesRepository->getAll();
        $reviews = $this->reviewRepository->getAll();
        $learn = $this->learnRepository->getAll();
        $video = $this->optionsRepository->getOption("video");
        $telegram = $this->optionsRepository->getOption("telegram");
        $telephone = $this->optionsRepository->getOption("telephone");
        $email = $this->optionsRepository->getOption("email");
        $linkTutor = $this->optionsRepository->getOption("form_link");
        return view('layouts.master', compact(
            'advantages',
            'prices',
            'reviews',
            'learn',
            'video',
            'telegram',
            'telephone',
            'email',
            'linkTutor'
        ));
    }

}
