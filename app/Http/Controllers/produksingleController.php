<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class produksingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // with('roles')->get()
        // $datap = produk::all();
        // return view('dashboard.ps', ['datap'=>$datap]);

        $datap = produk::all();
        $datap = json_decode($datap);
        return view('dashboard.ps',compact('datap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
           return view('dashboard.form.formproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'desc' => 'required',
        ]);
        $data = produk::create($request->all());
                if($request->hasFile('img')){
                    $request->file('img')->move('imgcdbry', $request->file('img')->getClientOriginalName());
                    $data->img = $request->file('img')->getClientOriginalName();
                    $data->save();
                }
        return redirect('/dashboard/product-single')
            ->with('success','Product data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $produk = produk::findOrFail($id);
        // return view('dashboard.detail.produks', ['produk' => $produk]);


           $produk = produk::findOrFail($id);
           $produk = json_decode($produk);
           return view('dashboard.detail.produks',compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $class =  student::find($id);
    //     $produk = produk::findOrFail($id);
    //    return view('dashboard.formedit.formproduks',['produk' => $produk]);

       $produk = produk::findOrFail($id);
       $produk = json_decode($produk);
       return view('dashboard.formedit.formproduks',compact('produk'));
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
        $produk =  produk::find($id);
        $produk->update($request->all());
        if($request->hasFile('img')){
            $request->file('img')->move('imgcdbry', $request->file('img')->getClientOriginalName());
            $produk->img = $request->file('img')->getClientOriginalName();
            $produk->save();
        }
        return redirect('/dashboard/product-single');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk -> delete();
        return redirect('/dashboard/product-single')
        ->with('success','produck data deleted successfully');
        
    }
}
