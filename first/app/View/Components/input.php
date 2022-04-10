<?php

namespace App\View\Components;

use Illuminate\View\Component;

class input extends Component
{
    public $lable;
    public $type;
    public $name;
    public $edit;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lable, $type, $name, $edit='')
    {
        $this->lable = $lable;
        $this->type = $type;
        $this->name = $name;
        $this->edit = $edit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
