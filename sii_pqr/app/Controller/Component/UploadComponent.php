<?php 
	/**
	* 
	*/
	class UploadComponent extends Component
	{
		
		public $max_files = 3;
		public function upload($dato = null){
			if (!empty($dato)) {
				if (count($dsto) > $this->max_files) {
					throw new NotFoundException("Error al cargar los archivos, solo acepta maximo 6 archivos");
					
				}
				foreach ($dato as $file) {
					$filename = $file['name'];
					$file_tmp_name = $file['tmp_name'];
					$dir = WWW_ROOT.'img'.DS.'uploads';
					$allowed = array('png','jpg');
					if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
						throw new NotFoundException("Error Processing Request", 1);
						
					}else if(is_uploaded_file($file_tmp_name)){
						move_uploaded_file($file_tmp_name, $dir.DS.String::uuid().'-'.$filename);
					}
				}
			}
		}
	}
?>