<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Komentar;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;


class komentarController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get komentars
        $komentars = komentar::latest()->paginate(5);

        //render view with komentars
        return view('pages.komentar.komentar', compact('komentars'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pages.komentar.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
            // validate form
            $this->validate($request, [
                'nama'  => 'required|min:5',
                'email' => 'required',
                'pesan' => 'required',
            ]);

            Komentar::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'pesan' => $request->pesan,
            ]);
        
        
            // redirect to index
            return redirect('/komentar')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $komentars = komentar::findOrFail($id);

        //render view with post
        return view('pages.komentar.show', compact('komentars'));
    }
}