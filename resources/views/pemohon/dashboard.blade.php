@extends('layouts.main')

@section('isi')
<div class="row">
    <div class="col-xl-3 col-xxl-4">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                    <div class="mr-auto pr-3">
                        <h4 class="text-black font-w600 fs-20">Status Pengajuan</h4>
                    </div>
                </div>
                    <div class="card-body pt-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card avtivity-card">
                                    <div class="card-body">
                                        <div class="media align-items-center">

                                            <div class="media-body">
                                                <span class="fs-14 mb-2 text-black">Pengajuan Di Terima</span><br>
                                                <span class="title text-black font-w600">{{ $selesai }}</span>
                                            </div>
                                        </div>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-secondary" style="width: 100%; height:5px;" role="progressbar">
                                                {{-- <span class="sr-only">42% Complete</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="effect bg-secondary"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card avtivity-card">
                                    <div class="card-body">
                                        <div class="media align-items-center">

                                            <div class="media-body">
                                                <span class="fs-14 mb-2 text-black">Pengajuan Di Tolak</span><br>

                                                <span class="title text-black font-w600">{{ $kembali }}</span>
                                            </div>
                                        </div>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-danger" style="width: 100%; height:5px;" role="progressbar">
                                                {{-- <span class="sr-only">42% Complete</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="effect bg-danger"></div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-xxl-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card plan-list">
                    <div class="card-header d-sm-flex flex-wrap d-block pb-0 border-0">
                        <div class="mr-auto pr-3 mb-3">
                            <h4 class="text-black font-w600 fs-20 mb-0">Jadwal Rapat</h4>

                        </div>
                    </div>
                    <div class="card-body tab-content pt-2 loadmore-content dz-scroll height750"  id="DietMenusContent">
                        <div class="tab-pane active show fade" id="Unifinshed">
                            @foreach ( $datas as $item )
                            <div class="d-flex border-bottom flex-wrap pt-3 list-row align-items-center mb-2">
                                <div class="col-xl-5 col-xxl-7 col-lg-6 col-sm-7 d-flex align-items-center">
                                    <div class="list-icon bg-light mr-3 mb-3">
                                        <p class="fs-24 text-black mb-0 mt-2">{{ Carbon::createFromFormat('Y-m-d H:i:s', $item->jadwal)->format('d') }}</p>
                                        <span class="fs-14 text-black">{{ Carbon::createFromFormat('Y-m-d H:i:s', $item->jadwal)->locale('id')->formatLocalized('%A') }}

                                        </span>
                                    </div>
                                    <div class="info mb-3">
                                        <h4 class="fs-20 "><a href="workout-statistic.html" class="text-black">Agenda {{ $item->agenda }}</a></h4>
                                        <span class="text-primary font-w600">Nama Proyek {{ $item->rapat->nama_pro }}</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-xxl-4 col-lg-3 col-sm-4 activities mb-3 mr-auto pl-3 pr-3 text-sm-center col-6">
                                    <span class="text-info ml-2">Pukul {{ Carbon::createFromFormat('Y-m-d H:i:s', $item->jadwal)->format('H:i') }} WIB</span>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
    </div>
</div>
@endsection
