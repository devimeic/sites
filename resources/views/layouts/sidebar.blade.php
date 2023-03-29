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
            <li><a href="{{ route('user-management') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-user-3"></i>
                <span class="nav-text">User Management</span>
            </a>
            </li>
            <li><a href="{{ route('riwayat-admin') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list-1"></i>
                <span class="nav-text">Riwayat Pengajuan</span>
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

            <li><a href="{{ route('list-pengajuan') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Ajukan Pengajuan</span>
            </a>
            </li>
            <li><a href="{{ route('riwayat-pemohon') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-list-1"></i>
                <span class="nav-text">Riwayat Pengajuan</span>
            </a>
            </li>

            @elseif (Auth::user()->role == 'verifikator berkas')
            <li>
                <a href="{{ route('berkas') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ route('pengajuan-berkas') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Pengajuan</span>
            </a>
            </li>

            <li><a href="{{ route('input-berkas') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Input Berkas</span>
            </a>
            </li>

            @elseif (Auth::user()->role == 'verifikator lapangan')
            <li>
                <a href="{{ route('lapangan') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ route('pengajuan-lapangan') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Pengajuan</span>
            </a>
            </li>

            @elseif (Auth::user()->role == 'pemberi rekomendasi')
            <li>
                <a href="{{ route('rekomendasi') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-television"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a href="{{ route('pengajuan-rekomendasi') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-plus"></i>
                <span class="nav-text">Pengajuan</span>
            </a>
            </li>
            @endif


        </ul>
    </div>
</div>