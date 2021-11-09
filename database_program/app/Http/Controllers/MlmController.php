<?php

namespace App\Http\Controllers;

use App\Models\Mlm;
use Illuminate\Http\Request;

class MlmController extends Controller
{
    
    public function index()
    {
        $mlm=Mlm::All();
        return view('index',compact('mls'));
    }

    
    public function create()
    {
        $mlm=Mlm::All();
        return view('create',compact('mlm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = DB::table('mlm')->where(upline,'=',$request->upline)->groupBy('upline')->count();
        if (count>=2) {
            $mlm=DB::table('mlm')->groupBy('upline')->having(DB::raw('count(id)'), '<', 2)->orderBy('id')->get();
            return view('index',compact('mlm'));
        } else {
            Mlm::create([
                'Nama' => $request->Nama,
                'Alamat' => $request->AlamatReferensi,
                'notel' => $request->notel,
                'upline' => $request->upline,
            ]);
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mlm  $mlm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mlm = Mlm::where('id','=',$id)->orWhere('Nama','=',$id)->orWhere('notel','=',$id)->get();
        return view('index',compact('mlm'));
    }
}
