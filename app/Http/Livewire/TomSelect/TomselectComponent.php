<?php

namespace App\Http\Livewire\TomSelect;

use App\Models\Todos\Todo;
use App\Models\Todos\TodoType;
use Livewire\Component;

class TomselectComponent extends Component
{

    public $tittle;
    public $description;

    public $todoType;


    public function addTodo(){

        Todo::create([
            'title'=>$this->tittle,
            'description'=>$this->description,
            'type_id'=>$this->todoType,
        ]);

    }

    public function render()
    {

        $todos = Todo::all();
        $todoTypes = TodoType::all();

        return view('livewire.tom-select.tomselect-component',[
            'todos'=>$todos,
            'todoTypes'=>$todoTypes
        ]);
    }
}
