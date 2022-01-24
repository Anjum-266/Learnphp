<?php

declare(strict_types =1);
/*1st Function To read the files) */

function getTransactionFiles(string $dirPath): array
{
    $files = [];

    foreach(scandir($dirPath) as $file){
     if (is_dir($file)) {
          continue;
        }
        
     $files[] = $dirPath . $file;
    }

   return $files;
}
/*2nd function To read each of these files and Extract transaction from file */
function getTransactions(string $fileName, ?callable $transactionHandler = null): array
{
    if (! file_exists($fileName)) {
        trigger_error('File "' . $fileName . '" deos not exist .', E_USER_ERROR);
    }
/*3rd function is create to open file */
    $file = fopen($fileName, 'r');
 
    fgetcsv($file);
/*Creting A Transaction Array */
$transactions = [];

    while (($transaction = fgetcsv($file)) !== false) {
        if ($transactionHandler !== null) {
            $transaction = $transactionHandler($transaction);
        }

        $transactions[] = $transaction;
    } 

    // print_r($transactions);

    return $transactions;
}

function extractTransaction(array $transactionRow): array
{ 
    
     
    [ $date, $checkNumber, $description, $amount] = $transactionRow;

       $amount = (float) str_replace(['$', ','], '', $amount);
    
      return
          [
          'date'        => $date,
          'checkNumber' => $checkNumber,
         'description' => $description,
         'amount'      => $amount,
    ];
}
    /*To CAlculate Totals */
    function calculateTotals(array $transactions): array
    {
        $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];

        foreach ($transactions as $transaction) {
             $totals['netTotal'] += $transaction['amount'];

             if ($transaction ['amount'] >= 0) {
                 $totals['totalIncome'] += $transaction['amount'];
             } else {
                 $totals['totalExpense'] += $transaction['amount'];
             }
        }

        return $totals;
    }
?>

