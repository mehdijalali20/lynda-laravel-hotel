Route::get('/rooms/{roomType?}', 'ShowRoomsController');

Route::resource('bookings', 'BookingController');
