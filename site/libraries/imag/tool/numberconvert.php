<?php
class NumberConvert{
	
	private $d = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

	public function tenton($m,$n){
			if(!is_numeric($m)||!is_numeric($n)){
				return -1;
			}
			$list = array();
			$start = true; 
			while($start){
				$r = $m%$n;
				$m = floor($m/$n);
				array_push($list,$this->d[$r]);
				if($m<$n){
					array_push($list,$this->d[$m]);
					$start = false;
				}
			}
			return implode("", array_reverse($list));
	}

	public function ntoten($strin,$n) {
			if(!is_numeric($n)){
				return -1;
			}
			$result = 0;
			$l = strlen($strin) - 1;
			for($i=$l; $i >= 0; $i--) {
					$t = array_search(strtolower($strin{$i}),$this->d);
					if($t===FALSE){
						$result = -1;
						break;
					}
					$result += pow($n, ($l - $i)) * $t;
			}
			return $result;
	}

	public function randArray($a){
		$r = array();
		while(count($a)!=0){
			$rand = array_rand($a);
			$d = array_splice($a, $rand, 1);
			$r[] = $d[0];
		}
		return $r;
	}

}
?>