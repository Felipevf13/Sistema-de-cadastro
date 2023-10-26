<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
          
        }
        .inputBox{
            position: relative;
        } 
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="/users/new" method="POST">
            @csrf
            <fieldset>
               <legend><b>Fórmulario de Clientes</b></legend>
               <br>
               <div class="inputBox">
                <input type="text" name="name" id="name" class="inputUser" required>
                <label for="nome" class="Labelinput">Nome completo</label>
               <div>
                <br><br>
                <div class="inputBox">
                <input type="text" name="username" id="username" class="inputUser" required>
                <label for="username" class="Labelinput">Nome de usuario</label>
               <div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="nome"class="Labelinput">Email</label>
               </div>
               <br><br>
               <div class="inputBox">
                <input type="tel" name="phone" id="phone" class="inputUser" required>
                <label for="nome"class="Labelinput">Telefone</label>

               </div>
               <br><br>
               <div class="inputBox">
                <input type="password" name="password" id="password" class="inputUser" required>
                <label for="password"class="Labelinput">Senha</label>

               </div>
               <br><br>
                <div class="inputBox">
                    <input type="text" name="city" id="cidade" class="inputUser" required>
                    <label for="cidade"class="Labelinput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="state" id="estado" class="inputUser" required>
                        <label for="estado"class="Labelinput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="street" id="endereço" class="inputUser" required>
                        <label for="endereço"class="Labelinput">Endereço</label>
               
               </div>
               <br><br>
               <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>

    </div>
</body>
</html>