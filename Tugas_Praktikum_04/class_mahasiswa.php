<?php
class NilaiMahasiswa{
    public $nim;
    public $matkul;
    public $nilai;

    function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }
    function hitungnilai(){
        return $this->nilai;
    }
    function grade($grading){
        if ($grading > 55){
            return 'Anda Lulus';
        }else{
            return 'Anda Tidak Lulus';
        }
    }
    function Hasil($grading){
        if ($grading >= 85 && $grading <= 100){
            return 'grade : A';
        }elseif ($grading >= 70 && $grading <= 84) {
            return 'grade : B';
        }elseif ($grading >= 56 && $grading <= 69) {
            return 'grade : C';
        }elseif ($grading >= 36 && $grading <= 55) {
            return 'grade : D';
        }elseif ($grading >= 0 && $grading <= 35) {
            return 'grade : E';
        }else {
            return 'I';
        
   
        }

    }
}
?>