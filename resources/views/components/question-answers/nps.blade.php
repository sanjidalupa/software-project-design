<div>
    <div class="single-answer p-4 border rounded-3 mb-3">
        <div class="single-answer__question fw-bold">
            {{ $question->title }}
        </div>
        <div class="single-answer__answer text-center">
            <h3>{{ $answerValue }}</h3>
            <div class="single-answer__answer-content">
                @foreach (range(0, 10) as $value)
                    <button @class(['btn', 'btn-secondary', "nps-{$value}", 'nps-selected' => $answerValue === $value])>{{ $value }}</button>
                @endforeach
            </div>
            <div class="single-answer__answer-meta d-flex justify-content-between fw-medium">
                <div class="single-answer__answer-meta-left ml-5">
                    Very unlikely
                </div>
                <div class="single-answer__answer-meta-right ">
                    Very likely
                </div>
            </div>
        </div>
    </div>
</div>