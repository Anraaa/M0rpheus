bhs_indo = int(input("Nilai Bhs Indonesia: "))
ipa = int(input("Nilai IPA: "))
mtk = int(input("Nilai Matematika: "))

if (bhs_indo < 0) or (bhs_indo > 100) or (ipa < 0) or (ipa > 100) or (mtk < 0) or (mtk > 100):
    print("Maaf, input yang diterima hanya berupa angka 0-100")
else:
    if (bhs_indo < 60) or (ipa < 60) or (mtk < 70):
        print("Status Kelulusan: TIDAK LULUS\n")
        print("Sebab:")
        if (bhs_indo < 60):
            print("Nilai Bhs Indonesia kurang dari 60")
        if (ipa < 60):
            print("Nilai IPA kurang dari 60")
        if (mtk < 70):
            print("Nilai Matematika kurang dari 70")
    else:
        print("Status Kelulusan: LULUS")