
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

  <link rel="stylesheet" href="./styles.css" />

  <title>sistema de login com php</title>

              </head>
<body>
             <div class="box_login">
                    <div class="front_cover">

                    </div>
                               <h1>Iniciar Login</h1>

                                       <form method="POST" action="/login/check">
                                                  <input type="email" name="e-mail" placeholder="E-mail">
                                                  <input type="password" name="password" placeholder="Senha">

                                                  <button class="btn-login">Logar</button>

                                                  <span class="msg_error"><i class="fa fa-triangle-exclamation" style="font-size: 17px; color: #FFF; padding-right: 6px;">
                                                </i><p>Tentativa Invalida</p></span>

     
                             </form>
             </div>
</body>
               </html>