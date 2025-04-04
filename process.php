<?php
$db = new Database();
// Création des factures
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    extract($_POST);
    $returned = (int)$received - (int)$amount;
    $db->create($customer, $cashier, (int)$amount, (int)$received, (int)$returned, $state);
    echo 'perfect';
}

// Récupérer les factures
if (isset($_POST['action']) && $_POST['action'] == 'fetch') {
    $output = '';
    $db->countBills();
}