<?php
namespace PenciSoledadElementor\Modules\PenciBigGrid;

use PenciSoledadElementor\Base\Module_Base;

class Module extends Module_Base {

	public function get_name() {
		return 'penci-big-grid';
	}

	public function get_widgets() {
		return array( 'PenciBigGrid' );
	}
}
