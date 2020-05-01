<form action="{{ route('bookings.update', ['booking' => $booking]) }}" method="POST">
	@method('PUT')
  @include('bookings.fields')
  
  <button type="submit" class="btn btn-primary">Update Reservation</button>
  <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
</form>
