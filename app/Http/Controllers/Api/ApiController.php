<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Models\Post;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function __construct()
    {

    }

    public function swagger(Request $request)
    {
        return view('swagger');
    }

    /* Auth Routes start */

    public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:4',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'])) {
            $user = Auth::user();
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token, 'message' => 'Welcome '.$user->name], 200);
        }
        return response()->json(['message' => 'Incorrect username or password. Please try again.'], 401);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'string|required|min:4',
            'email' => 'string|required|unique:users,email',
            'password' => 'required|min:4|confirmed',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        
        if ($user = User::create($validator->validated())) {            
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token, 'message' => 'Welcome ' . $user->name], 200);
        }
        return response()->json(['message' => 'Something went wrong! Please try again.'], 401);
    }

    /* Auth Routes end */
    

    /* Banner Methods start */   

    public function allBanner(Request $request)
    {
        $banners = Banner::where('status', 'active')->orderBy('id', 'DESC');
        if($request->has('limit')) {
            $banners = $banners->limit($request->get('limit'));
        }
        return $banners->get();
    }

    /* Banner Methods end */

    /* Category Methods start */

    public function allCategory(Request $request)
    {
        $categories = Category::when($request->has('withChildCat'), function ($category) {
            $category->where('is_parent', 1)->with('child_cat');
        })->where('status', 'active');
        if ($request->has('limit')) {
            $categories = $categories->limit($request->get('limit'));
        }
        return $categories->get();
    }

    public function parentCategory(Request $request)
    {
        $categories = Category::where('status', 'active')->where('is_parent', 1);
        return $categories->get();
    }
    
    /* Category Methods end */   
    
    /* Product Methods start */   

    public function allProduct(Request $request)
    {        
        $products = Product::where('status', 'active')->orderBy('id', 'DESC');
        if ($request->has('condition')) {
            $products = $products->where('condition', $request->get('condition'));
        }
        if($request->has('limit')) {
            $products = $products->limit($request->get('limit'));
        }
        return $products->get();
    }

    public function featuredProduct(Request $request)
    {
        $products = Product::with('cat_info:id,title')->where('status', 'active')->where('is_featured', 1)->orderBy('price', 'DESC');
        if ($request->has('limit')) {
            $products = $products->limit($request->get('limit'));
        }
        return $products->get();
    }

    /* Product Methods end */

    /* Post (Blog) Methods start */

    public function allPost(Request $request)
    {
        $posts = Post::where('status', 'active')->orderBy('id', 'DESC');       
        if ($request->has('limit')) {
            $posts = $posts->limit($request->get('limit'));
        }
        return $posts->get();
    }

    /* Post (Blog) Methods end */    

    /* Settings  Methods start */

    public function settings()
    {
        return Settings::first();
    }
    

    /* Settings  Methods end */
}
