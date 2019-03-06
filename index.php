<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Log in</title>
 </head>
 <style media="screen">
   body {
     margin: 0;
     font-family: sans-serif;
     display: flex;
     justify-content: center;
     align-items: center;
   }

   form {
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: flex-start;
   }

   input[type="text"] {

   }

 </style>
 <body>
   <form action="externi_podaci.php" method="post">
     <input type="text" name="username" placeholder="username">
     <input type="text" name="password" placeholder="password">
     <input type="submit" name="submit" value="Login">
   </form>

 </body>
</html>