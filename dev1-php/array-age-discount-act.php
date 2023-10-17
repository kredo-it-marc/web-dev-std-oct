<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Kredo Cafe</title>
</head>
<body>
    <div class="container py-5">
        <div class="card w-25 mx-auto">
            <div class="card-body">
                <!-- 1st Form -->
                <form action="" method="post">
                    <label for="no-of-customers" class="form-label">How many people are going to eat at the cafe?</label>
                    <input type="number" name="no_of_customers" id="no-of-customers" required class="form-control mb-3" required min="1">
                    <input type="submit" value="Set" class="btn btn-success btn-sm w-100" name="btn_set">
                </form>
            </div>
        </div>
        <!-- 2nd form -->
        <?php
            if(isset($_POST["btn_set"]))
            {
                //INPUT
                $no_of_customers = $_POST["no_of_customers"];

                //PROCESS
                echo "<hr><div class='card w-25 mx-auto my-4'><div class='card-body'><form method='post'>";
                for($i=1; $i<=$no_of_customers; $i++)
                {
                    echo "<label class='form-label' for='customer-$i'>Customer #$i</label>";
                    echo "<input type='number' name='ages[]' id='customer-$i' class='form-control mb-3' required min='0' max='100'>";
                }
                echo "<input type='submit' class='btn btn-success w-100' value='Save' name='btn_save'>";
                echo "</form></div></div>";
            }
        
        ?>

        <!-- OUTPUT -->
        <?php
            if( isset($_POST["btn_save"]) )
            {
                //INPUT
                $ages = $_POST["ages"];
                $ages_count = count($ages);

                //PROCESS
                $prices = calculatePrice($ages);
                $total_price = calculateTotalPrice($prices);

                //OUTPUT
                echo "<table class='table w-50 mx-auto table-bordered mt-5'>
                        <thead class='table-dark'>
                            <tr><th>Age</th><th>Price</th></tr>
                        </thead>
                        <tbody>";
                        
                        for($i=0; $i<$ages_count; $i++)
                        {
                            echo "<tr><td>".$ages[$i]."</td><td>".$prices[$i]."</td></tr>";
                        }
                echo "<tr class='table-danger'><td>Total Price</td><td>$total_price</td></tr>";
                echo "<tr class='table-primary'><td>Total Number of Customers</td><td>$ages_count</td></tr>";
                echo "<tbody></table>";
            }
        ?>
    </div>
</body>
</html>
<?php
    function calculatePrice($ages)
    {
        $regular_price = 325;
        $prices = [];

        foreach($ages as $age)
        {
            if(0<=$age && $age<=5) //check if age is between 0-5
            {
                array_push($prices, 0);
            }
            elseif(6<=$age && $age<=10) //check if the age is between 6-10
            {
                $discounted_price = $regular_price * .90; //apply 10% discount
                array_push($prices, $discounted_price);
            }
            elseif(60 <= $age) //check if age is greater than 60
            {
                $discounted_price = $regular_price * .95; //apply 5% discount
                array_push($prices, $discounted_price);
            }
            else
            {
                array_push($prices, $regular_price);
            }
        }  
        
        return $prices;
    }

    function calculateTotalPrice($prices)
    {
        $total = 0;

        foreach($prices as $x)
        {
            $total += $x; //$total = $total + $x;
        }

        return $total;
    }
?>