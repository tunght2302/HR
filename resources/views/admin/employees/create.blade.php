@extends('layouts.app')
@section('title')
    Employees
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
                    <aside class="sidebar sidebar-user">
                        <div class="card ctm-border-radius shadow-sm">
                            <div class="card-body py-4">
                                <div class="row">
                                    <div class="col-md-12 mr-auto text-left">
                                        <div class="custom-search input-group">
                                            <div class="custom-breadcrumb">
                                                <ol class="breadcrumb no-bg-color d-inline-block p-0 m-0 mb-2">
                                                    <li class="breadcrumb-item d-inline-block"><a href="index.html"
                                                            class="text-dark">Trang chủ</a></li>
                                                    <li class="breadcrumb-item d-inline-block active">Người lao động</li>
                                                </ol>
                                                <h4 class="text-dark">Thêm người</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card ctm-border-radius shadow-sm">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Chi tiết nội dung</h4>
                            </div>
                            <div class="card-body">
                                <div id="list-example" class="list-group border-none">
                                    <a class="list-group-item list-group-item-action border-none"
                                        href="javascript:void(0)">Nền tảng</a>
                                    <a class="list-group-item list-group-item-action border-none"
                                        href="javascript:void(0)">Thuê người làm</a>
                                    <a class="list-group-item list-group-item-action border-none"
                                        href="javascript:void(0)">Đội & Văn Phòng</a>
                                    <a class="list-group-item list-group-item-action border-none"
                                        href="javascript:void(0)">Lương</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="col-xl-9 col-lg-8  col-md-12">
                    @include('Notifications._message_error')
                    @include('Notifications._message_success')
                    <form action="{{ route('admin.employee.store') }}" method="POST">
                        @csrf
                        <div class="accordion add-employee" id="accordion-details">
                            <div class="card shadow-sm ctm-border-radius">
                                <div class="card-header" id="basic1">
                                    <h4 class="cursor-pointer mb-0">
                                        <a class=" coll-arrow d-block text-dark" href="javascript:void(0)"
                                            data-toggle="collapse" data-target="#basic-one" aria-expanded="true">
                                            Chi tiết cơ bản
                                            <br><span class="ctm-text-sm">Được tổ chức và an toàn.</span>
                                        </a>
                                    </h4>
                                </div>
                                <div class="card-body p-0">
                                    <div id="basic-one" class="collapse show ctm-padding" aria-labelledby="basic1"
                                        data-parent="#accordion-details">
                                        <div class="row">
                                            <div class="col form-group">
                                                <input type="text" value="{{ old('name') }}" class="form-control" name="name" placeholder="Tên">
                                            </div>
                                            <div class="col form-group">
                                                <input type="text" value="{{ old('last_name') }}" class="form-control" name="last_name"
                                                    placeholder="Họ">
                                            </div>
                                            <div class="col form-group">
                                                <input type="email" value="{{ old('email') }}" class="form-control" name="email"
                                                    placeholder="Email">
                                            </div>
                                            <div class="col form-group">
                                                <input type="text" value="{{ old('phone_number') }}" class="form-control" name="phone_number"
                                                    placeholder="Số điện thoại">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm ctm-border-radius">
                                <div class="card-header" id="headingTwo">
                                    <h4 class="cursor-pointer mb-0">
                                        <a class="coll-arrow d-block text-dark" href="javascript:void(0)"
                                            data-toggle="collapse" data-target="#employee-det">
                                            Chi tiết việc làm
                                            <br><span class="ctm-text-sm">Hãy cho mọi người biết những điều cần thiết để họ
                                                chuẩn bị đầy đủ.</span>
                                        </a>
                                    </h4>
                                </div>
                                <div class="card-body p-0">
                                    <div id="employee-det" class="collapse show ctm-padding" aria-labelledby="headingTwo"
                                        data-parent="#accordion-details">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <div class="cal-icon">
                                                    <input class="form-control cal-icon-input" value="{{old('hire_date')}}" type="date"
                                                        name="hire_date" placeholder="Ngày bắt đầu">
                                                </div>
                                            </div>
                                            <div class="col-12 form-group">
                                                <select class="form-control select" name="job_id">
                                                    <option selected>Chức danh </option>
                                                    <option value="1">PHP</option>
                                                    <option value="2">Android</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm ctm-border-radius">
                                <div class="card-header" id="headingThree">
                                    <h4 class="cursor-pointer mb-0">
                                        <a class="coll-arrow d-block text-dark" href="javascript:void(0)"
                                            data-toggle="collapse" data-target="#term-office">
                                            Văn phòng
                                            <br><span class="ctm-text-sm">Giữ mọi thứ ngăn nắp — và tiết kiệm thời gian sắp
                                                xếp
                                                người phê duyệt cũng như các ngày nghỉ lễ.</span>
                                        </a>
                                    </h4>
                                </div>
                                <div class="card-body p-0">
                                    <div id="term-office" class="collapse show ctm-padding"
                                        aria-labelledby="headingThree" data-parent="#accordion-details">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <select class="form-control select" name="manager_id">
                                                    <option selected>Người quản lý</option>
                                                    <option value="1">Robert Wilson</option>
                                                    <option value="2">Maria Cotton</option>
                                                </select>
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <select class="form-control select" name="department_id">
                                                    <option selected>Văn Phòng</option>
                                                    <option value="1">Focus Technology</option>
                                                    <option value="2">Easy Technology</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm ctm-border-radius">
                                <div class="card-header" id="headingFour">
                                    <h4 class="cursor-pointer mb-0">
                                        <a class="coll-arrow d-block text-dark" href="javascript:void(0)"
                                            data-toggle="collapse" data-target="#salary_det">
                                            Chi tiết về lương
                                            <br><span class="ctm-text-sm">Được lưu trữ an toàn, chỉ có Super Admin, Payroll
                                                Admin và chính họ mới nhìn thấy.</span>
                                        </a>
                                    </h4>
                                </div>
                                <div class="card-body p-0">
                                    <div id="salary_det" class="collapse show ctm-padding" aria-labelledby="headingFour"
                                        data-parent="#accordion-details">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <div class="cal-icon">
                                                    <input class="form-control cal-icon-input" value="{{old('salary')}}" name="salary"
                                                        type="number" placeholder="Lương">
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group mb-0">
                                                <div class="cal-icon">
                                                    <input class="form-control cal-icon-input" value="{{old('commission_pct')}}" name="commission_pct"
                                                        type="number" placeholder="Hoa hồng">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="submit-section text-center btn-add">
                                    <button type="submit"
                                        class="btn btn-theme text-white ctm-border-radius button-1">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
