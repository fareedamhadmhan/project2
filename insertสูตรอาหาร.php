<meta charset= "utf-8">
<title>INSERT</title>
<?php
        include 'connection.php';
       
        if(isset($_POST['save'])){
            
            $manu_name=$_POST['manu_name'];
            $Ingredients=$_POST['Ingredients'];
            $Gastronomy=$_POST['Gastronomy'];
            $images=$_POST['images'];
            
            $sql= "INSERT INTO `ตารางสูตรอาหาร` (`manu_name`, `Ingredients`, `Gastronomy`,'images') 
            VALUES ('$manu_name','$Ingredients','$Gastronomy','$images')";
           
                if(mysqli_query($con,$sql)){
                    echo "<script type='text/javascript','varchar(50)/javascript'>";
                    echo "alert('บันทึกข้อมูลเรียบร้อย !')";
                    echo "window.location='index.php';";
                    echo "</script>";
                }else{
                     echo "error : " . $sql . "
                " .mysqli_error($con);
                }
                mysqli_close($con);  
        }
    ?> 
     <body>
     <h2  aling="center"><font color="red">ตารางแก้ไขเมนูอาหาร เพิ่มชื่อเมนูอาหารดังนี้ </font></h2>
        <form method="post">
        <fieldset><legend><b>ข้อมูลตารางการจัดการสูตรอาหาร</b></legend>
        <div class="form-group">
        <div class="form-inline">
       <label >ชื่อเมนูอาหาร</label><br>
        <textarea id="manu_name"  name="manu_name" rows="5" cols="130" placeholder="กรอกชื่อเมนูอาหารของคุณ" style="resize:none" input type="varchar(20)" class="form-control "></textarea>
        <br><br>
       <label > ส่วนผสม </label><br>
        <textarea id="Ingredients" name="Ingredients" rows="15" cols="130" placeholder="กรอกส่วนผสมของวัตถุดิบอาหารของคุณ " style="resize:none" input type="text" class="form-control "></textarea>
        <br><br>
       <label > วิธีทำ  </label><br>
       <textarea id="Gastronomy" name="Gastronomy" rows="20" cols="130" placeholder="กรอกวิธีทำเมนูอาหารของคุณ" style="resize:none" input type="text" class="form-control "></textarea>  
       <br><br>
      </div>
      </form>


      <div class="form-inline">  
       <h5 class="text-left"><B> &nbsp;&nbsp;UPLOAD IMAGE</h5>
       <?php if(!empty($statusMsg)){?>
       <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
       <?php } ?>  
          <form action ="สูตรอาหาร.php" method="post" enctype="multipart/form-data">
          <label> &nbsp; Select Image File:</label>
          <input type ="file" name="images" class="form-control">
          <input type="submit" name="upload"value="UPLOAD" class="btn btn-success my-3">
     
       </div>  
       </div>
       </div>
       </form>

      <br>
        
        <button class="btn btn-primary" type="Submit" name= "save" value="submit">บันทึกข้อมูล</button>

        </div>
        </fieldset>
    </body>
    <table align="left">
    <tr><br>
        <button class="btn btn-primary"><a href="updateสูตรอาหาร.php" class="text-white"> กลับสู่หน้าเมนูอาหาร</a> </button>
        <button class="btn btn-primary"><a href="index.php">หน้าหลัก</a></button>
      </tr>
      </table>
</html>
