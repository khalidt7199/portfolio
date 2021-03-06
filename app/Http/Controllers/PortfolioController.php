<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\category;
use App\aboutus;
use App\companydetail;
use App\subcategory;
use App\team;
use Mail;

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
        
        $servicedetail=DB::table('categories')->join('subcategories','categories.catID','=','subcategories.catID')
        ->where('categories.categoryname','Services')->get();
        return view('index',compact('cat','subcat','about','team','comp','servicedetail'));
        //return view('index');
    }
    public function send(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $msg=$request->input('message');


  
        $data = array('email' => $email, 'msg'=>$msg,'name'=>$name);

        Mail::send(['html'=>'mail'],$data,function($message) use($data){
            $message->to('khalidt7199@gmail.com','khalid')->subject('Message From a visitor');
            $message->from($data['email'],$data['name']);

        });  
        return redirect()->back();

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
