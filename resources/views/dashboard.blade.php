<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>Komisi Yudisial</title>
</head>

<body>

    <div class="screen-cover d-none"></div>
    <div class="row position-relative">


        <div class="col-12 col-lg-2 col-xl-1 col-navbar d-block">

            <aside class="sidebar">
                <div class="d-flex flex-column justify-content-center align-items-center sidebar-top">

                    <a href="#">
                        <img src="{{ asset('images/icon.png') }}" alt="">
                    </a>

                </div>


                <div class="sidebar-item-container d-flex flex-column justify-content-center align-items-center">

                    <a href="#" class="sidebar-item active" onclick="toggleActive(this)">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 14H14V21H21V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 14H3V21H10V14Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 3H14V10H21V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M10 3H3V10H10V3Z" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>

                </div>

            </aside>

        </div>

        <div class="col-12 col-lg-10 col-xl-11">
            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-start">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="./assets/img/global/logo.svg" alt="">
                        </button>

                        <div class="d-none d-sm-flex flex-column justify-content-start align-items-start">
                            <h2 class="nav-title">Komisi Yudisial</h2>
                            <h5 class="nav-desc">Republik Indonesia</h5>
                        </div>
                    </div>

                    @auth
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            Halo, {{Auth::user()->name}}!
                            @if (Auth::user()->avatar)
                            <img src="{{Auth::user()->avatar}}" class="user-photo" alt="">  
                            @else
                            <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo" alt="" style="border-radius: 50%">
                            @endif
                          
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto">
                                <li>
                                    <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="get" style="display: none">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </li>
                           </ul>
                        </a>
                       
                    </div>
                    @endauth
                   
                </div>

                <div class="d-flex d-sm-none flex-column justify-content-start align-items-start mt-4">
                    <h2 class="nav-title">Order Foods</h2>
                    <h5 class="nav-desc">Your happiness starts here</h5>
                </div>

            </div>

            <div class="content">
                <ul class="nav nav-tabs d-flex justify-content-start align-items-start" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="true">Apps</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">

                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="{{ asset('images/icon.png') }}" alt="">
                                    </div>

                                    <h3 class="food-name">Eklinik</h3>

                                    <a href="https://eklinik.komisiyudisial.go.id" class="btn food-btn">Go to apps</a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="{{ asset('images/icon.png') }}" alt="">
                                    </div>

                                    <h3 class="food-name">JDIH</h3>

                                    <a href="https://jdih.komisiyudisial.go.id" class="btn food-btn">Go to apps</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="my-tab-pane" role="tabpanel" aria-labelledby="my-tab" tabindex="0">

                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="./assets/img/global/food/photo.png" alt="">
                                    </div>

                                    <h3 class="food-name">Vegan Mix</h3>
                                    <h5 class="food-price">$18,000</h5>

                                    <button class="food-btn">Add to Cart</button>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="./assets/img/global/food/photo-1.png" alt="">
                                    </div>

                                    <h3 class="food-name">Ayam Soup</h3>
                                    <h5 class="food-price">$23,000</h5>

                                    <button class="food-btn">Add to Cart</button>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="food-card d-flex justify-content-center align-items-center flex-column">
                                    <div class="food-img">
                                        <img src="./assets/img/global/food/photo-3.png" alt="">
                                    </div>

                                    <h3 class="food-name">Burger King</h3>
                                    <h5 class="food-price">$19,500</h5>

                                    <button class="food-btn">Add to Cart</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        const right = document.querySelector('.col-right-sidebar')
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        function toggleRightSidebar() {
            right.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        cover.addEventListener('click', e => {
            cover.classList.add('d-none')
            right.classList.remove('appear')
            navbar.classList.remove('appear')
        })

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')
        }

        function increaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            inp.value = ++current
        }

        function decreaseNumber(e) {
            let inp = e.closest('div').querySelector('.input-number')
            let current = inp.value

            if (current !== "0") {
                inp.value = --current
            }
        }
    </script>
</body>

</html>