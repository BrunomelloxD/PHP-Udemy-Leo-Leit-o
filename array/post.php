<div class="titulo">$_POST</div>

<div center>
    <form action="#" method="post">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
        <select name="estado">
            <option value="AC">Acre</option>
            <option value="BA">Bahia</option>
        </select>
        <button button>Enviar</button>
    </form>
</div>


<style>
[center] {
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

form>* {
    font-size: 1rem;
    margin-bottom: 10px;
}

form>select {
    width: 100%;
}
</style>

<?php 
    var_dump($_POST);
    echo count($_POST);
?>