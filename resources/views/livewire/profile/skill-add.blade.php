<div class="row">
    <h4>Skills</h4>

      <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Skill</label>
          <input type="text" wire:model="skill_name" class="form-control form-control-sm" id="inputEmail4" placeholder="Add new skill">
          @error('skill_name') <span class="error alert-danger rounded">{{ $message }}</span> @enderror
          @error('skillExist') <span class="error alert-danger rounded">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6">

          <label for="customRange1" class="form-label">Set skill volume</label>
          <input type="range" wire:model="skill_volume" wire:input="volumeChange($event.target.value)" class="form-range  form-control-sm" id="customRange1">
          <span class="badge rounded-pill bg-info text-dark float-end">
             {{$skill_volume}} %
        </span>


        </div>

        <div class="col">
          <button  wire:click="addSkill" class="btn btn-primary btn-sm">Add New Skill</button>

        </div>

        <br>



        <div class="row row-cols-1 row-cols-md-4 g-2 ms-1">
            @foreach ($skills as $item)
            <div class="col">

            <div class="card shadow bg-body">

                <div class="">
                    <span class="badge text-dark overflow-hidden" style="width: 225px; margin-top:6px; margin-left:5px">{{$item->skill_name}} - {{ $item->skill_volume }}%</span>

                    <a type="submit"  class="float-end me-2" data-bs-toggle="modal" data-bs-target="#editSkillsModal" style="margin-top:3px">
                    <i wire:click="editSkill({{ $item->id }}, '{{ $item->skill_name }}', '{{ $item->skill_volume }}')" class="far fa-edit"></i>
                </a></div>
            </div>
            </div>
            @endforeach
        </div>


            <!-- Modal -->
            <div wire:ignore.self class="modal fade" id="editSkillsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit skill</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">




                                <div class="card mx-2 p-2" >
                                    <div class="col mt-2">

                                        <input type="text" class="form-control form-control-sm" wire:model="edit_skill_name">
                                        @error('edit_skill_name') <span class="error alert-danger rounded">{{ $message }}</span> @enderror

                                      </div>
                                      <div class="col">
                                        <input type="range" wire:model="edit_skill_volume" wire:input="ESvolumeChange($event.target.value)" class="form-range  form-control-sm" id="customRange1">
                                        <span class="badge rounded-pill bg-info text-dark float-end ">
                                            {{$edit_skill_volume}} %
                                       </span>
                                      </div>
                                      <input type="text" wire:model="edit_skill_id" hidden>
                                </div>



                    </div>
                    <div class="modal-footer">
                    <button type="button" wire:click="resetError" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click.prevent="skillUpdate" class="btn btn-success">Save</button>
                    <button wire:click="skillDelete" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                    </div>
                </div>
                </div>
            </div>

</div>
