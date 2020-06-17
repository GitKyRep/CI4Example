<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $guest = [
		'name'         => 'required',
		'email'       => 'required|valid_email',
		'phone'       => 'required|numeric',
		'address'       => 'required',
	];

	public $guest_errors = [
		'name' => [
			'required'  => 'Nama wajib diisi.'
		],
		'email' => [
			'required'  => 'Email wajib diisi.',
			'valid_email' => 'Format email tidak sesuai',
		],
		'phone' => [
			'required'  => 'No Telepon wajib diisi.',
			'numeric'  => 'No Telepon harus angka.',
		],
		'address' => [
			'required'  => 'Alamat wajib diisi.'
		],
	];
}
