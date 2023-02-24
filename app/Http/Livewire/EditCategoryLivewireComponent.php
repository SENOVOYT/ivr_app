<?php

namespace App\Http\Livewire;

use App\Models\UserLinks;
use LivewireUI\Modal\ModalComponent;

class EditCategoryLivewireComponent extends ModalComponent
{
    public $category;
    public $link=[];
    public $editlinkIndex = null;
    public $editlinkfield =null;
    public $editcategoryIndex = null;
    public $editcategoryfield =null;

    protected $rules = [
        'link.*.custom_link_name' => ['required', 'string', 'min:3','max:22']
    ];

    protected $validationAttributes = [
        'link.*.custom_link_name' => 'Link Name'
    ];
    


    public function mount($category)
    {
        $this->category=$category;
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
    public function render()
    {
        $this->link=UserLinks::with('permission','usercategory')->where('category_id',$this->category)->orderBy('position')->get()->toArray();
        return view('livewire.edit-category-livewire-component');
    }
    public function editlink($categryIndex){
        $this->editlinkIndex=$categryIndex;
    }
    public function editlinkfeild($categryIndex,$feildname){
        $this->editlinkfield=$categryIndex.'.'.$feildname;
        $this->editlinkIndex = null;
    }
    public function savelink($linkIndex){
        $this->editlinkIndex = $linkIndex;
        
        $this->validate();
        
        $links = $this->link[$linkIndex] ?? NULL;
        
        if(!is_null($links)){
            optional(UserLinks::find($links['id'])->update($links));
        }
        $this->editlinkIndex = null;
        $this->editlinkfield = null;
        $this->emit('refreshsidebar');
    }
    /**
     * This is the part for the category edit
     *
     * @param [type] $editcategoryIndex
     * @return void
     */
    public function editcategory($editcategoryIndex){
        $this->editcategoryIndex=$editcategoryIndex;
    }
    public function editcategoryfeild($editcategoryIndex,$editcategoryfield){
        $this->editcategoryfield=$editcategoryIndex.'.'.$editcategoryfield;
        $this->editcategoryIndex = null;
    }
    public function savecategory($linkIndex){
        $this->editlinkIndex = $linkIndex;
        
        $this->validate();
        
        $links = $this->link[$linkIndex] ?? NULL;
        
        if(!is_null($links)){
            optional(UserLinks::find($links['id'])->update($links));
        }
        $this->editlinkIndex = null;
        $this->editlinkfield = null;
        $this->emit('refreshsidebar');
    }
    public function forceclosed(){
        $this->forceClose()->closeModal();
    }
      
    
}
