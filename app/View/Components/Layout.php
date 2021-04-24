<?php

namespace App\View\Components;

use Illuminate\View\View;
use Roots\Acorn\View\Component;

class Layout extends Component
{
    /**
     * @var bool
     */
    public $alternative = false;

    /**
     * @var string[]
     */
    public $slides = [];

    /**
     * Layout constructor.
     *
     * @param bool $alternative
     */
    public function __construct(bool $alternative = false)
    {
        $this->alternative = get_field('alternative') ?: $alternative;
        $this->slides = get_field('slides');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render()
    {
        return $this->view('components.layout');
    }
}
