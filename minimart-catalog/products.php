<?php
    session_start(); //connect to session
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Products</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <?php include "navbar.php"; ?>
    <div class="container py-5">
        <div class="w-75 mx-auto">
            <div class="text-end mb-4">
                <a href="add-product.php" class="btn btn-success btn-sm"><i class="fa-solid fa-circle-plus"></i> Add Product</a>        
            </div>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Section</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- display the products from the database -->
                    <?php
                        $products = getProducts();

                        if($products && $products->num_rows>0) //check if the sql statements runs successfully and if it has some results
                        {
                            while($row = $products->fetch_assoc())
                            {
                                echo "<tr>
                                        <td>".$row["id"]."</td>
                                        <td>".$row["title"]."</td>
                                        <td>".$row["description"]."</td>
                                        <td>".$row["price"]."</td>
                                        <td>".$row["section_id"]."</td>
                                        <td></td>
                                        <td></td>
                                    </tr>";
                            }
                        }
                        else
                        {
                            echo "<tr><td colspan='7' class='text-muted text-center fst-italic'>No products to display.</td></tr>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
<?php
    function getProducts()
    {
        $conn = dbConnect();
        $sql = "SELECT * FROM products"; //to be updated later on
        $result = $conn->query($sql);

        return $result;
    }
?>