<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusModel;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = StatusModel::get();

        return view('admin.statuses.index', compact('statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatusRequest $request)
    {
        $status = new StatusModel;

        $status->name = $request->name;

        if ($status->save()) {
            return redirect()->back()->with('success', 'Status has been created.');
        } else {
            return redirect()->back()->with('failure', 'Something went wrong.');
        }

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
    public function edit(int $id)
    {
      $status = StatusModel::findOrFail($id);

      return view('admin.statuses.edit', compact('status'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StatusRequest $request, int $id)
    {
      $status = StatusModel::findOrFail($id);

      $status->name = $request->name;

      $status->save();

      return redirect()->back()->with('success', 'Status has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    { 
      $status = StatusModel::findOrFail($id);

      $status->delete();

      return redirect()->back()->with('success', 'Status has been deleted.');
    }
}
