# Desafios PHP

Este repositório contém soluções para uma série de desafios de programação em PHP. Cada desafio é resolvido com um script PHP separado. Abaixo estão as instruções detalhadas para cada desafio, bem como orientações sobre como executar o código.

## Desafios

### 1. Verificar se um número pertence à sequência de Fibonacci

**Descrição:**
Dado um número, este programa verifica se ele pertence à sequência de Fibonacci. A sequência de Fibonacci começa com 0 e 1, e cada número subsequente é a soma dos dois números anteriores.

**Arquivo:** `fibonacci.php`

**Código:**
```php
<?php
function isFibonacci($num) {
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) {
        return true;
    }

    while ($b < $num) {
        $c = $a + $b;
        $a = $b;
        $b = $c;

        if ($b == $num) {
            return true;
        }
    }

    return false;
}

$number = 21; /* Pode ser alterado para qualquer número */
if (isFibonacci($number)) {
    echo "$number pertence à sequência de Fibonacci.\n";
} else {
    echo "$number não pertence à sequência de Fibonacci.\n";
}
?>
```

**```Como executar: php fibonacci.php```**

### 2. Contar a ocorrência da letra 'a' em uma string
**Descrição** 
Este programa conta a quantidade de vezes que a letra 'a' (maiúscula ou minúscula) aparece em uma string.

```Arquivo: count_letter_a.php```

```php
<?php
function countLetterA($str) {
    return substr_count(strtolower($str), 'a');
}

$string = "Abracadabra"; // Pode ser alterada para qualquer string
$count = countLetterA($string);
echo "A letra 'a' aparece $count vezes na string.\n";
?>
```
**```Como executar: php count_letter_a.php```**

### 3. Calcular a soma baseada em um trecho de código fornecido
**Descrição**  
Este script calcula a soma de uma sequência numérica baseada em um trecho de código fornecido e imprime o resultado. O trecho de código é:

**Código:**
```php
<?php
$indice = 12;
$soma = 0;
$k = 1;

while ($k < $indice) {
    $k = $k + 1;
    $soma = $soma + $k;
}

echo "A soma é $soma.\n";
?>
```

**```Como executar: php soma.php```**
### 4. Completar a sequência
Descrição: Complete o próximo elemento de cada uma das seguintes sequências:

a) 1, 3, 5, 7, ___

b) 2, 4, 8, 16, 32, 64, ____

c) 0, 1, 4, 9, 16, 25, 36, ____

d) 4, 16, 36, 64, ____

e) 1, 1, 2, 3, 5, 8, ____

f) 2, 10, 12, 16, 17, 18, 19, ____

```Arquivo: sequences.php```

```php
<?php
echo "a) 9\n"; // Sequência de números ímpares
echo "b) 128\n"; // Sequência de potências de 2
echo "c) 49\n"; // Quadrados perfeitos
echo "d) 100\n"; // Quadrados perfeitos de números pares
echo "e) 13\n"; // Sequência de Fibonacci
echo "f) 20\n"; // Sequência que parece ser uma progressão após um certo padrão
?>
```

**```Como executar: php sequences.php```**

### 5. Identificar qual interruptor controla qual lâmpada
Descrição: Você está em uma sala com três interruptores, cada um conectado a uma lâmpada em salas diferentes. Use o seguinte método para identificar qual interruptor controla qual lâmpada:

- Ligue o primeiro interruptor e deixe-o ligado por alguns minutos.
- Desligue o primeiro interruptor e ligue o segundo interruptor.
- Vá até as salas das lâmpadas.
- A lâmpada que está acesa está conectada ao segundo interruptor.
- Toque nas lâmpadas restantes. A lâmpada que está quente, mas apagada, está conectada ao primeiro interruptor.
- A lâmpada que está fria e apagada está conectada ao terceiro interruptor.

**```Arquivo: interruptores.php```**

**Código:**
```php
<?php
echo "1. Ligue o primeiro interruptor e deixe-o ligado por alguns minutos.\n";
echo "2. Desligue o primeiro interruptor e ligue o segundo interruptor.\n";
echo "3. Vá até as salas das lâmpadas.\n";
echo "   - A lâmpada que está acesa está conectada ao segundo interruptor.\n";
echo "   - Toque nas lâmpadas restantes. A lâmpada que está quente, mas apagada, está conectada ao primeiro interruptor.\n";
echo "   - A lâmpada que está fria e apagada está conectada ao terceiro interruptor.\n";
?>
```

**```Como executar: php interruptores.php```**






