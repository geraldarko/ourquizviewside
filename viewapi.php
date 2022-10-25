<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>th, td {border: 1px solid black;font: 1em sans-serif;padding: 1rem;}</style>
    <style> form {padding:0.5rem;font: 1em sans-serif;}</style>
    <style> input {padding: 0.5rem; font: 1em sans-serif;}</style>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Form</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th colspan="2">Phonebook Records</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>Name</th>
        <th>Contact</th>
        </tr>
        <?php 
        include "api_getdata.php";
        $recs = api_getdata();

        foreach ($recs as $rec):
        ?>
        
        <tr>
        <td><?php echo $rec->pname; ?></td>
        <td><?php echo $rec->pphoned; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>
</body>
</html>