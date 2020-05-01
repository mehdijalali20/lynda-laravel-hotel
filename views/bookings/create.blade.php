
<form action="{{ route('bookings.store') }}" method="POST">
    @include('bookings.fields')
    <button type="submit" class="btn btn-primary">Add Reservation</button>
    <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
</form>
