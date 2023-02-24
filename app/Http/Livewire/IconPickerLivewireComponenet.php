<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class IconPickerLivewireComponenet extends ModalComponent
{
    public $category;
    public function render()
    {
        return view('livewire.icon-picker-livewire-componenet');
    }
    public function mount($category)
    {
        $this->category=$category;
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
}
