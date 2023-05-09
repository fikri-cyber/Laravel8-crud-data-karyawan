<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $cruds = Crud::latest()->paginate(10);
        return view('crud.index', compact('cruds'));
    }
    /**
    * create
    *
    * @return void
    */
    public function create()
    {
        return view('crud.create');
    }

    /**
    * store
    *
    * @param  mixed $request
    * @return void
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Nama_Karyawan' => 'required',
            'Umur'          => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat'        => 'required'

        ]);


        $crud = Crud::create([
            'Nama_Karyawan' => $request->Nama_Karyawan,
            'Umur'          => $request->Umur,
            'Jenis_Kelamin' => $request->Jenis_Kelamin,
            'Alamat'        => $request->Alamat

        ]);

        if($crud){
            //redirect dengan pesan sukses
            return redirect()->route('crud.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('crud.index')->with(['error' => 'Data Gagal Disimpan!']);
        } 
    }
    /**
    * edit
    *
    * @param  mixed $crud
    * @return void
    */
    public function edit(Crud $crud)
    {
        return view('crud.edit', compact('crud'));
    }
    
    /**
    * update
    *
    * @param  mixed $request
    * @param  mixed $crud
    * @return void
    */
    public function update(Request $request, Crud $crud)
    {
        $this->validate($request, [
            'Nama_Karyawan' => 'required',
            'Umur'          => 'required',
            'Jenis_Kelamin' => 'required',
            'Alamat'        => 'required'
        ]);

        //get data Crud by ID
        $crud = Crud::findOrFail($crud->id);
        {

            $crud->update([
                'Nama_Karyawan' => $request->Nama_Karyawan,
                'Umur'          => $request->Umur,
                'Jenis_Kelamin' => $request->Jenis_Kelamin,
                'Alamat'        => $request->Alamat
            ]);

        }

        if($crud){
            //redirect dengan pesan sukses
            return redirect()->route('crud.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('crud.index')->with(['error' => 'Data Gagal Diupdate!']);
        }   
    }

    /**
    * destroy
    *
    * @param  mixed $id
    * @return void
    */
    public function destroy($id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        if($crud){
            //redirect dengan pesan sukses
            return redirect()->route('crud.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('crud.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}