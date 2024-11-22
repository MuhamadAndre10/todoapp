<div>
    <form wire:submit="save">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label for="new_todo" class="form-label">Tugas Baru</label>
            <input type="text" class="form-control" id="new_todo" wire:model="todo">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" wire:model="date">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Waktu</label>
            <input type="time" class="form-control" id="tanggal" wire:model="time">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
