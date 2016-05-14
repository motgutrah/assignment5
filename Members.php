<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
   <style type = "text/css">
         body  { font-family: sans-serif;
                 background-color: lightyellow; } 
         table { background-color: lightblue; 
                 border-collapse: collapse; 
                 border: 1px solid gray; }
         td    { padding: 5px; }
         tr:nth-child(odd) {
                 background-color: white; }
      </style>
   </head>
   <body>
      <?php
        
        
         $UserName = $_POST['UserName'] ;
         $Password = $_POST['Password'] ;
         $Email = $_POST['Email'];
         $Name = $_POST['Name'];
          
         
                 $query = "INSERT INTO members (Name, UserName, Email, Password)
                  VALUES ('$UserName', '$Name', '$Email', '$Password')";
         if ( !( $database = mysqli_connect( "fdb12.biz.nf",
            "2102435_jvalen14", "Charredgato2" ) ) )                      
            die( "Could not connect to database </body></html>" );
  
         if ( !mysqli_select_db( $database , "2102435_jvalen14" ))
            die( "Could not open products database </body></html>" );

         if ( !( $result = mysqli_query( $database, "INSERT INTO members (Name, UserName, Email, Password)
                  VALUES ($fullname, $username, $email, $password)") ) ) 
         {
            print( "<p>Could not execute query!</p>" );
            die( mysqli_error($database) . "</body></html>" );
         } 

         mysqli_close( $database );
      ?><!-- end PHP script -->
      
      <p> Registration was Successful</p>
   </body>
</html>
