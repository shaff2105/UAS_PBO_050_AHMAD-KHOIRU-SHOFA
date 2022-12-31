from abc import ABC, abstractmethod

class NoTurbo(ABC):
    @abstractmethod
    def __init__(self, name):
        """Please implement intialization of a car"""

    @abstractmethod
    def accelerate(self):
        """Please implement accelerating of a car"""

class WithTurbo(NoTurbo):
    @abstractmethod
    def turboAccelerate(self):
        """Please implement turboaccelerating of a car"""

class RegularCar(NoTurbo):
    def __init__(self, name):
        self.name = name
        self.speed = 0

    def accelerate(self):
        self.speed += 1
        print("Car %s is accelerating" % self.name)

class SportsCar(WithTurbo):
    def __init__(self, name):
        self.name = name
        self.speed = 0

    def accelerate(self):
        self.speed += 1
        print("Car %s is accelerating" % self.name)

    def turboAccelerate(self, turbo):
        self.speed += turbo
        print("Car %s is accelerating with turbo %d" % (self.name, turbo))

if __name__ == '__main__':
    
    car = RegularCar('BMW')
    car.accelerate()

    autoCar = SportsCar('Audi')
    autoCar.turboAccelerate(2)