<div class="modal fade" id="modal-logout" tabindex="-1" aria-labelledby="modalLogoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLogoutLabel">Konfirmasi</h5>
               </div>
            <div class="modal-body">
                <div class="icon-keluar text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85" fill="none">
                    <path d="M61.7665 51.7792L70.8331 42.7125L61.7665 33.6459" stroke="#E16458" stroke-width="5.3125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M34.5667 42.7126H70.5854" stroke="#E16458" stroke-width="5.3125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M41.65 70.8333C25.9958 70.8333 13.3167 60.2083 13.3167 42.5C13.3167 24.7916 25.9958 14.1666 41.65 14.1666" stroke="#E16458" stroke-width="5.3125" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </div>
                <p class="text-center">Anda yakin ingin keluar dari akun ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-batal" data-bs-dismiss="modal">Batal</button>
                <a href="{{ route('login') }}" class="btn-terapkan">Ya, Keluar</a>
            </div>
        </div>
    </div>
</div>