<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employees\EmployeeStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		return view('admin.employees.list');
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('admin.employees.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(EmployeeStoreRequest $request)
	{
		// dd($request->validated());
		$data = User::create($request->validated());
		$data->is_role = 0;
		$data->save();

		return redirect(route('admin.employee.index'))->with('success', 'Thêm thành công');
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
