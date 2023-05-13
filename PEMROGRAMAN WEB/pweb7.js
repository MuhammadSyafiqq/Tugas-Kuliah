var nama = 'MuhammadSyafiqZhalifunnas'
var nim  = '2200018394'

alert('hey,Saya ' + nama + '\nDengan NIM : ' + nim)

alert('Program Kalkulator')

alert ('1.Penjumlahan\n2.Pengurangan\n3.Perkalian \n4.Pembagian : ')

var pil = prompt ('Masukkan Pilihan : ')


switch(pil){
    case"1" :
    var bil1 = prompt ('Masukkan Bil 1 :')
    var bil2 = prompt ('Masukkan Bil 2 :')
    var hasil = alert('Hasil = '+(parseInt(bil1)+parseInt(bil2)));
    break

    case"2" :
    var bil1 = prompt ('Masukkan Bil 1 :')
    var bil2 = prompt ('Masukkan Bil 2 :')
    var hasil = alert('Hasil = '+(parseInt(bil1)-parseInt(bil2)));
    break

    case"3" :
    var bil1 = prompt ('Masukkan Bil 1 :')
    var bil2 = prompt ('Masukkan Bil 2 :')
    var hasil = alert('Hasil = '+ (parseInt(bil1)*parseInt(bil2)));
    break;

    case"4" :
    var bil1 = prompt ('Masukkan Bil 1 :')
    var bil2 = prompt ('Masukkan Bil 2 :')
    var hasil = alert('Hasil = '+ (parseInt(bil1)/parseInt(bil2)));
    break

default :
    alert('Pilihan Tidak ada')



}


    


  



