<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação de Conta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, Helvetica, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:20px 0;">
    <tr>
        <td align="center">

            <!-- Container -->
            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.05);">

                <!-- Header -->
                <tr>
                    <td align="center" style="background:#4F46E5; padding:30px;">
                        <h1 style="color:#ffffff; margin:0; font-size:24px;">
                            Confirme seu e-mail
                        </h1>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px; color:#333333;">
                        <p style="font-size:16px; margin-top:0;">
                            Olá, <strong>{{$name}}</strong>,
                        </p>

                        <p style="font-size:16px; line-height:1.6;">
                            Obrigado por se cadastrar! Para ativar sua conta, clique no botão abaixo e confirme seu endereço de e-mail.
                        </p>

                        <!-- Button -->
                        <table width="100%" cellpadding="0" cellspacing="0" style="margin:30px 0;">
                            <tr>
                                <td align="center">
                                    <a href="{{link_validacao}}"
                                       style="background:#4F46E5; color:#ffffff; text-decoration:none; padding:14px 28px; border-radius:6px; font-size:16px; display:inline-block;">
                                        Confirmar E-mail
                                    </a>
                                </td>
                            </tr>
                        </table>

                        <p style="font-size:14px; color:#666666; line-height:1.6;">
                            Se o botão não funcionar, copie e cole o link abaixo no seu navegador:
                        </p>

                        <p style="font-size:14px; word-break:break-all; color:#4F46E5;">
                            {{link_validacao}}
                        </p>

                        <p style="font-size:14px; color:#666666; margin-top:30px;">
                            Se você não criou essa conta, pode ignorar este e-mail.
                        </p>

                        <p style="font-size:16px; margin-top:30px;">
                            Atenciosamente,<br>
                            <strong>Equipe Less </strong>
                        </p>
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td align="center" style="background:#f9fafb; padding:20px; font-size:12px; color:#999999;">
                        ©  Freelas. Todos os direitos reservados.
                    </td>
                </tr>

            </table>
            <!-- End Container -->

        </td>
    </tr>
</table>

</body>
</html>
