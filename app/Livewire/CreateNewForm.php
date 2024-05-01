<?php

namespace App\Livewire;

use App\Models\Form;
use Livewire\Component;

class CreateNewForm extends Component
{
    public string $name;

    protected $rules = [
        'name' => 'required|string|max:255',
    ];

    public function render()
    {
        return view('livewire.create-new-form');
    }

    public function submit()
    {
        $this->validate();

        $form = Form::create([
            'name' => $this->name,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('dashboard');
    }
}
