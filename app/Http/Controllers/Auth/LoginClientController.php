<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Hash;

class LoginClientController extends Controller
{
    private $v;
    protected $page = 'home';
    protected $fields = [
        'id',
        'name',
        'category',
        'price',
        'quantity',
        'sale',
        'description',
        'image'
    ];

    function __construct()
    {
        $this->v = [];
    }
    public function getLogin()
    {
        $test = new Product();
        $this->v['param'] = [];
        $this->v['list']['item'] = $test->loadListProduct($this->v['param']);
        $this->v['list']['fields'] = $this->fields;
        $objCategory = new Category;
        $this->v['category'] = $objCategory->loadList();
        $objsale = new Sale;
        $this->v['sale'] = $objsale->loadList();
        return view('client/login', $this->v);
    }

    public function postLogin(Request $request )
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'permission'
        ];
        $messages = [
            'email.required' => 'nhập email',
            'email.email' =>  'nhập sai email',
            'password.required' => 'nhap password',
        ];
        $validater = Validator::make($request->all(), $rules, $messages);
        if ($validater->fails()) {
            return redirect('LoginClient')->withErrors($validater);
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            $checkLogin = Auth::attempt(['email' => $email, 'password' => $password]);
            if ($checkLogin == true) {
                return redirect()->route('my-account');
            } else {
                Session::flash('error', 'sai email va mat khau');
                return redirect('LoginClient');
            }
        }
    }

     public function loginapi(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 500,
                    'message' => 'Unauthorized'
                ]);
            }

            $user = User::where('email', $request->email)->first();

            if (!Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Error in Login');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        } catch (\Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $error,
            ]);
        }
    }
}
