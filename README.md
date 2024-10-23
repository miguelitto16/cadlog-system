# Sistema de Autenticação e Gestão de Usuários

Este é um sistema simples de autenticação de usuários e gestão de perfis, utilizando PHP e MySQL. O sistema conta com diferentes perfis de usuário: **Admin**, **Gestor**, e **Colaborador**, cada um com permissões específicas. Além disso, há funcionalidades de login, logout, cadastro de novos usuários e uma interface para a listagem e gerenciamento dos mesmos.

## Estrutura de Arquivos

### 1. **AuthController.php**
Este arquivo contém a lógica de autenticação, incluindo as funcionalidades de login e logout.

### 2. **DashboardController.php**
Este arquivo gerencia a exibição da página de dashboard para usuários autenticados.

### 3. **UserController.php**
Este arquivo contém funções para o gerenciamento dos usuários.

### 4. **Database.php**
Este arquivo contém a configuração de conexão com o banco de dados usando a extensão PDO.

### 5. **User.php**
Este arquivo é responsável pelo acesso ao banco de dados para as operações relacionadas aos usuários.

### 6. **Views**
Contém os arquivos HTML responsáveis pela interface visual do sistema:

### 7. **Routers.php**
Este arquivo roteia as ações solicitadas via URL para os respectivos controladores (AuthController, UserController, DashboardController).

# Funcionalidades Principais

O sistema implementa as seguintes funcionalidades:

### 1. Autenticação (Login/Logout)

Os usuários podem se autenticar no sistema fornecendo suas credenciais (email e senha). Se o login for bem-sucedido, uma sessão é criada e o usuário é redirecionado para uma área específica (dashboard). Caso contrário, o sistema retorna mensagens de erro adequadas. O logout encerra a sessão ativa, protegendo a conta do usuário.

### 2. Cadastro de Usuários

Um formulário permite que novos usuários sejam registrados no sistema. Para garantir a segurança, as senhas são armazenadas de forma segura no banco de dados, usando a função `password_hash()`, que aplica hashing e salting, tornando as senhas mais difíceis de serem decifradas.

### 3. Listagem e Gerenciamento de Usuários

O sistema oferece a possibilidade de listar todos os usuários cadastrados no banco de dados, desde que o perfil autenticado tenha as permissões necessárias (como Admin ou Gestor). Dependendo do perfil, pode-se editar ou excluir usuários da base de dados.

---

# Perfis de Usuário

O sistema define três perfis principais, cada um com permissões específicas:

### a) Admin
- **Permissões**: O administrador tem controle total sobre o sistema. Ele pode gerenciar (criar, editar, excluir) todos os usuários e visualizar todas as informações do sistema.
- **Funções**:
  - Acesso ao painel de controle (dashboard) com visão geral do sistema.
  - Listagem de todos os usuários.
  - Capacidade de editar e excluir qualquer usuário.
  - Registro de novos usuários.
  - Acesso às funcionalidades de auditoria e logs, se implementadas.

### b) Gestor
- **Permissões**: O gestor tem permissões intermediárias. Ele pode gerenciar os colaboradores e supervisionar algumas operações, mas não tem o mesmo nível de controle que o administrador.
- **Funções**:
  - Acesso ao painel de controle (dashboard) com dados limitados às suas responsabilidades.
  - Listagem e visualização de usuários dentro de sua equipe ou departamento.
  - Edição de perfis de colaboradores, mas sem acesso a funcionalidades sensíveis ou de administração completa.

### c) Colaborador
- **Permissões**: Este é o perfil mais básico, com acesso restrito. O colaborador só pode visualizar suas próprias informações e acessar o conteúdo autorizado para seu nível de permissão.
- **Funções**:
  - Acesso a uma versão limitada do painel de controle.
  - Visualização e edição de suas próprias informações.
  - Acesso a relatórios ou funcionalidades operacionais relacionadas ao seu trabalho.
