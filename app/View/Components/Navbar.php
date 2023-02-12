<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\SiteController;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sites = SiteController::get_sites();
        return view('components.navbar')->with('sites',json_decode($sites));
    }
}
