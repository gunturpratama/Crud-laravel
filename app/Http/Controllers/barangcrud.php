<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class barangcrud extends Controller
{
    //
    //
    //
    //

    public function index()
    {
    	$data['title'] = 'Selamat Datang';

    	$barang = DB::table('barang')->get();


    	return view('frontpage',compact('data','barang'));
    }


    public function showinput()
    {


        $data['title'] = 'input barang';


        return view('tambah',compact('data'));


    }

    public function insert(Request $datareq)
    {

    	$barang = DB::table('barang')->insert([

    		// 'id_barang' => $datareq->id_barang,
    		'nama_barang' => $datareq->nama_barang,
    		'kategori' => $datareq->kategori,
    		'desc' => $datareq->desc,
    		'supplier' => $datareq->supplier



    	]);


    	return redirect('/');

    }


    public function editshow($id){

             // $passport = \App\Passport::find($id);
        $data['title'] = 'edit barang';

         $barang = DB::table('barang')->where('id_barang',$id)->first();




        return view('edit',compact('data','barang'));
    }


    public function editupdate(Request $datareq)
    {


            $barang = DB::table('barang')->where('id_barang',$datareq->id_barang)->update([

            'id_barang' => $datareq->id_barang,
            'nama_barang' => $datareq->nama_barang,
            'kategori' => $datareq->kategori,
            'desc' => $datareq->desc,
            'supplier' => $datareq->supplier




        ]);

              // $datareq->save();




            return redirect('/');




       




    }


    public function deldestroy($id)
    {


        $barang = DB::table('barang')->where('id_barang',$id)->delete();
        

        return redirect('/');
    }



}
