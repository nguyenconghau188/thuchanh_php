<?php 
/**
 *  
 */
interface Nguoi
{
    public function name($name);

    public function age($age);

}

abstract class Xe
{
    var $banh;

    public function mau()
    {
        return 'den';
    }

    public abstract function gia();
}

class DongVat
{
    var $mat = '';
    var $chan = '';

    function an()
    {
        return 'dong vat dang an';
    }

    function mat()
    {
        $this->mat = 'co 2 mat';
    }

    function chan()
    {
        $this->chan = 'co 2 chan';
    }
}

class Trau extends DongVat
{
    var $sung = 'trau co sung';

    public function __construct()
    {
        $this->chan = 'co 4 chan';
    }

    function huc()
    {
        return 'trau huc <br>';
    }

    function gioiThieu()
    {
        echo 'MAT: '.$this->mat.'<br>';
        echo 'CHAN: '.$this->chan.'<br>';
        echo 'SUNG: '.$this->sung.'<br>';

        echo parent::an().'<br>';
        echo $this->huc();
    }
    function an()
    {
        return 'trau dang an';
    }
}

/**
 * summary
 */
class HocSinh implements Nguoi
{
    /**
     * summary
     */
    var $lop;

    public function __construct()
    {
        $this->lop = 5;
    }
    public function name($name)
    {
        return 'HaU';
    }
    public function age($age)
    {
        
    }
}

class Oto extends Xe
{
    public function __construct()
    {
        $this->banh = '4 banh';
    }

    public function gia()
    {
        return '5 ti';
    }
}

// $oto = new Oto();
// echo 'banh: '.$oto->banh;
// echo $oto->mau();

// $trau = new Trau();
// $trau->gioiThieu();
// echo 'paren an: '.$trau->an().'<br>';
 
// $hs = new HocSinh();
// echo 'name '.$hs->name('hau');
// 
class LaoDong
{
    var $ten;
    public function __construct($ten)
    {
        $this->ten = $ten;
    }

    public function getTen()
    {
        return $ten;
    }
}

/**
 * summary
 */
class NhanVien extends LaoDong
{
    // public function __construct($ten)
    // {
    //     parent::__construct($ten);
    //     //Do your magic here
    // }
    function inTen(){
        echo 'ten: '.$this->ten;
        echo '<br>parent ten: '.parent::getTen();
    }
}


$nhanvien = new NhanVien('hau');
$nhanvien->inTen();
?>