<div>
        <tr>
            <td class="" style="width: 5%">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </td>
            <td class="" style="width: 80%;">
                <span class="fw-bold">
                    {{ $question->title }}
                </span>
            </td>
            <td class="" style="width: 10%">
                {{ $question->type }}
            </td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('questions.update', ['form' => $form->id, 'question' => $question->id]) }}">Edit</a></li>
                      <li><a class="dropdown-item" href="{{ route('questions.delete', ['form' => $form->id, 'question' => $question->id]) }}">Delete</a></li>
                      <li><a class="dropdown-item" href="#">Deactivate/Activate</a></li>
                    </ul>
                  </div>
            </td>
        </tr>
    
</div>
