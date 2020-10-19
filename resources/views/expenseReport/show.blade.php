@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Reporte: {{ $report->id }}</h1>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary " href="/expense_reports">Regresar</a>
        </div>    
    </div>    
    <div class="row">
        <div class="col">
            <h3>Detalles</h3>
            <table class="table">
                <td>Nombre</td>
                <td>Fecha</td>
                <td>Monto</td>
                
                @foreach($report->expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->created_at }}</td>
                    <td>S/. {{ $expense->amount }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>    
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">Nuevo</a>
        </div>
    </div>
</div>
@endsection