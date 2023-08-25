<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Voyager', 'TailwindCSS', 'SAAS'],
                'title' => 'Cyberenew - A SaaS Project for scanning Domains',
                'image' => url('/img/cyberenew.png'),
                'github' => 'https://github.com/IUKHAN53/cyberenew'
            ],
            [
                'category' => ['Laravel', 'Bootstrap5', 'SAAS'],
                'title' => 'Tongletap - A Laravel EAP Project',
                'image' => url('/img/tongletap.png'),
                'github' => 'https://github.com/IUKHAN53/tongletap'
            ],
            [
                'category' => ['Laravel', 'PWA'],
                'title' => 'Bethackx - A PWA project for bettors',
                'image' => url('/img/bethackx.png'),
                'github' => 'https://github.com/IUKHAN53/bethackx'
            ],
            [
                'category' => ['Laravel', 'Angular', 'SAAS'],
                'title' => 'Autolonix - Inventory and Account Management System',
                'image' => url('/img/autolonix.png'),
                'github' => 'https://github.com/IUKHAN53/autolonix'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Scammerscheck - Personal Side project for checking scammers',
                'image' => url('/img/scammerscheck.png'),
                'github' => 'https://github.com/IUKHAN53/scammerscheck'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Power System - A Crypto Project for managing portfolio',
                'image' => url('/img/power_system.png'),
                'github' => 'https://github.com/IUKHAN53/power_system'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Twilio-Dialer - A dialer for Twilio',
                'image' => url('/img/twilio-dialer.png'),
                'github' => 'https://github.com/IUKHAN53/Twilio-Dialer'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Issue Tracker - A Kanban board for tracking issues',
                'image' => url('/img/issue_tracker.png'),
                'github' => 'https://github.com/IUKHAN53/issue_tracker'
            ],
            [
                'category' => ['Laravel'],
                'title' => 'Ruppee - A Freelancing Platform',
                'image' => url('/img/ruppee.png'),
                'github' => 'https://github.com/IUKHAN53/ruppee'
            ],
        ];


        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
