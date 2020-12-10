<?php
session_start();
if ($_SESSION['logado'] != 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "index.php?erro=1";
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SisLog - Larissa</title>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-dark">
        <div class="container mt-4">
            <div class="card">
                <div class="card-body text-justify">
                    Socorro!!!
                    <a href="?acao=sair"><img src="imgs/sair.png" alt="sair" class="float-right "></a>
                </div>
            </div>
            <div class="card">
                <div class="card-body text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis odio nec risus consectetur molestie a nec mi.
                    Nullam non malesuada dui. Donec eget purus fringilla dolor ultricies venenatis sit amet id lacus. Morbi mollis nisi dolor,
                    ac cursus augue efficitur a. Suspendisse molestie nulla erat, a condimentum nisi mollis in. Donec condimentum porttitor.
                    In vel orci et neque porttitor consectetur at et dolor. Fusce non maximus diam, non tristique arcu. Vestibulum porta consequat
                    mauris eget maximus. Ut accumsan erat sed faucibus tempor. Suspendisse iaculis at libero ac mollis. Mauris libero tortor,
                    imperdiet a imperdiet eu, elementum vel nulla. Vestibulum tincidunt ullamcorper convallis. Aliquam mollis finibus ligula
                    ut efficitur. Vivamus interdum, nunc ut consequat pretium, augue lacus tincidunt ipsum, et hendrerit mi quam in nisl.
                    Sed maximus elit vel odio facilisis sagittis. Pellentesque porttitor vehicula odio, eget vulputate magna vulputate in.
                    Etiam eget mollis risus, a dictum lacus. Sed dictum sapien nec nibh aliquam tincidunt. Suspendisse tristique, nulla.
                    Donec lobortis mollis nibh in commodo. Nunc interdum vulputate lacus nec facilisis. Sed odio velit, porttitor eu ex vel,
                    lacinia efficitur mi. Nam pellentesque elementum erat, quis tristique metus fermentum ut. Sed eget nibh non enim consequat blandit.
                    Sed dictum vel ex semper convallis. Vivamus efficitur cursus mollis. Curabitur laoreet dolor risus, nec faucibus ipsum iaculis vehicula.
                    In scelerisque metus id ultricies vulputate. Sed a velit eleifend, pulvinar enim eu, ultricies metus. Nam imperdiet vel neque id semper.
                </div>
            </div>
        </div>
    </body>
</html>
<?php
if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'sair') {
        $_SESSION['logado'] = 0;
        ?>
        <script type="text/javascript">
            document.location.href = "index.php?logout";
        </script>
        <?php
    }
}
?>