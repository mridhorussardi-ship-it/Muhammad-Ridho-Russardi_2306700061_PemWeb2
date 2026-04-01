<?php

// Class Induk
class SivitasAkademik {
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter
    public function getNama() {
        return $this->nama;
    }
}

// Class Anak 1: Dosen
class Dosen extends SivitasAkademik {
    private $nidn;

    // Constructor
    public function __construct($nama, $nidn) {
        parent::__construct($nama);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

// Class Anak 2: Mahasiswa
class Mahasiswa extends SivitasAkademik {
    private $nim;

    // Constructor
    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

// =======================
// INSTANSIASI OBJECT
// =======================

$dosen = new Dosen("Pak Budi", "123456");
$mahasiswa = new Mahasiswa("Ridho", "20231234");

// Output
echo "Data Dosen:<br>";
echo "Nama: " . $dosen->getNama() . "<br>";
echo "NIDN: " . $dosen->getNidn() . "<br><br>";

echo "Data Mahasiswa:<br>";
echo "Nama: " . $mahasiswa->getNama() . "<br>";
echo "NIM: " . $mahasiswa->getNim();

?>