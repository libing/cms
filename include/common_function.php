<?php
function template($file){
	return include_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'template_html'.DIRECTORY_SEPARATOR.$file;
}