<?php

namespace GiveP2P\P2P\QueryBuilder\Traits;

trait From {

	/**
	 * @var string
	 */
	public $from;

	/**
	 * @param string $table
	 * @return $this
	 */
	public function from( $table ) {
		$this->from = $this->alias( $table );
		return $this;
	}

	public function getFromSQL() {
        if( ! $this->from ) return [];
		return [ "FROM {$this->from}" ];
	}
}
