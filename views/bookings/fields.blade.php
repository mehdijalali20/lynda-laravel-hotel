<select name="room_id" class="form-control" id="room_id" required>
  @foreach($rooms as $id => $display)
    <option value="{{ $id }}" {{ (isset($booking->room_id) && $id === $booking->room_id) ? 'selected' : '' }}>{{ $display }}</option>
  @endforeach
</select>

<select name="user_id" class="form-control" id="user_id" required>
  @foreach($users as $id => $display)
    <option value="{{ $id }}" {{ (isset($bookingsUser->user_id) && $id === $bookingsUser->user_id) ? 'selected' : '' }}>{{ $display }}</option>
  @endforeach
</select>

<input name="start" type="date" required placeholder="yyyy-mm-dd" value="{{ $booking->start ?? '' }}"/>
<input name="end" type="date" required placeholder="yyyy-mm-dd" value="{{ $booking->end ?? '' }}"/>
<input name="is_paid" type="checkbox" value="1" {{ $booking->is_paid ? 'checked' : '' }}/>
<input name="notes" type="text" class="form-control" placeholder="Notes" value="{{ $booking->notes ?? '' }}"/>
<input type="hidden" name="is_reservation" value="1"/>
@csrf
