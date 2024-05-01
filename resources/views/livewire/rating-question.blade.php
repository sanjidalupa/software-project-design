<div>
    <div class="feedback-card">
        <div class="form-group text-center" style="width: 100%">
            <label for="" class="feedback-question__name">
                <p>{{ $question->title }}</p>
            </label>
            <div class="row">
                <div class="col-12">
                    @php
                        $low = (int) $question->metas->where('key', 'slider_min_value')->first()->value;
                        $high = (int) $question->metas->where('key', 'slider_max_value')->first()->value;
                        $labelLeft = $question->metas->where('key', 'slider_min_label')->first()->value;
                        $labelRight = $question->metas->where('key', 'slider_max_label')->first()->value;
                    @endphp
                    @foreach (range($low,$high) as $value)
                    <span class="rating-star" wire:click.prevent="submitAnswer({{ $value }})"><i class="fa-regular fa-star"></i></span>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                  <div class="d-flex justify-content-start">
                    {{ $labelLeft }}
                    {{-- <button type="button" class="btn btn-secondary" wire:click.prevent="goBack">Go back</button> --}}
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex justify-content-end">
                    {{ $labelRight }}
                    {{-- <button type="button" class="btn btn-primary" wire:click.prevent="createQuestion">Complete</button> --}}
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
