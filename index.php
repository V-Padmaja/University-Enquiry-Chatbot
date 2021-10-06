<?php 
session_start();
include('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>University Chatbot | Home Page</title>
    <link rel = "icon" href="https://img.icons8.com/dusk/64/000000/news.png"
        type = "image/x-icon"> 
        
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="chats/chatwindow.css" />

  </head>
  <body>
    
    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>
<?php } ?>

        </div>
        <!-- Sidebar Widgets Column -->

      
      <div class="chat-container"></div>
  <script src="chats/samplejs.js"/>           </script>
  <script type="text/javascript">
    var chatroom = new window.Chatroom({
      host: "http://localhost:5005",
      title: "University Enquiries",
      container: document.querySelector(".chat-container"),
      welcomeMessage: "Hi, I am your University Enquiry Bot. How may I help you?"
    });
    chatroom.openChat();
  </script>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>
  

</html>
<?php } ?>