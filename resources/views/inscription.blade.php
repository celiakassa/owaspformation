<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Formation &mdash;EMESSARL</title>
    <!-- MDB icon -->
     <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="{{asset('css/register.css')}}" />

  </head>
  <body>
    <!-- Start your project here-->
    <section class=" gradient-custom">
   <div class="section-overlay"></div>
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulaire D'inscription</h3>
            @if (session()->has("success"))
                <div class="alert alert-{{session('success')?'success':'danger'}} alert-dismissible fade show" role="alert">
                    {{session('msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @php
                    session()->pull('success','default'); session()->pull('msg','default');
                @endphp
          @endif
            <form action="{{url('/register')}}"    method="post">
                @csrf
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="firstName"  value="{{old('firstName', '') }}"  class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Prénoms</label>
                   
                  </div>
                  @error('firstName')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="lastName"  value="{{old('lastName', '') }}"  class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Nom</label>
                    
                  </div>
                  @error('lastName')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
              </div>

              <div class="row">
              <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                        <input type="text" id="email" name="email"  value="{{old('email', '') }}"  class="form-control form-control-lg" />
                        <label class="form-label" for="email">Email</label>
                       
                    </div>
                    @error('email')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline"> 
                    <input type="tel" id="phoneNumber" value="{{old('phone', '') }}"  name="phone" class="form-control form-control-lg" />
                    <label class="form-label" for="phoneNumber">Téléphone</label>
                   
                </div>
                @error('phone')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="row">
                <h6 class="mb-2 pb-1">Profession: </h6>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="profession" id="femaleGender"value="etudiant" checked />
                        <label class="form-check-label" for="femaleGender">Etudiant</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="profession" id="maleGender" value="professionnel" />
                        <label class="form-check-label" for="maleGender">Professionel</label>
                    </div>
                   
                </div>
                @error('profession')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-outline">
                        <input type="text" id="provenance" name="provenance"  value="{{old('provenance', '') }}"  class="form-control form-control-lg" />
                        <label class="form-label" for="provenance">Provenance</label>
                       
                    </div>
                    @error('provenance')
                          <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                </div>
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="S'inscrire" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>