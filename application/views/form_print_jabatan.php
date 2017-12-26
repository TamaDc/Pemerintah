<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR JABATAN</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

                                      <th width="50"><center>ID</center></th>
                                      <th width="200"><center>Nama</center></th>
                                      <th width="100"><center>Level</center></th>
                                     
                                    </tr>
                                    
                                    <?php foreach($data as $row){ ?>
                                          <tr>
                                            <td><?php echo $row['kd_jabatan']; ?> </td>
                                            <td><?php echo $row['nama_jabatan']; ?> </td>
                                            <td><?php echo $row['level']; ?></td>

                                            
                                          </tr>
                                    <?php } ?>       
			</td>
		</tr>
	</table>
</body>
</html>