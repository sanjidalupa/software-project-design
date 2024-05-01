<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\FeedbackCompleted;
use App\Models\Feedback;

class ProcessCompletedFeedback
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(FeedbackCompleted $event): void
    {
        logger('feedback completed: ' . $event->feedbackId);
        $feedback = Feedback::find($event->feedbackId);

        $total = 0;
        $count = 0;

        foreach ($feedback->answers as $answer) {
            if (!in_array($answer->question->type, ['nps', 'slider'])) {
                continue;
            }

            $value = (int) $answer->answer;
            $maxValuePossible = 10;

            if ($answer->question->type === 'slider') {
                $maxMeta = $answer->question->metas->where('key', 'slider_max_value')->first();

                if (!$maxMeta) {
                    continue;
                }

                $maxValuePossible = (int) $maxMeta->value;
            }

            // Calculate the percentage
            $value = ($value * 100) / $maxValuePossible;

            // $answer->satisfaction = $value;
            // $answer->save();
            
            $total += $value;
            $count++;
        }

        if ($count === 0) {
            return;
        }

        $satisfaction = (int) round($total / $count);

        if ($satisfaction > 100) {
            $satisfaction = 100;
        }

        $feedback->satisfaction_ratio = $satisfaction;
        $feedback->save();
    }
}
