<?php include("header.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .center 
        {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
</head>
<body>
    <div style=" position:absolute;left:10px;top:50px"class="container-fluid">
        <div class="row">
            <div  class="col-lg-12 text-center  bg-light">
                <h1>Your Cart</h1>
            </div>
        </div> 
    </div>

    <div style=" position:absolute;left:200px;top:110px" class="container col-lg-8">       
        <table  class="table table-striped text-center">
            <thead>
            <tr>
                <th>Serial no.</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Quantity</th>
                <th>total</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php
                    
                    $sr=0;
                    
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            
                            $sr=$key+1;
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Item_Price]<input type='hidden' class='iprice' value='$value[Item_Price]'></td>
                                <td><input class='iquantity' type='number' onchange='subTotal()' value='$value[Quantity]' min='1' max='10'></td>
                                <td class='lt'></td>
                                <td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-danger'> Remove Item </button></td>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                            </tr>
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div style=" position:absolute;left:1100px;top:110px"  class="col-lg-2">
        <div class="border bg-warning rounded p-4">
            <h4> Total Amount: </h4>
            <h5 class="text-right" id="gt"></h5>
           
        </div>
        <form>
                <button class="btn btn-primary btn-success"> Proceed to buy </button>
        </form>

    </div>
    <script>
        var temp=0;
        var iprice=document.getElementsByClassName('iprice');
        var itotal=document.getElementsByClassName('lt');
        var iquant=document.getElementsByClassName('iquantity');
        var gt=document.getElementById('gt');
        function subTotal()
        {
            temp=0;
            for(i=0;i<iprice.length;i++)
            {
                itotal[i].innerText=(iprice[i].value)*(iquant[i].value);
                temp+=(iprice[i].value)*(iquant[i].value);
            }
            gt.innerText=temp;

        }
        subTotal();
    </script>

    
</body>
</html>