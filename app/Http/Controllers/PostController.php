<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin',[
            'posts' => post::all()
        ]);

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(post $view)
    {

        return view('show',[
            'posts'=>$view
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $view)
    {
        //
        if($view->imagenik){
            Storage::delete($view->imagenik);
        }
        if($view->imagekk){
            Storage::delete($view->imagekk);
        }
        post::destroy($view->id);
        //redirect dibenerin dengan halaman terpisah
        return redirect('/DashboardAdmin/view');
    }
}
