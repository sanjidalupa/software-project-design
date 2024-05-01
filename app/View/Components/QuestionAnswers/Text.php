<?php

namespace App\View\Components\QuestionAnswers;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Question;
use App\Models\QuestionAnswer;

class Text extends Component
{
    public Question $question;
    
    public QuestionAnswer $answer;

    public string $answerValue;

    /**
     * Create a new component instance.
     */
    public function __construct(QuestionAnswer $answer)
    {
        $this->question = $answer->question;
        $this->answer = $answer;
        $this->answerValue = $answer->answer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.question-answers.text');
    }
}
