@extends('supplier')

@section('title', 'Edit Supplier')

@section('PageTitle')
<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
    <!--begin::Heading-->
    <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Supplier</h1>
    <!--end::Heading-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
        <li class="breadcrumb-item text-muted">
            <a href="#" class="text-muted">Home</a>
        </li>
        <li class="breadcrumb-item text-muted">Supplier</li>
        <li class="breadcrumb-item text-dark">Edit</li>
    </ul>
    <!--end::Breadcrumb-->
</div>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body p-12">
                        <!--begin::Form-->
                        <form action="{{ route('supplier.update',$supplier->sup_id) }}" method="POST" id="kt_invoice_form">
                            @csrf
                            @method('PUT')
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start flex-xxl-row">
                                <!--begin::Input group-->
                                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                    <span class="fs-2x fw-bold text-gray-800">Supplier</span>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-10"></div>
                            <!--end::Separator-->
                            <!--begin::Wrapper-->
                            <div class="mb-0">
                                 <!--begin::Row-->
								 <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Supplier Name</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_name" class="form-control form-control" rows="1" placeholder="Supplier Name">{{ $supplier->sup_name }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Supplier Shop</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_shop" class="form-control form-control" rows="1" placeholder="Shop">{{ $supplier->sup_shop }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Address</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_address" class="form-control form-control" rows="3" placeholder="Address">{{ $supplier->sup_address }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Phone Number</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_phone" class="form-control form-control" rows="1" placeholder="Phone Number">{{ $supplier->sup_phone}}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Fax</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_fax" class="form-control form-control" rows="1" placeholder="Fax">{{ $supplier->sup_fax }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Email</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_email" class="form-control form-control" rows="1" placeholder="Email">{{ $supplier->sup_email }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
								<!--begin::Row-->
                                <div class="row gx-10 mb-5">
                                    <!--begin::Col-->
                                    <div class="col-12">
                                        <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Shipping Fee</label>
                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <textarea name="sup_shippingFee" class="form-control form-control" rows="4" placeholder="ShippingFee">{{ $supplier->sup_shippingFee }}</textarea>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->			
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('supplier.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                            <!--end::Wrapper-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Layout-->
    </div>
    <!--end::Container-->
</div>



@stop
