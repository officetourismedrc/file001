<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel\MiscDoc\OntActu\Ont_a_metadata;
use Illuminate\Http\Request;
use App\Models\AdminModel\MiscDoc\OntActu\OntActuArt;

class OntArticleContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $data = OntActuArt::find($request->articleId);
       //return $request;
        
        return view('Admin.Admindashboard.miscArticle.ontArticle.articleContent.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return $request->jsondata;
        
        $data = json_decode($request);
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Ont_a_metadata $ont_a_metadata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ont_a_metadata $ont_a_metadata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ont_a_metadata $ont_a_metadata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ont_a_metadata $ont_a_metadata)
    {
        //
    }
}
