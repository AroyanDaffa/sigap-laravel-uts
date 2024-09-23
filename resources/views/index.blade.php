<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Warehouse</title>
    <link rel="stylesheet" href="/css/style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section id="menu">
        <div class="logo"><img src="css/images.png" alt="Warehouse Logo">
        <h2>Warehouse</h2>
    </div>
    <div class="items">
    <li><i class='bx bxs-dashboard'></i><a href="/index">Dashboard</a></li>
    <li><i class='bx bxs-category-alt'></i><a href="{{ url('/category')}}">Category</a></li>
    <li><i class='bx bxl-product-hunt'></i><a href="{{ url('/product') }}">Product</a></li>
    <li><i class='bx bxs-user-rectangle'></i><a href="#">Customers</a></li>
    <li><i class='bx bxs-cart'></i><a href="#">Supplier</a></li>
</div>
    </section>
    <section id="main-content">
        <!-- Header Section -->
        <header>
            <div class="search">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" placeholder="Search">
            </div>
            <!-- <div class="header-title">
                <h1>Welcome to the Warehouse Dashboard</h1>
            </div> -->
            <div class="user-profile">
                <i class='bx bxs-bell' ></i>&nbsp; &nbsp;
                <img src="css/admin.png" alt="User Profile">
            </div>

        </header>
        <!-- Dashboard Overview Section -->
        <h1>Welcome, Admin</h1>
        <div class="dashboard-overview">
            <div class="overview-card">
                <h3>Total Products</h3>
                <p>1,234</p>
            </div>
            <div class="overview-card">
                <h3>Categories</h3>
                <p>12</p>
            </div>
            <div class="overview-card">
                <h3>Customers</h3>
                <p>456</p>
            </div>
            <div class="overview-card">
                <h3>Suppliers</h3>
                <p>34</p>
            </div>
            
        </div>
    </section>
    
</body>
</html>