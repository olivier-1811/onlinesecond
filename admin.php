<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selecting data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    table{
        padding: 15px;
        margin-left: 30%;
    }
    th{
        font-size: 15px;
        font-style: italic;
    }
    td{
         font-size: 15px;
        font-style: oblique;
    }
    h1{
        text-align: center;
    }
</style>
<body>
    <p><h1>WELCOME ADMIN THIS IS ALL USER INFO🧑</h1></p>
    <table border="15 px solid blue">
        <tr>
            <th>Id 🆔</th>
            <th>fullname 🆕</th>
            <th>E-mail 📧</th>
            <th>Password 🔑</th>
           
        </tr>
        <?php
        include 'conect.php';
        $ff="SELECT*FROM user";
        $fff=mysqli_query($conn,$ff);
        while($d=mysqli_fetch_assoc( $fff )){
        ?>

        <tr>
<td><?php echo $d['id']; ?></td>
<td><?php echo $d['fullname']; ?></td>
<td><?php echo $d['email']; ?></td>
<td><?php echo $d['password']; ?></td>

        </tr> <?php
}
    ?>
        
    </table>

   
</body>
</html>