README - Sistema de Gestão de Usuários e Produtos
Bem-vindo ao Sistema de Gestão de Usuários e Produtos! Este documento irá guiá-lo através das funcionalidades e do funcionamento básico do nosso sistema, mesmo que você não tenha experiência prévia em programação.

Visão Geral do Projeto
Este projeto é um sistema simples que permite a gestão de usuários e produtos. Ele possui funcionalidades de login e senha, além de diferentes níveis de acesso para administradores e clientes.

Funcionalidades Principais
Cadastro de Usuários: Permite registrar novos usuários no sistema.
Login: Usuários podem entrar no sistema usando um nome de usuário e uma senha.
Níveis de Acesso:
Administrador: Possui acesso completo ao sistema, podendo gerenciar usuários e produtos.
Cliente: Tem acesso limitado, podendo visualizar e comprar produtos.
Gestão de Produtos: Permite adicionar, editar, visualizar e excluir produtos no sistema.
Tecnologias Utilizadas
Backend (Servidor): A lógica do sistema e as funcionalidades estão implementadas em PHP e Mysql(banco de dados).
Frontend (Interface de Usuário): O que os usuários veem e interagem é construído com HTML e CSS.
Banco de Dados: Armazena todas as informações sobre usuários e produtos.
Passo a Passo para Utilização
1. Cadastro de Usuário
Para utilizar o sistema, o primeiro passo é se cadastrar.

Acesse a Página de Cadastro: Preencha as informações necessárias, como nome, e-mail, senha e nível de acesso (administrador ou cliente).
Envie o Formulário: Após preencher, clique no botão de envio para se registrar.
2. Login
Depois de se cadastrar, você pode fazer login.

Acesse a Página de Login: Insira seu nome de usuário e senha.
Clique em "Entrar": Se as credenciais estiverem corretas, você será redirecionado para a página principal do sistema.
3. Funcionalidades do Administrador
Se você estiver logado como administrador, terá acesso a mais funcionalidades.

Gerenciamento de Usuários: Pode adicionar novos usuários, editar informações existentes, ou excluir usuários.
Gerenciamento de Produtos: Pode adicionar novos produtos, editar detalhes dos produtos existentes, ou excluir produtos.
4. Funcionalidades do Cliente
Se você estiver logado como cliente, suas funcionalidades serão limitadas.

Visualizar Produtos: Pode ver a lista de produtos disponíveis.

5. Logout
Para sair do sistema, basta clicar no botão de logout que geralmente está localizado no canto superior direito da tela.

Estrutura de Arquivos do Projeto
/backend/: Contém todos os arquivos de lógica e funcionalidade do servidor.
/frontend/: Contém os arquivos de interface do usuário (HTML, CSS).
/database/: Contém os arquivos do banco de dados.
Como Executar o Projeto
Clone o Repositório: Baixe os arquivos do projeto para o seu computador.
Instale as Dependências: Utilize um gerenciador de pacotes para instalar as dependências necessárias.
Inicie o Servidor: Execute o comando para iniciar o servidor backend.
Acesse a Interface: Abra o navegador e acesse a interface de usuário através do endereço fornecido pelo servidor.
Conclusão
Este sistema foi desenvolvido para ser uma solução simples e eficiente para a gestão de usuários e produtos, oferecendo funcionalidades básicas de CRUD (Criar, Ler, Atualizar, Excluir) e diferentes níveis de acesso. Esperamos que este guia tenha sido claro e útil para entender e utilizar o sistema.