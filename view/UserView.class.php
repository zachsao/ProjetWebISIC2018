<?php

class UserView extends View {

	
	
	public function render() {
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['connectedTop'], $this->args); 
		//$this->loadTemplate($this->templateNames['menu'], $this->args);
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
	} 
	

}


?>