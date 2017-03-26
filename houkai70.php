<?php
    $houkai = array(
    array('特住','0', '7,000'),
    array('歴住','2,000,000', '7,000'),
    array('再住','1,000,000', '4,000'),
    array('前住','500,000', '2,500'),
    array('住持','250,000', '2,000'),
    array('東堂','100,000', '1,200'),
    array('西堂','70,000', '1,000'),
    array('塔司','50,000', '800'),
    array('座元','30,000', '600'),
    array('首座','10,000', '400'),
    array('蔵主','5,000', '300'),
    array('侍者','2,000', '200'),
    array('沙弥','1,000', '200'),
    );
    $shorui = array('証明書','副申下付証明書');
    $age = array(
        array('満27歳以上',27),
        array('満25歳以上で住職を請願する者、及び満20歳以上で副住職を請願する者',25),
        array('満8歳以上',8),
        array('満5歳以上',5),
        );
    $jihan = array(
            array('特例地','500000'),
            array('別格地','350000'),
            array('準別格地','250000'),
            array('1等地','150000'),
            array('2等地','100000'),
            array('3等地','50000'),
            array('4等地','35000'),
            array('5等地','25000'),
            array('6等地','15000'),
            array('7等地','10000')
    );


    $soudoureki = array(
        array('3年以上',3),
        array('2年6ケ月以上',2.5),
        array('2年以上',2),
        array('１年6ケ月以上',1.5),
        array('１年以上',1),
        array('6ケ月以上',0.5),
        );
 
 class Temple{
    
    private $houkai_bef = '';
    private $houkai_gizai;
    private $kousi;
    private $soudoureki;
    private $age;
    private $juushoku;
    private $shorui;   


    public function __construct($houkai_bef,$houkai_aft,$soudoureki,$age) {
        $this->houkai_bef = $houkai_bef;
        $this->houkai_aft = $houkai_aft;
        //$this->houkai_gizai = $houkai_gizai;
        $this->soudoureki = $soudoureki;
        $this->age = $age;
    }
    //function sethoukai($houkai) {
       // $this->houkai = (string)filter_var($houkai);
    //}
    function get_houkai_bef() {
        return $this->houkai_bef;
    } 
      function get_houkai_aft() {
        return $this->houkai_aft;
    } 
     function get_soudoureki() {
        return $this->soudoureki;
    } 
     function gethoukai_gizai() {
        return $this->houkai_gizai;
    }  
    function get_age() {
        return $this->age;
    } 
    
    function soudou_check($houkai_aft,$soudou){
        switch ($soudou){
            case 2.5:
                switch ($houkai_aft){
                    case '特住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '歴住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '再住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '前住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '住持':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    
                } ;break;
            case 2:
                switch ($houkai_aft){
                    case '特住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '歴住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '再住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '前住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '住持':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '東堂':  
                        print('西堂職稟承後３年の必要があります。<br>');break;
                  };break;
            case 1.5:
                switch ($houkai_aft){
                    case '特住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '歴住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '再住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '前住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '住持':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '東堂':  
                        print('西堂職稟承後３年の必要があります。<br>');break;
                    case '西堂':  
                        print('塔司職稟承後１年の必要があります。<br>');break;
                  };break;
            case 1:
                switch ($houkai_aft){
                    case '特住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '歴住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '再住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '前住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '住持':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '東堂':  
                        print('西堂職稟承後３年の必要があります。<br>');break;
                    case '西堂':  
                        print('塔司職稟承後１年の必要があります。<br>');break;
                    case '塔司':  
                        print('座元職稟承後１年の必要があります。<br>');break;
                  };break;
            case 0.5:
                switch ($houkai_aft){
                    case '特住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '歴住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '再住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '前住':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '住持':  
                        print('東堂職稟承後５年の必要があります。<br>');break;
                    case '東堂':  
                        print('西堂職稟承後３年の必要があります。<br>');break;
                    case '西堂':  
                        print('塔司職稟承後１年の必要があります。<br>');break;
                    case '塔司':  
                        print('座元職稟承後１年の必要があります。<br>');break;
                    case '座元':  
                        print('首座職稟承後１年の必要があります。<br>');break;
                  };break;

            }
    }

    function age_check($houkai_aft,$age){
        switch ($houkai_aft){
            case '特住':  
                if($age < 26){print('特住昇進の年齢に達していません<br>');};break;
            case '歴住':  
                if($age < 26){print('歴住昇進の年齢に達していません<br>');};break;
            case '再住':  
                if($age < 26){print('再住昇進の年齢に達していません<br>');};break;
            case '前住':  
                if($age < 26) {print('前住昇進の年齢に達していません<br>');};break;
            case '住持':  
                if($age < 26) {print('住持昇進の年齢に達していません<br>');};break;
            case '東堂':  
                if($age < 25) {print('法階昇進の年齢に達していません<br>');};break;
            case '西堂':  
                if($age < 25) {print('法階昇進の年齢に達していません<br>');};break;
            case '塔司':  
                if($age < 25) {print('法階昇進の年齢に達していません<br>');};break;
            case '座元':  
                if($age < 25) {print('法階昇進の年齢に達していません<br>');};break;
            case '首座':  
                if($age < 7) {print('法階昇進の年齢に達していません<br>');};break;
            case '蔵主':  
                if($age < 7) {print('法階昇進の年齢に達していません<br>');};break;
            case '侍者':  
                if($age < 7) {print('法階昇進の年齢に達していません<br>');};break;
            case '沙弥':  
                if($age < 4) {print('法階昇進の年齢に達していません<br>');};break;            
        }
    }
 }


    ?>

