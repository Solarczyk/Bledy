<?php
class FileSystem
{
	public $dmsg = "";
	public function get( $dir, $dir2, $file){
		$out = false;
		if( is_dir($dir) && is_dir($dir2) )
		{
			echo 'Katalogi istnieją: '.$dir2.'<br/>';
			if( file_exists($dir.'/'.$file) ){
				$this->dmsg = $dir.'/'.$file;
				$out = true;
			} elseif( file_exists($dir2.'/'.$file) ){
				$this->dmsg = $dir2.'/'.$file;
				$out = true;
			} else
				$this->dmsg = $dir.'/'.$file;
		} else
			$this->dmsg = $dir;
		return $out;
	}
}
	$fs = new FileSystem();

	# jedno z wielu wywołań wybranego pliku, który może się znajdować w katalogu A lub A/B
	$fleLded = $fs->get( './media', './media/assets',  'dokument.html' );
	echo ($fleLded) ? '#1 Plik istnieje' : '#1 Brak pliku';
	echo ': '.$fs->dmsg.'<br/>';
?>
