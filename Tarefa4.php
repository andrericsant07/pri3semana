<form action="processa_form4.php" method="post">

    <label>Nome</label>
    <input type="text" name="nome"/><br>

    <label>Sexo</label>
    <input type="radio" name="sexo" value="M">masculino
    <input type="radio" name="sexo" value="F">feminno<br>

    <label>Matérias</label>

        <select name="materias[]" size="3" multiple>
            <option value="M">matematica</option>
            <option value="P">portugues</option>
            <option value="C">ciencias</option>
            <option value="G">geografia</option>
            <option value="H">historia</option>
            <option value="F">fisica</option>
            <option value="Q">quimica</option>
        
        </select><br>

    <input type="submit" value="enviar dados"/>


</form>