<span class="radioset">
<input type="radio" name="elemname" id="elemnameyes" value="1" <?php echo ($elemname == "1"?"CHECKED":"") ?>>
<label for="elemnameyes"><?php echo _("Yes");?></label>
<input type="radio" name="elemname" id="elemnameno" <?php echo ($elemname == "1"?"":"CHECKED") ?>>
<label for="elemnameno"><?php echo _("No");?></label>
</span>