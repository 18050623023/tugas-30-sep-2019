// Hafiz Rizqon Adinata
// 18050623023
// D3 Manajemen Informatika 2018

<?php

abstract class binatang{
	protected $nama ;
	protected $jmlKaki ;

	function __construct($nama,$jmlKaki){
		$this -> nama = $nama ;
		$this -> jmlKaki = $jmlKaki; 
	}

	function setNama($nama){
		$this -> nama = $nama ;
	}

	function getNama(){
		return $this -> nama;
	}

	function setKaki($jmlKaki){
		$this -> jmlKaki = $jmlKaki; 
	}

	function displayBinatang(){
		echo "binatang ".$this->jenis." ini bernama : ".$this -> nama."<br> jumlah kaki : ".$this -> jmlKaki;
	}
}

interface Karnifora{
    function displayMakan();
}

interface Herbifora{
	function displayMakan();
}

class Beruang extends binatang implements Herbifora,Karnifora	{
	private $suara;
	private $warnaBulu;
	public $jenis = "Beruang";

	function __construct($nama,$jmlKaki,$suara,$warna_bulu){
		$this -> suara =$suara;
		$this -> warnaBulu = $warna_bulu;
		$this -> nama = $nama;
		$this -> jmlKaki = $jmlKaki;
	}

	function displayMakan(){
		echo "<br>jenis binatang ini adalah Herbifora dan Karnifora";
	}

	function displayData(){
		echo $this -> displayBinatang();
		echo "<br>Binatang ini bersuara : ".$this -> suara ;
		echo "<br>berwarna : ".$this -> warnaBulu;
		echo $this -> displayMakan();
	}
}

class Kucing extends binatang implements Herbifora	{
	private $suara;
	private $warnaBulu;
	public $jenis = "Kucing";

	function __construct($nama,$jmlKaki,$suara,$warna_bulu){
		$this -> suara =$suara;
		$this -> warnaBulu = $warna_bulu;
		$this -> nama = $nama;
		$this -> jmlKaki = $jmlKaki;
	}

	function displayMakan(){
		echo "<br>jenis binatang ini adalah Karnifora";
	}

	function displayData(){
		echo $this -> displayBinatang();
		echo "<br>Binatang ini bersuara : ".$this -> suara ;
		echo "<br>berwarna : ".$this -> warnaBulu;
		echo $this -> displayMakan();
	}
}

class Gajah extends binatang implements Herbifora {
	private $suara;
	private $warnaBulu;
	public $jenis = "Gajah";

	function __construct($nama,$jmlKaki,$suara,$warna_bulu){
		$this -> suara =$suara;
		$this -> warnaBulu = $warna_bulu;
		$this -> nama = $nama;
		$this -> jmlKaki = $jmlKaki;
	}

	function displayMakan(){
		echo "<br>jenis binatang ini adalah Herbifora ";
	}

	function displayData(){
		echo $this -> displayBinatang();
		echo "<br>Binatang ini bersuara : ".$this -> suara ;
		echo "<br>berwarna : ".$this -> warnaBulu;
		echo $this -> displayMakan();
	}
}

$Beruang = new Beruang("Lala",4,"rrrrr","coklat");
$kucing = new kucing("Hara",4,"meeoowww","oren");
$Gajah = new Gajah("Guntur",4,"ngguuukkkk","abu-abu");

$kucing -> displayData();
echo "<br><br>";
$kucing -> displayData();
echo "<br><br>";
$kucing -> displayData();

?>
