<?php namespace Sanatorium\Bill\Repositories\Bill;

interface BillRepositoryInterface {

	/**
	 * Returns a dataset compatible with data grid.
	 *
	 * @return \Sanatorium\Bill\Models\Bill
	 */
	public function grid();

	/**
	 * Returns all the bill entries.
	 *
	 * @return \Sanatorium\Bill\Models\Bill
	 */
	public function findAll();

	/**
	 * Returns a bill entry by its primary key.
	 *
	 * @param  int  $id
	 * @return \Sanatorium\Bill\Models\Bill
	 */
	public function find($id);

	/**
	 * Determines if the given bill is valid for creation.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Support\MessageBag
	 */
	public function validForCreation(array $data);

	/**
	 * Determines if the given bill is valid for update.
	 *
	 * @param  int  $id
	 * @param  array  $data
	 * @return \Illuminate\Support\MessageBag
	 */
	public function validForUpdate($id, array $data);

	/**
	 * Creates or updates the given bill.
	 *
	 * @param  int  $id
	 * @param  array  $input
	 * @return bool|array
	 */
	public function store($id, array $input);

	/**
	 * Creates a bill entry with the given data.
	 *
	 * @param  array  $data
	 * @return \Sanatorium\Bill\Models\Bill
	 */
	public function create(array $data);

	/**
	 * Updates the bill entry with the given data.
	 *
	 * @param  int  $id
	 * @param  array  $data
	 * @return \Sanatorium\Bill\Models\Bill
	 */
	public function update($id, array $data);

	/**
	 * Deletes the bill entry.
	 *
	 * @param  int  $id
	 * @return bool
	 */
	public function delete($id);

}
