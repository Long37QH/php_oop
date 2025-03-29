<?php 
  class HCN {
    public static $ChieuDai;
    public static $ChieuRong;

    public static function chuvi(){
      return 2 * (self::$ChieuDai + self::$ChieuRong);
    }

    public static function dientich(){
      return self::$ChieuDai * self::$ChieuRong;
    }
  }

  HCN::$ChieuDai = 5;
  HCN::$ChieuRong = 2;
  echo HCN::dientich()
?>