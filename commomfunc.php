<?php
        function boyspg()
        {
        
        $con=mysqli_connect("localhost","root","","pgreg");

        if(!$con)
        {
            die("connection failed!!!");
        }
        
        $sql="SELECT * FROM `boysreg`";
        $result=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result))
        {
            
            $sl_no=$row['sl_no'];
            
        
        
    ?>      
            <div class="boyspglist">
            <div class="aryan">
            <img src="/pg_website/images/<?php echo $row['image1'];?>">
            <p class="head"><?php echo $row['pg_name']; ?></p>
            <p class="address"><?php echo $row['address']; ?></p>
            <p class="owner">Owner name-<?php echo $row['owner_name'];?></p>
            <p class="contact">Phone no-<?php echo $row['number'];?></p>
            <a class="anchor"><?php echo $row['sl_no']; ?></a>
            <div class="view">
            <?php echo"<a href='/pg_website/pgdesc.php?sl_no= $sl_no'>view</a> ";?>
            </div>
            </a> 
            </div>
            </div>
            

    <?php    
        }
    }
        

    ?>

<?php
        function girlspg()
        {
        
        $con=mysqli_connect("localhost","root","","pgreg");

        if(!$con)
        {
            die("connection failed!!!");
        }
        
        $sql="SELECT * FROM `girlsreg`";
        $result=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($result))
        {
            
            $sl_no=$row['sl_no'];
            
        
        
    ?>      
            <div class="boyspglist">
            <div class="aryan">
            <img src="/pg_website/images/<?php echo $row['image1'];?>">
            <p class="head"><?php echo $row['pg_name']; ?></p>
            <p class="address"><?php echo $row['address']; ?></p>
            <p class="owner">Owner name-<?php echo $row['owner_name'];?></p>
            <p class="contact">Phone no-<?php echo $row['number'];?></p>
            <a class="anchor"><?php echo $row['sl_no']; ?></a>
            <div class="view">
            <?php echo"<a href='/pg_website/pgdesc.php?sl_no= $sl_no'>view</a> ";?>
            </div>
            </a> 
            </div>
            </div>
            

    <?php    
        }
    }
        

    ?>


<?php
    function search(){
    

        if(isset($_GET['search_pg']))
        {

        $con=mysqli_connect("localhost","root","","pgreg");
        
        
        $user_search=$_GET['serach'];
            
        $sql="SELECT * FROM `boysreg` WHERE pg_name like '%$user_search%'";
        $search=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($search))
        {
            
            $sl_no=$row['sl_no'];
            
        
        
    ?>          
            
            <div class="boyspglist">
            <div class="aryan">
            <img src="/pg_website/images/<?php echo $row['image1'];?>">
            <p class="head"><?php echo $row['pg_name']; ?></p>
            <p class="address"><?php echo $row['address']; ?></p>
            <p class="owner">Owner name-<?php echo $row['owner_name'];?></p>
            <p class="contact">Phone no-<?php echo $row['number'];?></p>
            <a class="anchor"><?php echo $row['sl_no']; ?></a>
            <div class="view">
            <?php echo"<a href='/pg_website/pgdesc.php?sl_no= $sl_no'>view</a> ";?>
            </div>
            </a> 
            </div>
            </div>

    <?php    
        }
        }
        }
?>

<?php
    function search2(){
    

        if(isset($_GET['search_pg']))
        {

        $con=mysqli_connect("localhost","root","","pgreg");
        
        
        $user_search=$_GET['serach'];
            
        $sql="SELECT * FROM `girlsreg` WHERE pg_name like '%$user_search%'";
        $search=mysqli_query($con, $sql);

    while($row=mysqli_fetch_assoc($search))
        {
            
            $sl_no=$row['sl_no'];
            
        
        
    ?>          
           <div class="boyspglist">
            <div class="aryan">
            <img src="/pg_website/images/<?php echo $row['image1'];?>">
            <p class="head"><?php echo $row['pg_name']; ?></p>
            <p class="address"><?php echo $row['address']; ?></p>
            <p class="owner">Owner name-<?php echo $row['owner_name'];?></p>
            <p class="contact">Phone no-<?php echo $row['number'];?></p>
            <a class="anchor"><?php echo $row['sl_no']; ?></a>
            <div class="view">
            <?php echo"<a href='/pg_website/pgdesc.php?sl_no= $sl_no'>view</a> ";?>
            </div>
            </a> 
            </div>
            </div>


    <?php    
        }
        }
        }
?>
        
