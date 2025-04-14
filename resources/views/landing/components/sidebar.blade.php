<div class="layout">
        <div class="sidebar">
            <div class="logo-side">
                <img src="{{asset('svg/logo-side.svg')}}" alt="">
            </div>
            <div class="sidebar-inner">
                <div class="point">
                    <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'active' : '' }}">
                        <img class="img-grey" src="{{ asset('svg/dash-grey.svg') }}" alt="">Dashboard
                    </a>

                    <a href="{{ route('transaksi') }}" class="{{ Route::is('transaksi*') ? 'active' : '' }}">
                        <img class="img-grey" src="{{ asset('svg/transaksi-grey.svg') }}" alt="">Transaksi
                    </a>

                    <a href="{{ route('customer') }}" class="{{ Route::is('customer*') ? 'active' : '' }}">
                        <img class="img-grey" src="{{ asset('svg/customer-grey.svg') }}" alt="">Customer
                    </a>
                </div>
                <button type="button" class="btn-logout">
                    <img src="{{asset('svg/btn-logout.svg')}}" alt="">
                    Keluar Akun
                </button>
            </div>
        </div>
        
        <div class="header">
            <div class="big-title">Dashboard</div>
            <div class="profile">
                    <img src="{{ asset('svg/profile.svg') }}" class="rounded-circle" width="40" height="40" alt="User">
                    <div class="admin-profile">
                        <div class="Nama">Albert Joe</div>
                        <div class="email">Backoffice</div>
                    </div>
            </div>
        </div> 
</div>
