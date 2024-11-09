# Desafio vaga Dev PHP :: 2024.2.

## O gerente da associação "Devs do RN", precisa de um software para facilitar a gerência dos associados e suas anuidades. Pensando nas necessidades do gerente, listamos abaixo as funcionalidades que o software precisa ter.

- Cadastro de associados, com: Nome, E-mail, CPF e Data de filiação.
- Cadastro de anuidades, com: Ano e Valor.
  - Cada ano, o valor da anuidade pode ser diferente. Ex: 2022 = R$100,00 / 2023 = R$110,00 / 2024 = R$ 150,00.
  - Esse valor deve ser facilmente ajustado pelo gerente.
- Cobrança das anuidades do associado.
  - "Checkout" das anuidades devidas pelo associado, calculando valor devido por anuidade e valor total devido.
  - Considere a Data de filiação para saber quais anuidades são devidas pelo associado.
- "Pagamento" da anuidade de um associado.
  - Para este teste o pagamento será simplesmente uma flag no banco de dados, indicando se a anuidade foi paga ou não.
  - Cada anuidade poderá ser paga individualmente. Ex: O associado João deve 3 anuidades e quer quitar apenas uma, essa ação deve ser permitida.
- O software também deve ser capaz de identificar quais são os associados com pagamento em dia e quais estão em atraso.
  - Para isso considere todo novo associado devedor da anuidade corrente.

### Regras para o desenvolvimento

- A aplicação deve ser um monolito fullstack, escrita em PHP Puro (sem framework)
- Use um banco de dados relacional
- Use git para versionar seu código
- Na raiz do seu projeto crie um arquivo chamado meu_database.sql e adicione o sql de criação do seu banco de dados
- Poste seu projeto no github e envie o link respondendo este e-mail até o dia 11/11/2024 às 23:59.
- No README do seu projeto deixe as instruções de como instalar e testar sua aplicação.

# Boa Sorte!!!
