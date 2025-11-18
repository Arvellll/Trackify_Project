@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="heading">
        <div class="header">
            <div class="big-title">Customer / Detail</div>
            <div class="profile">
                    <img src="{{ asset('svg/profile.svg') }}" class="rounded-circle" width="40" height="40" alt="User">
                    <div class="admin-profile">
                        <div class="Nama">Albert Joe</div>
                        <div class="email">Backoffice</div>
                    </div>
            </div>
        </div>  
</div>

<div class="detail-customer">

    <h3>Informasi Customer</h3>

    <div class="informasi-customer">
       <div class="data-customer">
        <div class="content-data">
            <div class="inner-data">
                <h5>Nama Customer</h5>
                <div class="nama">
                    <span>Andi Wijaya</span>
                    <h4>Aktif</h4>
                </div>
                
            </div>
        </div>
        <div class="content-data">
            <h5>Jenis Kelamin</h5>
            <p>Laki - Laki</p>
            
        </div>
        <div class="content-data3">
            <div class="content1">
                <h5>Email</h5>
                <p>andiwijaya@gmail.com</p>
                
            </div>
            <div class="content1">
                <h5>Tanggal Lahir</h5>
                <p>3 Maret 2002</p>
                
            </div>
        </div>

        </div> 
        <div class="ukuran-customer">
            <div class="ukuran-atas">
                <div class="div1">
                <h5>Tinggi Badan</h5>
                <p>151 cm</p>
                </div>
                <div class="div1">
                <h5>Target Pencapaian</h5>
                <p>Menurunkan berat badan</p>
                </div>
            </div>
            <div class="ukuran-bawah">
                <div class="berat">
                    <h5>Berat Badan Saat Ini</h5>
                    <h2>67 kg</h2>
                </div>
                <div class="target">    
                    <h5>Target Berat Badan</h5>
                    <h2>50 kg</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="head">
            <p>Data Historis</p>
            <!-- <div class="date" modal-bs-target="" modal-bs-toogle="">
                <h6>Filter by Bulan</h6>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M6 1.5V3.75" stroke="#8A8A8A" stroke-width="1.125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 1.5V3.75" stroke="#8A8A8A" stroke-width="1.125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.625 6.8175H15.375" stroke="#8A8A8A" stroke-width="1.125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.75 6.375V12.75C15.75 15 14.625 16.5 12 16.5H6C3.375 16.5 2.25 15 2.25 12.75V6.375C2.25 4.125 3.375 2.625 6 2.625H12C14.625 2.625 15.75 4.125 15.75 6.375Z" stroke="#8A8A8A" stroke-width="1.125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.771 10.275H11.7778" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.771 12.525H11.7778" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.99661 10.275H9.00335" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.99661 12.525H9.00335" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.22073 10.275H6.22747" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.22073 12.525H6.22747" stroke="#8A8A8A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div> -->
            <div class="filter-bulan">
                <!-- <h6>Filter by Bulan</h6> -->
                <input type="month" class="form-control form-control-sm">
            </div>
    </div>

    <div class="historis">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#historyPerhitungan" aria-current="page">History Perhitungan BMI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#historyTransaksi">History Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#historyCatat">History Catat Makanan</a>
        </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="historyPerhitungan" role="tabpanel" aria-labelledby="home-tab">
                <div class="search-box" style="">
                    <i class="bi bi-search"></i>
                    <input type="search" class="form" placeholder="Cari Berdasarkan">
                </div>
                <table id="BMITable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Berat Badan</th>
                            <th>Target Kalori Makanan</th>
                            <th>Total Kalori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10 Februari 2025, 13:00 PM</td>
                            <td>55,6 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>9 Februari 2025, 13:00 PM</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8 Februari 2025, 13:00 PM</td>
                            <td>55,3 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>7 Februari 2025, 13:00 PM</td>
                            <td>58,9 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>6 Februari 2025, 13:00 PM</td>
                            <td>50 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>5 Februari 2025, 13:00 PM</td>
                            <td>65 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>4 Februari 2025, 13:00 PM</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>3 Februari 2025, 13:00 PM</td>
                            <td>60 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>2 Februari 2025, 13:00 PM</td>
                            <td>65,2 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                        <tr>
                            <td>1 Februari 2025, 13:00 PM</td>
                            <td>56 kg</td>
                            <td>1200 Kal</td>
                            <td>820 Kal</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="historyTransaksi" role="tabpanel" aria-labelledby="home-tab">
                <div class="search-box" style="">
                    <i class="bi bi-search"></i>
                    <input type="search" class="form" placeholder="Cari Berdasarkan">
                </div>
                <table id="transaksi" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Harga</th>
                            <th>Metode Pembayaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>VA - Mandiri</td>
                        </tr>
                        <tr>
                            <td>9 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>OVO</td>
                        </tr>
                        <tr>
                            <td>8 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>LinkAja</td>
                        </tr>
                        <tr>
                            <td>7 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>Dana</td>
                        </tr>
                        <tr>
                            <td>6 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>VA - BRI</td>
                        </tr>
                        <tr>
                            <td>5 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>VA - BCA</td>
                        </tr>
                        <tr>
                            <td>4 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>VA - BNI</td>
                        </tr>
                        <tr>
                            <td>3 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>LinkAja</td>
                        </tr>
                        <tr>
                            <td>2 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>OVO</td>
                        </tr>
                        <tr>
                            <td>1 Februari 2025, 13:00 PM</td>
                            <td>Rp 89.000</td>
                            <td>Dana</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="historyCatat" role="tabpanel" aria-labelledby="home-tab">
                <div class="search-box" style="">
                    <i class="bi bi-search"></i>
                    <input type="search" class="form" placeholder="Cari Berdasarkan">
                </div>
                <table id="catat" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Makanan</th>
                            <th>Catatan</th>
                            <th>Kalori</th>
                            <th>Protein</th>
                            <th>Karbo</th>
                            <th>Lemak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>9 Februari 2025, 13:00 PM</td>
                            <td>Spagetti</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>8 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>7 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>6 Februari 2025, 13:00 PM</td>
                            <td>Spagetti</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>5 Februari 2025, 13:00 PM</td>
                            <td>Spagetti</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>4 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>3 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>2 Februari 2025, 13:00 PM</td>
                            <td>Burger</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                        <tr>
                            <td>1 Februari 2025, 13:00 PM</td>
                            <td>Spagetti</td>
                            <td>Dipanggang</td>
                            <td>820</td>
                            <td>23</td>
                            <td>70</td>
                            <td>32</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@section('script')
<script>
   $(document).ready(function() {
    // Konfigurasi untuk #BMITable
    $('#BMITable').DataTable({
        dom: 'tlip',
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

    // Konfigurasi untuk #transaksi
    $('#transaksi').DataTable({
        dom: 'tlip',
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

    // Konfigurasi untuk #catat
    $('#catat').DataTable({
        dom: 'tlip',
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

    // Konfigurasi untuk #historyTable
    $('#historyTable').DataTable({
        dom: 'tlip',
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