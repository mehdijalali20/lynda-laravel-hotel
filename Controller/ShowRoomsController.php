use App\Room;
use Illuminate\Support\Facades\DB;

public function __invoke(Request $request, $roomType = null)
{
  $rooms = Room::byType($roomType)->get();
  return view('rooms.index', ['rooms' => $rooms]);
}
