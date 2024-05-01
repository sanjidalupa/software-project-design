<div>
  @if($step === 1)
  <h3>Select a question type</h3>
  <div class="row">
      <div class="col-md-3">
          <div class="card mb-5" wire:click="setQuestionType('nps')" style="cursor: pointer" >
            <img src="{{ asset('images/questions/nps.png') }}" class="card-img-top" alt="NPS Question">
            <div class="card-body">
              <h5 class="card-title text-center">Net Promoter Score</h5>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-5" wire:click="setQuestionType('slider')" style="cursor: pointer">
            <img src="{{ asset('images/questions/slider.png') }}" class="card-img-top" alt="NPS Question">
            <div class="card-body">
              <h5 class="card-title text-center">Ratings</h5>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-3">
          <div class="card mb-5" wire:click="setQuestionType('smiley')" style="cursor: pointer">
            <img src="{{ asset('images/questions/smiley.png') }}" class="card-img-top" alt="NPS Question">
            <div class="card-body">
              <h5 class="card-title text-center">Smiley</h5>
            </div>
          </div>
        </div> --}}
        <div class="col-md-3">
          <div class="card mb-5" wire:click="setQuestionType('text')" style="cursor: pointer">
            <img src="{{ asset('images/questions/textarea.png') }}" class="card-img-top" alt="NPS Question">
            <div class="card-body">
              <h5 class="card-title text-center">Text Box</h5>
            </div>
          </div>
        </div>
        {{-- <div class="col-md-3">
          <div class="card mb-5" wire:click="setQuestionType('switch')" style="cursor: pointer">
            <img src="{{ asset('images/questions/toggle.png') }}" class="card-img-top" alt="NPS Question">
            <div class="card-body">
              <h5 class="card-title text-center">Switch</h5>
            </div>
          </div>
        </div> --}}
  </div>
  @elseif($step === 2)
    <div class="row">
      <div class="row mb-2">
        <div class="col-2">
          <label for="question" class="form-label">Question</label>
        </div>
        <div class="col-10">
          <textarea class="form-control" id="question" rows="3" wire:model.lazy="question"></textarea> 
        </div>
      </div>

      @if($questionType === 'slider')
        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Slider Min Value</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="1" wire:model.lazy="metas.slider_min_value">
          </div>
        </div>
        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Slider Max Value</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="10" wire:model.lazy="metas.slider_max_value">
          </div>
        </div>

        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Slider Min Label</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="Bad 😕" wire:model.lazy="metas.slider_min_label">
          </div>
        </div>

        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Slider Max Label</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="Awesome 😎" wire:model.lazy="metas.slider_max_label">
          </div>
        </div>

      @elseif($questionType === 'switch')
        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Left label</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="No" wire:model.lazy="metas.toggle_left_label">
          </div>
        </div>

        <div class="row mb-1">
          <div class="col-2">
            <label for="min-value" class="form-label">Right label</label>
          </div>
          <div class="col-10">
            <input type="text" class="form-control" value="Yes" wire:model.lazy="metas.toggle_right_label">
          </div>
        </div>
      @endif

      @if($questionType !== 'nps')
        <div class="row mb-1">
          <div class="col-2">
            <label for="description" class="form-label">Description</label>
          </div>
          <div class="col-10">
            <textarea class="form-control" id="description" rows="3" wire:model.lazy="description"></textarea> 
          </div>
        </div>
      @endif

      <div class="row mb-1">
        <div class="col-2">
          <label for="exampleFormControlTextarea1" class="form-label">Require response</label>
        </div>
        <div class="col-10">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" wire:model.lazy="required">
          </div>
        </div>
      </div>

      <div class="row mb-1">
        <div class="col-2">
          <label for="exampleFormControlTextarea1" class="form-label">Show Question</label>
        </div>
        <div class="col-10">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" wire:model.lazy="isActive">
          </div>
        </div>  
      </div> <!-- end of row -->

    </div> <!-- end of row/step-2 -->

    <div class="row">
      <div class="col-6">
        <div class="d-flex justify-content-start">
          <button type="button" class="btn btn-secondary" wire:click.prevent="goBack">Go back</button>
        </div>
      </div>
      <div class="col-6">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-primary" wire:click.prevent="createQuestion">Complete</button>
        </div>
      </div>
    </div>
  @endif
</div>