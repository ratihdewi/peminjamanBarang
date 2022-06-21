<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading"></div>
                <a class="nav-link collapsed" href="{{route('dashboard.index')}}" @if(request()->is('/*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif>
                    <div class="nav-link-icon"><i style="color:#385ac2;font-weight:bold;"data-feather="activity"></i></div>
                    Dashboard
                </a>
                <div class="sidenav-menu-heading">Menu</div>
                <a class="nav-link collapsed" href="{{route('peminjaman.index')}}" @if(request()->is('peminjaman/*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="external-link"style="color:#385ac2;font-weight:bold;"></i></div>
                    Riwayat Peminjaman
                </a>
                @if(Auth::user()->role_id!=4)
                <a class="nav-link collapsed"  href="{{route('pengajuan.index')}}" @if(request()->is('pengajuan/*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="external-link" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data Pengajuan
                </a>
                <a class="nav-link collapsed"  href="{{route('pengambilan.index')}}" @if(request()->is('pengambilan/*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="external-link" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data Pengambilan Barang
                </a>
                <a class="nav-link collapsed"  href="{{route('pengembalian.index')}}" @if(request()->is('pengembalian/*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="external-link" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data Peminjaman
                </a>
                <div class="sidenav-menu-heading">Master</div>
                <a class="nav-link collapsed" href="{{route('master.asset.index')}}" @if(request()->is('master/asset*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="columns" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data Asset
                </a>
                @endif
                @if(Auth::user()->role_id==1)
                <a class="nav-link collapsed" href="{{route('master.user.index')}}" @if(request()->is('master/user*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif >
                    <div class="nav-link-icon"><i data-feather="columns" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data User
                </a>
                <!-- <a class="nav-link collapsed"  href="{{route('master.mail.index')}}" @if(request()->is('master/mail*')) style="color:#385ac2;font-weight:bold;background-color:#c1c1c2;" @endif>
                    <div class="nav-link-icon"><i data-feather="external-link" style="color:#385ac2;font-weight:bold;" ></i></div>
                    Data Mail
                </a> -->
                @endif
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{Auth::user()->name}}</div>
            </div>
        </div>
    </nav>
</div>