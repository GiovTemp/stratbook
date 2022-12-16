<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditOperator extends Component
{
    public $operator;
    public $idPrimary;
    public $idSecondary;
    public $idGadget;

    protected $rules = [
        'operator.name' => 'required',
        'operator.badge' => 'required',
        'operator.image' => 'required',
        'operator.bio' => 'required',
        'operator.ability_id' => 'required',
        'operator.armor_rating' => 'required',
        'operator.speed_rating' => 'required',
        'operator.type' => 'required',
        'operator.organization' => 'required',
        'operator.gadgets' => 'required',

        'operator.primaries' => 'required',
        'operator.secondaries' => 'required',

    ];


    /**
     * Add new primary weapon 
     *
     * @param  null
     * @return null
     */
    public function addPrimary(){
        array_push($this->operator->primaries,$this->idPrimary);
    }

    /**
     * Remove Primary Weapon from List
     *
     * @param  null
     * @return null
     */
    public function deletePrimary($primaryToDelete){
        unset($this->operator->primaries[$primaryToDelete]);
    }



    /**
     * Add new Secondary weapon
     *
     * @param  null
     * @return null
     */
    public function addSecondary(){
        array_push($this->operator->secondaries,$this->idSecondary);         
    }

    /**
     * Remove Secondary Weapon from List
     *
     * @param  null
     * @return null
     */
    public function deleteSecondary($secondaryToDelete){
        unset($this->operator->secondaries[$secondaryToDelete]);
    }

       
    /**
     * Add new Gadget
     *
     * @param  null
     * @return null
     */
    public function addGadget(){
        array_push($this->operator->gadgets,$this->idGadget);
    }


    /**
     * Remove Gadget from List
     *
     * @param  null
     * @return null
     */
    public function deleteGadget($gadgetToDelete){
        unset($this->operator->gadgets[$gadgetToDelete]);
    }

    /**
     * Edit the Operator
     *
     * @param  null
     * @return null
     */
    public function edit(){
        //TODO: add validation rules
        $this->validate();
        //save the new attributes
        $this->operator->save();

        session()->flash('status','Operatore modificaro correttamente');
        return redirect(route('admin.showOperators'));
    }
    


    public function mount()
    {
        return view('livewire.edit-operator');
    }
}
