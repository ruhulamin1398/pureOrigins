<?php

namespace App\View\Components;

use App\Models\setting;
use Illuminate\View\Component;

class frontendNav extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $setting = setting::find(1);
        return view('components.frontend-nav',compact('setting'));
    }
}
