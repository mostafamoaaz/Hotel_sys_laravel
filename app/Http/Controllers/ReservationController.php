<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Feedback;
use App\User;
use App\Reservation;
use App\Room;
use App\Bill;
use DB;
use Auth;
use Validator;

class ReservationController extends Controller
{
  public function ReserveRoom(Request $request)
  {
    if(Auth::user()->type==1)
        return redirect('home');
    if($request->isMethod('post')){

      $reservation = new Reservation();
      $num_ppl = $request->input('book-adults-checker');
      $reservation->num_ppl = (int)$num_ppl;
      $num_ppl = (int)$num_ppl;
      $reservation->num_rooms = DB::table('rooms')
              ->where('room_available', '=', 1)
              ->Where('num_people', $num_ppl)
              ->value('room_num');

      if($reservation->num_rooms == null){
        if($num_ppl == 1){
          echo "NO Single Rooms Avaliable ";

        }
        elseif($num_ppl == 2){
          echo "NO Double Rooms Avaliable ";
        }
        else{
          echo "NO Trible Rooms Avaliable ";
        }

      }
      else
      {
        Room::where('room_num', $reservation->num_rooms)->update(array('room_available'=>2));


        $reservation->user_id = Auth::User()->id;


        $reservation->service_type =   $request['serve-full'];
        $reservation->payment_method = $request['payment_method'];

        if($request['book-checkin'] >= date('Y-m-d')){
          if (date($request['book-checkout']) > date($request['book-checkin']))
          {

          $reservation->check_in =$request['book-checkin'];
          $reservation->check_out =$request['book-checkout'];
          $days = strtotime($reservation->check_in) - strtotime($reservation->check_out);
          $days = abs(round($days / 86400));
          //echo $days;
          if($num_ppl == 1)
          {
            $reservation->total_price = 150 * $days;
          }
          elseif($num_ppl ==2){
            $reservation->total_price = 225 * $days;
          }
          else{
            $reservation->total_price = 300 * $days;
          }


          
          $reservation->save();
          $this->createBill();
          return view('bill', compact('reservation'));

        }
        else {

          #DB::table('Rooms')->where('room_num', $finished)->update(array('room_available'=>0));
          echo "Error Check The Validity of Check in & out Date.....";
        }
    }
      else {

        #DB::table('Rooms')->where('room_num', $finished)->update(array('room_available'=>0));
        echo "Error Check The Validity of Check in & out Date.....";
        }

      }
    }

  }

  public function createBill()
  {
    $bill = new Bill();
    $bill->user_id = Auth::User()->id;
    $bill->bill_date = date('Y-m-d');
    $bill->save();
  }

  public function cancelBook($id)
  {
    if(Auth::user()->type==1)
        return redirect('home');
     $room_num = DB::table('reservations')->where('id', $id)->value('num_rooms');
     $a = Reservation::where('id', $id)->update(array('payment_method'=>'canceled'));
     $b = Room::where('room_num', $room_num)->update(array('room_available'=>1));
     if($a && $b){
       echo " canceled Successfully.... you will redirect after 3 second ";
       header( "refresh:3 ;url=/myaccount.html");
   }
  }

}
