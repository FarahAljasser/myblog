<?php
include('include/connection.php');
include('include/header.php');

$id = $_GET['id'];

?>

    <!-- Start Content-->
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="text-align: right;">
                <div class="col-md-2" id="side-area">
                        <h4> لوحة التحكم </h4>
                          <ul>
                              <li>
                               <a href="categories.php">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                        <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586l7 7L13.586 9l-7-7H2v4.586z"/>
                                        </svg><i><b> الاقسام </b></i></span>
                              </a>
                          </li>
                          <!-- Articles -->
                          
                          <li data-toggle="collapse" data-target="#menu">
                              <a href="#">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
                                  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
                                  <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
                                  </svg><i><b> المقالات </b></i></span>
                              </a>
                          </li>
                          
          
                          <ul class="collapse" id="menu">
                              <li>
                                  <a href="new-post.php">
                                      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                      </svg></i> مقال جديد </i></span>
                                  </a>
                              </li>
                              
                              <li>
                                  <a href="posts.php">
                                      <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
                                      <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                      </svg><i> كل المقالات </i></span>
                                  </a>
                              </li>
                              
                          </ul>
                              
                          
                              
                          
                          <li>
                              <a href="index.php" target="_blank">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tablet-landscape" viewBox="0 0 16 16">
                                        <path d="M1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm-1 8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v8z"/>
                                        <path d="M14 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                                        </svg><i><b> عرض الموقع </b></i></span>
                              </a>
                          </li>
                          
                          <li>
                              <a href="logout.php">
                                  <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                        </svg><i><b> تسجيل الخروج </b></i></span>
                              </a>
                          </li>
                      </ul>
                  </div>
          
          
              <div class="col-md-10" class="main-area">
                <button class="custom-btn">كل المقالات</button>
                    <!-- Display all posts -->
                    <div class="display-data mt-4">

                      <?php
                      if(isset($id)){
                        $query = "DELETE FROM posts WHERE id = '$id'";
                         $delete = mysqli_query($conn,$query);

                          if(isset($delete)){
                            echo "<div class='alert alert-success'>" . "تم حذف المقال بنجاح" . "</div>";
                          }
                          else{
                            echo "<div class='alert alert-danger'>" . "عفواً حدث خطأ ما" . "</div>";
                          }
                      }
                       ?>

                    <table class="table table-ordered">
                            <tr>
                                <th>رقم المقال</th>
                                <th>عنوان المقال</th>
                                <th>كاتب المقال</th>
                                <th>صورة المقال</th>
                                <th>تاريخ المقال</th>
                                <th>حذف المقال</th>
                            </tr>
                    <?php
                        $query = "SELECT * FROM posts ORDER BY id DESC";
                        $res = mysqli_query($conn,$query);
                        $num = 0;
                        while($row = mysqli_fetch_assoc($res)){
                            $num++;
                            ?>
                            <tr>
                                <td><?php echo $num; ?></td>
                                <td><?php echo $row['postTitle'] ;?></td>
                                <td><?php echo $row['postAuthor'] ;?></td>
                                <td><img src="uploads/<?php echo $row['postImage'] ;?> " width="70px" height="50px"></td>
                                <td><?php echo $row['postDate'] ;?></td>
                                <td><a href="posts.php?id=<?php echo $row['id']; ?>"><button class="custom-btn">حذف المقال</button><a></td>
                            </tr>

                            <?php
                        }
                    ?>
                  </table>
                    </div>
                </div>
          </div>
      </div>
  </div>
              
        <!-- End Content-->

<?php
include('include/footer.php');
?>
