<?php

class AdminView extends View {

	
	
	public function render() {
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['connectedTop'], $this->args); 
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
	} 
	

}


?>