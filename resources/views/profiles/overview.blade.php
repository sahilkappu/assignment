@extends('layouts.main')
@section('title','Account Overview')
@section('content')

<!--begin::Container-->


<div id="kt_content_container">
    <!--begin::Navbar-->
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            <!--begin::Details-->
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <!--begin: Pic-->
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="assets/media/avatars/300-1.jpg" alt="image" />
                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                </div>
                <!--end::Pic-->
                <!--begin::Info-->
                <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <!--begin::User-->
                        <div class="d-flex flex-column">
                            <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name ?? ''}}</a>
                                <a href="#">
                                    <i class="ki-outline ki-verify fs-1 text-primary"></i>
                                </a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-profile-circle fs-4 me-1"></i>{{Auth::user()->name ?? ''}}</a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    <i class="ki-outline ki-geolocation fs-4 me-1"></i>{{Auth::user()->address ?? ''}}</a>
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    <i class="ki-outline ki-sms fs-4"></i>{{Auth::user()->email ?? ''}}</a>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                        <!--begin::Actions-->

                        <!--end::Actions-->
                    </div>
                    <!--end::Title-->

                </div>
                <!--end::Info-->
            </div>
            <!--end::Details-->

        </div>
    </div>
    <!--end::Navbar-->
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <button type="button" href="#" class="btn btn-sm btn-success align-self-center" onclick="editProfile('{{Auth::user()->id}}')">Edit Profile</button>
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->name ?? ''}}</span>
                </div>
                <!--end::Col-->
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Company</label>
                <div class="col-lg-8 fv-row">
                    <span class="fw-semibold text-gray-800 fs-6">Electrovese</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Contact Phone
                    <span class="ms-1" data-bs-toggle="tooltip" title="Phone number must be active">
                        <i class="ki-outline ki-information fs-7"></i>
                    </span></label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2"> @if(Auth::user()->phone_number) {{Auth::user()->phone_number}} <span class="badge badge-success">Verified</span> @else<span class="badge badge-warning">Not Verified</span>@endif</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Company Site</label>
                <div class="col-lg-8">
                    <a href="https://carsonlogistics.net" target="_blank" class="fw-semibold fs-6 text-gray-800 text-hover-primary">https://electrovese.com/</a>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Country
                    <span class="ms-1" data-bs-toggle="tooltip" title="Country of origination">
                        <i class="ki-outline ki-information fs-7"></i>
                    </span></label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">India</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Communication</label>
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
                </div>
            </div>
            <div class="row mb-7">
                <label class="col-lg-4 fw-semibold text-muted">Contact Address
                    <span class="ms-1" data-bs-toggle="tooltip" title="Address">
                        <i class="ki-outline ki-information fs-7"></i>
                    </span></label>
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2"> @if(Auth::user()->address) {{Auth::user()->address}} <span class="badge badge-success">Available</span> @else<span class="badge badge-warning">Not Available</span>@endif</span>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal for Edit the Profile --}}
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="innerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-rounded">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">{{__('Edit User Details')}}</h5>
                <button type="button" class=" btn btn-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa-solid fa-x"></i></span>
                </button>
            </div>
            <form id="editUserData" action="{{route('update.address')}}" method="POST" >
                @csrf
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <div class="row gx-10 mb-5 mx-10">
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <div class="mb-2">
                                    <label class="form-label required"> {{ __('Name') }} </label>
                                    <input type="text" name="name" class="form-control form-control-solid" value="{{Auth::user()->name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <div class="mb-2">
                                    <label class="form-label required"> {{ __('Email') }} </label>
                                    <input class="form-control form-control-solid me-2" type="email" name="email" value="{{Auth::user()->email}}"  required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <div class="mb-2">
                                    <label class="form-label required"> {{ __('Phone Number') }} </label>
                                    <input class="form-control form-control-solid" type="number" name="phone_number" value="{{Auth::user()->phone_number}}" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <div class="mb-2">
                                    <label class="form-label required"> {{ __('Address') }} </label>
                                    <textarea class="form-control form-control-solid" name="address" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                        {{ __('CLOSE') }}
                    </button>
                    <button type="submit" class="btn btn-light-primary me-2">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function editProfile(id){
            $(`#editProfileModal`).modal('show');
            $(`#editUserData`).append(`<input type="hidden" value="${id}" name="id">`)
        }
    </script>
@endsection