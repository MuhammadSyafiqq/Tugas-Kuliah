var nama = 'MuhammadSyafiqZhalifunnas'
var nim  = '2200018394'

alert('hey,Saya ' + nama + '\nDengan NIM : ' + nim)

alert('Selesaikan Quiz Berikut Untuk Masuk Ke Web')

quiz ();

function quiz() {
    var nilai1= 5
    var nilai2= 7
    var jawaban = prompt('5 x 7 = ')

    if (quiz.jawaban = 35) {
    alert('Jawaban ada benar')
    alert('Tekan OK untuk Ke WEB')
}
    else if (quiz.jawaban != 35) {
    alert('Jawaban Anda Belum Benar')
    penjumlahan();
}
 
}
function penjumlahan(){
    var jawaban = prompt('5 + 7 = ')

    if (penjumlahan.jawaban == 12 ) {
        alert('Jawaban Anda Benar')
        alert('Tekan OK untuk Ke WEB')
    }
    else if (pengurangan.jawaban != 12) {
        pengurangan();
    }
}
function pengurangan(){
    var jawaban = prompt('10 - 5 = ')

    if (pengurangan.jawaban == 5 ) {
        alert('Jawaban Anda Benar')
        alert('Tekan OK untuk Ke WEB')
    }
    else if (pengurangan.jawaban != 5 ) {
        quiz();
    }
}







    


