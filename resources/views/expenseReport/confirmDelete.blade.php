@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Eliminar reporte</h1>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary " href="/expense_reports">Regresar</a>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            <form action="/expense_reports/{{ $report->id }}" method="POST">
            @csrf
            @method('delete')
                <button class="btn btn-primary" type="submit">Borrar</button>
            </form>
        </div>    
    </div>    
</div>
@endsection