<?php

namespace App\Livewire;

use App\Events\FeedbackCompleted;
use App\Models\Feedback;
use Livewire\Component;

class ResponseCompleted extends Component
{
    public function mount(?int $feedbackId)
    {
        if ($feedbackId) {
            $this->completeFeedback($feedbackId);
        }
    }
    
    private function completeFeedback(int $feedbackId)
    {
        Feedback::where('id', $feedbackId)->update(['completed_at' => now()]);

        event(new FeedbackCompleted($feedbackId));
    }

    public function render()
    {
        return view('livewire.response-completed');
    }
}
