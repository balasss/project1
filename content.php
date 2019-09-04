 <div class="content">
 <h1><center>	City Search </h1></br><form action='asearch.php' method='GET'>
 <input type='text' name='name'><br>
<input type='submit' name='submit' value='submit'>
</form><h2> search For City Alpabatic </h2>
<?php foreach (range('A','Z') as $alph){
	
echo "<td><a href='view.php?action=view&id=$alph'>$alph </a></td>";
}

?>
    </div><!-- .content -->
