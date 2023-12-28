<p>Quản lý thông tin website</p>
<?php
$sql_lh= "SELECT * FROM tbl_lienhe WHERE id =1 ";
$query_lh = mysqli_query($mysqli, $sql_lh);
?>
<table border="1" width="50%" style="border-collapse: collapse;" >
  <?php
    while($dong= mysqli_fetch_array($query_lh)){
    ?>  
    <form method="POST" action="modules/thongtinweb/xuly.php?id=<?php echo $dong['id'] ?>" enctype="multipart/form-data" >

  <tr>
    <td>Thông tin liên hệ</td>
    <td><textarea name="thongtinlienhe"   rows="10" style="resize: none;" ><?php echo $dong['thongtinlienhe'] ?></textarea></td>
  </tr>
  

 
 
  <tr>
    <td colspan="2" > <input type="submit" name="submitlienhe" value="Cập nhật" ></td>

  </tr>

  </form>
  <?php
     }
    ?>  
</table>