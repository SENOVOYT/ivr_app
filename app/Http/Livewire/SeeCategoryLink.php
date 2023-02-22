<?php

namespace App\Http\Livewire;

use App\Models\UserLinks;
use LivewireUI\Modal\ModalComponent;

class SeeCategoryLink extends ModalComponent
{
    public $category;
    public $link;

    public function mount($category)
    {
        $this->category=$category;
    }
    public function render()
    {
        $this->link=UserLinks::with('permission')->where('category_id',$this->category)->get();
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
