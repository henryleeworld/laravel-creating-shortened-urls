<?php

namespace App\Http\Controllers;
   
use AshAllenDesign\ShortURL\Facades\ShortURL;
use AshAllenDesign\ShortURL\Models\ShortURL as ShortURLModel;
use Illuminate\Http\Request;

class ShortenedUrlsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortenedUrls = ShortURLModel::latest()->get();
        return view('shortened-urls', compact('shortenedUrls'));
    }
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'url' => 'required|url'
        ]);
        ShortURL::destinationUrl($request->url)->make();
        return redirect('shortened-urls/generate')
             ->with('success', __('Short URL generated successfully!'));
    }
}
