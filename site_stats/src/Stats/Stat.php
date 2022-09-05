<?php
declare( strict_types=1 );


namespace Stats\Stats;

class Stat {

	private string $name;

	private string $stat_key;

	private int $count;

	/**
	 * @return string
	 */
	public function get_name(): string {
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return Stat
	 */
	public function set_name( string $name ): Stat {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return string
	 */
	public function get_stat_key(): string {
		return $this->stat_key;
	}

	/**
	 * @param string $stat_key
	 *
	 * @return Stat
	 */
	public function set_stat_key( string $stat_key ): Stat {
		$this->stat_key = $stat_key;

		return $this;
	}

	/**
	 * @return int
	 */
	public function get_count(): int {
		return $this->count;
	}

	/**
	 * @param int $count
	 *
	 * @return Stat
	 */
	public function set_count( int $count ): Stat {
		$this->count = $count;

		return $this;
	}



}