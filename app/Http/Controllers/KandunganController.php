<?php

namespace App\Http\Controllers;

//import Model "komentar
use App\Models\Kandungan;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class KandunganController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(Request $request): View
    {
         if ($request->has('search')) {
             // Ini adalah query pencarian
             $kandungans = Kandungan::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
         } else {
             // Ini adalah query untuk menampilkan semua data
             $kandungans = Kandungan::latest()->paginate(5);
         }
      
    
        // Render view dengan kandungans
        return view('pages.kandungan.kandungan', compact('kandungans'));
    }
    


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pages.kandungan.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $validatedData = $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama' => 'required|min:5',
            'kalori' => 'required',
            'protein' => 'required',
            'karbohidrat' => 'required',
            'lemak' => 'required',
            'energi' => 'required'
        ]);
        

        //upload image
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('image'),$image);
       $validatedData['image']=$image;

        //create kandungan
     
        Kandungan::create($validatedData);

        //redirect to index
        return redirect('/kandungan')->with(['success' => 'Data Berhasil Disimpan!']);
    }

      /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get komentar by ID
        $kandungans = Kandungan::findOrFail($id);

        //render view with komentar
        return view('pages.kandungan.show', compact('kandungans'));
    }

     /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get komentar by ID
        $kandungans = Kandungan::findOrFail($id);

        //render view with komentar
        return view('pages.kandungan.edit', compact('kandungans'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:5',
            'kalori' => 'required',
            'protein' => 'required',
            'karbohidrat' => 'required',
            'lemak' => 'required',
            'energi' => 'required'
        ]);

        //get komentar by ID
        $kandungans = Kandungan::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            // var_dump()
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/image', $image->hashName());

            //delete old image
            Storage::delete('public/image/'.$kandungans->image);

            //update komentar with new image
            $kandungans->update([
                'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'kalori'   => $request->kalori,
                'protein' =>  $request->protein,
                'karbohidrat' =>  $request->karbohidrat,
                'lemak' =>  $request->lemak,
                'energi' =>  $request->energi
            ]);

        } else {

            //update komentar without image
            $kandungans->update([
                // 'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'kalori'   => $request->kalori,
                'protein' =>  $request->protein,
                'karbohidrat' =>  $request->karbohidrat,
                'lemak' =>  $request->lemak,
                'energi' =>  $request->energi
            ]);
        }

        //redirect to index
        return redirect()->route('kandungan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $komentar
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get komentar by ID
        $kandungans = Kandungan::findOrFail($id);

        //delete image
        Storage::delete('image/'. $kandungans->image);

        //delete komentar
        $kandungans->delete();

        //redirect to index
        return redirect()->route('kandungan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}


