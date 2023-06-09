<?php
class Label{
	private $content;
	public function __construct($content){
		$this->content;
	}
	public function render(){
		$out = "<label>'.$content.'</label>";
		return $out;
	}
}
?>
