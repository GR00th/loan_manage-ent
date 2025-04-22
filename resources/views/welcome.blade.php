<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Preload critical fonts -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Hind:wght@600&family=Open+Sans:wght@400;600&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hind:wght@600&family=Open+Sans:wght@400;600&display=swap" media="print" onload="this.media='all'">
    
    <!-- Preload critical CSS -->
    <link rel="preload" href="{{ asset('landingPage/css/style.css') }}" as="style">
    <link href="{{ asset('landingPage/css/style.css') }}" rel="stylesheet" />

    <title>{{ config('app.name') }}</title>

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:description" content="Lendfy is a loan management software that helps lenders automate workflows, reduce manual work, and launch new products with ease." />
    <meta property="og:image" content="{{ asset('logo.PNG') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="en_US" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="LendFy Loan Management" />
    <meta name="twitter:title" content="{{ config('app.name') }}" />
    <meta name="twitter:description" content="Lendfy is a loan management software that helps lenders automate workflows, reduce manual work, and launch new products with ease." />
    <meta name="twitter:image" content="{{ asset('logo.PNG') }}" />
    <meta name="twitter:url" content="{{ url()->current() }}" />
    <meta name="twitter:site" content="" />

    <!-- LinkedIn Enhancements -->
    <meta name="linkedin:owner" content="" />
    <meta name="linkedin:card" content="LendFy Loan Management" />
</head>

=======
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css2?family=Hind:wght@600&family=Open+Sans:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link href="./css/style.css" rel="stylesheet" />

    <title>LENDIFY::HOME</title>
  </head>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
  <body>
    <header class="header">
      <div class="container">
        <div class="header__wrapper">
          <a class="c-link" href="#">
            <div class="c-logo">
<<<<<<< HEAD
              <img src="{{ asset('logo.jpg') }}" alt="Logo" class="c-logo__img" style="border-radius:100%" loading="eager" />
=======
              <img src="img/logo.png" alt="Logo" class="c-logo__img" />
              <span class="c-logo__text c-logo__text--white">Login</span>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </div>
          </a>
          <nav class="c-nav">
            <input id="dropdown" class="c-nav__toggle" type="checkbox" />
            <div class="c-nav__content">
              <ul class="c-list c-list--flex">
                <li class="c-list__item">
<<<<<<< HEAD
                  <a href="#pricing" class="c-link c-link--list">Pricing</a>
                </li>
                <li class="c-list__item">
                  <a href="#services" class="c-link c-link--list">Services</a>
                </li>
              </ul>
              <a href="{{ 'admin/register' }}" class="c-button c-button--primary" style="color:white; text-decoration:none;">Sign Up</a>
=======
                  <a href="#" class="c-link c-link--list">Pricing</a>
                </li>
                <li class="c-list__item">
                  <a href="#" class="c-link c-link--list">Services</a>
                </li>
              </ul>
              <button class="c-button c-button--small c-button--secondary">
                Sign Up
              </button>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </div>
          </nav>
        </div>
      </div>
    </header>
<<<<<<< HEAD
<style> 
.c-hero__button-group {
  position: relative;
  z-index: 100; /* Ensure it stays above other elements */
}

.c-button {
  position: relative;
  touch-action: manipulation; /* Improves touch responsiveness */
  -webkit-tap-highlight-color: rgba(0,0,0,0.1); /* Visual feedback on tap */
}

/* Mobile-specific fixes */
@media (max-width: 768px) {
  .c-hero__button-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px; /* Replaces the <br> with better spacing */
  }
  
  .c-button {
    width: 100%;
    max-width: 200px; /* Limits width but keeps buttons sizable */
  }
}
</style>
=======

>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
    <main>
      <section class="section">
        <div class="c-hero">
          <div class="container">
            <div class="c-hero__content">
              <h1 class="heading heading--1 heading--light">
<<<<<<< HEAD
                Grow Your Lending Business. Ditch the Spreadsheets
=======
                Grow Your Lending Business.
                Ditch the Spreadsheets
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </h1>
              <h4 class="heading heading--4 heading--blue">
                Lendfy is a loan management software that helps lenders automate workflows, reduce manual work, and launch new products with ease.
              </h4>
              <div class="c-hero__button-group">
<<<<<<< HEAD
  <a href="{{ 'admin/login' }}" 
     class="c-button c-button--primary" 
     style="color:white; text-decoration:none; display: inline-block; min-width: 120px; min-height: 44px; padding: 12px 24px; margin: 8px 0;">
     Login
  </a>
  <a href="{{ 'admin/register' }}" 
     class="c-button c-button--secondary" 
     style="color:white; text-decoration:none; display: inline-block; min-width: 120px; min-height: 44px; padding: 12px 24px; margin: 8px 0;">
     Sign Up
  </a>
</div>
=======
                <button class="c-button c-button--primary">
                Login
                </button>
                <button class="c-button c-button--secondary">Sign Up</button>
              </div>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </div>

            <div class="c-hero__img-holder">
              <img
                class="c-hero__img"
<<<<<<< HEAD
                src="{{ asset('landingPage/img/dashboard2.PNG') }}"
                alt="Dashboard"
                loading="lazy"
=======
                src="img/dashboard.png"
                alt="Dashboard"
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              />
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="section__title-wrapper">
<<<<<<< HEAD
            <h2 class="heading heading--2">Fully Automated</h2>
=======
            <h2 class="heading heading--2">
              Fully Automated
            </h2>

>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            <h4 class="heading heading--4">
              Send personalized loan offers, agreements, and payment reminders via email or SMS. Predefined templates automate outreach, ensuring customers stay informed without adding to your workload.
            </h4>
          </div>

          <div class="box box--flex">
            <article class="c-card">
              <div class="c-card__content">
                <h3 class="c-card__title heading heading--3">
                  Seamless collaboration
                </h3>
                <p class="c-paragraph c-card__text">
                  Lendfy was built with ease of use in mind. Take a look at the user interface for LendFy and you will be sure to understand where the difference lies.
                </p>
              </div>
              <div class="c-card__img-holder">
<<<<<<< HEAD
                <img class="c-card__img" src="{{ asset('landingPage/img/card-1.png') }}" alt="" loading="lazy" />
=======
                <img class="c-card__img" src="img/card-1.png" alt="" />
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </div>
            </article>

            <article class="c-card">
              <div class="c-card__content">
                <h3 class="c-card__title heading heading--3">
                  Live Updates
                </h3>
                <p class="c-paragraph c-card__text">
                  Give customers instant reports to the status of their loan details, repayment schedules, and application statuses through <a href="https://swift-sms.net">Bulk SMS</a> Portal 
                </p>
              </div>
<<<<<<< HEAD
              <div class="c-card__img-holder">
                <img class="c-card__img" src="{{ asset('landingPage/img/card-2.png') }}" alt="" loading="lazy" />
=======

              <div class="c-card__img-holder">
                <img class="c-card__img" src="img/card-2.png" alt="" />
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </div>
            </article>

            <article class="c-card">
              <div class="c-card__content">
                <h3 class="c-card__title heading heading--3">
<<<<<<< HEAD
                  Flexibility
=======
                 Flexibility
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
                </h3>
                <p class="c-paragraph c-card__text">
                  Pre-configured loan agreement templates, settlements, and workflows are available to simplify loan management and ensure efficient operations.
                </p>
              </div>
<<<<<<< HEAD
              <div class="c-card__img-holder">
                <img class="c-card__img" src="{{ asset('landingPage/img/card-3.png') }}" alt="" loading="lazy" />
=======

              <div class="c-card__img-holder">
                <img class="c-card__img" src="img/card-3.png" alt="" />
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </div>
            </article>
          </div>
        </div>
      </section>

<<<<<<< HEAD
      <section class="section features" id="services">
=======
      <section class="section features">
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
        <div class="container">
          <div class="box box--grid">
            <article class="c-feature">
              <div class="c-feature__img-holder">
<<<<<<< HEAD
                <img class="c-feature__img" src="{{ asset('landingPage/img/feature-1.png') }}" alt="" loading="lazy" />
=======
                <img class="c-feature__img" src="img/feature-1.png" alt="" />
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </div>
              <div class="c-feature__content">
                <h3 class="c-feature__title heading heading--3">
                  Robust workflow
                </h3>
                <p class="c-paragraph c-feature__text">
                  LendFy, with its built-in CRM also comes with built-in accounting service tools like expense management to better manage your business.
                </p>
              </div>
            </article>

            <article class="c-feature">
              <div class="c-feature__img-holder">
<<<<<<< HEAD
                <img class="c-feature__img" src="{{ asset('landingPage/img/feature-2.png') }}" alt="" loading="lazy" />
              </div>
              <div class="c-feature__content">
                <h3 class="c-feature__title heading heading--3">
                  Cloud Based
=======
                <img class="c-feature__img" src="img/feature-2.png" alt="" />
              </div>
              <div class="c-feature__content">
                <h3 class="c-feature__title heading heading--3">
                Cloud Based
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
                </h3>
                <p class="c-paragraph c-feature__text">
                  LendFy is a cloud-based hosted service. There is no need for you to have a website, servers or configure databases to start using our system.
                </p>
              </div>
            </article>

            <article class="c-feature">
              <div class="c-feature__img-holder">
<<<<<<< HEAD
                <img class="c-feature__img" src="{{ asset('landingPage/img/feature-3.png') }}" alt="" loading="lazy" />
=======
                <img class="c-feature__img" src="img/feature-3.png" alt="" />
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </div>
              <div class="c-feature__content">
                <h3 class="c-feature__title heading heading--3">
                  Scalability
                </h3>
                <p class="c-paragraph c-feature__text">
<<<<<<< HEAD
                  If your business has a website you can integrate it with LendFy to receive applications over API. Alternatively, if you don't have a website we can always help you build one.
=======
                 If your business has a website you can integrate it with LendFy to receive applications over API. Alternatively, if you don’t have a website we can always help you build one.
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
                </p>
              </div>
            </article>
          </div>

<<<<<<< HEAD
         
        </div>
      </section>

      <section class="section" id="pricing">
        <div class="container">
          <div class="section__title-wrapper">
            <h2 class="heading heading--2">Simple pricing</h2>
=======
          <div class="box box--flex box--mt2">
            <button class="c-button c-button--primary">
             Get Started
            </button>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="section__title-wrapper">
            <h2 class="heading heading--2">Simple pricing</h2>

>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            <h4 class="heading heading--4">
              LendFy is a SAAS platform and our pricing model is based on your growth. It starts from $20 per month and increases as your business grows.
            </h4>
          </div>

          <div class="box box--grid box--gap2">
            <article class="c-price">
              <div class="c-price__header">
                <div class="c-price__amount">
                  <h3 class="c-price__amount--title heading heading--3">
                    <span class="c-price__amount--secondary">$</span>
                    <span class="c-price__amount--primary">20</span>
                    <span class="c-price__amount--secondary">/m</span>
                  </h3>
                </div>
                <p class="c-paragraph c-price__text">
<<<<<<< HEAD
                  You can cancel or change your plan at any time
=======
                You can cancel or change your plan at any time
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
                </p>
                <h5 class="heading heading--4 c-price__title">
                  What's included
                </h5>
              </div>
              <ul class="c-list">
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">Unlimited Users</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">1000 Loans Max</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">All other features Included</div>
                </li>
<<<<<<< HEAD
              </ul>
             
=======
                
              </ul>
              <button
                class="c-button c-button--secondary c-button--block c-price__button"
              >
                Get Started
              </button>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </article>

            <article class="c-price c-price--highlight">
              <div class="c-price__header">
                <div class="c-price__amount">
                  <h3 class="c-price__amount--title heading heading--3">
                    <span class="c-price__amount--secondary">$</span>
                    <span class="c-price__amount--primary">54</span>
                    <span class="c-price__amount--secondary">/m</span>
                  </h3>
                </div>
                <p class="c-paragraph c-price__text">
                  You can cancel or change your plan at any time.
                </p>
                <h5 class="heading heading--4 c-price__title">
                  What's included
                </h5>
              </div>
              <ul class="c-list">
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">Unlimited Users</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">10,000 Loans Max</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">All other features Included</div>
                </li>
<<<<<<< HEAD
              </ul>
             
=======
               
              </ul>
              <button
                class="c-button c-button--primary c-button--block c-price__button"
              >
          Get Started
              </button>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </article>

            <article class="c-price">
              <div class="c-price__header">
                <div class="c-price__amount">
                  <h3 class="c-price__amount--title heading heading--3">
                    <span class="c-price__amount--secondary">$</span>
                    <span class="c-price__amount--primary">120</span>
                    <span class="c-price__amount--secondary">/m</span>
                  </h3>
                </div>
                <p class="c-paragraph c-price__text">
                  You can cancel or change your plan at any time.
                </p>
                <h5 class="heading heading--4 c-price__title">
                  What's included
                </h5>
              </div>
              <ul class="c-list">
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">Unlimited Users</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">Unlimited Loans</div>
                </li>
                <li class="c-list__item c-price__list-item">
                  <div class="c-list__icon c-list__icon--check"></div>
                  <div class="c-list__text">All other features Included</div>
                </li>
<<<<<<< HEAD
              </ul>
             
=======
              
              </ul>
              <button
                class="c-button c-button--secondary c-button--block c-price__button"
              >
               Get Started
              </button>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </article>
          </div>
        </div>
      </section>

      <section class="section banner">
        <div class="container">
          <div class="c-banner">
            <h2 class="heading heading--2 c-banner__title">
              Request a Meeting
            </h2>
<<<<<<< HEAD
            <a href="#" class="c-button c-button--primary">Request now</a>
=======
            <button class="c-button c-button--primary">Request now</button>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="c-footer">
          <div class="c-footer__box">
            <a class="c-link" href="#">
              <div class="c-logo">
<<<<<<< HEAD
                <img src="{{ asset('logo.jpg') }}" alt="Logo" class="c-logo__img" style="border-radius:100%" />
                <!-- <span class="c-logo__text c-logo__text--white">Login</span> -->
              </div>
            </a>
            <p class="c-paragraph c-footer__text">
              © <?php echo date('Y'); ?> all rights reserved
=======
                <img src="img/logo.png" alt="Logo" class="c-logo__img" />
                <span class="c-logo__text c-logo__text--white">Login</span>
              </div>
            </a>
            <p class="c-paragraph c-footer__text">
              © 2025 Apply, all rights reserved
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
            </p>
          </div>
          <div class="c-footer__box">
            <div class="c-footer__icons">
              <a href="#">
<<<<<<< HEAD
                <img class="c-footer__icon" src="{{ asset('landingPage/img/instagram.svg') }}" alt="Instagram" />
              </a>
              <a href="#">
                <img class="c-footer__icon" src="{{ asset('landingPage/img/twitter.svg') }}" alt="Twitter" />
              </a>
              <a href="#">
                <img class="c-footer__icon" src="{{ asset('landingPage/img/facebook.svg') }}" alt="Facebook" />
              </a>
            </div>
            <ul class="c-list c-list--flex c-list--align-right">
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right">Contact</a>
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right">About us</a>
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right">FAQ</a>
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right">Support</a>
=======
                <img
                  class="c-footer__icon"
                  src="img/instagram.svg"
                  alt="Instagram"
              /></a>
              <a href="#">
                <img
                  class="c-footer__icon"
                  src="img/twitter.svg"
                  alt="Twitter"
                />
              </a>
              <a href="#">
                <img
                  class="c-footer__icon"
                  src="img/facebook.svg"
                  alt="Facebook"
              /></a>
            </div>
            <ul class="c-list c-list--flex c-list--align-right">
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right"
                  >Contact</a
                >
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right"
                  >About us</a
                >
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right"
                  >FAQ</a
                >
              </li>
              <li class="c-list__item c-list__item--small">
                <a href="#" class="c-link c-link--list c-link--list-right"
                  >Support</a
                >
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 835038c2e68d061091e2e27633b00e9a18feeed0
