<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clicker extends Component
{
    //public data

    use WithPagination;

    #[Rule('required|min:2|max:5')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required|min:5')]
    public $password = '';

    public function CreateNewUser(){

        // $this->validate([
        //     'name' => 'required|min:2|max:5',
        //     'email' => 'required|email|unique:users',
        //     'password'=> 'required|min:5'
        // ]); oooor you can do it using #[Rule] attribute 👆
       $validated = $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($validated['password']),
        ]);
        $this->reset(['name','email','password']);
        request()->session()->flash('success','User Created Successully!');
    }

    public function render()
    {

        $users=User::paginate(7);

        return view('livewire.clicker',[
            'users' => $users
        ]);
    }
}
