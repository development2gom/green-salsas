<?php
namespace app\models;
class Files{

    public static function validarDirectorio($path){
        if (!file_exists($path)) {
			mkdir($path, 0777);
		}
    }

    public static function borrarArchivo($path){
        unlink($path);
    }

    /**
	 * Metodo para cambiar el tamaño de una imagen
	 *
	 * @param unknown $file        	
	 * @param unknown $ancho        	
	 * @param unknown $alto        	
	 * @param unknown $nuevo_ancho        	
	 * @param unknown $nuevo_alto        	
	 */
	public function rezisePicture($file, $ancho, $alto, $redimencionar, $nombreNuevo, $extension)
	{
		// Factor para el redimensionamiento
		$factor = $this->calcularFactor($ancho, $alto, $redimencionar);

		$nuevo_ancho = $ancho * $factor;
		$nuevo_alto = $alto * $factor;

		

		// Cargar
		$thumb = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);

		
		
		if($extension==="jpg" || $extension==="jpeg"){
			$origen = imagecreatefromjpeg($file);


			$exif = \exif_read_data($file);
			if(isset($exif["Orientation"])){
				$orientation = $exif['Orientation'];
				switch($orientation) {
					case 3:
						$origen = imagerotate($origen, 180, 0);
						break;
					case 6:
						$origen = imagerotate($origen, -90, 0);
						break;
					case 8:
						$origen = imagerotate($origen, 90, 0);
						break;
					default:
						
					break;
				}
				// Cargar
				$thumb = imagecreatetruecolor($nuevo_alto, $nuevo_ancho);
				// Cambiar el tamaño
				imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_alto, $nuevo_ancho, $alto, $ancho);

			}else{
				// Cambiar el tamaño
				imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
			}

		
		imagejpeg($thumb, $nombreNuevo);
		}else{
			$origen = imagecreatefrompng($file);

				// Cambiar el tamaño
				imagecopyresampled($thumb, $origen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho, $alto);
			
		
			
			imagepng($thumb, $nombreNuevo);
		}

		

		
	}

	public function getOrientation($file, $new){
		$exif = \exif_read_data($file);
		if(isset($exif["Orientation"])){
			$orientation = $exif['Orientation'];
			switch($orientation) {
				case 3:
					$image_p = imagerotate($origen, 180, 0);
					break;
				case 6:
					$image_p = imagerotate($origen, -90, 0);
					break;
				case 8:
					$image_p = imagerotate($origen, 90, 0);
					break;
			}

			return $image_p;
		}	
	}
    
    /**
	 * Calcula el factor
	 *
	 * @param unknown $ancho        	
	 * @param unknown $alto        	
	 * @param unknown $redimension        	
	 */
	private function calcularFactor($ancho, $alto, $redimension)
	{
		if ($ancho >= $alto) {
			$factor = $redimension / $ancho;
		} else if ($ancho <= $alto) {
			$factor = $redimension / $alto;
		}

		return $factor;
	}

}