@extends('layouts.main')
@section('title','Add Blogs')
@section('content')
<div id="kt_content_container">
    <div class="card" id="">
        <div class="card-header border-0">
            <div class="col-md-12 card-title d-flex align-items-center justify-content-center">
            <h2 class="fs-bold fs-1 text-dark ">{{__( 'ADD BLOGS')}}</h2>
            </div>
        </div>
        <div class="card-body ">
            <form action="{{route('create.blog')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="separator my-4"></div>
                <div class="mb-0 text-capitalize">
                    <div class="row gx-10 mb-5">
                        <div class="col-lg-4">
                            <label class="form-label fs-4 fw-bold text-gray-700 mb-3  required">{{ __('Header') }}
                            </label>
                            <div class="mb-5">
                                <input type="text" class="form-control form-control-solid" name="header" placeholder="Blog Header" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-label fs-4 fw-bold text-gray-700 mb-3  required">{{ __('Icon') }}
                            </label>
                            <div class="mb-5">
                                <input type="file" class="form-control form-control-solid" name="icon" placeholder="Icon" />
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        
                        <div class="col-lg-4">
                            <label class="form-label fs-4 fw-bold text-gray-700 mb-3  required">{{ __('Author Name') }}
                            </label>
                            <div class="mb-5">
                                <input type="text" class="form-control form-control-solid" name="author" placeholder="Author Name" />
                            </div>
                        </div>
                         <div class="col-lg-4">
                            <label class="form-label fs-6 fw-bold text-gray-700 mb-3 required">{{ __('Blog Category') }}
                            </label>
                            <div class="mb-5">
                                <select class="form-control form-control-solid" name="category" data-control="select2" aria-label="Select example" required>
                                    <option value="" disabled selected>{{__('Choose Category')}}</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Science">Science</option>
                                    <option value="Health">Health</option>
                                    <option value="Food">Food</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label fs-4 fw-bold text-gray-700 mb-3 required">
                                {{ __('Main Description') }}</label>
                            <div class="mb-5">
                                <textarea class="form-control form-control-solid" rows="2" name="description" data-kt-autosize="true"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-end position-relative" data-kt-customer-table-toolbar="base">
                    <button type="sumbit" class="btn btn-primary me-3" id="">{{ __('Create BLog') }}</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>
@endsection