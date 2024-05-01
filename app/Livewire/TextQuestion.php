<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Feedback;

class TextQuestion extends Component
{
    public Question $question;

    public ?int $feedbackId = null;

    public string $answer = '';

    public function render()
    {
        return view('livewire.text-question');
    }

    public function mount($question, $feedbackId = null)
    {
        $this->question = $question;
        $this->feedbackId = $feedbackId;
    }

    public function submitAnswer()
    {
        if (! $this->feedbackId) {
            $feedback = Feedback::create([
                'user_id' => auth()->id(),
                'form_id' => $this->question->form_id,
                'started_at' => now(),
            ]);
            $this->feedbackId = $feedback->id;
        } else {
            $feedback = Feedback::find($this->feedbackId);
        }

        $feedback->answers()->create([
            'question_id' => $this->question->id,
            'answer' => $this->answer,
        ]);

        // $this->dispatch('feedbackCreated', $feedback->id);
        $this->dispatch('questionAnswered', $feedback->id);
    }
}
