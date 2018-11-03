<?php

class View {
	public function load($file, $data = null) {
		include("views/header.tpl.php");
		include("views/$file.tpl.php");
		include("views/footer.tpl.php");
	}
}
