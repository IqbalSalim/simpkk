<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;

    protected $listeners = ['render'];

    public $role, $name, $email, $password, $password_confirmation;
    public $user_id, $user_role, $user_name, $user_email;
    public $roles;
    public $paginate = 5, $search;
    protected $queryString = ['search'];


    public function render()
    {

        $this->roles = Role::whereNotIn('name', ['super-admin'])->get();
        // $this->users = User::with('roles')->whereRelation('roles', 'name', 'not like', 'super-admin')->paginate(3);

        // dd($this->users);
        return view('livewire.user-index', [
            'users' => $this->search === null ?
                User::with('roles')->whereRelation('roles', 'name', 'not like', 'super-admin')->paginate($this->paginate) :
                User::where('name', 'like', '%' . $this->search . '%')->with('roles')->whereRelation('roles', 'name', 'not like', 'super-admin')->paginate($this->paginate)

        ]);
    }

    public function resetInput()
    {
        $this->role = null;
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;

        $this->user_id = null;
        $this->user_role = null;
        $this->user_name = null;
        $this->user_email = null;
    }

    public function store()
    {

        $validatedDate = $this->validate(
            [
                'role' => 'required',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,',
                'password' => 'required|confirmed|min:8',
            ]
        );

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user = User::where('email', $this->email)->first();
        $user->assignRole($this->role);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
        session()->flash('message', 'User Added Successfully.');
    }

    public function getUser($id)
    {
        $user = User::where('id', $id)->with('roles')->get();
        $this->user_id = $id;
        $this->user_role = $user[0]->roles[0]->name;
        $this->user_name = $user[0]->name;
        $this->user_email = $user[0]->email;
    }

    public function update()
    {

        $validatedDate = $this->validate(
            [
                'user_role' => 'required',
                'user_name' => 'required|string|max:255',
                'user_email' => 'required|string|email|max:255|unique:users,email,' . $this->user_id,
            ]
        );

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->user_name,
                'email' => $this->user_email,
            ]);
            $role = $user->getRoleNames();
            $user->removeRole($role[0]);
            $user->assignRole($this->user_role);

            $this->resetInput();
            $this->dispatchBrowserEvent('close-modal-edit');
            session()->flash('message', 'User Edited Successfully.');
        }
    }

    public function delete($id)
    {
        if ($id) {
            $user = User::find($id);
            $role = $user->getRoleNames();
            $user->removeRole($role[0]);
            $user->delete();
            session()->flash('message', 'User Deleted Successfully.');
        }
    }
}
