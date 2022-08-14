<?php
class SinhVienModel extends DB{
    public function GetSV(){
        //connect db
        return "Nguyen Quang Ha";
    }
    public function Tong($n,$m){
        return $n + $m;
    }
    public function Sinhvien(){
        $qr = "SELECT * FROM sinvien";
        return mysqli_query($this->con, $qr);
    }
}
?>