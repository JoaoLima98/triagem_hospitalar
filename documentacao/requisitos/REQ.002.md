Histórias de Usuário: REQ002 — Gerenciar Usuários e Acessos ao Sistema
1. Narrativa (O Quê, Quem, Por Quê)

COMO UM administrador do hospital,
EU DESEJO cadastrar, editar, bloquear e definir permissões para médicos, enfermeiros, farmacêuticos e balconistas,
PARA QUE cada funcionário tenha acesso apenas às funções necessárias para seu trabalho, garantindo segurança e organização no sistema.

2. Critérios de Aceitação (Regras de Negócio e Cenários)

Cenário 1: Criar login para novos usuários do hospital

Dado que um novo funcionário foi contratado (ex: médico, enfermeiro, farmacêutico ou balconista),

Quando o administrador acessa a tela de “Cadastrar Usuário”,

E preenche nome, função, CPF, e-mail e define login e senha,

E atribui o tipo de acesso conforme o cargo,

Então o sistema deve criar o usuário e liberar o acesso ao painel correspondente.

Cenário 2: Editar informações ou permissões de um usuário existente

Dado que o administrador precisa atualizar dados ou permissões de um usuário,

Quando ele acessa a lista de usuários cadastrados,

E clica em “Editar”,

E modifica dados como cargo, senha, status ou nível de acesso,

Então o sistema deve salvar as alterações imediatamente e aplicar as novas permissões.

Cenário 3: Bloquear ou desativar usuário do sistema

Dado que um funcionário foi desligado ou está afastado,

Quando o administrador seleciona o usuário e clica em “Desativar/ Bloquear Acesso”,

Então o sistema deve impedir novos logins daquele usuário, mantendo seu histórico de ações registrado.

Cenário 4: Consultar lista de usuários e níveis de acesso

Dado que o administrador deseja visualizar quem tem acesso ao sistema,

Quando ele abre o módulo de “Usuários e Acessos”,

Então o sistema deve exibir uma tabela com nome, função, status (ativo/inativo), último acesso, e nível de permissão.

Cenário 5: Registrar log de ações dos usuários

Dado que o sistema precisa garantir segurança e auditoria,

Quando qualquer usuário realizar ações como login, cadastro, edição ou exclusão de dados,

Então o sistema deve registrar automaticamente a ação, com data, horário, usuário e descrição do que foi feito.