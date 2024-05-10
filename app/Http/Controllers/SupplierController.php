<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', compact('suppliers'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());
        Alert::success('Success', 'Supplier updated successfully!');
        return redirect()->route('supplier.index');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        Alert::success('Success', 'Supplier deleted successfully!');
        return redirect()->route('supplier.index');
    }

    public function store(Request $request)
    {
        $tambah_supplier          = new Supplier;
        $tambah_supplier->kd_supp  = $request->addkdsupp;
        $tambah_supplier->nm_supp  = $request->addnmsupp;
        $tambah_supplier->alamat   = $request->addaml;
        $tambah_supplier->telepon    = $request->addtel;
        $tambah_supplier->save();

        Alert::success('Pesan ','Data berhasil disimpan');
        return redirect('/supplier');
    }


}
