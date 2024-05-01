<?php

namespace App\Livewire;

use App\Models\Form;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class CreateQuestion extends Component
{
    public int $step = 1;

    public string $questionType;

    public string $question;

    public ?string $description = null;

    public bool $required = false;

    public bool $isActive = true;

    public Form $form;

    public array $metas = [
        'slider_min_value' => 1,
        'slider_max_value' => 10,
        'slider_min_label' => 'Bad 😕',
        'slider_max_label' => 'Awesome 😎',
        'toggle_left_label' => 'No',
        'toggle_right_label' => 'Yes',
    ];

    public function render()
    {
        return view('livewire.create-question');
    }

    public function mount(Form $form, $question = null)
    {
        $this->form = $form;

        if ($question) {
            $this->question = $question->title ?? '';
            $this->description = $question->description;
            $this->required = $question->required;
            $this->isActive = $question->is_active;
            $this->questionType = $question->type ?? 'text';
        }
    }

    public function setQuestionType(string $type)
    {
        $this->questionType = $type;
        $this->step++;
    }

    public function goBack()
    {
        $this->step--;
    }

    public function createQuestion()
    {
        try {
            DB::beginTransaction();
            $question = Question::create([
                'title' => $this->question,
                'description' => $this->description,
                'required' => $this->required,
                'is_active' => $this->isActive,
                'type' => $this->questionType,
                'user_id' => auth()->id(),
                'form_id' => $this->form->id,
            ]);

            collect($this->metas)->each(function ($value, $key) use ($question) {
                $question->metas()->create([
                    'key' => $key,
                    'value' => $value,
                ]);
            });
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            
        }


        return redirect()->route('forms.show', $this->form->id);
    }
}
