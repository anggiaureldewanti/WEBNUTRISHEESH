<?php

namespace App\Http\Controllers;

//import Model "reseps
use App\Models\Resep;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $reseps = Resep::latest()->paginate(5);

        //render view with posts
        return view('pages.resep.resep', compact('reseps'));
    }

       /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pages.resep.create');
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
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'     => 'required|min:2',
            'bahan'   => 'required|min:10', 
            'step'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/reseps', $image->hashName());

        //create resep
        Resep::create([
            'image'     => $image->hashName(),
            'nama'     => $request->nama,
            'bahan'   => $request->bahan,
            'step'   => $request->step,
        ]);

        //redirect to index
        return redirect()->route('pages.resep.resep')->with(['success' => 'Data Resep Berhasil Disimpan!']);
    }

     /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $reseps = Resep::findOrFail($id);

        //render view with post
        return view('pages.resep.show', compact('reseps'));
    }

       /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $reseps = Resep::findOrFail($id);

        //render view with post
        return view('pages.resep.edit', compact('reseps'));
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
            'nama'     => 'required|min:2',
            'bahan'   => 'required|min:10', 
            'step'   => 'required|min:10'
        ]);

        //get post by ID
        $reseps = Resep::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/reseps', $image->hashName());

            //delete old image
            Storage::delete('public/reseps/'.$reseps->image);

            //update post with new image
            $reseps->update([
                'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'bahan'   => $request->bahan,
                'step'   => $request->step,
            ]);

        } else {

            //update post without image
            $reseps->update([
        
                'nama'     => $request->nama,
                'bahan'   => $request->bahan,
                'step'   => $request->step,
            ]);
        }

        //redirect to index
        return redirect()->route('pages.resep.resep')->with(['success' => 'Data Berhasil Diubah!']);
    }

     /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $reseps = Resep::findOrFail($id);

        //delete image
        Storage::delete('public/reseps/'. $reseps->image);

        //delete post
        $reseps->delete();

        //redirect to index
        return redirect()->route('pages.resep.resep')->with(['success' => 'Data Resep Berhasil Dihapus!']);
    }
}
