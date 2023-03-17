

    <form action="action.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				include 'database.php';
				$ID= $_COOKIE["username"];

				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
        ?>
            
      <!--  <img src="upload/<?php echo $row['File'] ?>" height="150" width="150" style="border-radius:50%;display:block;margin-left:auto;margin-right:auto;" />-->
		<p class="hint-text"><br><b>Welcome </b><?php echo $row["First_Name"] ?> <?php echo $row["Last_Name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>

    
    <form action="action.php" method="get">      
      <input type="hidden" name="action" value="do_add"    />
      <div class="row justify-content-between text-white p-2">
        
            <div class="form-group flex-fill mb-2">
              <input id="todo-input" name="title" type="text" class="form-control" value="">
            </div>
            <button type="submit" class="btn btn-primary mb-2 ml-2"><?php echo LANG_ADD_ITEM;?></button>
        
      </div>
     </form> 
      <div class="row" id="todo-container">
          <?php for ($i=0;$i<count($items);$i++){ ?>
            
            <div class="col col-12 p-2 todo-item" todo-id="${todo.id}">
              <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <input type="checkbox"  >
                </div>
              </div>
              <input type="text" readonly class="form-control " aria-label="Text input with checkbox" value="<?php echo htmlspecialchars($items[$i]['title']);?>">
              <div class="input-group-append">
                <button  class="btn btn-outline-secondary bg-danger text-white" type="button"  id="button-addon3" 
                onclick="location='edit.php?item_id=<?php echo $items[$i]['item_id'];?>'"
                >
                <?php echo LANG_EDIT_ITEM; ?>
                </button>
                <button  class="btn btn-outline-secondary bg-danger text-white" type="button"  id="button-addon2" onclick="location= 'action.php?action=delete&item_id=<?php echo $items[$i]['item_id'];?> '">X</button>
              </div>
              </div>
           </div>
            
         <?php } ?>
      </div>
    