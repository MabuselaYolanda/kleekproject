<div wire:poll="mount">
@foreach($users as $user)
<div class="support-ticket " >
    <div class="st-meta">
        <i class="os-icon os-icon-ui-09"></i>
        <div class="status-pill green"></div>
    </div>
    <div class="st-body">
        <div class="ticket-content">
            <h6 class="ticket-title">
                {{ $user->name .' ' . $user->surname }}
            </h6>
        </div>
    </div>
    <div class="st-foot">
        <span class="label">User Type:</span><a class="value with-avatar" href="#"><span>{{ $user->role }}</span></a><span class="label">Contact Info:</span><span class="value">{{ $user->cellphone }}</span>
    </div>
</div>
@endforeach
</div>
