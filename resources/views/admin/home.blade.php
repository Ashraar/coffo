<x-admin-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="color: black">Users <a href="your-cart-link-here" style="color: black;">
                            <i class="fa fa-users"></i>
                        </a></div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $usersCount }}</h5>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-header"style="color: black">
                        Products  -
                        <a href="your-cart-link-here" style="color: black;">
                            <i class="fa fa-thumb-tack"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $productsCount }}</h5>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</x-admin-layout>