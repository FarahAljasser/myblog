<?php
include ('include/connection.php');
include('public/header.php');

?>

    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                  <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM posts WHERE id='$id'";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_assoc($result);
                  ?>
                    <div class="post">
                        <div class="post-image">
                            <img src="uploads/<?php echo $row['postImage']; ?>">
                        </div>
                        <div class="post-title">
                            <h4><?php echo $row['postTitle']; ?></h4>
                        </div>
                        <div class="post-details">
                            <p class="post-info">
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                      <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                      <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                      <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                       </svg><?php echo $row['postAuthor']; ?></span>
                                <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                      <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                      </svg> <?php echo $row['postDate']; ?></span>
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                                      <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                      <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                                      </svg> <?php echo $row['postCat']; ?></span>
                            </p>
                            <p class="postContent">
                              <?php echo $row['postContent']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Catagories -->
                    <div class="categories">
                        <h4> القسم </h4>
                        <ul>
                          <?php
                            $query = "SELECT * FROM categories ORDER BY id DESC";
                            $result = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <li>
                                <a href="category.php?category=<?php echo $row['categoryName']; ?>">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                                      <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                      <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                                      </svg> <?php echo $row['categoryName']; ?></span>
                                    
                                    
                                </a>
                            </li>
                      <?php
                          }
                        ?>
                        </ul>
                    </div>
                    <!-- End Categories-->
                    
                    <!-- Start Latest Post-->
                    <div class="last-posts">
                        <h4>أحدث المنشورات</h4>
                        <ul>
                          <?php
                            $query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
                            $result = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <li>
                                <a href="post.php?id=<?php echo $row['id']; ?>">
                                    <span class="span-image"><img src="uploads/<?php echo $row['postImage']; ?>" alt="image1"></span>
                                    <span><?php echo $row['postTitle']; ?></span>
                                </a>
                            </li>
                            <?php
                                }
                             ?>
                        </ul>
                    </div>
                    <!-- End Latest Posts -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
<?php
  include('public/footer.php');
 ?>