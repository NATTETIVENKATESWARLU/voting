<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}


$data=$_SESSION['data'];

if($_SESSION['status']==1){
    $status='<b class="text-success">voted</b>';

}else{
    $status='<b class="text-danger">Not voted</b>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voting system -dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--css file-->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5">
         <!--button to logout-->
<a href="../"><button class="btn btn-dark text-light px-3">back</button></a>
<a href="logout.php"><button class="btn btn-dark text-light px-3">logout
</button></a>
<h1 class="my-3">voting System</h1>
<div class="row my-5">
    <!--groups-->
    <div class="col md-7">
        <?php
        if(isset($_SESSION['groups'])){
            $groups=$_SESSION['groups'];
            for($i=0;$i<count($groups);$i++){
                ?>
                <div class="row">
                <div class="col-md-4">
                    <img src="../uploads/<?php echo $groups[$i]['photo']?>" alt="group image">
                </div>
                <div class="col-md-8">
                    <strong class="text-dark h5">group name:</strong>
                    <?php echo $groups[$i]['username']?><br>
                    <strong class="text-dark h5">votes:</strong>
                    <?php echo $groups[$i]['votes']?><br>
                </div>
            </div>
            <!-- voting buttons-->
            <form action="../actions/voting.php" method="POST">
                <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']?>">
                <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']?>">
                <!-- button-->
                <?php
                
                if($_SESSION['status']==1){
                    ?>
                    <button class="bg-success my-3 text-white px-3">voted</button>
                    <?php

                }else{?>
                    <button class="bg-danger my-3 text-white px-3 " type="submit">voted</button>
                    <?php
                }
                ?>
            </form>
            <hr>
            <?php
            }
    }else{
        ?>
        <div class="container">
            <p>no groups to display</p>
        </div>
        <?php
    }

        ?>
        <!--groups-->

    </div>
    <div class="col md-5">
        <!--user profile-->
        <img src="../uploads/<?php echo $data['photo']?>" alt="user image">
        <br>
        <br>
        <strong class="text-dark h5">name:</strong>
        <?php echo $data['username']?><br><br>
        <strong class="text-dark h5">mobile:</strong>
        <?php echo $data['mobile']?><br><br>
        <strong class="text-dark h5">status:</strong>
        <?php echo $status?><br><br>
    </div>
</div>
    </div>
</body>
</html>