<?php

namespace GiveP2P\P2P\QueryBuilder\Traits;

trait Join {

	/**
	 * @var array [[ table, foreignKey, primaryKey ]]
	 */
	protected $joins = [];

	/**
	 * @param string $table
	 * @param string $foreignKey
	 * @param string $primaryKey
	 * @return $this
	 */
	public function join( $table, $foreignKey, $primaryKey, $joinType = '' ) {
		$this->joins[] = [ $this->alias( $table ), $foreignKey, $primaryKey, $joinType ];
		return $this;
	}

	/**
	 * @return string[]
	 */
	public function getJoinSQL() {
		return array_map(function( $join ) {
			list( $table, $foreignKey, $primaryKey, $joinType ) = $join;
			return "LEFT JOIN {$table} ON {$this->from}.$foreignKey = $table.$primaryKey";
		}, $this->joins);
	}
}
