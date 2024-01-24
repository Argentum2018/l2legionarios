<?php

$LANG[40000] = "<br /><br />Cada ".$coinQntV." ".$coinName." custa um certo valor, descrito abaixo, com bônus automático de ".$buyCoins['bonus_percent'][1]."% para compras acima de ".$buyCoins['bonus_count'][1]." ".$coinName."'s, ".$buyCoins['bonus_percent'][2]."% para compras acima de ".$buyCoins['bonus_count'][2]." ".$coinName."'s e ".$buyCoins['bonus_percent'][3]."% para compras acima de ".$buyCoins['bonus_count'][3]." ".$coinName."'s. Por exemplo: Você paga por ".$buyCoins['bonus_count'][1]." e recebe ".intval($buyCoins['bonus_count'][1]+(($buyCoins['bonus_count'][1]*$buyCoins['bonus_percent'][1])/100))."; paga por ".($buyCoins['bonus_count'][2]+50)." e recebe ".intval(($buyCoins['bonus_count'][2]+50)+((($buyCoins['bonus_count'][2]+50)*$buyCoins['bonus_percent'][2])/100))."; paga por ".($buyCoins['bonus_count'][3]+200)." e recebe ".intval(($buyCoins['bonus_count'][3]+200)+((($buyCoins['bonus_count'][3]+200)*$buyCoins['bonus_percent'][3])/100)).".";
$LANG[40001] = "Lista de serviços";
$LANG[40002] = "Lista de pacotes";
$LANG[40003] = "Indisponível no momento!";
$LANG[40004] = "Para seu personagem in-game";
$LANG[40005] = "Suas <b>".$coinName."'s</b> serão convertidas em <b>".$coinGame."'s</b> e inseridas em seu inventory, podendo ser utilizadas dentro do jogo para usufruir de vantagens e recursos.";
$LANG[40006] = "Para outra conta";
$LANG[40007] = "A conta do personagem destinatário receberá as <b>".$coinName."'s</b> e ele poderá utilizá-las no painel de usuário.";
$LANG[40008] = "Sim";
$LANG[40009] = "Não";
$LANG[40010] = "Galeria";
$LANG[40011] = "Enviar Screenshot";
$LANG[40012] = "Enviar Vídeo";
$LANG[40013] = "Meus Envios";
$LANG[40014] = "Envie screenshots para nossa galeria! Faça upload da screenshot utilizando o campo abaixo.";
$LANG[40015] = "Você pode enviar a quantidade que desejar, mas apenas um por vez.";
$LANG[40016] = "Formatos permitidos: JPG/JPEG, PNG e BMP.";
$LANG[40017] = "Tamanho máximo em bytes por screenshot: 5 MB.";
$LANG[40018] = "Enviar";
$LANG[40019] = "Envie vídeos para nossa galeria! Faça upload do vídeo no Youtube e insira o link dele no campo abaixo.";
$LANG[40020] = "O vídeo deve estar hospedado no Youtube.com e disponível para todos.";
$LANG[40021] = "Não é permitido conteúdo pornográfico, nudez, racismo ou ofensas.";
$LANG[40022] = "Insira uma screenshot válida!";
$LANG[40023] = "A imagem ultrapassa o tamanho permitido!";
$LANG[40024] = "Só é permitido imagem JPG/JPEG, PNG ou BMP!";
$LANG[40025] = "A imagem tem largura maior que";
$LANG[40026] = "A imagem tem altura maior que";
$LANG[40027] = "Ocorreu uma falha ao enviar imagem! Por favor, comunique o administrador e tente novamente mais tarde.";
$LANG[40028] = "Você inseriu um link longo demais! (máximo 255 caracteres)";
$LANG[40029] = "Link irregular! Por favor, informe o link correto!";
$LANG[40030] = "Envio realizado com sucesso! No entanto, só estará disponível publicamente após aprovação do administrador.";
$LANG[40031] = "Esse vídeo já foi enviado para a galeria!";
$LANG[40032] = "Abaixo são exibidos os vídeos e screenshots enviados por você.<br />É necessária aprovação do administrador para que eles sejam exibidos publicamente.";
$LANG[40033] = "Você ainda não enviou nenhuma mídia.";
$LANG[40034] = "Em aprovação";
$LANG[40035] = "Visualizar Galeria";
$LANG[40036] = "Ainda não há mídias na galeria.";
$LANG[40037] = "Transferências Realizadas";
$LANG[40038] = "Transferências para personagem in-game (conversão de <b>".$coinName."</b> para <b>".$coinGame."</b>)";
$LANG[40039] = "Transferências de <b>".$coinName."</b> para outra conta";
$LANG[40040] = "Nenhuma transferência registrada.";
$LANG[40041] = "Você tem certeza que deseja excluir este item da galeria?";
$LANG[40042] = "Isso não foi enviado por você!";
$LANG[40043] = "Voltar";
$LANG[40044] = "Sua chave de segurança expirou! Iremos recarregar a página e, por favor, tente novamente.";
$LANG[40045] = "Site Oficial";
$LANG[40046] = "Selecione o personagem que possui o item que deseja encantar.";
$LANG[40047] = "Por favor, aguarde o carregamento dos itens do outro personagem que você selecionou anteriormente. Se estiver demorando demais, recarregue a página (F5).";
$LANG[40048] = "Falha ao carregar itemlist! Por favor, informe os administradores.";
$LANG[40049] = "Você não possui permissão para encantar este item!";
$LANG[40050] = "Não é permitido reduzir o enchant de um item!";
$LANG[40051] = "Insira um valor diferente do enchant atual deste item!";
$LANG[40052] = "Cadastre sua conta no <a href='%s' target='_blank'>fórum</a>! Todas as contas devem ser criadas utilizando o mesmo nome do personagem in-game. O nome do personagem será usado como nome de usuário no fórum.";
$LANG[40053] = "Já existe uma conta no fórum cadastrada com o nome deste personagem!";
$LANG[40054] = "Sua conta no fórum foi cadastrada com sucesso!<br />Agora basta efetuar login, <a href='%s' target='_blank'>clique aqui</a>.";
$LANG[40055] = "Ao se cadastrar você está declarando que leu e está de acordo com todos os <a href='%s' target='_blank'>nossos termos</a>.";
$LANG[40056] = "Suas ".strtolower($coinName_mini)."'s (<b>in-game</b>) serão retiradas do seu personagem e convertidas em ".strtolower($coinName_mini)."'s (<b>online</b>), podendo ser utilizadas para usufruir de vantagens e recursos neste painel de usuário.";
$LANG[40057] = "Transferências para painel de usuário (in-game para online)";
$LANG[40058] = "Esse personagem já possui o status nobless!";
$LANG[40059] = "Concede AIO status ao personagem selecionado.";
$LANG[40060] = "O personagem irá se tornar um AIO, recebendo diversos skills buffers. Basta selecionar abaixo a periodicidade desejada. Caso ele já possua o aio status, a periodicidade selecionada será somada à que ele já possui.";
$LANG[40061] = "Abaixo são exibidos todos os jogadores que possuem Boss Jewels.";
$LANG[40062] = "Abaixo são exibidos os jogadores com maior level e experiência.";
$LANG[40063] = "Abaixo são exibidos os jogadores que possuem mais Adena.";

$LANG[40064] = "Este personagem já possui o nobless status!";
$LANG[40065] = "É necessário ter status nobless para ser hero!";
$LANG[40066] = "Este personagem já é hero!";


$LANG[10995] = "Para uma segurança adicional, acrescentaremos um sufixo ao seu login. Seu login será <span id='finalLogin'></span>.";
$LANG[10996] = "Eu não quero isso";
$LANG[10997] = "Sufixo";
$LANG[12977] = "Só será possível se cadastrar a partir de:";
$LANG[12067] = "Preencha os campos abaixo para registrar uma nova conta.";
$LANG[12068] = "Conta criada com sucesso! Seja bem-vindo!";
$LANG[12069] = "Conta criada com sucesso! Você tem 24 horas para confirmá-la!<br />Um e-mail foi enviado para:";
$LANG[12070] = "As senhas inseridas não são iguais!";
$LANG[12071] = "Você ultrapassou o limite de caracteres permitido!";
$LANG[12072] = "Já existe uma conta com este login!";
$LANG[12080] = "Conta confirmada com sucesso! Divirta-se!";
$LANG[12081] = "Ocorreu um erro ao confirmar a conta!";
$LANG[12083] = "Confirmar E-mail";
$LANG[29004] = "Sufixo desabilitado";
$LANG[12010] = "Repita E-mail";
$LANG[12045] = "É permitido apenas letras e números. Não utilize espaçamentos ou caracteres especiais.";
$LANG[12113] = "Olá!<br /><br />Seu e-mail foi utilizado no cadastro de uma conta em nosso servidor. Se você realizou este cadastro, clique no link abaixo ou copie-o e cole no navegador, caso contrário ignore este e-mail.<br /><br />Dados da conta:<br /><br />";
$LANG[29008] = "Minha conta";
$LANG[29009] = "Data de cadastro";
$LANG[29010] = "Seja bem vindo ao ";
$LANG[12043] = "Esqueceu sua senha? Digite no campo abaixo o e-mail que você utilizou ao cadastrar a conta. Serão enviadas instruções sobre como recuperar.";
$LANG[12059] = "Insira o e-mail!";
$LANG[12060] = "Insira um e-mail válido!";
$LANG[12061] = "Não há conta vinculada a este e-mail!";
$LANG[12110] = "Olá!<br /><br />Existe uma conta em nosso servidor registrada com seu endereço de e-mail.<br />Recentemente foi realizado um pedido de recuperação de senha. Se você realizou este pedido, clique no link abaixo ou copie-o e cole no navegador, caso contrário ignore este e-mail.<br /><br />Dados da conta:<br /><br />";
$LANG[12111] = "Olá!<br /><br />Existem algumas contas em nosso servidor registradas com seu endereço de e-mail.<br />Recentemente foi realizado um pedido de recuperação de senha. Se você realizou este pedido, clique no link destacado da respectiva conta que deseja alterar a senha ou copie-o e cole no navegador, caso contrário ignore este e-mail.<br /><br />Dados das contas:<br /><br />";
$LANG[12112] = "Se desejar alterar a senha de todas as contas acima de uma vez só, clique no link abaixo.";
$LANG[12040] = "Recuperar Conta";
$LANG[12046] = "Código expirado ou inexistente!";
$LANG[12044] = "Preencha os campos abaixo com a nova senha da conta.";
$LANG[12050] = "Alterar";
$LANG[12015] = "e";
$LANG[12016] = "Tempo";
$LANG[12012] = "Membros";
$LANG[12064] = "Abaixo são exibidos todos os jogadores que são ou já foram heróis.";
$LANG[12065] = "Jogadores que venceram a última Grand Olympiad e atualmente são heróis.";
$LANG[12066] = "Participantes da Grand Olympiad e suas respectivas posições no ranking.";
$LANG[12029] = "Morto";
$LANG[12030] = "Vivo";
$LANG[30500] = "Este ranking foi atualizado em";
$LANG[30501] = "às";
$LANG[30502] = "Abaixo são exibidos os jogadores com mais pontos PvP (Player vs Player).";
$LANG[30503] = "Abaixo são exibidos os jogadores com mais pontos PK (Player Killer).";
$LANG[30504] = "Abaixo são exibidos os clan's de maior prestígio.";
$LANG[30505] = "Abaixo são exibidos os jogadores com maior tempo online.";
$LANG[30506] = "Aguarde alguns instantes e recarregue a página.";
$LANG[12999] = "Heroes Atuais";
$LANG[12025] = "Histórico de Heroes";
$LANG[11003] = "Clan Proprietário";
$LANG[11004] = "Clan Líder";
$LANG[11005] = "Aliança";
$LANG[11006] = "Próxima Guerra";
$LANG[11007] = "Atacantes";
$LANG[11008] = "Defensores";
$LANG[11011] = "Taxa";
$LANG[11014] = "Alterar E-mail";
$LANG[12984] = "Os e-mails inseridos não são iguais!";
$LANG[12985] = "Para alterar o e-mail, preencha os campos abaixo inserindo o novo e-mail. É necessário inserí-lo duas vezes para evitar futuros transtornos devido a erros de digitação.";
$LANG[12986] = "E-mail atual";
$LANG[12987] = "Repita e-mail";
$LANG[12988] = "Novo e-mail";
$LANG[12073] = "Formato de e-mail incorreto!";
$LANG[12074] = "Já existe uma conta com esse e-mail!";
$LANG[12075] = "Ocorreu um erro ao enviar o e-mail de confirmação!<br />Por favor, tente novamente.";
$LANG[12076] = "Desculpe, ocorreu algum erro!";
$LANG[12041] = "Siga as instruções enviadas para o e-mail";
$LANG[12042] = "Caso não consiga localizá-las, verifique a \"caixa de spam\" ou \"lixeira\", pois seu servidor de e-mail pode nos confundir com um spammer.";
$LANG[12114] = "Olá!<br /><br />Existe uma conta em nosso servidor registrada com seu endereço de e-mail.<br />Recentemente foi realizado um pedido de alteração desse endereço. Se você realizou este pedido e concorda que a conta seja transferida para o novo endereço de e-mail, clique no link abaixo ou copie-o e cole no navegador, caso contrário ignore este e-mail.<br /><br />";
$LANG[39000] = "Painel de Usuário";
$LANG[39001] = "Pendente";
$LANG[39002] = "Pago";
$LANG[39003] = "Entregue";
$LANG[39004] = "Cancelada";
$LANG[39005] = "A página que você está tentando acessar não existe.";
$LANG[39006] = "É necessário selecionar um personagem válido e ao menos 1 item para efetuar uma compra!";
$LANG[39007] = "Para ter acesso ao painel, insira os dados necessários.";
$LANG[39008] = "Mundo";
$LANG[39009] = "Adicionar";
$LANG[39010] = "Adquirir";
$LANG[39011] = "Doações Realizadas";
$LANG[39012] = "Configurações";
$LANG[39013] = "Clique no botão abaixo para efetuar o pagamento.";
$LANG[39014] = "Serviço";
$LANG[39015] = "Custo";
$LANG[39016] = "Personagem selecionado";
$LANG[39017] = "Executar";
$LANG[39018] = "Clique novamente para confirmar";
$LANG[39019] = "Possibilita alterar a cor do nickname do seu personagem.";
$LANG[39020] = "Insira o código da cor abaixo. Caso não saiba nenhum código, <a href='http://www.colorpicker.com/'>clique aqui</a>.";
$LANG[39021] = "Cor";
$LANG[39022] = "Possibilita alterar a cor do título do seu personagem.";
$LANG[39023] = "Remove completamente o karma do personagem selecionado.";
$LANG[39024] = "Basta clicar no botão abaixo para que o procedimento seja efetuado.";
$LANG[39025] = "Reseta a quantidade de pontos pk do personagem selecionado.";
$LANG[39026] = "Ao clicar no botão abaixo o personagem selecionado ficará com 0 pontos PK (Player Kill).";
$LANG[39027] = "Possibilita alterar o nome do personagem selecionado.";
$LANG[39028] = "Insira o novo nome e clique no botão abaixo.";
$LANG[39029] = "Repita nickname";
$LANG[39030] = "Possibilita alterar o nome do clan do personagem selecionado.";
$LANG[39031] = "Obs: Apenas o líder do clan pode alterar o nome.";
$LANG[39032] = "Repita nome";
$LANG[39033] = "Altera o sexo/gênero do personagem selecionado.";
$LANG[39034] = "Selecione o gênero e confirme clicando no botão abaixo.";
$LANG[39035] = "Novo gênero";
$LANG[39036] = "Masculino";
$LANG[39037] = "Feminino";
$LANG[39038] = "Possibilita transferir o personagem selecionado para outra conta.";
$LANG[39039] = "Só é possível transferir para contas que utilizam o mesmo e-mail. Selecione a conta e confirme clicando no botão abaixo.";
$LANG[39040] = "Nenhuma conta encontrada";
$LANG[39041] = "Categoria";
$LANG[39042] = "Selecione os itens que deseja comprar.";
$LANG[39043] = "Nenhum item encontrado.";
$LANG[39044] = "Informações da conta";
$LANG[39045] = "Últimos acessos ao painel";
$LANG[39046] = "Personagens";
$LANG[39047] = "Título";
$LANG[39048] = "Criado em";
$LANG[39049] = "Level Base";
$LANG[39050] = "Gênero";
$LANG[39051] = "Aliança";
$LANG[39052] = "Nobre";
$LANG[39053] = "Tempo Online";
$LANG[39054] = "Selecione uma classe válida!";
$LANG[39055] = "Este personagem atualmente possui o status %s até ";
$LANG[39058] = "Não existe nenhum pacote com este ID!";
$LANG[39059] = "Todas";
$LANG[39060] = "Todos os itens do pacote";
$LANG[39061] = "Move o personagem selecionado para um local seguro.";
$LANG[39062] = "Esse serviço é essencial caso não consiga abrir o jogo devido a erros críticos causados pela instalação incompleta do Lineage 2.";
$LANG[39063] = "Define o personagem selecionado como nobre.";
$LANG[39064] = "Um nobre possui skills e vantagens especiais in-game, como a permissão de participar de competições exclusivas e utilizar itens especiais.";
$LANG[39065] = "Concede o estado de herói ao personagem selecionado.";
$LANG[39066] = "Ele receberá uma aura, vários skills especiais e poderá usufruir de diversas vantagens in-game.";
$LANG[39067] = "Período";
$LANG[39068] = "Altera a base class do personagem selecionado.";
$LANG[39069] = "Todas as skills, dyes e atalhos serão removidos e ele poderá fazer parte de uma nova raça, de acordo com a classe selecionada.";
$LANG[39070] = "Concede vip status ao personagem selecionado.";
$LANG[39071] = "Poderá usufruir de diversas vantagens in-game. Basta selecionar abaixo a periodicidade desejada. Caso ele já possua o vip status, a periodicidade selecionada será somada à que ele já possui.";
$LANG[39072] = "meses";
$LANG[39073] = "mês";
$LANG[39074] = "A conta selecionada já possui a quantidade máxima de personagens!";
$LANG[39075] = "Não é possível prosseguir porque o personagem já possui essa classe como subclass!";
$LANG[12004] = "Para prosseguir você precisa concordar com os termos!";
$LANG[20001] = "Aguarde...";
$LANG[11015] = "Por favor, verifique sua conexão com a internet. A página está demorando demais para responder.";
$LANG[11016] = "Desculpe, ocorreu algum erro! Por favor, tente novamente.";
$LANG[12008] = "Selecione";
$LANG[12011] = "Líder";
$LANG[12013] = "Nome";
$LANG[12014] = "dia";
$LANG[12019] = "Não possui conta?";
$LANG[12020] = "Esqueceu sua senha?";
$LANG[12023] = "Sair";
$LANG[12028] = "Este site foi desenvolvido pela Atualstudio";
$LANG[12034] = "Recuperar";
$LANG[12037] = "Senha atual";
$LANG[12039] = "Doações";
$LANG[12047] = "Nova Senha";
$LANG[12048] = "Repita Senha";
$LANG[12049] = "Senha";
$LANG[12055] = "Ocorreu uma falha! Por favor, tente novamente.";
$LANG[12056] = "Operação efetuada com sucesso!";
$LANG[12057] = "Preencha o código de segurança corretamente!";
$LANG[12058] = "Preencha todos os campos do formulário!";
$LANG[12077] = "Cadastrar";
$LANG[12090] = "Para alterar seus dados, preencha os campos abaixo. Caso queira alterar a senha, é necessário inserir a nova senha duas vezes para evitar futuros transtornos devido a erros de digitação.";
$LANG[12091] = "Senha atual incorreta!";
$LANG[12092] = "As senhas inseridas nos campos \"Senha\" e \"Repita Senha\" não são iguais!";
$LANG[12093] = "Sua senha não pode ultrapassar os 16 caracteres!";
$LANG[12098] = "O personagem está PK!";
$LANG[12099] = "O personagem está Online!";
$LANG[12100] = "Nenhum personagem encontrado!";
$LANG[16000] = "Insira um nome com apenas letras e números, sem espaços ou caracteres especiais! (a-zA-Z0-9)";
$LANG[16001] = "O nome não pode ultrapassar 16 caracteres!";
$LANG[16002] = "Último login";
$LANG[16003] = "Criada em";
$LANG[16004] = "Ainda não houve";
$LANG[16005] = "Último IP";
$LANG[10003] = "Alterar dados";
$LANG[10010] = "Serviços";
$LANG[10011] = "Comprar";
$LANG[10013] = "Transferir";
$LANG[10015] = "Meus Pedidos";
$LANG[10024] = "Selecione um personagem, uma quantidade e um método de pagamento!";
$LANG[10025] = "Quantidade inválida! Tente outra.";
$LANG[10026] = "Personagem inválido! Tente outro.";
$LANG[10027] = "Método de pagamento inválido! Tente outro.";
$LANG[10029] = "Protocolo";
$LANG[10030] = $coinName_mini."'s Compradas";
$LANG[10031] = $coinName_mini."'s Bônus";
$LANG[10032] = "Total de ".$coinName_mini."'s a receber";
$LANG[10033] = "Personagem que irá receber";
$LANG[10034] = "Valor a ser pago";
$LANG[10035] = "Data do pedido";
$LANG[10036] = "Última atualização de status";
$LANG[10037] = "Método de Pagamento";
$LANG[10038] = "Status";
$LANG[10039] = "Ainda não houve";
$LANG[10040] = "Pagar";
$LANG[10042] = "Pagar agora";
$LANG[10045] = "<b>Importante:</b> Os horários estão de acordo com o Data Center do servidor.";
$LANG[10046] = "<b>Essa fatura não existe ou não é sua. Verifique sua lista de <a href='./?module=donate&page=orders'>pedidos</a>.</b>";
$LANG[10047] = "Fazer Novo Pedido";
$LANG[10052] = "Fatura";
$LANG[10053] = "O ".$server_name." é um servidor livre de pagamento obrigatório, para que todos possam desfrutar do mundo do Lineage II gratuitamente, mas o servidor possui alguns gastos. Ao comprar ".strtolower($coinName_mini)."'s você estará ajudando o ".$server_name." a crescer e manter todos os seus serviços disponíveis em tempo integral.<br /><br />Você pode adquirir diversos itens no jogo e usufruir de alguns serviços alternativos em nosso website utilizando ".$coinName."'s.";
$LANG[10054] = "Eu li e aceito os Termos para compras de ".strtolower($coinName_mini)."'s expressos acima";
$LANG[10055] = "Informe os dados necessários a seguir e clique em \"Fazer Pedido\". Um novo pedido será realizado e uma janela se abrirá com a fatura para o pagamento. Esse mesmo pedido poderá ser acessado posteriormente na página de <a href=\"?module=donate&page=orders\">Meus Pedidos</a>.";
$LANG[10056] = "Personagem";
$LANG[10057] = "Quantia desejada";
$LANG[10058] = "Valor total";
$LANG[10059] = "Forma de Pagamento";
$LANG[10060] = "bônus";
$LANG[10061] = "Fazer pedido";
$LANG[10064] = "Por favor, verifique sua conexão com a internet. A página está demorando demais para responder.";
$LANG[10065] = "Desculpe, ocorreu algum erro! Por favor, tente novamente.";
$LANG[10066] = "Selecione o personagem e execute algum dos serviços disponíveis.";
$LANG[10068] = "Saldo";
$LANG[10070] = "Preço";
$LANG[10088] = "Selecione um personagem!";
$LANG[10089] = "Este personagem não possui clan!";
$LANG[10095] = "Novo nome";
$LANG[10097] = "Você não possui ".strtolower($coinName_mini)."'s suficientes!";
$LANG[10099] = "Por favor, repita o nome corretamente!";
$LANG[10100] = "Você não é o líder deste clan!";
$LANG[10104] = "Este personagem não está PK!";
$LANG[10115] = "Valor";
$LANG[10116] = "Data";
$LANG[10117] = "Última atualização";
$LANG[10118] = "Método Pag.";
$LANG[10119] = "pedido(s) encontrado(s)";
$LANG[10120] = "Excluir";
$LANG[10121] = "Cancelar";
$LANG[10122] = "Tem certeza que deseja excluir o pedido de protocolo";
$LANG[10124] = "Você ainda não realizou nenhum <a href=\"./?module=donate&page=add\">pedido</a>";
$LANG[10125] = "Esse pedido não foi feito por você!";
$LANG[10126] = "Você não pode excluir este pedido!";
$LANG[10163] = "Caso queira transferir ".strtolower($coinName_mini)."'s, preencha os campos abaixo.";
$LANG[10165] = "Quantidade de ".strtolower($coinName_mini)."'s que será transferida.";
$LANG[10166] = "Nome do personagem que receberá as ".strtolower($coinName_mini)."'s.";
$LANG[10167] = "Destinatário";
$LANG[10168] = "Quantidade";
$LANG[10169] = "Por motivos de segurança, por favor, repita a quantidade e destinatário:";
$LANG[10170] = "Transferir";
$LANG[10171] = "As quantidades inseridas não coincidem! Por favor, corrija e tente novamente.";
$LANG[10172] = "Os nomes de destinatário inseridos não coincidem! Por favor, corrija e tente novamente.";
$LANG[10174] = "Não é possível efetuar a transferência neste momento por que";
$LANG[10175] = "está online!";
$LANG[11979] = "Preencha o captcha corretamente!";
$LANG[11990] = "Dados incorretos!";
$LANG[11999] = "Modificações em clans poderão entrar em vigor apenas após um restart server";
$LANG[12000] = "Nenhum personagem foi encontrado com esse nome!";
$LANG[14000] = "Termos para compras de ".$coinName_mini."'s";
$LANG[14001] = "Ao comprar, esteja ciente de que você não possui nenhum privilégio perante aos outros jogadores. Todos estão sujeitos às mesmas regras e punições.<br /><br />
Não nos responsabilizamos pela segurança e destino do item após ter sido entregue a seu personagem. Não iremos reembolsar algo caso você os perca pelas características padrões do jogo ou por algum descuido com a segurança de sua conta.<br /><br />
Não iremos, em hipótese alguma, reembolsar o dinheiro da compra, entretanto, garantimos a entrega do que foi comprado ao seu personagem selecionado dentro dos prazos e condições estabelecidos à seguir.<br /><br />
<b>Prazos e Entrega</b><br /><br />
O prazo para a entrega varia de acordo com a forma de pagamento escolhida, podendo ser de poucos minutos para compras feitas através de transferência online ou cartão de crédito, ou até 72h para compras feitas através de boleto bancário.<br /><br />
Receberemos automaticamente dos sites intermediadores notificações sobre a transação. Não há necessidade de confirmação de pagamento via e-mail ou envio de comprovantes, nosso sistema é totalmente automático.<br /><br />
Por motivos de segurança o nosso sistema somente entregará caso o seu personagem esteja offline no momento em que o pagamento for aprovado. Mas não se preocupe, se o seu personagem for encontrado online no momento da entrega, uma nova tentativa de entrega será realizada automaticamente a cada hora, até que seu personagem se encontre offline e a entrega seja feita.<br /><br /><br />
Disputas nos sites de pagamento, tentativas de Chargeback ou atitudes fraudulentas, não serão toleradas. Nesses casos iremos bloquear suas contas e computadores até que o problema seja avaliado e resolvido, podendo o bloqueio ser permanente dependendo do ocorrido.<br /><br />
Caso aconteça algum problema na entrega automática, tudo o que você tem a fazer é entrar em contato conosco. Não entre em contato antes de um período de 24h após a confirmação de seu pagamento.<br />
";
$LANG[14004] = "Esse nome já está em uso!";
$LANG[15003] = "Transação bancária";
$LANG[15004] = "Após o pagamento envie o comprovante para";
$LANG[15005] = "Deposite ou transfira para seguinte conta bancária";

