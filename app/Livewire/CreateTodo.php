<?php

namespace App\Livewire;

use App\Models\TodoList;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateTodo extends Component
{

    #[Validate('required')]
    public $todo = '';
    #[Validate('required')]
    public $date = '';
    #[Validate('required')]
    public $time = '';

    public function save() {
        $this->validate();

        TodoList::create(
            [
                'todo' => $this->todo,
                'tanggal' => $this->date,
                'jam' => $this->time,
            ]
        );

        session()->flash('message', 'Todo Berhasil Ditambahkan');

        return $this->redirect("/");
    }

    public function render()
    {
        return view('livewire.create-todo');
    }



}
