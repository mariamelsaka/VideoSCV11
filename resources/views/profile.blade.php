@extends('common.master')

@section('title')
    profile
@endsection


@section('content')
    @include('common.navbar')


    <div style="padding:80px"> </div>
    <div class=" card shadow mx-4">

        <div class="card-body" style="background-color: white">

            <div class="row">
                <div class=" col-lg-3  align-item-center " style="color: #5E5652">
                   <span>
                       <h4 style="color: #5E5652 ;">Account Details</h4>
                        <img src="{{asset("assets/image/profile.jpg")}}" height="200px" style="margin-right: 1000px" alt="">
                   </span>

                </div>
{{--                action="{{ route('profile.show') }}"--}}
                 <form action="{{ route('profile.update') }}"  enctype='multipart/form-data' method="post" novalidate>
                    <div class="col-lg-9  align-item-center" style="color: #5E5652;">

                        <div class=" pb-0 pt-3" >


                           <div class="row" >
                                   {{csrf_field()}}
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="example-text-input" class="form-control-label">First name</label>
                                       <input class="form-control" name="firstname"  type="text" value=" {{ Auth::user()->firstname}}">
                                       @if ($errors->has('firstname'))
                                           <span class="errormsg text-danger">{{ $errors->first('firstname') }}</span>
                                       @endif
{{--                                       @endforeach--}}
                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="example-text-input" class="form-control-label">Last name</label>
                                       <input class="form-control" name="lastname" type="text" value="{{Auth::user()->lastname}}">
                                       @if ($errors->has('lastname'))
                                           <span class="errormsg text-danger">{{ $errors->first('lastname') }}</span>
                                       @endif
                                   </div>
                               </div>
                           </div>

                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="example-text-input" class="form-control-label">Email</label>
                                       <input class="form-control" name="email" type="email" value="{{Auth::user()->email}}">
                                       @if ($errors->has('email'))
                                           <span class="errormsg text-danger">{{ $errors->first('email') }}</span>
                                       @endif
                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="example-text-input" class="form-control-label">Phone Number</label>
                                       <input class="form-control" name="phone_number" type="text" value="{{Auth::user()->phone_number}}">
                                       @if ($errors->has('phone_number'))
                                           <span class="errormsg text-danger">{{ $errors->first('phone_number') }}</span>
                                       @endif
                                   </div>
                               </div>
                           </div>

                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Address</label>
                                      <input class="form-control" name="address" type="text" value="{{Auth::user()->address}}">
                                      @if ($errors->has('address'))
                                          <span class="errormsg text-danger">{{ $errors->first('address') }}</span>
                                      @endif
                                  </div>
                              </div>

                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">User name</label>

                                      <input class="form-control" name="username"  type="text" value="{{Auth::user()->username}}">
                                      @if ($errors->has('username'))
                                          <span class="errormsg text-danger">{{ $errors->first('username') }}</span>
                                      @endif
                                    </div>
                                  </div>
                          </div>


                        </div>

                    </div>

                     <div  style="margin-top: 23px">
                         <div class="form-group d-flex mb-0">
                             <div class="w-50" >
                                 <input type="submit" name="submit" value="Save" class="btn " style="color: #F0F0F0;background-color: #888888;">
                             </div>
                         </div>
                     </div>
                 </form>
            </div>


        </div>
    </div>





    @include('common.footer')
@endsection
