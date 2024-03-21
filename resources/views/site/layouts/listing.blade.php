@extends('site.base')
@section('title'){{ $listing ->title }} | @endsection
<style>
    .container-form {
        max-width: 800px;
        padding: 20px;
        width:100%;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
      
    }
    .container-form h1{
      font-size:30px;
    }

    .form-group label {
        display: block;
    }
    .form-group{
      margin: 0 !important;
    }

    
    input[type="text"] {
      width: calc(100% - 40px);
      padding: 10px;
      border: none;
      border-radius: 5px;
      display: inline-block;
      vertical-align: middle;
      background-color: #efe9e2;
      margin-left: 12px;
      font-size: 18px;
      color: #000 !important;
    }
  
    input[type="date"]
    {
        width: calc(100% - 40px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: inline-block;
        vertical-align: middle;
    }

    .counter {
        display: inline-block;
      
    }

    .counter span {
          cursor: pointer;
          display: inline-block;
          width: 30px;
          height: 30px;
          line-height: 30px;
          text-align: center;
          background-color: #007bff;
          color: #fff;
          border-radius: 5px;
          
    }

    .counter span:hover {
        background-color: #0056b3;
    }

    .submit-request {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }
.submit-request:hover {
        background-color: #0056b3;
    }
   .form-icon i{
    font-size:25px;
   }
   .form-group-icon i{
    font-size:25px;
    padding-right:5px;
    margin-left:10px;
   }
   .form-img i{
    font-size:25px;
   }
   .form-group-one{
    background-color: #efe9e2;
    padding:15px;
    border-radius:10px;
     gap:20px;
     
   }
   .from-data {
    background-color: #efe9e2;
    border-radius:10px;
    padding:15px;
   }
   .form-group .form-control{
    background-color: #efe9e2;
    border-radius: 10px;
    height:20%;
    }
    .btn{
        margin-top:20px;
      }
   .adults-children.sec-menu-div.active{
      display: block !important;
   }
   .counter input[type="text"] {
            width: calc(35% - 40px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: inline-block;
            vertical-align: middle;
        }
</style>
@section('content')

  <!-- Breadcrumb -->
  <section id="bc" class="mt-3">
    <div class="container">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('index') }}">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ route('listings')}}">Listings</a>
          </li>
          <li class="breadcrumb-item active">{{ $listing ->title }}</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Listing -->
  <section id="listing" class="py-4">
    <div class="container">
      <a href="{{'listings'}}" class="btn btn-light mb-4">Back To Listings</a>
      <div class="row">
        <div class="col-md-12">
          <!-- Home Main Image -->
          <img src="{{ url($listing -> thumbnail_0) }}" alt="" class="img-main img-fluid mb-3">
          <!-- Thumbnails -->
          <div class="row mb-5 thumbs">
            @if ($listing ->thumbnail_1)
            <div class="col-md-2">
            <a href="{{ url($listing ->thumbnail_1) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_1) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_2)
            <div class="col-md-2">
              <a href="{{ url($listing ->thumbnail_2) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_2) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_3)
            <div class="col-md-2">
              <a href="{{ url($listing ->thumbnail_3) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_3) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_4)
            <div class="col-md-2">
              <a href="{{ url($listing ->thumbnail_4) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_4) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_5)
            <div class="col-md-2">
              <a href="{{ url($listing ->thumbnail_5) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_5) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif
            @if ($listing ->thumbnail_6)
            <div class="col-md-2">
              <a href="{{ url($listing ->thumbnail_6) }}" data-lightbox="home-images">
                <img src="{{ url($listing ->thumbnail_6) }}" alt="" class="img-fluid" data-fancybox="gallery">
              </a>
            </div>
            @endif

          </div>
          </div>
          </div>
            <!-- Fields -->
            <div class="col-md-12">
            
            <div class="col-md-12">
            <div class="row mb-5 fields gap-5">
              <div class="col-md-7 d-flex gap-5 justify-content-between">
                <div class="">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item text-secondary">
                    <i class="fas fa-money-bill-alt"></i> Asking Price:
                    <span class="float-right">${{ $listing ->price }}</span>
                </li>
                <li class="list-group-item text-secondary">
                    <i class="fas fa-bed"></i> Bedrooms:
                   <span class="float-right">{{ $listing ->bedroom }}</span>
                </li>
                <li class="list-group-item text-secondary">
                   <i class="fas fa-bath"></i> Bathrooms:
                    <span class="float-right">{{ $listing ->bathroom }}</span>
                </li>
                <li class="list-group-item text-secondary">
                    <i class="fas fa-car"></i> Garage:
                    <span class="float-right">{{ $listing ->garage }}
                  </span>
                </li>
              </ul>
            </div>
            <div class="">
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-secondary">
                  <i class="fas fa-th-large"></i> Square Feet:
                  <span class="float-right">{{ $listing ->square_feet }}</span>
                </li>
                <li class="list-group-item text-secondary">
                  <i class="fas fa-square"></i> Lot Size:
                  <span class="float-right">{{ $listing ->lot_size }} Acres
                  </span>
                </li>
                <li class="list-group-item text-secondary">
                  <i class="fas fa-calendar"></i> Listing Date:
                  <span class="float-right">{{ $listing -> created_at->diffForHumans() }}</span>
                </li>
                <li class="list-group-item text-secondary">
                  <i class="fas fa-bed"></i> Realtor:
                  <span class="float-right">{{ $listing -> realtor-> name }}
                  </span>
                </li>
              </ul>
            </div>
</div>
<div class="col-md-5">
          <div class="cards">
            <div class="container-form">
              <h1>Booking Request Deatils</h1>

              <form action="{{ url('contact') }}" method="POST">
                @csrf 
                <input type="hidden" name="listing_id" value="{{ $listing ->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="hidden" name="name" value="{{ Auth::user()->username; }}">
                <input type="hidden" name="email" value="{{ Auth::user()->email; }}">
                    <div class="from-data d-flex justify-content-around align-items-center">
                      <div class="form-icon">
                          <i class="fa-regular fa-calendar-days" style="color:#23b0ff"></i>
                      </div>
                      <div class="form-group" id="cal">  
                          <input type="text"  id='ranges' name="checkin" value="Check In" placeholder="Check In">
                      </div>
                      <div class="form-img">
                          <i class="fa-solid fa-arrow-right" style="color:#23b0ff"></i>
                      </div>
                      <div class="form-group" id="cal">
                          <input type="text" id='rangesend' name="checkout" value="Check-Out" placeholder="Check-Out">
                      </div>
                  </div>
                  <div class="alert-text">
                      <p class="text-danger text-center py-4">Check In and Check Out is required</p>
                  </div>
                  <div class="form-group-one d-flex align-items-center" id="sec-menu"> 
                      <div class="form-group-icon">
                          <i class="fa-regular fa-user" style="color:#23b0ff"></i>
                      </div>
                      <div class="data-lable-one"> 
                        <!-- <label for="adults" style="font-size:18px">1 Adults,</label> -->
                        <input type="text" class="adults-adults" style="font-size:18px"  value="1 Adults" placeholder="1 Adults">
                      </div>
                      <div class="form-lable-two">
                        <!-- <label for="adults" style="font-size:18px">1 Children,</label> -->
                          <input type="text" class="children-children" style="font-size:18px"  value="1 Children" placeholder="1 Children">
                      </div>
                  </div>
                    <div class="adults-children sec-menu-div" >
                        <div class="form-group">
                            <label for="adults">Adults:</label>
                            <div class="counter">
                                <span class="adults-minus">-</span>
                                <input type="text" id="adults" name="adults" value="1" readonly>
                                <span class="adults-plus">+</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="children">Children:</label>
                            <div class="counter">
                                <span class="minus">-</span>
                                <input type="text" class="children"  id="children" name="children" value="1" readonly>
                                <span class="plus">+</span>
                            </div>
                        </div>
                  </div>

                  <div class="form-group">
                    <label for="message" class="col-form-label">Message:</label>
                    <textarea name="message"  class="form-control" style=" background-color: #efe9e2;"></textarea>
                  </div>
                  <input type="submit" value="Submit Booking Request" class="btn btn-block btn-secondary">
                </form> 
          </div>
            
           </div>
        </div>
</div>
</div>
          <!-- <button class="btn-primary btn-block btn-lg" data-toggle="modal" data-target="#inquiryModal">Reservation</button> -->
      
          <!-- Description -->
          <div class="row mb-5">
            <div class="col-md-12">
              {{ $listing ->description }}
            </div>
          </div>
        
        
      </div>
    </div>
  </section>

  <!-- Inquiry Modal -->
  <!-- Inquiry Modal -->
  <div class="modal fade" id="inquiryModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inquiryModalLabel">Make An Reservation</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('send-message') }}" method="POST">
            @csrf
              <input type="hidden" name="listing_id" value="{{ $listing ->id }}">
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <div class="form-group">
                <label for="property_name" class="col-form-label">Property:</label>
                <input type="text" name="listing" class="form-control" value="{{ $listing ->title }}" disabled="">
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control"   @auth value="{{ Auth::user()->get_full_name() }}"@endif required>
              </div>
              <div class="form-group">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" name="email" class="form-control"  @auth value="{{ Auth::user()->email }}" @endif required>
              </div>
              <div class="form-group">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="text" name="contact_number" class="form-control">
              </div>
              <div class="form-group">
                <label for="message" class="col-form-label">Message:</label>
                <textarea name="message" class="form-control" required></textarea>
              </div>
              <hr>
              <input type="submit" value="Send" class="btn btn-block btn-secondary">
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection