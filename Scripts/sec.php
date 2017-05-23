<?php
	include('co.php');
	class ers {
		private function encrypt ($conv) {
			$intr=hash('sha256',$conv);
			return $intr;
		}
		public function sec ($pacsha) {
			return encrypt($pacsha);	
		}

	}
?>