<?php

namespace App\Http\Controllers;

use App\Http\Requests\Biodates\BiodatesRequest;
use App\Http\Requests\Biodates\UpdateBiodatesRequest;
use App\Repository\Repository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BiodateController extends Controller
{

    protected $biodateRepository;

    public function __construct(Repository $repository)
    {
        $this->biodateRepository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(BiodatesRequest $request)
    {
        $this->biodateRepository->storeBiodates($request->all());
        return response()->json(['message' => 'Data Berhasil Disimpan'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodate  $biodate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = $this->biodateRepository->showBiodates($id);
        } catch(ModelNotFoundException) {
            return response()->json(['message' => 'Data Kosong!']);
        }
        return response()->json(['data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodate  $biodate
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
     * @param  \App\Models\Biodate  $biodate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBiodatesRequest $request, $id)
    {
        try {
            $this->biodateRepository->updateBiodates($request->except('_method', '_token'), $id);
        } catch(ModelNotFoundException) {
            return response()->json(['message' => 'Data Kosong!']);
        }
        return response()->json(['message' => 'Data Berhasil Dirubah!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodate  $biodate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->biodateRepository->destroyBiodates($id);
        } catch(ModelNotFoundException) {
            return response()->json(['message' => 'Data Kosong!']);
        }
        return response()->json(['message' => 'Data berhasil Dihapus!'], 200);
    }
}
