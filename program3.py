kode_kr = input("Masukkan kode karyawan: ")
nama_kr = input("Masukkan nama karyawan: ")
gol = input("Masukkan golongan: ")

if gol in ["A", "B", "C", "D"]:
    if gol == "A":
        gaji_pokok = 100000000
        potongan = 2.5
    elif gol == "B":
        gaji_pokok = 8500000
        potongan = 2.0
    elif gol == "C":
        gaji_pokok = 7000000
        potongan = 1.5
    elif gol == "D":
        gaji_pokok = 5500000
        potongan = 1.0

    potongan_gaji = gaji_pokok * (potongan / 100)
    
    tunjangan_suami_istri = 0.1 * gaji_pokok
    tunjangan_anak = 0.05 * gaji_pokok
    
    gaji_kotor = gaji_pokok + tunjangan_suami_istri + tunjangan_anak
    gaji_bersih = gaji_kotor - potongan_gaji

    print("========================================")
    print("STRUK RINCIAN GAJI KARYAWAN")
    print("----------------------------------------")
    print(f"Nama Karyawan: {nama_kr} (Kode: {kode_kr})")
    print(f"Golongan: {gol}")
    print("----------------------------------------")
    status = int(input("Masukan status (1: Menikah, 2: Belum Menikah): "))
    if status == 1:
        print(f"Tunjangan Istri/Suami: Rp {tuangan_suami_istri:,.0f}")
        print(f"Tunjangan Anak: Rp {tunjangan_anak:,.0f}")
    elif status == 2:
        print("Tunjangan Istri/Suami: Rp 0")
        print("Tunjangan Anak: Rp 0")
    print("----------------------------------------")
    print(f"Gaji Pokok: Rp {gaji_pokok:,.0f}")
    print(f"Potongan ({potongan}%): Rp {potongan_gaji:,.0f}")
    print("---------------------------------------- +")
    print(f"Gaji Bersih: Rp {gaji_bersih:,.0f}")