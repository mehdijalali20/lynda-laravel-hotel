      @foreach($rooms as $room)
        <tr>
          <td>{{ $room->number }}</td>
          <td>{{ $room->roomType->name }}</td>
        </tr>
      @endforeach
