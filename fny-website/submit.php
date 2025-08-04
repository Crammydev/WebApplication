<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = [
        "last_name" => $_POST['last_name'],
        "first_name" => $_POST['first_name'],
        "middle_initial" => $_POST['middle_initial'],
        "dob" => $_POST['dob'],
        "address" => $_POST['address'],
        "contact" => $_POST['contact'],
        "voter" => $_POST['voter'],
        "school" => $_POST['school'],
        "recruited_by" => $_POST['recruited_by']
    ];

    $firebase_url = 'https://fny-youth-971f0-default-rtdb.asia-southeast1.firebasedatabase.app/registrations.json';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $firebase_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registering...</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <script>
        Swal.fire({
            title: 'Success!',
            text: 'You have been registered successfully.',
            icon: 'success',
            confirmButtonColor: '#0B5093'
        }).then(() => {
            window.location.href = 'index.php';
        });
    </script>
</body>

</html>