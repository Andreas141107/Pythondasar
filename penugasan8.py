x=int(input("Masukkan Usia Anda : "))
if x <= 10:
    print("\t\tAnak-anak")
elif x <= 18:
    print("\t\tRemaja")
elif x <= 35:
    print("\t\tDewasa")
elif x <= 65:
    print("\t\tParubaya")
else:
    print("\t\tTua / Lansia")