<?php
if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
{
?>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
        function deleteConfirm() 
        {
            if(confirm("Are you sure to delete!"))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>
    <?php
        include_once("connection.php");
        if(isset($_GET["function"]) =="del")
        {
            if(isset($_GET["id"]))
            {
                $id = $_GET["id"];
                pg_query($conn, "DELETE FROM product Where Product_ID='$id'");
            }
        }
    ?>

        <form name="frm" method="post" action="">
        <h1>Product Management</h1>
        <p>
        	<a href="?page=Add_Product"><img src="images/add.png"alt="Thêm mới" width="16" height="16" border="0" /> Add new</a>
        </p>
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Product ID</strong></th>
                    <th><strong>Product Name</strong></th>
                    <th><strong>Price</strong></th>
                    <th><strong>Quantity</strong></th>
                    <th><strong>Category ID</strong></th>
                    <th><strong>Image</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
                include_once("connection.php"); 
                $No = 1;
                $result = pg_query($conn, "SELECT  Product_ID, Product_Name, Price, Pro_qty, Pro_image, Cat_Name FROM product a, category b
                Where a.Cat_ID = b.Cat_ID ORDER BY ProDate DESC");
                while($row=pg_fetch_array($result, PGSQL_ASSOC))
                {
			?>
			<tr>
              <td ><?php echo $No; ?></td>
              <td ><?php echo $row['Product_ID'] ?></td>
              <td><?php echo $row['Product_Name'] ?></td>
              <td><?php echo $row['Price'] ?></td>
              <td ><?php echo $row['Pro_qty'] ?></td>
              <td><?php echo $row['Cat_Name'] ?></td>
             <td align='center' class='cotNutChucNang'>
                 <img src='images/<?php echo $row['Pro_image']?>' border='0' width="50" height="50"  /></td>
             <td align='center' class='cotNutChucNang' ><a href="?page=update_product&&id=<?php echo $row['Product_ID']; ?>"><img src='images/edit.png' border='0'/></td>
             <td align='center' class='cotNutChucNang'><a href="?page=product_management&&function=del&&id=<?php echo $row["Product_ID"]; ?>" onclick="return deleteConfirm()"><img src='images/delete.png' border='0' /></td>
            </tr>
            <?php
                $No ++;
                }
			?>
			</tbody>
        
        </table>  

 </form>
 <?php
}
else 
{
    echo '<script>alert("You are not administrator")</script>';
    echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}
?>