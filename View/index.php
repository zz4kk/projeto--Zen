
<?php

//      verificar se a pessoa esta logada
//      session_start();
//      if(!isset($_SESSION['id'])){
//      header("location: ../login.php");
//      exit;
//  }

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEN</title>
    <script src="https://kit.fontawesome.com/6b219767e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
       header{
           flex:1 1 100vw;
       }
       main{
           flex:20 1 500px;
       }
       aside{
           flex:1 1 150px;
           background-color:rgb(56, 56, 56);
           color: #fff;
           border-radius: 0px 0px 0px 18px;
       }
       footer{
           flex:1 1 100vw;
           background-color: #333;
           color: #fff;
           text-align: center;
           padding: 10px 0;
       }
       #logout-btn .item-description a{
        color: #fff;
        text-decoration: none;
       }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">ZEN</a></div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produtos.html">Produtos</a>
                    
                        <div class="dropdown">
                            <ul>
                                <li><a href="produtos.html">Masculinos</a></li>
                                <li><a href="produtos.html">Femininos</a></li>
                                <li><a href="produtos.html">Acessórios</a></li>
                            </ul>
                        </div>
                    
                    </li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </nav>
            
            
</div>
    </header>
    <main>
        <div class="banner">
            <h1>Seja bem-vindo à ZEN</h1>
            <p>Confira nossos produtos incríveis</p>
        </div>
        </section><br><br><br><br><br><br><br><br><br><br>
        <h2 class="h-2">First Collection</h2>
        <section id="products" class="products">
            <div class="product-card">
                <img src="img/manga-longa-preta.png"  alt="">
                <h3>Manga longa ZEN preta</h3>
                <p>R$80,00</p>
                <a href="Card manga longa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/moletom-preto.png" alt="">
                <h3>Moletom ZEN preto</h3>
                <p>R$100,00</p>
                <a href="Card moletom/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/calça-preta.png" alt="">
                <h3>Calça ZEN preta</h3>
                <p>R$80,00</p>
                <a href="Card calça/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/camisa-preta.png" alt="">
                <h3>Camisa ZEN preta</h3>
                <p>R$60,00</p>
                <a href="Card camisa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card"> 
                <img src="img/shorts-preto.png" alt="">
                <h3>Shorts ZEN preto</h3>
                <p>R$40,00</p>
               <a href="Card shorts/card.html"><button>Comprar</button></a>
            </div>
                               
                                    <!--linha 2-->

            <div class="product-card">
                <img src="img/manga-longa-bege.png" alt="">
                <h3>Manga longa ZEN branca</h3>
                <p>R$80,00</p>
                <a href="Card manga longa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/moletom-bege.png" alt="">
                <h3>Moletom ZEN bege</h3>
                <p>R$100,00</p>
               <a href="Card moletom/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/calça-bege.png" height="280vh" width="300vh" alt="">
                <h3>Calça ZEN bege</h3>
                <p>R$80,00</p>
               <a href="Card calça/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/camisa-bege.png" alt="">
                <h3>Camisa ZEN bege</h3>
                <p>R$60,00</p>
                <a href="Card camisa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/shorts-bege.png" alt="">
                <h3>Shorts ZEN bege</h3>
                <p>R$40,00</p>
                <a href="Card shorts/card.html"><button>Comprar</button></a>
            </div>

                            <!--linha 3-->

            <div class="product-card">
                <img src="img/manga-longa-roxa.png" alt="">
                <h3>Manga longa ZEN roxa</h3>
                <p>R$80,00</p>
                <a href="Card manga longa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/moletom-vinho.png" alt="">
                <h3>Moletom ZEN roxo</h3>
                <p>R$100,00</p>
                <a href="Card moletom/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/calça-roxa.png" height="280vh" width="300vh" alt="">
                <h3>Calça ZEN roxa</h3>
                <p>R$80,00</p>
                <a href="Card calça/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/camisa-roxa.png" alt="">
                <h3>Camisa ZEN roxa</h3>
                <p>R$60,00</p>
                <a href="Card camisa/card.html"><button>Comprar</button></a>
            </div>
            <div class="product-card">
                <img src="img/shorts-roxo.png" alt="">
                <h3>Shorts ZEN roxo</h3>
                <p>R$40,00</p>
                <a href="Card shorts/card.html"><button>Comprar</button></a>
            </div>
           
        </section>
        <section id="about">
            <h2>Sobre Nós</h2>
            <p>Somos uma loja de roupas dedicada a fornecer os melhores produtos aos nossos clientes.</p>
        </section>
        <section id="contact">
            <h2>Contato</h2>
            <p>Email: tonynho123@gmail.com</p>
            <p>Telefone: (13) 1234-5678</p>
        </section>
    </main>
    <aside>
    <nav id="sidebar">
           <div id="sidebar-content">
                          <div id="user">
           <img src="../Images/gatito.jpg"  id="user-avatar" alt="">
           <p id="user-infos">
               <span class="item-description">
                   Anthony Rodrigues
               </span>
               <span class="item-description">
                   Lorem ipsum
               </span>
           </p>
       </div>
       <ul id="side-items">
           <li class="side-item active">
               <a href="#">
               <i class="fa-solid fa-cart-shopping"></i>
               <spam class="item-description">
                   Carrinho
               </spam>
               </a>
           </li>
           <li class="side-item">
               <a href="#">
               <i class="fa-regular fa-user"></i>
               <spam class="item-description">
                   Conta
               </spam>
               </a>
           </li>
           <li class="side-item">
               <a href="#">
               <i class="fa-regular fa-bell"></i>
               <spam class="item-description">
                   Notificações
               </spam>
               </a>
           </li>
           <li class="side-item">
               <a href="#">
               <i class="fa-solid fa-percent"></i>
               <spam class="item-description">
                   Promoções
               </spam>
               </a>
           </li>
           <li class="side-item">
               <a href="#">
               <i class="fa-solid fa-gear"></i>
               <spam class="item-description">
                   Configurações
               </spam>
               </a>
           </li>
       </ul>
       
           </div>
   
           <div id="logout">
               <button id="logout-btn">
               <i class="fa-solid fa-right-from-bracket"></i>
               <span class="item-description">
               <a href="../Model/sair.php"> logout </a>
               </span>
               </button>
           </div>
   </nav>
   </div>
</aside>
    <footer>
        <p>&copy; 2024 ZEN. Todos os direitos reservados.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
