<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REGISTER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-5 col-md-4 col-lg-6 col-xl-5">
                     <div class="bg-light rounded p-4 p-sm-5 my-4 mx-7 shadow">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>SIMPEL PNC</h3>
                            </a>
                            
                        </div>
                        <h3 class="mb-3">Mendaftar</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required autofocus>
                                <label for="nama">Nama Lengkap</label>
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
        
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="npm_nidn_npak" name="npm_nidn_npak" value="{{ old('npm_nidn_npak') }}" required>
                                <label for="npm_nidn_npak">NPM = NIDN = NPAK</label>
                                @error('npm_nidn_npak')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
        
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                <label for="email">Email Anda</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
        
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="password" required>
                                <label for="password">Password</label>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  required>
                                <label for="password">Konfirmasi kembali password anda</label>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ttdpelapor" class="form-label">Tanda Tangan Pelapor</label>
                                <input class="form-control" name="tanda_tangan" type="file" id="tanda_tangan" multiple>
                                @error('tanda_tangan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>