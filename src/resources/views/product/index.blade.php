<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('head')

    @yield('guest-css')

    <title>@yield('title')</title>
   </head>
    <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Nahid Hasan</h5>

        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="#"></a>
            <a class="p-2 text-dark" href="#"></a>
            <a class="p-2 text-dark" href="#"></a>
            <a class="p-2 text-dark" href="#"></a>
        </nav>
        <a class="btn btn-outline-primary" href="https://nahidprince7.wixsite.com/nahid">Contact Details</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">CRUD APPLICATION FOR PRODUCTS</h1></div>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
    @yield('guest-js')
    </body>

    </html>

