<div>
    @if($currentQuestion && $currentQuestion->type === 'nps') {
        @livewire('nps-question', ['question' => $currentQuestion, 'feedbackId' => $feedbackId])
    } 
    @elseif($currentQuestion && $currentQuestion->type === 'slider') {
        @livewire('rating-question', ['question' => $currentQuestion, 'feedbackId' => $feedbackId])
    }
    @elseif($currentQuestion && $currentQuestion->type === 'smiley') {
        @livewire('smiley-question', ['question' => $currentQuestion])
    }
    @elseif($currentQuestion && $currentQuestion->type === 'text') {
        @livewire('text-question', ['question' => $currentQuestion, 'feedbackId' => $feedbackId])
    }
    @elseif($currentQuestion && $currentQuestion->type === 'toggle') {
        @livewire('toggle-question', ['question' => $currentQuestion])
    }
    @else 
        @livewire('response-completed', ['feedbackId' => $feedbackId])
    @endif
</div>
