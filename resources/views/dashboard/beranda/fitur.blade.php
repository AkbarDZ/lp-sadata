@extends('dashboard.admin')

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row mb-8 mt-8 justify-content-between">
    <h1 style="width: fit-content" class="mb-5">Beranda - Features</h1>
    <div class="d-flex gap-4 w-700px justify-content-start justify-content-md-end flex-wrap">
        <form method="post" id="upload-excel" action="/produk/import_excel" enctype="multipart/form-data">
            @csrf
            <a href="{{ route('beranda.create_fitur') }}"
                class="btn fs-4 w-50px w-md-150px h-45px btn-white text-center text-dark border border-gray-500 d-flex align-items-center justify-content-evenly"
                id="upload-excel-button">
                <b class="d-none d-md-flex mx-0">Tambah</b>
                <i class="fa-solid fa-square-plus text-center fs-4 text-gray-800 mx-0 p-0"></i>
            </a>
        </form>
    </div>
</div>

<div class="card card-xl-stretch mb-5 mb-xl-8 ">

    <!--begin::Body-->
    <div class="card-body py-3">

        <div class="tab-content">

            <div class="row mx-3 justify-content-between border-bottom pt-4 border-default">

                <div class="d-flex flex-wrap w-800px justify-content-start align-items-start px-0">
                    <input type="search" class="form-control mb-6 w-150px w-lg-300px h-45px px-5 me-4 border-gray-400"
                        placeholder="Search Here">
                </div>
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
                            <th class="pb-3 ps-4 pt-0 w-200px min-w-200px mw-sm-200px">Points Title
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Points Descriptions
                            </th>
                            <th class="pb-3 pt-0 px-2 text-center w-200px min-w-200px mw-sm-200px">Points Image
                            </th>
                            <th class="pb-3 ps-2 pe-4 pt-0 text-center w-100px min-w-100px">Action
                            </th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->     
                    <tbody>
                        @foreach ($datafitur as $item)        
                        <tr class="align-top text-left">
                            <td class="ps-4 pe-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{$item -> points_title}}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{$item -> points_description}}
                                </p>
                            </td>

                            <td class="px-2 pm-10 ">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $item->image_path) }}" alt="Image" style="max-width: 100px; max-height: 100px;">
                                </div>
                            </td>
                          
                            <td class="ps-2 pe-4 pm-10 align-middle">
                                <div class="d-flex justify-content-center">
                                    <div class="d-flex w-150px justify-content-evenly">
                                        <a href="{{ route('beranda.edit_fitur', ['id' => $item->id]) }}" class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
                                        <form action="{{ route('beranda.delete_fitur', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-icon btn-danger"><i class="las la-trash fs-2"></i></button>
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
