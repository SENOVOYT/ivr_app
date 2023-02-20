<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class DeleteCategoryLink extends ModalComponent
{
    public function render()
    {
        return view('livewire.delete-category-link');
    }
}
