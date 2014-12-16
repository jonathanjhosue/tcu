<?php

class ArticuloPeer extends BaseArticuloPeer
{
    	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Articulo
	 */
	public static function obtenerPorNombre($nombre, PropelPDO $con = null)
	{

		if ($con === null) {
			$con = Propel::getConnection(ArticuloPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(ArticuloPeer::DATABASE_NAME);
		$criteria->add(ArticuloPeer::NOMBRE, $nombre);

		$v = ArticuloPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}
}
