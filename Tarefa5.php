<form action ="processa_form5.php" method="post">
    <label>Nome</label>
    <input type="text" name="nome"/><br>

    <label>Sexo</label>
    <input type="radio" name="sexo" value="M">masculino
    <input type="radio" name="sexo" value="F">feminino<br>

    <label>Materias</label>
        <select name="materias[]" syze="3" multiple>
            <option value="F">Fisica</option>
            <option value="M">Matematica</option>
            <option value="Q">Quimica</option>
            </select><br>

    <label>Resenha</label>
    <textarea name="resenha" rows="6" cols="12" style="width:500px;height:150px;"></textarea><br><br>
        
        

        <input type="submit" value="enviar dados"/>

    </form>