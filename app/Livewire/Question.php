<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question as QuestionModel;
use App\Models\Form;

class Question extends Component
{
    public QuestionModel $question;
    public ?Form $form = null;

    public function mount(QuestionModel $question, $form)
    {
        $this->question = $question;
        $this->form = $form;
    }

    public function render()
    {
        return view('livewire.question');
    }
}
