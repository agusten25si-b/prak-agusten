<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $data = [
        'username'        => 'Agusten DamarEL Saragih',
        'last_login'      => date('Y-m-d H:i:s'),
        'list_pendidikan' => ['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3'],
        'records' => [
            ['id' => 1, 'name' => 'Record 1'],
            ['id' => 2, 'name' => 'Record 2'],
            ['id' => 3, 'name' => 'Record 3'],
            ['id' => 4, 'name' => 'Record 4']]
    ];
    return view('home', $data);    }


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
    public function show(string $id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}





