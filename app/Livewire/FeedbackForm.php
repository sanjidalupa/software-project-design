<?php

namespace App\Livewire;

use App\Models\Form;
use App\Models\Question;
use Livewire\Component;
use Livewire\Attributes\On;

class FeedbackForm extends Component
{
    public ?Question $currentQuestion;

    public Form $form;

    public int $feedbackId;

    public function render()
    {
        return view('livewire.feedback-form');
    }

    public function mount($form)
    {
        $this->form = $form;
        $this->currentQuestion = $this->form->questions->first();
    }

    #[On('questionAnswered')] 
    public function loadNextQuestion($feedbackId)
    {
        $this->feedbackId = $feedbackId;
        $this->currentQuestion = $this->form->questions->where('id', '>', $this->currentQuestion->id)->first();
    }
}
