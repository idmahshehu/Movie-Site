<?php
include 'category.php';
include 'db.php';
?>

<div class="container">
    <div class="head">
        <div class="jumbotron">
            <h1 class="display-4">Add a Category</h1>
            <p class="lead">Add a Category and also mention their Category ID</p>
            <hr class = "my-4">
            <form action="addcategory.php" method="post">
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" name="catname" class="form-control" placeholder="Category Name">
                    </div>
                    <div class="col">
                        <input type="text" name="catid" class="form-control" placeholder="Category ID">
                    </div>
                </div>
                <br><br>
                <button class="btn btn-info btn-lg" name="submit">Add Category</button>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])){
    $catname = $_POST['catname'];
    $catid = $_POST['catid'];

    $query = "INSERT INTO `category`(`category_id`, `category_name`) VALUES ($catid,'$catname')";
    $run = mysqli_query($conn,$query);
    if($run){
        echo "<script>alert('Category Added!'); window.location.href='category.php';</script>";


    }
    else{

        echo "<script>alert('There Was A Problem While adding Category'); window.location.href='addcategory.php';</script>";
    }
}
?>