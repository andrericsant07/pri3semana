<form action="processa_form6.php" method="post">

    <label>Nome</label>
        <input type="text" name="nome"/><br>

    <label>Sexo</label>
        <input type="radio" name="sexo" value="M">masculino
        <input type="radio" name="sexo" value="F">feminino<br>
    
    <label>Materias</label>
        <select name="materias[]" syze="3" multiple>
            <option value="M">matematica</option>
            <option value="F">fisica</option>
            <option value="Q">quimica</option>
            <option value="P">portugues</option>
            <option value="G">geografia</option>
        </select>
        <br>

        <label>Resenha</label>
        <textarea name="resenha" rows="8" cols="15"></textarea><br>

        <label>E-mail</label>
            <input type="text" name="email"><br>

        <label>Senha</label>
            <input type="password" name="senha"><br>

        
        <input type="submit" value="enviar dados"><br>

    </form>