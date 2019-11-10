<!DOCTYPE html>
    <html>
    <head>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
    body{font-family: 'Open Sans', sans-serif; color:#333; font-size:14px;}
    #book_form{padding:50px;}
    label{display:inline-block; width:140px; }
    </style>
    </head>
    <body>
      <div id="book_form">
        <h1>INPUT DATA OF BOOK</h1>
        <br/>
        <h3> Plese enter your book</h3>
       <form action="<?php echo URLROOT; ?>home/create" method="POST">
         <p>
         <label>Book Title</label>
         <input type="text" name="title" size="30" value="<?php echo $data['title']; ?>">
         </p>
         <p>
         <label>Author Name</label>
         <input type="text" name="author" size="30" value="<?php echo $data['author']; ?>" >
         </p>
         <p>
         <label>Total of Pages</label>
         <input type="text" name="pages" size="30" value="<?php echo $data['pages']; ?>">
         </p>
         <p>
         <label>Genre</label>
         <input type="text" name="genre" size="30" value="<?php echo $data['genre']; ?>">
         </p>
         <p>
         <input type="submit" name="save" value="Create Book">
         </p>
       </form>
     </div>
    </body>
    </html>