<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTodo extends Component
{

    public $todos;
    public function render()
    {
        $this->todos = \App\Models\TodoList::select("id", "todo", "tanggal", "jam", "status")->get();

        return view('livewire.show-todo');
    }



    public function delete($id)
    {
        $todo = \App\Models\TodoList::find($id);



        // confirm if the todo is found
        if($todo) {
            $todo->delete();

             session()->flash('message', 'Todo Berhasil dihapus');
        }



        // refresh the page
        return redirect()->to('/');
    }



}
