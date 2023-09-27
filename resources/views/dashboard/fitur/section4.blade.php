@extends('dashboard.admin')
@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="row mb-8 mt-8 justify-content-between">
    <h1 style="width: fit-content" class="mb-5">Section 4</h1>
    <div class="d-flex gap-4 w-700px justify-content-start justify-content-md-end flex-wrap">
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
                            <th class="pb-3 ps-4 pt-0 w-200px min-w-200px mw-sm-200px">Title
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Description
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Title Card 1
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Description Card 1
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Title Card 2
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Description Card 2
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Title Card 3
                            </th>
                            <th class="pb-3 pt-0 px-2 w-200px min-w-200px mw-sm-200px">Description Card 3
                            </th>             
                            <th class="pb-3 ps-2 pe-4 pt-0 text-center w-100px min-w-100px">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fiturdash as $item)
                        <tr class="align-top text-left">
                            <td class="ps-4 pe-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->title_4 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->description_4 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->titlecard_4_1 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->descriptioncard_4_1 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->titlecard_4_2 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->descriptioncard_4_2 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->titlecard_4_3 }}
                                </p>
                            </td>

                            <td class="px-2 pm-10">
                                <p class="text-dark fw-semibold mb-2 fs-6">
                                    {{ $item->fitur_section_4->descriptioncard_4_3 }}
                                </p>
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
                                <div class="w-150px d-flex justify-content-evenly">
                                    <a href="{{ route('fitur.edit4', ['id' => $item->id]) }}" class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
                                    {{-- <form action="{{ route('beranda.delete_main', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-danger"><i class="las la-trash fs-2"></i></button>
                                    </form>  --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
