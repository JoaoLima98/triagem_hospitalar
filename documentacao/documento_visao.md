# Sistema de Fluxo Hospitalar

**Componentes:** João Neto, Jocian Douglas, Johnny Reberty  

O hospital possui um setor de triagem dividido em quatro fases, cada uma realizada por profissionais diferentes.  
O objetivo do sistema é centralizar as informações do paciente em um único registro, permitindo que cada setor atualize e complemente os dados.

---

## Fase 1 – Recepção
- Coleta de dados pessoais: número do Cartão SUS, CPF, endereço, telefone e outras informações cadastrais básicas.  
- Criação do registro inicial do paciente.  
- Persistência dos dados no banco de dados.  

---

## Fase 2 – Enfermagem
- O paciente é encaminhado para a enfermeira.  
- A enfermeira acessa o registro criado na recepção.  
- Registro dos sintomas relatados (ex.: febre, tosse, dor, falta de ar, alergias).  
- Dados vinculados ao cadastro inicial do paciente.  

---

## Fase 3 – Médico
- O médico acessa o registro preenchido pela recepcionista e pela enfermeira.  
- Adiciona informações complementares do exame clínico.  
- Faz o diagnóstico e prescreve medicamentos (somente a prescrição no sistema).  
- Registro do paciente finalizado e armazenado como histórico de atendimento.  

---

## Fase 4 – Farmacêutico
- O farmacêutico acessa o registro preenchido nas fases anteriores.  
- Controle de entrada e saída de medicamentos vinculados à prescrição médica.  

---

## Funcionalidades do Sistema
- Criar e manter os registros dos pacientes em fluxo contínuo, permitindo que cada setor acrescente informações.  
- Acompanhar o status de cada paciente (ex.: **em recepção → em triagem de enfermagem → em atendimento médico → em atendimento farmacêutico**).  
- Armazenar todo o histórico de atendimentos para consultas futuras.  
- Controle de estoque: entrada e saída de medicamentos.  

---

## Motivação
A proposta é substituir o atual sistema de acompanhamento hospitalar da cidade de **São Paulo do Potengi**.  

O sistema trará benefícios, como:  
- Maior velocidade no atendimento desde o primeiro cadastro.  
- Dados do paciente mantidos para futuras consultas.  

Atualmente, cada atendimento exige a criação manual de uma ficha do zero, processo que será eliminado pelo novo sistema.

---

## Diagrama de Casos de Uso

<img width="1286" height="1490" alt="Diagrama_caso_de_uso_Triagem_Hospitalar" src="https://github.com/user-attachments/assets/14f9cd76-919e-4977-a59b-b0e8119fd394" />

