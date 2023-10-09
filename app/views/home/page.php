<head>
     <script src="../assets/js/color-modes.js"></script>

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <meta name="description" content="" />
     <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
     <meta name="generator" content="Hugo 0.112.5" />
     <link rel="canonical" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
     <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

     <style>
          .bd-placeholder-img {
               font-size: 1.125rem;
               text-anchor: middle;
               -webkit-user-select: none;
               -moz-user-select: none;
               user-select: none;
          }

          @media (min-width: 768px) {
               .bd-placeholder-img-lg {
                    font-size: 3.5rem;
               }
          }

          .b-example-divider {
               width: 100%;
               height: 3rem;
               background-color: rgba(0, 0, 0, 0.1);
               border: solid rgba(0, 0, 0, 0.15);
               border-width: 1px 0;
               box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                    inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
          }

          .b-example-vr {
               flex-shrink: 0;
               width: 1.5rem;
               height: 100vh;
          }

          .bi {
               vertical-align: -0.125em;
               fill: currentColor;
          }

          .nav-scroller {
               position: relative;
               z-index: 2;
               height: 2.75rem;
               overflow-y: hidden;
          }

          .nav-scroller .nav {
               display: flex;
               flex-wrap: nowrap;
               padding-bottom: 1rem;
               margin-top: -1px;
               overflow-x: auto;
               text-align: center;
               white-space: nowrap;
               -webkit-overflow-scrolling: touch;
          }

          .btn-bd-primary {
               --bd-violet-bg: #712cf9;
               --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

               --bs-btn-font-weight: 600;
               --bs-btn-color: var(--bs-white);
               --bs-btn-bg: var(--bd-violet-bg);
               --bs-btn-border-color: var(--bd-violet-bg);
               --bs-btn-hover-color: var(--bs-white);
               --bs-btn-hover-bg: #6528e0;
               --bs-btn-hover-border-color: #6528e0;
               --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
               --bs-btn-active-color: var(--bs-btn-hover-color);
               --bs-btn-active-bg: #5a23c8;
               --bs-btn-active-border-color: #5a23c8;
          }

          .bd-mode-toggle {
               z-index: 1500;
          }
     </style>
</head>

<body>
     <main>
          <div class="container py-4">
               <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                    <div class="container-fluid py-5">
                         <h1 class="display-5 fw-bold">Welcome To My Page <?= $data['nama'] ?></h1>
                         <!-- <img src="<?= BASE_URL ?>/img/<?= $data['gambar'] ?>" class="card-img-top-10" alt="..."> -->
                         <p class="col-md-8 fs-4">
                              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae nihil dignissimos
                              vitae eaque ea consequatur deserunt soluta, impedit magnam veritatis repellat id excepturi
                              sint, officiis tempore libero, quas fugit est.
                         </p>
                         <!-- <button class="btn btn-primary btn-lg" type="button">
                        Detail
                    </button> -->
                         <a href="<?= BASE_URL ?>/home/index" class="btn btn-primary">Kembali</a>
                    </div>
               </div>

               <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                         <div class="h-100 p-5 bg-body-tertiary rounded-3">
                              <h2>Resume</h2>
                              <p>
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quos.
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, quos.
                              </p>
                              <button class="btn btn-outline-secondary" type="button">
                                   Learn
                              </button>
                         </div>
                    </div>
                    <div class="col-md-6">
                         <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                              <h2>Resume</h2>
                              <p>
                                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sint?
                                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, sint?
                              </p>
                              <button class="btn btn-outline-secondary" type="button">
                                   Learn
                              </button>
                         </div>
                    </div>
               </div>
               <footer class="pt-3 mt-4 text-body-secondary border-top">
               </footer>
          </div>
     </main>
     <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
     </script>
</body>

</html>