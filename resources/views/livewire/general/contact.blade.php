<div class="col-lg-8 mt-5 mt-lg-0">

    <form role="form" class="php-email-form">
      <div class="form-row">
        <div class="col-md-6 form-group">
          <input type="text" name="name" wire:model="name" class="form-control" id="name" placeholder="Your Name"/>
          @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="col-md-6 form-group">
          <input type="email" wire:model="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
          @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="form-group">
        <input type="text" wire:model="subject" class="form-control" name="subject" id="subject" placeholder="Subject"/>
        @error('subject') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-group">
        <textarea class="form-control" wire:model="message" name="message" rows="5" placeholder="Message"></textarea>
        @error('message') <span class="error text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="mb-3">
            @if (session()->has('SuccessMessage'))
            <span class="alert-success rounded contactSuccess">
               {{ session('SuccessMessage') }}
            </span>
            @endif

      </div>
      <div class="text-center"><button type="submit" wire:click="contact">Send Message</button></div>
    </form>

  </div>
