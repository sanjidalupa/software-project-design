<div>
    <div class="feedback-card animate__animated animate__backInRight mt-5">
            <div class="form-group text-center" style="width: 100%">
                <label for="" class="feedback-question__name">
                    <p>{{ $question->title }}</p>
                </label>
                <div class="row">
                    <div class="col-12 feedback-form">
                        @foreach (range(0,10) as $value)
                        <button wire:click.prevent="submitAnswer({{ $value }})" @class(['btn', 'btn-secondary', "nps-{$value}", 'nps-selected' => 1 === $value])>{{ $value }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
    </div>
</div>
