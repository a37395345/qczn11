<?php
/**
 * @package 	Imag.Framework
 * @subpackage  Image
 * @author      gary wang (wangbaogang123@hotmail.com)
 * @see http://www.white-hat-web-design.co.uk/articles/php-image-resizing.php
 */ 

 import("imag.image.gdextend");
 
class SimpleImage extends GdExtend
{
   
   private $image;
   private $image_type;
 
   public function load($filename) {
      $image_info = getimagesize($filename);
      $this->image_type = $image_info[2];
      if( $this->image_type == IMAGETYPE_JPEG ) {
         $this->image = imagecreatefromjpeg($filename);
      } elseif( $this->image_type == IMAGETYPE_GIF ) {
         $this->image = imagecreatefromgif($filename);
      } elseif( $this->image_type == IMAGETYPE_PNG ) {
         $this->image = imagecreatefrompng($filename);
      }elseif( $this->image_type == IMAGETYPE_BMP ) {
         $this->image = imagecreatefrombmp($filename);
      }
   }
   
   
   public function save($filename, $image_type=IMAGETYPE_JPEG, $compression=75, $permissions=null) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image,$filename,$compression);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image,$filename);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image,$filename);
      }elseif( $image_type == IMAGETYPE_BMP ) {
      	$path = strtolower($path);
		$path = str_replace("bmp", "jpg", $path);
		imagejpeg($this->image,$path);
      }
     
      if( $permissions != null) {
         chmod($filename,$permissions);
      }
   }
   public function output($image_type=IMAGETYPE_JPEG) {
      if( $image_type == IMAGETYPE_JPEG ) {
         imagejpeg($this->image);
      } elseif( $image_type == IMAGETYPE_GIF ) {
         imagegif($this->image);         
      } elseif( $image_type == IMAGETYPE_PNG ) {
         imagepng($this->image);
      } elseif( $image_type == IMAGETYPE_BMP ) {
      	$path = strtolower($path);
		$path = str_replace("bmp", "jpg", $path);
		imagejpeg($this->image,$path);
      }  
   }
   public function getWidth() {
      return imagesx($this->image);
   }
   public  function getHeight() {
      return imagesy($this->image);
   }
   public function resizeToHeight($height) {
      $ratio = $height / $this->getHeight();
      $width = $this->getWidth() * $ratio;
      $this->resize($width,$height);
   }
   public function resizeToWidth($width) {
      $ratio = $width / $this->getWidth();
      $height = $this->getheight() * $ratio;
      $this->resize($width,$height);
   }
   public function scale($scale) {
      $width = $this->getWidth() * $scale/100;
      $height = $this->getheight() * $scale/100; 
      $this->resize($width,$height);
   }
   public  function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
      $this->image = $new_image;   
   }      
}
?>