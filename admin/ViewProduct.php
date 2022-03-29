<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <title>Document</title>
    <style>
        .container {
            width: 80%;
            margin-left: 15rem;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    
    <div class="sidenav">
        <a href="AddProduct.php">Add Product</a>
        <a href="ViewProduct.php">View Product</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
        <a href="#contact">Logout</a>
    </div>
    <div class="container">
        <h2>Product Details</h2>
        <table>
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>
            </tr>
        </table>
    </div>
</body>

</html>