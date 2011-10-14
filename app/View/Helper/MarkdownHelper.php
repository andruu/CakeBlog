<?php
App::import('Vendor', 'markdown');
class MarkdownHelper extends AppHelper {
	public function parse ($string) {
		return $this->output(Markdown($string));
	}
}