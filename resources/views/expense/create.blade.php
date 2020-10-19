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
            <a class="btn btn-secondary " href="/expense_reports/{{$report->id}}">Regresar</a>
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
            <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
            @csrf
                <div class="form-group">
                    <label for="title" >Descripcion:</label>
                    <input name="description" type="text" class="form-control" id="description" placeholder="Ingresa la descripción " value={{ old('title') }}>
                </div>
                <div class="form-group">
                    <label for="title" >Monto:</label>
                    <input name="amount" type="text" class="form-control" id="amount" placeholder="Ingresa el monto" value={{ old('title') }}>
                </div>                
                <button class="btn btn-primary" type="submit">Ingresar</button>
            </form>
        </div>    
    </div>    
</div>
@endsection