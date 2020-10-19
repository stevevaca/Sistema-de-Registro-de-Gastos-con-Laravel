@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Nuevo reporte</h1>
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
            <form action="/expense_reports" method="POST">
            @csrf
                <div class="form-group">
                    <label for="title" class="title"></label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Ingrese un reporte" value={{ old('title') }}>
                </div>
                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>    
    </div>    
</div>
@endsection