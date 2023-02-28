<?php

namespace App\Http\Livewire;

use App\Models\icons;
use LivewireUI\Modal\ModalComponent;

class IconPickerLivewireComponenet extends ModalComponent
{
    public $category;
    public $icon;
    public $icons= [];

    public function mount($category)
    {
        $this->category=$category;
    }
    public function render()
    {
        if(!($this->icon == null || $this->icon == " " || $this->icon == "")){
            $this->icons=icons::where('icon_name', 'LIKE', '%'. $this->icon ."%")
            ->limit(70)
            ->get()
            ->toArray();
            return view('livewire.icon-picker-livewire-componenet');
        }
        else{
            $this->icon=[];
            return view('livewire.icon-picker-livewire-componenet'); 
        }
        
    }
    
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
}
