<?php

public function bookings()
{
  return $this->belongsToMany('App\Booking', 'bookings_users', 'user_id', 'booking_id')->withTimestamps();
}
