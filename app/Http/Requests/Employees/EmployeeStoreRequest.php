<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		return [
			'name' => 'required|string|max:255',
			'last_name' => 'required|string|max:255',
			'email' => 'required|email|unique:users,email|max:255',
			'password' => 'nullable',
			'phone_number' => 'required|string|max:20',
			'hire_date' => 'required|date',
			// 'job_id' => 'required|integer|exists:jobs,id',
			'job_id' => 'required',
			'salary' => 'required|numeric|min:0',
			'commission_pct' => 'nullable|numeric|min:0|max:100',
			'manager_id' => 'required|nullable|exists:users,id',
			// 'department_id' => 'required|integer|exists:departments,id',
			'department_id' => 'required',
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'Tên không được để trống.',
			'last_name.required' => 'Họ không được để trống.',
			'email.required' => 'Email không được để trống.',
			'email.email' => 'Email phải có định dạng hợp lệ.',
			'email.unique' => 'Email đã tồn tại.',
			'phone_number.required' => 'Số điện thoại không được để trống.',
			'hire_date.required' => 'Ngày thuê không được để trống.',
			'hire_date.date' => 'Ngày thuê phải có định dạng ngày hợp lệ.',
			'job_id.required' => 'Công việc không được để trống.',
			'salary.required' => 'Lương không được để trống.',
			'salary.numeric' => 'Lương phải là số.',
			'commission_pct.numeric' => 'Phần trăm hoa hồng phải là số.',
			'commission_pct.max' => 'Phần trăm hoa hồng không được vượt quá :max.',
			'manager_id.exists' => 'Quản lý không tồn tại.',
			'department_id.required' => 'Phòng ban không được để trống.',
		];
	}
}
