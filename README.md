# 📋 Lista de Tarefas em PHP

Exemplo funcional desenvolvido para a atividade **Agenda 04 — Desenvolvimento de Sistemas II**, com o objetivo de demonstrar o uso de **estruturas de repetição** e **funções** em PHP.

---

## 🎯 Sobre o projeto

O código simula uma lista de tarefas simples, sem persistência em banco de dados — o foco aqui é exercitar a lógica de programação:

- Como percorrer uma coleção de dados de formas diferentes (`for`, `foreach`, `while`)
- Como organizar o código em pequenas funções reutilizáveis

## 🔁 Estruturas de repetição usadas

| Estrutura | Onde aparece | O que faz |
|---|---|---|
| `for` | Exibição inicial da lista | Percorre as tarefas por índice numérico |
| `foreach` | Lista atualizada | Percorre o array de forma mais idiomática |
| `while` | Ordem inversa | Percorre a lista de trás para frente com contador manual |

## ⚙️ Funções criadas

| Função | Responsabilidade |
|---|---|
| `contarPendentes()` | Recebe o array de tarefas e retorna quantas ainda não foram concluídas |
| `formatarTarefa()` | Recebe uma tarefa e devolve um texto formatado para exibição |
| `adicionarTarefa()` | Adiciona uma nova tarefa ao array (passado por referência) |

## ▶️ Como rodar

```bash
php lista_tarefas.php
```

Ou coloque o arquivo em uma pasta servida pelo Apache/XAMPP e acesse pelo navegador.

## 🧠 Mapa mental

O processo de desenvolvimento — decisões, desafios e aprendizados — está documentado no mapa mental em anexo neste repositório (`lista_php.png`).

---

Feito com 💛 por Roseli com auxilio de IA
