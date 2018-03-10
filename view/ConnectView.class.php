<?php

class ConnectView extends View {

	
	
	public function render() {
		$this->loadTemplate($this->templateNames['content'], $this->args);
	} 
	

}


?>