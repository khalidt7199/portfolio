<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\category;
use App\aboutus;
use App\companydetail;
use App\subcategory;
use App\team;
use App\product;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat=category::all();
        $subcat=subcategory::all();
        $about=aboutus::all();
        $team=team::all();
        $comp=companydetail::all();
        $prdid=product::pluck('productid'); $prd = array();
        $prdid=product::pluck('productid');
        foreach($prdid as $id){
            $data = product::where('productid',$id)->first();
            $data->subcategory;
            $prd[] = $data;
        }
        $servicedetail=DB::table('categories')->join('subcategories','categories.catID','=','subcategories.catID')
        ->where('categories.categoryname','Services')->get();
        return view('index',compact('cat','servicedetail','subcat','about','team','comp', 'prd'));
        //return dd($prd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}