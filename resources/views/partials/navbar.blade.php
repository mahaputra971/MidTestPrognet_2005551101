<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark z-index-3 py-3">
    <div class="container">
        <a class="navbar-brand text-white pl-2" href="/" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
            <img src="/img/LOGO.png"  alt="gambar" width="50" height="50"> Oleh - Oleh Online Bali
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('Produks') }}" class= "nav-link ps-2 d-flex cursor-pointer align-items-center">
                        <i class="material-icons opacity-6 me-2 text-md">home</i>
                        Paket Card            
                    </a>          
                </li>  
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('Produk') }}"class="nav-link ps-2 d-flex cursor-pointer align-items-center" >
                        <i class="material-icons opacity-6 me-2 text-md">shop</i>
                        Produk            
                    </a>          
                </li>  
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('Kategori') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center" >
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Kategori           
                    </a>          
                </li>  
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('Paket') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center" >
                        <i class="material-icons opacity-6 me-2 text-md">book</i>
                        Paket           
                    </a>          
                </li>   
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('DetailPaket') }}" class="nav-link ps-2 d-flex cursor-pointer align-items-center" >
                        <i class="material-icons opacity-6 me-2 text-md">edit</i>
                        Detail Paket            
                    </a>          
                </li>  
                
            </ul>     
        </div>
    </div>
</nav>