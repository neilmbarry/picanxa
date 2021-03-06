<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Picanxa</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" type="image/jpg" href="./img/LOGO pdf-1 copy-2.jpg"/>
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap"
      rel="stylesheet"
    /> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/7dff0a5432.js"
      crossorigin="anonymous"
    ></script>
    <script src="app.js" defer></script>
  </head>
  <body>
    
    <div class="modal-overlay modal-hide"></div>
    <div class="modal1 modal modal-close1">
      <div class="modal-close-btn">
        X
      </div>
      <div class="modal-content">
        <div class="modal-picture">
          <img src="./img/IG1.jpg" alt="">
        </div>
        <div class="modal-info">
          <h3 class="modal-title">Scotch Bonnet & Mirepoix</h3>
          <p class="modal-description other-font">Our signature sauce! Mirepoix, in French cuisine is a fundamental flavour base made from carrot, celery, and onion. This is the foundation for this recipe along with Scotch Bonnet peppers and other aromatics. We lacto-fermented for forty days to boost tanginess and allow deep flavours to develop. The goal with this sauce is not to burn your face off with spice, but to enhance your dining experience with a sauce you will want on every bite. This is your new favourite hot sauce.</p>
          <div id='product-component-1619973027026' class="shopify-btn_modal item-hide"></div>
          <script type="text/javascript">
          /*<![CDATA[*/
          (function () {
            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
            if (window.ShopifyBuy) {
              if (window.ShopifyBuy.UI) {
                ShopifyBuyInit();
              } else {
                loadScript();
              }
            } else {
              loadScript();
            }
            function loadScript() {
              var script = document.createElement('script');
              script.async = true;
              script.src = scriptURL;
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
              script.onload = ShopifyBuyInit;
            }
            function ShopifyBuyInit() {
              var client = ShopifyBuy.buildClient({
                domain: 'picanxa-sauce.myshopify.com',
                storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
              });
              ShopifyBuy.UI.onReady(client).then(function (ui) {
                ui.createComponent('product', {
                  id: '6673627578535',
                  node: document.getElementById('product-component-1619973027026'),
                  moneyFormat: '%24%7B%7Bamount%7D%7D',
                  options: {
            "product": {
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "calc(25% - 20px)",
                    "margin-left": "20px",
                    "margin-bottom": "50px"
                  }
                },
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px",
                  "padding-left": "47px",
                  "padding-right": "47px"
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "contents": {
                "img": false,
                "title": false,
                "price": false
              },
              "text": {
                "button": "Add to cart"
              },
              "googleFonts": [
                "Roboto"
              ]
            },
            "productSet": {
              "styles": {
                "products": {
                  "@media (min-width: 601px)": {
                    "margin-left": "-20px"
                  }
                }
              }
            },
            "modalProduct": {
              "contents": {
                "img": false,
                "imgWithCarousel": true,
                "button": false,
                "buttonWithQuantity": true
              },
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0px",
                    "margin-bottom": "0px"
                  }
                },
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px",
                  "padding-left": "47px",
                  "padding-right": "47px"
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "googleFonts": [
                "Roboto"
              ],
              "text": {
                "button": "Add to cart"
              }
            },
            "option": {},
            "cart": {
              "styles": {
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px"
                }
              },
              "text": {
                "total": "Subtotal",
                "button": "Checkout"
              },
              "googleFonts": [
                "Roboto"
              ]
            },
            "toggle": {
              "styles": {
                "toggle": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "background-color": "#de2e24",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  ":focus": {
                    "background-color": "#c82920"
                  }
                },
                "count": {
                  "font-size": "16px"
                }
              },
              "googleFonts": [
                "Roboto"
              ]
            }
          },
                });
              });
            }
          })();
          /*]]>*/
          </script>
          <div class="waitlist other-font  item-hide" id="mirepoix-waitliast-modal">
            <p class="waitlist-title_main">Sorry, we are currently out of stock!</p>
            <p class="waitlist-title">But if you'd like to join the waitlist you'll be the first to know when the next batch is ready!</p>
            <form action="waitlist_mirepoix.php" method="POST" class="waitlist-form">
              <input type="text" placeholder="Enter email" name="email" class="mailing-input other-font"/>
             <button type="submit" class="waitlist-btn other-font btn">Submit</button>
            </form>
          </div>
          
        </div>
        <h4 class="modal-nutritional"><img src="./img/nutri1.jpg" alt=""></h4>
      </div>

    </div>
    <div class="modal2 modal modal-close2">
      <div class="modal-close-btn">
        X
      </div>
      <div class="modal-content">
        <div class="modal-picture">
          <img src="./img/IG2.jpg" alt="">
        </div>
        <div class="modal-info">
          <h3 class="modal-title">Scotch Bonnet & Dijon</h3>
          <p class="modal-description other-font">I consider this sauce a hybrid condiment. It was design specifically to go on sandwiches, wraps, or pretty much anything served on bread or that calls for a good mustard. This one has some serious heat. This sauce is fresh (i,e,. not fermented) to preserve the bright fruitiness of the yellow and orange Scotch Bonnet chilies.</p>
          <div id='product-component-1619974359489' class="shopify-btn_modal"></div>
          <script type="text/javascript">
          /*<![CDATA[*/
          (function () {
            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
            if (window.ShopifyBuy) {
              if (window.ShopifyBuy.UI) {
                ShopifyBuyInit();
              } else {
                loadScript();
              }
            } else {
              loadScript();
            }
            function loadScript() {
              var script = document.createElement('script');
              script.async = true;
              script.src = scriptURL;
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
              script.onload = ShopifyBuyInit;
            }
            function ShopifyBuyInit() {
              var client = ShopifyBuy.buildClient({
                domain: 'picanxa-sauce.myshopify.com',
                storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
              });
              ShopifyBuy.UI.onReady(client).then(function (ui) {
                ui.createComponent('product', {
                  id: '6673635901607',
                  node: document.getElementById('product-component-1619974359489'),
                  moneyFormat: '%24%7B%7Bamount%7D%7D',
                  options: {
            "product": {
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "calc(25% - 20px)",
                    "margin-left": "20px",
                    "margin-bottom": "50px"
                  }
                },
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px",
                  "padding-left": "47px",
                  "padding-right": "47px"
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "contents": {
                "img": false,
                "title": false,
                "price": false
              },
              "text": {
                "button": "Add to cart"
              },
              "googleFonts": [
                "Roboto"
              ]
            },
            "productSet": {
              "styles": {
                "products": {
                  "@media (min-width: 601px)": {
                    "margin-left": "-20px"
                  }
                }
              }
            },
            "modalProduct": {
              "contents": {
                "img": false,
                "imgWithCarousel": true,
                "button": false,
                "buttonWithQuantity": true
              },
              "styles": {
                "product": {
                  "@media (min-width: 601px)": {
                    "max-width": "100%",
                    "margin-left": "0px",
                    "margin-bottom": "0px"
                  }
                },
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px",
                  "padding-left": "47px",
                  "padding-right": "47px"
                },
                "quantityInput": {
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px"
                }
              },
              "googleFonts": [
                "Roboto"
              ],
              "text": {
                "button": "Add to cart"
              }
            },
            "option": {},
            "cart": {
              "styles": {
                "button": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "font-size": "16px",
                  "padding-top": "16px",
                  "padding-bottom": "16px",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  "background-color": "#de2e24",
                  ":focus": {
                    "background-color": "#c82920"
                  },
                  "border-radius": "10px"
                }
              },
              "text": {
                "total": "Subtotal",
                "button": "Checkout"
              },
              "googleFonts": [
                "Roboto"
              ]
            },
            "toggle": {
              "styles": {
                "toggle": {
                  "font-family": "Roboto, sans-serif",
                  "font-weight": "bold",
                  "background-color": "#de2e24",
                  ":hover": {
                    "background-color": "#c82920"
                  },
                  ":focus": {
                    "background-color": "#c82920"
                  }
                },
                "count": {
                  "font-size": "16px"
                }
              },
              "googleFonts": [
                "Roboto"
              ]
            }
          },
                });
              });
            }
          })();
          /*]]>*/
          </script>
          <div class="waitlist other-font item-hide" id="dijon-waitliast-modal">
            <p class="waitlist-title_main">Sorry, we are currently out of stock!</p>
            <p class="waitlist-title">But if you'd like to join the waitlist you'll be the first to know when the next batch is ready!</p>
            <form action="dijon.php" method="POST" class="waitlist-form">
              <input type="text" placeholder="Enter email" name="email" class="mailing-input other-font"/>
             <button type="submit" class="waitlist-btn other-font btn">Submit</button>
            </form>
          </div>
        </div>
        <h4 class="modal-nutritional"><img src="./img/nutri2.jpg" alt=""></h4>
      </div>

    </div>
    <div class="modal3 modal modal-close3">
      <div class="modal-close-btn">
        X
      </div>
      <div class="modal-content modal-content-3">
        
        <div class="modal-info3 modal-info">
          <h3 class="modal-title">Welcome to Picanxa<span class="other-font">.</span>com</h3>
          <p class="modal-description other-font">
            We are now sold out of our sauces until the next batches are available in January. Please sign up to our <strong>mailing list</strong> to be the first to know when Picanxa will be back in stock. Spoiler, a new flavour will be ready in the new year!!
            Until then, we wish you happy holidays and all the best in the New Year! </p>
            <p class=" other-font">Grateful for all your support,</p>
            <p class="other-font"><strong>Picanxa Team</strong></p>
        
          
        </div>
        
      </div>

    </div>
    <div id="top"></div>
    <nav class="nav navi">
      <div class="nav-icon-container">
        
        <a href="./">

          
        
          <img src="./img/LOGO2-1.jpg" alt="" class="nav-logo transparent" />
        </a>
      </div>
      <ul class="nav-items nav-items-mobile">
        <a href="#shop"> <li class="nav-items-item">Shop</li></a>
        <!-- <a href="#shop"> <li class="nav-items-item open-modal3">Test</li></a> -->
        <a href="#bio"><li class="nav-items-item">About us</li></a>
        <!-- <li class="nav-items-item"><a href="#recipes"> Recipes</a></li> -->
        <a href="#contact"><li class="nav-items-item">Contact</li></a>
      </ul>
      <div class="nav-burger">
        <i class="fas fa-bars burger-icon"></i>
        <i class="fas fa-times close-icon hide"></i>
      </div>
    </nav>
    <header class="landing">
      <img
        src="img/timothy-l-brock-WJ5mej6mWi4-unsplash.jpg"
        alt="landing"
        class="landing-image"
      />
      <div class="landing-overlay"></div>
      <div class="landing-box">
        <div class="landing-box-title"><img src="./img/LOGO NEW.svg" class="landing-title"></div>
        
        <!-- <div class="landing-box-text">
          <h4>
            Honey infused with scotch bonnet peppers for drizzling on all your
            favorite foods.
          </h4>
        </div> -->
        <a href="#shop" class="upper">
        <div class="landing-box-button btn">
           Order Now!
        </div>
      </a>
      </div>
    </header>
<section class="welcome">
  <div class="welcome-box">
  <h3 class="welcome-title">Thank you for checking us out!</h3>
  <p class="welcome-info other-font">Due to higher-than-expected interest and the nature of fermenting in small batches, there may be
    occasional interruptions to availability. If a product is unavailable at any time, click '<strong>Join Waitlist</strong>' to
    ensure you are among the first to get in on the next batch.
    Thank you, your support means everything to us.</p>
    <p class="welcome-info other-font"><strong>-Jason</strong></p>
  </div>
</section>
    <section class="section section-about">
      <div id="shop"></div>
      <h2 class="about-title">Our Signature Sauces</h2>
      <!-- <p class="about-text">
        Picanxa's perfect balance of sweetness and heat enhances any dish. And
        now we're available to order through instagram.
      </p> -->
      <div class="about-container">
        <div class="about-container-item">
          <div class="about-container-item_image bottle-img1">
            <div class="button-overlay1">
              <p class="button-overlay-info other-font"><span class="other-font">Our signature sauce! Fiery scotch bonnets and fresh market vegetables lacto-fermented for 40 days.</span></p>
              <div id='product-component-1619644546703' class="shopify-btn"></div>
              <div class="waitlist2 other-font item-hide" id="mirepoix-overlay-waitlist">
                <p class="waitlist2-title_main">Sorry, we are currently out of stock!</p>
                <p class="waitlist2-title">But if you'd like to join the waitlist you'll be the first to know when the next batch is ready!</p>
                <form action="waitlist_mirepoix.php" method="POST" class="waitlist2-form">
                  <input type="text" placeholder="Enter email" name="email" class="mailing-input other-font"/>
                 <button type="submit" class="waitlist2-btn other-font btn">Submit</button>
                </form>
              </div>
              
            </div>
            <img src="img/IG1.jpg" alt="food" class="bottle1" />
          </div>
          <div class="about-container-item_text">
            <h3 class="about-container-item_text_title">
              Scotch Bonnet & Mirepoix
            </h3>
            <!-- <h5 class="about-container-item_text_subtitle other-font">Fiery scotch bonnets and fresh market vegetables lacto-fermented for<span class='other-font'> 40 </span>days</h5> -->
            
            <!-- <p class="about-container-item_text_location"><span class="other-font">Our signature sauce! Mirepoix, in French cuisine is a fundamental flavour base made from carrot, celery, and onion. This is the foundation for this recipe along with Scotch Bonnet peppers and other aromatics. We lacto-fermented for forty days to boost tanginess and allow deep flavours to develop. The goal with this sauce is not to burn your face off with spice, but to enhance your dining experience with a sauce you will want on every bite. This is your new favourite hot sauce.</span></p> -->
            <h5 class="about-container-price other-font">
              $10.95
            </h5>
            <h5 class="about-container-item_text_location other-font">250ml</h5>
            <button class="button-overlay-btn btn open-modal1">More info</button>
            <script type="text/javascript">
            /*<![CDATA[*/
            (function () {
              var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
              if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                  ShopifyBuyInit();
                } else {
                  loadScript();
                }
              } else {
                loadScript();
              }
              function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
              }
              function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({
                  domain: 'picanxa-sauce.myshopify.com',
                  storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
                });
                ShopifyBuy.UI.onReady(client).then(function (ui) {
                  ui.createComponent('product', {
                    id: '6673627578535',
                    node: document.getElementById('product-component-1619644546703'),
                    moneyFormat: '%24%7B%7Bamount%7D%7D',
                    options: {
              "product": {
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "calc(25% - 20px)",
                      "margin-left": "20px",
                      "margin-bottom": "50px"
                    }
                  },
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px",
                    "padding-left": "47px",
                    "padding-right": "47px"
                  },
                  "quantityInput": {
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px"
                  }
                },
                "contents": {
                  "img": false,
                  "title": false,
                  "price": false
                },
                "text": {
                  "button": "Add to cart"
                },
                "googleFonts": [
                  "Roboto"
                ]
              },
              "productSet": {
                "styles": {
                  "products": {
                    "@media (min-width: 601px)": {
                      "margin-left": "-20px"
                    }
                  }
                }
              },
              "modalProduct": {
                "contents": {
                  "img": false,
                  "imgWithCarousel": true,
                  "button": false,
                  "buttonWithQuantity": true
                },
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "100%",
                      "margin-left": "0px",
                      "margin-bottom": "0px"
                    }
                  },
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px",
                    "padding-left": "47px",
                    "padding-right": "47px"
                  },
                  "quantityInput": {
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px"
                  }
                },
                "googleFonts": [
                  "Roboto"
                ],
                "text": {
                  "button": "Add to cart"
                }
              },
              "option": {},
              "cart": {
                "styles": {
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px"
                  }
                },
                "text": {
                  "total": "Subtotal",
                  "button": "Checkout"
                },
                "googleFonts": [
                  "Roboto"
                ]
              },
              "toggle": {
                "styles": {
                  "toggle": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "background-color": "#de2e24",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    ":focus": {
                      "background-color": "#c82920"
                    }
                  },
                  "count": {
                    "font-size": "16px"
                  }
                },
                "googleFonts": [
                  "Roboto"
                ]
              }
            },
                  });
                });
              }
            })();
            /*]]>*/
            </script>
          </div>
        </div>
        <div class="about-container-item">
          <div class="about-container-item_image bottle-img2">
            <div class="button-overlay2">
              <!-- <p class="button-overlay-info other-font">To order, just shoot us a message!</p> -->
              <p class="button-overlay-info"><span class="other-font">A perfect blend of fresh scotch bonnets and tangy Dijon mustard. Perfect for all your sandwich needs.</span></p>
              <div id='product-component-1619644615242' class="shopify-btn"></div>
              <div class="waitlist2 other-font item-hide" id="dijon-overlay-waitlist">
                <p class="waitlist2-title_main">Sorry, we are currently out of stock!</p>
                <p class="waitlist2-title">But if you'd like to join the waitlist you'll be the first to know when the next batch is ready!</p>
                <form action="waitlist_dijon.php" method="POST" class="waitlist2-form">
                  <input type="text" placeholder="Enter email" name="email" class="mailing-input other-font"/>
                 <button type="submit" class="waitlist2-btn other-font btn">Submit</button>
                </form>
              </div>
            </div>
            <img src="img/IG2.jpg" alt="food" class="bottle2 scale" />
          </div>
          <div class="about-container-item_text">
            <h3 class="about-container-item_text_title">
              Scotch Bonnet & Dijon
            </h3>
            <!-- <h5 class="about-container-item_text_subtitle other-font">A perfect blend of fresh scotch bonnets and tangy Dijon mustard, Perfect for all your sandwich needs,</h5> -->
            
            <!-- <p class="about-container-item_text_location"><span class="other-font">I consider this sauce a hybrid condiment. It was design specifically to go on sandwiches, wraps, or pretty much anything served on bread or that calls for a good mustard. This one has some serious heat. This sauce is fresh (i,e,. not fermented) to preserve the bright fruitiness of the yellow and orange Scotch Bonnet chilies.</span></p> -->
            <h5 class="about-container-price other-font">
              $6.49
            </h5>
            <h5 class="about-container-item_text_location other-font">120ml</h5>
            <button class="button-overlay-btn btn open-modal2">More info</button>
            
            <script type="text/javascript">
            /*<![CDATA[*/
            (function () {
              var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
              if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                  ShopifyBuyInit();
                } else {
                  loadScript();
                }
              } else {
                loadScript();
              }
              function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
              }
              function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({
                  domain: 'picanxa-sauce.myshopify.com',
                  storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
                });
                ShopifyBuy.UI.onReady(client).then(function (ui) {
                  ui.createComponent('product', {
                    id: '6673635901607',
                    node: document.getElementById('product-component-1619644615242'),
                    moneyFormat: '%24%7B%7Bamount%7D%7D',
                    options: {
              "product": {
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "calc(25% - 20px)",
                      "margin-left": "20px",
                      "margin-bottom": "50px"
                    }
                  },
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px",
                    "padding-left": "47px",
                    "padding-right": "47px"
                  },
                  "quantityInput": {
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px"
                  }
                },
                "contents": {
                  "img": false,
                  "title": false,
                  "price": false
                },
                "text": {
                  "button": "Add to cart"
                },
                "googleFonts": [
                  "Roboto"
                ]
              },
              "productSet": {
                "styles": {
                  "products": {
                    "@media (min-width: 601px)": {
                      "margin-left": "-20px"
                    }
                  }
                }
              },
              "modalProduct": {
                "contents": {
                  "img": false,
                  "imgWithCarousel": true,
                  "button": false,
                  "buttonWithQuantity": true
                },
                "styles": {
                  "product": {
                    "@media (min-width: 601px)": {
                      "max-width": "100%",
                      "margin-left": "0px",
                      "margin-bottom": "0px"
                    }
                  },
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px",
                    "padding-left": "47px",
                    "padding-right": "47px"
                  },
                  "quantityInput": {
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px"
                  }
                },
                "googleFonts": [
                  "Roboto"
                ],
                "text": {
                  "button": "Add to cart"
                }
              },
              "option": {},
              "cart": {
                "styles": {
                  "button": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "font-size": "16px",
                    "padding-top": "16px",
                    "padding-bottom": "16px",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    "background-color": "#de2e24",
                    ":focus": {
                      "background-color": "#c82920"
                    },
                    "border-radius": "10px"
                  }
                },
                "text": {
                  "total": "Subtotal",
                  "button": "Checkout"
                },
                "googleFonts": [
                  "Roboto"
                ]
              },
              "toggle": {
                "styles": {
                  "toggle": {
                    "font-family": "Roboto, sans-serif",
                    "font-weight": "bold",
                    "background-color": "#de2e24",
                    ":hover": {
                      "background-color": "#c82920"
                    },
                    ":focus": {
                      "background-color": "#c82920"
                    }
                  },
                  "count": {
                    "font-size": "16px"
                  }
                },
                "googleFonts": [
                  "Roboto"
                ]
              }
            },
                  });
                });
              }
            })();
            /*]]>*/
            </script>
          </div>
        </div>
        <!-- <div class="about-container-item">
          <div class="about-container-item_image">
            <img src="img/IG Bottles.jpg" alt="food" />
          </div>
          <div class="about-container-item_text">
            <h3 class="about-container-item_text_title">Hot Sauce #3</h3>
            <h5 class="about-container-item_text_subtitle">Base ingredient</h5>
            <p class="about-container-item_text_location">Descriptions...</p>
          </div>
        </div> -->
      </div>
      <!-- <a href="#contact"><div class="about-button btn">
        Contact us
       
      </div></a> -->
    </section>
    <section class="section section-mailing mailing diff-bg">
      <div class="mailing-text other-font">
        <h4><strong>Is your favourite sauce out of stock?</strong></h4>
        <!-- <p>Get 15% off your first purchase on us</p> -->
      </div>
      <div class="mailing-form-container">
        <form action="./waitlist_mirepoix.php" method="POST" class="mailing-form stock-form">
        <input type="text" placeholder="Enter email" name="email" class="mailing-input sm-width"/>
        <button type="submit" class="other-font btn waitlist-btn-new">Join Waitlist</button>
      </form>
      </div>
    </section>

    <!-- <section class="section section-recipes">
      <h2 class="recipes-title">Jason's Recipes</h2>
      <p class="recipes-text">
        Looking for some culinary inspiration? Our sweet-heat combo works with
        every meal.
      </p>
      <div class="recipes-container">
        <div class="recipes-container-item">
          <div class="recipes-container-item_image">
            <img src="img/new3.jpg" alt="food" />
          </div>
          <div class="recipes-container-item_text">
            <h3 class="recipes-container-item_text_title">Scrambled Eggs</h3>

            <p class="recipes-container-item_text_location">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Voluptate error hic aperiam adipisci libero in, corporis
              asperiores quo nisi quae totam accusantium magnam illum molestias
              minus assumenda quos distinctio autem.
            </p>
          </div>
        </div>
        <div class="recipes-container-item">
          <div class="recipes-container-item_image">
            <img src="img/new2.jpg" alt="food" />
          </div>
          <div class="recipes-container-item_text">
            <h3 class="recipes-container-item_text_title">
              Roast Beef Sandwich
            </h3>

            <p class="recipes-container-item_text_location">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod,
              similique nesciunt eos eaque sequi magni enim explicabo et iure
              voluptatem excepturi quae!
            </p>
          </div>
        </div>
        <div class="recipes-container-item">
          <div class="recipes-container-item_image">
            <img src="img/new1.jpg" alt="food" />
          </div>
          <div class="recipes-container-item_text">
            <h3 class="recipes-container-item_text_title">Grilled Cheese</h3>

            <p class="recipes-container-item_text_location">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut sint,
              quaerat ullam obcaecati, iusto maxime tempore enim laborum
              exercitationem voluptatem maiores reprehenderit nesciunt. Amet, et
              odio.
            </p>
          </div>
        </div>
      </div>
      <div class="recipes-button btn">All recipes</div>
      <div id="contact"></div>
    </section> -->
    <section class="receive">
    <div class="receive-box">
      <div class="receive-pickup">
        <h3 class="receive-title">Pickup</h3>
        <p class="receive-info other-font"><strong>Free Local Pickup! </strong>Mother Cocktail Bar</p><p class="receive-info other-font"> <a href="https://www.google.com/maps/place/Mother/@43.6451986,-79.4143964,15z/data=!4m5!3m4!1s0x0:0x5d8242743294d808!8m2!3d43.6451949!4d-79.4143937" target="_blank"><strong>874 Queen St West</strong></a></p>
      </div>
      <div class="receive-delivery">
        <h3 class="receive-title">Delivery</h3>
        <p class="receive-info other-font">Shipping options available at <strong>checkout!</strong> </p>
        <!-- <p class="receive-info other-font"><strong>$8.00 flat rate</strong> ??? City of Toronto </p>
        <p class="receive-info other-font">Borders: High Park to the West, Hwy 401 to the North, Victoria Park to
          the East, Lake Ontario to the South.</p>
          <p class="receive-info other-font"> Everywhere Else ??? Discounted rates available with Canada Post.</p> -->
      </div>
    </div>
  </section>
    <section class="section section-contact contact" id="contact">
      <div class="contact-overlay"></div>
      <div class="contact-box">
        <h2 class="contact-title">Drop us a line</h2>
        <h3 class="contact-description"><span class="other-font">We would love to hear from you!</span></h3>
        <form action="./general.php" method="post" class="contact-form">
          <span class="other-font">
          <div class="contact-form-item">
            <label for="name">Name*</label>
            <input type="text" name="name" required />
          </div>
          <div class="contact-form-item">
            <label for="email">Email*</label>
            <input type="email" name="email" required/>
          </div>
          <div class="contact-form-item">
            <label for="message">Message*</label>
            <div class="textbox-container">
              <textarea name="message" id="" required></textarea>
              <button type='submit' class="btn btn-form">Send it!</button>
            </div>
          </div>
        </span>
        </form>
      </div>
    </section>
    <section class="bio" id="bio">
      <div class="bio-description">
        <p><span class="other-font add-shadow">
          Jason Griffin is a Canadian award-winning bartender having honed his skills in Montreal and Toronto for the better part of two decades. When the pandemic hit in 2020, Jason, like countless other hospitality workers found himself out of work and stuck at home. To pass the time Jason started to pickle and ferment vegetables. And just like that, a new obsession was born.
Jason???s approach to making hot sauce is similar that of creating a delicious cocktail. <span class="italic">???Both the chili pepper and the spirit will burn (differently of course), and they both require a balance of acidity, sweetness, and mouthfeel to be best enjoyed.???</span></span>
        </p>
      </div>
      <div class="bio-picture">
        <img src="./img/jbs-JasonGriffin_07.jpg" alt="" />
      </div>
      <!-- <div class="bio-info add-shadow">
        <h4>Jason Griffin<span class="other-font">,</span> Owner</h4>
      </div> -->
    </section>
    <div id="footer"></div>
    <section class="section section-instagram">
      <i class="fab fa-instagram instagram-icon"></i>

      <p>
        Follow us
        <strong
          ><a href="https://www.instagram.com/picanxasauce/" target="_blank"
            >@PicanxaSauce</a
          ></strong
        >
      </p>
    </section>
    <section class="section section-mailing mailing">
      <div class="mailing-text">
        <p><strong>Join our Mailing List!</strong></p>
        <!-- <p>Get 15% off your first purchase on us</p> -->
      </div>
      <div class="mailing-form-container">
        <form action="./mailingList.php" method="POST" class="mailing-form">
        <input type="text" placeholder="Enter email" name="email" class="mailing-input"/>
        <button type="submit" class="mailing-btn"><i class="fas fa-chevron-right"></i></button>
      </form>
      </div>
    </section>
   
    <footer class="footer">
      <img src="./img/LOGO NEW.svg" alt="" class="bottom-logo">
      <!-- <div class="footer-item">
        <p class="footer-title"><strong>Contact</strong></p>
        <p class="footer-line">
          info@Picanxa<span class="other-font">.</span>com
        </p>
       
      </div>
      <div class="footer-item">
        <p class="footer-title"><strong>Links</strong></p>
        
      </div>
      <div class="footer-item">
        <p class="footer-title"><strong>Wholesale</strong></p>
       
      </div>
      <div class="footer-item">
        <p class="footer-title"><strong>Follow us</strong></p>
        <div class="footer-socials">
          <a
            href="https://www.facebook.com/Picanxa-Sauce-105541675007907"
            target="_blank"
            ><i class="fab fa-facebook-f"></i
          ></a>
         
          <a href="https://www.instagram.com/picanxasauce/" target="_blank"
            ><i class="fab fa-instagram"></i
          ></a>
        
        </div>
      </div> -->
      <!-- <div class="footer-hidden">
         <div id='product-component-1619987371160'></div>
        <script type="text/javascript">
        /*<![CDATA[*/
        (function () {
          var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
          if (window.ShopifyBuy) {
            if (window.ShopifyBuy.UI) {
              ShopifyBuyInit();
            } else {
              loadScript();
            }
          } else {
            loadScript();
          }
          function loadScript() {
            var script = document.createElement('script');
            script.async = true;
            script.src = scriptURL;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            script.onload = ShopifyBuyInit;
          }
          function ShopifyBuyInit() {
            var client = ShopifyBuy.buildClient({
              domain: 'picanxa-sauce.myshopify.com',
              storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
            });
            ShopifyBuy.UI.onReady(client).then(function (ui) {
              ui.createComponent('product', {
                id: '6673627578535',
                node: document.getElementById('product-component-1619987371160'),
                moneyFormat: '%24%7B%7Bamount%7D%7D',
                options: {
          "product": {
            "styles": {
              "product": {
                "@media (min-width: 601px)": {
                  "max-width": "calc(25% - 20px)",
                  "margin-left": "20px",
                  "margin-bottom": "50px"
                }
              },
              "button": {
                "font-family": "Roboto, sans-serif",
                "font-weight": "bold",
                "font-size": "16px",
                "padding-top": "16px",
                "padding-bottom": "16px",
                ":hover": {
                  "background-color": "#c82920"
                },
                "background-color": "#de2e24",
                ":focus": {
                  "background-color": "#c82920"
                },
                "border-radius": "10px",
                "padding-left": "47px",
                "padding-right": "47px"
              },
              "quantityInput": {
                "font-size": "16px",
                "padding-top": "16px",
                "padding-bottom": "16px"
              }
            },
            "contents": {
              "img": false,
              "title": false,
              "price": false
            },
            "text": {
              "button": "Add to cart"
            },
            "googleFonts": [
              "Roboto"
            ]
          },
          "productSet": {
            "styles": {
              "products": {
                "@media (min-width: 601px)": {
                  "margin-left": "-20px"
                }
              }
            }
          },
          "modalProduct": {
            "contents": {
              "img": false,
              "imgWithCarousel": true,
              "button": false,
              "buttonWithQuantity": true
            },
            "styles": {
              "product": {
                "@media (min-width: 601px)": {
                  "max-width": "100%",
                  "margin-left": "0px",
                  "margin-bottom": "0px"
                }
              },
              "button": {
                "font-family": "Roboto, sans-serif",
                "font-weight": "bold",
                "font-size": "16px",
                "padding-top": "16px",
                "padding-bottom": "16px",
                ":hover": {
                  "background-color": "#c82920"
                },
                "background-color": "#de2e24",
                ":focus": {
                  "background-color": "#c82920"
                },
                "border-radius": "10px",
                "padding-left": "47px",
                "padding-right": "47px"
              },
              "quantityInput": {
                "font-size": "16px",
                "padding-top": "16px",
                "padding-bottom": "16px"
              }
            },
            "googleFonts": [
              "Roboto"
            ],
            "text": {
              "button": "Add to cart"
            }
          },
          "option": {},
          "cart": {
            "styles": {
              "button": {
                "font-family": "Roboto, sans-serif",
                "font-weight": "bold",
                "font-size": "16px",
                "padding-top": "16px",
                "padding-bottom": "16px",
                ":hover": {
                  "background-color": "#c82920"
                },
                "background-color": "#de2e24",
                ":focus": {
                  "background-color": "#c82920"
                },
                "border-radius": "10px"
              }
            },
            "text": {
              "total": "Subtotal",
              "button": "Checkout"
            },
            "googleFonts": [
              "Roboto"
            ]
          },
          "toggle": {
            "styles": {
              "toggle": {
                "font-family": "Roboto, sans-serif",
                "font-weight": "bold",
                "background-color": "#de2e24",
                ":hover": {
                  "background-color": "#c82920"
                },
                ":focus": {
                  "background-color": "#c82920"
                }
              },
              "count": {
                "font-size": "16px"
              }
            },
            "googleFonts": [
              "Roboto"
            ]
          }
        },
              });
            });
          }
        })();
        /*]]>*/
        </script>
        <div id='product-component-1619987434247'></div>
        <script type="text/javascript">
        /*<![CDATA[*/
        // (function () {
        //   var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
        //   if (window.ShopifyBuy) {
        //     if (window.ShopifyBuy.UI) {
        //       ShopifyBuyInit();
        //     } else {
        //       loadScript();
        //     }
        //   } else {
        //     loadScript();
        //   }
        //   function loadScript() {
        //     var script = document.createElement('script');
        //     script.async = true;
        //     setTimeout(() => {
        //       console.log(document.querySelector('.shopify-buy__btn'),'EXTERNAL SCRIPT');
        //     }, 5000);
        //     // console.log(document.querySelector('.shopify-buy__btn'));
        //     script.src = scriptURL;
        //     (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
        //     script.onload = ShopifyBuyInit;
        //   }
        //   function ShopifyBuyInit() {
        //     var client = ShopifyBuy.buildClient({
        //       domain: 'picanxa-sauce.myshopify.com',
        //       storefrontAccessToken: '2603fc70fc8046eb1a801e875f444a38',
        //     });
        //     ShopifyBuy.UI.onReady(client).then(function (ui) {
        //       ui.createComponent('product', {
        //         id: '6673635901607',
        //         node: document.getElementById('product-component-1619987434247'),
        //         moneyFormat: '%24%7B%7Bamount%7D%7D',
        //         options: {
        //   "product": {
        //     "styles": {
        //       "product": {
        //         "@media (min-width: 601px)": {
        //           "max-width": "calc(25% - 20px)",
        //           "margin-left": "20px",
        //           "margin-bottom": "50px"
        //         }
        //       },
        //       "button": {
        //         "font-family": "Roboto, sans-serif",
        //         "font-weight": "bold",
        //         "font-size": "16px",
        //         "padding-top": "16px",
        //         "padding-bottom": "16px",
        //         ":hover": {
        //           "background-color": "#c82920"
        //         },
        //         "background-color": "#de2e24",
        //         ":focus": {
        //           "background-color": "#c82920"
        //         },
        //         "border-radius": "10px",
        //         "padding-left": "47px",
        //         "padding-right": "47px"
        //       },
        //       "quantityInput": {
        //         "font-size": "16px",
        //         "padding-top": "16px",
        //         "padding-bottom": "16px"
        //       }
        //     },
        //     "contents": {
        //       "img": false,
        //       "title": false,
        //       "price": false
        //     },
        //     "text": {
        //       "button": "Add to cart"
        //     },
        //     "googleFonts": [
        //       "Roboto"
        //     ]
        //   },
        //   "productSet": {
        //     "styles": {
        //       "products": {
        //         "@media (min-width: 601px)": {
        //           "margin-left": "-20px"
        //         }
        //       }
        //     }
        //   },
        //   "modalProduct": {
        //     "contents": {
        //       "img": false,
        //       "imgWithCarousel": true,
        //       "button": false,
        //       "buttonWithQuantity": true
        //     },
        //     "styles": {
        //       "product": {
        //         "@media (min-width: 601px)": {
        //           "max-width": "100%",
        //           "margin-left": "0px",
        //           "margin-bottom": "0px"
        //         }
        //       },
        //       "button": {
        //         "font-family": "Roboto, sans-serif",
        //         "font-weight": "bold",
        //         "font-size": "16px",
        //         "padding-top": "16px",
        //         "padding-bottom": "16px",
        //         ":hover": {
        //           "background-color": "#c82920"
        //         },
        //         "background-color": "#de2e24",
        //         ":focus": {
        //           "background-color": "#c82920"
        //         },
        //         "border-radius": "10px",
        //         "padding-left": "47px",
        //         "padding-right": "47px"
        //       },
        //       "quantityInput": {
        //         "font-size": "16px",
        //         "padding-top": "16px",
        //         "padding-bottom": "16px"
        //       }
        //     },
        //     "googleFonts": [
        //       "Roboto"
        //     ],
        //     "text": {
        //       "button": "Add to cart"
        //     }
        //   },
        //   "option": {},
        //   "cart": {
        //     "styles": {
        //       "button": {
        //         "font-family": "Roboto, sans-serif",
        //         "font-weight": "bold",
        //         "font-size": "16px",
        //         "padding-top": "16px",
        //         "padding-bottom": "16px",
        //         ":hover": {
        //           "background-color": "#c82920"
        //         },
        //         "background-color": "#de2e24",
        //         ":focus": {
        //           "background-color": "#c82920"
        //         },
        //         "border-radius": "10px"
        //       }
        //     },
        //     "text": {
        //       "total": "Subtotal",
        //       "button": "Checkout"
        //     },
        //     "googleFonts": [
        //       "Roboto"
        //     ]
        //   },
        //   "toggle": {
        //     "styles": {
        //       "toggle": {
        //         "font-family": "Roboto, sans-serif",
        //         "font-weight": "bold",
        //         "background-color": "#de2e24",
        //         ":hover": {
        //           "background-color": "#c82920"
        //         },
        //         ":focus": {
        //           "background-color": "#c82920"
        //         }
        //       },
        //       "count": {
        //         "font-size": "16px"
        //       }
        //     },
        //     "googleFonts": [
        //       "Roboto"
        //     ]
        //   }
        // },
        //       });
        //     });
        //   }
        // })();
        // /*]]>*/
        </script> 
      </div> -->
    </footer>
    <!-- <div class="form-messages form-messages-success other-font">
      <p>Thank you, your message has been sent!<br> We will email back shortly!<br>(Please check your spam folder if you don't hear from us!)</p>
  </div> -->
    <?php
        if($_GET['success'] == 1){
            echo "<div class=\"form-messages form-messages-success other-font success-send \">
            <p>Received, thank you!</p>
        </div>";}
        if($_GET['success'] == -1){
            echo "<div class=\"form-messages other-font form-messages-error\">
            <p>Oops! Please check you email address and try again.</p> 
        </div>";}
        ?>
        
  </body>
</html>
