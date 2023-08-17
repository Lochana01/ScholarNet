<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Http\Requests\StoreModuleRequest;
use App\Http\Requests\UpdateModuleRequest;

class ModuleController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModuleRequest $request)
    {
        try {
            $module = new Module;
            
            $module->module_title = $request->module_title;
            $module->course_id = $request->course_id;
            $module->module_description = $request->module_description;
            $module->module_duration = $request->module_duration;
            $module->module_credits = $request->module_credits;
            $module->module_prerequisites = $request->module_prerequisites;
            
            $module->save();

            return redirect('/admin_create_module')->with('status', 'success');
        }   catch (Exception $e) {
            return redirect('/admin_create_module')->with('status', 'error');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $module = Module::all();

        return view('admin_module_overview', compact('module'));
    }

    public function displayModule()
    {
        $module = Module::all();
        $status = session('status');

        return view('admin_manage_module', compact('module', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        return view('admin_edit_module', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModuleRequest $request, Module $module)
    {
        $module->update([
            'module_title' => $request->module_title,
            'course_id' => $request->course_id,
            'module_description' => $request->module_description,
            'module_duration' => $request->module_duration,
            'module_prerequisites' => $request->module_prerequisites,
            'module_credits' => $request->module_credits,
        ]);

        return redirect()->route('admin_manage_module')->with('status', 'edit_success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        //
    }

    public function deactivateModule($id)
    {
        $module = Module::find($id);

        if ($module) {
            //$module->update(['module_status' => false]);
            $module->module_status = false;
            $module->save();
        }

        return redirect()->route('admin_manage_module')->with('status', 'success');
    }
}
