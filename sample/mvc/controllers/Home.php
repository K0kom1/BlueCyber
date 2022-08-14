<?php
class Home extends Controller{
    function SayHi(){
        $ha = $this->model("SinhVienModel");
        echo $ha->GetSV();
    }
    function Show($a){
        $ha = $this->model("SinhVienModel");
        $tong = $ha->Tong($a[0], $a[1]);
        $this->view("Aodep",[
            "Page"=>"news",
            "Number"=>$tong,
            "color"=>"red",
            "SV" => $ha->Sinhvien()
        ]);
    }
}
?>