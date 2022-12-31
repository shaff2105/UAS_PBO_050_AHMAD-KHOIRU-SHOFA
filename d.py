class Buku:
    def __init__(self, halaman):
        self.halaman = halaman
    
    def lembar(self):
        print("Buku itu memiliki banyak lembar")

class Novel(Buku):
    def __init__(self, halaman):
        super().__init__(halaman)

    def hlm(self):
        print(f"Novel itu memiliki {self.halaman} halaman")

class Komik(Buku):
    def __init__(self, halaman):
        super().__init__(halaman)

    def kmk(self):
        print(f"Komik itu memiliki {self.halaman} halaman")

halaman = Novel(500)
halaman.hlm()
halaman = Komik(200)
halaman.kmk()