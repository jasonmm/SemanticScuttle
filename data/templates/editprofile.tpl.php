<?php
$this->includeTemplate($GLOBALS['top_include']);
?>

<form action="<?php echo $formaction; ?>" method="post">
<input type="hidden" name="token" value="<?php echo $token; ?>">

</table>

<h3><?php echo T_('Account Details'); ?></h3>

<table class="profile">
<tr>
    <th align="left"><?php echo T_('Username'); ?></th>
    <td><?php echo $user; ?></td>
    <td></td>
</tr>
<tr>
    <th align="left"><?php echo T_('New Password'); ?></th>
    <td><input type="password" name="pPass" size="20" /></td>
    <td></td>
</tr>
<tr>
    <th align="left"><?php echo T_('Confirm Password'); ?></th>
    <td><input type="password" name="pPassConf" size="20" /></td>
    <td></td>
</tr>
<tr>
    <th align="left"><?php echo T_('E-mail'); ?></th>
    <td><input type="text" name="pMail" size="75" value="<?php echo filter($objectUser->getEmail(), 'xml'); ?>" /></td>
    <td>&larr; <?php echo T_('Required'); ?></td>
</tr>
<tr>
    <th align="left"><?php echo T_('Private Key (for RSS)'); ?></th>
    <td><input type="text" id="pPrivateKey" name="pPrivateKey" size="40" value="<?php echo filter($objectUser->getPrivateKey(), 'xml'); ?>" readonly /><input type="button" value="Generate New Key" onClick="getNewPrivateKey(this,null)" /></td>
</tr>
</table>

<h3><?php echo T_('Personal Details'); ?></h3>

<table class="profile">
<tr>
    <th align="left"><?php echo T_('Name'); ?></th>
    <td><input type="text" name="pName" size="75" value="<?php echo filter($objectUser->getName(), 'xml'); ?>" /></td>
</tr>
<tr>
    <th align="left"><?php echo T_('Homepage'); ?></th>
    <td><input type="text" name="pPage" size="75" value="<?php echo filter($objectUser->getHomepage()); ?>" /></td>
</tr>
<tr>
    <th align="left"><?php echo T_('Description'); ?></th>
    <td><textarea name="pDesc" cols="75" rows="10"><?php echo $objectUser->getContent(); ?></textarea></td>
</tr>
<tr>
    <th></th>
    <td><input type="submit" name="submitted" value="<?php echo T_('Save Changes'); ?>" /></td>
</tr>
</table>
<h3><?php echo T_('Actions'); ?></h3>
<table class="profile">
<tr>
    <th align="left"><?php echo T_('Export bookmarks'); ?></th>
    <td>
	<a href="../api/export_html.php"><?php echo T_('HTML file (for browsers)')?></a> /
	<a href="../api/posts/all"><?php echo T_('XML file (like del.icio.us)')?></a> / 
	<a href="../api/export_csv.php"><?php echo T_('CSV file (for spreadsheet tools)')?></a>
    </td>
</tr>
<tr><th> </th><td> </td></tr>
<tr><th> </th><td> </td></tr>
</table>

</form>

<?php
$this->includeTemplate($GLOBALS['bottom_include']);
?>
