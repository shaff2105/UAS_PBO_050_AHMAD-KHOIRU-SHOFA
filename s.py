import math


class Lingkaran:

    def __init__(self, radius):
        self.radius = radius
class Persegi:

    def __init__(self, panjang):
        self.panjang = panjang
class Kalkulasi:

    def __init__(self, *args):
        self.bangunDatar = args

    def calculate(self):
        listLuas = []
        for objek in self.bangunDatar:
            luas = 0
            if type(objek).__name__ == 'Persegi':
                luas = math.pow(objek.panjang, 2)
            elif type(objek).__name__ == 'Lingkaran':
                luas = math.pi * math.pow(objek.radius, 2)
            listLuas.append(luas)

        return sum(listLuas)

    def output(self):
        return self.calculate()
if __name__ == "__main__":

    result = Kalkulasi(
        Lingkaran(21),
        Persegi(10),
        Persegi(15)
    )

    print("Jumlah luas dari bangunan ialah =  ", result.output())