<?php

namespace GiveP2P\P2P\QueryBuilder\Traits;

trait OrderBy {

	/**
	 * @var string
	 */
	public $column;

	/**
	 * @var string
	 */
	public $direction;

	/**
	 * @param string $tableColumn
	 * @param string $direction
	 *
	 * @return $this
	 */
	public function orderBy( $tableColumn, $direction ) {
		list( $table, $column ) = explode('.', $tableColumn );
		$this->column = "{$this->alias( $table )}.$column";
		$this->direction = $direction;
		return $this;
	}

	public function getOrderBySQL() {
		return $this->column && $this->direction
			? [ "ORDER BY $this->column $this->direction" ]
			: [];
	}
}
