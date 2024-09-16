<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <title>Bukus-v2 || Register Customer</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/theme.min.css') }}">
</head>

<body>
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="card mb-4 mt-5 mx-4 mx-sm-0 position-relative">
                    <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-0 start-50">
                        <img src="{{ asset('assets/images/logo-abbr.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body p-sm-5">
                        <h2 class="fs-20 fw-bolder mb-4">Register Customer</h2>
                        <h4 class="fs-13 fw-bold mb-2">Create a new customer account</h4>
                        <form action="{{ route('register') }}" method="POST" class="w-100 mt-4 pt-2">
                            @csrf
                            <div class="mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="city" class="form-control" placeholder="City" value="{{ old('city') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="province" class="form-control" placeholder="Province" value="{{ old('province') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code" value="{{ old('postal_code') }}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" name="country" class="form-control" placeholder="Country" value="{{ old('country') }}" required>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-lg btn-primary w-100">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('admin/assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/common-init.min.js') }}"></script>
</body>

</html>
