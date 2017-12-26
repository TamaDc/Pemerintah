<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR UNIT KERJA</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

                                      <th width="50"><center>ID</center></th>
                                      <th width="200"><center>Nama Unit Kerja</center></th>
                                      <th width="100"><center>Esselon</center></th>
                                     
                                    </tr>
                                    
                                    <?php foreach($data as $row){ ?>
                                          <tr>
                                            <td><?php echo $row['id_unit_kerja']; ?> </td>
                                            <td><?php echo $row['nama_unit_kerja']; ?> </td>
                                            <td><?php echo $row['esselon']; ?></td>

                                            
                                          </tr>
                                    <?php } ?>       
			</td>
		</tr>
	</table>
</body>
</html>