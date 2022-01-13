
	<div class="">
        <style>
            nav svg{
                height: 20px;
            }

        </style>
		<div class="grid message">
			<div class="grid-body">
				<div class="row">
					<!-- BEGIN INBOX MENU -->
					<div class="col-md-3">
						<h2 class="grid-title text-center"><i class="fas fa-inbox inbox-icon"></i> Inbox</h2>



						<div>
							<ul class="list-group rounded-0">
								<li class="header list-group-item">Folders</li>

                                <a href="{{url('home/inbox')}}" class="list-group-item list-group-item-action btn {{ $getValue === 'inbox' ? 'bg-light border-3' : '' }}"><i class="fas fa-inbox inbox-icon"></i> &nbsp; Inbox</a>

                                <a  wire:click="importantMsg" class="list-group-item list-group-item-action btn {{ $getValue === 'important' ? 'bg-light border-3' : '' }}"><i class="fas fa-bookmark booked"></i> &nbsp; Important</a>

                                <a wire:click="trashMsg" class="list-group-item list-group-item-action btn {{ $getValue === 'trash' ? 'bg-light border-3' : '' }}"><i class="fas fa-trash trash"></i> &nbsp; Trash</a>

							</ul>
						</div>
					</div>
					<!-- END INBOX MENU -->

					<!-- BEGIN INBOX CONTENT -->
					<div class="col-md-9">
						<div class="row">
							<div class="col-sm-6">

                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle border" data-bs-toggle="dropdown" aria-expanded="false" style="color: #666666;">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item btn" wire:click="markRestore">Restore</a></li>

                                    {{-- <li><hr class="dropdown-divider"></li> --}}
                                    <li><a class="dropdown-item btn" wire:click="moveToTrash">Move to trash</a></li>
                                    </ul>
                                </div>

							</div>

							<div class="col-md-6 search-form">
								<div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="button-addon2">
                                    <button class="btn btn-info" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                  </div>
							</div>
						</div>

						<div class="padding"></div>
                        {{-- <div>@json($checkedId)</div> --}}

						<div class="table-responsive">
							<table class="table table-hover">
								<tbody>
                            @foreach ($allMsgs as $msg)


								<tr class="{{ ( $msg->action == 1 ) ? 'unseen-messages' : 'seen-messages' }}" >

									<td class="col-md-1">
                                        <input class="form-check-input" type="checkbox" wire:model="checkedId" value="{{$msg->id}}" id="flexCheckDefault">

                                         &nbsp; <i wire:click="bookmark({{$msg->id}})" class="fas fa-bookmark {{ ( $msg->bookmark == 0 ) ? 'none-booked' : 'booked' }}" ></i>
                                    </td>

									<td class="col-md-3 gh" wire:click="inboxMsgSeen({{$msg->id}})" data-bs-toggle="modal" data-bs-target="#SingleMessageModal2"> <a class="name" href="#">{{$msg->name}}</a></td>

									<td class="col-md-6 gh" wire:click="inboxMsgSeen({{$msg->id}})" data-bs-toggle="modal" data-bs-target="#SingleMessageModal2"> <a class="subject" href="#">{{$msg->subject}}</a> </td>

									<td class="time col-md-6 gh" wire:click="inboxMsgSeen({{$msg->id}})" data-bs-toggle="modal" data-bs-target="#SingleMessageModal2">{{date("g:i A", strtotime($msg->created_at))}}</td>
								</tr>
                                @endforeach

							</tbody>

                        </table>



						</div>
                        <div class="mb-2">{{ $allMsgs->links('livewire.profile.pagination') }}</div>

                        {{-- Modal start --}}
                        <div class="modal fade rounded-0" id="SingleMessageModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel"><span style="font-size: 35px; color: Dodgerblue; margin-top: 20px;"><i class="fas fa-envelope"></i></span></h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body border">

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
                          {{-- modal end --}}

					</div>
					<!-- END INBOX CONTENT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END INBOX -->

