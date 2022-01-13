<div>
    <div class="dropdown msg-list">
        <button wire:click="CheckSeen" class="btn alert-primary btn-sm position-relative me-2 rounded-pill" data-bs-toggle="dropdown">
            <i class="far fa-envelope"></i>
            @if ($unseen == false)
            <span class="position-absolute top-1 start-0 translate-middle rounded-pill p-1 bg-danger">

            </span>
            @endif

        </button>


        <ul class="dropdown-menu dropdown-menu-end me-2 shadow msg-list" aria-labelledby="dropdownMenuButton2">
            <li class="border-bottom border-primary text-center"><h6>Public Messages</h6></li>

            @forelse ($messages as $msg)


            <li class="border msg-list overflow-hidden {{ ( $msg->action == 1 ) ? 'unseen-messages' : 'seen-messages' }}" wire:click="MsgSeen({{$msg->id}})">
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#SingleMessageModal">
                    <span>{{$msg->name}}</span>
                        <br>
                       <small class="fw-lighter">{{$msg->subject}}</small>
                </a>
            </li>

            @empty
            <li class="text-center">
                    <small>No messages</small>
            </li>
            @endforelse
            <li class="border-top border-primary fw-lighter text-center"><a class="dropdown-item" href="{{url('home/inbox')}}"><small class="fw-lighter">View all messages . . .</small></a></li>
        </ul>
     </div>


<div class="modal fade" id="SingleMessageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span style="font-size: 35px; color: Dodgerblue; margin-top: 20px;"><i class="fas fa-envelope"></i></span></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div>
            <h5 class="">{{$subject}}</h5>
            <small><strong>From : </strong>{{$name}}</small><br>
            <small><strong>Email : </strong>{{$email}}</small><br>
            <small><strong>Date : </strong>{{$date}}</small>
          </div>
        <br>
        <div class="border rounded-3 p-2">
            {{$message}}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>


