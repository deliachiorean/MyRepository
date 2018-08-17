<?php include('server.php');
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit_state=true;
    $rec= mysqli_query($db,"SELECT * FROM person WHERE id=$id");
    $record=mysqli_fetch_array($rec);
    $name=$record['name'];
    $address=$record['address'];
    $continent=$record['continent'];
    $id=$record['id'];


}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>InsertUpdateDeleteMySqlDb</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if(isset($_SESSION['msg'])): ?>
<div class="msg">
    <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    ?>
</div>
   <?php  endif ?>
<table><thead>
<tr>
    <th>Name</th>
    <th>Address</th>
    <th>Continent</th>
    <th colspan="2">Action</th>
</tr>
</thead>
    <tbody>
    <?php while($row= mysqli_fetch_array($results)){ ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['continent']; ?></td>
        <td>
            <a href="InsertUpdateDelete.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
        </td>
        <td>
            <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
        </td>
    </tr>
    <?php }?>
    </tbody>
</table>

<form method="post" action="server.php">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <div class="input-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $name;?>">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php echo $address;?>">
    </div>
    <div class="input-group">
        <label>Continent</label>
        <input type="text" name="continent" value="<?php echo $continent;?>">
    </div>
    <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button class="btn" type="submit" name="save" >Save</button>
        <?php else: ?>
            <button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>

        <?php endif ?>

    </div>
</form>
</body>
</html>