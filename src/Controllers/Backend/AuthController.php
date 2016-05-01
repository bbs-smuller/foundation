<?php

namespace Igniweb\Foundation\Controllers\Backend;

use Auth;
use Igniweb\Foundation\Requests\Auth\LoginRequest;

class AuthController extends BaseController
{
	/**
	 * Auth base controller constructor.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->middleware('guest', ['except' => 'logout']);
	}

	/**
	 * Display backend login form.
	 *
	 * @return \Illuminate\Contracts\View\View
	 */
	public function login()
	{
		return view('foundation::backend.auth.login');
	}

	/**
	 * Attempt to log user in.
	 *
	 * @param \Igniweb\Foundation\Requests\Auth\LoginRequest $request
	 * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
	 */
	public function attempt(LoginRequest $request)
	{
		$credentials = $request->only('email', 'password', 'remember_me', 'redirect');
		if (Auth::attempt($credentials)) {
			$this->authMember = Auth::user();
		}

		$jsonResponse = $request->ajax() or $request->wantsJson();
		if (! empty($this->authMember)) {
			return $jsonResponse ? response()->json($this->authMember, 200) : redirect($credentials['redirect'] ?: '/');
		} else {
			return $jsonResponse ? response()->json('Bad credentials', 403) : redirect()->back()->withInput()->withErrors();
		}
	}

	/**
	 * Log backend user out and redirect to home.
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function logout()
	{
		Auth::logout();

		return redirect('/');
	}
}
