<?php
/**
 * Exemplo simples: Lista de Tarefas
 * Objetivo: demonstrar ESTRUTURAS DE REPETIÇÃO (for, foreach, while)
 * e FUNÇÕES em PHP.
 *
 * Roseli - Agenda 04 - Desenvolvimento de Sistemas II
 */

// ------------------------------------------------------
// "Banco de dados" simulado: array associativo de tarefas
// ------------------------------------------------------
$tarefas = [
    ["id" => 1, "descricao" => "Preparar relatório da paciente",   "feita" => true],
    ["id" => 2, "descricao" => "Corrigir apostila de matemática",  "feita" => false],
    ["id" => 3, "descricao" => "Estudar para prova de Psicologia", "feita" => false],
    ["id" => 4, "descricao" => "Publicar código no GitHub",        "feita" => false],
];

// ------------------------------------------------------
// FUNÇÃO 1: recebe o array de tarefas e retorna quantas
// ainda estão pendentes (usa ESTRUTURA DE REPETIÇÃO foreach)
// ------------------------------------------------------
function contarPendentes(array $tarefas): int {
    $pendentes = 0;
    foreach ($tarefas as $tarefa) {
        if (!$tarefa["feita"]) {
            $pendentes++;
        }
    }
    return $pendentes;
}

// ------------------------------------------------------
// FUNÇÃO 2: recebe uma tarefa e devolve um texto formatado
// (função simples de apoio, sem repetição interna)
// ------------------------------------------------------
function formatarTarefa(array $tarefa): string {
    $status = $tarefa["feita"] ? "[X]" : "[ ]";
    return $status . " Tarefa #" . $tarefa["id"] . " - " . $tarefa["descricao"];
}

// ------------------------------------------------------
// FUNÇÃO 3: adiciona uma nova tarefa ao array
// (recebe o array por referência, para alterá-lo de fato)
// ------------------------------------------------------
function adicionarTarefa(array &$tarefas, string $descricao): void {
    $novoId = count($tarefas) + 1;
    $tarefas[] = [
        "id" => $novoId,
        "descricao" => $descricao,
        "feita" => false
    ];
}

// ------------------------------------------------------
// USO 1: laço FOR para exibir todas as tarefas numeradas
// ------------------------------------------------------
echo "=== Lista de Tarefas (via FOR) ===" . PHP_EOL;
for ($i = 0; $i < count($tarefas); $i++) {
    echo formatarTarefa($tarefas[$i]) . PHP_EOL;
}

echo PHP_EOL;

// ------------------------------------------------------
// USO 2: adicionar uma tarefa nova usando a função criada
// ------------------------------------------------------
adicionarTarefa($tarefas, "Enviar mapa mental da atividade");

// ------------------------------------------------------
// USO 3: laço FOREACH para exibir a lista já atualizada
// ------------------------------------------------------
echo "=== Lista Atualizada (via FOREACH) ===" . PHP_EOL;
foreach ($tarefas as $tarefa) {
    echo formatarTarefa($tarefa) . PHP_EOL;
}

echo PHP_EOL;

// ------------------------------------------------------
// USO 4: laço WHILE controlando um contador manual
// (percorre a lista "de trás para frente")
// ------------------------------------------------------
echo "=== Lista em ordem inversa (via WHILE) ===" . PHP_EOL;
$indice = count($tarefas) - 1;
while ($indice >= 0) {
    echo formatarTarefa($tarefas[$indice]) . PHP_EOL;
    $indice--;
}

echo PHP_EOL;

// ------------------------------------------------------
// USO 5: chamando a função que conta pendentes
// ------------------------------------------------------
$totalPendentes = contarPendentes($tarefas);
echo "Total de tarefas pendentes: " . $totalPendentes . PHP_EOL;
