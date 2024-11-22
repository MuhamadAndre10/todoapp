<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar bg-primary border-bottom border-body mb-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Simple Todo List </a>
        </div>
    </nav>


    <div class="container">
        <div>
            <form action="{{ route('edit.update', $todo->id) }}" method="POST">
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
                    <input type="text" class="form-control" id="new_todo" name="todo" value="{{ old('todo', $todo->todo) }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal"
                        value="{{ old('tanggal', $todo->tanggal) }}" name="tanggal" >
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Waktu</label>
                    <input type="time" class="form-control" id="tanggal" name="jam" value="{{ old('jam', $todo->jam) }}">
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Status</label>
                    <input type="text" class="form-control" id="tanggal"
                        value="{{ old('status', $todo->status) }}" name="status" >
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
