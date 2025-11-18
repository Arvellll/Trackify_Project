@extends('base.app')
@section('title','homepage')
@section('content')
@include('landing.components.sidebar')

<div class="heading">
        <div class="header">
            <div class="big-title">Daftar Customer</div>
            <div class="profile">
                    <img src="{{ asset('svg/profile.svg') }}" class="rounded-circle" width="40" height="40" alt="User">
                    <div class="admin-profile">
                        <div class="Nama">Albert Joe</div>
                        <div class="email">Backoffice</div>
                    </div>
            </div>
        </div>  
</div>
<div class="customer">
  <div class="customer-content">
    <!-- NavTabs -->
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#daftarCustomer" aria-current="page">Daftar Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#daftarDelete">Daftar Permintaan Hapus Akun</a>
      </li>
    </ul>
    
    <!-- Tab Content -->
      <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="daftarCustomer" role="tabpanel" aria-labelledby="home-tab">
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
                              <li><a class="dropdown-item"data-value="Aktif">Aktif</a></li>
                              <li><a class="dropdown-item"data-value="Tidak Aktif">Tidak Aktif</a></li>
                          </ul>
                  </div>
            </div>
                <table id="list" class="display">
                    <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Target Pencapaian</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Budi Santoso</td>
                        <td>Laki - Laki</td>
                        <td>27 Tahun</td>
                        <td>Menurunkan berat badan</td>
                        <td><span class="status-badge aktif">Aktif</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Siti Nurhaliza</td>
                        <td>Perempuan</td>
                        <td>27 Tahun</td>
                        <td>Menjaga berat badan</td>
                        <td><span class="status-badge deactive">Deactivate</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Andi Wijaya</td>
                        <td>Laki - Laki</td>
                        <td>27 Tahun</td>
                        <td>Menambah berat badan</td>
                        <td><span class="status-badge aktif">Aktif</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Dewi Lestari</td>
                        <td>Perempuan</td>
                        <td>23 Tahun</td>
                        <td>Menurunkan berat badan</td>
                        <td><span class="status-badge deactive">Deactivate</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Rudi Hartono</td>
                        <td>Laki - Laki</td>
                        <td>21 Tahun</td>
                        <td>Menjaga berat badan</td>
                        <td><span class="status-badge aktif">Aktif</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Nina Pratiwi</td>
                        <td>Perempuan</td>
                        <td>33 Tahun</td>
                        <td>Menurunkan berat badan</td>
                        <td><span class="status-badge deactive">Deactivate</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Joko Susanto</td>
                        <td>Laki - Laki</td>
                        <td>26 Tahun</td>
                        <td>Menjaga berat badan</td>
                        <td><span class="status-badge aktif">Aktif</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Lina Sari</td>
                        <td>Perempuan</td>
                        <td>22 Tahun</td>
                        <td>Menambah berat badan</td>
                        <td><span class="status-badge deactive">Deactivate</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tono Setiawan</td>
                        <td>Laki - Laki</td>
                        <td>28 Tahun</td>
                        <td>Menjaga berat badan</td>
                        <td><span class="status-badge aktif">Aktif</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" href="#">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Rina Ayu</td>
                        <td>Perempuan</td>
                        <td>24 Tahun</td>
                        <td>Menambah berat badan</td>
                        <td><span class="status-badge deactive">Deactivate</span></td>
                        <td>
                        <div class="dropdown">
                            <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('svg/action_button.svg')}}" alt="">
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('customer.detail')}}">Detail</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-ubah">Ubah Status</a></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-hapus">Delete</a></li>
                            </ul>
                        </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
          </div>
          <div class="tab-pane fade" id="daftarDelete" role="tabpanel" aria-labelledby="profile-tab">
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
                                <li><a class="dropdown-item"data-value="Aktif">Aktif</a></li>
                                <li><a class="dropdown-item"data-value="Tidak Aktif">Tidak Aktif</a></li>
                            </ul>
                    </div>
                    
                      <button class="approve-btn">Approve di Tandai</button>
                    
              </div>
            <table id="delete" class="display">
              <thead>
                <tr>
                  <th><input type="checkbox" id="selectAll"></th>
                  <th>Customer</th>
                  <th>Email</th>
                  <th>Alasan Hapus Akun</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Data Baris -->
                <tr>
                  <td><input type="checkbox" checked></td>
                  <td>Budi Santoso</td>
                  <td>budisantoso@gmail.com</td>
                  <td>Ketidakpuasan Layanan karena sangat rumit untuk digunakan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Siti Nurhaliza</td>
                  <td>sitinurhaliza@gmail.com</td>
                  <td>Perubahan Prioritas Pribadi</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Andi Wijaya</td>
                  <td>andiwijaya@gmail.com</td>
                  <td>Ketidakpuasan Layanan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Dewi Lestari</td>
                  <td>dewilestari@gmail.com</td>
                  <td>Perubahan Prioritas Pribadi</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Rudi Hartono</td>
                  <td>rudihartono@gmail.com</td>
                  <td>Ketidakpuasan Layanan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox" checked></td>
                  <td>Nina Pratiwi</td>
                  <td>ninapratiwi@gmail.com</td>
                  <td>Perubahan Prioritas Pribadi</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox" checked></td>
                  <td>Joko Susanto</td>
                  <td>jokosusanto@gmail.com</td>
                  <td>Ketidakpuasan Layanan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Lina Sari</td>
                  <td>linasari@gmail.com</td>
                  <td>Perubahan Prioritas Pribadi</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Tono Setiawan</td>
                  <td>tonosetiawan@gmail.com</td>
                  <td>Ketidakpuasan Layanan</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><input type="checkbox"></td>
                  <td>Rina Ayu</td>
                  <td>rinaayu@gmail.com</td>
                  <td>Perubahan Prioritas Pribadi</td>
                  <td>
                    <div class="dropdown">
                      <button class="btn-action" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{asset('svg/action_button.svg')}}" alt="">
                          </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modal-approve">Approve</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>

@include('landing.customer.modal.hapus-modal')
@include('landing.customer.modal.ubah-modal')
@include('landing.customer.modal.approve-modal')

@section('script')

<script>
    $(document).ready(function () {
        // Inisialisasi DataTables
        $('#list').DataTable({
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
        $('#delete').DataTable({
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
    $(document).ready(function() {
  $('#selectAll').on('change', function() {
    $('#delete tbody input[type="checkbox"]').prop('checked', this.checked);
  });

  $('#delete tbody input[type="checkbox"]').on('change', function() {
    if ($('#delete tbody input[type="checkbox"]:checked').length === $('#delete tbody input[type="checkbox"]').length) {
      $('#selectAll').prop('checked', true);
    } else {
      $('#selectAll').prop('checked', false);
    }
  });
});
</script>

</div>
@endsection