<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index(Request $request, string $id) {

        $todo = \App\Models\TodoList::find($id);

        return view('edit', compact('todo'));

    }

    public function update(Request $request, string $id) {

        $todo = \App\Models\TodoList::find($id);

        $todo->todo = $request->todo;
        $todo->tanggal = $request->tanggal;
        $todo->jam = $request->time;
        $todo->status = $request->status;

        $todo->save();

        session()->flash('message', 'Todo Berhasil diubah');

        return redirect()->to('/');

    }
}
