<?php

class CreationFormView extends View {

	
	
	public function render() {
		$this->loadTemplate($this->templateNames['content'], $this->args);
	} 
	

}


?>