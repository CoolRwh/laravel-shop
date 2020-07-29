<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressRequest;
use App\Models\UserAddress;
use App\User;
use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    //

    public function index(Request $request)
    {

        return view('user_addresses.index', ['addresses' => $request->user()->addresses,]);
    }

    /**
     * 添加收获地址
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $address = new UserAddress();
        return view('user_addresses.create_and_edit', compact('address'));
    }

    /**
     * 添加方法
     * @param UserAddressRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'province',
            'city',
            'district',
            'address',
            'zip',
            'contact_name',
            'contact_phone',
        ]));

        return redirect()->route('user_addresses.index');
    }
}
