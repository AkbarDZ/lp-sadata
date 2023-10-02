@extends('dashboard.admin')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row mb-8 mt-8 justify-content-between">
    <h1 style="width: fit-content" class="mb-5">Feature - Main Content</h1>
</div>

<div class="card card-xl-stretch mb-5 mb-xl-8 ">

    <!--begin::Body-->
    <div class="card-body py-3">

        <div class="tab-content">

            <div class="row mx-3 justify-content-between border-bottom pt-4 border-default">


                <input type="search" class="form-control mb-6 w-150px w-lg-300px h-45px px-5 me-4 border-gray-400"
                    id="search-sum-active" data-kt-filter="search" placeholder="Search Here">

                <a href="{{ route('fitur.create') }}"
                    class="btn fs-4 w-50px w-md-150px h-45px btn-white text-center text-dark border border-gray-500 d-flex align-items-center justify-content-evenly"
                    id="upload-excel-button">
                    <b class="d-none d-md-flex mx-0">Tambah</b>
                    <i class="fa-solid fa-square-plus text-center fs-4 text-gray-800 mx-0 p-0"></i>
                </a>

            </div>
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_datatable_zero_configuration_2_nonactive" class="table table-hover border-bottom border-top 
                    pt-4 mb-4 border-gray-400 table-row-bordered table-row-gray-400 
                    align-middle gy-4 gx-0">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-semibold fs-4">
                            <th class="pb-3 ps-4 pt-0 w-200px min-w-200px mw-sm-200px">Features Name
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Feature Description
                            </th>
                            <th class="pb-3 pt-0 px-2 text-center w-200px min-w-200px mw-sm-200px">Feature Image
                            </th>
                            <th class="pb-3 ps-2 pe-4 pt-0 text-center w-100px min-w-100px">Action
                            </th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        @foreach($fiturdash as $item)
                        <tr class="align-top text-left">
                            <td class="ps-4 pe-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->feature_name}}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->description }}
                                </p>
                            </td>

                            <td class="px-2 pm-10 ">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $item->feature_image_path) }}" alt="Image"
                                        style="max-width: 100px; max-height: 100px;">
                                </div>
                            </td>


                            <td class="ps-2 pe-4 pm-10 align-middle">
                                {{-- <div class="dropdown">
                                    <a class="btn fs-4 w-100px h-30px btn-white text-center text-dark border border-gray-500 dropdown-toggle d-flex align-items-center justify-content-evenly"
                                        href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Atur
                                    </a>

                                    <ul class="dropdown-menu w-200px w-md-250px" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Edit</a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Pindah
                                                Etalase</a></li>
                                    </ul>
                                </div> --}}
                                <div class="d-flex justify-content-center">
                                    <div class="w-150px d-flex justify-content-evenly">
                                        <a href="{{ route('fitur.edit', ['id' => $item->id]) }}"
                                            class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
                                        <form action="{{ route('fitur.delete', ['id' => $item->id]) }}" method="POST"
                                            onsubmit="return confirm('you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-danger"><i
                                                    class="las la-trash fs-2"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    <!--end::Table body-->

                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->

        </div>
    </div>
    <!--end::Body-->
</div>
@endsection
