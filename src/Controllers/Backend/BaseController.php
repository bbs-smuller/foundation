<?php

namespace Igniweb\Foundation\Controllers\Backend;

use Auth;
use Igniweb\Foundation\Controllers\BaseController as FoundationBaseController;

class BaseController extends FoundationBaseController
{
	/**
	 * Backend authenticated user.
	 *
	 * @var \Illuminate\Contracts\Auth\Authenticatable
	 */
	protected $authMember;

	/**
	 * Backend base controller constructor.
	 *
	 * @return void
	 */
    public function __construct()
    {
    	parent::__construct();

    	$this->authMember = Auth::user();
    }
}
