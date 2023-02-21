<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class SeeCategoryLink extends ModalComponent
{
    public function render()
    {
        return view('livewire.see-category-link');
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '3xl';
    }
}
