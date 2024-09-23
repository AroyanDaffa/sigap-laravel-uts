<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Warehouse</title>
    <link rel="stylesheet" href="/css/style3.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <section id="menu">
        <div class="logo"><img src="css/images.png" alt="Warehouse Logo">
        <h2>Warehouse</h2>
    </div>
    <div class="items">
        <li><i class='bx bxs-dashboard'></i><a href="#">Dashboard</a></li>
        <li><i class='bx bxs-category-alt'></i><a href="#">Category</a></li>
        <li><i class='bx bxl-product-hunt'></i><a href="{{ url('/product') }}">Product</a></li>
        <li><i class='bx bxs-user-rectangle'></i><a href="#">Customers</a></li>
        <li><i class='bx bxs-cart'></i><a href="#">Supplier</a></li>
    </div>
    </section>
    <section id="main-content" class="container mt-4">
        <h1 class="text-center">Product Page</h1>
        <div class="row">
            <div class="col-md-12">
                <h2>List of Products</h2>
                <table class="table table-striped" id="productTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data produk akan ditambahkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Add New Product</h2>
                <form id="productForm">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="text" class="form-control" id="productName" placeholder="Enter product name" required>
                    </div>
                    <div class="form-group">
                        <label for="productCategory">Category</label>
                        <input type="text" class="form-control" id="productCategory" placeholder="Enter category" required>
                    </div>
                    <div class="form-group">
                        <label for="productPrice">Price</label>
                        <input type="number" class="form-control" id="productPrice" placeholder="Enter price" required>
                    </div>
                    <div class="form-group">
                        <label for="productStock">Stock</label>
                        <input type="number" class="form-control" id="productStock" placeholder="Enter stock quantity" required>
                    </div>
                    <button type="submit" class="btn btn-success">Add Product</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('productForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const name = document.getElementById('productName').value;
            const category = document.getElementById('productCategory').value;
            const price = document.getElementById('productPrice').value;
            const stock = document.getElementById('productStock').value;

            const table = document.getElementById('productTable').getElementsByTagName('tbody')[0];

            const newRow = table.insertRow();
            newRow.innerHTML = `
                <td>${table.rows.length + 1}</td>
                <td>${name}</td>
                <td>${category}</td>
                <td>$${parseFloat(price).toFixed(2)}</td>
                <td>${stock}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            `;

            // Reset form
            this.reset();
        });
    </script>
</body>
</html>
