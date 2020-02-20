<?php

namespace App\Http\Controllers;
use Auth;  
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserAccessController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
       $User = User::all();
  
        return view('user_access.index',compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_access.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'email'=> 'required',
        'password' => 'required',
        'role' => 'required',
      ]);

      $User = new User([
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'password'=>  bcrypt($request->get('password')),
        'role'=> $request->get('role'),
      ]);

       $User->save();

       $UserRole = new UserRole([
        'modules' =>'Product Management',
        'user_id'=> $User->id,
      ]);
       $UserRole->save();

       $UserRole1 = new UserRole([
        'modules' =>'UAC',
        'user_id'=> $User->id,
      ]);
       $UserRole1->save();

       $UserRole2 = new UserRole([
        'modules' =>'Report',
        'user_id'=> $User->id,
      ]);
       $UserRole2->save();

      toastr()->success('User has been added successfully!');
      return redirect('/user_access');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $User = User::where('id', $id)->first();
        return view('user_access.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::find($id);

        return view('user_access.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = $request->input('user_id');
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
       $role = $request->input('role');

       User::where('id', $user_id)->update([
        'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => $role,
       ]);

       toastr()->success('User has been updated successfully!');
      return redirect('/user_access');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $User = User::find($id);
     $User->delete();

      toastr()->success('User has been deleted successfully!');
      return redirect('/user_access');
    }

     public function right($id)
    {
        $User = User::find($id);
        $UserRole = UserRole::where('user_id', $id)->where('modules', 'Product Management') ->first();
        $UserRole1 = UserRole::where('user_id', $id)->where('modules', 'UAC') ->first();
        $UserRole2 = UserRole::where('user_id', $id)->where('modules', 'Report') ->first();

        return view('user_access.right', compact('User', 'UserRole', 'UserRole1', 'UserRole2'));
    }

    public function rightfunc(Request $request)
    {   
        $id = $request->get('userID');
        $UserRole = UserRole::where('user_id', $id)->where('modules', 'Product Management')->first();
        $UserRole1 = UserRole::where('user_id', $id)->where('modules', 'UAC')->first();
        $UserRole2 = UserRole::where('user_id', $id)->where('modules', 'Report') ->first();


        if ($UserRole) {
           UserRole::where('user_id', $id)->where('modules', 'Product Management')->update([
        'edit'=> $request->get('productEdit'),
        'view'=>  $request->get('productView'),
       ]);
        }

        if ($UserRole1) {
           UserRole::where('user_id', $id)->where('modules', 'UAC')->update([
        'edit'=> $request->get('userEdit'),
        'view'=>  $request->get('userView'),
       ]);
        }

        if ($UserRole2) {
           UserRole::where('user_id', $id)->where('modules', 'Report')->update([
        // 'edit'=> $request->get('reportEdit'),
        'view'=>  $request->get('reportView'),
       ]);
        }
       
       toastr()->success('User Right has been updated successfully!');
      return redirect('/user_access');
    }
}
