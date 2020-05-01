      /* تگ های جدول حذف شده اند */
      @foreach($rooms as $room)
        <tr>
          <td>{{ $room->number }}</td>
          <td>{{ $room->roomType->name }}</td>
        </tr>
      @endforeach
