        <form id="formMenu" name="formMenu" action="" target="_self" method="GET">
            <input id="btn-menu" type="submit" value="home" name="btnMenu" <?php if(isset($_GET['btnMenu'])){ $active = $_GET['btnMenu'];if ($active == 'home'){ echo 'class="active"';  }} ?> >
            <input id="btn-menu" type="submit" value="sobre" name="btnMenu" <?php if(isset($_GET['btnMenu'])){ $active = $_GET['btnMenu'];if ($active == 'sobre'){ echo 'class="active"';  }} ?> >
            <input id="btn-menu" type="submit" value="cadastrarUsuario" name="btnMenu" <?php if(isset($_GET['btnMenu'])){ $active = $_GET['btnMenu'];if ($active == 'cadastrarUsuario'){ echo 'class="active"';  }} ?> >
        </form>