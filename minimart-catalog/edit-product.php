<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Minimart Catalog | Edit Product</title>
</head>
<body class="bg-light" style="min-height:100vh;">
    <div class="container py-5">
        <div class="card w-50 mx-auto">
            <div class="card-header">
                <h1 class="display-5 card-title text-center">Edit Product</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control mb-3" value="" required>
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-3" required></textarea>
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control mb-3" value="" required>
                    <label for="section" calss="form-label">Section</label>
                    <select name="section_id" id="section" required class="form-select mb-3">
                        <!-- display section from the database -->
                        <option selected disabled>Select a section</option>
                    </select>
                    <input type="submit" value="Save" name="btn_submit" class="btn btn-success w-100">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>