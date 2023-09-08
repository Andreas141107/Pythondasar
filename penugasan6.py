while True:
    try:
        nilai = float(input("Masukkan nilai siswa: "))
        if nilai >= 75:
            print("TUNTAS")
            break
        else:
            print("Siswa belum tuntas. Masukkan nilai di atas atau sama dengan 75.")
    except ValueError:
        print("Masukkan nilai yang valid (angka)!")
