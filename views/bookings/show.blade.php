<dd>{{ $booking->id }}</dd>
<dd>{{ $booking->room_id }}</dd>
<dd>{{ date('F d, Y', strtotime($booking->start)) }}</dd>
<dd>{{ date('F d, Y', strtotime($booking->end)) }}</dd>
<dd>{{ $booking->is_reservation ? 'Yes' : 'No' }}</dd>
<dd>{{ $booking->is_paid ? 'Yes' : 'No' }}</dd>
<dd>{{ $booking->room_id }}</dd>
<dd>{{ date('F d, Y', strtotime($booking->created_at)) }}</dd>
<dd>{{ date('F d, Y', strtotime($booking->updated_at)) }}</dd>
@foreach($booking->users as $user)
    <p>{{ $user->name }}</p>
@endforeach
