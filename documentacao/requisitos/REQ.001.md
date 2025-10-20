Histórias de Usuário: REQ001 — Controlar Estoque do Hospital
1. Narrativa (O Quê, Quem, Por Quê)

COMO UM dono de hospital,
EU DESEJO registrar, controlar e acompanhar a entrada e saída de medicamentos e materiais do estoque,
PARA QUE eu possa garantir que nunca faltem itens essenciais para os pacientes, evitar desperdícios e reduzir prejuízos.

2. Critérios de Aceitação (Regras de Negócio e Cenários)

Cenário 1: Registrar entrada de materiais/medicamentos

Dado que novos medicamentos ou materiais foram entregues ao hospital,

Quando o responsável pelo estoque acessa o formulário de “Entrada de Estoque”,

E insere informações como nome do item, quantidade, fornecedor, lote e data de validade,

E clica em “Salvar”,

Então o sistema deve registrar a entrada e atualizar automaticamente a quantidade total no estoque.

Cenário 2: Registrar saída para uso em pacientes ou setores

Dado que uma ala, sala cirúrgica ou farmácia interna solicita itens do estoque,

Quando o responsável acessa o módulo de “Saída de Estoque”,

E informa o item, quantidade, setor solicitante e motivo da retirada,

E confirma a operação,

Então o sistema deve reduzir a quantidade do item no estoque e registrar para qual setor foi destinado.