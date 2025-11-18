@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')
<div class="heading">    
        <div class="header">
            <div class="big-title">Daftar Transaksi</div>
            <div class="profile">
                    <img src="{{ asset('svg/profile.svg') }}" class="rounded-circle" width="40" height="40" alt="User">
                    <div class="admin-profile">
                        <div class="Nama">Albert Joe</div>
                        <div class="email">Backoffice</div>
                    </div>
            </div>
        </div>
</div>  
<div class="transaksi">
    <div class="content-transaksi">
            <div class="search-engine">
                  <div class="search-box" style="">
                      <i class="bi bi-search"></i>
                      <input type="search" class="form" placeholder="Cari Berdasarkan">
                  </div>
                  <div class="status">
                          <button class="btn-status" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                          Status
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M15.8334 7.5L10 13.3333L4.16669 7.5" stroke="#818489" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>    
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                              <li><a class="dropdown-item"data-value="sudah">sudah</a></li>
                              <li><a class="dropdown-item"data-value="Tidak sudah">Tidak sudah</a></li>
                          </ul>
                  </div>
            </div>

            <div class="tabel">
            <table id="tabel-transaksi" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Target Plan</th>
                        <th>Metode Pembayaran</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10 Februari 2025, 13:00 PM</td>
                        <td>Budi Santoso</td>
                        <td>Bulanan</td>
                        <td>VA - Mandiri</td>
                        <td><span class="status-badge sudah">Telah Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>9 Februari 2025, 13:00 PM</td>
                        <td>Siti Nurhaliza</td>
                        <td>Tahunan</td>
                        <td>OVO</td>
                        <td><span class="status-badge belum">Belum Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>8 Februari 2025, 13:00 PM</td>
                        <td>Andi Wijaya</td>
                        <td>Bulanan</td>
                        <td>LinkAja</td>
                        <td><span class="status-badge sudah">Telah Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>7 Februari 2025, 13:00 PM</td>
                        <td>Dewi Lestari</td>
                        <td>Tahunan</td>
                        <td>Dana</td>
                        <td><span class="status-badge belum">Belum Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>6 Februari 2025, 13:00 PM</td>
                        <td>Rudi Hartono</td>
                        <td>Bulanan</td>
                        <td>VA - BRI</td>
                        <td><span class="status-badge sudah">Telah Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>5 Februari 2025, 13:00 PM</td>
                        <td>Nina Pratiwi</td>
                        <td>Tahunan</td>
                        <td>VA - BCA</td>
                        <td><span class="status-badge belum">Belum Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>4 Februari 2025, 13:00 PM</td>
                        <td>Joko Susanto</td>
                        <td>Bulanan</td>
                        <td>VA - BNI</td>
                        <td><span class="status-badge sudah">Telah Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>3 Februari 2025, 13:00 PM</td>
                        <td>Lina Sari</td>
                        <td>Tahunan</td>
                        <td>LinkAja</td>
                        <td><span class="status-badge belum">Belum Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>2 Februari 2025, 13:00 PM</td>
                        <td>Tono Setiawan</td>
                        <td>Bulanan</td>
                        <td>OVO</td>
                        <td><span class="status-badge sudah">Telah Dibayar</span></td>
                        <td><div class="dropdown">
                        <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>
                        </div></td>
                    </tr>
                    <tr>
                        <td>1 Februari 2025, 13:00 PM</td>
                        <td>Rina Ayu</td>
                        <td>Tahunan</td>
                        <td>Dana</td>
                        <td><span class="status-badge belum">Belum Dibayar</span></td>
                        <td><div class="dropdown">
                          <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            </ul>  
                        </div></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
</div>

@section('script')
<script>
    $(document).ready( function () {
    $('#tabel-transaksi').DataTable({
        dom: 'tlip', // t: table, i: info, p: pagination
        language: {
            info: "_START_-_END_ of _TOTAL_",
            lengthMenu: "Rows : _MENU_",
            paginate: {
                previous: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M15.41 16.59L10.83 12L15.41 7.41L14 6L8 12L14 18L15.41 16.59Z" fill="currentColor"/></svg>',
                next: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M8.58997 16.84L13.17 12.25L8.58997 7.66L9.99997 6.25L16 12.25L9.99997 18.25L8.58997 16.84Z" fill="currentColor"/></svg>'
            },
        },
        lengthMenu: [10, 25, 50, 100]
    });

});

</script>
@endsection