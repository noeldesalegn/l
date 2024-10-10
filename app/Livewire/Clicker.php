<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component
{
    //public data

    #[Rule('required|min:2|max:5')]
    public $name ='';

    #[Rule('required|email|unique:users')]
    public $email ='';

    #[Rule('required|min:5')]
    public $password ='';

    public function CreateNewUser(){

        // $this->validate([
        //     'name' => 'required|min:2|max:5',
        //     'email' => 'required|email|unique:users',
        //     'password'=> 'required|min:5'
        // ]); oooor you can do it using #[Rule] attribute 👆
        $this->validate();
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        $this->reset(['name','email','password']);
        request()->session()->flash('success','User Created Successully!');
    }

    public function render()
    {

        $users=User::all();
        return view('livewire.clicker',[
            'users' => $users
        ]);
    }
}
