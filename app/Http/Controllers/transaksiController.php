<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\produk;
use App\Models\pengguna;
use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Exports\transaksiExport;
use App\Imports\transaksiImport;
use Maatwebsite\Excel\Facades\Excel;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datap = transaksi::with('produk')->get();
        // return view('dashboard.range', ['datap'=>$datap]);

        $datap = transaksi::with('produk')->get();
        $datap = json_decode($datap);
        return view('dashboard.range',compact('datap'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = transaksi::all();
        $produk = produk::all();
       return view('landingpage.landing',['transaksi'=> $transaksi,'produk'=> $produk]);


    }

    public function buat()
    {
        $transaksi = transaksi::all();
        $produk = produk::all();
       return view('dashboard.form.transaksi',['transaksi'=> $transaksi,'produk'=> $produk]);

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
            'name' => 'required',
            'email' => 'required',
            'produk_id' => 'required',
            'qty' => 'required',
            'alamat' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        
        transaksi::create($input);
       

        return redirect('/buy')
            ->with('success','please wait, your order will arrive as soon');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'produk_id' => 'required',
            'qty' => 'required',
            'alamat' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        
        transaksi::create($input);
       

        return redirect('/dashboard/range')
            ->with('success','please wait, your order will arrive as soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);
        //    faindorfail function idny ga ktmu jd 404
           return view('dashboard.detail.transaksidetail', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi =  transaksi::find($id);
        $produk = produk::all();
        return view('dashboard.formedit.formedittrans', compact(['transaksi','produk']));
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
        $transaksi =  transaksi::find($id);
        $transaksi->update($request->except(['_token','submit']));
        return redirect('/dashboard/range');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi -> delete();
     //    faindorfail function idny ga ktmu jd 404
        return redirect('/dashboard/range')
        ->with('success','transactions data deleted successfully');
    }

    public function exportexcel(){
        return Excel::download(new transaksiExport, 'datatransaksi.xlsx');
    }

    public function exportpdf(){
        $data = transaksi::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('datatransaksi-pdf');
        return $pdf->download('datatransaksi.pdf');
    }

    public function importexcel(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('TransaksiData', $namafile);

        Excel::import(new transaksiImport, \public_path('/TransaksiData/'.$namafile));
        return \redirect()->back();
    }
}
