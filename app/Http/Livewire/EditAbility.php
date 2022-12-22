<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class EditAbility extends Component
{
    use WithFileUploads;
    public $ability;
    public $temporary_images;
    public $images;
    public $oldImages;

    protected $rules = [
        'ability.name' => 'required',
        'ability.description' => 'required',
        'ability.uses' => 'required',

        //'ability.images' => 'required',

    ];

    /**
     * Update temporary images
     *
     * @param  null
     * @return null
     */
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>'image|max:1024',
        ])){
            foreach ($this->temporary_images as $image){
                $this->images[]=$image;
            }
        }
    }

    /**
     * Remove img from new images
     *
     * @param  int key
     * @return null
     */
    public function removeImage($key){

        if(in_array($key,array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    /**
     * Remove img from old images
     *
     * @param  int key
     * @return null
     */
    public function removeOldImage($key){
        unset($this->oldImages[$key]);
    }

    /**
     * Edit Ability
     *
     * @param  null
     * @return Redirect
    */

    public function edit(){

        //check if there are differences between the old and the stored images
        
        $imgsToDelete=$this->ability->images()->get()->diff($this->oldImages);
        foreach($imgsToDelete as $img){
            Storage::delete($img->path);
            $img->delete();
            
        }

        $newFileName="abilitiesImages/{$this->ability->id}";
            
        //store new images
        if(!empty($this->images)){
            if(count($this->images)){
                foreach($this->images as $image){
                    $this->ability->images()->create(['path'=>$image->store($newFileName,'public')]);
                }
    
                File::deleteDirectory(storage_path('/app/livewire-tmp'));
    
            }
        }

        $this->ability->save();

        session()->flash('status','Abilità modificata correttamente');
        return redirect(route('admin.showAbilities'));
    }

    public function mount()
    {

        $this->oldImages= $this->ability->images()->get();

        return view('livewire.edit-ability');
    }
}
