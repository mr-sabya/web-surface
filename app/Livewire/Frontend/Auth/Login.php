<?php

namespace App\Livewire\Frontend\Auth;

use Livewire\Component;

class Login extends Component
{

    public $email, $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = auth()->user();

            session()->flash('message', 'Login successful');

            if ($user->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('home');
        }

        session()->flash('error', 'Invalid credentials');
    }


    public function updated($propertyName)
    {
        $this->resetErrorBag($propertyName);
    }


    public function render()
    {
        return view('livewire.frontend.auth.login');
    }
}
