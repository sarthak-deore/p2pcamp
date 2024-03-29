<?php

namespace GiveP2P\P2P\QueryBuilder\Traits;

trait Select {

	/**
	 * @var array
	 */
	public $selects = [];

	/**
	 * @param string $table
	 * @return $this
	 */
	public function select( $selects ) {
		$this->selects = array_map(function($select) {
			if( is_array( $select ) ) {
				list( $column, $alias ) = $select;
			} else {
				$column = $alias = $select;
			}
			return [ $column, $alias ];
		}, $selects);
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getSelectSQL() {
        if( empty( $this->selects ) ) return [];
		return [
			'SELECT ' . implode(', ', array_map( function( $select ) {
				list( $tableColumn, $alias ) = $select;
				list( $table, $column ) = explode('.', $tableColumn );
				return "{$this->alias( $table )}.$column AS $alias";
			}, $this->selects) )
		];
	}
}
