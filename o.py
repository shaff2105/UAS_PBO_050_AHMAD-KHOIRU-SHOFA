import math

class BangunDatar:

    def luas():
        pass
class Persegi(BangunDatar):

    def __init__(self, panjang):
        self.panjang = panjang

    def luas(self):
        return pow(self.panjang, 2)
class Lingkaran(BangunDatar):

    def __init__(self, radius):
        self.radius = radius

    def luas(self):
        return math.pi * pow(self.radius, 2)

luaslingkaran = Lingkaran(20) 
print(f"Luas dari Lingkaran ialah = {luaslingkaran.luas()} ")
luaspersegi = Persegi(5)
print(f"Luas dari Persegi ialah = {luaspersegi.luas()} ")

