<?php
$db = new Database();
// Création des factures
if (isset($_POST['action']) && $_POST['action'] == 'create') {
    extract($_POST);
    $returned = (int)$receive - (int)$amount;
    $db->create($customer, $cashier, (int)$amount, (int)$received, (int)$returned, $state);
    echo 'perfect';
}

// Récupérer les factures
if (isset($_POST['action']) && $_POST['action'] == 'fetch') {
    $output = '';
    if ($db->countBills() > 0) {
        $bills = $db->read();
        $output .= '
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Client</th>
                    <th scope="col">Caissier</th>
                    <th scope="col">Montant</th>
                    <th scope="col">Perçu</th>
                    <th scope="col">Retourné</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
            ';
            foreach ($bills as $bill) {
                $output .= "
                    <tr>
                        <th scope=\"row\">$bill->id</th>
                        <td>$bill->customer</td>
                        <td>$bill->cashier</td>
                        <td>$bill->amount</td>
                        <td>$bill->received</td>
                        <td>$bill->returned</td>
                        <td>$bill->state</td>
                        <td>
                            <a href=\"#\" class=\"text-info me-2 infoBtn\" title=\"Voir détails\"><i class=\"fas
                            fa-info-circle\"></i></a>
                            <a href=\"#\" class=\"text-primary me-2 infoBtn\" title=\"Modifier\"><i class=\"fas
                            fa-edit\"></i></a>
                            <a href=\"#\" class=\"text-info me-2 deleteBtn\" title=\"Supprimer\"><i class=\"fas
                            fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    ";
            }

            $output .= "</tbody></table>";
            echo $output;
    }
} else {
    echo "<h3>Aucunes factures pour le moment</h3>";
}