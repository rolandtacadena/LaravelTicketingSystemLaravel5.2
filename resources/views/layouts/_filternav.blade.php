<dl class="filter-navigation sub-nav">
    <dt>Filter:</dt>
    <dd>
        <a href="{{ route('all_tickets') }}">
            All <span class="label right">{{ $all_tickets_count }}</span>
        </a>
    </dd>

    @if($isLoggedIn)
        <dd>
            <a href="{{ route('tickets_by_user', $user->id) }}">
                My Ticket(s)<span class="label right">{{ $user->tickets()->count() }}</span>
            </a>
        </dd>
    @endif

    <dd><a href="{{ route('tickets_by_status', 'open') }}">
            Open Tickets<span class="label right">{{ $open_tickets_count }}</span>
        </a>
    </dd>
    <dd><a href="{{ route('tickets_by_status', 'close') }}">
            Closed Tickets<span class="label right">{{ $close_tickets_count }}</span>
        </a>
    </dd>
</dl>