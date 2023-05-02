<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use PDF;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use Dompdf\Adapter\PDFLib;

// use Dompdf\Adapter\PDFLib;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaction::with(['user','details','travel_packages'])->get();
    
        return view('pages.admin.transaction.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {

        // dd($request);
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Transaction::create($data);
        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Transaction::findOrFail($id);
        // $items = Transaction::with(['user','details','travel_packages'])->get();
    
        return view('pages.admin.transaction.show',[
            'items' => $items
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

        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaction.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,TransactionRequest $request)
    {
        $data = $request->all();

        $item = Transaction::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);

        Transaction::destroy($item->id);

        return redirect()->route('transaction.index');
        
    }
    
    public function cetakpdf()
    {
        $items = Transaction::with(['user','details','travel_packages'])->get();
    
        
        $pdf = PDF::loadView('pages.admin.transaction.cetakpdf',[ 'items' => $items]);
        // //$pdf = ::loadView
        

        return $pdf->download('transaksi.pdf');
        // return view('pages.admin.transaction.cetakpdf',[
        //     'items' => $items
        // ]);
    }
}
