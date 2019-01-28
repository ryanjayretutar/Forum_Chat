
<ul class="nav nav-tabs mr-auto">
   <li class="nav-item ">
    <a class="nav-link" href="forum.php">Forum <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="chat.php?id=1">Chat</a>
  </li>
 
</ul>
	<form class="form-inline my-2 my-lg-0">
		<ul class="nav nav-tabs mr-auto">
		<?php if($user->get_session()){ 
			$log = array('user_id' => $_SESSION['id']);
			$users = $user->fetch_data_byId("user_info", $log);

			?>


		   <li class="nav-item ">
            <a class="nav-link" href="forum.php">Welcome, <?php echo $users['first_name']; ?><span class="sr-only">(current)</span></a>
          </li>
         
           <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
      <?php }else{

          $_SESSION['login'] = false;
       ?>

		
		  <li class="nav-item ">
            <a class="nav-link active" href="login.php">Login<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registration.php">Register</a>
          </li>
           
      <?php } ?>
    
	</ul>
     
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>