@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="dashboard">
    <div class="statistik">
        <div class="head">
            <p>Statistik Dashboard</p>
            <div class="date" modal-bs-target="" modal-bs-toogle="">
                <h6>Filter Tanggal</h6>
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
            </div>
        </div>
        <div class="statistik-card-bottom">
            <div class="card-bottom">
                <p>CUSTOMER AKTIF</p>
                <div class="card-bottom-inner">
                <H2>110</H2>
                <div class="sts-minus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                        <path d="M4.64923 5.02653L14.596 14.9733M14.596 14.9733H9.07032M14.596 14.9733L14.5957 9.44733" stroke="#E16458" stroke-width="1.56299" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> 
                    - 10%</div>
                </div>
            </div>
            <div class="card-bottom">
                <p>CUSTOMER AKTIF</p>
                <div class="card-bottom-inner">
                <H2>110</H2>
                <div class="sts-plus"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20" fill="none">
                    <path d="M4.64917 14.9735L14.596 5.02667M14.596 5.02667H9.07026M14.596 5.02667L14.5957 10.5527" stroke="#369B47" stroke-width="1.56299" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>    
                + 10%</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-data">
        <div class="card1">
            <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                <path d="M22.6666 22.75H5.66663C3.59663 22.75 1.91663 21.07 1.91663 19V2C1.91663 1.59 2.25663 1.25 2.66663 1.25C3.07663 1.25 3.41663 1.59 3.41663 2V19C3.41663 20.24 4.42663 21.25 5.66663 21.25H22.6666C23.0766 21.25 23.4166 21.59 23.4166 22C23.4166 22.41 23.0766 22.75 22.6666 22.75Z" fill="#369B47"/>
                <path d="M5.66663 17.75C5.49663 17.75 5.31663 17.69 5.17663 17.57C4.86663 17.3 4.82663 16.83 5.09663 16.51L9.68663 11.15C10.1866 10.57 10.9066 10.22 11.6666 10.19C12.4266 10.17 13.1766 10.45 13.7166 10.99L14.6666 11.94C14.9166 12.19 15.2366 12.31 15.5966 12.31C15.9466 12.3 16.2666 12.14 16.4966 11.87L21.0866 6.51001C21.3566 6.20001 21.8266 6.16001 22.1466 6.43001C22.4566 6.70001 22.4966 7.17001 22.2266 7.49001L17.6366 12.85C17.1366 13.43 16.4166 13.78 15.6566 13.81C14.8866 13.83 14.1466 13.55 13.6066 13.01L12.6666 12.06C12.4166 11.81 12.0866 11.68 11.7366 11.69C11.3866 11.7 11.0666 11.86 10.8366 12.13L6.24663 17.49C6.08663 17.66 5.87663 17.75 5.66663 17.75Z" fill="#369B47"/>
            </svg>    
            Statistik Data Customer</a>
            <div class="card1-inner">
                <div class="card1-title">
                    <div class="total">
                        <p>TOTAL CUSTOMER</p>
                        <H2>120</H2>
                    </div>
                    <hr class="custom-dashed">
                    <div class="content">
                        <div class="status-item">
                            <div class="status-item-inner">
                                <span class="dot-green"></span>
                                <p>Menurunkan berat badan</p>
                            </div>
                            <div class="angka">70</div>
                        </div>
                        <div class="status-item">
                            <div class="status-item-inner">
                                <span class="dot-red"></span>
                                <p>Menjaga berat badan</p>
                            </div>
                            <div class="angka">30</div>
                        </div>
                        <div class="status-item">
                            <div class="status-item-inner">
                                <span class="dot-blue"></span>
                                <p>Menurunkan berat badan</p>
                            </div>
                            <div class="angka">20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card1">
            <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                <path d="M22.6666 22.75H5.66663C3.59663 22.75 1.91663 21.07 1.91663 19V2C1.91663 1.59 2.25663 1.25 2.66663 1.25C3.07663 1.25 3.41663 1.59 3.41663 2V19C3.41663 20.24 4.42663 21.25 5.66663 21.25H22.6666C23.0766 21.25 23.4166 21.59 23.4166 22C23.4166 22.41 23.0766 22.75 22.6666 22.75Z" fill="#369B47"/>
                <path d="M5.66663 17.75C5.49663 17.75 5.31663 17.69 5.17663 17.57C4.86663 17.3 4.82663 16.83 5.09663 16.51L9.68663 11.15C10.1866 10.57 10.9066 10.22 11.6666 10.19C12.4266 10.17 13.1766 10.45 13.7166 10.99L14.6666 11.94C14.9166 12.19 15.2366 12.31 15.5966 12.31C15.9466 12.3 16.2666 12.14 16.4966 11.87L21.0866 6.51001C21.3566 6.20001 21.8266 6.16001 22.1466 6.43001C22.4566 6.70001 22.4966 7.17001 22.2266 7.49001L17.6366 12.85C17.1366 13.43 16.4166 13.78 15.6566 13.81C14.8866 13.83 14.1466 13.55 13.6066 13.01L12.6666 12.06C12.4166 11.81 12.0866 11.68 11.7366 11.69C11.3866 11.7 11.0666 11.86 10.8366 12.13L6.24663 17.49C6.08663 17.66 5.87663 17.75 5.66663 17.75Z" fill="#369B47"/>
            </svg>      
            Data Customer</a>
            <div class="card1-inner">
                <div class="card1-title">
                    <div class="total">
                        <p>TOTAL LAKI LAKI</p>
                        <H2>120</H2>
                    </div>
                    <hr class="custom-dashed">
                    <div class="content">
                        <div class="status-item-inner">
                            <p>Rata - Rata Usia</p>
                            <h6>26 Tahun</h6>
                        </div>
                        <div class="status-item-inner">
                            <p>Rata - Rata Tinggi Badan</p>
                            <h6>165 cm</h6>
                        </div>
                        <div class="status-item-inner">
                            <p>Rata - Rata Berat Badan</p>
                            <h6>57,7 kg</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card1">
            <a class="lihat-semua" href="">Lihat Semua 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M6.15752 3.96758C6.08722 4.0373 6.03143 4.12025 5.99335 4.21164C5.95527 4.30304 5.93567 4.40107 5.93567 4.50008C5.93567 4.59908 5.95527 4.69711 5.99335 4.78851C6.03143 4.8799 6.08722 4.96285 6.15752 5.03258L9.59251 8.46758C9.66281 8.5373 9.7186 8.62025 9.75668 8.71164C9.79475 8.80304 9.81436 8.90107 9.81436 9.00008C9.81436 9.09909 9.79475 9.19711 9.75668 9.28851C9.7186 9.3799 9.66281 9.46285 9.59251 9.53258L6.15752 12.9676C6.08722 13.0373 6.03143 13.1202 5.99335 13.2116C5.95527 13.303 5.93567 13.4011 5.93567 13.5001C5.93567 13.5991 5.95527 13.6971 5.99335 13.7885C6.03143 13.8799 6.08722 13.9629 6.15752 14.0326C6.29804 14.1723 6.48813 14.2507 6.68627 14.2507C6.8844 14.2507 7.07449 14.1723 7.21501 14.0326L10.6575 10.5901C11.0789 10.1682 11.3155 9.59633 11.3155 9.00008C11.3155 8.40382 11.0789 7.83195 10.6575 7.41008L7.21501 3.96758C7.07449 3.82789 6.8844 3.74948 6.68627 3.74948C6.48813 3.74948 6.29804 3.82789 6.15752 3.96758Z" fill="#6A696B"/>
            </svg>
            </a>
            <div class="card1-inner">
                <div class="card1-title">
                    <div class="total">
                        <p>TOTAL PEREMPUAN</p>
                        <H2>120</H2>
                    </div>
                    <hr class="custom-dashed">
                    <div class="content">
                        <div class="status-item-inner">
                            <p>Rata - Rata Usia</p>
                            <h6>24 Tahun</h6>
                        </div>
                        <div class="status-item-inner">
                            <p>Rata - Rata Tinggi Badan</p>
                            <h6>157 cm</h6>
                        </div>
                        <div class="status-item-inner">
                            <p>Rata - Rata Berat Badan</p>
                            <h6>67,5 kg</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="daftar-history">
        <div class="head">
            <p>Daftar History</p>
            <div class="date" modal-bs-target="" modal-bs-toogle="">
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
            </div>
        </div>
        <div class="history">
                <div class="search-box" style="">
                    <i class="bi bi-search"></i>
                    <input type="search" class="form" placeholder="Cari Berdasarkan">
                </div>
        <table id="historyTable" class="display">
            <thead>
            <tr>
                <th>Tanggal</th>
                <th>Customer</th>
                <th>Berat Badan</th>
                <th>Target Kalori Makanan</th>
                <th>Total Kalori</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>10 Februari 2025, 13.00 PM</td>
                <td>Budi Santoso</td>
                <td>55,5 kg</td>
                <td>1200 Kal</td>
                <td>820 Kal</td>
            </tr>
            <tr>
                <td>9 Februari 2025, 13.00 PM</td>
                <td>Siti Nurhaliza</td>
                <td>55,5 kg</td>
                <td>1200 Kal</td>
                <td>820 Kal</td>
            </tr>
            <tr>
                <td>8 Februari 2025, 13.00 PM</td>
                <td>Andi Wijaya</td>
                <td>55,3 kg</td>
                <td>1200 Kal</td>
                <td>820 Kal</td>
            </tr>
            <tr>
                <td>7 Februari 2025, 13.00 PM</td>
                <td>Dewi Lestari</td>
                <td>58,9 kg</td>
                <td>1200 Kal</td>
                <td>820 Kal</td>
            </tr>
            <tr>
                <td>6 Februari 2025, 13.00 PM</td>
                <td>Rudi Hartono</td>
                <td>50 kg</td>
                <td>1200 Kal</td>
                <td>820 Kal</td>
            </tr>
            </tbody>
  </table>
  </div>
    </div>
</div>

@section('script')

<script>
  $(document).ready(function () {
    $('#historyTable').DataTable({
      language: {
        search: "Cari berdasarkan:",
        
        info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
        paginate: {
          previous: "<",
          next: ">"
        }
      }
    });
  });
</script>
@endsection