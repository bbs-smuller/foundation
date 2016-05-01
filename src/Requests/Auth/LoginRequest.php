<?php

namespace Igniweb\Foundation\Requests\Auth;

use Igniweb\Foundation\Requests\Request;

class LoginRequest extends Request
{
	/**
	 * Return validation rules.
	 *
	 * @return array
	 */
	public function rules()
    {
        return [
            'email' => 'required',
            'password' => 'required',
            'remember_me' => 'integer',
        ];
    }
}
