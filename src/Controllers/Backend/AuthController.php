<?php

namespace Igniweb\Foundation\Controllers\Backend;

class AuthController extends BaseController
{
	/**
	 * Display backend login form.
	 *
	 * @return \Illuminate\Contracts\View\View
	 */
	public function login()
	{
		return view('foundation::backend.auth.login');
	}
}
