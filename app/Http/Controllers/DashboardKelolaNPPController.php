<?php

namespace App\Http\Controllers;

use App\Models\Npp;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardKelolaNPPController extends Controller
{
    public function index()
    {
        $npps = Npp::latest();

        if(request('search')){
            $npps->where('no_npp', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.kelola_npp.index', [
            "npps" => $npps->paginate(5),
        ]);

        /**return view('dashboard.kelola_npp.index', [
            "npps" => Npp::latest()->get()
        ]);

        return view('dashboard.kelola_npp.index', [
            'npps' => Npp::all()
        ]); */
    }

    public function show(Npp $npp)
    {
        return $npp;

    }

    public function create()
    {
        return view('dashboard.kelola_npp.create');
    }

    public function store(Request $request)
    {   
        // return $request;
        $validateData = $request->validate([
            'no_agenda' => 'required',
            'no_npp'    => 'required',
            'tanggal_terima' => 'required',
            'nama_pja' => 'required',
            'no_nde' => 'required',
            'tanggal_nde' => 'required',
            'verifikator' => 'required',
        ]);

        $validateData['slug'] = $request->no_npp;

        Npp::create($validateData);

        return redirect('/dashboard/kelola_npp')->with('success', 'Data NPP Baru Telah Ditambahkan');
    }

    public function edit(Npp $npp)
    {
        return view('dashboard.kelola_npp.edit',
        [
            'npp' => $npp
        ]);
        
    }

    public function update(Request $request, Npp $npp)
    {
        $rules = [
            'no_agenda' => 'required',
            'no_npp'    => 'required',
            'tanggal_terima' => 'required',
            'nama_pja' => 'required',
            'no_nde' => 'required',
            'tanggal_nde' => 'required',
            'verifikator' => 'required',
        ];

        if($request->slug != $npp->slug){
            $rules['slug'] = 'required|unique:npps';
        }

        $validateData = $request->validate($rules);


        Npp::where('id', $npp->id)
            ->update($validateData);

        return redirect('/dashboard/kelola_npp')->with('success', 'Data NPP Baru Telah Diedit');
    }

    public function destroy(Npp $npp)
    {
        // return $npp;
        Npp::destroy($npp->id);
        return redirect('/dashboard/kelola_npp')->with('success', 'Data NPP Telah Terhapus');
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Npp::class, 'slug', $request->no_npp);
    }
}

   
