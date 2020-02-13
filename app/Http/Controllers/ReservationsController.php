<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\C1 ;
use App\C2 ;
use App\C3 ;
use App\C4 ;
use App\C5 ;
use App\C6 ;
use App\Contact ;
use Carbon\Carbon ;
use \App\Mail\SendMail;
class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function reg_C1()  //route linking function
    {
        return view('Class1.reg_C1'); //folder.page
    }

    public function reg_C2()
    {
        return view('Class2.reg_C2');
    }

    public function reg_C3()
    {
        return view('Class3.reg_C3');
    }
    public function reg_C4()
    {
        return view('Class4.reg_C4');
    }
    public function reg_C5()
    {
        return view('Class5.reg_C5');
    }
    public function reg_C6()
    {
        return view('Class6.reg_C6');
    }

  
    public function createC1(Request $request){
        $request->validate([
            'hour_start'=>'required',
            'first_name' =>'required',
            'email' =>'required'
        ]);
        
        
       

        

        $bookings = new C1([
            'hour_start' =>  Carbon::parse($request->get('hour_start')),
            'session' => $request->get('session'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email')
  
        ]);


        $booked= C1::where('hour_start','=',$bookings->hour_start)->get();
        $sess= C1::where('session','=',$bookings->session)->get();

        $customer= C1::where('hour_start','=',$bookings->hour_start)
            ->where('session','=',$bookings->session)->value('first_name');
    
        $count= C1::where('hour_start','=',$bookings->hour_start)
            ->where('session','=',$bookings->session)->get();

    

        if($count!='[]'  )

            return redirect('/reg_C1')->withErrors(['Sorry this venue at the selected time is taken by :',[$customer]]);



      
        $bookings->save();
            
        $details = [
            'title' => 'Thank you for choosing Letsbook',
            'body' =>  'Your booking is Approved' ,
        ];

        \Mail::to($bookings->email)->send(new SendMail($details));
        return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');


        }

        public function createC2(Request $request){
            $request->validate([
                'hour_start'=>'required',
                'first_name' =>'required',
                'email' =>'required'
            ]);
            
            
           
    
            
    
            $bookings = new C2([
                'hour_start' =>  Carbon::parse($request->get('hour_start')),
                'session' => $request->get('session'),
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email')
      
            ]);
    
    
            $booked= C2::where('hour_start','=',$bookings->hour_start)->get();
            $sess= C2::where('session','=',$bookings->session)->get();
    
            $customer= C2::where('hour_start','=',$bookings->hour_start)
                ->where('session','=',$bookings->session)->value('first_name');
        
            $count= C2::where('hour_start','=',$bookings->hour_start)
                ->where('session','=',$bookings->session)->get();
    
        
    
            if($count!='[]'  )
    
                return redirect('/reg_C2')->withErrors(['Sorry this venue at the selected time is taken by: ',[$customer]]);
    
    
    
          
            $bookings->save();
                
            $details = [
                'title' => 'Thank you for choosing Letsbook',
                'body' =>  'Your booking is Approved' ,
            ];
    
            \Mail::to($bookings->email)->send(new SendMail($details));
            return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');
    
    
            }


            public function createC3(Request $request){
                $request->validate([
                    'hour_start'=>'required',
                    'first_name' =>'required',
                    'email' =>'required'
                ]);
                
                
               
        
                
        
                $bookings = new C3([
                    'hour_start' =>  Carbon::parse($request->get('hour_start')),
                    'session' => $request->get('session'),
                    'first_name' => $request->get('first_name'),
                    'last_name' => $request->get('last_name'),
                    'email' => $request->get('email')
          
                ]);
        
        
                $booked= C3::where('hour_start','=',$bookings->hour_start)->get();
                $sess= C3::where('session','=',$bookings->session)->get();
        
                $customer= C3::where('hour_start','=',$bookings->hour_start)
                    ->where('session','=',$bookings->session)->value('first_name');
            
                $count= C3::where('hour_start','=',$bookings->hour_start)
                    ->where('session','=',$bookings->session)->get();
        
            
        
                if($count!='[]'  )
        
                    return redirect('/reg_C3')->withErrors(['Sorry this venue at the selected time is taken by: ',[$customer]]);
        
        
        
              
                $bookings->save();


                $details = [
                    'title' => 'Thank you for choosing Letsbook',
                    'body' =>  'Your booking is Approved' ,
                ];
        
                \Mail::to($bookings->email)->send(new SendMail($details));
                    
        
                return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');
        
        
                }


                public function createC4(Request $request){
                    $request->validate([
                        'hour_start'=>'required',
                        'first_name' =>'required',
                        'email' =>'required'
                    ]);
                    
                    
                   
            
                    
            
                    $bookings = new C4([
                        'hour_start' =>  Carbon::parse($request->get('hour_start')),
                        'session' => $request->get('session'),
                        'first_name' => $request->get('first_name'),
                        'last_name' => $request->get('last_name'),
                        'email' => $request->get('email')
              
                    ]);
            
            
                    $booked= C4::where('hour_start','=',$bookings->hour_start)->get();
                    $sess= C4::where('session','=',$bookings->session)->get();
            
                    $customer= C4::where('hour_start','=',$bookings->hour_start)
                        ->where('session','=',$bookings->session)->value('first_name');
                
                    $count= C4::where('hour_start','=',$bookings->hour_start)
                        ->where('session','=',$bookings->session)->get();
            
                
            
                    if($count!='[]'  )
            
                        return redirect('/reg_C4')->withErrors(['Sorry this venue at the selected time is taken by :',[$customer]]);
            
            
            
                  
                    $bookings->save();

                    $details = [
                        'title' => 'Thank you for choosing Letsbook',
                        'body' =>  'Your booking is Approved' ,
                    ];
            
                    \Mail::to($bookings->email)->send(new SendMail($details));
                        
            
                    return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');
            
            
                    }

                    public function createC5(Request $request){
                        $request->validate([
                            'hour_start'=>'required',
                            'first_name' =>'required',
                            'email' =>'required'
                        ]);
                        
                        
                       
                
                        
                
                        $bookings = new C5([
                            'hour_start' =>  Carbon::parse($request->get('hour_start')),
                            'session' => $request->get('session'),
                            'first_name' => $request->get('first_name'),
                            'last_name' => $request->get('last_name'),
                            'email' => $request->get('email')
                  
                        ]);
                
                
                        $booked= C5::where('hour_start','=',$bookings->hour_start)->get();
                        $sess= C5::where('session','=',$bookings->session)->get();
                
                        $customer= C5::where('hour_start','=',$bookings->hour_start)
                            ->where('session','=',$bookings->session)->value('first_name');
                    
                        $count= C5::where('hour_start','=',$bookings->hour_start)
                            ->where('session','=',$bookings->session)->get();
                
                    
                
                        if($count!='[]'  )
                
                            return redirect('/reg_C5')->withErrors(['Sorry this venue at the selected time is taken by: ',[$customer]]);
                
                
                
                      
                        $bookings->save();
                       
                        $details = [
                                'title' => 'Thank you for choosing Letsbook',
                                'body' =>  'Your booking is Approved' ,
                            ];
                    
                        \Mail::to($bookings->email)->send(new SendMail($details));
                         
                            
                
                        return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');
                
                
                        }

                        public function createC6(Request $request){
                            $request->validate([
                                'hour_start'=>'required',
                                'first_name' =>'required',
                                'email' =>'required'
                            ]);
                            
                            
                           
                    
                            
                    
                            $bookings = new C6([
                                'hour_start' =>  Carbon::parse($request->get('hour_start')),
                                'session' => $request->get('session'),
                                'first_name' => $request->get('first_name'),
                                'last_name' => $request->get('last_name'),
                                'email' => $request->get('email')
                      
                            ]);
                    
                    
                            $booked= C6::where('hour_start','=',$bookings->hour_start)->get();
                            $sess= C6::where('session','=',$bookings->session)->get();
                    
                            $customer= C6::where('hour_start','=',$bookings->hour_start)
                                ->where('session','=',$bookings->session)->value('first_name');
                        
                            $count= C6::where('hour_start','=',$bookings->hour_start)
                                ->where('session','=',$bookings->session)->get();
                    
                        
                    
                            if($count!='[]'  )
                    
                                return redirect('/reg_C6')->withErrors(['Sorry this venue at the selected time is taken by: ',[$customer]]);
                    
                    
                    
                          
                            $bookings->save();

                            $details = [
                                'title' => 'Thank you for choosing Letsbook',
                                'body' =>  'Your booking is Approved' ,
                            ];
                    
                             \Mail::to($bookings->email)->send(new SendMail($details));
                                
                    
                            return redirect()->back()->with('message', 'congratulations the venue has bee booked successfully');
                    
                    
                            }

                            

    


    }