<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $file = File::all();

        return view('module_lms', compact('file'));
    }

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
    public function store(StoreFileRequest $request)
    {
        try {            
            $uploadedFile = $request->file('file_path');
            $filePath = $uploadedFile->store('public'); 
    
            // Create a new File model and save file details to the database
            $file = new File();
            $file->week_title = $request->input('week_title');
            $file->file_name = $request->input('file_name');
            $file->file_description = $request->input('file_description');
            $file->file_path = $filePath; // Store the file path or filename
            $file->module_id = $request->input('module_id');
            $file->save();
            

            

            return redirect('/file_upload_lms')->with('status', 'success');
        }   catch (Exception $e) {
            return redirect('/file_upload_lms')->with('status', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileRequest $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }
}
