@extends('admin.base')
<style>
    
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
#register{
  padding-top:130px;
  padding-bottom:40px;
}
:root{
   --font-family: "DM Sans", sans-serif;
  }
  body{
   h1,h2,h3,h4,h5,h6,span,p label{
      font-family:var(--font-family);
   }
  .container{
    max-width:1440px;
    margin:0 auto;
  }
  </style>

  @section('content')
  <section class="listings-location">
      <div class="container">
         <div class="listings-location-inner">
            <div class="location-inner-one">
               <img src="">
                  <div class="listings-card">
                     <h3>Shneller 3 Bedroom 00-900</h3>
                     <p> Jerusalem Israel</p>
                     <div class="list-card-dec">

                     </div>
                  </div>
            </div>
         </div>
      </div>
  </section>
          
@endsection