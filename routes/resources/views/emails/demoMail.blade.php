

  <!DOCTYPE html>
  <html>
  <head>
      <title>Soft UI Dashboard.com</title>
  </head>
  <body>
    <div>
        <li class="nav-item">
          <a href="" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
    
              Soft UI Dashboard
            </span>
          </a>
        </li>
    </div>
        <div class="py-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light shadow-sm components-section">
                        <div class="card-body">
                            <div class="mb-3 mt-5">
                                <h1>Bienvenue mr/Mme  {{auth()->user()->name}} Dans Le Systeme Du Centre Medical  La Life </h1>
{{-- <h3>votre  password est:{{auth()->user()->password}}</h3> --}}
                            </div>
                        </div>
      <h2>votre email:{{auth()->user()->email}}</h2>  
                                <div>Mail valide avec succès</div>
                                <h4 class="mt-4 mb-0 leading-normal text-size-sm"> <a
                                    href="{{ route('login') }}" class="font-bold text-slate-700">lien deconnexion</a>
                            </h4>
       
      <p>Thank you</p>
  </body>