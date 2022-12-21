.model small
.code 
org 100h

start :
	jmp mulai
nama		db 13,10, 'Nama lengkap Anda : $'
hp		db 13,10, 'No. HP            : $'
lanjut		db 13,10, 'Tekan y untuk melihat jadwal penerbangan lainnya : $'
tampung_nama	db 30,?,30 dup(?)
tampung_hp	db 13,?,13 dup(?)

a db 01
b db 02
c db 03
d db 04
e db 05
f db 06
g db 07
h db 08
i db 09
j dw 15

daftar  db 13,10, '| -------------------------------------------------------------------|'
	db 13,10, '|                    BANDAR UDARA SULTAN SYARIF KASIM II             |'
	db 13,10, '|--------------------------------------------------------------------|'
	db 13,10, '|                        Pekanbaru-Yogyakarta                        |'
        db 13,10, '|--------------------------------------------------------------------|'
	db 13,10, '| NO |     Maspakai    |No.Flight|  Jam  | Tanggal    | Harga Tiket  |'
	db 13,10, '| 01 | Garuda Indonesia| GA-121  | 05.00 | 18/12/2022 | Rp.1.550.000 |'
	db 13,10, '| 02 | Lion Air        | JT-820  | 06.30 | 18/12/2022 | Rp.1.220.000 |'
	db 13,10, '| 03 | Batik Airlane   | BK-720  | 07.45 | 18/12/2022 | Rp.1.320.000 |'
        db 13,10, '| 04 | Super AirJet    | IU-313  | 08.55 | 18/12/2022 | Rp.1.400.000 |'
	db 13,10, '| 05 | Citilink        | QG-565  | 10.20 | 18/12/2022 | Rp.920.000   |'
	db 13,10, '|--------------------------------------------------------------------|','$'

daftar2 db 13,10, '| -------------------------------------------------------------------|'
        db 13,10, '|	             BANDAR UDARA SULTAN SYARIF KASIM II                |'
        db 13,10, '|--------------------------------------------------------------------|'
	db 13,10, '|                        Pekanbaru-Bali                              |'
        db 13,10, '|--------------------------------------------------------------------|'
	db 13,10, '| NO |    Maspakai     |No.Flight|  Jam  | Tanggal    | Harga Tiket  |'
	db 13,10, '| 06 | Lion Air        |  JT-094 | 05.15 | 18/12/2022 | Rp.1.1OO.000 |'
	db 13,10, '| 07 | Lion Air        |  JT-923 | 06.45 | 18/12/2022 | Rp.1.300.000 |'
	db 13,10, '| 08 | Sriwijaya Air   |  SJ-245 | 08.30 | 18/12/2022 | Rp.1.375.000 |'
        db 13,10, '| 09 | Super AirJet    |  IU-455 | 09.55 | 18/12/2022 | Rp.1.600.000 |'
	db 13,10, '| 10 | Citilink        |  QG-569 | 12.30 | 18/12/2022 | Rp.980.000   |'
	db 13,10, '|--------------------------------------------------------------------|','$'

error		db 13,10,'KODE YANG ANDA MASUKKAN SALAH $'
pilih_mtr 	db 13,10,'Silahkan Masukkan No Penerbangan (ex:01) : $'
succes 	  	db 13,10,'Selamat Anda Berhasil $'

	mulai :
		mov ah, 09h
		lea dx,nama
		int 21h
		mov ah,0ah
		lea dx,tampung_nama 
		int 21h
		push dx
		
		mov ah, 09h
		lea dx,hp
		int 21h
		mov ah,0ah
		lea dx,tampung_hp
		int 21h
		push dx
		
		mov ah,09h
		mov dx,offset daftar
		int 21h
		mov ah,09h
		mov dx,offset lanjut
		int 21h
		mov ah,01h
		int 21h
		cmp al,'y'
		je page2
		jne error_msg


page2:			
		mov ah,09h
		mov dx,offset daftar2
		int 21h
		mov ah,09h
		mov dx,offset lanjut
		int 21h
		mov ah,01h
		int 21h
		cmp al,'y'
		jmp proses
		jne error_msg

error_msg :
		mov ah,09h
		mov dx,offset error
		int 21h
		int 20h
		
proses  : 
		mov ah,09h
		mov dx,offset pilih_mtr
		int 21h

		mov ah,1
		int 21h
		mov bh,bl
		mov ah,1
		int 21h
		mov bl,al
		cmp bh,'0'
		cmp bl,'1'
		je hasil1
	

		cmp bh,'0'
		cmp bl,'2'
		je hasil2


		cmp bh,'0'
		cmp bl,'3'
		je hasil3

		cmp bh,'0'
		cmp bl,'4'
		je hasil4

		
		cmp bh,'0'
		cmp bl,'5'
		je hasil5

		
		cmp bh,'0'
		cmp bl,'6'
		je hasil6

	
		cmp bh,'0'
		cmp bl,'7'
		je hasil7

	
		cmp bh,'0'
		cmp bl,'8'
		je hasil8
		
		cmp bh,'0'
		cmp bl,'9'
		je hasil9

		cmp bh,'1'
		cmp bl,'0'
		je hasil10

		jne error_msg



;-------------------------------------------------------------------------------------

hasil1: 
	mov ah,09h
	lea dx,teks1
	int 21h
	int 20h
hasil2: 
	mov ah,09h
	lea dx,teks2
	int 21h
	int 20h
hasil3: 
	mov ah,09h
	lea dx,teks3
	int 21h
	int 20h
hasil4: 
	mov ah,09h
	lea dx,teks4
	int 21h
	int 20h
hasil5: 
	mov ah,09h
	lea dx,teks5
	int 21h
	int 20h
hasil6: 
	mov ah,09h
	lea dx,teks6
	int 21h
	int 20h
hasil7: 
	mov ah,09h
	lea dx,teks7
	int 21h
	int 20h

hasil8: 
	mov ah,09h
	lea dx,teks8
	int 21h
	int 20h

hasil9: 
	mov ah,09h
	lea dx,teks9
	int 21h
	int 20h
hasil10: 
	mov ah,09h
	lea dx,teks10
	int 21h
	int 20h

	

;--------------------------------------------------------------------------------


teks1	db 13,10,'Anda Memilih Garuda Airline'
	db 13,10,'Dengan Nomor Penerbangan GA-121'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Yogyakarta'
	db 13,10,'Total Harga : Rp.1.550.000'
	db 13,10,'Terima Kasih $'

teks2	db 13,10,'Anda Memilih Lion Air '
	db 13,10,'Dengan Nomor Penerbangan JT-820'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Yogyakarta'
	db 13,10,'Total Harga : Rp.1.220.000'
	db 13,10,'Terima Kasih $'

teks3	db 13,10,'Anda Memilih Maskapai BatikAirLane '
	db 13,10,'Dengan Nomor Penerbangan BK-720'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Yogyakarta'
	db 13,10,'Total Harga : Rp.1.320.000'
	db 13,10,'Terima Kasih $'

teks4	db 13,10,'Anda Memilih Super AirJet'
	db 13,10,'Dengan Nomor Penerbangan IU-313'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Yogyakarta'
	db 13,10,'Total Harga : Rp.1.400.000'
	db 13,10,'Terima Kasih $'

teks5	db 13,10,'Anda Memilih Citilink'
	db 13,10,'Dengan Nomor Penerbangan QG-565'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Yogyakarta'
	db 13,10,'Total Harga : Rp.920.000'
	db 13,10,'Terima Kasih $'

teks6	db 13,10,'Anda Memilih Lion Air '
	db 13,10,'Dengan Nomor Penerbangan JT-094'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Bali'
	db 13,10,'Total Harga : Rp.1.100.000'
	db 13,10,'Terima Kasih $'

teks7	db 13,10,'Anda Memilih Lion Air '
	db 13,10,'Dengan Nomor Penerbangan JT-923'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Bali'
	db 13,10,'Total Harga : Rp.1.300.000'
	db 13,10,'Terima Kasih $'

teks8	db 13,10,'Anda Memilih Sriwijaya Air'
	db 13,10,'Dengan Nomor Penerbangan SJ-245'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Bali'
	db 13,10,'Total Harga : Rp.1.375.000'
	db 13,10,'Terima Kasih $'

teks9	db 13,10,'Anda Memilih Super AirJet'
	db 13,10,'Dengan Nomor Penerbangan IU-455'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Bali'
	db 13,10,'Total Harga : Rp.1.600.000'
	db 13,10,'Terima Kasih $'

teks10	db 13,10,'Anda Memilih Citilink'
	db 13,10,'Dengan Nomor Penerbangan QG-569'
	db 13,10,'Dengan Rute Penerbangan Pekanbaru-Bali'
	db 13,10,'Total Harga : Rp.980.000'
	db 13,10,'Terima Kasih $'



end start 		


