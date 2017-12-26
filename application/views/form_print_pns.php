<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR PNS SEMARANG</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

                                      <th width="150"><center>NIP</center></th>
                                      <th width="200"><center>Nama</center></th>
                                      <th width="80"><center>Golongan</center></th>
                                      <th width="100"><center>Status</center></th>
                                     
                                    </tr>
                                    
                                    <?php foreach($data as $row){ ?>
                                          <tr>
                                            <td><?php echo $row['NIP']; ?> </td>
                                            <td><?php echo $row['Nama']; ?> </td>
                                            <td><center><?php echo $row['Golongan']; ?></center></td>
                                            <td><?php echo $row['tanggal_lahir']; ?></td>

                                            
                                          </tr>
                                    <?php } ?>       
			</td>
		</tr>
	</table>
</body>
</html>