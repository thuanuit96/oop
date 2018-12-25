<?php

// class cart
// {
//     public $a = array('qty'=>0, 'price' => 2323 ,'item' => 'sdasdasds');
//
//   function __construct()
//   {
//
//   }
// }
// $cart=new cart();
// $b=['thuan'=>'1sdsds',"price"=>2,'Quantity'=>111,'item'=>1];
// // $b['Quantity']=$b['Quantity']+1;
// $b=$cart->a['item'];
// $b['Quantity']+=1;
// var_dump($b);

// $b=['thuan'=>'1sdsds',"price"=>2,'Quantity'=>111];

// $a=$b['thuan'];


class tinhtong{
    private $a;
    private $mater;
    private $b;
    function  __construct($value1,$value2 ){
        $this->a=$value1;
        $this->b=$value2;
    }
    public function get_tong($a){

        $c= $a->a+$a->b;
        return $c;
    }
    public  function  set_vl($vl1,$vl2)
    {
        $this->a=$vl1;
        $this->b=$vl2;
    }
    public function get_vl1()
    {
        return $this->a;



    }
    public function get_vl2()
    {
        return $this->a;



    }

}$tong= new tinhtong(0,0);
$tong->set_vl(2,5);
echo $tong->get_vl1();
echo $tong->get_tong($tong);

//var_dump($tong);

?>
