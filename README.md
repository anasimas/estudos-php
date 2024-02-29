## Repositório dedicado as atividades de *PHP*
---
**Atividade 01:**

**1. Explique a diferença entre variáveis do tipo string e do tipo inteiro em PHP.**

 As variáveis do tipo string suportam sequências de caracteres, já as variáveis do tipo inteiro, recebem números sem casas decimais.

**2. Quais são os operadores lógicos mais comuns em PHP e como eles são utilizados em expressões condicionais?**

Os operadores mais comuns são aritiméticos, lógicos e de comparação. Os aritiméticos tem +, -, /, *, % como exemplo. Os operadores lógicos são &&, ||, ! e os operadores de comparação são ==, !=, <, >, <= ou >=.

**3. Como você definiria a tipagem dinâmica em PHP? Dê um exemplo.**

A tipagem dinâmica significa que o tipo de uma variável depende do dado atribuído a ela, por exemplo, ao atribuir o valor 30 para a variável $valor, ela será do tipo inteiro.

**4. Explique o propósito da estrutura de controle if e forneça um exemplo de uso.**

Permite que o fluxo de execução seja desviado de acordo com condições lógicas, aritiméticas ou comparativas:

`if($valor > 10){
   echo "O valor é maior que 10";
}`

**5. O que é o operador de módulo (%) e como ele pode ser útil em PHP?**

Realiza o cálculo do resto da divisão, por exemplo, 8%6 = 2 pois 8 divido por 6 tem como resto, o valor 2.

**6. Qual é a importância do ponto e vírgula (;) no final de uma instrução PHP?**

Para indicar o final da instrução.

**7. Descreva o funcionamento da estrutura de controle switch e forneça um exemplo prático.**

Caso uma das condições seja atendida, o fluxo será desviado para a sentença dentro do bloco _case_:

`switch ($corDoGatinho) {
    case "Branco":
        echo: "Mingau!";
        break;
    case "Mescladinho":
        echo: "Valira!";
        break;
    case "PretoBranco":
        echo: "Nova!";
        break;
    default:
        echo: "Não foi possível identificar!";
    }`

**8. Por que é importante escolher nomes de variáveis significativas ao programar em PHP?**

Em qualquer linguagem de programação, o nome significativo das variáveis ajuda a identificar sua utilidade e realizar manutenções mais assertivas no código.

**9. Como você concatenaria duas strings em PHP?**

Existem 4 formas de concatenar strings em PHP:
- **forma 1** $nomeCompleto = $primeiroNome." - ".$segundoNome;
- **forma 2** $nomeCompleto = "$primeiroNome -";
              $nomeCompleto .= "segundoNome"
- **forma 3** 'meu nome completo é {$primeiroNome} {$segundoNome}'
- **forma 4** "meu nome completo é $primeiroNome $segundoNome"

**10. Explique o conceito de variáveis de tipo booleano e forneça um exemplo de utilização.**

Representa verdadeiro ou falso. Podemos utilizar em uma validação de lógica, por exemplo:

`$gato = true;
if($gato){
    echo "tem um gato aqui!";
    }`
