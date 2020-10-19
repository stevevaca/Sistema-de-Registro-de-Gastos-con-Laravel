<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport.index', [
            'expenseReports' => ExpenseReport::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate(
            ['title' => 'required|min:3'],
            ['title.required' => 'El titulo no puede ir vacio', 
            'title.min' => 'El titulo necesita mínimo 3 caracteres'
        ]);
 
        $report = new ExpenseReport();
        $report->title = $validData['title'];
        $report->save();
        return redirect()->route('expense_reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param ExpenseReport $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expenseReport.show', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::find($id);
        return view('expenseReport.edit',[
            'report' => $report
        ]);
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
        $validData = $request->validate(
            ['title' => 'required|min:3'],
            ['title.required' => 'El titulo es requerido por favor', 
            'title.min' => 'El titulo es mínimo 3 caracteres por favor']);

        $report = ExpenseReport::findOrFail($id);
        $report->title = $validData['title'];
        $report->save();

        return redirect()->route('expense_reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();
        return redirect()->route('expense_reports.index');
    }
    public function confirmDelete($id){
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete',[
            'report' =>$report 
        ]);
    }
}
