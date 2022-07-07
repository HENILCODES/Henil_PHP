<form action="HENIL/" method="post">
<fieldset>
<legend>Helo</legend>
    <div>
        <label for="txtname">Name: </label>
        <input type="text" name="TxTN" id="Tx"/>
        <!-- $_POST['TxTN']; -->
    </div>
    
    
    <div>
        <label for="contatc">contact: </label>
        <input type="text" name="contact" id="Tx"/>
        <!-- $_POST['contact']; -->
    </div>
    <div>
        <input type="checkbox" name="chk[]" id="">
        <input type="radio" name="dd" checked>
        <!-- <?php 
        echo $_REQUEST['dd'];
        ?> -->
    </div>
    <div>
        <select name="selec[]" id="selec" multiple="multiple">
            <option value="1">nb</option>
            <option value="2">smnnd</option>
            <option value="3">and</option>
            <option value="4">madb</option>
            <option value="5">,adj</option>
            <option value="6">,adj</option>
        </select>
        <!-- <?php 
        $lis = $_POST['selec'];
        foreach($lis as $a){
            echo $a;
        } 
        ?> -->
        </div>
        <div>
        <textarea name="tLong" id="" cols="30" rows="10"></textarea>
        <!-- $_POST['tLong']; -->
    </div><br>
    <input type="submit" name="cmdSub" id="cmdsub" value="Send">
    <!-- $_POST['cmdSub']; -->
</fieldset>
</form>