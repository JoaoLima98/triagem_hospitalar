# Processos do Projeto 
Definição de Padrões e Processo de Desenvolvimento de Software
Processo

Papeis
- Analista de Negócio : Responsável por entender as necessidades do hospital para transpassar para o sistema, sem perder a essência do processo atual da instituição, e ajudar na criação da documentação.
- Analista de Req/Q : Responsável por detalhar, documentar e gerenciar os artefatos de requisitos, garantindo a qualidade do produto.
- Desenvolvedor : Responsável por projetar e construir o software, transformando os artefatos de requisitos detalhados em código funcional.

Artefatos
- Documento de Visão : Artefato responsável por compreender uma visão geral do produto que está sendo desenvolvido.
- Especificações de caso de uso: Artefato que descreverá uma funcionalidade do sistema.
- Produto : Artefato executável e entregável do que foi solicitado e desenvolvido.

Atividades
- Analisar Negócio : Entender o contexto, objetivos, problemas e oportunidades que necessitam o hospital. Resulta na definição de escopo e em uma visão geral de cada funcionalidade.
- Especificar : Detalhar as funcionalidades de alto nível em Histórias de Usuário claras e testáveis.
- Codificar : Escrever, testar unitariamente e integrar o código-fonte para implementar as funcionalidades definidas nas Histórias de Usuário.
Padrões Estabelecidos para o Desenvolvimento

Padrão de Diretórios - Artefatos só podem ser criados dentro dessa estrutura estabelecida.

    Requisistos : Artefatos que desencadeará a descrição das funcionalidades funcionais e não funcionais do programa.
    Código Fonte : Artefatos de código/configuração do programa, aplicação/produto em si.

Padrão para criar os Artefatos de Requisitos - Os artefatos de requisitos deverão representar apenas uma funcionalidade, seguir o padrão de nomenclatura estabelecido e descrito pelo ambiente e uma estrutura de diretório com nomes significativos para organizar esses artefatos dentro do diretório padrão de Requisitos.

    A estrutura de diretórios que armazenará esses artefatos de requisitos criados e mantidos no diretório Requisitos, deverá seguir esta classificação primária : (a) para as necessidades do domínio do problema, os artefatos de requisitos deverão ser organizados no diretório Requisitos Funcionais; (b) para os documentos que descrevem a especificação de cada caso de uso devem ficar no diretório "especificacoes"; para os documentos que dizem respeito ao proceso devem estar presente no diretório "processos".

    Padrão de nomenclatura
        Todos os arquivos arquivos utilizando os caractéres em minusculo e sempre separados por hífens (-), com o nome que descreve sua função, exemplo: caso-fazer-triagem.md
        Os arquivos de especificações de determinado caso de uso começam com "caso" seguido do caso que ele descreve, exemplo: caso-gerenciar-paciente.md
