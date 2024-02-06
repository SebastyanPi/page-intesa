<nav class="container-fluid bg-n-gray-01 " id="newNav">
    <div class="px-xl-5 py-2">
        <div class="row">
            <div class="col-md-auto">
              <span class="nav-n-option">
                    <a class="text-dark" href="{{ route('pages.virtual.auxadmin') }}">
                        <i class="fas fa-user-tie"></i>  Auxiliar Administrativo 
                    </a>
                </span> 
            </div>

            <div class="col-md-auto">
                |
            </div>
            <div class="col-md-auto">
                
                <span class="nav-n-option">
                    <a class="text-dark" href="{{ route('pages.virtual.auxinfancia') }}">
                        <i class="fas fa-baby"></i>  Atención a la Primera Infancia  
                    </a>
                   
                </span>
            </div>
            <div class="col-md-auto">
                |
            </div>
            <div class="col-md-auto">
                <span class="nav-n-option">
                    <a class="text-dark" href="{{ route('pages.virtual.seguridad') }}">
                        <i class="fas fa-hard-hat"></i> Seguridad En El Trabajo
                    </a>
                   
                </span>
                
            </div>
        </div>
    </div>
  </nav>

  <script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            //document.body.style.backgroundColor = "yellow";
            document.getElementById('newNav').classList.add('d-none');
        }else{
            document.getElementById('newNav').classList.remove('d-none');
        }
    }

    // Create a MediaQueryList object
    var x = window.matchMedia("(max-width: 900px)")

    // Call listener function at run time
    myFunction(x);

    // Attach listener function on state changes
    x.addEventListener("change", function() {
    myFunction(x);
    });
  </script>
     