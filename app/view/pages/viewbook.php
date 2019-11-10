<!DOCTYPE html>

<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px;}
#book_form{padding:50px;}
label{display:inline-block; width:220px; }
th, td{width:120px; text-align:left;}

</style>

</head>
<body>
  <div id="book_form">
    <h2>All Data of Book</h2>
    <a href="<?php echo URLROOT; ?>home/create" class="btn btn-success pull-right">Add New Book</a>
    <br/>
   
    <table>
      <thead>
        <tr>
          <th>Book ID</th>
          <th>Title</th>
          <th>Author</th>
          <th>Total of Pages</th>
          <th>Genre</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while($row = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['title']; ?></td>
          <td><?php echo $row['author']; ?></td>
          <td><?php echo $row['pages']; ?></td>
          <td><?php echo $row['genre']; ?></td>
          <td> <a href="<?php echo URLROOT; ?>home/update/<?php echo $row['id']; ?>">Edit</a></td>
          <td> <a href="<?php echo URLROOT; ?>home/delete/<?php echo $row['id'];  ?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
 </div>
</body>
</html>
?>