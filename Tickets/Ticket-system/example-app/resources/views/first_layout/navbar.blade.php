<nav class="navbar navbar-expand-lg bg-body-tertiary bg-transparent ">
        <div class="container-fluid bg-transparent">
            <!-- Brand -->
         
            
            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar items -->
            <div class="collapse navbar-collapse nav d-flex justify-content-between" id="navbarNav">
                
                          <div class="border border-secondary p-3">
                          <p class="text-center">Customer panel</p> <hr>
                             <ul class="nav d-flex justify-content-between  ">
                            
                             <li class="nav-item ">
                                <a href="{{ url('/customer/login') }}" class="nav-link">
                                  
                                    <button type="button" class="btn btn-primary"> login</button>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{ url('/customer/register') }}" class="nav-link">
                                <button type="button" class="btn btn-primary"> Registration</button>
                                    
                                </a>
                              </li>
                             </ul>
                         </div>

         <a class="navbar-brand" href="#">Tickets Issue Solution</a>

        <div class="border border-secondary p-3">
            <p class="text-center"> Admin panel</p> <hr>
             <ul class="navbar-nav ms-auto p-1">
           
             
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">
                                    Dashboard
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">
                                    Log in
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">
                                        Registration
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
             </div>
         </div>
       </div>
    </nav>


<div class="text-center">
   <div class="spinner-grow text-primary" role="status">
   <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-secondary" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-success" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-danger" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-warning" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-info" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-light" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
   <div class="spinner-grow text-dark" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
</div>