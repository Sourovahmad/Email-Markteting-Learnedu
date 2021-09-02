<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>


    <!-- Background image-->
    <main-background class="main-bg" style="background-image: {{ asset('image/ffff.jpg') }}"></main-background>

    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div class="alert alert-success">
                        @if (is_array(session('success')))
                            <ul>
                                @foreach (session('success') as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @else
                            {{ session('success') }}
                        @endif
                    </div>
                @endif







                <!-- <img src="image/learnedulogo.jpeg" alt=""> -->
                <h1 class="fst-italic lh-1 mb-4">Our Website is Coming Soon</h1>
                <p class="mb-5">We're working hard to finish the development of this site. Sign up below to receive
                    updates and to be notified when we launch!</p>

                <form id="contactForm" method="post" action="{{ route('storemail') }}">
                    @csrf
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" name="mail" id="email" type="email"
                                placeholder="Enter email address..." aria-label="Enter email address..."
                                data-sb-validations="required,email" />
                        </div>
                        <div class="col-auto">
                            <button class="btn" type="submit" id="submitButton" type="submit">Notify
                                Me!</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div class="social-icons">
        <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
