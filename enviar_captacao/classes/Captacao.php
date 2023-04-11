<?php
class Captacao
{
    public $_phpmailer;
    public $_Dados;

    public function __construct($phpmailer, $Dados)
    {
        $this->_phpmailer = $phpmailer;
        $this->_Dados = $this->formatarDados($Dados);
    }

    public function enviarEmail()
    {
        $msgCliente = '
        <table>
        <tr><td><b>NOME      :</b>' . $this->_Dados["captacao_cliente"] . '</td></tr>
        <tr><td><b>EMAIL     :</b>' . $this->_Dados["captacao_email"] . '   </td></tr>
        <tr><td><b>TELEFONE  :</b>' . $this->_Dados["captacao_telefone1"] . '</td> </tr>
        <tr><td><b>INTERESSE :</b>' . $this->converte_interesse($this->_Dados["captacao_interesse"]) . '</td></tr>
        <tr><td><b>ORIGEM    :</b>' . $this->_Dados["origem"] . '</td></tr>
        </table>';

        $DadosEmail['asssunto'] = "Abertura de captacao";
        $DadosEmail['emailRementente'] = 'contato@volpatorastreamento.com.br';
        $DadosEmail['remetente'] = 'Grupo Volpato :https://www.grupovolpato.com/';
        $DadosEmail['emailDestino'] = 'simuladorvolpato@gmail.com';
        $DadosEmail['nome'] = $this->_Dados['captacao_cliente'];
        $DadosEmail['emailResposta'] = '';
        $DadosEmail['nomeEmailResposta'] = "";
        $DadosEmail['Body'] = $msgCliente;
        $RESPOSTA = (Funcoes::EnviarEmail($DadosEmail, $this->_phpmailer)) ? 1 : 0;
        return $RESPOSTA;
    }

    public function enviarEmailparaMarketing()
    {
        $msgCliente = '
        <table>
            <tr><td><b>NOME      :</b>' . $this->_Dados["captacao_cliente"] . '</td></tr>
            <tr><td><b>EMAIL     :</b>' . $this->_Dados["captacao_email"] . '   </td></tr>
            <tr><td><b>TELEFONE  :</b>' . $this->_Dados["captacao_telefone1"] . '</td> </tr>
            <tr><td><b>INTERESSE :</b>' . $this->converte_interesse($this->_Dados["captacao_interesse"]) . '</td></tr>
            <tr><td><b>ORIGEM    :</b>' . $this->_Dados["origem"] . '</td></tr>
        </table>';
        $DadosEmail['asssunto'] = "Contato Projetos Integrados";
        $DadosEmail['emailRementente'] = 'contato@volpatorastreamento.com.br';
        $DadosEmail['remetente'] = 'Grupo Volpato:https://www.grupovolpato.com/';
        $DadosEmail['emailDestino'] = "desenvolvimento@grupovolpato.com";
        $DadosEmail['nome'] = $this->_Dados['captacao_cliente'];
        $DadosEmail['emailResposta'] = 'marketing@grupovolpato.com';
        $DadosEmail['nomeEmailResposta'] = "grupovolpato";
        $DadosEmail['Body'] = $msgCliente;
        $RESPOSTA = (Funcoes::EnviarEmail($DadosEmail, $this->_phpmailer)) ? 1 : 0;
        return $RESPOSTA;
    }

    public function formatarDados($Dados)
    {
        switch ($Dados['origem']) {
            default:
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

    public function enviarCaptacaoGPI()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://gpi.ddns.me:9093/gpi/modulos/captacao/src/controllers/captacao.php');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->_Dados);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public function enviarCaptacaoSeguidor()
    {
        $Dados = $this->_Dados;
        $Dados['captacao_fonte_oportunidade'] = '5f11dac196214a000e585e5b';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://seguidor.com.br/pluga.co/rastreamentoveicular/index.php');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $Dados);
        $result = curl_exec($ch);
        curl_close($ch);
    }

    public  function backup_captacao_seguidor($conn)
    {
        $captacao_cliente = $this->_Dados['captacao_cliente'];
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

    private  function converte_interesse($interesse_key)
    {
        $array_interesse  = [
            1 => "Segurança Eletrônica",
            5 => "Rastreamento Veicular",
            6 => "Serviços de Portaria",
        ];

        if ($interesse_key !== "projetos-integrados") {
            return $array_interesse[$interesse_key];
        } else {
            return "Projetos Integradas";
        }
    }
}
