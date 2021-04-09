<?php  
session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //echo 'hii1';
        if(isset($_POST['Add_to_Cart']))
        {
            //echo 'hiii2';
            if(isset($_SESSION['cart']))
            {
                $myitems=array_column($_SESSION['cart'],'Item_Name');
                if(in_array($_POST['Item_Name'],$myitems))
                {
                    echo "<script> 
                        alert('Item already Added');
                        window.location.href='index.php';    
                    </script>";
                }
                else
                {
                    $count=count($_SESSION['cart']);
                    $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Item_Price'=>$_POST['Item_Price'],'Quantity'=>1);
                    echo "<script> 
                        alert('Item  Added');
                        window.location.href='index.php';    
                    </script>";
                }
            }
            else
            {
                //echo 'hiii3';
                $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Item_Price'=>$_POST['Item_Price'],'Quantity'=>1);
                //print_r($_SESSION['cart']);
                echo "<script> 
                    alert('Item  Added');
                    window.location.href='index.php';    
                </script>";
            }
        }
        if(isset($_POST['Remove_Item']))
        {
            foreach($_SESSION['cart'] as $key=> $value)
            {
                if($value['Item_Name']==$_POST['Item_Name'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo "<script>
                        alert('Item removed from cart');
                        window.location.href='mycart.php';
                    </script>";
                }
                
            }
        }

    }








?>