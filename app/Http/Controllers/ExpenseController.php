<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense.create', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        
        $validaData = $request->validate([
            'description' => 'required|min:3',
            'amount' => 'required|min:0.01'],
            ['description.required' => 'La descripcion no puede ser vacia', 
            'description.min' => 'La descripcion debe tener un minimo de 3 caracteres',
            'amount.required' => 'El monto no puede ser vacio',
            'amount.min' => 'El monto debe tener un valor minimo de 0.01',

        ]);

        $expense= new Expense();
        $expense->description =$request->get('description');
        $expense->amount =$request->get('amount');
        $expense->expense_report_id =$expenseReport->id;
        $expense->save();

        return redirect('/expense_reports/'.$expenseReport->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
