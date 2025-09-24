# Caso de Uso: Gerenciamento de Pacientes

## 1. Atores
- **Enfermeira**

## 2. Pré-condições
-

## 3. Fluxo Principal (Caminho Feliz)

### a) Criar Paciente
1. O ator seleciona a opção **"Adicionar Novo Paciente"**.  
2. O sistema exibe um formulário com os campos: **Nome Completo, CPF, Data de Nascimento, Telefone, Endereço, etc.**  
3. O ator preenche os dados obrigatórios e clica em **"Salvar"**.  
4. O sistema valida os dados (ex.: verifica se o CPF é válido e único).  
5. O sistema salva o novo paciente no banco de dados e exibe uma mensagem de sucesso.  

### b) Consultar/Visualizar Paciente
1. O ator acessa a lista de pacientes.  
2. O ator busca por um paciente pelo **nome** ou **CPF**.  
3. O ator clica no nome do paciente desejado na lista.  
4. O sistema exibe todos os detalhes do paciente selecionado incluindo os últimos exames.  

### c) Atualizar Paciente
1. O ator consulta um paciente (conforme fluxo **3.b**).  
2. O ator clica no botão **"Editar"**.  
3. O sistema habilita os campos do formulário para edição.  
4. O ator altera as informações desejadas e clica em **"Salvar"**.  
5. O sistema valida e salva as alterações, exibindo uma mensagem de sucesso.  

### d) Excluir Paciente
1. O ator consulta um paciente (conforme fluxo **3.b**).  
2. O ator clica no botão **"Excluir"**.  
3. O sistema exibe uma mensagem de confirmação.
4. O ator confirma a exclusão.  
5. O sistema remove o registro do paciente e exibe uma mensagem de sucesso.  

## 4. Fluxos Alternativos (Exceções)

### 4.1 CPF Duplicado
- Se, no fluxo de criação, o CPF informado já existir, o sistema deve exibir uma mensagem de erro informando que o CPF já está cadastrado.

### 4.2 CNS Duplicado
- Se, no fluxo de criação, o CNS (cartão Sus) informado já existir, o sistema deve exibir uma mensagem de erro informando que o CNS já está cadastrado.

### 4.3 Dados Inválidos
- Se qualquer campo obrigatório não for preenchido, o sistema deve indicar quais campos precisam de atenção antes de salvar.  

### 4.4 Cancelamento
- A qualquer momento, o ator pode clicar em **"Cancelar"** e a operação será interrompida, retornando à tela anterior sem salvar alterações.  

## 5. Pós-condições
- **Sucesso:** O registro do paciente foi criado, atualizado ou removido com sucesso do banco de dados.  
- **Falha:** O sistema permanece no estado anterior ao início da operação.  
