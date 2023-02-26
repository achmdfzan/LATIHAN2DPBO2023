from SivitasAkademik import SivitasAkademik

class Mahasiswa(SivitasAkademik):

    __nim = ""
    __prodi = ""
    __fakultas = ""

    def __init__(self, nik = "", nama = "", jenkel = "", asalUniv = "", emailEdu = "", nim = "", prodi = "", fakultas = ""):
        super().__init__(nik, nama, jenkel, asalUniv, emailEdu)
        self.__nim = nim
        self.__prodi = prodi
        self.__fakultas = fakultas
    
    def getNIM(self):
        return self.__nim
    
    def setNIM(self, nim):
        self.__nim = nim
    
    def getProdi(self):
        return self.__prodi
    
    def setProdi(self, prodi):
        self.__prodi = prodi

    def getFakultas(self):
        return self.__fakultas
    
    def setFakultas(self, fakultas):
        self.__fakultas = fakultas