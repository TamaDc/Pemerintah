<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><h1>DAFTAR KENAIKAN GAJI</h1></center>
  <hr>
  <table width="530" >  
    <tr>
      <td>
        <tr style="background:#3f8fb7;">

                                      <th width="150"><center>NIP</center></th>
                                      <th width="200"><center>Nama</center></th>
                                      <th width="80"><center>Golongan</center></th>
                                      <th width="100"><center>Gaji_pokok_baru</center></th>
                                     
                                    </tr>
                                    
                                    <?php foreach($data as $row){ ?>
                                          <tr>
                                             
                                            
                                                  <td><?php echo $row['NIP']; ?> </td>
                                                  <td><?php echo $row['Nama']; ?> </td>
                                                  <td><center><?php if ($row['new_golongan'] != NULL){
                                                    echo $row['new_golongan'] ,"/", echo $row['new_periode'];
                                                  }else{
                                                    echo "-";
                                                    }?></center></td>
                                                  <td><?php 
                                                  if ($row['gaji_pokok_baru'] != NULL){
                                                      echo $row['gaji_pokok_baru'];
                                                  }else{
                                                     echo "-"; 
                                                  } ?></td>  
                                          </tr>
                                    <?php } ?>       
      </td>
    </tr>
  </table>
</body>
</html>