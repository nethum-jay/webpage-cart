<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Order</title>
</head>
<body>
<?php include('./Model/Queries.php');?>
    <div>
        <div>
        <?php $result = getMenuItems();
        ?>
        </div>
        <table>
            <thead>
            
            </thead>
            <tbody>
                <tr>
                    <?php
                        while($row = $result->fetch_assoc()) {
                        
                        echo "
                        <tr>
                            <td>
                                <figure>
                                    <img src=". $row["image_url"]. " />
                                    <figcaption>". $row["title"]. "</figcaption>
                                    <p>" . $row["price"]. "</p>
                                    <button type=button onclick='cartOrder({".$row["price"]."})'>Add to cart</button>
                                </figure>
                            </td>
                        </tr>
                        ";
                        }
                    
                    ?>

                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function cartOrder() {

            alert("Function Called");
        }
    </script>
</body>
</html>