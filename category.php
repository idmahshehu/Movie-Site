<?php
include 'movies.php';
include 'db.php';
?>

<div class="container-cs">
    <div class="head" style="text-align: center; padding: 10px 0px 10px 0px;">
        <h1>Categories of Night Owl</h1>
    </div>
    <a href="addcategory.php" class="btn btn-info text-dark" >Add a Category</a>
    <hr>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Category ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">No. of Post</th>
            </tr>
        </thead>

        <?php
        $query = "SELECT * FROM category";
        $run = mysqli_query($conn,$query);
        if($run){
            while($row = mysqli_fetch_assoc($run)){
        
        ?>
                
                <tbody class="table table-striped table-dark">
                    <tr>
                    <td><?php echo $row['category_id']; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['post']; ?></td>
                    </tr>
                </tbody>
        <?php
            }
        }
        ?>

    </table>
</div>
