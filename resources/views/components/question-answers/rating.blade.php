<div>
    <div class="single-answer p-4 border rounded-3 mb-3">
        <div class="single-answer__question">
            {{ $question->title }}
        </div>
        <div class="single-answer__answer text-center">
            <h3>{{ $answerValue }}</h3>
            <div class="single-answer__answer-content answer-rating">
                @php
                    $low = (int) $question->metas->where('key', 'slider_min_value')->first()->value;
                    $high = (int) $question->metas->where('key', 'slider_max_value')->first()->value;
                    $labelLeft = $question->metas->where('key', 'slider_min_label')->first()->value;
                    $labelRight = $question->metas->where('key', 'slider_max_label')->first()->value;
                @endphp
                @foreach (range($low, $high) as $value)
                    @if ($value <= $answerValue) 
                        <span @class(['fs-4', 'single-answer__rating', 'rating-selected' => $value <= $answerValue])><i class="fa-solid fa-star"></i></span>
                    @else 
                    <span @class(['fs-4', 'single-answer__rating', 'rating-selected' => $value <= $answerValue])><i class="fa-regular fa-star"></i></span>
                    @endif
                @endforeach
            </div>
            <div class="single-answer__answer-meta d-flex justify-content-between fw-medium">
                <div class="single-answer__answer-meta-left ml-5">
                    {{ $labelLeft }}
                </div>
                <div class="single-answer__answer-meta-right ">
                    {{ $labelRight }}
                </div>
            </div>
        </div>
    </div>
</div>

@push('customCss')
<style>
    .answer-rating .single-answer__rating {
        color: #f8c102;
    }
</style>

@endpush