@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Editar Reporte {{ $report->id }}</h1>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary " href="/expense_reports">Regresar</a>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}" method="POST">
            @csrf
            @method('put')
                <div class="form-group">
                    <label for="title" class="title"></label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Ingrese un titulo" value={{ old('title') }}>
                </div>
                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>    
    </div>    
</div>
@endsection