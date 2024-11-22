<div>
    <form accept="{{ route('edit.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="new_todo" class="form-label">Tugas</label>
            <input type="text" class="form-control" id="new_todo" wire:model="todo" value="{{ $todo->todo }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" wire:model="date" value="{{ $todo->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Waktu</label>
            <input type="time" class="form-control" id="tanggal" wire:model="time" value="{{ $todo->jam }}">
        </div>

        <div class="mb-3">
            <label for="tanggal" class="form-label">Status</label>
            <input type="test" class="form-control" id="tanggal" wire:model="time" value="{{ $todo->status }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
