@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Título de la tarea</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
        </form>
    </div>
    <div>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item active">Text</li>
            <li class="list-group-item disabled" aria-disabled="true">Disabled item</li>
        </ul>
    </div>
@endsection