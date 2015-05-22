<?php namespace doelivros\Http\Requests;

use doelivros\Http\Requests\Request;

class GeneroLivroRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'genero' => 'required|min:3'
		];
	}

}
