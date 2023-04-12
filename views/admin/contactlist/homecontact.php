<?php


include '../../../model/Contacts.model.php';
$opa = new Contactsmod;
$bini = $opa->contactinfo();



$nr = 1;
?>



<div class="page-head">
	<table align="center" width="73%">
		<td><font class="title-head">Lista e Userave</td>
	</table>
</div>
<br>
<br>
<br>
<div id="page" style="width: 80%;">
<div class="newsbox">	
<table align="center" width="95%">
	<tr>
		<td>
			<h3 style="margin: 1px; margin-bottom: 6px;"><i class="fas fa-user-edit"></i>&nbsp;Lista e Kontakteve <i class="fas fa-angle-down"></i></h3>
			<div style="padding:2px;">
		<font>
			K&euml;tu mund&euml; t&euml; shikoni kontaktet!<br>
		</font>
	</div>
</tr>
</td>




</table>

	<table align="center" width="100%">
<br>


<table width="100%" id="myTable" cellspacing="0" cellpadding="5" class="data_list">
            <thead>
            <tr>
                <th width="45px" style="font-size:13px;">Id</th>
                <th width="100px" style="text-align:left;">Emri</th>
                <th width="180px" style="text-align:center;">Email</th>
                <th width="200px" style="text-align:center;">Subjecti</th>
                <th width="400px"style="text-align:center;">Message</th>
                <th width="100px"style="text-align:center;">Data</th>
                <th width="150px"style="text-align: left;"></th>
            </tr>
            </thead>
           
    <?php if(empty($bini)){ echo '<tr><td colspan="16"><div style="text-align:center;"><strong>Nuk ka asnje rezultat</strong></div></td></tr>'; }?>

            
        
           <?php foreach ($bini as $con): ?>
            <tr> 
                             <td style="text-align:center;"><b><?php echo $nr++; ?></b></td>
                             <td><img style="border-radius: 50%;" style="margin:auto"
                            <td style="text-align:center;"><b><?php echo $con['emri'] ?></b></td>
                             <td style="text-align:center;"><b><?php echo $con['email'] ?></b></td>
                            <td style="text-align:center;"><b><?php echo $con['subject'] ?></b></td>
                            <td style="text-align:center;"><b><?php echo $con['message'] ?></b></td>
                            <td style="text-align:center;"><b><?php echo $con['data'] ?></b></td>
							 <td> <button type="submit" onclick="window.location.href='/contactlist?deletecontact&deletecontactid=<?php echo $con['contact_id'] ?>'" class="btndefaultred"><i class="fas fa-trash"></i> Delete </button></td>
</tr>       
            <?php endforeach; ?>

           </table>