<?php
class Captacao {

    public $_phpmailer;
    public $_Dados;

    public function __construct($phpmailer, $Dados) {
        $this->_phpmailer = $phpmailer;
        $this->_Dados = $this->formatarDados($Dados);
    }

    public function enviarEmail() {
        $msgCliente = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Abertura de captações</title>
        </head>			
        <body  style=" color:#1D3E69; font-size:16px; font-family:Arial, Helvetica, sans-serif">
                <table>
                        <tr><td><b>NOME      :</b>' . $this->_Dados["captacao_cliente"] . '</td></tr>
                        <tr><td><b>EMAIL     :</b>' . $this->_Dados["captacao_email"] . '   </td></tr>
                        <tr><td><b>TELEFONE  :</b>' . $this->_Dados["captacao_telefone1"] . '</td> </tr>
                        <tr><td><b>INTERESSE :</b>' . $this->_Dados["captacao_interesse"] . '</td></tr>
                        <tr><td><b>ORIGEM    :</b>' . $this->_Dados["origem"] . '</td></tr>
                </table>			
        </body>
        </html>';

        $DadosEmail['asssunto'] = "Abertura de captacao";
        $DadosEmail['emailRementente'] = 'contato@volpatorastreamento.com.br';
        $DadosEmail['remetente'] = 'Grupo Volpato';
        $DadosEmail['emailDestino'] = 'desenvolvimento@grupovolpato.com';
        $DadosEmail['nome'] = $this->_Dados ['captacao_cliente'];
        $DadosEmail['emailResposta'] = '';
        $DadosEmail['nomeEmailResposta'] = "";
        $DadosEmail['Body'] = $msgCliente;
        $RESPOSTA = (Funcoes::EnviarEmail($DadosEmail, $this->_phpmailer)) ? 1 : 0;
        return $RESPOSTA;
    }

    public function enviarEmailparaMarketing() {
        $msgCliente = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Abertura de captações</title>
        </head>			
        <body  style=" color:#1D3E69; font-size:16px; font-family:Arial, Helvetica, sans-serif">
                <table>
                        <tr><td><b>NOME      :</b>' . $this->_Dados["captacao_cliente"] . '</td></tr>
                        <tr><td><b>EMAIL     :</b>' . $this->_Dados["captacao_email"] . '   </td></tr>
                        <tr><td><b>TELEFONE  :</b>' . $this->_Dados["captacao_telefone1"] . '</td> </tr>
                        <tr><td><b>INTERESSE :</b>' . $this->_Dados["captacao_interesse"] . '</td></tr>
                        <tr><td><b>ORIGEM    :</b>' . $this->_Dados["origem"] . '</td></tr>
                </table>			
        </body>
        </html>';

        $DadosEmail['asssunto'] = "Contato Projetos Integrados";
        $DadosEmail['emailRementente'] = 'contato@volpatorastreamento.com.br';
        $DadosEmail['remetente'] = 'Grupo Volpato';
        $DadosEmail['emailDestino'] = "marketing@grupovolpato.com";
        $DadosEmail['nome'] = $this->_Dados['captacao_cliente'];
        $DadosEmail['emailResposta'] = 'marketing@grupovolpato.com';
        $DadosEmail['nomeEmailResposta'] = "grupovolpato";
        $DadosEmail['Body'] = $msgCliente;
        $RESPOSTA = (Funcoes::EnviarEmail($DadosEmail, $this->_phpmailer)) ? 1 : 0;
        return $RESPOSTA;
    }

    public function formatarDados($Dados) {
        switch ($Dados['origem']) {
            default :
                $origem = "grupovolpato";
        }
        $Dados['origem'] = $origem;

        $Array_Dados = array(
            "captacao_cliente" => !empty($Dados['captacao_cliente']) ? trim($Dados['captacao_cliente']) : NULL,
            "captacao_telefone1" => !empty($Dados['captacao_telefone1']) ? trim($Dados['captacao_telefone1']) : NULL,
            "captacao_email" => !empty($Dados['captacao_email']) ? trim($Dados['captacao_email']) : NULL,
            "captacao_interesse" => !empty($Dados['captacao_interesse']) ? trim($Dados['captacao_interesse']) : NULL,
            "captacao_obs" => !empty($Dados['captacao_obs']) ? trim($Dados['captacao_obs']) : NULL,
            "origem" => !empty($Dados['origem']) ? trim($Dados['origem']) : NULL,
            "acao" => 'InsertCaptacao'
        );
        return $Array_Dados;
    }

    public function enviarCaptacaoGPI() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://gpi.ddns.me:9093/gpi/modulos/captacao/src/controllers/captacao.php');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->_Dados);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function enviarCaptacaoSeguidor(){
        $Dados = $this->_Dados;
        $Dados['captacao_fonte_oportunidade']='5f11dac196214a000e585e5b';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://seguidor.com.br/pluga.co/rastreamentoveicular/index.php');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $Dados);
        $result = curl_exec($ch);
        curl_close($ch);
    }


    public  function backup_captacao_seguidor($conn){
        $captacao_cliente = $this->_Dados['captacao_cliente'] ; 
        $captacao_telefone1 = $this->_Dados['captacao_telefone1'];
        $captacao_email = $this->_Dados['captacao_email'];
        $origem = $this->_Dados['origem'];
        $acao = $this->_Dados['acao'];
        $origem = $this->_Dados['origem'];
        
        $sql = "INSERT INTO captacao (
                captacao_cliente,
                captacao_telefone1,
                captacao_email,
                origem,
                acao,
                captacao_interesse
            ) VALUES (
                '$captacao_cliente',
                '$captacao_telefone1',
                '$captacao_email',
                '$origem',
                '$acao',
                '$origem'
        )";

        $resultado_usuario = mysqli_query($conn, $sql);
         

         return true;

    }

}