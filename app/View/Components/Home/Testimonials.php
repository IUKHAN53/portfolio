<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use function url;
use function view;

class Testimonials extends Component
{
    public array $reviews = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->reviews = [
            [
                'quote' => 'Build API and Tests',
                'name' => 'ubay25 (United Kingdom)',
                'image' => asset('img/testimonials/ (3).png'),
                'title' => "I highly recommend this seller, he's quite skillful and delivered the work on time. He's done all my requests and provided explanations that helped me a lot understand the features. I would not hesitate to use his services again as his very professional, his quality of work is excellent and delivers on time.",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Work on Freelancers Platform Remoteli',
                'name' => 'thabelomandoma (South Africa)',
                'image' => asset('img/testimonials/ (5).png'),
                'title' => "He doesn’t disappoint. Good communication, committed to deliver on time and going an extra mile to deliver quality work. Thanks",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Build a PWA, SAAS Application',
                'name' => 'rafaelmedeir904 (Brazil)',
                'image' => asset('img/testimonials/ (6).png'),
                'title' => "Great friend that I always want to keep close. This person is you!",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Build a Website Down Detector',
                'name' => 'stefankoehn (Germany)',
                'image' => asset('img/testimonials/ (7).png'),
                'title' => "Good result! Works as expected.",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Work on Freelancers Platform Remoteli',
                'name' => 'thabelomandoma (South Africa)',
                'image' => asset('img/testimonials/ (4).png'),
                'title' => "What a champ. Involved in the project with passion and persistence",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Build A Hotel Management System',
                'name' => 'firma34 (Greece)',
                'image' => asset('img/testimonials/ (8).png'),
                'title' => "Perfect job! Very professional another one time!",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Build a NFT Marketplace',
                'name' => 'mahinderstroo (Netherlands)',
                'image' => asset('img/testimonials/ (10).png'),
                'title' => "very nice coding expert laravel and livewire",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Create a Issue Tracker',
                'name' => 'webvisum (Germany)',
                'image' => asset('img/testimonials/ (11).png'),
                'title' => "Excellent communication and understanding of our complex needs.",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Build a NFT Marketplace',
                'name' => 'mahinderstroo (Netherlands)',
                'image' => asset('img/testimonials/ (9).png'),
                'title' => "Very good livewire expert communicates good and fast delivery very happy!",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
            [
                'quote' => 'Work on Wordpress Website',
                'name' => 'adrianabraham (Singapore)',
                'image' => asset('img/testimonials/ (12).png'),
                'title' => "will be working with him closely with more projects.",
                'link' => 'https://www.fiverr.com/iukhan53/make-a-laravel-web-app-for-your-organization',
            ],
        ];
    }
    public function render()
    {
        return view('components.home.testimonials');
    }
}
