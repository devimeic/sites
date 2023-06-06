<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
        @if (Auth::user()->role == 'admin')
            <li>
                <a href="{{ route('admin') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            {{-- <li class="{{ request()->is('admin/wa-gateway') ? ' mm-active' : '' }}"><a href="{{ route('wa') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-smartphone-4"></i>
                <span class="nav-text">Whatshap Gateway</span>
            </a>
            </li> --}}
            <li class="{{ request()->is('admin/wa-gateway') ? ' mm-active' : '' }}"><a href="{{ route('admin-wa') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-smartphone-4"></i>
                <span class="nav-text">Whatshap Gateway</span>
                </a>
            </li>
            <li ><a href="{{ route('user-management') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-user-3"></i>
                <span class="nav-text">User Management</span>
            </a>
            </li>
            <li class="{{ request()->is('admin/show-riwayat/*') ? ' mm-active' : '' }}"><a href="{{ route('riwayat-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list-1"></i>
                <span class="nav-text">Riwayat Pengajuan</span>
                </a>
            </li>
            <li class="{{ request()->is('admin/rincian-laporan/*') ? ' mm-active' : '' }}"><a href="{{ route('laporan-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-notepad-2"></i>
                <span class="nav-text">Laporan</span>
            </a>
            </li>
            {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-user-3"></i>
                <span class="nav-text">User Management</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="./app-profile.html">Admin</a></li>
                <li><a href="./app-calender.html">Pemohom</a></li>
                <li><a href="./app-calender.html">Verifikator Berkas</a></li>
                <li><a href="./app-calender.html">Verifikator Lapangan</a></li>
                <li><a href="./app-calender.html">Pemberi Rekomendasi</a></li>
            </ul>
        </li> --}}
            @elseif (Auth::user()->role == 'pemohon')

            <li>
                <a href="{{ route('pemohon') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li class="{{ request()->is('pemohon/pengajuan') || request()->is('pemohon/show-draft/*') ? ' mm-active' : '' }}"><a href="{{ route('list-pengajuan') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Ajukan Pengajuan</span>
            </a>
            </li>
            <li class="{{ request()->is('pemohon/show-riwayat/*') || request()->is('pemohon/revisi-berkas/*') || request()->is('pemohon/revisi-lapangan/*') ? ' mm-active' : '' }}"><a href="{{ route('riwayat-pemohon') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list-1"></i>
                <span class="nav-text">Riwayat Pengajuan</span>
            </a>
            </li>
            <li class="{{ request()->is('pemohon/show-laporan/*') ? ' mm-active' : '' }}"><a href="{{ route('laporan-pemohon') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-notepad-2"></i>
                <span class="nav-text">Laporan</span>
            </a>
            </li>

            @elseif (Auth::user()->role == 'verifikator berkas')
            <li>
                <a href="{{ route('berkas') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('berkas/show-list/*') ? ' mm-active' : '' }}"><a href="{{ route('pengajuan-berkas') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list"></i>
                <span class="nav-text">Daftar Pengajuan</span>
            </a>
            </li>

            <li><a href="{{ route('input-berkas') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-file-1"></i>
                <span class="nav-text">Nama Berkas</span>
            </a>
            </li>

            @elseif (Auth::user()->role == 'verifikator lapangan')
            <li>
                <a href="{{ route('lapangan') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('lapangan/show-berkas/*') ? ' mm-active' : '' }}"><a href="{{ route('pengajuan-lapangan') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list"></i>
                <span class="nav-text">Daftar Pengajuan</span>
            </a>
            </li>
            <li class="{{ request()->is('lapangan/list-rapat') ? ' mm-active' : '' }}">
                <a href="{{ route('rapat') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-calendar-7"></i>
                    <span class="nav-text">Daftar Rapat</span>
                </a>
            </li>
            {{-- <li class="">
                <a href="#" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-rewind"></i>
                    <span class="nav-text">Setuju Berkas</span>
                </a>
            </li> --}}
            @elseif (Auth::user()->role == 'pemberi rekomendasi')
            <li>
                <a href="{{ route('rekomendasi') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('rekomendasi/upload-surat/*') ? ' mm-active' : '' }}"><a href="{{ route('pengajuan-rekomendasi') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list"></i>
                <span class="nav-text">Daftar Pengajuan</span>
            </a>
            </li>
            @endif


        </ul>
    </div>
</div>
