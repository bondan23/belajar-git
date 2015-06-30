<?php
	function indonesiadate($thedate) {
		$hari=substr($thedate,8,2);
		$bulan=get_namabulan(substr($thedate,5,2));
		$tahun=substr($thedate,0,4);
		$tanggal="$hari $bulan $tahun";
		return $tanggal;
	}
	
	function get_namabulan($bulan) {
		//Checking
		switch($bulan) {
			//Jika isinya 1=Januari
			case 1 :
				$namabulan="Januari";
				break;
			 
			case 2 :
				$namabulan="Februari";
				break;
			
			case 3 :
				$namabulan="Maret";
				break;
			
			case 4 :
				$namabulan="April";
				break;
			
			case 5 :
				$namabulan="Mei";
				break;
			
			case 6 :
				$namabulan="Juni";
				break;
			
			case 7 :
				$namabulan="Juli";
				break;
			
			case 8 :
				$namabulan="Agustus";
				break;
			
			case 9 :
				$namabulan="September";
				break;
			
			case 10 :
				$namabulan="Oktober";
				break;
			
			case 11 :
				$namabulan="November";
				break;
			
			case 12 :
				$namabulan="Desember";
				break;
			
		}
		
		return $namabulan;
	}
    
    function gotopage($page) {
        echo "<script language='javascript'>";
        echo "window.location.href='$page'";
        echo "</script>";
    }
    
    function get_currentdate($selection) {
        date_default_timezone_set('Asia/Jakarta');
        $the=getdate();
        $year=$the["year"];	
        $month=$the["mon"];
        $day=$the["mday"];
        $hours=$the["hours"];
        $minutes=$the["minutes"];
        $seconds=$the["seconds"];
        
        switch ($selection) {
            case "year" :
                return $year;
                break;
            case "month" :
                return $month;
                break;
            case "day" :
                return $day;
                break;
            case "hours" :
                return $hours;
                break;
            case "minutes" :
                return $minutes;
                break;
            case "seconds" :
                return $seconds;
                break;
        }
    }
?>