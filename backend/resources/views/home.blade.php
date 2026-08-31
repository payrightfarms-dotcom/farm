@php
    use Illuminate\Support\Str;
    $heroBackgroundUrl = config('services.cloudinary.hero_background_url');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Payright Farms – Premium Quality Chickens, Processed Fresh & Frozen</title>
  <meta name="description" content="Discover Payright Farms - premium quality chickens raised naturally and processed in our state-of-the-art Slaughter House. Browse our products, order online, and get farm-fresh or frozen chicken delivered with care." />
  <meta name="keywords" content="chicken farm, poultry farm, slaughter house, processed chicken, frozen chicken, payright farms, farm fresh, chicken wings, chicken delivery" />
  <meta name="author" content="Payright Farms" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.payrightfarms.com/" />
  <meta property="og:title" content="Payright Farms – Premium Quality Chickens, Processed Fresh & Frozen" />
  <meta property="og:description" content="Discover Payright Farms - premium quality chickens raised naturally and processed in our Slaughter House. Browse products and place orders online." />
  <meta property="og:image" content="{{ asset('assets/logo2.png') }}" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://www.payrightfarms.com/" />
  <meta property="twitter:title" content="Payright Farms – Premium Quality Chickens, Processed Fresh & Frozen" />
  <meta property="twitter:description" content="Discover Payright Farms - premium quality chickens raised naturally and processed in our Slaughter House." />
  <meta property="twitter:image" content="{{ asset('assets/logo2.png') }}" />

  <!-- Canonical URL -->
  <link rel="canonical" href="https://www.payrightfarms.com/" />

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/logo2.png') }}" type="image/png" />
  <link rel="stylesheet" href="{{ asset('styles.css') }}?v=14" />
</head>
<body>
  <header class="af-header">
    <div class="af-container af-header-inner">
      <div class="af-logo-wrap">
        <svg class="af-logo" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="width: 54px; height: 54px; fill: none; stroke: var(--af-gold); stroke-width: 4; stroke-linecap: round; stroke-linejoin: round; background: var(--af-white); border: 1px solid var(--af-line); border-radius: 14px; padding: 6px; box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);">
          <path d="M50 15 C35 25, 25 45, 25 60 C25 75, 35 85, 50 85 C65 85, 75 75, 75 60 C75 45, 65 25, 50 15 Z" fill="#eaf2e8" />
          <circle cx="50" cy="50" r="12" fill="var(--af-gold)" />
          <path d="M45 42 Q50 35 55 42" stroke="var(--af-brown)" stroke-width="3" />
          <path d="M50 12 V22M12 50 H22M88 50 H78M50 88 V78" stroke="var(--af-brown)" stroke-width="2" />
        </svg>
        <div class="af-logo-text">
          <span class="af-logo-name">Payright Farms</span>
          <span class="af-logo-tagline">Farm Fresh, Processed Right</span>
        </div>
      </div>

      <nav class="af-nav">
        <a href="#home">Home</a>
        <a href="#featured">Best Sellers</a>
        <a href="#menu">Products</a>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
        <a href="#order" class="af-btn af-btn-outline">Order Now</a>
      </nav>

      <button class="af-nav-toggle" id="navToggle" aria-label="Toggle navigation">
        ☰
      </button>
    </div>
  </header>

  <main>
    <section id="home" class="af-hero" style="--af-hero-bg: url('{{ e($heroBackgroundUrl) }}');">
      <div class="af-hero-gradient"></div>
      <div class="af-container af-hero-inner">
        <div class="af-hero-content">
          <p class="af-kicker">Payright Farms</p>
          <h1>Premium poultry raised naturally and processed for perfection.</h1>
          <p class="af-lead">
            From day-old chicks to our state-of-the-art Slaughter House, we raise and process chickens with strict hygienic standards. Sold fresh or frozen, and priced for families and wholesalers.
          </p>
          <div class="af-hero-actions">
            <a href="#menu" class="af-btn af-btn-primary">View Products</a>
            <a href="#order" class="af-btn af-btn-ghost">Order Now</a>
          </div>
          <div class="af-hero-metrics">
            <div>
              <strong>100%</strong>
              <span>Naturally raised birds</span>
            </div>
            <div>
              <strong>Slaughter House</strong>
              <span>Hygienic machine-processed</span>
            </div>
            <div>
              <strong>Trusted</strong>
              <span>By families &amp; wholesalers</span>
            </div>
          </div>
        </div>

        <div class="af-hero-visual">
          <svg class="af-hero-logo" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="width: 180px; height: 180px; fill: none; stroke: var(--af-gold); stroke-width: 4; stroke-linecap: round; stroke-linejoin: round; background: var(--af-white); border: 1px solid var(--af-line); border-radius: 24px; padding: 20px; box-shadow: 0 18px 46px rgba(0, 0, 0, 0.12);">
            <path d="M50 15 C35 25, 25 45, 25 60 C25 75, 35 85, 50 85 C65 85, 75 75, 75 60 C75 45, 65 25, 50 15 Z" fill="#eaf2e8" />
            <circle cx="50" cy="50" r="12" fill="var(--af-gold)" />
            <path d="M45 42 Q50 35 55 42" stroke="var(--af-brown)" stroke-width="3" />
            <path d="M50 12 V22M12 50 H22M88 50 H78M50 88 V78" stroke="var(--af-brown)" stroke-width="2" />
          </svg>
          <div class="af-floating-note">
            <span>Opening hours</span>
            <strong data-business-hours-summary>Mon–Sat 8am - 10pm</strong>
            <small><span data-business-hours-sunday>Sun 12noon - 10pm</span> · Farm Pickup · Delivery · Wholesale</small>
          </div>
        </div>
      </div>
    </section>

    <section class="af-section" id="featured">
      <div class="af-container">
        <div class="af-section-head">
          <p class="af-kicker">Our Best Sellers</p>
          <h2>Quality products our customers trust.</h2>
          <p>Carefully raised chickens, processed under strict hygienic standards.</p>
        </div>

        <div class="af-grid af-grid-3 af-cards" id="featuredGrid">
          @forelse ($featured as $item)
            @php
              $isSoldOut = $item->is_sold_out || $item->stock === 0;
              $stockUnit = trim((string) $item->stock_unit);
              $stockLabel = $item->stock === null
                ? null
                : ($stockUnit !== ''
                  ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' left'
                  : $item->stock.' left');
            @endphp
            <article
              class="af-card"
              data-menu-item
              data-item-id="{{ $item->id }}"
              data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
              data-stock="{{ $item->stock ?? '' }}"
              data-stock-unit="{{ $item->stock_unit ?? '' }}"
              data-category="{{ Str::slug(optional($item->category)->name ?? 'menu') }}"
            >
              @if($item->image_url)
                <img
                  src="{{ $item->image_url }}"
                  alt="{{ $item->name }}"
                  class="af-card-img"
                  loading="lazy"
                  decoding="async"
                />
              @endif
              <div class="af-card-body">
                <div class="af-card-top">
                  <h3>{{ $item->name }}</h3>
                  <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                    <span class="af-tag">{{ optional($item->category)->name ?? 'Signature' }}</span>
                    @if($stockLabel)
                      <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                    @endif
                  </div>
                </div>
                <p>{{ $item->description ?? 'Freshly processed farm chicken.' }}</p>
                <div class="af-card-footer">
                  <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                  <button
                    class="af-btn af-btn-sm af-btn-primary"
                    data-item="{{ $item->name }}"
                    data-item-id="{{ $item->id }}"
                    data-item-price="{{ $item->price }}"
                    data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                    data-stock="{{ $item->stock ?? '' }}"
                    data-stock-unit="{{ $item->stock_unit ?? '' }}"
                    @if($isSoldOut) disabled @endif
                  >
                    {{ $isSoldOut ? 'Sold Out' : 'Add to Cart' }}
                  </button>
                </div>
              </div>
            </article>
          @empty
            <p style="text-align:center; width:100%;">No products featured yet. Check back soon.</p>
          @endforelse
        </div>
      </div>
    </section>

    <section class="af-section af-section-alt" id="menu">
      <div class="af-container">
        <div class="af-section-head">
          <p class="af-kicker">Our Catalog</p>
          <h2>Healthy poultry, fresh and frozen cuts.</h2>
          <p>Select from our range of live birds, freshly dressed whole chickens, and cut parts.</p>
        </div>

          <div class="af-menu-panel">
          <div class="af-menu-filters" id="menuFilters">
            <button class="af-chip af-chip-active" data-filter="all">All</button>
            @foreach ($categories as $category)
              <button class="af-chip" data-filter="{{ Str::slug($category->name) }}">{{ $category->name }}</button>
            @endforeach
          </div>

          <div class="af-grid af-grid-3" id="menuGrid">
            @forelse ($menuItems as $item)
              @php
                  $catSlug = Str::slug(optional($item->category)->name ?? 'menu');
                  $isSoldOut = $item->is_sold_out || $item->stock === 0;
                  $stockUnit = trim((string) $item->stock_unit);
                  $stockLabel = $item->stock === null
                    ? null
                    : ($stockUnit !== ''
                      ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' left'
                      : $item->stock.' left');
              @endphp
              <article
                class="af-menu-item"
                data-menu-item
                data-item-id="{{ $item->id }}"
                data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                data-stock="{{ $item->stock ?? '' }}"
                data-stock-unit="{{ $item->stock_unit ?? '' }}"
                data-category="{{ $catSlug }}"
              >
                @if($item->image_url)
                  <div class="af-menu-thumb">
                    <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" decoding="async">
                  </div>
                @endif
                <div class="af-menu-body">
                  <div class="af-menu-head">
                    <h3>{{ $item->name }}</h3>
                    <div style="display:flex;gap:8px;align-items:center;flex-wrap:wrap;">
                      <span class="af-pill">{{ optional($item->category)->name ?? 'Menu' }}</span>
                      @if($stockLabel)
                        <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                      @endif
                    </div>
                  </div>
                  <p>{{ $item->description ?? 'Freshly processed farm chicken.' }}</p>
                  <div class="af-menu-footer">
                    <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                    <button
                      class="af-btn af-btn-sm af-btn-outline"
                      data-item="{{ $item->name }}"
                      data-item-id="{{ $item->id }}"
                      data-item-price="{{ $item->price }}"
                      data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                      data-stock="{{ $item->stock ?? '' }}"
                      data-stock-unit="{{ $item->stock_unit ?? '' }}"
                      @if($isSoldOut) disabled @endif
                    >
                      {{ $isSoldOut ? 'Sold Out' : 'Add to Cart' }}
                    </button>
                  </div>
                </div>
              </article>
            @empty
              <p style="text-align:center; width:100%;">Products are coming soon. Please check back.</p>
            @endforelse
          </div>
        </div>
      </div>
    </section>

    <section class="af-section" id="order">
      <div class="af-container af-order-placeholder">
        <div class="af-order-prompt">
          <p class="af-kicker">Checkout</p>
          <h2>Open the cart to review and pay</h2>
          <p>Tap the cart button to see your order summary and complete checkout in the overlay.</p>
          <button class="af-btn af-btn-primary" type="button" id="orderPromptBtn">Open Cart</button>
        </div>
      </div>
    </section>

    <section class="af-section af-section-alt" id="about">
      <div class="af-container af-about">
        <div class="af-about-copy">
          <div class="af-about-header">
            <p class="af-kicker">Our Story</p>
            <span class="af-about-badge">Rooted in grace</span>
          </div>
          <h2>Farm-fresh poultry raised with care.</h2>
          <p>
            Payright Farms was born from a simple belief that everyone deserves access to healthy,
            naturally raised, and hygienically processed poultry. We watched the local market struggle
            to find clean, healthy chickens that were affordable, and we decided to build a farm that
            prioritizes quality and consumer health.
          </p>
          <p>
            We raised our coops and invested in a state-of-the-art Slaughter House to process our birds
            under strict sanitary conditions before selling or freezing them. At Payright Farms, we provide
            more than poultry; we provide trust, hygiene, and a commitment to affordable organic standards.
            At the heart of it all, we honor the grace of God, believing that our work and the lives we touch
            are guided by His goodness. Payright Farms is our way of sharing that blessing with our community.
          </p>
          <div class="af-about-pills">
            <span>Naturally Raised</span>
            <span>Hygienically Processed</span>
            <span>Everyday Affordability</span>
            <span>Guided by Grace</span>
          </div>
          <div class="af-about-signoff">
            <span class="af-script">With gratitude,</span>
            <strong>Team Payright Farms</strong>
          </div>
        </div>
        <div class="af-about-panel">
          <div class="af-about-card">
            <div class="af-about-card-head">
              <span class="af-about-pill">Our Promise</span>
              <p>Every bird is raised naturally and processed hygienically for your table.</p>
            </div>
            <ul class="af-about-checklist">
              <li>Premium feed and natural growing environments.</li>
              <li>Hygienic machine-processing at our Slaughter House.</li>
              <li>Fair pricing for retail and wholesale buyers.</li>
              <li>Guided by God's grace in how we work and serve.</li>
            </ul>
          </div>
          <div class="af-about-stats">
            <div>
              <strong>10+</strong>
              <span>Years of farming experience</span>
            </div>
            <div>
              <strong>Fresh</strong>
              <span>Poultry processed daily</span>
            </div>
            <div>
              <strong>Community</strong>
              <span>We give back every month</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="af-section" id="contact">
      <div class="af-container af-contact">
        <div class="af-contact-card">
          <p class="af-kicker">Visit Us</p>
          <h2>We would love to host you.</h2>
          <p>Visit our farm, order custom cuts, or call ahead and we'll have it ready for pickup or delivery.</p>
          <div class="af-contact-grid">
            <div>
              <strong>Phone</strong>
              <p><a href="tel:08023135085">+234 802 313 5085</a></p>
            </div>
            <div>
              <strong>Email</strong>
              <p><a href="mailto:support@payrightfarms.com">support@payrightfarms.com</a></p>
            </div>
            <div>
              <strong>Address</strong>
              <p>
                <strong>SARS ROAD</strong><br>
                Immediately after the SARS Police Station you will see a Smart Home Office.
              </p>
            </div>
            <div>
              <strong>Hours</strong>
              <p><span data-business-hours-weekday>Mon. – Sat.: 8am - 10pm</span><br /><span data-business-hours-sunday>Sun.: 12noon - 10pm</span></p>
            </div>
          </div>
        </div>
        <div class="af-contact-cta">
          <h3>Stay Connected</h3>
          <p>Follow us for farm updates, wholesale prices, and chicken drops.</p>
          <div class="af-socials" aria-label="Social media links">
            <a class="af-social-link" href="#" target="_blank" rel="noopener noreferrer" aria-label="Follow Payright Farms on Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                <circle cx="12" cy="12" r="4"></circle>
                <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none"></circle>
              </svg>
            </a>
            <a class="af-social-link" href="#" target="_blank" rel="noopener noreferrer" aria-label="Follow Payright Farms on TikTok">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M16.75 3c.34 2.16 1.58 3.54 3.75 3.75v3.21a7.12 7.12 0 0 1-3.75-1.1v5.95c0 3.15-2.12 5.19-5.23 5.19-2.88 0-5.02-2.02-5.02-4.72 0-2.83 2.22-4.81 5.32-4.81.29 0 .56.02.82.06v3.31a3.2 3.2 0 0 0-.82-.11c-1.17 0-1.93.6-1.93 1.55 0 .9.7 1.52 1.68 1.52 1.1 0 1.82-.67 1.82-2.01V3h3.36Z"></path>
              </svg>
            </a>
          </div>
          <a href="#order" class="af-btn af-btn-primary">Order Fresh Chicken</a>
        </div>
      </div>
    </section>
  </main>

  <button class="af-cart-fab" id="cartFab" type="button" aria-label="View cart and checkout">
    <span class="af-cart-fab-icon">Order</span>
    <span class="af-cart-fab-count" id="cartCount">0</span>
  </button>

  <div class="af-cart-overlay" id="cartOverlay" aria-hidden="true">
    <div class="af-cart-overlay-backdrop" id="cartOverlayBackdrop"></div>
    <div class="af-cart-overlay-card">
      <button class="af-cart-overlay-close" id="cartOverlayClose" aria-label="Close cart overlay">
        ×
      </button>
      <div class="af-cart-overlay-head">
        <p class="af-kicker">Your Order</p>
        <h3>Review and checkout</h3>
        <p>Confirm your selection, service option, and preferred time.</p>
      </div>

      <div class="af-cart-overlay-body">
        <div class="af-cart-overlay-list">
          <ul id="cartListOverlay" class="af-cart-list"></ul>
          <div class="af-cart-summary">
            <span>Total</span>
            <strong id="cartTotalOverlay">₦0</strong>
          </div>
        </div>
        <div class="af-cart-overlay-form">
          <form id="checkoutFormOverlay">
            <label>
              Full Name
              <input type="text" name="name" required />
            </label>

            <label>
              Phone Number
              <input type="tel" name="phone" required />
            </label>

            <label>
              Order Type
              <select name="service" required>
                <option value="Farm Pickup">Farm Pickup</option>
                <option value="Delivery">Home Delivery</option>
                <option value="Wholesale">Wholesale Supply</option>
              </select>
            </label>

            <label>
              Preferred Time
              <input type="text" name="time" placeholder="e.g., Morning (10 AM)" required />
            </label>

            <label>
              Order Note (optional)
              <textarea name="note" rows="2"></textarea>
            </label>

            <div class="af-payment-options">
              <button
                type="button"
                class="af-btn af-btn-primary"
                id="whatsappBtnOverlay"
                data-whatsapp-btn
                data-form="checkoutFormOverlay"
              >
                Complete Order via WhatsApp
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="af-footer">
    <div class="af-container">
      <span>© <span id="year"></span> Payright Farms. Farm Fresh, Processed Right.</span>
    </div>
  </footer>

  <script src="{{ asset('script.js') }}?v=35" defer></script>
</body>
</html>
