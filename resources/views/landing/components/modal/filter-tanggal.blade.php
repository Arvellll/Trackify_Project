@extends('base.app')
<!-- Modal Datepicker -->

@section('content')
<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <button class="navigasi" id="prevBulan">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                  <path d="M14.5 7L10.5 12L14.5 17" stroke="#369B47" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
              <h2 class="judul-bulan">Maret 2025</h2>
              <button class="navigasi" id="nextBulan">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                <path d="M10.5 7L14.5 12L10.5 17" stroke="#369B47" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              </button>
                </div>
                <div class="modal-body">
                <div class="calendar">
                  <table>
                      <thead>
                          <tr>
                              <th>Mo</th>
                              <th>Tu</th>
                              <th>We</th>
                              <th>Th</th>
                              <th>Fr</th>
                              <th>Sa</th>
                              <th>Su</th>
                          </tr>
                      </thead>
                      <tbody id="isiKalender">
                      </tbody>
                  </table>
              </div>
              </div>
                <div class="modal-footer">
                    <button type="button" class="btn-batal" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn-terapkan" data-bs-dismiss="modal" id="applyDateBtn"  >Terapkan</button>
                </div>
            </div>
        </div>
    </div>
@section('script')
<script>
   const isiKalender = document.getElementById('isiKalender');
    const judulBulan = document.querySelector('.judul-bulan');
    const prevBulanBtn = document.getElementById('prevBulan');
    const nextBulanBtn = document.getElementById('nextBulan');

    let bulanSekarang = new Date().getMonth();
    let tahunSekarang = new Date().getFullYear();
    let tanggalAwalRentang = null;
    let tanggalAkhirRentang = null;
    let jumlahKlik = 0;
    let timerKlikGanda;
    const delayKlikGanda = 300;

    function namaBulan(bulan) {
        const namaBulanArr = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        return namaBulanArr[bulan];
    }

    function tampilkanKalender(bulan, tahun) {
        isiKalender.innerHTML = '';
        judulBulan.textContent = `${namaBulan(bulan)} ${tahun}`;

        const hariPertamaBulan = new Date(tahun, bulan, 1);
        const jumlahHari = new Date(tahun, bulan + 1, 0).getDate();
        const hariDalamSemingguPertama = hariPertamaBulan.getDay() || 7;

        let tanggal = 1;
        for (let i = 0; i < 6; i++) {
            const baris = document.createElement('tr');
            for (let j = 1; j <= 7; j++) {
                const sel = document.createElement('td');
                if (i === 0 && j < hariDalamSemingguPertama) {
                    const tanggalSebelumnya = new Date(tahun, bulan, 1 - (hariDalamSemingguPertama - j)).getDate();
                    sel.textContent = tanggalSebelumnya;
                    sel.classList.add('bulan-sebelumnya');
                } else if (tanggal > jumlahHari) {
                    break;
                } else {
                    sel.textContent = tanggal;
                    const tanggalSekarang = tanggal;
                    const tanggalObj = new Date(tahun, bulan, tanggalSekarang);
                    sel.dataset.tanggal = tanggalObj.getTime(); // Simpan timestamp untuk perbandingan mudah
                    sel.style.cursor = 'pointer';

                    sel.addEventListener('click', function() {
                        jumlahKlik++;

                        if (jumlahKlik === 1) {
                            clearTimeout(timerKlikGanda);
                            timerKlikGanda = setTimeout(() => {
                                resetPilihan();
                                tanggalAwalRentang = tanggalObj;
                                this.classList.add('terpilih-single');
                                jumlahKlik = 0;
                                console.log('Klik Tunggal:', tanggalAwalRentang);
                            }, delayKlikGanda);
                        } else if (jumlahKlik === 2) {
                            clearTimeout(timerKlikGanda);
                            if (tanggalAwalRentang) {
                                tanggalAkhirRentang = tanggalObj;
                                if (tanggalAkhirRentang.getTime() !== tanggalAwalRentang.getTime()) {
                                    tandaiRentang();
                                } else {
                                    this.classList.add('terpilih-single');
                                }
                            } else if (tanggalAkhirRentang) {
                                resetPilihan();
                                tanggalAkhirRentang = tanggalObj;
                                this.classList.add('terpilih-single');
                            } else {
                                tanggalAwalRentang = tanggalObj;
                                tanggalAkhirRentang = tanggalObj;
                                this.classList.add('terpilih-single');
                            }
                            jumlahKlik = 0;
                            console.log('Klik Ganda - Awal:', tanggalAwalRentang, 'Akhir:', tanggalAkhirRentang);
                        }
                    });
                    tanggal++;
                }
                baris.appendChild(sel);
            }
            isiKalender.appendChild(baris);
            if (tanggal > jumlahHari) break;
        }
    }

    function resetPilihan() {
        const semuaSel = isiKalender.querySelectorAll('td');
        semuaSel.forEach(s => {
            s.classList.remove('terpilih-range');
            s.classList.remove('terpilih-single');
        });
        tanggalAwalRentang = null;
        tanggalAkhirRentang = null;
        jumlahKlik = 0;
    }

    function tandaiRentang() {
        if (!tanggalAwalRentang || !tanggalAkhirRentang) return;

        let mulai = Math.min(tanggalAwalRentang.getTime(), tanggalAkhirRentang.getTime());
        let selesai = Math.max(tanggalAwalRentang.getTime(), tanggalAkhirRentang.getTime());

        const semuaSel = isiKalender.querySelectorAll('td');
        semuaSel.forEach(sel => {
            const tanggalSelTimestamp = parseInt(sel.dataset.tanggal);
            if (tanggalSelTimestamp >= mulai && tanggalSelTimestamp <= selesai) {
                sel.classList.add('terpilih-range');
            } else {
                sel.classList.remove('terpilih-single'); // Pastikan tidak ada kelas single di rentang
            }
            // Pastikan tanggal awal dan akhir tetap memiliki kelas terpilih-range
            if (parseInt(sel.dataset.tanggal) === tanggalAwalRentang.getTime() || parseInt(sel.dataset.tanggal) === tanggalAkhirRentang.getTime()) {
                sel.classList.add('terpilih-range');
            }
        });
    }

    function keBulanSebelumnya() {
        bulanSekarang--;
        if (bulanSekarang < 0) {
            bulanSekarang = 11;
            tahunSekarang--;
        }
        tampilkanKalender(bulanSekarang, tahunSekarang);
    }

    function keBulanBerikutnya() {
        bulanSekarang++;
        if (bulanSekarang > 11) {
            bulanSekarang = 0;
            tahunSekarang++;
        }
        tampilkanKalender(bulanSekarang, tahunSekarang);
    }

    prevBulanBtn.addEventListener('click', keBulanSebelumnya);
    nextBulanBtn.addEventListener('click', keBulanBerikutnya);

    tampilkanKalender(bulanSekarang, tahunSekarang);
</script>

@endsection


