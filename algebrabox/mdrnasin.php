
<?php
	require "classes/Mypage.php";
	
	class mdrnasin extends Mypage
	{
		protected function GetContent()
		{
			$output = '';
			
			$output .= '<h1>Dobrodošli u MdrnasinBox</h1>';
			$output .= '<p>Pohranite svoje datoteke kod nas.</p>';
			
			return $output;
		}
		
		protected function PageRequiresAuthenticUser()
		{
			return true;
		}
	}

	$site = new mdrnasin();
	$site->Display('MdrnasinBox Index');
