<?php
declare( strict_types=1 );


namespace SOLI_Fake_Users;

class User_Collection implements \Iterator, \Countable {

	private array $users = [];

	public function add( \WP_User $user ) {
		$this->users[] = $user;
	}

	/**
	 * @inheritDoc
	 */
	public function current(): \WP_User {
		return current( $this->users );
	}

	/**
	 * @inheritDoc
	 */
	public function next(): void {
		next( $this->users );
	}

	/**
	 * @inheritDoc
	 */
	public function key(): int {
		return key( $this->users );
	}

	/**
	 * @inheritDoc
	 */
	public function valid(): bool {
		return key( $this->users ) !== null;
	}

	/**
	 * @inheritDoc
	 */
	public function rewind(): void {
		reset( $this->users );
	}

	public function count(): int {
		return count( $this->users );
	}
}