nama = str(input("Masukkan Nama Karyawan : "))
gaji = int(input("Masukkan Gaji Pokok : "))
tunjangan = gaji*0.2
pajak = (gaji+tunjangan)*0.15
gajiBersih = gaji+tunjangan-pajak
print("Nama\t : ", nama)
print("Gaji\t : ", gaji)
print("Gaji Bersih :", gajiBersih)