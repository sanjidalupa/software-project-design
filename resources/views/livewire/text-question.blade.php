<div>
    <div class="feedback-card">
        <div class="form-group text-center" style="width: 100%">
            <label for="" class="feedback-question__name">
                <p>{{ $question->title }}</p>
            </label>
            <div class="row">
                <div class="col-12">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" wire:model.defer="answer"></textarea>
                    {{-- <span class="rating-star" wire:click.prevent="submitAnswer({{ $value }})"><i class="fa-regular fa-star"></i></span> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                  <div class="d-flex justify-content-start">
                    {{-- <button type="button" class="btn btn-secondary" wire:click.prevent="goBack">Go back</button> --}}
                  </div>
                </div>
                <div class="col-6">
                  <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" wire:click.prevent="submitAnswer">Next</button>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
