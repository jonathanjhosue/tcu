<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funciones
 *
 * @author jonathan
 */
class Funciones {
    //put your code here
    static public function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  if (function_exists('iconv'))
  {
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  }

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return '';
  }
 
  return $text;
}

static public function crearThumbnail($file = null, $fileMode = 0666, $create = true, $dirMode = 0777)
{
		if (is_null($file))
		{
			$file = $this->generateFilename();
		}

		if ($file[0] != '/' && $file[0] != '\\' && !(strlen($file) > 3 && ctype_alpha($file[0]) && $file[1] == ':' && ($file[2] == '\\' || $file[2] == '/')))
		{
			if (is_null($this->path))
			{
				throw new RuntimeException('Se debe especificar una "ruta" cuando se da ek binvre de archivo');
			}

			$smallFile = $this->path.DIRECTORY_SEPARATOR.'s_'.$file;
			$file = $this->path.DIRECTORY_SEPARATOR.$file;
		}

		// get our directory path from the destination filename
		$directory = dirname($file);
		if (!is_readable($directory))
		{
			if ($create && !mkdir($directory, $dirMode, true))
			{
				// failed to create the directory
				throw new Exception(sprintf('Fallo al crear directorio "%s".', $directory));
			}

			// chmod the directory since it doesn't seem to work on recursive paths
			chmod($directory, $dirMode);
		}
		if (!is_dir($directory))
		{
			// the directory path exists but it's not a directory
			throw new Exception(sprintf('La ruta "%s" existe, pero no es un directorio.', $directory));
		}
		if (!is_writable($directory))
		{
			// the directory isn't writable
			throw new Exception(sprintf('La ruta "%s" para subir no es escribible.', $directory));
		}

		// copy the temp file to the destination file
        /*
		$thumbnail = new sfThumbnail(120, 120, true, true, 85, 'sfGDAdapterCuttingOff');
		$thumbnail->loadFile($this->getTempName());
		$thumbnail->save($smallFile, 'image/jpeg');
         */

		$thumbnail = new sfThumbnail(120, 120, true, true, 85, 'sfGDAdapter');
		$thumbnail->loadFile($this->getTempName());
		$thumbnail->save($file, 'image/jpeg');

		// chmod our file
		chmod($smallFile, $fileMode);
		chmod($file, $fileMode);

		$this->savedName = $file;
		return is_null($this->path) ? $file : str_replace($this->path.DIRECTORY_SEPARATOR, '', $file);
	}

}
?>
