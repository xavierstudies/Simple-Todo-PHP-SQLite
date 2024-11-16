# ToDo List App

Uma aplicação simples de lista de tarefas (ToDo List) desenvolvida com **PHP**, **Bootstrap** e **SQLite**.

## 📋 Funcionalidades

- Adicionar novas tarefas.
- Marcar tarefas como concluídas.
- Excluir tarefas.
- Visualizar uma lista de tarefas pendentes e concluídas.

## 🚀 Tecnologias Utilizadas

- **PHP**: Back-end para gerenciamento de tarefas.
- **Bootstrap**: Framework CSS para design responsivo.
- **SQLite**: Banco de dados leve para armazenar tarefas.

## 🛠️ Pré-requisitos

Para rodar esta aplicação, você precisará de:

- Servidor PHP (por exemplo, [XAMPP](https://www.apachefriends.org/) ou [WAMP](https://www.wampserver.com/)).
- PHP 7.4 ou superior.
- SQLite.

## 📦 Instalação

1. **Clone este repositório:**
   ```bash
   git clone https://github.com/seu-usuario/todolist-php-bootstrap-sqlite.git
   cd todolist-php-bootstrap-sqlite
   ```

2. **Configure o banco de dados SQLite:**
   - O arquivo `todo.db` já está incluído no repositório.
   - Certifique-se de que a pasta `data/` tenha permissão de escrita:
     ```bash
     chmod -R 777 data/
     ```

3. **Inicie o servidor PHP:**
   ```bash
   php -S localhost:80
   ```

4. **Acesse a aplicação:**
   Abra o navegador e vá para: [http://localhost:80](http://localhost:80)

## 📂 Estrutura do Projeto

```
📁 todolist-php-bootstrap-sqlite
├── 📁 static/           # Arquivos do Bootstrap
├── 📁 data/             # Arquivos do banco de dados SQLite
│   └── todo.db
├── 📄 index.php         # Página inicial
├── 📄 addTarefa.php      # Script para adicionar tarefas
├── 📄 updateTarefa.php   # Script para marcar como concluída
├── 📄 deleteTarefa.php   # Script para excluir tarefas
└── 📄 README.md         # Documentação
```

## 🎨 Layout

A interface foi criada com **Bootstrap**, garantindo uma experiência simples e responsiva para o usuário. Aqui está uma prévia do layout:

- **Página Inicial**:
  - Lista de tarefas pendentes.
  - Botões para marcar como concluída ou excluir.
  - Formulário para adicionar novas tarefas.

## 🐛 Problemas e Contribuições

Se encontrar algum problema, sinta-se à vontade para abrir uma [issue](https://github.com/seu-usuario/todolist-php-bootstrap-sqlite/issues). Contribuições também são bem-vindas! Faça um fork do projeto e envie um pull request. 

## 📝 Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

👨‍💻 **Criado por [Xavier](https://github.com/xavierstudies)**
