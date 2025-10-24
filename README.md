# 🔐 Password Generator (PHP)

Este projeto implementa uma **classe orientada a objetos em PHP** para geração de senhas dinâmicas, configuráveis e seguras.  
Ele demonstra boas práticas de **POO**, uso de **tipagem estrita**, e manipulação de strings com funções nativas do PHP.

---

## 📘 Descrição

A classe `Password` permite criar senhas personalizadas com base em parâmetros definidos pelo usuário:

- **Tamanho da senha**
- **Inclusão de números**
- **Inclusão de símbolos**
- **Letras minúsculas**
- **Letras maiúsculas**

O método `generatePassword()` é responsável por montar o conjunto de caracteres permitido e gerar a senha final embaralhada, respeitando os requisitos informados.

---

## ⚙️ Estrutura do Projeto

```
PasswordGenerator/
│
├── src/
│   ├── Models/
│   │   └── Password.php       # Classe principal de geração de senha
│   └── index.php              # Arquivo de execução para testes
│
├── vendor/                    # Dependências geradas pelo Composer (autoload)
└── README.md                  # Documentação do projeto
```

---

## 🧠 Funcionamento da Classe

### 🔹 Construtor

Define as propriedades do objeto com os parâmetros fornecidos:

```php
__construct(int $length, bool $numbers, bool $symbols, bool $includeLowerCase, bool $includeUpperCase)
```

Exemplo:
```php
$senha = new Password(12, true, true, true, true);
```

### 🔹 Método `minimumPasswordRequeriments()`

Verifica se a senha atende ao requisito mínimo: possuir **letras minúsculas** ou **maiúsculas**.

### 🔹 Método `generatePassword()`

Cria a senha final combinando os caracteres escolhidos:

```php
$this->password = substr(
    str_shuffle(
        str_repeat($caracteres, $this->length)
    ),
    0,
    $this->length
);
```

**Explicação detalhada:**
- `str_repeat()` → repete os caracteres-base até alcançar o tamanho necessário.
- `str_shuffle()` → embaralha a ordem dos caracteres de forma aleatória.
- `substr()` → corta o resultado para que tenha exatamente o tamanho definido.

---

## 🚀 Exemplo de Uso

Arquivo: `src/index.php`

```php
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Password;

$testingPassword = new Password(
  20,    // Tamanho da senha
  false, // Incluir números
  true,  // Incluir símbolos
  false, // Incluir letras minúsculas
  true   // Incluir letras maiúsculas
);

echo $testingPassword->generatePassword() . "\n";
```

Saída esperada:
```
@!QD@X@+RZ$#S@)_QW^(
```

---

## 🧩 Requisitos

- PHP 8.0 ou superior  
- Composer (para o autoload)

---

## ▶️ Como Executar

1. Instale as dependências (se houver):
   ```bash
   composer install
   ```

2. Execute o script principal:
   ```bash
   php src/index.php
   ```

3. Uma senha será exibida no terminal conforme as configurações informadas.

---

## 🧱 Estrutura POO Utilizada

- **Encapsulamento:** as propriedades são privadas e acessadas apenas pela classe.  
- **Coesão:** a classe é responsável por uma única tarefa — gerar senhas.  
- **Responsabilidade única:** cada método cumpre uma função clara.

---

## 🧩 Melhorias Futuras

- Implementar geração **criptograficamente segura** usando `random_int()`.  
- Adicionar validação de força da senha (fraca, média, forte).  
- Criar interface CLI com opções interativas.

---

## 📄 Licença

Este projeto é de uso livre para fins educacionais e demonstração de boas práticas em PHP orientado a objetos.
