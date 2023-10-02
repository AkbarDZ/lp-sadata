@extends('dashboard.admin')

@section('content')

<div class="content d-flex flex-column flex-column-fluid " id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class=" container-xxl ">
            <!--begin::Row-->
            <!--begin::Tables Widget 2-->


            <div class="card card-xl-stretch mb-5 mb-xl-8 ">

                <!--begin::Body-->
                <div class="card-body py-3">

                    <div class="tab-content" id="myTabContent">

                        {{-- summary active --}}
                        <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                            <div class="row mx-3 justify-content-between border-bottom pt-4 border-default">



                                <input type="search"
                                    class="form-control mb-6 w-150px w-lg-300px h-45px px-5 me-4 border-gray-400"
                                    id="search-sum-active" data-kt-filter="search" placeholder="Search Here">



                                <div class="card-toolbar d-flex w-150px h-45px px-0 p-1 mb-6 ">
                                    @if ($showAddButton)
                                    <a href="{{ route('harga.create') }}" class="btn btn-sm btn-light-primary">


                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                                    transform="rotate(-90 11.364 20.364)" fill="black" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Add New</a>
                                    @endif
                                </div>

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
                                                Basic Title
                                            </th>
                                            <th class="pb-3 pt-0 w-200px min-w-300px mw-sm-200px">
                                                Advance Title
                                            </th>
                                            <th class="pb-3 pt-0 w-200px min-w-300px mw-sm-200px">
                                                Expert Title
                                            </th>
                                            <th class="pb-3 pt-0 w-150px min-w-300px mw-sm-150px">
                                                Created At</th>
                                            <th class="pb-3 pt-0 w-150px min-w-200px mw-sm-150px">
                                                Updated At</th>

                                            <th class="pb-3 pt-0 w-150px min-w-200px mw-sm-150px">
                                                Atur</th>

                                        </tr>
                                    </thead>
                                    <!--end::Table head-->

                                    <!--begin::Table body-->
                                    <tbody>
                                        @foreach($basics as $basic)
                                        <tr class="align-top text-left">
                                            <td class="ps-4 pm-10">
                                                <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-5">
                                                    {{ $basic->id }}

                                                </a>
                                            </td>

                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $basic->judulbasic }}
                                                </a>
                                            </td>
                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $basic->juduladvance }}
                                                </a>
                                            </td>
                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $basic->judulexpert }}
                                                </a>
                                            </td>

                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $basic->created_at }}
                                                </a>
                                            </td>
                                            <td class="ps-0 pm-10">
                                                <a href="#"
                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-5 p-0 m-0">
                                                    {{ $basic->updated_at }}
                                                </a>
                                            </td>

                                            <td class="px-0 pm-10">
                                                <div class="dropdown">
                                                    <a class="btn fs-4 w-100px h-30px btn-white text-center text-dark border border-gray-500 dropdown-toggle d-flex align-items-center justify-content-evenly"
                                                        style="margin-left: -30px;" href="#" role="button"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Atur
                                                    </a>

                                                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item fs-6"
                                                                href="{{ route('harga.edit', $basic->id) }}"><i
                                                                    class="fa-regular fa-pen-to-square fs-6"></i>
                                                                Edit</a>
                                                        </li>
                                                        <li>
                                                            <div class="dropdown-divider"></div>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item fs-6" href="#">
                                                                <form method="POST"
                                                                    action="{{ route('harga.destroy', $basic->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <i class="fa-solid fa-trash fs-6"></i>
                                                                    <button type="submit" class=" "
                                                                        style="background-color: white; border: none; color:black;"
                                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus merek ini?')">Hapus</button>

                                                                </form>
                                                            </a>

                                                        </li>


                                                        </a>
                                                        </li>
                                                    </ul>
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