@php
    use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Payright Farms – Poultry Distributor & Processing Facility</title>
  <meta name="description" content="Payright Farms is a commercial poultry farm and processing facility offering live broilers, dressed whole chickens, and cut parts at wholesale and retail prices." />
  <meta name="keywords" content="poultry farm, chicken distributor, live broilers, dressed chicken, wholesale chicken, payright farms" />
  <meta name="author" content="Payright Farms" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.payrightfarms.com/" />
  <meta property="og:title" content="Payright Farms – Poultry Distributor & Processing Facility" />
  <meta property="og:description" content="Live birds, freshly dressed whole chickens, and cut parts. Farm gate, delivery, and wholesale contracts available." />
  <meta property="og:image" content="{{ asset('assets/logo2.png') }}" />
  <link rel="canonical" href="https://www.payrightfarms.com/" />
  <link rel="icon" href="{{ asset('assets/logo2.png') }}" type="image/png" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles.css') }}?v=18" />
</head>
<body>

  <header class="af-header">
    <div class="af-container af-header-inner">
      <div class="af-logo-wrap">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="width: 42px; height: 42px; fill: none; stroke: var(--af-green-dark); stroke-width: 5; stroke-linecap: round; stroke-linejoin: round; background: var(--af-white); border: 1px solid var(--af-border); border-radius: 10px; padding: 4px;">
          <path d="M50 15 C35 25, 25 45, 25 60 C25 75, 35 85, 50 85 C65 85, 75 75, 75 60 C75 45, 65 25, 50 15 Z" fill="var(--af-green-light)" />
          <circle cx="50" cy="50" r="12" fill="var(--af-green-sage)" />
          <path d="M45 42 Q50 35 55 42" stroke="#fff" stroke-width="3" />
          <path d="M50 12 V22M12 50 H22M88 50 H78M50 88 V78" stroke="var(--af-green-dark)" stroke-width="2" />
        </svg>
        <div class="af-logo-text">
          <span class="af-logo-name">Payright Farms</span>
          <span class="af-logo-tagline">Poultry Distributor & Processing</span>
        </div>
      </div>

      <nav class="af-nav">
        <a href="#home">Overview</a>
        <a href="#inventory">Inventory</a>
        <a href="#process">Process</a>
        <a href="#about">Standards</a>
        <a href="#contact">Contact</a>
        <a href="#booking" class="af-btn af-btn-sm af-btn-outline" style="margin-left: 0.5rem;">Place Inquiry</a>
      </nav>

      <button class="af-nav-toggle" id="navToggle" aria-label="Toggle navigation">☰</button>
    </div>
  </header>

  <main>
    {{-- ================ HERO ================ --}}
    <section id="home" class="af-hero">

      {{-- Full-bleed chicken farm background image --}}
      <div class="af-hero-bg" aria-hidden="true">
        <img
          src="https://d1xchyov513y0i.cloudfront.net/wp-content/uploads/2024/01/31194844/16_5132_02_N81_webmd-800x534.jpg"
          alt="Large modern poultry processing factory with stainless steel conveyor equipment"
          loading="eager"
          decoding="async"
          fetchpriority="high"
          onerror="this.hidden=true"
        />
      </div>

      {{-- Dark gradient overlay --}}
      <div class="af-hero-overlay" aria-hidden="true"></div>

      {{-- Hero content --}}
      <div class="af-hero-inner">
        <div class="af-hero-content">
          <p class="af-kicker">Payright Farms — Direct-from-Farm Poultry Supply</p>
          <h1>Healthy birds, clean processing, dependable chicken supply.</h1>
          <p class="af-lead">
            We raise and process broiler chickens with practical farm controls: good feed, clean housing, careful handling, chilled storage, and clear stock updates for families, restaurants, retailers, and wholesale buyers.
          </p>
          <div class="af-hero-actions">
            <a href="#inventory" class="af-btn af-btn-primary">View Stock Sheet</a>
            <a href="#contact" class="af-btn af-btn-ghost">Get in Touch</a>
          </div>

          <div class="af-hero-metrics">
            <div>
              <strong>Live Birds</strong>
              <span>Broilers and layers available</span>
            </div>
            <div>
              <strong>Clean Processing</strong>
              <span>Dressed whole birds and cuts</span>
            </div>
            <div>
              <strong>Cold Handling</strong>
              <span>Fresh or blast-frozen supply</span>
            </div>
          </div>

          <div class="af-floating-note">
            <span>Operations Schedule</span>
            <strong data-business-hours-summary>Mon–Sat 8am – 10pm</strong>
            <small><span data-business-hours-sunday>Sun 12noon – 10pm</span> · Farm gate pickup · Delivery · Wholesale contracts</small>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ HIGHLIGHTS ================ --}}
    <section class="af-highlights-section">
      <div class="af-container">
        <div class="af-highlights-grid">
          @php
            $highlights = [
              ['icon' => '01', 'label' => 'Live Broilers & Layers', 'sub' => 'Healthy farm-raised birds'],
              ['icon' => '02', 'label' => 'Same-Day Dressing', 'sub' => 'Clean scalding, defeathering, and evisceration'],
              ['icon' => '03',  'label' => 'Fresh & Blast Frozen', 'sub' => 'Chilled handling for better shelf life'],
              ['icon' => '04', 'label' => 'Farm Gate & Delivery', 'sub' => 'Retail orders and wholesale contracts'],
            ];
          @endphp
          @foreach($highlights as $h)
            <div class="af-highlight-card">
              <span class="af-highlight-icon">{{ $h['icon'] }}</span>
              <div class="af-highlight-info">
                <strong>{{ $h['label'] }}</strong>
                <span>{{ $h['sub'] }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ================ FARM PROCESS ================ --}}
    <section class="af-section af-process-section" id="process">
      <div class="af-container af-process">
        <div class="af-process-copy">
          <p class="af-kicker">How We Supply Chicken</p>
          <h2>Built around the decisions poultry buyers actually make.</h2>
          <p>
            Chicken buyers need confidence before they place volume orders: bird health, slaughter cleanliness, weight consistency, storage condition, and collection timing. The public site now explains those points clearly instead of only showing a price list.
          </p>
          <div class="af-process-photo">
            <img
              src="https://encyclopediaofalabama.org/wp-content/uploads/2023/04/Broiler-Chicken-House-1.jpg"
              alt="Large broiler chicken house with feeding and watering lines"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
          </div>
        </div>
        <div class="af-process-grid">
          <div class="af-process-step">
            <span>Breed & Rear</span>
            <strong>Feed, water, housing, and flock observation</strong>
            <p>Birds are monitored for growth, activity, and general health before they are released for sale or processing.</p>
          </div>
          <div class="af-process-step">
            <span>Process Cleanly</span>
            <strong>Controlled slaughter-house workflow</strong>
            <p>Orders move through slaughter, scalding, defeathering, dressing, rinsing, and portioning with separation between dirty and clean handling stages.</p>
          </div>
          <div class="af-process-step">
            <span>Pack & Chill</span>
            <strong>Fresh dispatch or blast-frozen holding</strong>
            <p>Products are prepared for farm-gate pickup, restaurant use, retail display, frozen storage, or scheduled delivery.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ FARM GALLERY ================ --}}
    <section class="af-gallery-section" aria-label="Farm and processing gallery">
      <div class="af-container af-gallery-grid">
        <figure class="af-gallery-main">
          <img
            src="https://landgefluegel.de/wp-content/uploads/2023/03/2007-1-2048x1360.jpg"
            alt="Poultry processing production line with workers and conveyor belts"
            loading="lazy"
            decoding="async"
            onerror="this.hidden=true"
          />
          <figcaption>
            <strong>Processing capacity</strong>
            <span>Organized line flow from dressing to packing.</span>
          </figcaption>
        </figure>
        <figure>
          <img
            src="https://www.iam.gov.mo/foodsafety/file?p=foodsafetyinfo%2FList21%2F121_08b8ce6846a035635fe30b358265d6e2.jpg"
            alt="Fresh chicken trays being sealed by gloved food-handling staff"
            loading="lazy"
            decoding="async"
            onerror="this.hidden=true"
          />
          <figcaption>
            <strong>Packaged for sale</strong>
            <span>Clean handling for retail and kitchen use.</span>
          </figcaption>
        </figure>
      </div>
    </section>


    {{-- ================ FEATURED STOCK ================ --}}
    <section class="af-section" id="featured">
      <div class="af-container">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem; flex-wrap:wrap; gap:1rem;">
          <div>
            <p class="af-kicker">Featured Products</p>
            <h2 style="font-size:2rem; margin:0;">Top-selling inventory items</h2>
          </div>
          <a href="#inventory" class="af-btn af-btn-ghost af-btn-sm">View Full Stock Sheet →</a>
        </div>

        <div class="af-stock-table-wrapper" id="featuredGrid">
          <table class="af-stock-table">
            <thead>
              <tr>
                <th style="width:40%">Product</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Unit Price</th>
                <th style="text-align:right;">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($featured as $item)
                @php
                  $isSoldOut = $item->is_sold_out || $item->stock === 0;
                  $stockUnit = trim((string) $item->stock_unit);
                  $stockLabel = $item->stock === null
                    ? 'In Stock'
                    : ($stockUnit !== ''
                      ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' available'
                      : $item->stock.' available');
                @endphp
                <tr
                  data-menu-item
                  data-item-id="{{ $item->id }}"
                  data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                  data-stock="{{ $item->stock ?? '' }}"
                  data-stock-unit="{{ $item->stock_unit ?? '' }}"
                  data-category="{{ Str::slug(optional($item->category)->name ?? 'general') }}"
                >
                  <td data-label="Product">
                    <div class="af-table-product">
                      @if($item->image_url)
                        <div class="af-table-thumb">
                          <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                        </div>
                      @endif
                      <div class="af-table-product-info">
                        <h3>{{ $item->name }}</h3>
                        <p class="af-spec-text">{{ Str::limit($item->description, 80) }}</p>
                      </div>
                    </div>
                  </td>
                  <td data-label="Category">
                    <span class="af-spec-badge">{{ optional($item->category)->name ?? 'General' }}</span>
                  </td>
                  <td data-label="Stock">
                    @if($isSoldOut)
                      <span class="af-stock-pill af-stock-pill-empty">Out of Stock</span>
                    @else
                      <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                    @endif
                  </td>
                  <td data-label="Unit Price">
                    <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                  </td>
                  <td data-label="Action" style="text-align:right;">
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
                      {{ $isSoldOut ? 'Out of Stock' : 'Add to Inquiry' }}
                    </button>
                  </td>
                </tr>
              @empty
                <tr><td colspan="5" style="text-align:center; padding:3rem; color:var(--af-ink-soft);">No featured products at this time.</td></tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </section>

    {{-- ================ FULL STOCK SHEET ================ --}}
    <section class="af-section af-section-alt" id="inventory">
      <div class="af-container">
        <div style="display:flex; justify-content:space-between; align-items:flex-end; margin-bottom:2.5rem; flex-wrap:wrap; gap:1rem;">
          <div>
            <p class="af-kicker">Live Inventory</p>
            <h2 style="font-size:2rem; margin:0;">Full Stock & Price Sheet</h2>
            <p style="margin-top:0.5rem; margin-bottom:0;">Live product availability, processing format, and farm-gate pricing.</p>
          </div>
        </div>

        <div class="af-menu-panel">
          <div class="af-menu-filters" id="menuFilters">
            <button class="af-chip af-chip-active" data-filter="all">All Categories</button>
            @foreach ($categories as $category)
              <button class="af-chip" data-filter="{{ Str::slug($category->name) }}">{{ $category->name }}</button>
            @endforeach
          </div>

          <div class="af-stock-table-wrapper" id="menuGrid">
            <table class="af-stock-table">
              <thead>
                <tr>
                  <th style="width:38%">Product & Description</th>
                  <th>Processing Type</th>
                  <th>Availability</th>
                  <th>Unit Price</th>
                  <th style="text-align:right;">Inquiry</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($menuItems as $item)
                  @php
                    $catSlug = Str::slug(optional($item->category)->name ?? 'general');
                    $isSoldOut = $item->is_sold_out || $item->stock === 0;
                    $stockUnit = trim((string) $item->stock_unit);
                    $stockLabel = $item->stock === null
                      ? 'In Stock'
                      : ($stockUnit !== ''
                        ? $item->stock.' '.($item->stock == 1 ? rtrim($stockUnit, 's') : (Str::endsWith($stockUnit, 's') ? $stockUnit : $stockUnit.'s')).' available'
                        : $item->stock.' available');
                  @endphp
                  <tr
                    class="af-menu-item"
                    data-menu-item
                    data-item-id="{{ $item->id }}"
                    data-sold-out="{{ $isSoldOut ? '1' : '0' }}"
                    data-stock="{{ $item->stock ?? '' }}"
                    data-stock-unit="{{ $item->stock_unit ?? '' }}"
                    data-category="{{ $catSlug }}"
                  >
                    <td data-label="Product">
                      <div class="af-table-product">
                        @if($item->image_url)
                          <div class="af-table-thumb">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy" decoding="async" />
                          </div>
                        @endif
                        <div class="af-table-product-info">
                          <h3>{{ $item->name }}</h3>
                          <p class="af-spec-text">{{ Str::limit($item->description, 90) }}</p>
                        </div>
                      </div>
                    </td>
                    <td data-label="Category">
                      <span class="af-spec-badge">{{ optional($item->category)->name ?? 'General' }}</span>
                    </td>
                    <td data-label="Availability">
                      @if($isSoldOut)
                        <span class="af-stock-pill af-stock-pill-empty" data-stock-pill>Out of Stock</span>
                      @else
                        <span class="af-stock-pill" data-stock-pill>{{ $stockLabel }}</span>
                      @endif
                    </td>
                    <td data-label="Unit Price">
                      <span class="af-price">₦{{ number_format($item->price, 0) }}</span>
                    </td>
                    <td data-label="Inquiry" style="text-align:right;">
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
                        {{ $isSoldOut ? 'Out of Stock' : 'Add to Inquiry' }}
                      </button>
                    </td>
                  </tr>
                @empty
                  <tr><td colspan="5" style="text-align:center; padding:3rem; color:var(--af-ink-soft);">No inventory available at this time.</td></tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ BOOKING PROMPT ================ --}}
    <section class="af-section" id="booking">
      <div class="af-container af-order-placeholder">
        <div class="af-order-prompt">
          <p class="af-kicker">Booking Sheet</p>
          <h2>Submit a procurement inquiry with the details we need.</h2>
          <p style="max-width:560px; margin:0 auto 2rem;">Add products to your inquiry sheet, then send your contact name, quantity, pickup or delivery choice, preferred date, and any cut-size or packaging notes.</p>
          <div class="af-order-checks" aria-label="Inquiry details">
            <span>Quantity</span>
            <span>Pickup or delivery</span>
            <span>Fresh or frozen</span>
            <span>Custom cuts</span>
          </div>
          <button class="af-btn af-btn-primary" type="button" id="orderPromptBtn" style="min-width: 220px;">Open Booking Sheet</button>
        </div>
      </div>
    </section>

    {{-- ================ ABOUT ================ --}}
    <section class="af-section af-section-alt" id="about">
      <div class="af-container af-about">
        <div class="af-about-copy">
          <div class="af-about-header">
            <p class="af-kicker">About Payright Farms</p>
            <span class="af-about-badge">Guided by grace</span>
          </div>
          <h2>A commercial poultry facility built on practical hygiene and integrity.</h2>
          <p>
            Payright Farms is a poultry operation covering rearing, live bird sales, slaughter-house processing, and distribution to retail and wholesale buyers. We identified a gap in the local market for affordable, hygienically processed chicken and built a facility to close it.
          </p>
          <p>
            Our birds are raised with attention to feed, water, ventilation, stocking density, and handling. At the slaughter house, birds are processed with a clean workflow and moved into chilled storage or dispatch. We supply fresh and blast-frozen products to households, restaurants, food vendors, retailers, and commercial buyers.
          </p>
          <div class="af-about-pills">
            <span>Live Bird Supply</span>
            <span>On-site Processing</span>
            <span>Retail & Wholesale</span>
            <span>Farm Gate Pickup</span>
            <span>Refrigerated Delivery</span>
          </div>
          <div class="af-about-signoff">
            <span class="af-script">With gratitude,</span>
            <strong>Team Payright Farms</strong>
          </div>
        </div>
        <div class="af-about-panel">
          <div class="af-about-image">
            <img
              src="https://madar-export.com/storage/attachments/dsc-0844-1qwpt5uu-66f85df36bd8b.jpg"
              alt="Clean automated poultry processing facility with rails and stainless steel equipment"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
          </div>
          <div class="af-about-card">
            <span class="af-about-pill">Our Operating Standards</span>
            <p>Every product leaving the farm meets strict hygiene and traceability requirements.</p>
            <ul class="af-about-checklist">
              <li>Birds checked for size, activity, and general health before dispatch.</li>
              <li>Clean processing workflow from slaughter to rinsing and packaging.</li>
              <li>Chilled handling from processing to pickup or delivery.</li>
              <li>Wholesale contracts with volume planning and clear price updates.</li>
              <li>Operations guided by integrity and faith in God's grace.</li>
            </ul>
          </div>
          <div class="af-about-stats">
            <div>
              <strong>Daily</strong>
              <span>Fresh processing</span>
            </div>
            <div>
              <strong>B2B</strong>
              <span>Wholesale supply</span>
            </div>
            <div>
              <strong>10+</strong>
              <span>Years farming</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ BUYER GUIDE ================ --}}
    <section class="af-section af-buyer-section">
      <div class="af-container">
        <div class="af-buyer-head">
          <p class="af-kicker">Buyer Guide</p>
          <h2>Choose the supply format that fits your kitchen or business.</h2>
        </div>
        <div class="af-buyer-grid">
          <div class="af-buyer-card">
            <img
              src="https://encyclopediaofalabama.org/wp-content/uploads/2023/04/Broiler-Chicken-House-1.jpg"
              alt="Broiler chickens in a commercial poultry house"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Live Birds</strong>
            <p>Best for buyers who want to handle slaughter themselves or inspect birds before purchase.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://www.poultryworld.net/app/uploads/2021/04/001_328_IMG_gro408851-023.jpg"
              alt="Automated poultry processing line carrying dressed chickens"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Dressed Whole Chicken</strong>
            <p>Best for households, restaurants, and retailers that need clean, ready-to-cook birds.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://meglepetes.hu/uploads/2026/06/baromfi-1-1284x742.jpeg"
              alt="Chicken parts arranged in trays on a packaging conveyor"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Cut Parts</strong>
            <p>Best for food vendors and kitchens that need wings, laps, breast, gizzard, or mixed portions.</p>
          </div>
          <div class="af-buyer-card">
            <img
              src="https://www.irishtimes.com/resizer/v2/FLIYLTSF3JTNOYFI3PWMG2PSLA.jpg?auth=31f2e5b04966da09172ed22b5cc1b1b916270fa1017e06f515a366bb90fb879c&height=900&smart=true&width=1600"
              alt="Large chilled poultry processing hall with conveyors and packed products"
              loading="lazy"
              decoding="async"
              onerror="this.hidden=true"
            />
            <strong>Frozen Supply</strong>
            <p>Best for buyers managing stock over several days with planned storage and dispatch.</p>
          </div>
        </div>
      </div>
    </section>

    {{-- ================ CONTACT ================ --}}
    <section class="af-section" id="contact">
      <div class="af-container af-contact">
        <div class="af-contact-card">
          <p class="af-kicker">Get in Touch</p>
          <h2>Procurement & Distribution Inquiries</h2>
          <p>Contact us directly for live bird pricing, volume orders, custom processing requests, or distribution contracts.</p>
          <div class="af-contact-grid">
            <div>
              <strong>Phone / WhatsApp</strong>
              <p><a href="tel:08023135085" style="color:var(--af-green-dark);">+234 802 313 5085</a></p>
            </div>
            <div>
              <strong>Email</strong>
              <p><a href="mailto:support@payrightfarms.com" style="color:var(--af-green-dark);">support@payrightfarms.com</a></p>
            </div>
            <div>
              <strong>Farm Location</strong>
              <p>SARS Road, immediately after the SARS Police Station (Smart Home Office building).</p>
            </div>
            <div>
              <strong>Operating Hours</strong>
              <p><span data-business-hours-weekday>Mon. – Sat.: 8am – 10pm</span><br /><span data-business-hours-sunday>Sun.: 12noon – 10pm</span></p>
            </div>
          </div>
        </div>
        <div class="af-contact-cta">
          <h3>Follow the Farm</h3>
          <p>Stay updated on flock availability, processing schedules, and price adjustments.</p>
          <div class="af-socials" aria-label="Social media links">
            <a class="af-social-link" href="#" aria-label="Follow on Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                <circle cx="12" cy="12" r="4"></circle>
                <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none"></circle>
              </svg>
            </a>
            <a class="af-social-link" href="#" aria-label="Follow on TikTok">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M16.75 3c.34 2.16 1.58 3.54 3.75 3.75v3.21a7.12 7.12 0 0 1-3.75-1.1v5.95c0 3.15-2.12 5.19-5.23 5.19-2.88 0-5.02-2.02-5.02-4.72 0-2.83 2.22-4.81 5.32-4.81.29 0 .56.02.82.06v3.31a3.2 3.2 0 0 0-.82-.11c-1.17 0-1.93.6-1.93 1.55 0 .9.7 1.52 1.68 1.52 1.1 0 1.82-.67 1.82-2.01V3h3.36Z"></path>
              </svg>
            </a>
          </div>
          <a href="#booking" class="af-btn af-btn-primary">Submit Procurement Inquiry</a>
        </div>
      </div>
    </section>
  </main>

  {{-- ================ BOOKING FAB ================ --}}
  <button class="af-cart-fab" id="cartFab" type="button" aria-label="Open booking sheet">
    <span>Booking Sheet</span>
    <span class="af-cart-fab-count" id="cartCount">0</span>
  </button>

  {{-- ================ BOOKING SHEET DRAWER ================ --}}
  <div class="af-cart-overlay" id="cartOverlay" aria-hidden="true">
    <div class="af-cart-overlay-backdrop" id="cartOverlayBackdrop"></div>
    <div class="af-cart-overlay-card">
      <button class="af-cart-overlay-close" id="cartOverlayClose" aria-label="Close booking sheet">×</button>
      <div class="af-cart-overlay-head">
        <p class="af-kicker">Procurement</p>
        <h3>Your Booking Sheet</h3>
        <p style="margin:0; font-size:0.9rem;">Review selected products, then submit your inquiry via WhatsApp.</p>
      </div>
      <div class="af-cart-overlay-body">
        <div class="af-cart-overlay-list">
          <ul id="cartListOverlay" class="af-cart-list"></ul>
          <div class="af-cart-summary">
            <span>Estimated Total</span>
            <strong id="cartTotalOverlay">₦0</strong>
          </div>
        </div>
        <div class="af-cart-overlay-form">
          <form id="checkoutFormOverlay">
            <label>
              Business / Contact Name
              <input type="text" name="name" required placeholder="e.g. John's Frozen Foods Ltd" />
            </label>
            <label>
              Phone Number
              <input type="tel" name="phone" required placeholder="+234 800 000 0000" />
            </label>
            <label>
              Fulfillment Option
              <select name="service" required>
                <option value="Farm Gate Pickup">Farm Gate Pickup</option>
                <option value="Refrigerated Delivery">Refrigerated Delivery</option>
                <option value="Wholesale Contract">Wholesale Contract Inquiry</option>
              </select>
            </label>
            <label>
              Preferred Collection / Delivery Date
              <input type="text" name="time" placeholder="e.g. Wednesday morning" required />
            </label>
            <label>
              Additional Notes
              <textarea name="note" rows="2" placeholder="e.g. Custom cuts required, volume pricing, etc."></textarea>
            </label>
            <div class="af-payment-options">
              <button
                type="button"
                class="af-btn af-btn-primary"
                id="whatsappBtnOverlay"
                data-whatsapp-btn
                data-form="checkoutFormOverlay"
              >
                Submit Inquiry via WhatsApp
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer class="af-footer">
    <div class="af-container">
      <span>© <span id="year"></span> Payright Farms · Commercial Poultry Distributor & Processing Facility</span>
    </div>
  </footer>

  <script src="{{ asset('script.js') }}?v=38" defer></script>
</body>
</html>
