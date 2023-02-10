<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('role')->whereRelation('role', 'role_name', 'Client')->get();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();

        $validated = $request->validate([
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'email' => 'required|min:9|max:50|email',
            'user_phone' => 'required|string|max:10|unique',
            'password' => 'required|string|min:6',
        ]);

        $user->role_id = $request->role_id;
        $user->user_firstname = $validated['user_firstname'];
        $user->user_lastname = $validated['user_lastname'];
        $user->user_adresse = $validated['user_adresse'];
        $user->email = $validated['email'];
        $user->user_phone = $validated['user_phone'];
        $user->password = hash::make($request->password);




        $user->save();

        return redirect()->route('menu.admin')->with('succes', 'Le user a été créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $validated = $request->validate([
            'user_firstname' => 'required|string|max:255',
            'user_lastname' => 'required|string|max:255',
            'email' => 'required|min:9|max:50|email',
            'user_phone' => 'required|string|max:10',
            'password' => 'required|string|min:6',
        ]);

        $user->role_id = $request->role_id;
        $user->user_firstname = $validated['user_firstname'];
        $user->user_lastname = $validated['user_lastname'];
        $user->user_adresse = $validated['user_adresse'];
        $user->email = $validated['email'];
        $user->user_phone = $validated['user_phone'];
        $user->password = hash::make($request->password);

        $user->save();


        return redirect()->route('menu.admin')->with('succes', 'Le user a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::destroy($id);
        return redirect()->route('admin.users.index')->with('succes', 'Administrateur supprimé');
    }
}
