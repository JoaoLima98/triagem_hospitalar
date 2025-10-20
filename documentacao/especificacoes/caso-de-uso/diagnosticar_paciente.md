# Caso de Uso: Diagnosticar Paciente

## 1. Atores

-   **Médico**
    

## 2. Pré-condições
  
-   O paciente deve ter um registro de triagem e estar na fila de atendimento (ter passado pelo caso de uso "Fazer Triagem").
    

## 3. Fluxo Principal (Caminho Feliz)

### a) Atender e Diagnosticar Paciente

1.  O ator (Médico) acessa a tela da **"Fila de Atendimento"**.
    
2.  O sistema exibe a lista de pacientes aguardando.
    
3.  O ator seleciona o próximo paciente.
    
4.  O sistema exibe uma tela consolidada com:
    
    -   Os dados cadastrais do paciente.
        
    -  As triagens associadas a ele, incluindo a da data atual.
        
5.  O ator realiza a consulta e preenche o formulário de diagnóstico/evolução com os seguintes campos:
    
    -   **Diagnóstico:** Campo de texto livre para descrever o diagnóstico médico.
        
    -   **Observações/Prescrição:** Campo para detalhar medicamentos, dosagens, tratamentos, solicitar exames e informações adicionais relevantes sobre o atendimento.
        
    -   **Motivo da Saída:** Uma seleção (ex: "Alta", "Alta com receita", "Óbito").
        
6.  Após o preenchimento, o ator clica em **"Finalizar Atendimento"**.
    
7.  O sistema valida se os campos obrigatórios (como Diagnóstico e Motivo da Saída) foram preenchidos.
    
8.  O sistema salva o registro na tabela `prescricao`, preenchendo automaticamente `data_prescricao`, `horario_saida` e associando o `id_triagem`.
    
9.  O sistema atualiza o estado do paciente.
    
10.  O sistema exibe uma mensagem de sucesso: "Atendimento finalizado com sucesso".
    

## 4. Fluxos Alternativos (Exceções)
  

### 4.1 Dados Inválidos ou Incompletos

-   Se o ator tentar finalizar o atendimento sem preencher campos obrigatórios (ex: `Diagnóstico` ou `Motivo da Saída`), o sistema deve exibir uma mensagem de erro, impedir o salvamento e destacar visualmente os campos que precisam ser preenchidos.
    

### 4.2 Cancelamento

-   A qualquer momento antes de salvar, o ator pode clicar em **"Cancelar"**.
    
-   A ação deve ser confirmada.
    
-   Se confirmado, o sistema descarta todas as informações inseridas, e o status do paciente retorna para "Aguardando Atendimento" no topo da sua categoria de risco na fila.
    

## 5. Pós-condições

-   **Sucesso:** O registro do diagnóstico e da conduta médica foi salvo e associado à triagem. O paciente foi removido da fila de atendimento e seu status foi atualizado conforme o motivo da saída.
    
-   **Falha:** O sistema permanece no estado anterior. O paciente continua na fila aguardando atendimento.