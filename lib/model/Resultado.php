<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resultado
 *
 * @author jonathan
 */
class Resultado extends BaseObject{
    //put your code here

  const PEER = 'ResultadoPeer';

    /**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ArchivoPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the nombre field.
	 * @var        string
	 */
	protected $nombre;

	/**
	 * The value for the descripcion field.
	 * @var        string
	 */
	protected $descripcion;

	/**
	 * The value for the tipo_id field.
	 * @var        int
	 */
	protected $tipo;



    /**
	 * Initializes internal state of BaseArchivo object.
	 * @see        applyDefaults()
	 */

    public function __construct($obj,$tipoObj)
    {
        parent::__construct();
        $this->id =$obj->getId();
        $this->nombre =$obj->getNombre();
        $this->descripcion =$obj->getDescripcion();
        $this->tipo =$tipoObj;
    }

    	/**
	 * Get the [id] column value.
	 *
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [nombre] column value.
	 *
	 * @return     string
	 */
	public function getNombre()
	{
		return $this->nombre;
	}

	/**
	 * Get the [descripcion] column value.
	 *
	 * @return     string
	 */
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	/**
	 * Get the [tipo_id] column value.
	 *
	 * @return     int
	 */
	public function getTipo()
	{
		return $this->tipo_id;
	}



    /**
	 * Set the value of [id] column.
	 *
	 * @param      int $v new value
	 * @return     Archivo The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ArchivoPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [nombre] column.
	 *
	 * @param      string $v new value
	 * @return     Archivo The current object (for fluent API support)
	 */
	public function setNombre($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nombre !== $v) {
			$this->nombre = $v;
		}

		return $this;
	} // setNombre()

	/**
	 * Set the value of [descripcion] column.
	 *
	 * @param      string $v new value
	 * @return     Archivo The current object (for fluent API support)
	 */
	public function setDescripcion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->descripcion !== $v) {
			$this->descripcion = $v;
		}

		return $this;
	} // setDescripcion()


	/**
	 * Set the value of [tipo_id] column.
	 *
	 * @param      int $v new value
	 * @return     Archivo The current object (for fluent API support)
	 */
	public function setTipoId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tipo_id !== $v) {
			$this->tipo_id = $v;
		}
		
		return $this;
	} // setTipoId()



    public function __toString()
      {
        return $this->getNombre();
      }


}
?>
