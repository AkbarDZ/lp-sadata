@extends('dashboard.admin')

@section('content')
<style>
    .text-danger {
        color: red;
    }
</style>

<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class=" container-xxl ">
      


            <div class="card card-xl-stretch mb-5 mb-xl-8 ">

                <div class="card-body py-3">

                    <div class="tab-content" id="myTabContent">

                        {{-- summary active --}}
                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                            <div class="row mx-3 justify-content-between border-bottom pt-4 border-default">

                                <input type="search"
                                    class="form-control mb-6 w-150px w-lg-300px h-45px px-5 me-4 border-gray-400"
                                    id="search-sum-active" data-kt-filter="search" placeholder="Search Here">

                                <a href="{{ route('harga.create_general') }}"
                                    class="btn fs-4 w-50px w-md-150px h-45px btn-white text-center text-dark border border-gray-500 d-flex align-items-center justify-content-evenly"
                                    id="upload-excel-button">
                                    <b class="d-none d-md-flex mx-0">Tambah</b>
                                    <i class="fa-solid fa-square-plus text-center fs-4 text-gray-800 mx-0 p-0"></i>
                                </a>


                            </div>

                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table id="kt_datatable_zero_configuration_1" class="table table-hover border-bottom border-top 
                                    pt-4 mb-4 border-gray-400 table-row-bordered table-row-gray-400 
                                    align-middle gy-4 gx-0">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-semibold fs-4">

                                            <th class="pb-3 pt-0 w-200px min-w-200px mw-sm-300px">
                                                No
                                            </th>
                                            <th class="pb-3 pt-0 w-200px min-w-300px mw-sm-200px">
                                                General
                                            </th>
                                            <th class="pb-3 pt-0 w-200px min-w-300px mw-sm-200px">
                                                Status
                                            </th>
                                            <th class="pb-3 ps-2 pe-4 pt-0 text-center w-100px min-w-100px">
                                                Atur</th>


                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach ($generals as $general)
                                        <tr class="align-top text-left">
                                            <td class="ps-4 pm-10">
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-5">
                                                    {{ $general->id }}

                                                </a>
                                            </td>

                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $general->guidelines }}
                                                </a>
                                            </td>
                                            <td class="px-0 pm-10">

                                                <span class="text-muted fw-semibold d-block fs-6">
                                                    Status Basic : @if ($general->statusbasic === 'aktif')
                                                    <i class="fa fa-check-circle text-danger"></i>
                                                    @elseif ($general->statusbasic === 'nonaktif')
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                    @endif
                                                </span>
                                                <span class="text-muted fw-semibold d-block fs-7">
                                                    Status Advance : @if ($general->statusadvance === 'aktif')
                                                    <i class="fa fa-check-circle text-danger"></i>
                                                    @elseif ($general->statusadvance === 'nonaktif')
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                    @endif</span>
                                                <span class="text-muted fw-semibold d-block fs-7">
                                                    Status Expert : @if ($general->statusexpert === 'aktif')
                                                    <i class="fa fa-check-circle text-danger"></i>
                                                    @elseif ($general->statusexpert === 'nonaktif')
                                                    <i class="fa fa-times-circle text-danger"></i>
                                                    @endif</span>
                                            </td>

                                            <td class="ps-2 pe-4 pm-10 align-middle">
                                                <div class="d-flex justify-content-center">
                                                    <div class="w-150px d-flex justify-content-evenly">
                                                        <a href="{{ route('harga.edit_general', ['id' => $general->id]) }}"
                                                            class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
                                                        <form action="{{ route('harga.destroy_general', ['id' => $general->id]) }}" method="POST"
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
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
@endsection