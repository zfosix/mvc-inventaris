<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
     <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
     <title>Inventaris</title>
     <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
          @import url("https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400&display=swap");

          body {
               font-family: "Poppins", sans-serif;
               background-color: grey;
          }
     </style>
</head>

<body>
     <nav class="navbar navbar-expand-lg bg-dark mb-5 p-3">
          <div class="container">
               <a class="navbar-brand font-weight-bold text-light" href="<?= BASE_URL ?>/home/index">I n v e n t a r i s
               </a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                         <li class="nav-item">
                              <a class="nav-link active text-light" aria-current="page" href="<?= BASE_URL ?>/home/index"> Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-light" href="<?= BASE_URL ?>/home/page"> Page</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link text-light" href="<?= BASE_URL ?>/barang/index">Peminjaman</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>