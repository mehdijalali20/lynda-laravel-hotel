<a href="{{ route('bookings.create') }}"> Add New Booking </a>

@forelse ($bookings as $booking)
<tr>
    <td>{{ $booking->id }}</td>
    <td>{{ $booking->room->number }} {{ $booking->room->roomType->name }}</td>
    <td>{{ date('F d, Y', strtotime($booking->start)) }}</td>
    <td>{{ date('F d, Y', strtotime($booking->end)) }}</td>
    <td>{{ $booking->is_reservation ? 'Yes' : 'No' }}</td>
    <td>{{ $booking->is_paid ? 'Yes' : 'No' }}</td>
    <td>{{ (strtotime($booking->start) < time()) ? 'Yes' : 'No' }}</td>
    <td>{{ (strtotime($booking->end) < time()) ? 'Yes' : 'No' }}</td>
    <td>{{ date('F d, Y', strtotime($booking->created_at)) }}</td>
    <td>
        <a href="{{ action('BookingController@show', ['booking' => $booking->id]) }}"> View </a>
        <a href="{{ action('BookingController@edit', ['booking' => $booking->id]) }}"> Edit </a>
        <form action="{{ action('BookingController@destroy', ['booking' => $booking->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
        </form>
    </td>
</tr>
@empty
@endforelse
