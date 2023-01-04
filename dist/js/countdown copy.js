// setTimeOut() ==> untuk mengeksekusi function dengan waktu

// const tes = setTimeout(function(){
//     console.log('ok');
// }, 5000);

// const tombol = document.getElementById('tombol');
// tombol.addEventListener('click', function(){
//     clearTimeout(tes);
//     console.log('selesai');
// })



// setInterval() ==> untuk tindakan function berulang sesuai waktu

// const tes = setInterval(function(){
//     console.log('ok');
// }, 2000);

// const tombol = document.getElementById('tombol');
// tombol.addEventListener('click', function(){
//     clearTimeout(tes);
//     console.log('selesai');
// })


// Program Countdown
const tanggalTujuan = new Date('2022-03-25 11:41:30').getTime();

const hitungMundur = setInterval(function(){

    const sekarang = new Date().getTime();
    const selisih = tanggalTujuan - sekarang;

    const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
    const jam = Math.floor(selisih % (1000 * 60 * 60 * 24)/(1000 * 60 * 60));
    const menit = Math.floor(selisih % (1000 * 60 * 60)/(1000 * 60));
    const detik = Math.floor(selisih % (1000 * 60)/1000);

    // console.log(sekarang);
    // console.log(tanggalTujuan);
    // console.log(selisih);
    // console.log(hari);
    // console.log(jam);
    // console.log(menit);
    // console.log(detik);

    const teks = document.getElementById('teks');
    teks.innerHTML = 'Waktu tersisa : ' + hari + ' hari ' + jam + ' jam ' + menit + ' menit ' + detik + ' detik';

    if( selisih == 0) {
        clearInterval(hitungMundur);
        // teks.innerHTML = 'Waktu selesai';
        location.replace('index.php');
    }

}, 1000);

