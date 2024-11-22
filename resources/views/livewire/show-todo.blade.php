<div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Todo</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jam</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if (count($todos) > 0)
                {{ $i = 1 }}
                @foreach ($todos as $todo)
                    <tr>
                        <th scope="row">{{ $i++ }} </th>
                        <td>{{ $todo->todo }}</td>
                        <td>{{ $todo->tanggal }}</td>
                        <td>{{ $todo->jam }}</td>
                        <td>{{ $todo->status }}</td>
                        <td>
                            <a href="{{ route('edit', $todo->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <button onclick="return confirm('Hapus Todo list mu??')"
                                wire:click="delete({{ $todo->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" align="center">
                        No Posts Found.
                    </td>
                </tr>
            @endif
        </tbody>
    </table>


</div>
