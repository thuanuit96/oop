<?php
/**
 * Created by PhpStorm.
 * User: Thuanuit
 * Date: 7/26/2018
 * Time: 10:06 PM
 */

class Phuong_trinh_bac_nhat
{  //testtststttttttttttttadad
     var $a;
     var $b;
    //Phương thức khởi tạo
    function __construct($a,$b){

     $this->a=$a;
     $this->b=$b;
    }
    function  tinhnghiem(){
       $kq=$this->a.''.$this->b;
       return $kq;

    }
    function  nghiem(){
        $nghiem="";
        if($this->a==0){
            if($this->b==0){
                $nghiem='Phương trình vô số nghiệm';
            }
            else{
                $nghiem="Phương trình vô nghiệm";
            }
        }
        else
        {
            $nghiem='có nghiệm';
        }
        return $nghiem;

    }


}
class phuong_trinh_bac_hai extends  Phuong_trinh_bac_nhat{

    var $c;
    function  __construct($a,$b,$c){
        parent::__construct($a,$b);
        $this->c=$c;
    }
 function  nghiem(){
        $nghiem='';
        if($this->a==0){
            parent::__construct($this->b,$this->c);

            $nghiem=parent::nghiem();



        }
        else
        {
            $delta=pow($this->b,2)-(4*$this->a*$this->c);
            if($delta==0){
                $nghiem="Phương Trình có  nghiệm kép";
            }
            elseif($delta>0){
                $nghiem="Phương Trình có  nghiệm phân biệt";
            }
            else{
                $nghiem="Phương Trình vsô nghiệm";
            }
        }
        return $nghiem;
 }


}

$pt=new phuong_trinh_bac_hai(14,4,1);
echo $pt->tinhnghiem();
echo $pt->nghiem();
