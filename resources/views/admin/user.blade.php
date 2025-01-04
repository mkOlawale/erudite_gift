<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eruditegift Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
    /* Table Container */
.table-container {
    margin: 20px auto;
    padding: 20px;
    max-width: 100%;
    overflow-x: auto; /* Makes the table scrollable horizontally on smaller screens */
    /* background: #fff; */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Table Styling */
.responsive-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    font-size: 14px;
}

/* Table Header */
.responsive-table thead {
    background: #007bff;
    color: #fff;
}

.responsive-table thead th {
    padding: 12px 8px;
    text-transform: uppercase;
    font-size: 12px;
}

/* Table Body */
.responsive-table tbody tr:nth-child(even) {
    background: #f8f9fa;
}

.responsive-table tbody tr:hover {
    background: #f1f1f1;
    color: black
}

.responsive-table tbody td {
    padding: 10px 8px;
    border: 1px solid #ddd;
}

/* Responsive Design */
@media (max-width: 768px) {
    .responsive-table thead {
        display: none;
    }

    .responsive-table tbody td {
        display: block;
        text-align: right;
        position: relative;
        padding-left: 50%;
        white-space: nowrap;
    }

    .responsive-table tbody td:before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        font-weight: bold;
        text-transform: uppercase;
    }
}

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
     @include('admin.nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          <h1>All Order</h1>

          <form action="{{ url('search_route') }}" class="searchForm" method="get">
            @csrf
            <input type="text" name="searchText" class="INPUT_STYLE" placeholder="Enter Your search">
            <input type="submit">
          </form>
       <div class="table-container">
          <table class="responsive-table">
            <thead>
            <tr>
                <th class="th_header">User id</th>
                <th class="th_header">Name</th>
                <th class="th_header">Email</th>
                <th class="th_header">Phone Number</th>    
            </tr>
          </thead>
          @foreach($users as $user)
            <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
            </tr>
          </tbody>
            @endforeach
          </table>
       </div>
   </div>
  </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>