<div>
    <h4>Brief Introduction</h4>
    <form class="row g-2" wire:submit.prevent="submit">

                <div class="col-12">


                    <textarea wire:model.defer="introduction" class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="2"></textarea>


                    @error('introduction') <span class="error alert-danger rounded">{{ $message }}</span> @enderror

                  </div>


                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>

                    @if (session()->has('message'))
                        <span class="alert-success rounded">
                           {{ session('message') }}
                        </span>
                    @endif
                  </div>
              </form>

</div>
