<section class="bg-color-light border-0 m-0 pb-0 mt-5">
    <div class="container mb-5">
        {{-- <div class="d-flex justify-content-center">
			<div class="price-card">
				<div style="font-size: 20px; font-weight: 600; color: #212529;">Basic</div>
			</div>
			<div class="price-card">
				<div style="font-size: 20px; font-weight: 600; color: #212529;">Advance</div>
			</div>
			<div class="price-card">
				<div style="font-size: 20px; font-weight: 600; color: #212529;">Expert</div>
			</div>
		</div> --}}

        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="price-card">

					{{-- BASIC --}}
                    <div class="price-card-title">Basic</div>
                    <div class="price-card-desc"> @foreach($basics as $basic)
                        {{ $basic->judulbasic }}
                        @endforeach</div>

                    <div class="price-card-item-1"> General</div>
                    @foreach ($generals as $general)
                    <div class="price-card-item-2">
                        @if ($general->statusbasic === 'aktif')
                        <i class="fa fa-check-circle" style="color: red;"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $general->guidelines }}
                    </div>
                    @endforeach


                    <div class="price-card-item-1"> Attendance</div>
                    @foreach ($attendances as $attendance)
                    <div class="price-card-item-2">
                        @if ($attendance->statusbasicc === 'aktif')
                        <i class="fa fa-check-circle text-danger"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $attendance->category }}
                    </div>
                    @endforeach


                    <div class="price-card-item-1"> Report</div>
                    @php
                    $salesItems = [];
                    $currentSales = null;
                    @endphp

                    @foreach ($dropsels as $dropsel)
                    @if ($currentSales !== $dropsel->report->sales_id)
                    {{-- Tampilkan SALES --}}
                    @if ($currentSales !== null)
                    <div class="price-card-item-3-space"></div>
                    @endif
                    <div class="price-card-item-2">
                        @if ($dropsel->report->statusreport_basic === 'aktif')
                        <i class="fa fa-check-circle text-danger"></i>
                        @else
                        <i class="fa fa-check-circle" style="color: red"></i>
                        @endif
                        {{ $dropsel->report->sales_id }}
                    </div>
                    @php
                    $currentSales = $dropsel->report->sales_id;
                    $salesItems = [];
                    @endphp
                    @endif
                    {{-- Tampilkan elemen SALES lainnya --}}
                    <div class="price-card-item-3">
                        <i class="fa fa-asterisk"
                            style="color: {{ $dropsel->report->statusreport_basic === 'aktif' ? 'red' : 'black' }}"></i>
                        {{ $dropsel->sell_id }}
                    </div>
                    @endforeach


                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="price-card">

					{{-- ADVANCE --}}
                    <div class="price-card-title">Advance </div>
                    <div class="price-card-desc"> @foreach($basics as $basic)
                        {{ $basic->juduladvance }}
                        @endforeach</div>

                    <div class="price-card-item-1"> General</div>
                    @foreach ($generals as $general)
                    <div class="price-card-item-2">
                        @if ($general->statusadvance === 'aktif')
                        <i class="fa fa-check-circle" style="color: red;"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $general->guidelines }}
                    </div>
                    @endforeach

                    <div class="price-card-item-1"> Attendance</div>
                    @foreach ($attendances as $attendance)
                    <div class="price-card-item-2">
                        @if ($attendance->statusadvancee === 'aktif')
                        <i class="fa fa-check-circle text-danger"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $attendance->category }}
                    </div>
                    @endforeach

					<div class="price-card-item-1"> Report</div>
					@php
						$salesItems = [];
						$currentSales = null;
					@endphp
					
					@foreach ($dropsels as $dropsel)
					@if ($currentSales !== $dropsel->report->sales_id)
						@if ($currentSales !== null)
							<div class="price-card-item-3-space"></div>
						@endif
						<div class="price-card-item-2">
							@if ($dropsel->report->statusreport_advance === 'aktif')
								<i class="fa fa-check-circle text-danger"></i> 
							@else
							<i class="fa fa-times-circle" style="color: red"></i>
							@endif
							{{ $dropsel->report->sales_id }}
						</div>
						@php
							$currentSales = $dropsel->report->sales_id;
							$salesItems = [];
						@endphp
					@endif
					<div class="price-card-item-3">
						<i class="fa fa-asterisk" style="color: {{ $dropsel->report->statusreport_advance === 'aktif' ? 'red' : 'red' }}"></i> 
						{{ $dropsel->sell_id }}
					</div>
					@endforeach




                </div>
            </div>


            <div class="col-lg-4 col-12">
                <div class="price-card">

					{{-- EXPERT --}}
                    <div class="price-card-title">Expert</div>
                    <div class="price-card-desc"> @foreach($basics as $basic)
                        {{ $basic->judulexpert }}
                        @endforeach</div>

                    <div class="price-card-item-1"> General</div>
                    @foreach ($generals as $general)
                    <div class="price-card-item-2">
                        @if ($general->statusexpert === 'aktif')
                        <i class="fa fa-check-circle" style="color: red;"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $general->guidelines }}
                    </div>
                    @endforeach

                    <div class="price-card-item-1"> Attendance</div>
                    @foreach ($attendances as $attendance)
                    <div class="price-card-item-2">
                        @if ($attendance->statusexpertt === 'aktif')
                        <i class="fa fa-check-circle text-danger"></i>
                        @else
                        <i class="fa fa-times-circle" style="color: red"></i>
                        @endif
                        {{ $attendance->category }}
                    </div>
                    @endforeach


					<div class="price-card-item-1"> Report</div>
					@php
						$salesItems = [];
						$currentSales = null;
					@endphp
					
					@foreach ($dropsels as $dropsel)
					@if ($currentSales !== $dropsel->report->sales_id)
						@if ($currentSales !== null)
							<div class="price-card-item-3-space"></div>
						@endif
						<div class="price-card-item-2">
							@if ($dropsel->report->statusreport_expert === 'aktif')
								<i class="fa fa-check-circle text-danger"></i> 
							@else
							<i class="fa fa-times-circle" style="color: red"></i>
							@endif
							{{ $dropsel->report->sales_id }}
						</div>
						@php
							$currentSales = $dropsel->report->sales_id;
							$salesItems = [];
						@endphp
					@endif
					<div class="price-card-item-3">
						<i class="fa fa-asterisk" style="color: {{ $dropsel->report->statusreport_expert === 'aktif' ? 'red' : 'red' }}"></i> 
						{{ $dropsel->sell_id }}
					</div>
					@endforeach

                    <div class="price-card-item-3">

                    </div>
                </div>

            </div>
        </div>
</section>