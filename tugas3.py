class Vehicle:
    def __init__(self,merk,tahun,warna):
        self.merk = merk
        self.tahun = tahun
        self.warna = warna
    def tampilkan_info(self):
        print(f"merk: {self.merk}")
        print(f"tahun: {self.tahun}")
        print(f"warna: {self.warna}")
        
class car(Vehicle):
    def __init__(self,merk,tahun,warna,model):
        super(). __init__(merk,tahun,warna)
        self.model = model
    
    def tampilkan_info(self):
        super().tampilkan_info()
        print(f"model: {self.model}")
        
if __name__ == '__main__':
    car= car('toyota',2022,'merah','camry')
    print("info kendaraan")
    car.tampilkan_info()