<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TypePackageRequest;
use App\Models\TypePackage;
use Illuminate\Http\Request;

class TypePackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pieces = TypePackage::all();
        return view('pages.admin.type-package.index',[
            'pieces' => $pieces
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.type-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypePackageRequest $request)
    {
        $data = $request->all();

        TypePackage::create($data);
        return redirect()->route('type-package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pieces = TypePackage::findOrFail($id);

        return view('pages.admin.type-package.edit',[
            'pieces' => $pieces
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypePackageRequest $request, $id)
    {
        //
        $data = $request->all();

        $item = TypePackage::findOrFail($id);

        $item->update($data);

        return redirect()->route('type-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TypePackage::findOrFail($id);

        TypePackage::destroy($item->id);
        
        return redirect()->route('type-package.index');
    }
}
