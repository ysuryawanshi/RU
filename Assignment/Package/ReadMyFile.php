<?php
namespace FileReader;
class ReadMyFile {
	public function ReadFileContent( $file = '' ){
		return 'no content found';
	}
	public function ReadHtmlFileContent( $filePath = '' ) {

		if( $filePath != NULL ) {
			return file_get_contents( $filePath );
		}

	}

}

?>