<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Portfólio  | Front</title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contato</h2>
            <div class="contact-content">
               <div class="column left">
               <div class="icons">
                   <div class="row">
                        <ion-icon name="person-outline"></ion-icon>
                        <div class="info">
                            <div class="head">Nome</div>
                            <div class="sub-title">Juliane Bezerra</div>
                        </div>
                   </div>
                   <div class="row">
                    <ion-icon name="earth-outline"></ion-icon>
                    <div class="info">
                        <div class="head">Endereço</div>
                        <div class="sub-title">Crato, Ce</div>
                    </div>
               </div>
               <div class="row">
                <ion-icon name="person-outline"></ion-icon>
                <div class="info">
                    <div class="head">Email</div>
                    <div class="sub-title">fbjuliane@gmail.com</div>
                </div>
            </div>
        </div>
            </div><!--column left-->
            <div class="column rigth">
                <div class="text">Mensagem</div>
                <form action="#">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="Nome" required>
                        </div>
                        <div class="field email">
                            <input type="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="field">
                        <div class="field">
                            <input type="text" placeholder="Sobrenome" required>
                        </div>
                        <div class="field textarea">
                           <textarea  cols="30" rows="10" placeholder="Escrever...." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Enviar</button> </div> <br> <a href="https://www.instagram.com/juliane_bzrr/" target="_blank"><img src="/css/images/insta.png" width="50px" alt=""></a> <a href="https://github.com/Julianebf" target="_blank"><img src="/css/images/github.png" width="50px" alt=""></a> <a href="https://www.linkedin.com/in/juliane-bezerra-ferreira/" target="_blank"><img src="/css/images/linkedin.png" width="50px" alt=""></a> 
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>
</body>
</html><?php /**PATH /app/resources/views/contact.blade.php ENDPATH**/ ?>